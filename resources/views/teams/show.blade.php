<h1>{{ $team->name }}</h1>

<h2>Players</h2>
<ul>
@foreach($team->players as $player)
    <li>{{ $player->full_name }} ({{ $player->position }})</li>
@endforeach
</ul>
