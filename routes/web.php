<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
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
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'login']);
Route::get('/dashboard', [UserController::class, 'index']);

// ! Hanya dapat diakses ketika sudah melakukan login
Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
    
});

