<form method="POST" action="{{ route('statues.destroy', $statueId) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Törlés</button>
</form>
