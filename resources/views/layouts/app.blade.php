<html>
    <head>
        <title>@yield('title')</title>
        <script src="http://unpkg.com/vue@3"></script>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        <div class="container h-full grid place-items-center">
            @yield('content')
        </div>
    </body>
</html>