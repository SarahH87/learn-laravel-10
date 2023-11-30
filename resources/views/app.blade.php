<html>
    <head>
        <title>Inertia with Vue</title>
        <script src="http://unpkg.com/vue@3"></script>
        <script src="https://cdn.tailwindcss.com"></script>

        @vite('resources/js/app.js')
        @vite('resources/css/app.css')

        @inertiaHead
    </head>

    <body>
        <div id="App" class="container h-full grid place-items-center">
            @inertia
        </div>
    </body>
</html>
