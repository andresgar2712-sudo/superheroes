<!DOCTYPE html>
<html>
<head>
    <title>Universes</title>
</head>
<body>
    <h1>Universes</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Universe</th>
            <th>Company</th>
            <th>Age</th>
        </tr>

        @foreach ($universes as $universe)
        <tr>
            <td>{{ $universe->id }}</td>
            <td>{{ $universe->universe }}</td>
            <td>{{ $universe->company }}</td>
            <td>{{ $universe->age }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
