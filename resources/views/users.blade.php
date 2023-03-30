{{-- @if($name)
    <h1>Hello {{$name}}!</h1>
@else
    <h1>Hello No name provided!</h1>
@endif --}}

@extends('layouts.nav')

@section('title')
Users
@endsection

@section('sidebar')
    @parent

    <h1>Appended txt</h1>
@endsection
