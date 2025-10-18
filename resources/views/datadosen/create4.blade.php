@extends('layouts.app')

@section('title', 'Tambah Data Dosen')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Dosen</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary text-white">
            <h6 class="m-0 font-weight-bold">Formulir Input Data Dosen</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('dosen.store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- NIDN -->
                    <div class="col-md-6 mb-3">
                        <label for="nidn" class="form-label fw-semibold">NIDN</label>
                        <input type="text" class="form-control" name="nidn" id="nidn"
                            placeholder="Masukkan NIDN" required>
                    </div>

                    <!-- Nama Dosen -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_dosen" class="form-label fw-semibold">Nama Dosen</label>
                        <input type="text" class="form-control" name="nama_dosen" id="nama_dosen"
                            placeholder="Masukkan Nama Dosen" required>
                    </div>

                    <!-- Jenis Kelamin -->
                    <div class="col-md-6 mb-3">
                        <label for="jenis_kelamin" class="form-label fw-semibold">Jenis Kelamin</label>
                        <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                            <option value="">-- Pilih Jenis Kelamin --</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </div>

                    <!-- Home Base -->
                    <div class="col-md-6 mb-3">
                        <label for="home_base" class="form-label fw-semibold">Home Base</label>
                        <input type="text" class="form-control" name="home_base" id="home_base"
                            placeholder="Masukkan Home Base" required>
                    </div>

                    <!-- Pendidikan -->
                    <div class="col-md-6 mb-3">
                        <label for="pendidikan" class="form-label fw-semibold">Pendidikan</label>
                        <select class="form-control" name="pendidikan" id="pendidikan" required>
                            <option value="">-- Pilih Pendidikan Terakhir --</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>

                    <!-- Mata Kuliah Keahlian -->
                    <div class="col-md-6 mb-3">
                        <label for="mata_kuliah_keahlian" class="form-label fw-semibold">Mata Kuliah Keahlian</label>
                        <input type="text" class="form-control" name="mata_kuliah_keahlian" id="mata_kuliah_keahlian"
                            placeholder="Masukkan Mata Kuliah Keahlian" required>
                    </div>

                    <!-- Jabatan Fungsional -->
                    <div class="col-md-6 mb-4">
                        <label for="jabatan_fungsional" class="form-label fw-semibold">Jabatan Fungsional</label>
                        <input type="text" class="form-control" name="jabatan_fungsional" id="jabatan_fungsional"
                            placeholder="Masukkan Jabatan Fungsional" required>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end">
                    <a href="{{ route('datadosen.index') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
