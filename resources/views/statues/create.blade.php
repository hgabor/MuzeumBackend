<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>New statue</h1>
    <form method='POST' action="{{ route('statues.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div>
            Person:<br>
            <input type="text" name="person">
        </div>
        <div>
            Height:<br>
            <input type="number" name="height">
        </div>
        <div>
            Price:<br>
            <input type="number" name="price">
        </div>
        <div>
            <input type="submit" value="Create">
        </div>
    </form>
</body>
</html>
