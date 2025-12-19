@extends('welcome')
@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <input type="text" name="email" placeholder="Почта">
        <input type="text" name="password" placeholder="Пароль">
        <button type="submit">Войти</button>
    </form>
@endsection
