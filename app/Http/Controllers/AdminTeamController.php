<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTeamController extends Controller
{
    public function index() {
        return view('admin.team');
    }
}
