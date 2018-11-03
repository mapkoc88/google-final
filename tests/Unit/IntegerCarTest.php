<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class IntegerCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIntegerCar()
    {
        $car =  Car::find(32);
        $year= $car->year;
        $this->assertFalse(is_int($year));
    }

}
