<?php

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\InventarisController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    echo "Selamat datang";
});

Route::get('/donasi',[DonasiController::class, 'index']);
Route::get('/donasi/create',[DonasiController::class, 'create']);
Route::post('/donasi/simpan-data', [DonasiController::class, 'store']);

Route::get('/inventaris', [InventarisController::class, 'index']);
Route::get('/inventaris/create', [InventarisController::class, 'create']);
Route::post('/inventaris/simpan-data', [InventarisController::class, 'store']);
