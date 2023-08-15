<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('pages.home');
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('projects', function () {
    return view('pages.projects');
});

Route::get('contact', function () {
    return view('pages.contact');
});

Route::resource('home', HomeController::class);
