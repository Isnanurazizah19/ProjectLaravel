<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::middleware(['auth'])->prefix('users')->group(function () {
    // Read - Menampilkan semua user
    Route::get('/', [UserController::class, 'index']);

    // Read - Menampilkan form untuk membuat user baru
    Route::get('/create', [UserController::class, 'create']);

    // Create - Menyimpan user baru ke database
    Route::post('/', [UserController::class, 'store']);

    // Read - Menampilkan informasi detail user
    Route::get('/{user}', [UserController::class, 'show']);

    // Update - Menampilkan form untuk mengedit user
    Route::get('/{user}/edit', [UserController::class, 'edit']);

    // Update - Menyimpan perubahan pada user ke database
    Route::put('/{user}', [UserController::class, 'update']);

    // Delete - Menghapus user dari database
    Route::delete('/{user}', [UserController::class, 'destroy']);
});