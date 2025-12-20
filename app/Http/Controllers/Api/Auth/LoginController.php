<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class LoginController extends Controller
{
    public function __invoke(Request $request)
    {
        // 1. Validasi Input
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        // 2. Cek apakah email & password cocok
        if (auth()->attempt($credentials)) {
            $user = auth()->user();

            // 3. Jika cocok, buatkan Token baru dan kirim response
            return (new UserResource($user))->additional([
                'token' => $user->createToken('myAppToken')->plainTextToken,
            ]);
        }

        // 4. Jika salah, kirim pesan error 401 (Unauthorized)
        return response()->json([
            'message' => 'Your credential does not match.',
        ], 401);
    }
}
