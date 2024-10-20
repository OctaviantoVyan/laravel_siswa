<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/siswa', [SiswaController::class, 'index']);
// Route::get('/siswa', 'SiswaController@index');
// Route::get('/ortu', 'OrtuController@index');

Route::get('/ortu', [OrtuController::class, 'index']);
Route::get('/siswa', [SiswaController::class, 'index']);


// Route::get('/ortu', 'App\Http\Controllers\OrtuController@index');
// Route::get('/siswa', 'App\Http\Controllers\SiswaController@index');
