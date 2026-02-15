<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoursesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [StudentController::class, 'studentRegister']);
Route::post('/login', [StudentController::class, 'studentLogin']);
Route::post('/logout', [StudentController::class, 'studentLogout']);
Route::get('/students', [StudentController::class, 'showALLStudent']);
Route::get('/courses', [CoursesController::class, 'showCourses']);