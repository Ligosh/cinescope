<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Models\Movie;

// Головна сторінка каталогу
Route::get('/', [MovieController::class, 'index'])->name('movies.index');

// Детальна сторінка фільму
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movies.show');

// Сторінка авторизації
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Панель адміністратора
Route::get('/admin', function () {
    $movies = Movie::all();
    return view('admin.index', compact('movies'));
})->name('admin.index');