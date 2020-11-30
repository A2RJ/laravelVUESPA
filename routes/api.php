<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\LaporanController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a middleware which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('jurnals', JurnalController::class);
// Buat route seperti laporan
Route::get('aktivitas', [JurnalController::class, 'getAktivitas']);

Route::get('akun/{id}', [JurnalController::class, 'getAkun']);

Route::get('waktu/{id}', [JurnalController::class, 'getWaktu']);

Route::get('cari/{data}', [JurnalController::class, 'cari']);

Route::get('hapus/{id}', [JurnalController::class, 'hapus']);

Route::get('laporan/{id}', [LaporanController::class, 'index']);
