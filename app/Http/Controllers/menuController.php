<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index(Request $request){
    $search = $request->input('search');

    // Jika ada pencarian, filter berdasarkan nama menu
    $tb_menu = Menu::when($search, function($query, $search) {
        return $query->where('nama_menu', 'like', '%' . $search . '%');
    })->paginate(5); // Batas 10 item per halaman

    return view('menu.menu', compact('tb_menu', 'search'));
    }


    public function create()
    {
        return view('menu.create_menu');

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        \Log::info($request->all());
        // Validasi input dari form
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'foto_menu' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi_menu' => 'nullable|required|string',
            'resep' => 'nullable|string',
            'langkah_pembuatan' => 'nullable|string',
        ]);

        // Proses upload foto
        if ($request->hasFile('foto_menu')) {
            $fotoPath = $request->file('foto_menu')->store('menu', 'public'); // Simpan ke direktori 'storage/app/public/menu'
        } else {
            $fotoPath = null; // Jika tidak ada file diupload, set null
        }

        // Simpan data ke database
        Menu::create([
            'nama_menu' => $request->nama_menu,
            'foto_menu' => $fotoPath, // Simpan path gambar yang sudah diupload
            'deskripsi_menu' => $request->deskripsi_menu,
            'resep' => $request->resep,
            'langkah_pembuatan' => $request->langkah_pembuatan,
        ]);

        return redirect()->route('menu.index')->with('success', 'Berhasil Menyimpan Data');
    }

    public function edit($id_menu)
{
    // Menemukan menu berdasarkan id_menu
    $menu = Menu::where('id_menu', $id_menu)->firstOrFail();

    // Mengirim data ke view
    return view('menu.edit_menu', compact('menu'));
}

public function update(Request $request, $id_menu)
{
    $request->validate([
        'nama_menu' => 'required|string|max:255',
        'foto_menu' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'deskripsi_menu' => 'required|string',
        'resep' => 'required|string',
        'langkah_pembuatan' => 'required|string',
    ]);

    $menu = Menu::where('id_menu', $id_menu)->firstOrFail();

    // Cek jika ada file foto yang baru diupload
    if ($request->hasFile('foto_menu')) {
        // Hapus foto lama jika ada
        if ($menu->foto_menu) {
            Storage::disk('public')->delete($menu->foto_menu);
        }

        // Simpan foto baru
        $fotoPath = $request->file('foto_menu')->store('menu', 'public');
    } else {
        $fotoPath = $menu->foto_menu; // Jika tidak ada foto baru, simpan yang lama
    }

    // Update data ke database
    $menu->update([
        'nama_menu' => $request->nama_menu,
        'foto_menu' => $fotoPath,
        'deskripsi_menu' => $request->deskripsi_menu,
        'resep' => $request->resep,
        'langkah_pembuatan' => $request->langkah_pembuatan,
    ]);

    return redirect()->route('menu.index')->with('success', 'Berhasil Mengupdate Data');
}
    public function destroy($id_menu)
    {
        $Menu = Menu::findOrFail($id_menu);

        // Hapus foto dari storage jika ada
        if ($Menu->foto_menu) {
            Storage::disk('public')->delete($Menu->foto_menu);
        }

        // Hapus data dari database
        $Menu->delete();

        return redirect()->route('menu.index');
    }

    public function showLandingPage()
    {
        // Assuming you want to show the first slider image in coba.blade.php
        $tb_menu = Landingpage::first();
        
        return view('dashboard', compact('tb_menu'));
    }
    public function detail($id_menu)
{
    // Mengambil data menu berdasarkan id_menu
    $menu = Menu::findOrFail($id_menu);

    // Mengirim data produk ke view
    return view('menu.detail_menu', compact('menu'));
}

}
