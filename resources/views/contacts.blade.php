@extends('layouts.default')

@section('content')
    <p>Адрес: {{ $user['address'] }}</p>
    <p>Почтовый индекс: {{ $user['post_code'] }}</p>
    <p>E-mail: {{ $user['email'] }}</p>
    <p>Номер телефона: +{{ $user['phone'] }}</p>
    @if ($user['email'] === '')
        <p class="error">Адрес электронной почты не указан.</p>
    @endif
@endsection
