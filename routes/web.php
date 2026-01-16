<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\MatchController;

Route::get('/players', [PlayerController::class, 'index'])->name('players.index');

Route::get('/players/create', [PlayerController::class, 'create'])->name('players.create');
Route::post('/players', [PlayerController::class, 'store'])->name('players.store');

Route::get('/players/{id}/edit', [PlayerController::class, 'edit'])->name('players.edit');
Route::put('/players/{id}', [PlayerController::class, 'update'])->name('players.update');

Route::get('/players/{id}', [PlayerController::class, 'show'])->name('players.show');
Route::delete('/players/{id}', [PlayerController::class, 'destroy'])->name('players.destroy');


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
