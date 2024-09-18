<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tentang;
use Illuminate\Support\Facades\Storage;

class TentangController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Jika ada pencarian, filter berdasarkan deskripsi
        $tb_tentang = Tentang::when($search, function($query, $search) {
            return $query->where('deskripsi', 'like', '%' . $search . '%');
        })->paginate(5); // Batas 5 item per halaman

        return view('tentang.tentang_admin', compact('tb_tentang', 'search'));
    }

    public function create()
    {
        return view('tentang.create_tentang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'deskripsi' => 'nullable|string',
            'foto_tentang' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Proses upload foto
        if ($request->hasFile('foto_tentang')) {
            $fotoPath = $request->file('foto_tentang')->store('tentang', 'public');
        } else {
            $fotoPath = null;
        }

        // Simpan data ke database
        Tentang::create([
            'deskripsi' => $request->deskripsi,
            'foto_tentang' => $fotoPath,
        ]);

        return redirect()->route('tentang_admin.index')->with('success', 'Berhasil Menyimpan Data');
    }

    public function edit($id_tentang)
    {
        // Menemukan tentang berdasarkan id_tentang
        $tentang = Tentang::where('id_tentang', $id_tentang)->firstOrFail();

        // Mengirim data ke view
        return view('tentang.edit_tentang', compact('tentang'));
    }

    public function update(Request $request, $id_tentang)
    {
        $request->validate([
            'deskripsi' => 'required|string',
            'foto_tentang' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $tentang = Tentang::where('id_tentang', $id_tentang)->firstOrFail();

        // Cek jika ada file foto yang baru diupload
        if ($request->hasFile('foto_tentang')) {
            // Hapus foto lama jika ada
            if ($tentang->foto_tentang) {
                Storage::disk('public')->delete($tentang->foto_tentang);
            }

            // Simpan foto baru
            $fotoPath = $request->file('foto_tentang')->store('tentang', 'public');
        } else {
            $fotoPath = $tentang->foto_tentang;
        }

        // Update data ke database
        $tentang->update([
            'deskripsi' => $request->deskripsi,
            'foto_tentang' => $fotoPath,
        ]);

        return redirect()->route('tentang_admin.index')->with('success', 'Berhasil Mengupdate Data');
    }

    public function destroy($id_tentang)
    {
        $tentang = Tentang::findOrFail($id_tentang);

        // Hapus foto dari storage jika ada
        if ($tentang->foto_tentang) {
            Storage::disk('public')->delete($tentang->foto_tentang);
        }

        // Hapus data dari database
        $tentang->delete();

        return redirect()->route('tentang_admin.index');
    }

    public function detail($id_tentang)
    {
        // Mengambil data tentang berdasarkan id_tentang
        $tentang = Tentang::findOrFail($id_tentang);

        // Mengirim data ke view
        return view('tentang.detail_tentang', compact('tentang'));
    }
}
