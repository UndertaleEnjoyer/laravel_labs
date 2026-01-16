<!DOCTYPE html>
<html>
<head>
    <title>Добавить игрока</title>
</head>
<body>

<h1>Добавить игрока</h1>

@if ($errors->any())
    <ul style="color:red">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('players.store') }}">
    @csrf

    <label>Команда:</label>
    <select name="team_id">
        @foreach ($teams as $team)
            <option value="{{ $team->id }}" {{ old('team_id') == $team->id ? 'selected' : '' }}>
                {{ $team->name }}
            </option>
        @endforeach
    </select>
    <br><br>

    <label>ФИО:</label>
    <input type="text" name="full_name" value="{{ old('full_name') }}">
    <br><br>

    <label>Позиция:</label>
    <input type="text" name="position" value="{{ old('position') }}">
    <br><br>

    <button type="submit">Сохранить</button>
</form>

</body>
</html>
