
<div class="posts">
    <a href="{{ route("posts.show", $post->title) }}">
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
    </a>
</div>

