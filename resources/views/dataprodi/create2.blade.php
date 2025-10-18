@extends('layouts.app')

@section('title', 'Tambah Data Prodi')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Prodi</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary text-white">
            <h6 class="m-0 font-weight-bold">Formulir Input Data Program Studi</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('prodi.store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Kode Prodi -->
                    <div class="col-md-6 mb-3">
                        <label for="kode_prodi" class="form-label fw-semibold">Kode Prodi</label>
                        <input type="text" class="form-control" name="kode_prodi" id="kode_prodi"
                            placeholder="Masukkan Kode Prodi" required>
                    </div>

                    <!-- Nama Prodi -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_prodi" class="form-label fw-semibold">Nama Prodi</label>
                        <input type="text" class="form-control" name="nama_prodi" id="nama_prodi"
                            placeholder="Masukkan Nama Prodi" required>
                    </div>

                    <!-- Jenjang Prodi -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_jenjang_prodi" class="form-label fw-semibold">Jenjang Prodi</label>
                        <select class="form-control" name="nama_jenjang_prodi" id="nama_jenjang_prodi" required>
                            <option value="">-- Pilih Jenjang Prodi --</option>
                            <option value="S1">S1</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S2">S2</option>
                            <option value="Profesi">Profesi</option>
                        </select>
                    </div>

                    <!-- Jumlah Mahasiswa -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_jumlah_mahasiswa" class="form-label fw-semibold">Jumlah Mahasiswa</label>
                        <input type="number" class="form-control" name="nama_jumlah_mahasiswa" id="nama_jumlah_mahasiswa"
                            placeholder="Masukkan Jumlah Mahasiswa" required>
                    </div>

                    <!-- Jumlah Dosen -->
                    <div class="col-md-6 mb-4">
                        <label for="nama_jumlah_dosen" class="form-label fw-semibold">Jumlah Dosen</label>
                        <input type="number" class="form-control" name="nama_jumlah_dosen" id="nama_jumlah_dosen"
                            placeholder="Masukkan Jumlah Dosen" required>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end">
                    <a href="..." class="btn btn-secondary me-2">
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
