<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $statue->person }}</title>
</head>
<body>
    <h1>The statue of {{ $statue->person }}</h1>
    <p>Height: {{ $statue->height }} cm</p>
    <p>Selling price: {{ $statue->price }} Ft</p>
</body>
</html>
