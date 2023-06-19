<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\AssertableJson;

class CategoryTest extends TestCase
{
    //use RefreshDatabase;

    public function test_shold_be_able_login_with_user()
    {
        
    }

    public function test_shold_be_able_to_create_a_new_category(): void
    {
        $user = [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => 'password', // password
        ];


        $response = $this->postJson('/api/register', ['email' => $user['email'], 'password' => 'password']);
        $response->assertJson(fn (AssertableJson $json) => $json->has('status'));
    }

  
}
