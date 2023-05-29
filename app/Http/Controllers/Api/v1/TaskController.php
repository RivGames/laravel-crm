<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Task\StoreRequest;
use App\Http\Requests\Task\UpdateRequest;
use App\Http\Resources\Task\TaskCollection;
use App\Http\Resources\Task\TaskResource;
use App\Models\Task;
use App\Services\TaskService;
use Illuminate\Http\JsonResponse;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param TaskService $taskService
     * @return TaskCollection
     */
    public function index(TaskService $taskService): TaskCollection
    {
        return $taskService->getTaskCollection();
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreRequest $request
     * @param TaskService $taskService
     * @return JsonResponse
     */
    public function store(StoreRequest $request,TaskService $taskService): JsonResponse
    {
        $taskService->createTask($request->validated());

        return response()->json([
            'message' => 'Task successfully created!'
        ],201);
    }

    /**
     * Display the specified resource.
     * @param Task $task
     * @param TaskService $taskService
     * @return TaskResource
     */
    public function show(Task $task, TaskService $taskService): TaskResource
    {
        return $taskService->getTaskResource($task);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateRequest $request
     * @param Task $task
     * @param TaskService $taskService
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Task $task, TaskService $taskService): JsonResponse
    {
        $taskService->updateTask($request->validated(),$task);

        return response()->json([
            'message' => 'Task successfully updated!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * @param Task $task
     * @param TaskService $taskService
     * @return JsonResponse
     */
    public function destroy(Task $task, TaskService $taskService): JsonResponse
    {
        $taskService->deleteTask($task);

        return response()->json([],204);
    }
}
