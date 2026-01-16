<h1>Матч #{{ $match->id }}</h1>

<h2>Команды:</h2>
<p>
    {{ $match->team1->name }} — {{ $match->team2->name }}
</p>

<h2>Голы:</h2>

<ul>
@foreach($match->goals as $goal)
    <li>
        {{ $goal->minute }}' —
        {{ $goal->player->full_name }}
    </li>
@endforeach
</ul>
