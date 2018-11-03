<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CreatedCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreatedCar()
    {
        $car = factory(Car::class)->create();
        $this->assertInstanceOf(Car::class, $car);
    }
}
