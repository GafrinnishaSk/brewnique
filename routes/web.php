<?php

use App\Http\Controllers\HomeScreenController;
use App\Http\Controllers\LandingScreenController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuListController;
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

// Menu CRUD Routes
Route::get('menus',[MenuController::class,'index'])->name('menus.index');
Route::get('menus/list',[MenuController::class,'list'])->name('menus.list');
Route::get('menus/create',[MenuController::class,'create'])->name('menus.create');
Route::post('menus',[MenuController::class,'store'])->name('menus.store');
Route::get('menus/{id}/edit',[MenuController::class,'edit'])->name('menus.edit');
Route::put('menus/{id}',[MenuController::class,'update'])->name('menus.update');
Route::delete('menus/{id}',[MenuController::class,'destroy'])->name('menus.destroy');



// Route::resource('menus', MenuController::class);
