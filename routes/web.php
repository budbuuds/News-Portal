<?php

use Illuminate\Support\Facades\Route;
use App\Models\TulisBerita;
use App\Models\Kategori;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\TulisBeritaController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\SemuaBeritaController;
use App\Http\Controllers\Reader\BeritaDetailController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/detail/{id}', [BeritaDetailController::class, 'detail']);
Route::get('/kategori/{id}', [HomeController::class, 'kategori'])->name('kategori');
Route::get('/semua', [HomeController::class, 'semua'])->name('semua');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $berita = TulisBerita::all();
    // $ktgr_array = Kategori::all();
    return view('dashboard',compact('berita'));
})->name('dashboard');
Route::prefix('admin')->group(function () {
    Route::get('/beranda', [BerandaController::class, 'beranda']);
    Route::get('/tulis', [TulisBeritaController::class, 'index']);
    Route::get('/semua', [SemuaBeritaController::class, 'index']);
    Route::get('/detail/{id}',[SemuaBeritaController::class, 'detail'])->name('detail');
    // Route::get('/detail', [SemuaBeritaController::class, 'detail']);
});

Route::prefix('tulis')->group(function () {
    Route::post('/create', [TulisBeritaController::class, 'create'])->name('create');
    Route::get('/{id}/edit',[TulisBeritaController::class, 'edit'])->name('edit');
    Route::post('/{id}/update',[TulisBeritaController::class, 'update'])->name('update');
    Route::get('/{id}/delete', [TulisBeritaController::class, 'delete'])->name('delete');
});

Route::prefix('kategori')->group(function () {
    Route::post('/create', [KategoriController::class, 'create'])->name('create');
    Route::post('/{id}/update',[KategoriController::class, 'update'])->name('update');
    Route::get('/{id}/delete', [KategoriController::class, 'delete'])->name('delete');
});