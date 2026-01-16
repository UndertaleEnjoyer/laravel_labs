<h1>Players</h1>

<ul>
@foreach($players as $player)
    <li>
        <a href="{{ route('players.show', $player->id) }}">
            {{ $player->full_name }}
        </a>
        — {{ $player->team->name }}
    </li>
@endforeach
</ul>
