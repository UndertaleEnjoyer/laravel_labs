<h1>{{ $player->name }}</h1>

<h3>Матчи игрока:</h3>

<ul>
    @foreach ($player->matches as $match)
        <li>
            Матч #{{ $match->id }},
            минута гола: {{ $match->pivot->minute }}
        </li>
    @endforeach
</ul>
