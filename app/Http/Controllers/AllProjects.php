<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllProjects extends Controller
{
    public function index(){
        return view('home');
    }
}
