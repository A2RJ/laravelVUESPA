<?php

use Illuminate\Support\Facades\Route;

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

Route::get('{any}', function () {
    return view('App');
})->where('any', '.*');

// Route::group(['prefix'=>'jurnals'], function () {
    
//     Route::get('akun/{id}', [
//             'as' => 'jurnals.getakun',
//             'uses' => 'JurnalController@getAkun'
//     ]);

//     Route::get('waktu/{id}', [
//             'as' => 'jurnals.getwaktu',
//             'uses' => 'JurnalController@getWaktu'
//     ]);

// });

// Route::resource('jurnals','JurnalController');

