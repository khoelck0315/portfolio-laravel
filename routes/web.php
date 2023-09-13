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
    return view('home', ['title' => "Kevin Hoelck Portfolio - Home"]);
})->name('home');

Route::get('/contact', function() {
    return "Contact Form!";
})->name('contact');

Route::controller(PortfolioController::class)->group(function() {
    Route::get('/portfolio', 'myPortfolio');
    Route::post('/portfolio', 'userGithub');
});

//Route::get('/portfolio', PortfolioController::class)->name('portfolio');
//Route::post('/portfolio')
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
