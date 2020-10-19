<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'jurnals'], function () {
        
        Route::get('aktivitas', [
                'as' => 'jurnals.getAktivitas',
                'uses' => 'JurnalController@getAktivitas'
        ]);

        Route::get('akun/{id}', [
                'as' => 'jurnals.getakun',
                'uses' => 'JurnalController@getAkun'
        ]);

        Route::get('waktu/{id}', [
                'as' => 'jurnals.getwaktu',
                'uses' => 'JurnalController@getWaktu'
                ]);
                Route::get('cari/{data}', [
                'as' => 'jurnals.cari',
                'uses' => 'JurnalController@cari'
                ]);
        
});

Route::resource('jurnals','JurnalController');
// route berguna agar semua routes sangat fleksibel
// hanya dengan 1 pemanggilan dapat kesemua functions
Route::get('laporan/{id}', [
        'as' => 'laporan.index',
        'uses' => 'LaporanController@index'
]);