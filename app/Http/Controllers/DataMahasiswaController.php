<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class DataMahasiswaController extends Controller
{
    // index 
    public function index() //class
    {
        $mahasiswas = Mahasiswa::latest()->get();
        return view('datamahasiswa.datamahasiswa', compact('mahasiswas'));
    }

    public function create()
    {
        return view('datamahasiswa.create3');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswas,nim',
            'alamat' => 'nullable|string',
            'fakultas' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email',
        ]);

        // Simpan data ke database (asumsi model Mahasiswa sudah ada)
        Mahasiswa::create([
            'nama_mahasiswa' => $validatedData['nama_mahasiswa'],
            'nim' => $validatedData['nim'],
            'alamat' => $validatedData['alamat'],
            'fakultas' => $validatedData['fakultas'],
            'email' => $validatedData['email'],
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('datamahasiswa.index')->with('success', 'Data mahasiswa berhasil disimpan.');
    }

    public function show($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        return view('datamahasiswa.show', compact('mahasiswas'));
    }

    public function edit($id)
    {
        $mahasiswas = Mahasiswa::findOrFail($id);
        return view('datamahasiswa.edit3', compact('mahasiswas'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'nim' => 'required|string|max:20|unique:mahasiswas,nim,' . $id,
            'alamat' => 'nullable|string',
            'fakultas' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email,' . $id,
        ]);

        // Temukan data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Update data mahasiswa
        $mahasiswa->update([
            'nama_mahasiswa' => $validatedData['nama_mahasiswa'],
            'nim' => $validatedData['nim'],
            'alamat' => $validatedData['alamat'],
            'fakultas' => $validatedData['fakultas'],
            'email' => $validatedData['email'],
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('datamahasiswa.index')->with('success', 'Data mahasiswa berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan data mahasiswa berdasarkan ID
        $mahasiswa = Mahasiswa::findOrFail($id);

        // Hapus data mahasiswa
        $mahasiswa->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('datamahasiswa.index')->with('success', 'Data mahasiswa berhasil dihapus.');
    }
}
