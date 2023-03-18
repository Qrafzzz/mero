@extends('partials.app')
@section('title', 'Регистрация')
@section('content')
    <div>
        <div>
            <h1>Регистрация</h1>

            <form action="{{ route("register_process") }}" method="POST">
                @csrf
                <input name="login" type="text" placeholder="Логин"/>

                @error('login')
                {{$message}}
                @enderror

                <input name="name" type="text" placeholder="Имя"/>

                @error('name')
                {{$message}}
                @enderror

                <input name="surname" type="text" placeholder="Фамилия"/>

                @error('surname')
                {{$message}}
                @enderror

                <input name="email" type="text" placeholder="Email"/>

                @error('email')
                {{$message}}
                @enderror

                <input name="password" type="password" placeholder="Пароль"/>

                @error('password')
                {{$message}}
                @enderror

                <input name="password_confirmation" type="password" placeholder="Потдвердите пароль"/>


                @error('password_confirmation')
                {{$message}}
                @enderror

                <input value="{{$role=1}}" hidden name="role" type="text" placeholder="Роль"/>

                @error('role')
                {{$message}}
                @enderror

                <div>
                    <a href="{{ route("login") }}">Есть аккаунт</a>
                </div>

                <button type="submit">Зарегестрироваться</button>
            </form>
        </div>
    </div>

@endsection
