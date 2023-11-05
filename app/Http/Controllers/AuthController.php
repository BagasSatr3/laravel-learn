<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }
    public function loginProcess(Request $request) {
        $this->validate($request, [
            "email" => 'required|email',
            "password" => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('posts.index');
        } else {
            return redirect()->route('login');
        }

    }
}
