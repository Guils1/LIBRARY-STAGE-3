<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AllBooksController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\AdminBooksController;
use App\Http\Controllers\AdminTeamController;
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

// All books
Route::get('/books', [AllBooksController::class, 'index']);



// admin fornecedores
Route::get('/admin/suppliers', [AdminTeamController::class, 'index'])->name('admin.suppliers')->middleware('auth');

// admin team
Route::get('/admin/team', [AdminTeamController::class, 'index'])->name('admin.team')->middleware('auth');

// admin security
Route::get('/admin/security', [AdminTeamController::class, 'index'])->name('admin.security')->middleware('auth');

// admin imigration
Route::get('/admin/data-imigration', [AdminTeamController::class, 'index'])->name('admin.data-imigration')->middleware('auth');

// admin function
Route::get('/admin/admin-roles', [AdminTeamController::class, 'index'])->name('admin.roles')->middleware('auth');

// admin books
Route::get('/admin/books', [AdminBooksController::class, 'index'])->name('admin.books');
Route::get('/admin/books/{books:slug}', [BookController::class, 'show'])->middleware('auth');

// admin edit
Route::get('/admin/books/{books}/edit', [AdminBooksController::class, 'edit'])->middleware('auth');
Route::put('/admin/books/{books}', [AdminBooksController::class, 'update'])->name('admin.books.update')->middleware('auth');

// admin create
Route::get('/admin/create', [AdminBooksController::class, 'create'])->name('admin.books.create')->middleware('auth');
Route::post('/admin/create', [AdminBooksController::class, 'store'])->name('admin.books.store')->middleware('auth');

// admin delete
Route::delete('/admin/books/{books}/delete', [AdminBooksController::class, 'destroy'])->name('admin.books.destroy')->middleware('auth');


// fallback
Route::fallback(function () {
    return view('notfound');    
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});
