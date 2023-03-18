<a href="{{ route("home") }}">Главная</a>
<a href="{{ route("posts.index") }}">Мероприятия</a>

@auth("web")
    <a href="{{ route("logout") }}">Выйти</a>
    <a href="{{ route("profile") }}">Профиль</a>
@endauth

@guest("web")
    <a href="{{ route("login") }}">Войти</a>
@endguest
