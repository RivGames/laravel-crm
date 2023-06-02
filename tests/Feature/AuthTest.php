<?php

namespace Tests\Feature;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;
    public function testRegisterMethodCreatesNewUser()
    {
        $userData = [
            'name' => Str::random(5),
            'email' => fake()->email(),
            'password' => 'password',
            'password_confirmation' => 'password'
        ];

        $response = $this->postJson(route('auth.register'),$userData);

        $response->assertCreated();
        $response->assertJsonStructure(['message','token']);

        $this->assertDatabaseCount('users',1);
        $this->assertDatabaseCount('personal_access_tokens',1);
    }

    public function testLoginMethodReturnsSuccess()
    {
        $email = fake()->email();
        $password = 'password';
        $userData = [
            'name' => Str::random(5),
            'email' => $email,
            'password' => $password,
            'password_confirmation' => 'password',
            'role_id' => Role::USER
        ];
        User::create($userData);

        $response = $this->postJson(route('auth.login'),$userData);

        $response->assertJsonStructure(['message','token']);
        $this->assertDatabaseCount('users',1);
        $this->assertDatabaseCount('personal_access_tokens',1);
    }

    public function testLoginMethodFailsWithInCorrectEmailOrPassword()
    {
        User::factory(1)->create();
        $userData = [
            'email' => fake()->email(),
            'password' => Str::random(),
        ];

        $response = $this->postJson(route('auth.login'),$userData);

        $response->assertUnauthorized();
        $response->assertExactJson([
            'message' => 'Email or Password are wrong'
        ]);
    }

    public function testLogoutMethodWorksSuccessfully()
    {
        $userData = [
            'name' => Str::random(5),
            'email' => fake()->email(),
            'password' => 'password',
            'password_confirmation' => 'password'
        ];

        $this->postJson(route('auth.register'),$userData);
        $user = User::find(1);

        $this->actingAs($user)->postJson(route('auth.logout'));

        $this->assertDatabaseCount('personal_access_tokens',0);
    }
}
