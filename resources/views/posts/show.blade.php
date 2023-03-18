@extends('partials.app')
@section('title', $post->title)
@section('content')
    @include('layout.header')

    <div class="posts">
        <div class="title">
            {{$post->title}}
        </div>
        <div class="description">
            {{$post->description}}
        </div>
        <div class="preview">
            {{$post->preview}}
        </div>
        <div class="photo">
            <img class="" src="/storage/posts/{{$post->photo}}">
        </div>
        <div class="organization">
            {{$post->organization}}
        </div>
    </div>
@endsection
