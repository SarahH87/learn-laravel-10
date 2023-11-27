@extends('layouts.app')

@section('title', 'Employee List')

@section('content')

    @include('employee.index')


    <h2>Tutorials</h2>
    <a href="/vue-attribute-binding">Vue attribute binding</a>
    <a href="/lists-conditionals">Lists, conditionals and computed properties</a>
@endsection
