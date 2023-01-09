<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataImigrationController extends Controller
{
    public function index() {
        return view('admin.data-imigration');
    }
}
