<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $students -> title }}</title>
</head>
<body>
    <h1>{{ $students -> lastname }}</h1>
    <p> {{ $students -> firstname }}</p>
    <h1>{{ $students -> middlename }}</h1>
    <p> {{ $students -> birthdate }}</p>
    <h1>{{ $students -> sex }}</h1>
    <p> {{ $students -> address }}</p>
    <h1>{{ $students -> phone }}</h1>
    
    
</body>
</html>