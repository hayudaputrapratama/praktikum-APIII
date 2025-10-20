@extends('layouts.app')

@section('content')

    <!-- DataTales Example -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="{{ route('datafakultas.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i>Tambah Data</a>
                    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <p>Halaman ini digunakan untuk mengelola data fakultas.</p>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
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
                </tbody>

                <tbody>
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
</div>
@endsection
