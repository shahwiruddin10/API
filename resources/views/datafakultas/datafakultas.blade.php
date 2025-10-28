@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800 fw-bold">
            <i class="fas fa-university fa-fw text-primary me-2"></i> Data Fakultas
        </h1>
        <a href="{{ route('datafakultas.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50 me-1"></i> Tambah Data Fakultas
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
            Halaman ini digunakan untuk mengelola data fakultas.
        </div>
        <div class="card-body">
            @if(count($fakultas) > 0)
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center mb-0">
                    <thead class="table-primary text-dark">
                        <tr>
                            <th>No</th>
                            <th>ID Fakultas</th>
                            <th>Nama Fakultas</th>
                            <th>Nama Dekan</th>
                            <th>Nama Wakil Dekan</th>
                            <th>Tahun Berdiri</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach($fakultas as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->kode_fakultas }}</td>
                            <td>{{ $item->nama_fakultas }}</td>
                            <td>{{ $item->nama_dekan }}</td>
                            <td>{{ $item->nama_wakil_dekan }}</td>
                            <td>{{ $item->tahun_berdiri }}</td>
                            <td>
                                <a href="{{ route('datafakultas.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                                </a>
                                <form action="{{ route('datafakultas.destroy', $item->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        <i class="fas fa-trash fa-sm text-white-50"></i> Hapus
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
                <h5 class="text-muted">Tidak ada data fakultas tersedia.</h5>
                <p class="text-muted">Silakan tambahkan data fakultas baru dengan mengklik tombol "Tambah Data".</p>
                <a href="{{ route('datafakultas.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus me-2"></i> Tambah Data Fakultas
                </a>
            </div>
        @endif
        </div>
    </div>
</div>

<!-- Costom Table Styling -->
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
