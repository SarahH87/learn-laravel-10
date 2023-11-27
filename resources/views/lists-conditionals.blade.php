@extends('layouts.app')

@section('title', 'Employee List')

@section('content')

    <div id="app">
        <h1>Vue Lists, Conditionals and Computed Properties</h1>
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
