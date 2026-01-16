<h1>Матч #{{ $match->id }}</h1>

<h3>Участники матча:</h3>

<ul>
    @foreach ($match->players as $player)
        <li>
            {{ $player->name }}
            (минута гола: {{ $player->pivot->minute }})
        </li>
    @endforeach
</ul>
