<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(RegistrationRequest $request)
    {
        User::create($request->all());
        // session()->put('');
        // session()->flash('success', 'Thank you, you are now registered.');
        return redirect('/')->with('success', 'Thank you, you are now registered.');
    }
}
