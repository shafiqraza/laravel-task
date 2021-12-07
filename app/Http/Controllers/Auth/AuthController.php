<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginView()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        $this->validate($request, [
            "email" => "required|email",
            "password" => "required"
        ]);

        if (!Auth::attempt($request->only("email", "password"), $request->remember)) {
            return back()->with('message', "Invalid credientials");
        }

        return redirect()->route('dashboard');
    }

    public function showRegisterView()
    {


        return view("auth.register");
    }

    public function register(RegisterRequest $request)
    {

        User::create($request->input());

        Auth::attempt($request->only("email", "password"));

        return redirect()->route("dashboard");
    }

    public function logout()
    {
        auth()->logout();
        return redirect("/");
    }
}
