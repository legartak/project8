<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\RaceController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/driver/{driver}', [DriverController::class, 'show'])->name('driver.show');

Route::get('/team/{team}', [TeamController::class, 'show'])->name('team.show');

Route::get('/race/{race}', [RaceController::class, 'show'])->name('race.show');

Route::get('/races', [RaceController::class, 'index'])->name('races.index');

