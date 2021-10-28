<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }} | Parsinta</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- @yield('style') --}}
    {{ $style }}
</head>
<body>
    {{-- @include('layouts.navbar') --}}
    <x-navbar></x-navbar>
    {{-- @yield('content') --}}
    <div class="pt-4">
        {{ $slot }}
    </div>
    <script src=" {{ asset('js/app.js') }}"></script>
</body>
</html>