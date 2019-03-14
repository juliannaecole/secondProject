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
        $this->assertInstanceOf(File::class, new File());
    }

    public function testReadCSVtoArrayExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'readCSVtoArray')
        );

    }
    public function testReadCSVtoArray()
    {
        print_r (File::readCSVtoArray("data/data.csv", 'Album'));
    }

    public function testPrintArrayAsTableExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'printArrayAsTable')
        );

    }

    public function testPrintArrayAsTable()
    {
        $albums = File::readCSVtoArray("data/data.csv", 'Album');
        echo File::printArrayAsTable($albums);
    }

}

