@extends('partials.app')
@section('title', 'Главная страница')
@section('content')
    @include('layout.header')

    @foreach($posts as $post)
        @include("posts.partials.item", ["post" => $post])
    @endforeach

@endsection
