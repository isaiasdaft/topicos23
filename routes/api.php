<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\RegisterController;

/*

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::middleware('auth:api')->group( function () {
    Route::get('/student_show', [StudentController::class, 'index']);
});


Route::get('/student_show', [StudentController::class, 'index']);
Route::get('/show_token', [StudentController::class, 'showToken']);

Route::post('/student_store', [StudentController::class, 'store']);
Route::post('/student_update', [StudentController::class, 'update']);
Route::delete('/delete_student', [StudentController::class, 'delete']);

