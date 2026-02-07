<!DOCTYPE html>
<html>
<head>
    <title>Superpowers</title>
</head>
<body>
    <h1>Superpowers</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
        </tr>

        @foreach ($superpowers as $power)
        <tr>
            <td>{{ $power->id }}</td>
            <td>{{ $power->name }}</td>
            <td>{{ $power->description }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
