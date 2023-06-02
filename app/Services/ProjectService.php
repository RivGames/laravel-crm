<?php

namespace App\Services;

use App\Http\Resources\Project\ProjectCollection;
use App\Http\Resources\Project\ProjectResource;
use App\Models\Project;

class ProjectService
{
    public function getProjectCollection(): ProjectCollection
    {
        return new ProjectCollection(Project::all());
    }

    public function createProject(array $userData)
    {
        Project::create([
            'title' => $userData['title'],
            'description' => $userData['description'],
            'user_id' => $userData['user_id'],
            'client_id' => $userData['client_id'],
            'deadline' => $userData['deadline'],
            'status' => $userData['status'],
        ]);
    }

    public function getProjectResource(Project $project)
    {
        return new ProjectResource($project);
    }

    public function updateProject(array $userData, Project $project)
    {
        $project->update($userData);
    }

    public function deleteProject(Project $project)
    {
        $project->delete();
    }
}
