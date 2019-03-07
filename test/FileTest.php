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
        $records = File::readCSVtoArray("data/data.csv", 'Album');
        print_r($records);

    }
    public function testPrintArrayKeysExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'printArrayKeys')
        );

    }
    public function testPrintArrayAsTableExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'printArrayAsTable')
        );

    }

    public function testPrintArrayAsTable()
    {
        $records = File::readCSVtoArray("data/data.csv", 'Album');
        $table = File::printArrayAsTable($records);
        echo $table;
    }

    public function testArrayPrintsKeys()
    {
        $records = File::readCSVtoArray("data/data.csv", 'Album');
        $fieldNames = File::printArrayKeys($records);
        print_r($fieldNames);
    }

}

