<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\MessageController;

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

Route::get('/', HomeController::class)->name('home');

Route::controller(MessageController::class)->group(function() {
    Route::get('/contact', 'compose');
    Route::post('/contact', 'send');
});

Route::controller(PortfolioController::class)->group(function() {
    Route::get('/portfolio', 'myPortfolio');
    Route::post('/portfolio', 'userGithub');
});

Route::view('/thankyou', 'thankyou');


