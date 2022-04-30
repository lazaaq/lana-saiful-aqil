<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        return view('home');
    }

    public function skills() {
        return view('skills');
    }

    public function projects() {
        return view('projects');
    }
}
