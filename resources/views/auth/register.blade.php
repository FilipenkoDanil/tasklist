@extends('layouts.main')

@section('title', 'Регистрация')

@section('content')
    <div class="login-clean">
        <form method="post" action="{{route('register')}}">
            <h2 class="text-center">Регистрация</h2>
            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Имя"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Пароль">
            </div>
            <div class="form-group"><input class="form-control" type="password" name="password_confirmation"
                                           placeholder="Повторный пароль"></div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Зарегистрироваться</button>
            </div>
            <a class="forgot" href="{{route('login')}}">Уже есть аккаунт?</a>
            @csrf
        </form>
    </div>
@endsection
