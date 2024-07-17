<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = $request->user();
            $token = $user->createToken('Personal Access Token')->plainTextToken;
            return response()->json(['token' => $token,'id'=>$user->id], 200);
        }
        return response()->json(['error' => 'Unauthorized'], 401);
    }

    public function logout(Request $request){
        $user = User::find($request->id);
        $user->tokens()->delete();
        return response()->json(['message' => 'Successfully logged out'],200);
    }
}
