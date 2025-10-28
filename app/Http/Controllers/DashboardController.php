<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;
use App\Models\Prodi;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah data dari masing-masing tabel
        $jumlahFakultas = Fakultas::count();
        $jumlahProdi = Prodi::count();
        $jumlahDosen = Dosen::count();
        $jumlahMahasiswa = Mahasiswa::count();

        return view('welcome', compact(
            'jumlahFakultas',
            'jumlahProdi',
            'jumlahDosen',
            'jumlahMahasiswa'
        ));
    }
}

