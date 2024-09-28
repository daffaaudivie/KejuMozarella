<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Menu;
use App\Models\Pesan;

class DashboardController extends Controller
{
    public function index()
    {
        // Menghitung jumlah data di setiap tabel
        $totalProduk = Produk::count();
        $totalMenu = Menu::count();
        $totalPesan = Pesan::count();

        // Mengirim data ke view
        return view('dashboard_admin', compact('totalProduk', 'totalMenu', 'totalPesan'));
    }
}
