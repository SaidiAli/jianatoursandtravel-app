<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SignUpTest extends TestCase
{
    use RefreshDatabase;


    /**
     * Test user can see the register form
     *
     * @return void
     */
    public function test_user_can_see_signup_form() {

        $response = $this->get('/register');

        $response->assertSuccessful();
    }
    /**
     * A basic feature test signup
     *
     * @return void
     */
    public function test_user_can_signup()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'test@test.com',
            'password' => 'password',
        ]);

        $response->assertRedirect('/profile');
    }
}
