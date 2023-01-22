<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class AllBooksController extends Controller
{
    public function index(Request $request) {
        
        $books = Books::query();

        $books->when($request->search, function ($query, $sr) {
            $query->where('name', 'like', '%' . $sr . '%');
        });

        $books = $books->paginate(8);

        return view('allbooks', [
            'books' => $books
        ]);
    }
}
