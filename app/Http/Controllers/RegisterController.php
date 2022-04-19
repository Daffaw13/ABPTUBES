<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('Register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:5|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:3|max:255'
        ]);

        User::create($validatedData);

        return redirect('/Login');
    }
}