<!DOCTYPE html>
<html>
<head>
    <title>Edit Player</title>
</head>
<body>

<h1>Edit Player</h1>

@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('players.update', $player->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Команда:</label>
    <select name="team_id">
        @foreach ($teams as $team)
            <option value="{{ $team->id }}"
                {{ old('team_id', $player->team_id) == $team->id ? 'selected' : '' }}>
                {{ $team->name }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>Имя:</label>
    <input type="text" name="full_name" value="{{ old('full_name', $player->full_name) }}">
    <br><br>

    <label>Позиция:</label>
    <input type="text" name="position" value="{{ old('position', $player->position) }}">
    <br><br>

    <button type="submit">Обновить</button>
    
</form>

<button> <a href="{{ route('players.index') }}">Назад</a></button>

</body>
</html>
