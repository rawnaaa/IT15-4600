<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // CRITICAL: This is often missing
use App\Models\User; // Ensure this is imported to use the User model
 

class AuthController extends Controller
{
    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json([
            'message' => 'Invalid credentials'
        ], 401);
    }

    $user = Auth::user();
    // Ensure 'react-app' matches your intended token name
    $token = $user->createToken('react-app')->plainTextToken;

    return response()->json([
        'user' => $user,
        'token' => $token
    ]);
}
}
