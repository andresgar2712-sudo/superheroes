<h1>Superheroes</h1>

<a href="{{ route('superheroes.create') }}">Create new</a>

<ul>
@foreach($superheroes as $hero)
    <li>
        {{ $hero->name }} - {{ $hero->universe->name }}
    </li>
@endforeach
</ul>