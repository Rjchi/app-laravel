<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP | {{ $title ?? 'Defecto' }}</title>
</head>
<body>
    <x-navigation />
    <hr>
    {{ $slot ?? ''}}
    {{ $sum  ?? ''}}
</body>
</html>
