<?php

use App\Http\Controllers\CustomAuth\LoginController;
use App\Http\Controllers\CustomAuth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DemandController;
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

Route::middleware('auth:sanctum')->group(function ()
{
   Route::apiResource('/subject', SubjectController::class);
   Route::apiResource('/course', CourseController::class);
   Route::apiResource('/demand', DemandController::class);
   Route::patch('/course/{id}/seats', [CourseController::class, 'updateSeats']);
});


Route::post('/user.register', RegisterController::class);
Route::post('/user.login', LoginController::class);
