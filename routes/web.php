<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homePageController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\PageController as ControllersPageController;

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
    return redirect('home');
})->middleware('auth');;

Route::get('/home', [pageController::class, 'home'])->name('home')->middleware('auth');;

