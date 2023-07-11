<?php

use App\Http\Controllers\DonasiController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengurusController;
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

Route::get('/donasi/edit/{id}', [DonasiController::class, 'formEdit']);
Route::post('/donasi/update/{id}',[DonasiController::class, 'update']);
Route::get('/donasi/delete/{id}',[DonasiController::class, 'delete']);

Route::get('/inventaris', [InventarisController::class, 'index']);
Route::get('/inventaris/create', [InventarisController::class, 'create']);
Route::post('/inventaris/simpan-data', [InventarisController::class, 'store']);

Route::get('/inventaris/edit/{id}', [InventarisController::class, 'formEdit']);
Route::post('/inventaris/update/{id}',[InventarisController::class, 'update']);
Route::get('/inventaris/delete/{id}',[InventarisController::class, 'delete']);

Route::get('/jabatan',[JabatanController::class, 'index']);
Route::get('/jabatan/create',[JabatanController::class, 'create']);
Route::post('/jabatan/simpan-data',[JabatanController::class, 'store']);

Route::get('/jabatan/edit/{id}', [JabatanController::class, 'formEdit']);
Route::post('/jabatan/update/{id}',[JabatanController::class, 'update']);
Route::get('/jabatan/delete/{id}',[JabatanController::class, 'delete']);

Route::get('/kegiatan',[KegiatanController::class, 'index']);
Route::get('/kegiatan/create',[KegiatanController::class, 'create']);
Route::post('/kegiatan/simpan-data',[KegiatanController::class, 'store']);

Route::get('/kegiatan/edit/{id}', [KegiatanController::class, 'formEdit']);
Route::post('/kegiatan/update/{id}',[KegiatanController::class, 'update']);
Route::get('/kegiatan/delete/{id}',[KegiatanController::class, 'delete']);

Route::get('/pengurus',[PengurusController::class, 'index']);
Route::get('/pengurus/create',[PengurusController::class, 'create']);
Route::post('/pengurus/simpan-data',[PengurusController::class, 'store']);

Route::get('/pengurus/edit/{id}', [PengurusController::class, 'formEdit']);
Route::post('/pengurus/update/{id}',[PengurusController::class, 'update']);
Route::get('/pengurus/delete/{id}',[PengurusController::class, 'delete']);