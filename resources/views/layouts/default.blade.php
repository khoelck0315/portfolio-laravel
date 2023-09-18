<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? "Kevin Hoelck's Portfolio" }}</title>

        <!-- Fonts -->
        <!-- These should actually go in the app.scss file -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/1cc9fa9b83.js" crossorigin="anonymous"></script>

        @vite(['resources/sass/app.scss', 'resources/js/bootstrap.js'])
        
    <body class="bg-body antialiased">
        <main class="page-wrapper">

            @include('components.navbar')

            @yield('content') 

            @include('components.footer')
            
        </main>
    </body>
</html>
