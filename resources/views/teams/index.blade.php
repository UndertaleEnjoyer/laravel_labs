<h1>Teams</h1>

<ul>
@foreach($teams as $team)
    <li>
        <a href="{{ route('teams.show', $team->id) }}">
            {{ $team->name }}
        </a>
    </li>
@endforeach
</ul>
