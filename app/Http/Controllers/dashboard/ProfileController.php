<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        return view("admin.profile.index", compact('user'));
    }

    public function update(Request $request, Authenticatable $user)
    {
        $request->validate([
            'name' => 'required|min:3|max:20',
            'email' => 'required|email',
        ]);

        if($request->email !== $user->email) {
            $request->validate([
                'email' => 'unique:users,email',
            ]);
        }

        $user->update($request->input());
        return redirect()->route("profile")->with('message', 'Profile updated successfully');
    }

    public function passwordUpdate(Request $request, Authenticatable $user)
    {
        $request->validate([
            'oldPassword' => 'required|min:6|max:40',
            'password' => 'required|min:6|max:40|confirmed',
        ]);
        if(!Hash::check($request->oldPassword, $user->password)) {
            return redirect()->route("profile")->with('error-message', 'Incorrect old password');
        }

        $user->update($request->input());

        return redirect()->route("profile")->with('message', 'Password updated successfully');
    }
}
