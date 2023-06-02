<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request, UserService $userService, AuthService $authService): JsonResponse
    {
        $userData = $request->validate([
            'name' => ['required', 'min:5', 'max:20'],
            'email' => ['required', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:8', 'max:64'],
        ]);
        $userData['role_id'] = Role::USER;

        $user = $userService->createUser($userData);

        $token = $authService->getPlainTextToken($user);

        return response()->json([
            'message' => 'User successfully registered',
            'token' => $token,
        ], 201);
    }

    public function login(Request $request): JsonResponse
    {
        $userData = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (! Auth::attempt($userData)) {
            return response()->json([
                'message' => 'Email or Password are wrong',
            ], 401);
        }

        $token = auth()->user()->createToken('main')->plainTextToken;

        return response()->json([
            'message' => 'Successfully Logged In!',
            'token' => $token,
        ]);
    }

    public function logout(AuthService $authService): JsonResponse
    {
        $authService->deleteAllTokens();

        return response()->json([], 204);
    }
}
