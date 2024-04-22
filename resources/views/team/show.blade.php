<!DOCTYPE html>
<html>
<head>
    <title>Team Information</title>
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        img {
            width: 150px;
            height: auto;
        }
    </style>
</head>
<body>
<h1>Team: {{ $team->name }}</h1>
<h2>Drivers:</h2>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Country</th>
        <th>Age</th>
    </tr>
    </thead>
    <tbody>
    @foreach($team->drivers as $driver)
        <tr>
            <td><a href="{{ route('driver.show', ['driver' => $driver->id]) }}">{{ $driver->name }}</a></td>
            <td>{{ $driver->country }}</td>
            <td>{{ $driver->age }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
