<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Landingpage;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tb_slider = Landingpage::all();
        return view('landingpage.landingpage', compact('tb_slider'));

    }

    public function create()
    {
        return view('landingpage.create_landingpage');
    }

    /**
     * Store a newly created resource in storage.
     */
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
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $landingpage = Landingpage::findOrFail($id);
        return view('landingpage.edit', compact('landingpage'));
    }

    /**
     * Update the specified resource in storage.
     */
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id_slider)
    {
        $landingpage = Landingpage::findOrFail($id_slider);
        $landingpage->delete(); 

        return redirect()->route('landingpage.index')->with('success', 'Berhasil Menghapus Data');
    }

    /**
     * Display the landing page view.
     */
    public function showLandingPage()
    {
        // Assuming you want to show the first slider image in coba.blade.php
        $tb_slider = Landingpage::first();

        return view('dashboard  ', compact('tb_slider'));
    }
}
