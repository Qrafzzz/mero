<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{

    public function addPost(CreatePostRequest $request)
    {
        $data = $request->validated();

        $data['photo'] = Storage::put('/public/posts', $data['photo']);
        $photoName = str_replace('public/posts/', '', $data['photo']);

        Post::create([
            "title" => $data["title"],
            "description" => $data["description"],
            "preview" => $data["preview"],
            "photo" => $photoName,
            "organization" => $data["organization"],
        ]);

        return redirect(route("profile"));
    }

    public function removePost($title)
    {
        $post = Post::where("title", $title)->first();

        return view('profile.partials.removePost', [
            "post" => $post,
        ]);
    }

    public function updatePost($id)
    {
        $post = Post::findOrFail($id);

        return view('profile.partials.updatePost', [
            "post" => $post,
        ]);
    }

//    public function updatePostSubmit($id, PostRequest $request)
//    {
//        $data = Post::find($id);
//
//        $data->update([
//            "title" => $data["title"],
//            "description" => $data["description"],
//            "preview" => $data["preview"],
//            "photo" => $data['photo'],
//            "organization" => $data["organization"],
//        ]);
//        @dd($data['photo']);
//        return redirect(route("profile"));
//    }

    public function updatePostSubmit(UpdatePostRequest $request, $id)
    {
        $data = Post::findOrFail($id);



        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->preview = $request->input('preview');
//        $post->photo = $request->input('photo');
        $data->organization = $request->input('organization');

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo');
//            $extension = $file->getClientOriginalExtension();
//            $fileName = time() . '.' . $extension;
//            $file->move('public/posts/', $fileName);
            $data['photo'] = Storage::put('/public/posts', $data['photo']);
            $data['photo'] = str_replace('public/posts/', '', $data['photo']);

        }


        $data->update();

        return redirect(route("profile"));
    }

    public function deletePost($id)
    {
        Post::find($id)->delete();
        return redirect(route("profile"));
    }
}
