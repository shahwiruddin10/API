<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prodi;

class DataProdiController extends Controller
{
    public function index()
    {
        // Tampilkan semua data prodi
        $prodis = Prodi::latest()-> get();
        return view('dataprodi.dataprodi', compact('prodis'));
    }

    public function create()
    {
        return view('dataprodi.create2');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'kode_prodi' => 'required|unique:prodis,kode_prodi',
            'nama_prodi' => 'required',
            'jenjang_prodi' => 'required',
            'jumlah_mahasiswa' => 'required|numeric',
            'jumlah_dosen' => 'required|numeric',
        ]);

        // Simpan ke database
        Prodi::create([
            'kode_prodi' => $request->kode_prodi,
            'nama_prodi' => $request->nama_prodi,
            'jenjang_prodi' => $request->jenjang_prodi,
            'jumlah_mahasiswa' => $request->jumlah_mahasiswa,
            'jumlah_dosen' => $request->jumlah_dosen,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('dataprodi.index')->with('success', 'Data berhasil disimpan!');
    }

    public function show($id)
    {
        // Tampilkan detail data prodi tertentu
        $prodis = Prodi::findOrFail($id);
        return view('dataprodi.show', compact('prodis'));
    }

    public function edit($id)
    {
        // Tampilkan form edit untuk data prodi tertentu
        $prodis = Prodi::findOrFail($id);
        return view('dataprodi.edit2', compact('prodis'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'kode_prodi' => 'required|unique:prodis,kode_prodi,'.$id,
            'nama_prodi' => 'required',
            'jenjang_prodi' => 'required',
            'jumlah_mahasiswa' => 'required|numeric',
            'jumlah_dosen' => 'required|numeric',
        ]);

        // Update data di database
        $prodis = Prodi::findOrFail($id);
        $prodis->update([
            'kode_prodi' => $request->kode_prodi,
            'nama_prodi' => $request->nama_prodi,
            'jenjang_prodi' => $request->jenjang_prodi,
            'jumlah_mahasiswa' => $request->jumlah_mahasiswa,
            'jumlah_dosen' => $request->jumlah_dosen,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('dataprodi.index')->with('success', 'Data berhasil diupdate!');
    }

    public function destroy($id)
    {
        // Hapus data prodi dari database
        $prodis = Prodi::findOrFail($id);
        $prodis->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('dataprodi.index')->with('success', 'Data Prodi berhasil dihapus!');
    }
}
