<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\SubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/subject', [SubjectController::class, 'index']);
Route::get('/course', [CourseController::class, 'index']);

Route::post('/subject', [SubjectController::class, 'store']);
Route::post('/course', [CourseController::class, 'store']);


Route::get('/subject/{id}', [SubjectController::class, 'show']);
Route::put('/subject/{id}', [SubjectController::class, 'update']);
Route::delete('/subject/{id}', [SubjectController::class, 'destroy']);

Route::get('/course/{id}', [CourseController::class, 'show']);
Route::put('/course/{id}', [CourseController::class, 'update']);
Route::delete('/course/{id}', [CourseController::class, 'destroy']);

Route::patch('/course/{id}/seats', [CourseController::class, 'updateSeats']);

