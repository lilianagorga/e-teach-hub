<?php

use App\Http\Controllers\UI\Dashboard;
use App\Http\Controllers\UI\UserController;
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
Route::get('/', [Dashboard::class, 'index'])->name('index');
Route::get('/subjects/{subject}', [Dashboard::class, 'showSubject'])->name('showSubject');
Route::get('/subjects/courses', [Dashboard::class, 'courses'])->name('courses');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
