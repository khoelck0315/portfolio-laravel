<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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
    return view('welcome', ['title' => "Kevin Hoelck Portfolio - Home"]);
})->name('home');

Route::get('/contact', function() {
    return "Contact Form!";
})->name('contact');

Route::get('/portfolio', PortfolioController::class)->name('portfolio');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
