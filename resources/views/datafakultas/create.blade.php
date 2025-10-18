@extends('layouts.app')

@section('title', 'Tambah Data Fakultas')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Data Fakultas</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary text-white">
            <h6 class="m-0 font-weight-bold">Formulir Input Data Fakultas</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('fakultas.store') }}" method="POST">
                @csrf
                <div class="row">
                    <!-- ID Fakultas -->
                    <div class="col-md-6 mb-3">
                        <label for="id_fakultas" class="form-label fw-semibold">ID Fakultas</label>
                        <input type="text" class="form-control" name="id_fakultas" id="id_fakultas"
                            placeholder="Masukkan ID Fakultas" required>
                    </div>

                    <!-- Nama Fakultas -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_fakultas" class="form-label fw-semibold">Nama Fakultas</label>
                        <input type="text" class="form-control" name="nama_fakultas" id="nama_fakultas"
                            placeholder="Masukkan Nama Fakultas" required>
                    </div>

                    <!-- Nama Dekan -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_dekan" class="form-label fw-semibold">Nama Dekan</label>
                        <input type="text" class="form-control" name="nama_dekan" id="nama_dekan"
                            placeholder="Masukkan Nama Dekan" required>
                    </div>

                    <!-- Nama Wakil Dekan -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_wakil_dekan" class="form-label fw-semibold">Nama Wakil Dekan</label>
                        <input type="text" class="form-control" name="nama_wakil_dekan" id="nama_wakil_dekan"
                            placeholder="Masukkan Nama Wakil Dekan" required>
                    </div>

                    <!-- Tahun Berdiri -->
                    <div class="col-md-6 mb-4">
                        <label for="nama_tahun_berdiri" class="form-label fw-semibold">Tahun Berdiri</label>
                        <input type="number" class="form-control" name="nama_tahun_berdiri" id="nama_tahun_berdiri"
                            placeholder="Masukkan Tahun Berdiri" required>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-end">
                    <a href=".." class="btn btn-secondary me-2">
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
