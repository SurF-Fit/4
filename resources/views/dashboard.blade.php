@extends('welcome')
@section('content')
    <h2>Добро пожаловать {{ auth()->user()->name }}</h2>
    @foreach()

    @endforeach
@endsection
