<h1>Create Superhero</h1>

<form method="POST" action="{{ route('superheroes.store') }}">
    @csrf

    <input type="text" name="name" placeholder="Superhero name">

    <select name="universe_id">
        @foreach($universes as $universe)
            <option value="{{ $universe->id }}">{{ $universe->name }}</option>
        @endforeach
    </select>

    <button type="submit">Save</button>
</form>