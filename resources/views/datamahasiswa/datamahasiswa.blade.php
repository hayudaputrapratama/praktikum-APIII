@extends('layouts.app')

@section('content')

 <!-- DataTales Example -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data mahasiswa</h1>
            <a href="{{ route('datamahasiswa.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i>Tambah Data</a>
    </div>

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Data Mahasiswa</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <p>Halaman ini digunakan untuk mengelola data mahasiswa.</p>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mahasiswa</th>
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
                        <td>2255201001</td>
                        <td>Sipungguk</td>
                        <td>Fakultas Teknik</td>
                        <td>almanazizi@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>2</td>
                        <td>ARSI DEWI SAPUTR</td>
                        <td>2255201002</td>
                        <td>Kualu Nenas</td>
                        <td>Fakultas Teknik</td>
                        <td>arsidewisaputri@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>3</td>
                        <td>PUTRA RAMADAN</td>
                        <td>2255201005</td>
                        <td>Salo</td>
                        <td>Fakultas Teknik</td>
                        <td>putraramadan@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                 <tbody>
                    <tr>
                        <td>4</td>
                        <td>SARWO DINATA</td>
                        <td>2255201007</td>
                        <td>Ridan</td>
                        <td>Fakultas Teknik</td>
                        <td>sarwodinata@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>5</td>
                        <td>AGUS SALIM</td>
                        <td>2255201010</td>
                        <td>Ridan</td>
                        <td>Fakultas Teknik</td>
                        <td>agussalim@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                 <tbody>
                    <tr>
                        <td>6</td>
                        <td>DESRI INSANI</td>
                        <td>2255201016</td>
                        <td>Bangkinang</td>
                        <td>Fakultas Teknik</td>
                        <td>desriinsani@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                 <tbody>
                    <tr>
                        <td>7</td>
                        <td>ERA DWI MUSTIKA</td>
                        <td>2255201017</td>
                        <td>Laboy Jaya</td>
                        <td>Fakultas Teknik</td>
                        <td>eradwimustika@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                 <tbody>
                    <tr>
                        <td>8</td>
                        <td>MUHAMMAD THOIF SETIAWAN</td>
                        <td>2255201026</td>
                        <td>Petapahan</td>
                        <td>Fakultas Teknik</td>
                        <td>thoifsetiawan@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>9</td>
                        <td>PUTRI CINDY CLAUDIA</td>
                        <td>2255201028</td>
                        <td>Bangkinang</td>
                        <td>Fakultas Teknik</td>
                        <td>putricindyclaudia@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                 <tbody>
                    <tr>
                        <td>10</td>
                        <td>SELVI WIDYA RAHMI</td>
                        <td>2255201030</td>
                        <td>Tibun</td>
                        <td>Fakultas Teknik</td>
                        <td>selviwidyarahmi@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                 <tbody>
                    <tr>
                        <td>11</td>
                        <td>SHAH WIRUDDIN</td>
                        <td>2255201031</td>
                        <td>Sipungguk</td>
                        <td>Fakultas Teknik</td>
                        <td>shahwiruddin@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>12</td>
                        <td>SRI UTAMI</td>
                        <td>2255201032</td>
                        <td>Tapung</td>
                        <td>Fakultas Teknik</td>
                        <td>sriutami@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>13</td>
                        <td>WINDI DWI RIKASARI</td>
                        <td>2255201038</td>
                        <td>Laboy Jaya</td>
                        <td>Fakultas Teknik</td>
                        <td>windidwirikasari@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>14</td>
                        <td>HAYUDA PUTRA PRATAMA</td>
                        <td>2255201041</td>
                        <td>Ridan</td>
                        <td>Fakultas Teknik</td>
                        <td>hayudaputrapratama@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>15</td>
                        <td>MARSA AULIA HASANAH</td>
                        <td>2255201055</td>
                        <td>Bangkinang</td>
                        <td>Fakultas Teknik</td>
                        <td>marsaauliahasanah@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>16</td>
                        <td>DINA MEYSI CHANDRA</td>
                        <td>2255201057</td>
                        <td>Air Tiris</td>
                        <td>Fakultas Teknik</td>
                        <td>dinameysichandra@gmail.com</td>
                        <td>
                            <button class="btn btn-warning btn-sm">Edit</button>
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </td>
                    </tr>
                </tbody>

                <tbody>
                    <tr>
                        <td>17</td>
                        <td>SRI WIJI ASTUTI</td>
                        <td>2255201058</td>
                        <td>Ridan</td>
                        <td>Fakultas Teknik</td>
                        <td>sriwijiastuti@gmail.com</td>
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