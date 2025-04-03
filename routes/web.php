<?php

use App\Http\Controllers\HomeScreenController;
use App\Http\Controllers\LandingScreenController;
use Illuminate\Support\Facades\Route;

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
    return view('landingscreen.index');
});

Route::get('landing', [LandingScreenController::class, 'index'])->name('landing.index');

Route::get('home',[HomeScreenController::class,'index'])->name('home.index');
