<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeletedUser()
    {
        $user = User::find(1);
        $user->delete();
        $this->assertTrue(true);
    }
}
