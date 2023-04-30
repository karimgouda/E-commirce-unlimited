<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthTest extends TestCase
{

//    use RefreshDatabase;
    /**
     * A basic feature test example.
     */


    public function test_login()
    {
        $login = User::first();
        $response = $this->actingAs($login)->get('/admin');
        $response->assertStatus(302);
    }

}
