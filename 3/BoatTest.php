<?php

class BoatTest extends PHPUnit_Framework_TestCase
{
    public function testLenthComparison()
    {
        $a = new My_Boat(10, 420);
        $b = new My_Boat(5, 230);

        $this->assertEquals(true, $a->isLongerThan($b));
    }

    public function testSpeed()
    {
        $a = new My_Boat(10, 420);
        $b = new My_Boat(5, 230);

        $this->assertEquals(10, $a->getSpeed());
        $this->assertEquals(5, $b->getSpeed());
    }
}
