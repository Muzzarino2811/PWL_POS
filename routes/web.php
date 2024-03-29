<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/home', function () {
    return view('home');
});

// Halaman Product
Route::prefix('category')->group(function () {
    Route::get('/foodbeverage', [ProductController::class, 'foodbeverage']);
    Route::get('/beautyhealth', [ProductController::class, 'beautyhealth']);
    Route::get('/homecare', [ProductController::class, 'homecare']);
    Route::get('/babykid', [ProductController::class, 'babykid']);
});

Route::get('/category', function () {
    return 'Isi Kategori di URL (foodbeverage, beautyhealth, homecare, baby)';
});

//Halaman User
Route::get('user/{id?}/name/{name?}', function ($id = null, $name = null) {
    return 'ID = ' . $id . ' Nama = ' . $name;
});

// Halaman Penjualan
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::post('/kategori/simpanedit', [KategoriController::class, 'simpanEdit']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);
