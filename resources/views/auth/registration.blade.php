@extends('welcome')
@section('content')
    <form method="POST" action="{{ route('registration') }}">
        @csrf
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="email" placeholder="Почта">
        <input type="text" name="password" placeholder="Пароль">
        <button type="submit">Зарегистрироваться</button>
    </form>
@endsection
