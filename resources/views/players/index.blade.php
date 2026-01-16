<h1>Players</h1>

@foreach($players as $player)
    <p>
        {{ $player->full_name }}
        ({{ $player->position }})
        — {{ $player->team->name }}
    </p>
@endforeach
