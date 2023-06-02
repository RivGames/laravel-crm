<?php

namespace Tests\Feature;

use App\Enums\Status;
use App\Models\Client;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub
        User::factory(10)->create();
        Client::factory(10)->create();
        Project::factory(10)->create();
        Task::factory(10)->create();
        $user = User::factory()->make();
        $this->actingAs($user);
    }

    public function testIndexMethodReturnsTaskCollection()
    {
        $response = $this->getJson(route('tasks.index'));

        $response->assertOk();
        $response->assertJsonStructure([
            [
                'title',
                'description',
                'user_id',
                'client_id',
                'project_id',
                'deadline',
                'status',
            ],
        ]);
    }

    public function testStoreMethodCreatesNewRecord()
    {
        $userData = [
            'title' => Str::random(25),
            'description' => Str::random(125),
            'user_id' => rand(1, 10),
            'client_id' => rand(1, 10),
            'project_id' => rand(1, 10),
            'deadline' => fake()->date(),
            'status' => Status::OPEN->name,
        ];

        $response = $this->postJson(route('tasks.store'), $userData);

        $response->assertCreated();
        $this->assertDatabaseHas('tasks', $userData);
    }

    public function testStoreMethodFailsWithInCorrectData()
    {
        $userData = [
            'title' => '',
            'description' => '',
            'user_id' => rand(1, 10),
            'client_id' => rand(1, 10),
            'project_id' => rand(1, 10),
            'deadline' => '',
            'status' => '',
        ];

        $response = $this->postJson(route('tasks.store'), $userData);

        $response->assertUnprocessable();
        $response->assertJsonValidationErrors(['title','description','deadline','status']);
        $this->assertDatabaseMissing('tasks', $userData);
    }

    public function testShowMethodReturnsTaskResource()
    {
        $response = $this->getJson(route('tasks.show',1));

        $response->assertOk();
        $response->assertJsonStructure([
            'title',
            'description',
            'user_id',
            'client_id',
            'project_id',
            'deadline',
            'status'
        ]);
    }

    public function testUpdateMethodUpdatesExistingRecord()
    {
        $userData = [
            'title' => Str::random(25),
            'description' => Str::random(125),
            'user_id' => rand(1, 10),
            'client_id' => rand(1, 10),
            'project_id' => rand(1, 10),
            'deadline' => fake()->date(),
            'status' => Status::OPEN->name,
        ];

        $response = $this->putJson(route('tasks.update',1),$userData);

        $response->assertOk();
        $response->assertExactJson(['message' => 'Task successfully updated!']);
        $this->assertDatabaseHas('tasks',$userData);
    }

    public function testUpdateMethodFailsWithInCorrectData()
    {
        $userData = [
            'title' => Str::random(25),
            'description' => Str::random(125),
            'user_id' => rand(1, 10_000),
            'client_id' => rand(1, 10_000),
            'project_id' => rand(1, 10_000),
            'deadline' => fake()->date(),
            'status' => Status::OPEN->name,
        ];

        $this->putJson(route('tasks.update',1),$userData);

        $this->assertDatabaseMissing('tasks',$userData);
    }

    public function testDestroyMethodDeleteExistingRecord()
    {
        $response = $this->deleteJson(route('tasks.destroy',1));

        $response->assertNoContent();
        $this->assertDatabaseCount('tasks',9);
    }

    public function testDestroyMethodFailsBecauseOfRecordNotFound()
    {
        $response = $this->deleteJson(route('tasks.destroy',100));

        $response->assertNotFound();
        $this->assertDatabaseCount('tasks',10);
    }
}
