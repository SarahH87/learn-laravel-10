<html>
    <head>
        <title>@yield('title')</title>
        <script src="http://unpkg.com/vue@3"></script>
    </head>

    <body>
        <div class="container">
            <h1>@yield('title')</h1>

            <div id="app">

                <p>
                    <input type="text" v-model="greeting">
                </p>

                @{{ greeting }} (@{{ greeting.length }})
            </div>

            <script>
                Vue.createApp({
                    data() {
                        return {
                            greeting: 'Hello World!'
                        };
                    },

                    mounted() {
                        setTimeout(() => {
                            this.greeting = 'Changed';
                        }, 3000);
                    }
                }).mount('#app');
            </script>

            @yield('content')
        </div>
    </body>
</html>
