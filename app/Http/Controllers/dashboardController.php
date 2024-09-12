<?php
    namespace App\Http\Controllers;

    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;

    class DashboardController extends Controller
    {
        public function index()
        {
            // Menghitung jumlah data dari tabel tb_menu, tb_produk, dan tb_pesan
            $menuCount = DB::table('tb_menu')->count();
            $produkCount = DB::table('tb_produk')->count();
            $pesanCount = DB::table('tb_pesan')->count();

            // Mengirimkan data ke view
            return view('dashboard_admin', compact('menuCount', 'produkCount', 'pesanCount'));
        }
    }
