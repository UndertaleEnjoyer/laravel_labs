<!DOCTYPE html>
<html>
<head>
    <title>Players</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .player {
            margin-bottom: 10px;
        }
        a {
            margin-left: 8px;
            text-decoration: none;
            color: blue;
        }
        button {
            margin-left: 8px;
        }
    </style>
</head>
<body>

<h1>Players</h1>

<a href="{{ route('players.create') }}">➕ Добавить игрока</a>

<hr>

@foreach($players as $player)
    <div class="player">
        <strong>{{ $player->full_name }}</strong>
        ({{ $player->position }})
        — {{ $player->team->name }}

        <a href="{{ route('players.show', $player->id) }}">Просмотреть</a>
        <a href="{{ route('players.edit', $player->id) }}">Изменить</a>

        <form action="{{ route('players.destroy', $player->id) }}"
              method="POST"
              style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit"
                    onclick="return confirm('Delete this player?')">
                Delete
            </button>
        </form>
    </div>
@endforeach

</body>
</html>
