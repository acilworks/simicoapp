<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
            // 'active' => 'register'
        ]);
    }

    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|min:5|max:20|unique:users',
            'nik' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:6|unique:users',
            'hp' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:50',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        

        return redirect('/')->with('success', 'Registration successfull! Please Sign-in');

    }
    
}
