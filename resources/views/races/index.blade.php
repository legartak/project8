<!DOCTYPE html>
<html>
<head>
    <title>Race List</title>

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
<h1>Races</h1>
<table>
    <thead>
    <tr>
        <th>Race Name</th>
        <th>Date</th>
    </tr>
    </thead>
    <tbody>
    @foreach($races as $race)
        <tr>
            <td><a href="{{ route('race.show', ['race' => $race->id]) }}">{{ $race->name }}</a></td>
            <td>{{ $race->date }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
