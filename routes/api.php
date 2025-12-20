<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Authentication routes
Route::post('auth/register', RegisterController::class);
Route::post('auth/login', LoginController::class);

// Test route (optional - for browser testing)
Route::get('auth/register', function () {
    return response()->json([
        'message' => 'Please use POST method to register',
        'method' => 'POST',
        'endpoint' => '/api/auth/register',
        'required_fields' => [
            'name',
            'email',
            'password',
            'password_confirmation'
        ]
    ]);
});
