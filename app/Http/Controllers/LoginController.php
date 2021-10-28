<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Hash};
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // meddleware
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    public function login()
    {
        return view('auth.login');
    }

    public function check(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        #cara pertama
        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);

        //         return redirect('/')->with('success', 'You are now logged in');
        //     }
        // }

        #cara kedua
        // $credential = ['email' => $request->email, 'password' => $request->password,];
        // $credential = $request->only('email', 'password');
        // $credential = $request->toArray();
        if (Auth::attempt($attributes)) {
            return redirect('/')->with('success', 'You are now logged in');
        }


        throw ValidationException::withMessages([
            'email' => 'Your provide credentials does not match our records.',
        ]);
    }
}
