<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AuthController;
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
Route::get('aktivitas', [JurnalController::class, 'getAktivitas']);
Route::get('akun/{id}', [JurnalController::class, 'getAkun']);
Route::get('waktu/{id}', [JurnalController::class, 'getWaktu']);
Route::get('cari/{data}', [JurnalController::class, 'cari']);
Route::get('hapus/{id}', [JurnalController::class, 'hapus']);
Route::get('reset', [JurnalController::class, 'reset']);

Route::get('dashboard', [LaporanController::class, 'dashboard']);
Route::get('laporan/{id}', [LaporanController::class, 'index']);

Route::resource('auth', AuthController::class);
Route::get('auth/login/{data}', [AuthController::class, 'login']);
Route::get('auth/logout', [AuthController::class, 'logout']);