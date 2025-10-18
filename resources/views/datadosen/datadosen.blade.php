@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 text-gray-800">
            <i class="fas fa-chalkboard-teacher fa-fw text-primary"></i> Data Dosen
        </h1>
        <a href="{{ route('datadosen.create') }}" class="btn btn-primary btn-sm shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
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
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>1004059702</td>
                            <td class="text-start">Ir. HIDAYATI RUSNEDY S.T, M.Kom</td>
                            <td>Wanita</td>
                            <td>TEKNIK INFORMATIKA</td>
                            <td>S2</td>
                            <td>Decision Support System, Data Mining</td>
                            <td>Asisten Ahli (150.00) / Instructor</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>1026067802</td>
                            <td class="text-start">SAFNI MARWA S.T, M.Sc.E.</td>
                            <td>Wanita</td>
                            <td>TEKNIK INFORMATIKA</td>
                            <td>S2</td>
                            <td>Software Engineering</td>
                            <td>Lektor (200.00) / Assistant Professor</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>1021109102</td>
                            <td class="text-start">Ir. R. JOKO MUSRIDHO S.T, M.Phil</td>
                            <td>Pria</td>
                            <td>TEKNIK INFORMATIKA</td>
                            <td>S2</td>
                            <td>Kecerdasan Buatan</td>
                            <td>Asisten Ahli (150.00) / Instructor</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>1005088602</td>
                            <td class="text-start">DEDDY GUSMAN S.Kom, M.T.I</td>
                            <td>Pria</td>
                            <td>TEKNIK INFORMATIKA</td>
                            <td>S2</td>
                            <td>Dasar Pemrograman, Pemrograman Web</td>
                            <td>Lektor (300.00) / Assistant Professor</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Footer Info -->
            <div class="mt-3 text-end">
                <small class="text-muted">Total Data Dosen: 4</small>
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
