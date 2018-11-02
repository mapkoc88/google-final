<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdatedUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdatedUser()
    {
        $user = User::find(1);
        $user->name = 'Steve Smith';
        $user->save();
        $name = $user->name;
        $this->assertEquals($name,$user->name);
    }
}
