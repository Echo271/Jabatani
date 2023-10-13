<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KomoditasController;
use App\Http\Controllers\PedagangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PetaniController;
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
// ! Dapat diakses tanpa melakukan login
Route::get('/', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'valid']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'create']);

// ! Hanya dapat diakses ketika sudah melakukan login
Route::group(['middleware' => ['auth']], function () {
    // ! User
    Route::get('/profile', [UserController::class, 'profile']);
    Route::get('/dashboard', [UserController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/akun', [PetaniController::class, 'akun']);
});
// ! Pedagang
Route::group(['middleware' => ['auth']], function () {
    Route::get('/list/{kategori?}', [PedagangController::class, 'kategori'])->name('list');
    Route::get('/pesanan', [KomoditasController::class, 'pesanan']);
    Route::post('/pesanan', [PedagangController::class, 'order']);
    Route::get('/single-pedagang/{id_komoditas}/{id_pedagang}', [PedagangController::class, 'single']);
    Route::get('/profile-visit', [UserController::class, 'profileVisit']);
});
// ! Petani
Route::group(['middleware' => ['auth', 'role:petani']], function () {
    Route::get('/create', [KomoditasController::class, 'create']);
    Route::post('/create', [KomoditasController::class, 'store']);
    Route::get('/update/{id?}', [KomoditasController::class, 'update']);
    Route::post('/update', [KomoditasController::class, 'edit']);
    Route::get('/single-petani/{id_komoditas}/{id_petani}', [KomoditasController::class, 'single']);
    Route::get('/delete/{id_komoditas}/{id_petani}', [KomoditasController::class, 'delete']);
});
