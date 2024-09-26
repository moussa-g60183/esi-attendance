<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="./node_modules/preline/dist/preline.js"></script>
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body class="bg-slate-100">
    <header>
        <h1 class="text-6xl bg-blue-500 text-white py-4 px-4">ESI Attendance</h1>
    </header>
    <nav></nav>
    <main>
        {{ $slot }}
    </main>
</body>

</html>
