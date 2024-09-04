<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Kategori; // Pastikan Anda mengimpor model Kategori
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $tb_produk = Produk::all();
        $tb_kategori = Kategori::all();
        return view('produk.produk', compact('tb_produk', 'tb_kategori'));
    }

    public function create()
    {
        // Ambil data kategori dari tabel tb_kategori
        $tb_kategori = Kategori::all();
        return view('produk.create_produk', compact('tb_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        // dd($request->all());
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'foto_produk' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kode_kategori' => 'required|numeric',
            'deskripsi_produk' => 'required|string',
        ]);
        

        $id_kategori = intval($request->kode_kategori);

        // Proses upload foto
        if ($request->hasFile('foto_produk')) {
            $fotoPath = $request->file('foto_produk')->store('produk', 'public'); // Simpan ke direktori 'storage/app/public/produk'
        } else {
            $fotoPath = null; // Jika tidak ada file diupload, set null
        }

        // Simpan data ke database
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'foto_produk' => $fotoPath, // Simpan path gambar yang sudah diupload
            'kode_kategori' => $request->kode_kategori,
            'deskripsi_produk' => $request->deskripsi_produk,
        ]);

        return redirect()->route('produk.index')->with('success', 'Berhasil Menyimpan Data');
    }

    public function edit($id_produk)
    {
        $produk = Produk::findOrFail($id_produk);
        $tb_kategori = Kategori::all(); // Ambil data kategori untuk digunakan di view edit

        return view('produk.produk_edit', compact('produk', 'tb_kategori'));
    }

    public function update(Request $request, $id_produk)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'foto_produk' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi_produk' => 'required|',
            'kode_kategori' => 'required|exists:tb_kategori,id', // Pastikan kategori yang dipilih valid
        ]);

        $produk = Produk::findOrFail($id_produk);

        // Cek jika ada file foto yang baru diupload
        if ($request->hasFile('foto_produk')) {
            // Hapus foto lama jika ada
            if ($produk->foto_produk) {
                Storage::disk('public')->delete($produk->foto_produk);
            }

            // Simpan foto baru
            $fotoPath = $request->file('foto_produk')->store('produk', 'public');
        } else {
            $fotoPath = $produk->foto_produk; // Jika tidak ada foto baru, simpan yang lama
        }

        // Update data ke database
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'foto_produk' => $fotoPath,
            'deskripsi_produk' => $request->deskripsi_produk,
            'kode_kategori' => $request->kode_kategori,
        ]);

        return redirect()->route('produk.index')->with('success', 'Berhasil Mengupdate Data');
    }

    public function destroy($id_produk)
    {
        $produk = Produk::findOrFail($id_produk);

        // Hapus foto dari storage jika ada
        if ($produk->foto_produk) {
            Storage::disk('public')->delete($produk->foto_produk);
        }

        // Hapus data dari database
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Berhasil Menghapus Data');
    }

    public function showLandingPage()
    {
        // Assuming you want to show the first product in dashboard
        $tb_produk = Produk::first();
        
        return view('dashboard', compact('tb_produk'));
    }
}
