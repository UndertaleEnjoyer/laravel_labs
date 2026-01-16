@foreach($players as $player)
    <p>
        {{ $player->full_name }}

        <a href="{{ route('players.edit', $player->id) }}">Edit</a>

        <form action="{{ route('players.destroy', $player->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach
