<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class StringCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testStringCar()
    {
        $car =  Car::find(40);
        $this->assertInternalType("string", $car->model);
    }
}
