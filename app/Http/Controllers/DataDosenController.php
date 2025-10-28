<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DataDosenController extends Controller
{
    // index 
    public function index() //class
    {


        $dosen = Dosen::all();


        return view('datadosen.datadosen', compact('dosen'));
    }

    public function create()
    {
        return view('datadosen.create4');
    }

    public function store(Request $request)
    {

        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nidn' => 'required|string|max:20|unique:dosens,nidn',
            'jenis_kelamin' => 'required',
            'homebase' => 'required',
            'pendidikan' => 'required|string|max:100',
            'mata_kuliah_keahlian' => 'required|string|max:255',
            'jabatan_fungsional' => 'required|string|max:100',
        ]);
      


       Dosen::create($validatedData);
        return redirect()->route('datadosen.index')->with('success', 'Data dosen berhasil disimpan.');
    }

    public function show($id)
    {
        $dosens = Dosen::findOrFail($id);
        return view('datadosen.show', compact('dosens'));
    }

    public function edit($id)
    {
        $dosens = Dosen::findOrFail($id);
        return view('datadosen.edit4', compact('dosens'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nidn' => 'required|string|max:20|unique:dosens,nidn,' . $id,
            'jenis_kelamin' => 'required',
            'homebase' => 'required',
            'pendidikan' => 'required|string|max:100',
            'mata_kuliah_keahlian' => 'required|string|max:255',
            'jabatan_fungsional' => 'required|string|max:100',
        ]);

        // Temukan dosen berdasarkan ID dan perbarui datanya
        $dosen = Dosen::findOrFail($id);
        $dosen->update($validatedData);

        return redirect()->route('datadosen.index')->with('success', 'Data dosen berhasil diperbarui.');
    }

    public function destroy($id)
    {
        // Temukan dosen berdasarkan ID dan hapus datanya
        $dosen = Dosen::findOrFail($id);
        $dosen->delete();

        return redirect()->route('datadosen.index')->with('success', 'Data dosen berhasil dihapus.');
    }
}
