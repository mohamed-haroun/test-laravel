<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller

{

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:255']
        ]);

        Auth::attempt($request->only('email', 'password'));

        $request->session()->regenerate();

        return response()->json([
            'message' => "Logged in successfully";
        ]);
    }
    


}
