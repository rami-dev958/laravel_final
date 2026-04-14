<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;


Route::get('/', function () {
    return view('welcome');
});


// login
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// حماية الصفحات
Route::middleware(['checkLogin'])->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/create', [BookController::class, 'create']);
    Route::post('/store', [BookController::class, 'store']);
    Route::get('/edit/{id}', [BookController::class, 'edit']);
    Route::post('/update/{id}', [BookController::class, 'update']);
    Route::get('/delete/{id}', [BookController::class, 'delete']);
});




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
