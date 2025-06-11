<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.partials.header')

    <main class="container mx-auto px-4 py-8">
        @yield('content')
    </main>

    @include('layouts.partials.footer')
</body>
</html>
