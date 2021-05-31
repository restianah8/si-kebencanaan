<?php

use App\Http\Controllers\Dampak_bencanaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\Jenis_bencanaController;
use App\Http\Controllers\Kejadian_bencanaController;
use App\Http\Controllers\KerusakanController;
use App\Http\Controllers\Kerusakan_lainnyaController;
use App\Http\Controllers\Korban_bencanaController;

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

Route::get('/', function () {
    return view('master');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'dashboard']);


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

    //star dampak bencana
    Route::get('/dampak_bencana',[Dampak_bencanaController::class, 'index']);
    Route::get('/dampak_bencana/tambah', [Dampak_bencanaController::class, 'create']);
    Route::post('/dampak_bencana/tambah', [Dampak_bencanaController::class, 'store']);
    Route::get('/dampak_bencana/edit/{dampak_bencana}', [Dampak_bencanaController::class, 'edit']);
    Route::put('/dampak_bencana/edit/{dampak_bencana}', [Dampak_bencanaController::class, 'update']);
    Route::get('/dampak_bencana/hapus/{dampak_bencana}', [Dampak_bencanaController::class, 'destroy']);



    //kerusakan
    Route::get('/kerusakan',[KerusakanController::class, 'index']);
    Route::get('/kerusakan/tambah', [KerusakanController::class, 'create']);
    Route::post('/kerusakan/tambah', [KerusakanController::class, 'store']);
    Route::get('/kerusakan/edit/{kerusakan}', [KerusakanController::class, 'edit']);
    Route::put('/kerusakan/edit/{kerusakan}', [KerusakanController::class, 'update']);
    Route::get('/kerusakan/hapus/{kerusakan}', [KerusakanController::class, 'destroy']);

    //kerusakan_lainnya
    Route::get('/kerusakan_lainnya',[Kerusakan_lainnyaController::class, 'index']);
    Route::get('/kerusakan_lainnya/tambah', [Kerusakan_lainnyaController::class, 'create']);
    Route::post('/kerusakan_lainnya/tambah', [Kerusakan_lainnyaController::class, 'store']);
    Route::get('/kerusakan_lainnya/edit/{kerusakan_lainnya}', [Kerusakan_lainnyaController::class, 'edit']);
    Route::put('/kerusakan_lainnya/edit/{kerusakan_lainnya}', [Kerusakan_lainnyaController::class, 'update']);
    Route::get('/kerusakan_lainnya/hapus/{kerusakan_lainnya}', [Kerusakan_lainnyaController::class, 'destroy']);

    //korban bencana
    Route::get('/korban_bencana',[Korban_bencanaController::class, 'index']);
    Route::get('/korban_bencana/tambah', [Korban_bencanaController::class, 'create']);
    Route::post('/korban_bencana/tambah', [Korban_bencanaController::class, 'store']);
    Route::get('/korban_bencana/edit/{korban_bencana}', [Korban_bencanaController::class, 'edit']);
    Route::put('/korban_bencana/edit/{korban_bencana}', [Korban_bencanaController::class, 'update']);
    Route::get('/korban_bencana/hapus/{korban_bencana}', [Korban_bencanaController::class, 'destroy']);

});

require __DIR__ . '/auth.php';
