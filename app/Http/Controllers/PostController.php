<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::orderBy("created_at", "DESC")->paginate(3);

        return view('posts.index', [
            "posts" => $posts,
        ]);
    }

    public function show($title)
    {
        $post = Post::where("title", $title)->first();

        return view('posts.show', [
            "post" => $post,
        ]);
    }

}
