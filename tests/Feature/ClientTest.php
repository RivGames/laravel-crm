<?php

namespace Tests\Feature;

use App\Models\Client;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class ClientTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        Client::factory(10)->create();
    }

    public function testIndexMethodReturnsClientCollection()
    {
        $response = $this->getJson(route('clients.index'));

        $response->assertJsonStructure([
            [
                'company_name',
                'company_vat',
                'address',
            ],
        ]);
        $response->assertOk();
    }

    public function testStoreMethodCreatesNewRecord()
    {
        $userData = [
            'contact_name' => fake()->word(),
            'contact_email' => fake()->email(),
            'contact_phone_number' => Str::random(15),
            'company_name' => fake()->word(),
            'company_address' => fake()->address(),
            'company_city' => fake()->city(),
            'company_zip' => rand(1, 100_000),
            'company_vat' => rand(1, 10_000),
        ];

        $response = $this->postJson(route('clients.store'), $userData);

        $response->assertExactJson(['message' => 'Client successfully created!']);
        $this->assertDatabaseCount('clients', 11);
        $response->assertCreated();
    }

    public function testStoreMethodFailsWithInCorrectDataAndEvenEmpty()
    {
        $userData = [
            'contact_name' => '',
            'contact_email' => '',
            'contact_phone_number' => fake()->phoneNumber().Str::random(15),
            'company_name' => '',
            'company_address' => '',
            'company_city' => '',
            'company_zip' => null,
            'company_vat' => '2',
        ];

        $response = $this->postJson(route('clients.store'), $userData);

        $response->assertJsonValidationErrors([
            'contact_name',
            'contact_email',
            'company_name',
            'company_address',
            'company_city',
            'company_zip',
        ]);
        $response->assertUnprocessable();
        $this->assertDatabaseCount('clients', 10);
        $this->assertDatabaseMissing('clients', $userData);
    }

    public function testShowMethodReturnsClientResource()
    {
        $response = $this->getJson(route('clients.show', 10));

        $response->assertJsonStructure(['company_name', 'company_vat', 'address']);
        $response->assertOk();
    }

    public function testUpdateMethodUpdatesExistingRecord()
    {
        $userData = [
            'contact_name' => fake()->word(),
            'contact_email' => fake()->email(),
            'contact_phone_number' => Str::random(15),
            'company_name' => fake()->word(),
            'company_address' => fake()->address(),
            'company_city' => fake()->city(),
            'company_zip' => rand(1, 100_000),
            'company_vat' => rand(1, 10_000),
        ];

        $response = $this->putJson(route('clients.update', 1), $userData);

        $response->assertOk();
        $response->assertJsonMissingValidationErrors();
        $this->assertDatabaseHas('clients', $userData);
        $this->assertDatabaseCount('clients', 10);
    }

    public function testUpdateMethodFailsWithInCorrectData()
    {
        $userData = [
            'contact_name' => '',
            'contact_email' => '',
            'contact_phone_number' => fake()->phoneNumber().Str::random(15),
            'company_name' => '',
            'company_address' => '',
            'company_city' => '',
            'company_zip' => null,
            'company_vat' => '2',
        ];

        $response = $this->putJson(route('clients.update', 1), $userData);

        $response->assertUnprocessable();
        $response->assertJsonValidationErrors([
            'contact_name',
            'contact_email',
            'contact_phone_number',
            'company_name',
            'company_address',
            'company_city',
            'company_zip',
        ]);
        $this->assertDatabaseMissing('clients', $userData);
    }

    public function testUpdateMethodFailsWithUnUniqueEmail()
    {
        $userData = [
            'contact_name' => fake()->word(),
            'contact_email' => 'test@gmail.com',
            'contact_phone_number' => Str::random(15),
            'company_name' => fake()->word(),
            'company_address' => fake()->address(),
            'company_city' => fake()->city(),
            'company_zip' => rand(1, 100_000),
            'company_vat' => rand(1, 10_000),
        ];
        Client::create($userData);

        $response = $this->putJson(route('clients.update', 10), $userData);

        $response->assertNotFound();
    }

    public function testDestroyMethodDeleteExistingRecord()
    {
        $this->deleteJson(route('clients.destroy', 1));

        $this->assertDatabaseCount('clients', 9);
    }

    public function testDestroyMethodFailsBecauseOfRecordNotFound()
    {
        $response = $this->deleteJson(route('clients.destroy', 123));

        $response->assertExactJson(['message' => 'Unable to locate the Client you requested.']);
        $this->assertDatabaseCount('clients', 10);
    }
}
