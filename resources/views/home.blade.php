<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Habitto</title>
</head>
<body>
    <h1>Welcome to {{ config('app.name') }}</h1>
    <p>This is a simple home page.</p>
</body>
</html>