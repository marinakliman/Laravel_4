@extends('layouts.default')

@section('content')
    <p>Имя: {{ $user['name'] }}</p>
    <p>Возраст: {{ $user['age'] }}</p>
    <p>Семейное положение: {{ $user['position'] }}</p>
    <p>Адрес: {{ $user['address'] }}</p>
    @if ($user['age'] < 18)
        <p class="error">Вам нет 18-ти лет.</p>
    @endif
@endsection
