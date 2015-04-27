<?php
require 'CsvFileIterator.php';

class DataTest extends PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionProvider()
    {
        return array(
            array(0, 0, 0),
            array(0, 1, 1),
            array(1, 0, 1),
            array(1, 1, 2)
        );
    }

    /**
     * @dataProvider additionCsvProvider
     */
    public function testAddCsv($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public function additionCsvProvider()
    {
        return new CsvFileIterator('data.csv');
    }
}
