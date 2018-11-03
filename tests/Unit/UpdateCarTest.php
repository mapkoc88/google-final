<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class UpdateCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCarTest()
    {
        $car = Car::find(1);
        $car->year = '2000';
        $car->save();
        $year = $car->year;
        $this->assertEquals($year,$car->year);
    }
}
