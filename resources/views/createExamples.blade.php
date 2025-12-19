@extends('welcome')
@section('content')
    <h2>Созданиие новой задачи</h2>

    <form method="POST" action="{{ route('createExample') }}">
        @csrf
        <input type="text" name="name" placeholder="название">
        <input type="text" name="description" placeholder="описание">
        <input type="datetime-local" name="deadline" placeholder="срок выполнения">
        <input type="text" name="priority" placeholder="Приоритет">
        <input type="text" name="status" placeholder="Статус">
        <select name="user_id">
            @foreach($users as $user)
                <option name="user_id" value="{{ $user->id }}">{{ $user->name }} ({{ $user->role->role }})</option>
            @endforeach
        </select>
        <button type="submit">создать</button>
    </form>

    @foreach($examples as $example)
        @if($example->deadline < now())
            <div style="border: 1px solid black; width: max-content; margin-bottom: 20px; background-color: rgba(255,0,0,0.75)">
                <h2>Название: {{ $example->name }}</h2>
                <p>Описание: {{ $example->description }}</p>
                <p>Срок выполнения: {{ $example->deadline }}</p>
                <p>Приоритет: {{ $example->priority }}</p>
                <p>Статус: {{ $example->status }}</p>
                <p>За кем закреплена задача: {{ $example->user->name }}</p>
                <form method="post" action="">
                    <select name="status">
                        <option name="status" value="">В работе</option>
                        <option name="status" value="">Выполнена</option>
                    </select>
                </form>
            </div>
        @else
            <div style="border: 1px solid black; width: max-content; margin-bottom: 20px">
                <h2>Название: {{ $example->name }}</h2>
                <p>Описание: {{ $example->description }}</p>
                <p>Срок выполнения: {{ $example->deadline }}</p>
                <p>Приоритет: {{ $example->priority }}</p>
                <p>Статус: {{ $example->status }}</p>
                <p>За кем закреплена задача: {{ $example->user->name }}</p>
                <form method="post" action="">
                    <select name="status">
                        <option name="status" value="">В работе</option>
                        <option name="status" value="">Выполнена</option>
                    </select>
                </form>
            </div>
        @endif
    @endforeach
@endsection
