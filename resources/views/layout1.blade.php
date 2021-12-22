<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    <title>@yield('title', 'Laravel')</title>
    </head>
    <body class="antialiased">
    <ul>
                <li><a href="/">Welcome</a></li>
                <li><a href="/contact">C</a></li>
                <li><a href="/hello">H</a></li>
            </ul>
    @yield('content')
     </body>
</html>
