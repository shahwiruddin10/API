@extends('layouts.app')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Mahasiswa</h1>
        <a href="{{ route('datamahasiswa.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
        </a>
    </div>

    <!-- Card Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary text-white">
            <h6 class="m-0 font-weight-bold">Formulir Input Data Mahasiswa</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- Nama Mahasiswa -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_mahasiswa" class="form-label fw-semibold">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama_mahasiswa" id="nama_mahasiswa"
                            placeholder="Masukkan Nama Mahasiswa" required>
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

                    <!-- NIM -->
                    <div class="col-md-6 mb-3">
                        <label for="nim" class="form-label fw-semibold">NIM</label>
                        <input type="text" class="form-control" name="nim" id="nim"
                            placeholder="Masukkan NIM" required>
                    </div>

                    <!-- Alamat -->
                    <div class="col-md-6 mb-3">
                        <label for="alamat" class="form-label fw-semibold">Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat"
                            placeholder="Masukkan Alamat" required>
                    </div>

                    <!-- Fakultas -->
                    <div class="col-md-6 mb-3">
                        <label for="fakultas" class="form-label fw-semibold">Fakultas</label>
                        <input type="text" class="form-control" name="fakultas" id="fakultas"
                            placeholder="Masukkan Fakultas" required>
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Masukkan Email Mahasiswa" required>
                    </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger me-2">
                        <i class="fas fa-undo"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
