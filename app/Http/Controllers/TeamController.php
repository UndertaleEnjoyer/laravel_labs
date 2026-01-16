<?php

namespace App\Http\Controllers;

use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('teams.index', compact('teams'));
    }

    public function show($id)
    {
        $team = Team::with('players')->findOrFail($id);
        return view('teams.show', compact('team'));
    }
}
