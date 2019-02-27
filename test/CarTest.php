<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CarTest extends TestCase
{

    public function testArray() {

        $car = new Volvo();

        $CarColors = $car->carColor();  //get car colors
        $this->assertArrayHasKey('one',$CarColors);  //looking for key one in CarColors
        $this->assertArrayHasKey('two',$CarColors);
        $this->assertArrayHasKey('three',$CarColors);

    }

    public function testCanCreateVolvo(): void
    {
        $car = new Volvo(); //$car is object; new Volvo instantiates volvo class

        $this->assertInstanceOf(Volvo::class, $car); //once car class is added, $car should be car
    }

    public function testCanCreateFord(): void
    {
        $car = new Ford(); //$car is object; new Ford instantiates ford class

        $this->assertInstanceOf(Ford::class, $car); //once car class is added, $car should be car
    }

    public function testCarHasWheels(): void
    {
        $this->assertClassHasAttribute('wheels', Car::class); //looking for wheels in the car class
    }

    public function testCarAccelerates(): void
    {
        $this->assertTrue(
            method_exists(Car::class, 'accelerate') //class and method
        );
    }

    public function testCarDecelerates(): void
    {
        $this->assertTrue(
            method_exists(Car::class, 'decelerate') //class and method
        );
    }

    public function testVolvoAccelerates(): void
    {
        $volvo = new Volvo();

        $this->assertEquals(1, $volvo->accelerate());
    }

    public function testVolvoDecelerates(): void
    {
        $volvo = new Volvo();

        $this->assertEquals(-1, $volvo->decelerate());
    }

    public function testFordAccelerates(): void
    {
        $ford = new Ford();

        $this->assertEquals(2, $ford->accelerate());
    }

    public function testFordDecelerates(): void
    {
        $ford = new Ford();

        $this->assertEquals(-2, $ford->decelerate());
    }

    public function testAcceleration(): void
    {
        Physics::acceleration(1, 2);
        $this->assertEquals(2, Physics::acceleration(1, 2));
    }

}
