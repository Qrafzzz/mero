@extends('partials.app')
@section('title', 'Авторизация')
@section('content')
    <div>
        <div>
            <h1>Вход</h1>

            <form method="POST" action="{{"login_process"}}">
                @csrf

                <input name="email" type="text" placeholder="Email"/>

                @error('email')
                {{$message}}
                @enderror

                <input name="password" type="password" placeholder="Пароль"/>

                @error('password')
                {{$message}}
                @enderror

                <div>
                    <a href="">Забыли пароль</a>
                </div>
                <div>
                    <a href="{{ route("register") }}">Регистрация</a>
                </div>
                <button type="submit">Войти</button>
            </form>
        </div>
    </div>

@endsection
