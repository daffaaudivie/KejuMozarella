<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan; // Pastikan model Pesan sudah dibuat

class PesanController extends Controller
{
    // Menampilkan semua pesan
    public function index()
    {
        $tb_pesan = Pesan::all(); // Ambil semua data pesan
        return view('pesan.pesan', compact('tb_pesan')); // Tampilkan view pesan.blade.php
    }

    // Menyimpan pesan baru
    public function store(Request $request)
{
    // Validasi input dari form pesan
    $request->validate([
        'kategori_pesan' => 'required|string|max:255',
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'nomor' => 'required|string|max:15',
        'nama_perusahaan' => 'nullable|string|max:255', // Tidak wajib diisi
        'pesan' => 'required|string',
    ]);

    // Simpan data pesan ke database
    Pesan::create($request->all());

    // Redirect kembali ke halaman dashboard dengan anchor menuju ke contact section
    return redirect()->to(url()->previous() . '#contact-section')->with('success', 'Pesan berhasil disimpan.');
}



    // Menampilkan form edit pesan
    public function edit($id_pesan)
    {
        $pesan = Pesan::findOrFail($id_pesan); // Cari data pesan berdasarkan ID
        return view('pesan.edit_pesan', compact('pesan')); // Tampilkan form edit pesan
    }

    // Mengupdate pesan yang ada
    public function update(Request $request, $id_pesan)
    {
        // Validasi input dari form edit pesan
        $request->validate([
            'kategori_pesan' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'nomor' => 'required|string|max:15',
            'nama_perusahaan' => 'nullable|string|max:255',
            'pesan' => 'required|string',
        ]);

        $pesan = Pesan::findOrFail($id_pesan);

        // Update data pesan di database
        $pesan->update($request->all());

        return redirect()->route('pesan.index')->with('success', 'Pesan berhasil diperbarui.');
    }

    // Menghapus pesan
    public function destroy($id_pesan)
    {
        $pesan = Pesan::findOrFail($id_pesan);

        // Hapus data pesan dari database
        $pesan->delete();

        return redirect()->route('pesan.index')->with('success', 'Pesan berhasil dihapus.');
    }
}
