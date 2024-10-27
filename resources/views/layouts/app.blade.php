{{-- resources/views/layouts/app.blade.php --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Use @vite to include your assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
    <title>{{ config('app.name', 'Todo App') }}</title>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>
   
</body>
</html>
