@extends('layouts.app')

@section('title', 'Buat Data Fakultas')

@section('content')

    <h1> Tambah Data Fakultas</h1>


    <div class="card mb-4">
        <form action="{{ route('fakultas.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_fakultas">Kode Fakultas</label>
                        <input type="text" class="form-control form-control-user" name="kode_fakultas" id="kode_fakultas"
                            placeholder="Masukkan Data Fakultas">
                    </div>
                    <div class="form-group">
                        <label for="nama_fakultas">Nama Fakultas</label>
                        <input type="text" class="form-control form-control-user" name="nama_fakultas" id="nama_fakultas"
                            placeholder="Masukkan Nama Fakultas">
                    </div>
                    <button type="submit" class="btn btn-primary"> Sumbit </button>
                </div>
            </div>
        </form>
    </div>


@endsection