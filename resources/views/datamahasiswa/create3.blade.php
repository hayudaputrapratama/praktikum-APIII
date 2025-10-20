@extends('layouts.app')

@section('title', 'Buat Data mahasiswa')

@section('content')

    <h1> Tambah Data mahasiswa</h1>


    <div class="card mb-4">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_mahasiswa">Kode mahasiswa</label>
                        <input type="text" class="form-control form-control-user" name="kode_mahasiswa" id="kode_mahasiswa"
                            placeholder="Masukkan Data mahasiswa">
                    </div>
                    <div class="form-group">
                        <label for="nama_fakultas">Nama mahasiswa</label>
                        <input type="text" class="form-control form-control-user" name="nama_mahasiswa" id="nama_mahasiswa"
                            placeholder="Masukkan Nama mahasiswa">
                    </div>
                    <button type="submit" class="btn btn-primary"> Sumbit </button>
                </div>
            </div>
        </form>
    </div>


@endsection