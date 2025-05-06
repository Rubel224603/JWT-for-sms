<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

//        if (!$token = JWTAuth::attempt($credentials)) {
//            return response()->json(['error' => 'Invalid credentials'], 401);
//        }


        $token = JWTAuth::attempt($credentials);

        if ($token){
            return response()->json([
                'message' => 'Login successful',
                'token' => $token,
                'token_type' => 'Bearer'
            ]);

        }else{
            return response()->json(['error' => 'Invalid credentials'], 401) ;
        }
//
//
//        return response()->json([
//            'message' => 'Login successful',
//            'token' => $token,
//            'token_type' => 'Bearer'
//        ]);
    }
}
