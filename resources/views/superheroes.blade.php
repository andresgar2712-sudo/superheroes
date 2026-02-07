<!DOCTYPE html>
<html>
<head>
    <title>Superheroes</title>
</head>
<body>
    <h1>Superheroes</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Real Name</th>
            <th>Gender</th>
            <th>Universe ID</th>
        </tr>

        @foreach ($superheroes as $hero)
        <tr>
            <td>{{ $hero->id }}</td>
            <td>{{ $hero->name }}</td>
            <td>{{ $hero->real_name }}</td>
            <td>{{ $hero->gender }}</td>
            <td>{{ $hero->universe_id }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
