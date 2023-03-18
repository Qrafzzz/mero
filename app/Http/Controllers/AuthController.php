<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use function PHPUnit\Framework\isFalse;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view("auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            "email" => ["required", "email", "string"],
            "password" => ["required"]
        ]);

        if (auth("web")->attempt($data)){
            return redirect (route("home"));
        }

        return redirect(route("login"))->withErrors(["email" => "Пользователь не найден, либо данные введены не правильно"]);
    }

    public function logout()
    {
        auth("web")->logout();

        return redirect(route("home"));
    }

    public function showRegisterForm()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            "login" => ["required", "string", "unique:users,login"],
            "name" => ["required", "string"],
            "surname" => ["required", "string"],
            "email" => ["required", "email", "string", "unique:users,email"],
            "password" => ["required", "confirmed", "min:8"],
            'role' => ['required']
        ]);

        $user = User::create([
            "login" => $data["login"],
            "name" => $data["name"],
            "surname" => $data["surname"],
            "email" => $data["email"],
            "password" => bcrypt($data["password"]),
            "role" => $data["role"]
        ]);

        if($user) {
            auth("web")->login($user);
        }

        return redirect(route("home"));

    }
}
