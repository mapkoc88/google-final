<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class ContactTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testContactTest()
    {
        $user = User::find(1);
        $this->actingAs($user);

        $response = $this->get('/contact');

        $response->assertStatus(200);
    }
}
