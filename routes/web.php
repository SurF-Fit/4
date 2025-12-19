<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CreateExamplesController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('loginPage', [PageController::class, 'login'])->name('loginPage');
Route::post('registration', [AuthController::class, 'registration'])->name('registration');
Route::get('registrationPage', [PageController::class, 'registration'])->name('registrationPage');
Route::get('createExamplePage', [PageController::class, 'createExamples'])->name('createExamplePage');
Route::post('createExample', [CreateExamplesController::class, 'create'])->name('createExample');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
