<div class="posts">
    <form action="{{ route("updatePostSubmit", $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input value="{{$post->title}}" name="title" type="text" placeholder="title"/>

        @error('title')
        {{$message}}
        @enderror

        <input value="{{$post->description}}" name="description" type="text" placeholder="description"/>

        @error('description')
        {{$message}}
        @enderror

        <input value="{{$post->preview}}" name="preview" type="text" placeholder="preview"/>

        @error('preview')
        {{$message}}
        @enderror

        <input value="{{$post->photo}}" name="photo" type="file" placeholder="photo"/>
        <img style="width: 100px" max-height="100px" class="" src="/storage/posts/{{$post->photo}}">
        @error('photo')
        {{$message}}
        @enderror

        <input value="{{$post->organization}}" name="organization" type="text" placeholder="organization"/>

        @error('organization')
        {{$message}}
        @enderror

        <a href="{{ route("updatePost", $post->id) }}"><button type="submit">Обновить</button></a>
    </form>

</div>
