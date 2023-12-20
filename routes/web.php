<?php

use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Models\Film;
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
    return view('welcome');
});



Route::group([], function () {

    Route::get("/film",[FilmController::class, "list"])
        ->name("film.list");

    Route::post("/film",[FilmController::class, "create"])
        ->name("film.create");
});

Route::group([], function () {

    Route::get("/login",[UserController::class, "formulaire"])
        ->name("user.form");

    Route::post("/login",[UserController::class, "login"])
        ->name("user.login");

    Route::post("/register",[UserController::class, "create"])
        ->name("user.create");
});

