<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
              integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
              crossorigin="anonymous" referrerpolicy="no-referrer" />
{{--        <script src="https://kit.fontawesome.com/49e07ab8ca.js" crossorigin="anonymous"></script>--}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>e-teach-hub</title>
    </head>
    <body>
        <header>
            @include('layouts.header')
        </header>
        @yield('content')
        <footer>
            @include('layouts.footer')
        </footer>
    </body>
</html>
