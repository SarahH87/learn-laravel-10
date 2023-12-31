<html>
    <head>
        <title>@yield('title')</title>
        <script src="http://unpkg.com/vue@3"></script>
        <script src="https://cdn.tailwindcss.com"></script>

        @vite('resources/js/app.js')
        @vite('resources/css/app.css')

        @inertiaHead
    </head>

    <body>
        <div class="container h-full grid place-items-center">
            @inertia

            @yield('content')
        </div>
    </body>
</html>
