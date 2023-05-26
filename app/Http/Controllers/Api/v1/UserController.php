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

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param UserService $userService
     * @return UserCollection
     */
    public function index(UserService $userService): UserCollection
    {
        return $userService->getUserCollection();
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreRequest $request
     * @param UserService $userService
     * @return JsonResponse
     */
    public function store(StoreRequest $request, UserService $userService): JsonResponse
    {
        $userService->createUser($request->validated());

        return response()->json([
            'message' => 'User successfully created!',
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     * @param User $user
     * @param UserService $userService
     * @return UserResource
     */
    public function show(User $user, UserService $userService): UserResource
    {
        return $userService->getUserResource($user);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateRequest $request
     * @param User $user
     * @param UserService $userService
     * @return JsonResponse
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
     * @param User $user
     * @param UserService $userService
     * @return JsonResponse
     */
    public function destroy(User $user, UserService $userService): JsonResponse
    {
        $userService->deleteUser($user);

        return response()->json([], 204);
    }
}
