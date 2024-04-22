<!DOCTYPE html>
<html>
<head>
    <title>Race Information</title>
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
<h1>{{ $race->name }}</h1>
<p>Date: {{ $race->date }}</p>
<h2>Drivers</h2>
<table>
    <thead>
    <tr>
        <th>Driver Name</th>
        <th>Points</th>
    </tr>
    </thead>
    <tbody>
    @foreach($drivers as $driver)
        <tr>
            <td><a href="{{ route('driver.show', ['driver' => $driver->id]) }}">{{ $driver->name }}</a></td>
            <td>{{ $driver->pivot->points }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
