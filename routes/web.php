<?php

use App\Http\Controllers\Dashboard\EmployeeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware('guest')->group(function () {

    Route::get('login', [AuthController::class, 'showLoginView'])->name('login.view');
    Route::post('login', [AuthController::class, 'login'])->name('login.post');

    Route::get('register', [AuthController::class, 'showRegisterView'])->name('register.view');
    Route::post('register', [AuthController::class, 'register'])->name('register.post');
});


Route::middleware('auth')->group(function () {

    Route::post("logout", [AuthController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [ProfileController::class, 'passwordUpdate'])->name('profile.password.update');
    //

    Route::resource('employees', EmployeeController::class);
});
