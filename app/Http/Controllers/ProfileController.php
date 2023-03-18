<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $posts = Post::orderBy("created_at", "DESC")->get();

        $users = User::orderBy("created_at", "DESC")->get();

        return view('profile.profile', [
            "posts" => $posts,
            "users" => $users,
        ]);
    }
}
