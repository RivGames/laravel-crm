<?php

namespace App\Services;

use App\Models\User;

class AuthService
{
    /**
     * @param User $user
     * @return string
     */
    public function getPlainTextToken(User $user): string
    {
        return $user->createToken('main')->plainTextToken;
    }
    /**
     * @return void
     */
    public function deleteAllTokens(): void
    {
        auth()->user()->tokens()->delete();
    }
}
