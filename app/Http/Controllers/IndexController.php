<?php

namespace App\Http\Controllers;

use \App\Models\Books;   

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {

        $books = Books::all();
        
        return view('index');
    } 
}
