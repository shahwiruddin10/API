@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 text-gray-800">
            <i class="fas fa-users fa-fw text-primary"></i> Data Mahasiswa
        </h1>
        <a href="{{ route('datamahasiswa.create') }}" class="btn btn-primary btn-sm shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Mahasiswa
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Card -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-primary text-white fw-semibold rounded-top-4">
            Halaman ini digunakan untuk mengelola data mahasiswa.
        </div>
        <div class="card-body">
            @if(count($mahasiswas) > 0)
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>NIM</th>
                            <th>Alamat</th>
                            <th>Fakultas</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_mahasiswa }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->fakultas }}</td>
                            <td>{{ $item->email }}</td>
                            <td>
                                <a href="{{ route('datamahasiswa.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                                </a>
                                <form action="{{ route('datamahasiswa.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash-alt text-white-50"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div class="text-center py-5">
                <i class="fas fa-university fa-3x text-muted mb-3"></i>
                <h5 class="text-muted">Tidak ada data mahasiswa tersedia.</h5>
                <p class="text-muted">Silakan tambahkan data mahasiswa baru dengan mengklik tombol "Tambah Data".</p>
                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i> Tambah Data Mahasiswa
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
