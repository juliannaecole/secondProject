<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class FileTest extends TestCase
{
    public function testDataDirectory()
    {
        $this->assertDirectoryExists('data');
    }

    public function testCSVFileExists()
    {
        $this->assertfileExists('data/data.csv');
    }

    public function testFileObject()
    {
        $this->assertInstanceOf(File::class, new File()); //testing that file object is an instance of File class
    }

    public function testReadCSVtoArrayExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'readCSVtoArray')  //test that the file can be read
        );

    }

    public function testReadCSVtoArray()  //"does it read it, does it turn back an array"
    {
        $records = File::readCSVtoArray("data/data.csv",'Car'); //the file that you want to read, calling the function and passing a string that's just 'Car'
        print_r($records);

    }

}
