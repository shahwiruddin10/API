@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800 fw-bold">
        <i class="fas fa-tachometer-alt fa-fw text-primary me-2"></i> Dashboard
    </h1>

    <div class="row">

        <!-- Card Fakultas -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Jumlah Fakultas</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahFakultas }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-university fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Prodi -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Jumlah Program Studi</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahProdi }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-graduation-cap fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Dosen -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Dosen</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahDosen }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-chalkboard-teacher fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Mahasiswa -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Mahasiswa</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jumlahMahasiswa }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Welcome Section -->
    <div class="card shadow mb-4">
        <div class="card-header  py-3 bg-primary text-white">
            <h6 class="m-0 fas fa-archive font-weight-bold">
            Selamat Datang di Website SB-Admin 2
            </h6>
        </div>
        <div class="card-body">
            <p class="mb-0 text-gray-700 fs-5">
                Website ini dirancang untuk membantu pengelolaan data Fakultas, Program Studi, Dosen, dan Mahasiswa secara efisien.  
                Gunakan menu di sisi kiri untuk mengakses setiap bagian data.
            </p>
        </div>
    </div>

</div>
@endsection
