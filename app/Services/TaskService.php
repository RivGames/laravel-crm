<?php

namespace App\Services;

use App\Http\Resources\Task\TaskCollection;
use App\Http\Resources\Task\TaskResource;
use App\Models\Task;

class TaskService
{
    /**
     * @return TaskCollection
     */
    public function getTaskCollection(): TaskCollection
    {
        return new TaskCollection(Task::all());
    }

    /**
     * @param Task $task
     * @return TaskResource
     */
    public function getTaskResource(Task $task): TaskResource
    {
        return new TaskResource($task);
    }

    public function createTask(array $userData)
    {
        Task::create([
            'title' => $userData['title'],
            'description' => $userData['description'],
            'user_id' => $userData['user_id'],
            'client_id' => $userData['client_id'],
            'project_id' => $userData['project_id'],
            'deadline' => $userData['deadline'],
            'status' => $userData['status'],
        ]);
    }

    public function updateTask(array $userData, Task $task)
    {
        $task->update($userData);
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
    }
}
