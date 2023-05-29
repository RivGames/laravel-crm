<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Client\StoreRequest;
use App\Http\Requests\Client\UpdateRequest;
use App\Http\Resources\Client\ClientCollection;
use App\Http\Resources\Client\ClientResource;
use App\Models\Client;
use App\Services\ClientService;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ClientService $clientService): ClientCollection
    {
        return $clientService->getClientCollection();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request, ClientService $clientService): JsonResponse
    {
        $clientService->createClient($request->validated());

        return response()->json([
            'message' => 'Client successfully created!',
        ], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client, ClientService $clientService): ClientResource
    {
        return $clientService->getClientResource($client);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Client $client, ClientService $clientService): JsonResponse
    {
        $clientService->updateClient($client, $request->validated());

        return response()->json([
            'message' => 'Client successfully updated!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client, ClientService $clientService): JsonResponse
    {
        $clientService->deleteClient($client);

        return response()->json([], 204);
    }
}
