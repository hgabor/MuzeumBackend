<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/masik.css') }}">
    <title>Museum bragging page</title>
</head>
<body>
    <h1>Welcome to the Museum home page</h1>
    <p>Total number of paintings: {{ $paintingCount }}</p>
    <p>Total number of statues: {{ $statueCount }}, total price: {{ $statuePrice }} Ft</p>
    <p>
        <a href="{{ route('statues.index') }}">Go to statue listing</a>
    </p>
</body>
</html>
