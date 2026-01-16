<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\MatchController;

Route::get('/matches/{id}', [MatchController::class, 'show'])
    ->name('matches.show');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello', ['title' => 'hello world!']);
});

Route::get('/teams', [TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/{id}', [TeamController::class, 'show'])->name('teams.show');

Route::get('/players', [PlayerController::class, 'index'])->name('players.index');
Route::get('/players/{id}', [PlayerController::class, 'show'])->name('players.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
