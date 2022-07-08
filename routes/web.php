<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidController;



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


Route::get('/tambah', function () {
    return view('pages.tambah');
});
Route::get('/edit/{id}', [ValidController::class, 'edit']);
Route::get('/nilai/{id}', [ValidController::class, 'nilai']);
Route::get('/', [HomeController::class, 'index']);
Route::post('/prosestambah', [ValidController::class, 'prosestambah']);
Route::post('/prosesedit', [ValidController::class, 'prosesedit']);
Route::post('/prosesnilai', [ValidController::class, 'prosesnilai']);
Route::post('/hapus/{id}', [ValidController::class, 'hapus']);
Route::post('/cari', [ValidController::class, 'cari']);