@extends('layouts.app')

@section('title', 'Employee List')

@section('content')

    <div id="app" class="h-full grid place-items-center">

        <section>
            <h1 class="text-2xl font-bold">Vue Lists, Conditionals and Computed Properties</h1>
            <h2 class="text-xl font-bold mt-8 mb-2">Assignments</h2>

            <ul>
                <li>Finish shopping <input type="checkbox"></li>
                <li>Learn Vue <input type="checkbox"></li>
                <li>Laravel basics recap <input type="checkbox"></li>
                <li>Read Laravel documentation <input type="checkbox"></li>
                <li>Learn Docker <input type="checkbox"></li>
                <li>Have a shower <input type="checkbox"></li>
            </ul>
        </section>
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
@endsection
