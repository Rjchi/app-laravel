<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APP | {{ $title ?? 'Defecto' }}</title>
</head>
<body>
    <h1>----------</h1>
    {{ $slot }}
    {{ $sum }}
</body>
</html>
