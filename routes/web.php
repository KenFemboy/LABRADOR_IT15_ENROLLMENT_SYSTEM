<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register', [StudentController::class, 'studentRegister']);


Route::post('/courses', function () {
    return view('courses');
});