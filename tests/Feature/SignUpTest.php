<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SignUpTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test signup
     *
     * @return void
     */
    public function testSignup()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'test@test.com',
            'password' => 'password',
            '_token' => csrf_token()
        ]);

        $response->assertStatus(201);

        $response->assertCreated();
    }
    
    /**
     * Test the database
     *
     * @return void
     */
    public function testDatabase() {
        $this->seed();

        $this->assertDatabaseCount('users', 10);
    }
}
