<?php

namespace Tests\Feature;

use Tests\TestCase;

class AppTest extends TestCase
{
    public function test_app_status_route_returns_success(): void
    {
        $response = $this->get('/api/status');

        $response->assertOk();
        $response->assertJsonStructure(['status', 'message']);
        $response->assertExactJson([
            'message' => 'Everything is going to be OK',
            'status' => 'OK'
        ]);
    }

    public function test_any_web_route_returns_forbidden(): void
    {
        $response = $this->get('/');
        $response1 = $this->post('/test1');
        $response2 = $this->patch('/test2/test2');

        $response->assertStatus(403);
        $response1->assertStatus(403);
        $response2->assertStatus(403);
    }
}
