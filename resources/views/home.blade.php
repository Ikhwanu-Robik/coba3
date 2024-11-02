<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        * {
            background-color: #000;
            color: white;
            border: 1px solid white;
        }
    </style>
</head>

<body>
    <div>
        Player ID : {{ request('player_id') }}
    </div>
    @if (session('msg'))
        <div>
            {{ session("msg") }}
        </div>
    @endif
    <form action="{{ url('/check') }}" method="post">
        @csrf
        <input type="hidden" name="player_id" value="{{ request('player_id') }}">
        <input type="number" name="guess" id="guess" placeholder="guess">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
