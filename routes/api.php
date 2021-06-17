<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\TesteController;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('students', 'App\Http\Controllers\StudentController');
Route::apiResource('courses', 'App\Http\Controllers\CourseController');

// Route::post('/teste', [TesteController::class, 'test']);
// Route::post('/teste', [TesteController::class, 'test']);
// Route::get('/getStudents', [StudentController::class, 'index']);
