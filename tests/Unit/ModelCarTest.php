<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class ModelCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testModelCar()
    {
        $car =  Car::find(32);
        $year= $car->make;
        $this->assertEquals('ford', $year);
    }
}
