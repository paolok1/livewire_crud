<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;


// ArticleController
Route::get('/', [ArticleController::class, 'home'])->name('welcome');

// CREATE
Route::get('articles/create', [ArticleController::class, 'create'])->name('articles.create');
// INDEX
Route::get('articles/index', [ArticleController::class, 'index'])->name('articles.index');
// SHOW
Route::get('articles/show/{article}', [ArticleController::class, 'show'])->name('articles.show');
// MODIFICA
Route::get('articles/edit/{article}', [ArticleController::class, 'edit'])->name('articles.edit');
