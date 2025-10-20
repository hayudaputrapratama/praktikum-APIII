@extends('layouts.app')

@section('title', 'Buat Data Prodi')

@section('content')

    <h1> Tambah Data Prodi</h1>


    <div class="card mb-4">
        <form action="{{ route('prodi.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_fakultas">Kode Prodi</label>
                        <input type="text" class="form-control form-control-user" name="kode_prodi" id="kode_prodi"
                            placeholder="Masukkan Data Prodi">
                    </div>
                    <div class="form-group">
                        <label for="nama_prodi">Nama Prodi</label>
                        <input type="text" class="form-control form-control-user" name="nama_prodi" id="nama_prodi"
                            placeholder="Masukkan Nama Prodi">
                    </div>
                    <button type="submit" class="btn btn-primary"> Sumbit </button>
                </div>
            </div>
        </form>
    </div>


@endsection