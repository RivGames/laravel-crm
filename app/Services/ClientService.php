<?php

namespace App\Services;

use App\Http\Resources\Client\ClientCollection;
use App\Http\Resources\Client\ClientResource;
use App\Models\Client;

class ClientService
{

    /**
     * @return ClientCollection
     */
    public function getClientCollection(): ClientCollection
    {
        return new ClientCollection(Client::all());
    }

    /**
     * @param Client $client
     * @return ClientResource
     */
    public function getClientResource(Client $client): ClientResource
    {
        return new ClientResource($client);
    }

    public function createClient(array $userData)
    {
        Client::create([
            'contact_name' => $userData['contact_name'],
            'contact_email' => $userData['contact_email'],
            'contact_phone_number' => $userData['contact_phone_number'],
            'company_name' => $userData['company_name'],
            'company_address' => $userData['company_address'],
            'company_city' => $userData['company_city'],
            'company_zip' => $userData['company_zip'],
            'company_vat' => $userData['company_vat'],
        ]);
    }

    public function updateClient(Client $client, array $userData)
    {
        $client->update($userData);
    }

    public function deleteClient(Client $client)
    {
        $client->delete();
    }
}
