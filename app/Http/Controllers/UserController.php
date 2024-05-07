<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller

{

    public function login(Request $request)
    {
        $userEmail = $request->input('email'); // Use input() for better security
        $userPassword = $request->input('password');
    
        $user = User::where('email', $userEmail)->first();
        if ($user) {
            if (password_verify($userPassword, $user->password)) {
                // Successful login logic
            } else {
                // Invalid password logic
            }
        } else {
            // User not found logic
        }
    
        return response()->json(...); // this is just a placeholder , that leave C
    }
    


}