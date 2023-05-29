<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('create-mahasiswa', [MahasiswaController::class, 'create'])->name('create.mahasiswa');
Route::post('store-mahasiswa', [MahasiswaController::class, 'store'])->name('store.mahasiswa');
Route::get('edit-mahasiswa/{id}', [MahasiswaController::class, 'edit'])->name('edit.mahasiswa');
Route::post('update-mahasiswa', [MahasiswaController::class, 'update'])->name('update.mahasiswa');
Route::post('destroy-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('destroy.mahasiswa');