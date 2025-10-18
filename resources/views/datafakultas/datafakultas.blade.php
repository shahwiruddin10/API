@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800 fw-bold">
            <i class="fas fa-university fa-fw text-primary me-2"></i> Data Fakultas
        </h1>
        <a href="{{ route('datafakultas.create') }}" class="btn btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50 me-1"></i> Tambah Data
        </a>
    </div>

    <!-- Card -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-primary text-white fw-semibold rounded-top-4">
            Halaman ini digunakan untuk mengelola data fakultas.
        </div>
        <div class="card-body">
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
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>FST</td>
                            <td>Sains dan Teknologi</td>
                            <td>Emon Azriadi, S.T., M.Sc.E</td>
                            <td>Safni Marwa, S.T., M.Sc</td>
                            <td>2017</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>FH</td>
                            <td>Hukum</td>
                            <td>Dr. Ratna Riyanti, S.H., M.H</td>
                            <td>Dr. Hafiz Sutrisno, S.H., M.H</td>
                            <td>2014</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
