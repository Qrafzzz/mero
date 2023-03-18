

<table style="border: solid 1px #b84242" >
    <td>title</td>
    <td>description</td>
    <td>preview</td>
    <td>photo</td>
    <td>organization</td>
@foreach($posts as $post)
    @include("profile.table.posts", ["post" => $post])
@endforeach
</table>

<table style="border: solid 1px #b84242" >
    <td>login</td>
    <td>name</td>
    <td>surname</td>
    <td>email</td>
    <td>role</td>
    @foreach($users as $user)
        @include("profile.table.users", ["user" => $user])
    @endforeach
</table>

<div>
    <h3>Добавление</h3>
    <form method="POST" action="{{"addPost"}}" enctype="multipart/form-data">
        @csrf

        <input name="title" type="text" placeholder="title">
        @error('title')
        {{$message}}
        @enderror
        <input name="description" type="text" placeholder="description">
        @error('description')
        {{$message}}
        @enderror
        <input name="preview" type="text" placeholder="preview">
        @error('preview')
        {{$message}}
        @enderror
        <input name="photo" type="file" placeholder="photo">
        @error('photo')
        {{$message}}
        @enderror
        <input name="organization" type="text" placeholder="organization">
        @error('organization')
        {{$message}}
        @enderror
        <button type="submit">Добавить</button>
    </form>
</div>

