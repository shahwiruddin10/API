@extends('layouts.app')

@section('title', 'Tambah Data Mahasiswa')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 text-gray-800">
            <i class="fas fa-users fa-fw text-primary"></i> Edit Data Mahasiswa
        </h1>
        <a href="{{ route('datamahasiswa.index') }}" class="btn btn-secondary btn-sm shadow-sm">
            <i class="fas fa-arrow-left fa-sm text-primary-50"></i> Kembali
        </a>
    </div>

    <!-- Card Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary text-white">
            <h6 class="m-0 font-weight-bold">Formulir Input Data Mahasiswa</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('datamahasiswa.update', $mahasiswas->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- Nama Mahasiswa -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_mahasiswa" class="form-label fw-semibold">Nama Mahasiswa</label>
                        <input type="text" class="form-control @error('nama_mahasiswa') is-invalid @enderror" 
                            name="nama_mahasiswa" id="nama_mahasiswa" 
                            placeholder="Masukkan Nama Mahasiswa" value="{{ old('nama_mahasiswa', $mahasiswas->nama_mahasiswa) }}" required>
                        @error('nama_mahasiswa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- NIM -->
                    <div class="col-md-6 mb-3">
                        <label for="nim" class="form-label fw-semibold">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror" 
                            name="nim" id="nim" 
                            placeholder="Masukkan NIM" value="{{ old('nim', $mahasiswas->nim) }}" required>
                        @error('nim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Alamat -->
                    <div class="col-md-6 mb-3">
                        <label for="alamat" class="form-label fw-semibold">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" 
                            name="alamat" id="alamat" 
                            placeholder="Masukkan Alamat" value="{{ old('alamat', $mahasiswas->alamat) }}" required>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Fakultas -->
                    <div class="col-md-6 mb-3">
                        <label for="fakultas" class="form-label fw-semibold">Fakultas</label>
                        <input type="text" class="form-control @error('fakultas') is-invalid @enderror" 
                            name="fakultas" id="fakultas" 
                            placeholder="Masukkan Fakultas" value="{{ old('fakultas', $mahasiswas->fakultas) }}" required>
                        @error('fakultas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label fw-semibold">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                            name="email" id="email" 
                            placeholder="Masukkan Email" value="{{ old('email', $mahasiswas->email) }}" required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end">
                    <button type="reset" class="btn btn-danger me-2">
                        <i class="fas fa-undo"></i> Reset
                    </button>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save"></i> Edit Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
