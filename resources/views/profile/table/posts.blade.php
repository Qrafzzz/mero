
<div class="posts">
        <tr>
        <td>
            <div class="title">
                {{$post->title}}
            </div>
        </td>
        <td>
            <div class="description">
                {{$post->description}}
            </div>
        </td>
        <td>
            <div class="preview">
                {{$post->preview}}
            </div>
        </td>
        <td>
            <div class="photo">
                <img style="width: 100px" max-height="100px" class="" src="/storage/posts/{{$post->photo}}">
            </div>
        </td>
        <td>
            <div class="organization">
                {{$post->organization}}
            </div>
        </td>
        <td>
            <div>
                <button><a href="{{ route("removePost", $post->title) }}">Изменить</a></button>
            </div>
        </td>
        <td>
            <div>
                <button><a href="{{ route("deletePost", $post->id) }}">Удалить</a></button>
            </div>
        </td>
        </tr>

</div>


