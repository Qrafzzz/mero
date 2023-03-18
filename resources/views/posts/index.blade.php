@extends('partials.app')
@section('title', 'Мероприятия')
@section('content')
    @include('layout.header')

    @foreach($posts as $post)
        @include("posts.partials.item", ["post" => $post])
    @endforeach

    {{ $posts->links() }}
@endsection
