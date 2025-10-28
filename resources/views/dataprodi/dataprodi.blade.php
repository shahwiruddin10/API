@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">
            <i class="fas fa-fw fa-graduation-cap fa-fw text-primary me-2"></i> Data Prodi
        </h1>
        <a href="{{ route('dataprodi.create') }}" class="btn btn-primary btn-sm shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50 me-1"></i> Tambah Data Prodi
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Card -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-primary text-white fw-semibold rounded-top-4">
            Halaman ini digunakan untuk mengelola data program studi.
        </div>
        <div class="card-body">
            @if(count($prodis) > 0)
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Kode Prodi</th>
                            <th>Nama Prodi</th>
                            <th>Jenjang Prodi</th>
                            <th>Jumlah Mahasiswa</th>
                            <th>Jumlah Dosen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prodis as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_prodi }}</td>
                            <td>{{ $item->nama_prodi }}</td>
                            <td>
                                <span class="badge bg-info">{{ $item->jenjang_prodi }}</span>
                            </td>
                            <td>{{ $item->jumlah_mahasiswa }}</td>
                            <td>{{ $item->jumlah_dosen }}</td>
                            <td>
                                <a href="{{ route('dataprodi.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                                </a>
                                <form action="{{ route('dataprodi.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash fa-sm text-white-50"></i> Hapus
                                    </button>
                                </form>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-graduation-cap fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">Belum ada data prodi</h5>
                <p class="text-muted">Silakan tambahkan data prodi terlebih dahulu</p>
                    <a href="{{ route('dataprodi.create') }}" class="btn btn-primary">
                         <i class="fas fa-plus me-2"></i>Tambah Data
                    </a>
            </div>
        @endif
        </div>
    </div>

</div>

<!-- Custom Table Styling -->
<style>
    .table th {
        vertical-align: middle !important;
    }

    .table-hover tbody tr:hover {
        background-color: #f8f9fc;
        transition: 0.2s;
    }

    .card {
        border-radius: 1rem;
    }
</style>
@endsection
