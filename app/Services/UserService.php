<?php

namespace App\Services;

use App\Http\Resources\User\UserCollection;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function getUserCollection(): UserCollection
    {
        return new UserCollection(User::all());
    }

    public function getUserResource(User $user): UserResource
    {
        return new UserResource($user);
    }

    public function createUser(array $userData)
    {
        $user = User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => Hash::make($userData['password']),
            'role_id' => $userData['role_id'],
        ]);

        return $user;
    }

    public function updateUser(User $user, array $userData): void
    {
        $user->update($userData);
    }

    public function deleteUser(User $user): void
    {
        $user->delete();
    }
}
