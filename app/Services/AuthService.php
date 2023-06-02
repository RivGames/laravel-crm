<?php

namespace App\Services;

use App\Models\User;

class AuthService
{
    public function getPlainTextToken(User $user): string
    {
        return $user->createToken('main')->plainTextToken;
    }

    public function deleteAllTokens(): void
    {
        auth()->user()->tokens()->delete();
    }
}
