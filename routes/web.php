<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminBooksController;
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

// home
Route::get('/', [IndexController::class, 'index']);

// admin home
Route::get('/admin', [UserController::class, 'index']);

// admin profile
Route::get('/admin/profile', [AdminProfileController::class, 'index']);

// admin books
Route::get('/admin/books/', [AdminBooksController::class, 'index']);
Route::get('/admin/books/{books:slug}', [BookController::class, 'show']);

// admin edit
Route::get('/admin/books/{books:slug}/edit', [AdminBooksController::class, 'edit']);
Route::put('/admin/books/{books:slug}', [AdminBooksController::class, 'update']);

// admin create
Route::get('/admin/create', [AdminBooksController::class, 'create'])->name('admin.books.create');
Route::post('/admin/create', [AdminBooksController::class, 'store']);
// fallback
Route::fallback(function () {
    return view('notfound');    
});