<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/',[HomeController::class, 'index']);
route::get('/contact',[HomeController::class, 'contact']);

use App\Http\Controllers\trendingController;

Route::get('/trending', [trendingController::class, 'index']);

Route::get('/trending', function () {
    return view('trending');
});

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListItemController;

use App\Http\Controllers\TerdekatController;
use App\Http\Controllers\EventController;

Route::get('/terdekat', [TerdekatController::class, 'index']);
Route::get('/event', [EventController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/listitem', [ListItemController::class, 'index']);



