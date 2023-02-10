<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CowsController;
use App\Http\Controllers\PanganController;
use App\Http\Controllers\StatusController;

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
    return view('landingpage');
});

Route::resource('cows', CowsController::class);
Route::resource('/pangan', PanganController::class);
Route::post('/pangan2', [PanganController::class, 'store_pemasukan']);
Route::post('/pangan3', [PanganController::class, 'store_pengeluaran']);
Route::get('/history_pemasukan', [PanganController::class, 'pemasukan']);
Route::get('/history_pengeluaran', [PanganController::class, 'pengeluaran']);
Route::resource('status', StatusController::class);
Route::get('/allstat', [StatusController::class, 'summary'])->name('allstat');
Route::get('/rumahjaggal', [CowsController::class, 'rumahjaggal'])->name('rumahjaggal.index');
