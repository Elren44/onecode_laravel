<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
//        $name = $request->input('name');
//        $email = $request->input('email');
//        $password = $request->input('password');
//        $agreement = $request->boolean('agreement');


        $validated = $request->validate([
           'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'max:50', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:7', 'max:50', 'confirmed'],
            'agreement' => ['accepted']
        ]);
//        $user = new User;
//        $user->name = $validated['name'];
//        $user->email = $validated['email'];
//        $user->password = bcrypt($validated['password']);
//        $user->save();
        $user = User::query()->create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

      return redirect()->route('user');
    }
}
