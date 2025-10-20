@extends('layouts.app')

@section('title', 'Buat Data Dosen')

@section('content')

    <h1> Tambah Data Dosen</h1>


    <div class="card mb-4">
        <form action="{{ route('dosen.store') }}" method="POST">
            @csrf
            <div class="card-header">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_Dosen">Kode Dosen</label>
                        <input type="text" class="form-control form-control-user" name="kode_dosen" id="kode_dosen"
                            placeholder="Masukkan Data dosen">
                    </div>
                    <div class="form-group">
                        <label for="nama_fakultas">Nama Dosen</label>
                        <input type="text" class="form-control form-control-user" name="nama_dosen" id="nama_dosen"
                            placeholder="Masukkan Nama Dosen">
                    </div>
                    <button type="submit" class="btn btn-primary"> Sumbit </button>
                </div>
            </div>
        </form>
    </div>


@endsection