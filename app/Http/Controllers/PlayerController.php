<?php

namespace App\Http\Controllers;

use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::with('team')->get();
        return view('players.index', compact('players'));
    }

    public function show($id)
{
    $player = Player::with('matches')->findOrFail($id);
    return view('players.show', compact('player'));
}

}
