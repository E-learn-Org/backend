<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmeAuthController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [SmeAuthController::class, 'login']);

Route::get('/register', [SmeAuthController::class, 'registration']);

// send informations to database
Route::post('/register-student', [SmeAuthController::class, 'registerStudent'])->name('register_student');
Route::post('/login-user', [SmeAuthController::class, 'loginStudent'])->name('login_user');

// dashoard link
Route::get('/dashboard', [SmeAuthController::class, 'dashboard']);
