<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\RegisterController;

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

Route::get('/student_show', [StudentController::class, 'index']);
Route::get('/show_token', [StudentController::class, 'showToken']);

Route::post('/student_store', [StudentController::class, 'store']);
Route::post('/student_update', [StudentController::class, 'update']);
Route::delete('/delete_student', [StudentController::class, 'delete']);

