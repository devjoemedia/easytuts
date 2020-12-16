<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TutorialsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\DashboardController;

Route::get('/', [PagesController::class, 'index'])->name('index ');
// Route::get('/contacts', [PagesController::class, 'getContact'])->name('pages.contact ');
// Route::get('/about', [PagesController::class, 'getAbout'])->name('pages.about ');

// Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::prefix('tutorials')->group(function(){
  Route::get('/', [TutorialsController::class, 'getAll'])->name('tutorials.all');
  Route::get('/{slug}', [TutorialsController::class, 'getSingle'])->name('tutorials.single');
  
  
  Route::get('/tags/by-tag', [TagsController::class, 'getByTagName'])->name('tutorials.tag');
  Route::get('/categories/by-category', [CategoriesController::class, 'byCategory'])->name('tutorials.category');
});

Route::prefix('admin')->group( function(){
  Route::get('/', [AdminController::class, 'index']);
  Route::resource('posts', PostController::class);
  Route::resource('users', UserController::class);
  Route::resource('categories', CategoriesController::class);
  Route::resource('tags', TagsController::class);
});


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'signuP'])->name('register');
