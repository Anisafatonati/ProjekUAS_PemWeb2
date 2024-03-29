<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PengurusController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\UsersController;
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

Route::middleware('auth')->group(function () {
    Route::get('/donasi', [DonasiController::class, 'index']);
    Route::get('/donasi/create', [DonasiController::class, 'create']);
    Route::post('/donasi/simpan-data', [DonasiController::class, 'store']);
    
    Route::get('/donasi/show/{id}', [DonasiController::class, 'show']);
    Route::get('/donasi/edit/{id}', [DonasiController::class, 'formEdit']);
    Route::post('/donasi/update/{id}', [DonasiController::class, 'update']);
    Route::get('/donasi/delete/{id}', [DonasiController::class, 'delete']);
    
    Route::get('/inventaris', [InventarisController::class, 'index']);
    Route::get('/inventaris/create', [InventarisController::class, 'create']);
    Route::post('/inventaris/simpan-data', [InventarisController::class, 'store']);

    Route::get('/inventaris/show/{id}', [InventarisController::class, 'show']);
    Route::get('/inventaris/edit/{id}', [InventarisController::class, 'formEdit']);
    Route::post('/inventaris/update/{id}', [InventarisController::class, 'update']);
    Route::get('/inventaris/delete/{id}', [InventarisController::class, 'delete']);
    
    Route::get('/jabatan', [JabatanController::class, 'index']);
    Route::get('/jabatan/create', [JabatanController::class, 'create']);
    Route::post('/jabatan/simpan-data', [JabatanController::class, 'store']);

    Route::get('/jabatan/show/{id}', [JabatanController::class, 'show']);
    Route::get('/jabatan/edit/{id}', [JabatanController::class, 'formedit']);
    Route::post('/jabatan/update/{id}', [JabatanController::class, 'update']);
    Route::get('/jabatan/delete/{id}', [JabatanController::class, 'delete']);
    
    Route::get('/kegiatan', [KegiatanController::class, 'index']);
    Route::get('/kegiatan/create', [KegiatanController::class, 'create']);
    Route::post('/kegiatan/simpan-data', [KegiatanController::class, 'store']);

    Route::get('/kegiatan/show/{id}', [KegiatanController::class, 'show']);
    Route::get('/kegiatan/edit/{id}', [KegiatanController::class, 'formEdit']);
    Route::post('/kegiatan/update/{id}', [KegiatanController::class, 'update']);
    Route::get('/kegiatan/delete/{id}', [KegiatanController::class, 'delete']);
    
    Route::get('/pengurus', [PengurusController::class, 'index']);
    Route::get('/pengurus/create', [PengurusController::class, 'create']);
    Route::post('/pengurus/simpan-data', [PengurusController::class, 'store']);

    Route::get('/pengurus/show/{id}', [PengurusController::class, 'show']);
    Route::get('/pengurus/edit/{id}', [PengurusController::class, 'formEdit']);
    Route::post('/pengurus/update/{id}', [PengurusController::class, 'update']);
    Route::get('/pengurus/delete/{id}', [PengurusController::class, 'delete']);

    Route::get('/user',[UsersController::class, 'index']);
    Route::get('/user/create',[UsersController::class, 'create']);
    Route::post('/user/simpan-data',[UsersController::class, 'store']);

    Route::get('/user/show/{id}', [UsersController::class, 'show']);
    Route::get('/user/edit/{id}', [UsersController::class, 'formEdit']);
    Route::post('/user/update/{id}',[UsersController::class, 'update']);
    Route::get('/user/delete/{id}',[UsersController::class, 'delete']);

});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register/proses', [RegisterController::class, 'register']);

Route::get('/', [IndexController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/create', [ContactController::class, 'create']);
Route::get('/services', [ServicesController::class, 'index']);