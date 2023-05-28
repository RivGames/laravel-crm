<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreRequest;
use App\Http\Requests\Project\UpdateRequest;
use App\Http\Resources\Project\ProjectCollection;
use App\Http\Resources\Project\ProjectResource;
use App\Models\Project;
use App\Services\ProjectService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param ProjectService $projectService
     * @return ProjectCollection
     */
    public function index(ProjectService $projectService): ProjectCollection
    {
        return $projectService->getProjectCollection();
    }

    /**
     * Store a newly created resource in storage.
     * @param StoreRequest $request
     * @param ProjectService $projectService
     * @return JsonResponse
     */
    public function store(StoreRequest $request, ProjectService $projectService): JsonResponse
    {
        $projectService->createProject($request->validated());

        return response()->json([
            'message' => 'Project successfully created!'
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     * @param Project $project
     * @param ProjectService $projectService
     * @return ProjectResource
     */
    public function show(Project $project, ProjectService $projectService): ProjectResource
    {
        return $projectService->getProjectResource($project);
    }

    /**
     * Update the specified resource in storage.
     * @param UpdateRequest $request
     * @param Project $project
     * @param ProjectService $projectService
     * @return JsonResponse
     */
    public function update(UpdateRequest $request, Project $project, ProjectService $projectService): JsonResponse
    {
        $projectService->updateProject($request->validated(),$project);

        return response()->json([
            'message' => 'Project successfully updated!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     * @param Project $project
     * @param ProjectService $projectService
     * @return JsonResponse
     */
    public function destroy(Project $project, ProjectService $projectService): JsonResponse
    {
        $projectService->deleteProject($project);

        return response()->json([],204);
    }
}
