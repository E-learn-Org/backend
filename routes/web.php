<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmeAuthController;
use App\Http\Controllers\SpecialtyController;

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

// Student Controller
Route::get('/login', [SmeAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('/register', [SmeAuthController::class, 'registration'])->middleware('alreadyLoggedIn');
Route::post('/register-student', [SmeAuthController::class, 'registerStudent'])->name('register_student');
Route::post('/login-user', [SmeAuthController::class, 'loginStudent'])->name('login_user');

// specialty controller
Route::get('/specialty', [SpecialtyController::class, 'insertSpecialty']);
Route::post('/insert-specialty', [SpecialtyController::class, 'registerSpecilaty'])->name('insert-specialty');

// dashoard link
Route::get('/dashboard', [SmeAuthController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [SmeAuthController::class, 'logout']);

Route::get('/dashboard2', [SmeAuthController::class, 'dashboard2']);

Route::get('/specialtyinfo', [SmeAuthController::class, 'selectSpecialty']);
