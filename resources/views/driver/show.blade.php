<!DOCTYPE html>
<html>
<head>
    <title>Driver Information</title>
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
        <img src={{ $driver->image }}>
        <h1>{{ $driver->name }}</h1>
        <p>Country: {{ $driver->country }}</p>
        <p>Team: <a href="{{ route('team.show', ['team' => $driver->team->id]) }}">{{ $driver->team->name }}</a></p>
        <p>Age: {{ $driver->age }}</p>

        <h2>Results in racing</h2>
        <table>
            <thead>
            <tr>
                <th>Race Name</th>
                <th>Date</th>
                <th>Points</th>
            </tr>
            </thead>
            <tbody>
            @foreach($driver->races as $race)
                <tr>
                    <td><a href="{{ route('race.show', ['race' => $race->id]) }}">{{ $race->name }}</a></td>
                    <td>{{ $race->date }}</td>
                    <td>{{ $driver->races->find($race->id)->pivot->points }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </body>
</html>
