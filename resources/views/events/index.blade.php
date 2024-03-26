<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista evenimentelor</title>
</head>
<body>
    <h1>Lista Evenimentelor</h1>
    <ul>
        @foreach ($events as $event )
            <li>{{ $event->title }} - {{ $event->date }}</li>
        @endforeach
    </ul>

</body>
</html>
