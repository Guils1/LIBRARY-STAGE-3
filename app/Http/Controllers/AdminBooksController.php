<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AdminBooksController extends Controller
{

    public function index() {
        $books = Books::all();
        return view('admin.books', [
            'books' => $books
        ]);
    }

    public function edit() {
        $books = Books::all();
        return view('admin.books_edit', [
            'books' => $books
        ]);
    }

    public function update() {
        return view('admin.books_edit');
    }

    public function create() {
        return view('admin.books_create');
    }

    public function store(Request $request) {
        $input = $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'integer|nullable',
            'cover' => 'file|nullable',
            'description' => 'string|nullable'
        ]);
        $input['slug'] = Str::slug($input['name']);

        if ( !empty($input['cover']) && $input['cover']->isValid()) {
            $file = $input['cover'];
            $path = $file->store('public/img');
            $input['cover'] = $path;
        }
        
        Books::create($input);

        return Redirect::route('admin.books.create');
    }
}
