<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class AboutTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAboutTest()
    {
        $user = User::find(1);
        $this->actingAs($user);

        $response = $this->get('/about');

        $response->assertStatus(200);
    }
}
