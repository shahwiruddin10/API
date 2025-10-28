@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">
            <i class="fas fa-chalkboard-teacher fa-fw text-primary"></i> Data Dosen
        </h1>
        <a href="{{ route('datadosen.create') }}" class="btn btn-primary btn-sm shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Dosen
        </a>
    </div>


    <!-- Card Table -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-primary text-white fw-semibold rounded-top-4">
            Halaman ini digunakan untuk mengelola data dosen.
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Homebase</th>
                            <th>Pendidikan</th>
                            <th>Mata Kuliah Keahlian</th>
                            <th>Jabatan Fungsional</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($dosen as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$item->nidn}}</td>
                            <td >{{$item->nama}}</td>
                            <td>{{$item->jenis_kelamin}}</td>
                            <td>{{$item->homebase}}</td>
                            <td>{{$item->pendidikan}}</td>
                            <td>{{$item->mata_kuliah_keahlian}}</td>
                            <td>{{$item->jabatan_fungsional}}</td>
                            <td>
                                <a href="{{ route('datadosen.edit', $item->id) }}" class="btn btn-sm btn-warning me-1">
                                    <i class="fas fa-edit fa-sm text-white-50"></i> Edit
                                </a>
                                <form action="{{ route('datadosen.destroy', $item->id) }}" method="POST" class="d-inline">
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
