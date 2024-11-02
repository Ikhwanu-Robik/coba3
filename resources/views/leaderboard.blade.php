<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <?php
    $no = 1;
    ?>
    <table>
        <thead>
            <th>No.</th>
            <th>Name</th>
            <th>Score</th>
            <th>Answer</th>
        </thead>
        <tbody>
            @foreach ($players as $player)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $player->name }}</td>
                    <td>{{ $player->score }}</td>
                    <td>{{ $player->answer }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
