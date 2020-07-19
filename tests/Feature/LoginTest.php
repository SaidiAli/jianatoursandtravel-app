<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_can_see_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);

        $response->assertSuccessful();
    }

    public function test_user_cant_login_when_authenticated() {
        $user = factory('App\User')->make();

        $response = $this->actingAs($user)->get('/login');

        $response->assertRedirect('/profile');

    }

    public function test_user_can_login_with_correct_credentials()
    {

        $user = factory('App\User')->create([
            'password' => bcrypt($password = 'password')
        ]);

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password
        ]);

        $response->assertRedirect();
    }

    public function test_user_cannot_login_with_wrong_credentials()
    {

        $user = factory('App\User')->create([
            'password' => bcrypt('password')
        ]);

        $response = $this->from('/login')->post('/login', [
            'email' => $user->email,
            'password' => 'wrong-password'
        ]);

        $response->assertRedirect('/login');
    }
}
