<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserResource;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        // 1. Validasi Input
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'min:8'],
        ]);

        // 2. Buat User Baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password) // Password di-encrypt
        ]);

        // 3. Buat Token
        $token = $user->createToken('myAppToken');

        // 4. Kembalikan Response (Data User + Token)
        return (new UserResource($user))->additional([
            'token' => $token->plainTextToken,
        ]);
    }
}
