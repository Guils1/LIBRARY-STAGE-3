<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AdminBooksController extends Controller
{

    public function index(Request $request) {
        
        $books = Books::query();

        $books->when($request->search, function ($query, $sr) {
            $query->where('name', 'like', '%' . $sr . '%');
        });

        $books = $books->paginate(5);

        return view('admin.books', [
            'books' => $books
        ]);
    }

    public function edit(Books $books) {

        return view('admin.books_edit', [
            'books' => $books
        ]);
    }

    public function update(Books $books, Request $request) {
        $input = $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'integer|nullable',
            'cover' => 'url|nullable',
            'description' => 'string|nullable'
        ]);
        $books->fill($input);
        $books->save();
    
        return Redirect::route('admin.books');
    }

    public function create() {
        return view('admin.books_create');
    }

    public function store(Request $request) {
        $input = $request->validate([
            'name' => 'string|required',
            'price' => 'string|required',
            'stock' => 'integer|nullable',
            'cover' => 'url|nullable',
            'description' => 'string|nullable',
        ]);
        $input['slug'] = Str::slug($input['name']);

        $input['user_id'] = Auth::user()->id;
        
        Books::create($input);

        return Redirect::route('admin.books');

    }

    public function destroy(Books $books) {
        $books->delete();

        return Redirect::route('admin.books');
        
    }
}
