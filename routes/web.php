<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\MUserController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () {
    return view('welcome2');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_Simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);



Route::get('/kategori', [KategoriController::class, 'index'])->name('manage.category');
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('category.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');

Route::resource('m_user', POSController::class);

Route::get('/formUser', [UserController::class, 'formUser']);
Route::get('/formLevel', [UserController::class, 'formLevel']);

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    // Menampilkan halaman awal user
    Route::get('/', [UserController::class, 'index']);

    // Menampilkan data user dalam bentuk JSON untuk datatables
    Route::post('/list', [UserController::class, 'list']);

    // Menampilkan halaman form tambah user
    Route::get('/create', [UserController::class, 'create']);

    // Menyimpan data user baru
    Route::post('/', [UserController::class, 'store']);

    // Menampilkan detail user
    Route::get('/{id}', [UserController::class, 'show']);

    // Menampilkan halaman form edit user
    Route::get('/{id}/edit', [UserController::class, 'edit']);

    // Menyimpan perubahan data user
    Route::put('/{id}', [UserController::class, 'update']);

    // Menghapus data user
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

