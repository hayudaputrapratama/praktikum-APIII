<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFakultasController;
use App\Http\Controllers\DataProdiController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// route untuk halaman utama

Route::get('/',[App\http\Controllers\DashboardController::class,"index"])->middleware('auth')->name('dashboard.index');

// routes untuk data fakultas
Route::get('/datafakultas', [DataFakultasController::class, 'index'])->middleware('auth')->name('datafakultas.index');
Route::post('/datafakultas', [DataFakultasController::class, 'store'])->middleware('auth')->name('fakultas.store');
Route::get('/datafakultas/create', [DataFakultasController::class, 'create'])->middleware('auth')->name('datafakultas.create');
Route::get('/datafakultas/{id}', [DataFakultasController::class, 'show'])->middleware('auth')->name('datafakultas.show');
Route::get('/datafakultas/{id}/edit', [DataFakultasController::class, 'edit'])->middleware('auth')->name('datafakultas.edit');
Route::put('/datafakultas/{id}', [DataFakultasController::class, 'update'])->middleware('auth')->name('datafakultas.update');
Route::delete('/datafakultas/{id}', [DataFakultasController::class, 'destroy'])->middleware('auth')->name('datafakultas.destroy');

// routes untuk data prodi
Route::get('/dataprodi', [DataProdiController::class, 'index'])->middleware('auth')->name('dataprodi.index');
Route::post('/dataprodi', [DataProdiController::class, 'store'])->middleware('auth')->name('prodi.store');
Route::get('/dataprodi/create2', [DataProdiController::class, 'create'])->middleware('auth')->name('dataprodi.create');
Route::get('/dataprodi/{id}', [DataProdiController::class, 'show'])->middleware('auth')->name('dataprodi.show');
Route::get('/dataprodi/{id}/edit2', [DataProdiController::class, 'edit'])->middleware('auth')->name('dataprodi.edit');
Route::put('/dataprodi/{id}', [DataProdiController::class, 'update'])->middleware('auth')->name('dataprodi.update');
Route::delete('/dataprodi/{id}', [DataProdiController::class, 'destroy'])->middleware('auth')->name('dataprodi.destroy');

// routes untuk data dosen
Route::get('/datadosen', [App\http\Controllers\DataDosenController::class, 'index'])->middleware('auth')->name('datadosen.index');
Route::post('/datadosen/store', [App\http\Controllers\DataDosenController::class, 'store'])->middleware('auth')->name('dosen.store');
Route::get('/datadosen/create4', [App\http\Controllers\DataDosenController::class, 'create'])->middleware('auth')->name('datadosen.create');
Route::get('/datadosen/{id}', [App\http\Controllers\DataDosenController::class, 'show'])->middleware('auth')->name('datadosen.show');
Route::get('/datadosen/{id}/edit4', [App\http\Controllers\DataDosenController::class, 'edit'])->middleware('auth')->name('datadosen.edit');
Route::put('/datadosen/{id}', [App\http\Controllers\DataDosenController::class, 'update'])->middleware('auth')->name('datadosen.update');
Route::delete('/datadosen/{id}', [App\http\Controllers\DataDosenController::class, 'destroy'])->middleware('auth')->name('datadosen.destroy');

// routes untuk data mahasiswa
Route::get('/datamahasiswa', [App\http\Controllers\DataMahasiswaController::class, 'index'])->middleware('auth')->name('datamahasiswa.index');
Route::post('/datamahasiswa/store', [App\http\Controllers\DataMahasiswaController::class, 'store'])->middleware('auth')->name('mahasiswa.store');
Route::get('/datamahasiswa/create3', [App\http\Controllers\DataMahasiswaController::class, 'create'])->middleware('auth')->name('datamahasiswa.create');
Route::get('/datamahasiswa/{id}/edit', [App\http\Controllers\DataMahasiswaController::class, 'edit'])->middleware('auth')->name('datamahasiswa.edit');
Route::put('/datamahasiswa/{id}', [App\http\Controllers\DataMahasiswaController::class, 'update'])->middleware('auth')->name('datamahasiswa.update');
Route::delete('/datamahasiswa/{id}', [App\http\Controllers\DataMahasiswaController::class, 'destroy'])->middleware('auth')->name('datamahasiswa.destroy');


// AUTH ROUTES (LOGIN & REGISTER)
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login/post', [AuthController::class, 'formLogin'])->name('form.login');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register/post', [AuthController::class, 'formRegister'])->name('form.register');

// Logout
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->middleware('auth')->name('logout');