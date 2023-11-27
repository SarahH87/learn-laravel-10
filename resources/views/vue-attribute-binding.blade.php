@extends('layouts.app')

@section('title', 'Employee List')

@section('content')

    <div id="app">
        <h1>Vue Attribute binding</h1>

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
@endsection
