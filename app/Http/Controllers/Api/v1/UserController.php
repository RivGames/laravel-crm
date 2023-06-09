<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserCollection;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group User management
 *
 * APIs for managing users
 */
class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index(UserService $userService): UserCollection
    {
        return $userService->getUserCollection();
    }

    /**
     * Store a newly created user.
     *
     * @bodyParam name The name of user. Example: Alexandro
     */
    public function store(StoreRequest $request, UserService $userService): JsonResponse
    {
        $userService->createUser($request->validated());

        return response()->json([
            'message' => 'User successfully created!',
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the user.
     *
     * @response status=404 scenario="User not found" {"message":"Unable to locate the user you requested."}
     */
    public function show(User $user, UserService $userService): UserResource
    {
        return $userService->getUserResource($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, User $user, UserService $userService): JsonResponse
    {
        $userService->updateUser($user, $request->validated());

        return response()->json([
            'message' => 'User successfully updated!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, UserService $userService): JsonResponse
    {
        $this->authorize('manage-users');

        $userService->deleteUser($user);

        return response()->json([], 204);
    }
}
