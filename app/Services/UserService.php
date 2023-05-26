<?php

namespace App\Services;

use App\Http\Resources\User\UserCollection;
use App\Http\Resources\User\UserResource;
use App\Models\User;

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

    public function createUser(array $userData): void
    {
        User::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'password' => $userData['password'],
            'role_id' => $userData['role_id'],
        ]);
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
