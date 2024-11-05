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
    <h1>Tebak Angka</h1>
    <h2>Made by Ikuubi Okuna</h2>
    <form action="{{ url('/start') }}" method="post">
        @csrf
        <input type="text" name="name" id="name" placeholder="name">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
