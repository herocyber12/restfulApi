<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return "Selamat datang";
});

Route::prefix('user')->group(function(){
    Route::post('simpan', [UserController::class, 'simpan'])->name('user.simpan');
    Route::get('show', [UserController::class, 'show'])->name('user.show');
});

Route::prefix('produk')->group(function(){
    Route::post('simpan', [ProdukController::class, 'simpan'])->name('produk.simpan');
    Route::get('/', [ProdukController::class, 'index'])->name('produk');
});

