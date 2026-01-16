<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Team;
use App\Models\Player;

class MatchModel extends Model
{
    use HasFactory;

    protected $table = 'matches';

    protected $fillable = [
        'team1_id',
        'team2_id',
    ];

    // Команда-хозяин
    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    // Гостевая команда
    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    // MANY-TO-MANY: матч ↔ игроки через goals
    public function players()
    {
        return $this->belongsToMany(
            Player::class,
            'goals',
            'match_id',
            'player_id'
        )->withPivot('minute')->withTimestamps();
    }
}
