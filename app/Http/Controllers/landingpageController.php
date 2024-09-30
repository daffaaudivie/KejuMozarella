<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landingpage;
use App\Models\Menu;
use App\Models\Produk;

class LandingpageController extends Controller
{
    public function index()
    {
        $tb_slider = Landingpage::all();
        return view('landingpage.landingpage', compact('tb_slider'));
    }

    public function create()
    {
        return view('landingpage.create_landingpage');
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto_slider' => 'required|image|max:2048',
        ]);

        if ($request->hasFile('foto_slider')) {
            $imagePath = $request->file('foto_slider')->store('sliders', 'public');

            Landingpage::create([
                'foto_slider' => $imagePath,
            ]);

            return redirect()->route('landingpage.index')->with('success', 'Berhasil Menyimpan Data');
        }

        return back()->withErrors('Gagal mengunggah gambar.');
    }

    public function edit($id)
    {
        $landingpage = Landingpage::findOrFail($id);
        return view('landingpage.edit_landingpage', compact('landingpage'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'foto_slider' => 'nullable|image|max:2048',
        ]);

        $landingpage = Landingpage::findOrFail($id);

        if ($request->hasFile('foto_slider')) {
            $imagePath = $request->file('foto_slider')->store('sliders', 'public');
            $landingpage->update([
                'foto_slider' => $imagePath,
            ]);
        }

        return redirect()->route('landingpage.index')->with('success', 'Berhasil Mengupdate Data');
    }

    public function destroy($id)
    {
        $landingpage = Landingpage::findOrFail($id);
        $landingpage->delete();

        return redirect()->route('landingpage.index')->with('success', 'Berhasil Menghapus Data');
    }

    public function showLandingPage()
    {
    $tb_slider = Landingpage::first();
    $menus = Menu::take(8)->get();
    $produks = Produk::take(8)->get();
    
    // Definisikan variabel $produksi jika ingin tetap menggunakannya
    $produksi = Produk::all();  // Atau query lain yang sesuai dengan kebutuhan Anda

    return view('dashboard', compact('tb_slider', 'menus', 'produks', 'produksi'));  // Tambahkan 'produksi' di sini
    }


    public function detailMenu($id)
    {
        $menus = Menu::findOrFail($id);
        return view('detail', compact('menus'));
    }

    public function detailProduk($id_produk)
    {
        $produk = Produk::findOrFail($id_produk);
        return view('hasil', compact('produk'));
    }

    public function produksi()
    {
        $produksi = Produk::all();
        return view('produksi', compact('produksi'));
    }

    public function item()
    {
        $items = Menu::all();
        return view('kreasi', compact('items'));
    }

}

