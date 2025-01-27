<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil semua data pasien
        $pasien = Pasien::all();

        // Hitung jumlah pasien laki-laki dan perempuan
        $maleCount = Pasien::where('jenis_kelamin', 'Male')->count();
        $femaleCount = Pasien::where('jenis_kelamin', 'Female')->count();

        // Kirimkan data ke view dashboard
        return view('dashboard', compact('pasien', 'maleCount', 'femaleCount'));
    }
}
