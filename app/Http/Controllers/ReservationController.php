<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nama_pemesan' => 'required|string|max:100',
            'tanggal_reservasi' => 'required|date',
            'waktu_reservasi' => 'required|date_format:H:i',
            'jumlah_orang' => 'required|integer|min:1',
            'catatan_tambahan' => 'nullable|string',
        ]);

        // Simpan ke database
        DB::table('invoices')->insert([
            'id_reservasi' => time(), // ID reservasi unik (gunakan timestamp untuk contoh)
            'nama_pelanggan' => $validated['nama_pemesan'],
            'email' => 'dummy@example.com', // Email sementara, bisa diganti jika ada input email
            'nomor_meja' => null, // Nomor meja diisi nanti
            'tanggal_reservasi' => $validated['tanggal_reservasi'],
            'id_pesanan' => null, // ID pesanan diisi nanti
            'nama_menu' => null, // Nama menu diisi nanti
            'quantity' => null, // Quantity diisi nanti
            'subtotal' => null, // Subtotal diisi nanti
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect ke halaman berikutnya atau tampilkan pesan sukses
        return redirect()->back()->with('success', 'Reservasi berhasil disimpan!');
    }
}
