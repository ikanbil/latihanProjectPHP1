<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\DepartementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'data']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/grade', [GradeController::class, 'index']);
Route::get('/departement', [DepartementController::class, 'index']);

