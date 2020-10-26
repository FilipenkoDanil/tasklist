@extends('layouts.main')

@section('title', 'Авторизация')

@section('content')
    <div class="login-clean">
        <form method="post">
            <h2 class="text-center">Авторизация</h2>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Войти</button>
            </div>
            <a class="forgot" href="{{route('register')}}">Зарегистрироваться</a>
            @csrf
        </form>
    </div>
@endsection
