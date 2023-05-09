<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\PindahController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\KematianController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KelahiranController;
use App\Http\Controllers\KeperluanController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendatangController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\KartukeluargaController;
use App\Http\Controllers\SuratpengantarController;
use App\Http\Controllers\SuratpengantarrtController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('pages.login.login');
});


Route::controller(LoginController::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/registerproses', 'registerproses')->name('registerproses');
    Route::get('/login', 'login')->name('login');
    Route::post('/loginproses', 'loginproses')->name('loginproses');
    Route::get('/logout', 'logout')->name('logout');
});


Route::middleware(['checkrole:admin'] )->group(function () {
    Route::get('/admin', [DashboardController::class, 'admin'])->name('admin');
    Route::resource('pekerjaan', PekerjaanController::class);
    Route::resource('pendidikan', PendidikanController::class);
    Route::resource('keperluan', KeperluanController::class);
    Route::resource('warga', WargaController::class);
    Route::resource('pendatang', PendatangController::class);
    Route::resource('pindah', PindahController::class);
    Route::resource('kelahiran', KelahiranController::class);
    Route::resource('kematian', KematianController::class);
    Route::resource('kartukeluarga', KartukeluargaController::class);
    Route::resource('kartukeluarga.anggota', AnggotaController::class)->shallow();
    Route::resource('suratpengantarrt', SuratpengantarrtController::class);
    Route::resource('user', UserController::class);

    // Route::resource('suratpengantarrt/cetak_pdf', SuratpengantarrtController::class);
    Route::get('/suratpengantarrt/cetak_pdf/{id}', [SuratpengantarrtController::class, 'cetak_pdf'])->name('cetak_pdf');
});

Route::middleware(['checkrole:warga'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'admin'])->name('admin');
    Route::resource('warga', WargaController::class);
    Route::resource('kartukeluarga', KartukeluargaController::class);
    Route::resource('kartukeluarga.anggota', AnggotaController::class)->shallow();
    Route::resource('suratpengantarrt', SuratpengantarrtController::class);
    Route::get('/suratpengantarrt/cetak_pdf/{id}', [SuratpengantarrtController::class, 'cetak_pdf'])->name('cetak_pdf');
});

Route::middleware(['checkrole:rt'])->group(function () {
    Route::get('/admin', [DashboardController::class, 'admin'])->name('admin');
    Route::resource('warga', WargaController::class);
    Route::resource('kartukeluarga', KartukeluargaController::class);
    Route::resource('kartukeluarga.anggota', AnggotaController::class)->shallow();
    Route::resource('suratpengantarrt', SuratpengantarrtController::class);
    Route::get('/suratpengantarrt/cetak_pdf/{id}', [SuratpengantarrtController::class, 'cetak_pdf'])->name('cetak_pdf');
});