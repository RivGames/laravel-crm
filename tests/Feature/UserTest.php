<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        User::factory(10)->create();
    }

    public function testIndexMethodReturnsUserCollection(): void
    {
        $response = $this->getJson(route('users.index'));

        $response->assertOk();
        $response->assertJsonStructure([
            [
                'id',
                'name',
                'email',
            ],
        ]);
    }

    public function testStoreMethodCreatesNewRecord()
    {
        $userData = [
            'name' => 'JohnDoe',
            'email' => 'johndoe@gmail.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'role_id' => 1,
        ];

        $response = $this->postJson(route('users.store'), $userData);

        $response->assertCreated();
        $response->assertExactJson(['message' => 'User successfully created!']);
        $response->assertJsonMissingValidationErrors();
        $this->assertDatabaseCount('users', 11);
    }

    public function testStoreMethodFailsWithUnUniqueEmailAndMinLengthOfPasswordAndEmptyName()
    {
        $userData = [
            'name' => '',
            'email' => 'johndoe@gmail.com',
            'password' => 'passwor',
            'password_confirmation' => 'password',
            'role_id' => 1,
        ];
        User::create($userData);

        $response = $this->postJson(route('users.store'), $userData);

        $response->assertUnprocessable();
        $response->assertJsonStructure(['message', 'errors']);
        $response->assertJsonValidationErrors(['email', 'password', 'name']);
        $this->assertDatabaseCount('users', 11);
    }

    public function testShowMethodReturnsUserResource()
    {
        $response = $this->getJson(route('users.show', 10));

        $response->assertOk();
        $response->assertJsonStructure([
            'id',
            'name',
            'email',
        ]);
    }

    public function testUpdateMethodUpdatesExistingRecord()
    {
        $userData = [
            'name' => 'john doe',
            'email' => 'johndoe@gmail.com',
            'role_id' => 1,
        ];

        $this->putJson(route('users.update', 1), $userData);

        $this->assertDatabaseHas('users', $userData);
        $this->assertDatabaseCount('users', 10);
    }

    public function testUpdateMethodFailsWithEmptyName()
    {
        $userData = [
            'name' => '',
            'email' => 'johndoe@gmail.com',
            'role_id' => 1,
        ];

        $response = $this->putJson(route('users.update', 1), $userData);

        $this->assertDatabaseMissing('users', $userData);
        $response->assertJsonValidationErrors('name');
    }

    public function testDestroyMethodDeleteExistingRecord()
    {
        $this->deleteJson(route('users.destroy', 1));

        $this->assertDatabaseCount('users', 9);
    }

    public function testDestroyMethodFailsBecauseOfRecordNotFound()
    {
        $response = $this->deleteJson(route('users.destroy', 123));

        $response->assertExactJson(['message' => 'Unable to locate the User you requested.']);
        $this->assertDatabaseCount('users', 10);
    }
}
