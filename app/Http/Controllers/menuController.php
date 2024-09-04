<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $tb_menu = Menu::all();
        return view('menu.menu', compact('tb_menu'));
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
        // Validasi input dari form
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'foto_menu' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi_menu' => 'required|string',
            'resep' => 'required|string',
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
        ]);

        return redirect()->route('menu.index')->with('success', 'Berhasil Menyimpan Data');
    }

    public function edit($id_menu)
    {
        $Menu = Menu::findOrFail($id_menu);

        return view('menu.menu_edit', compact('Menu'));
    }

    public function update(Request $request, $id_menu)
    {
        $request->validate([
            'nama_menu' => 'required|string|max:255',
            'foto_menu' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi_menu' => 'required|string',
            'resep' => 'required|string',
        ]);

        $Menu = Menu::findOrFail($id_menu);

        // Cek jika ada file foto yang baru diupload
        if ($request->hasFile('foto_menu')) {
            // Hapus foto lama jika ada
            if ($Menu->foto_menu) {
                Storage::disk('public')->delete($Menu->foto_menu);
            }

            // Simpan foto baru
            $fotoPath = $request->file('foto_menu')->store('menu', 'public');
        } else {
            $fotoPath = $Menu->foto_menu; // Jika tidak ada foto baru, simpan yang lama
        }

        // Update data ke database
        $Menu->update([
            'nama_menu' => $request->nama_menu,
            'foto_menu' => $fotoPath,
            'deskripsi_menu' => $request->deskripsi_menu,
            'resep' => $request->resep,
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

        return redirect()->route('menu.index')->with('success', 'Berhasil Menghapus Data');
    }

    public function showLandingPage()
    {
        // Assuming you want to show the first slider image in coba.blade.php
        $tb_menu = Landingpage::first();
        
        return view('dashboard', compact('tb_menu'));
    }
}
