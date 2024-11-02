<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;

Route::get('/', function () {
    return view('index');
});

Route::post("/start", [PlayerController::class, "start"]);

Route::get("/home", function () {
    return view("home");
})->name("home");

Route::post("/check", [PlayerController::class, "check"])->name("check");

Route::get("/leaderboard", [PlayerController::class, "win"])->name("leaderboard");