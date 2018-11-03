<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class MakeCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testMakeCar()
    {
        $car =  Car::find(32);
        $make = $car->make;
        $this->assertEquals('ford', $make);
    }
}
