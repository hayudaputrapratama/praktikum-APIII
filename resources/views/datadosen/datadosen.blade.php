@extends('layouts.app')

@section('content')

    <!-- DataTales Example -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Dosen</h1>
            <a href="{{ route('datadosen.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Tambah Data</a>
    </div>

<div class="container-fluid">
    

    <div class="card shadow mb-4">
        <div class="card-body">
            <p>Halaman ini digunakan untuk mengelola data dosen.</p>
            <table class="table table-bordered">
                <thead>
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
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1004059702</td>
                        <td>Ir. HIDAYATI RUSNEDY S.T, M.Kom</td>
                        <td>Wanita</td>
                        <td>TEKNIK INFORMATIKA</td>
                        <td>S2</td>
                        <td>Decision Support System, Data MIning</td>
                        <td>Asisten Ahli (150.00) / Instructor</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

            <tbody>
                    <tr>
                        <td>2</td>
                        <td>1026067802</td>
                        <td>SAFNI MARWA S.T, M.Sc.E.</td>
                        <td>Wanita</td>
                        <td>TEKNIK INFORMATIKA</td>
                        <td>S2</td>
                        <th>Software Engineering</th>
                        <td>Lektor (200.00) / Assistant Professor</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

            <tbody>
                    <tr>
                        <td>3</td>
                        <td>1021109102</td>
                        <td>Ir. R. JOKO MUSRIDHO S.T, M.Phil</td>
                        <td>Pria</td>
                        <td>TEKNIK INFORMATIKA</td>
                        <td>S2</td>
                        <th>Kecerdasan Buatan</th>
                        <td>Asisten Ahli (150.00) / Instructor</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>4</td>
                        <td>1005088602</td>
                        <td>DEDDY GUSMAN S.Kom, M.T.I</td>
                        <td>Pria</td>
                        <td>TEKNIK INFORMATIKA</td>
                        <td>S2</td>
                        <th>Dasar Pemrograman, Pemrograman Web</th>
                        <td>Lektor (300.00) / Assistant Professor</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
</div>
@endsection