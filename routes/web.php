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

Route::get('/subjects', [Dashboard::class, 'showSubjects'])->name('showSubjects');
Route::get('/courses', [Dashboard::class, 'showCourses'])->name('showCourses');

Route::get('/subjects/{subject}', [Dashboard::class, 'showSingleSubject'])->name('showSingleSubject');
Route::get('/subjects/{subject}/courses', [Dashboard::class, 'showCoursesForSingleSubject'])->name('showCoursesForSingleSubject');

Route::get('/courses/{course}', [Dashboard::class, 'showSingleCourse'])->name('showSingleCourse');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/users', [UserController::class, 'store']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
