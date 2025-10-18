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
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Data
        </a>
    </div>

    <!-- Card -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-header bg-primary text-white fw-semibold rounded-top-4">
            Halaman ini digunakan untuk mengelola data mahasiswa.
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-primary">
                        <tr>
                            <th>No</th>
                            <th>Nama Mahasiswa</th>
                            <th>Jenis Kelamin</th>
                            <th>NIM</th>
                            <th>Alamat</th>
                            <th>Fakultas</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ALMAN AZIZI</td>
                            <td>Pria</td>
                            <td>2255201001</td>
                            <td>Sipungguk</td>
                            <td>Fakultas Teknik</td>
                            <td>almanazizi@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>ARSI DEWI SAPUTRI</td>
                            <td>Wanita</td>
                            <td>2255201002</td>
                            <td>Kualu Nenas</td>
                            <td>Fakultas Teknik</td>
                            <td>arsidewisaputri@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>PUTRA RAMADAN</td>
                            <td>Pria</td>
                            <td>2255201005</td>
                            <td>Salo</td>
                            <td>Fakultas Teknik</td>
                            <td>putraramadan@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>SARWO DINATA</td>
                            <td>Pria</td>
                            <td>2255201007</td>
                            <td>Ridan</td>
                            <td>Fakultas Teknik</td>
                            <td>sarwodinata@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>AGUS SALIM</td>
                            <td>Pria</td>
                            <td>2255201010</td>
                            <td>Ridan</td>
                            <td>Fakultas Teknik</td>
                            <td>agussalim@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>DESRI INSANI</td>
                            <td>Wanita</td>
                            <td>2255201016</td>
                            <td>Bangkinang</td>
                            <td>Fakultas Teknik</td>
                            <td>desriinsani@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>ERA DWI MUSTIKA</td>
                            <td>Wanita</td>
                            <td>2255201017</td>
                            <td>Laboy Jaya</td>
                            <td>Fakultas Teknik</td>
                            <td>eradwimustika@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>MUHAMMAD THOIF SETIAWAN</td>
                            <td>Pria</td>
                            <td>2255201026</td>
                            <td>Petapahan</td>
                            <td>Fakultas Teknik</td>
                            <td>thoifsetiawan@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>PUTRI CINDY CLAUDIA</td>
                            <td>Wanita</td>
                            <td>2255201028</td>
                            <td>Bangkinang</td>
                            <td>Fakultas Teknik</td>
                            <td>putricindyclaudia@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>SELVI WIDYA RAHMI</td>
                            <td>Wanita</td>
                            <td>2255201030</td>
                            <td>Tibun</td>
                            <td>Fakultas Teknik</td>
                            <td>selviwidyarahmi@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>SHAH WIRUDDIN</td>
                            <td>Pria</td>
                            <td>2255201031</td>
                            <td>Sipungguk</td>
                            <td>Fakultas Teknik</td>
                            <td>shahwiruddin@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>SRI UTAMI</td>
                            <td>Wanita</td>
                            <td>2255201032</td>
                            <td>Tapung</td>
                            <td>Fakultas Teknik</td>
                            <td>sriutami@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>WINDI DWI RIKASARI</td>
                            <td>Wanita</td>
                            <td>2255201038</td>
                            <td>Laboy Jaya</td>
                            <td>Fakultas Teknik</td>
                            <td>windidwirikasari@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>HAYUDA PUTRA PRATAMA</td>
                            <td>Pria</td>
                            <td>2255201041</td>
                            <td>Ridan</td>
                            <td>Fakultas Teknik</td>
                            <td>hayudaputrapratama@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>MARSA AULIA HASANAH</td>
                            <td>Wanita</td>
                            <td>2255201055</td>
                            <td>Bangkinang</td>
                            <td>Fakultas Teknik</td>
                            <td>marsaauliahasanah@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>DINA MEYSI CHANDRA</td>
                            <td>Wanita</td>
                            <td>2255201057</td>
                            <td>Air Tiris</td>
                            <td>Fakultas Teknik</td>
                            <td>dinameysichandra@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>SRI WIJI ASTUTI</td>
                            <td>Wanita</td>
                            <td>2255201058</td>
                            <td>Ridan</td>
                            <td>Fakultas Teknik</td>
                            <td>sriwijiastuti@gmail.com</td>
                            <td>
                                <a href="{{ route('datamahasiswa.create') }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
