<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Logika untuk mengambil data dari model atau sumber data lainnya
        $data = [
            'sales' => 1000, // Contoh: Total penjualan
            'user' => 500, // Contoh: Jumlah pengguna aktif
            // Tambahkan data lainnya sesuai kebutuhan
        ];

        return view('dashboard', $data); // Mengirimkan seluruh data ke tampilan
    }
}

