<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        return view('home');
    }
    
    public function index()
    {
        return view('index');
    }

    public function skills()
    {
        $skills = Skill::all();
        return view('skills', [
            'skills' => $skills
        ]);
    }

    public function projects()
    {
        return view('projects');
    }
}
