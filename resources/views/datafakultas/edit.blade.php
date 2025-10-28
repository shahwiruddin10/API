@extends('layouts.app')

@section('title', 'Tambah Data Fakultas')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 text-gray-800 fw-bold">
            <i class="fas fa-university fa-fw text-primary me-2"></i> Edit Data Fakultas
        </h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3 bg-primary text-white">
            <h6 class="m-0 font-weight-bold">Formulir Input Data Fakultas</h6>
        </div>

        <div class="card-body">
            <form action="{{ route('datafakultas.update', $fakultas->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <!-- ID Fakultas -->
                    <div class="col-md-6 mb-3">
                        <label for="kode_fakultas" class="form-label fw-semibold">Kode Fakultas</label>
                        <input type="text" class="form-control @error('kode_fakultas') is-invalid @enderror" 
                                id="kode_fakultas" name="kode_fakultas" 
                                value="{{ old('kode_fakultas', $fakultas->kode_fakultas) }}" required>
                        @error('kode_fakultas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Nama Fakultas -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_fakultas" class="form-label fw-semibold">Nama Fakultas</label>
                        <input type="text" class="form-control @error('nama_fakultas') is-invalid @enderror" 
                                id="nama_fakultas" name="nama_fakultas" 
                                value="{{ old('nama_fakultas', $fakultas->nama_fakultas) }}" required>
                        @error('nama_fakultas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Nama Dekan -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_dekan" class="form-label fw-semibold">Nama Dekan</label>
                        <input type="text" class="form-control @error('nama_dekan') is-invalid @enderror" 
                                id="nama_dekan" name="nama_dekan" 
                                value="{{ old('nama_dekan', $fakultas->nama_dekan) }}" required>
                        @error('nama_dekan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Nama Wakil Dekan -->
                    <div class="col-md-6 mb-3">
                        <label for="nama_wakil_dekan" class="form-label fw-semibold">Nama Wakil Dekan</label>
                        <input type="text" class="form-control @error('nama_wakil_dekan') is-invalid @enderror" 
                                id="nama_wakil_dekan" name="nama_wakil_dekan" 
                                value="{{ old('nama_wakil_dekan', $fakultas->nama_wakil_dekan) }}" required>
                        @error('nama_wakil_dekan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <!-- Tahun Berdiri -->
                    <div class="col-md-6 mb-4">
                        <label for="tahun_berdiri" class="form-label fw-semibold">Tahun Berdiri</label>
                        <input type="number" class="form-control @error('tahun_berdiri') is-invalid @enderror" 
                                id="tahun_berdiri" name="tahun_berdiri" 
                                value="{{ old('tahun_berdiri', $fakultas->tahun_berdiri) }}" required>
                        @error('tahun_berdiri')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                <!-- Tombol Aksi -->
                <div class="d-flex justify-content-between mt-4">
                    <a href="{{ route('datafakultas.index') }}" class="btn btn-secondary me-2">
                        <i class="fas fa-arrow-left me-2"></i> Kembali
                    </a>
                    <button type="submit" class="btn btn-success">
                        <i class="fas fa-save me-2"></i> Edit Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
