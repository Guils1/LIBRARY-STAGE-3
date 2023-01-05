<?php

namespace App\Http\Controllers;

use App\Models\Books;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function show(Books $books) {
        return view('books', [
            'books' => $books
        ]);
    }
}
