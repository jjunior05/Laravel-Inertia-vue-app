<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TesteController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/students', [PagesController::class, 'students'])->name('students');
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/students', function () {
//     return Inertia\Inertia::render('Students');
// })->name('students');

// Route::get('/', function(){
//     return view('welcome');
// });
// Route::get('/students', [CourseController::class, 'index']);
// Route::get('/courses', [CourseController::class, 'index']);
// Route::post('/courses', [CourseController::class, 'store']);
