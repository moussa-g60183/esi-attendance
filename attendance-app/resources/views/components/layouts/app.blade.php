<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <header>
        <h1>ESI Attendance</h1>
    </header>
    <nav></nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
