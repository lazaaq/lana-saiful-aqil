<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes([
  'register' => false,
  'reset' => false,
]);

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/skills', [HomeController::class, 'skills'])->name('skills');
Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
