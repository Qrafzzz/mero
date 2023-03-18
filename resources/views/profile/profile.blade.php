@if(auth('web')->user()->role === 1)
    @include('layout.header')

@elseif(auth('web')->user()->role === 0)
    @include('layout.header')
    @include("profile.layout.admin", ['posts' => $posts], ['users' => $users])

@endif
