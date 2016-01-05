<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Hiten Mitsurugi-ryū')</title>

        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

        @yield('css')
    </head>
    <body>
        @yield('content')

        <script src="{{ asset('/js/all.js') }}"></script>

        @yield('js')
    </body>
</html>
