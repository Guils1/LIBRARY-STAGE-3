<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AllBooksController;
use App\Models\Books;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

// home
Route::get('/', [IndexController::class, 'index']);

// All books
Route::get('/books', [AllBooksController::class, 'index'])->name('allbooks');

// ADMIN BOOK CONTROLLER -----------------------------------------------------------------------------
Route::resource('admin', 'App\Http\Controllers\AdminBooksController')->middleware('auth');

// FALLBACK -----------------------------------------------------------------------------
Route::fallback(function () {return view('notfound');});

// JETSTREAM -----------------------------------------------------------------------------
Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
Route::get('/dashboard', function () {return view('admin.dashboard');})->name('dashboard');});

// EMAIL -----------------------------------------------------------------------------

Route::get('admin/send/{id}', function ($id) {
    $user = Auth::user();
    $books = Books::find($id);
    // dd($books);
    Mail::send('email.send', ['Nome' => $user->name,'Cod' => $books->id, 'Nome_livro' => $books->name, 'Valor' => $books->price], function ($msg) {
        $email = Auth::user()->email;
        $msg->from('guilherme.valerio@pedbot.com.br', 'Guilherme Valério');
        $msg->subject('Livro alugado'); 
        $msg->to($email);
        });
    return back()->with('status', 'Profile updated!');
})->name('send.books');