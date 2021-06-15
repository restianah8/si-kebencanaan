<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ChartController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\Jenis_bencanaController;
use App\Http\Controllers\Kejadian_bencanaController;
use App\Http\Controllers\LaporanMasyarakatController;
use App\Http\Controllers\PeringatanController;
use App\Http\Controllers\PetarawanbencanaController;
use App\Http\Controllers\Publik\BeritaController as PublikBeritaController;
use App\Http\Controllers\Publik\HomeController as PublikHomeController;
use App\Http\Controllers\Publik\InfoBencanaController as PublikInfoBencanaController;
use App\Http\Controllers\Publik\LaporanBencanaController;
use App\Http\Controllers\Publik\PeringatanDiniController as PublikPeringatanDiniController;
use App\Http\Controllers\publik\PetarawanbencanaController as PublikPetarawanbencanaController;

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

Route::get('/', [PublikHomeController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');


    //start: kabupaten
    Route::get('/data_kabupaten', [KabupatenController::class, 'index']);
    Route::get('/data_kabupaten/tambah', [KabupatenController::class, 'create']);
    Route::post('/data_kabupaten/tambah', [KabupatenController::class, 'store']);
    Route::get('/data_kabupaten/edit/{kabupaten}', [KabupatenController::class, 'edit']);
    Route::put('/data_kabupaten/edit/{kabupaten}', [KabupatenController::class, 'update']);
    Route::get('/data_kabupaten/hapus/{kabupaten}', [KabupatenController::class, 'destroy']);
    // end: kabupaten

    //star Kecamatan
    Route::get('/kecamatan', [KecamatanController::class, 'index']);
    Route::get('/kecamatan/tambah', [KecamatanController::class, 'create']);
    Route::post('/kecamatan/tambah', [KecamatanController::class, 'store']);
    Route::get('/kecamatan/edit/{kecamatan}', [KecamatanController::class, 'edit']);
    Route::put('/kecamatan/edit/{kecamatn}', [KecamatanController::class, 'update']);
    Route::get('/kecamatan/hapus/{kecamatan}', [KecamatanController::class, 'destroy']);
    //star kelurahan
    Route::get('/kelurahan',[KelurahanController::class, 'index']);
    Route::get('/kelurahan/tambah', [KelurahanController::class, 'create']);
    Route::post('/kelurahan/tambah', [KelurahanController::class, 'store']);
    Route::get('/kelurahan/edit/{kelurahan}', [KelurahanController::class, 'edit']);
    Route::put('/kelurahan/edit/{kelurahan}', [KelurahanController::class, 'update']);
    Route::get('/kelurahan/hapus/{kelurahan}', [KelurahanController::class, 'destroy']);

    //star jenis bencana
    Route::get('/jenis_bencana',[Jenis_bencanaController::class, 'index']);
    Route::get('/jenis_bencana/tambah', [Jenis_bencanaController::class, 'create']);
    Route::post('/jenis_bencana/tambah', [Jenis_bencanaController::class, 'store']);
    Route::get('/jenis_bencana/edit/{jenis_bencana}', [Jenis_bencanaController::class, 'edit']);
    Route::put('/jenis_bencana/edit/{jenis_bencana}', [Jenis_bencanaController::class, 'update']);
    Route::get('/jenis_bencana/hapus/{jenis_bencana}', [Jenis_bencanaController::class, 'destroy']);

    //star Kejadian BEncana
    Route::get('/kejadian_bencana',[Kejadian_bencanaController::class, 'index']);
    Route::get('/kejadian_bencana/tambah', [Kejadian_bencanaController::class, 'create']);
    Route::post('/kejadian_bencana/tambah', [Kejadian_bencanaController::class, 'store']);
    Route::get('/kejadian_bencana/edit/{kejadian_bencana}', [Kejadian_bencanaController::class, 'edit']);
    Route::put('/kejadian_bencana/edit/{kejadian_bencana}', [Kejadian_bencanaController::class, 'update']);
    Route::get('/kejadian_bencana/hapus/{kejadian_bencana}', [Kejadian_bencanaController::class, 'destroy']);
    Route::get('export_excel', 'UsersController@export');
    Route::get('/export_excel', [Kejadian_bencanaController::class,'export_excel'])->name('export_excel');
    Route::get('/kejadian_bencana/cetak_pdf', 'Kejadian_bencanaController@cetak_pdf');
    Route::get('/pdf', [Kejadian_bencanaController::class,'pdf'])->name('pdf');



    //Laporan masyarakat
    Route::get('/laporan-masyarakat', [LaporanMasyarakatController::class, 'index'])->name('laporan_masyarakat.index');
    Route::get('/laporan-masyarakat/{laporan_bencana}', [LaporanMasyarakatController::class, 'show'])->name('laporan_masyarakat.show');
    Route::get('/laporan-masyarakat/hapus/{laporan_masyrakat}', [LaporanMasyarakatController::class, 'destroy'])->name('laporan_masyarakat.hapus');;


     //peringatan
     Route::get('/peringatan', [PeringatanController::class, 'index'])->name('peringatan.index');
     Route::get('/peringatan/tambah', [PeringatanController::class, 'create'])->name('peringatan.tambah');
     Route::post('/peringatan/tambah', [PeringatanController::class, 'store'])->name('peringatan.simpan');
     Route::get('/peringatan/hapus{peringatan}', [PeringatanController::class, 'destroy'])->name('peringatan.hapus');

     //berita
     Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
     Route::get('/berita/tambah', [BeritaController::class, 'create'])->name('berita.tambah');
     Route::post('/berita/tambah', [BeritaController::class, 'store'])->name('berita.simpan');
     Route::get('/berita/edit{berita}', [BeritaController::class, 'edit'])->name('berita.edit');
     Route::put('/berita/edit{berita}', [BeritaController::class, 'update'])->name('berita.update');
     Route::get('/berita/hapus{berita}', [BeritaController::class, 'destroy'])->name('berita.hapus');

      Route::get('/chart', [ChartController::class, 'index'])->name('chart.index');

    //peta
    Route::get('/petarawanbencana', [PetarawanbencanaController::class, 'index'])->name('peta.index');
     Route::get('/petarawanbencana/tambah', [PetarawanbencanaController::class, 'create'])->name('peta.tambah');
     Route::post('/petarawanbencana/tambah', [PetarawanbencanaController::class, 'store'])->name('peta.simpan');
     Route::get('/petarawanbencana/edit{petarawanbencana}', [PetarawanbencanaController::class, 'edit'])->name('peta.edit');
     Route::put('/petarawanbencana/edit{petarawanbencana}', [PetarawanbencanaController::class, 'update'])->name('peta.update');
     Route::get('/petarawanbencana/hapus{petarawanbencana}', [PetarawanbencanaController::class, 'destroy'])->name('peta.hapus');



});

Route::get('/lapor-bencana', [LaporanBencanaController::class, 'create'])->name('lapor_bencana.lapor');
Route::post('/lapor-bencana', [LaporanBencanaController::class, 'store'])->name('lapor_bencana.simpan');

Route::get('/info_bencana', [PublikInfoBencanaController::class, 'index'])->name('info_bencana');
Route::get('/info_bencana/{kejadian_bencana}', [PublikInfoBencanaController::class, 'show'])->name('info_bencana.show');

Route::get('/peringatan-bencana', [PublikPeringatanDiniController::class, 'index'])->name('peringatan_dini');
Route::get('/petarawanbencana', [PublikPetarawanbencanaController::class, 'index'])->name('peta');

Route::get('/berita/{berita}', [PublikBeritaController::class, 'show'])->name('berita.read');





require __DIR__ . '/auth.php';
