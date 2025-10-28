<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fakultas;

class DataFakultasController extends Controller
{
    public function index()
    {
        // Tampilkan semua data fakultas
        $fakultas = Fakultas::latest()-> get();
        return view('datafakultas.datafakultas', compact('fakultas'));
    }

    public function create()
    {
        return view('datafakultas.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'kode_fakultas' => 'required|unique:fakultas,kode_fakultas',
            'nama_fakultas' => 'required',
            'nama_dekan' => 'required',
            'nama_wakil_dekan' => 'required',
            'tahun_berdiri' => 'required|numeric',
        ]);

        // Simpan data fakultas baru ke database
        Fakultas::create([
            'kode_fakultas' => $request->kode_fakultas,
            'nama_fakultas' => $request->nama_fakultas,
            'nama_dekan' => $request->nama_dekan,
            'nama_wakil_dekan' => $request->nama_wakil_dekan,
            'tahun_berdiri' => $request->tahun_berdiri,
        ]);
        
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('datafakultas.index')->with('success', 'Data Fakultas berhasil disimpan!');
    }

    public function show($id)
    {
        // Tampilkan detail data fakultas tertentu
        $fakultas = Fakultas::findOrFail($id);
        return view('datafakultas.show', compact('fakultas'));
    }   

    public function edit($id)
    {
        // Tampilkan form edit untuk data fakultas tertentu
        $fakultas = Fakultas::findOrFail($id);
        return view('datafakultas.edit', compact('fakultas'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari form
        $request->validate([
            'kode_fakultas' => 'required|unique:fakultas,kode_fakultas,'.$id,
            'nama_fakultas' => 'required',
            'nama_dekan' => 'required',
            'nama_wakil_dekan' => 'required',
            'tahun_berdiri' => 'required|numeric',
        ]);

        // Update data fakultas di database
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->update([
            'kode_fakultas' => $request->kode_fakultas,
            'nama_fakultas' => $request->nama_fakultas,
            'nama_dekan' => $request->nama_dekan,
            'nama_wakil_dekan' => $request->nama_wakil_dekan,
            'tahun_berdiri' => $request->tahun_berdiri,
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('datafakultas.index')->with('success', 'Data Fakultas berhasil diperbarui!');
    }

    public function destroy($id)
    {
        // Hapus data fakultas dari database
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('datafakultas.index')->with('success', 'Data Fakultas berhasil dihapus!');
    }
}
