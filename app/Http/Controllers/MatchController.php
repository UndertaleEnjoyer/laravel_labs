<?php

namespace App\Http\Controllers;

use App\Models\MatchModel;

class MatchController extends Controller
{
    public function show($id)
    {
        $match = MatchModel::with('players')->findOrFail($id);
        return view('matches.show', compact('match'));
    }
}
