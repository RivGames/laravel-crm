<?php

namespace Tests\Feature;

use App\Models\Client;
use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;
    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        User::factory(10)->create();
        Client::factory(10)->create();
        Project::factory(10)->create();
    }

    public function testIndexMethodReturnsProjectCollection()
    {
        $response = $this->getJson(route('projects.index'));

        $response->assertOk();
        $response->assertJsonStructure([
            [
                'title',
                'description',
                'user_id',
                'client_id',
                'deadline',
                'status'
            ]
        ]);
    }
}