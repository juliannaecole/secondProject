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
        $albums = File::readCSVtoArray("data/data.csv", 'Album');
        print_r($albums);

    }
    public function testPrintArrayKeysExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'printArrayKeys')
        );

    }
    /*public function testPrintArrayAsTableExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'printArrayAsTable')
        );

    }

    public function testPrintArrayAsTable()
    {
        $albums = File::readCSVtoArray("data/data.csv", 'Album');
        $table = File::printArrayAsTable($albums);
        echo $table;
    } */

    public function testArrayPrintsKeys()
    {
        $albums = File::readCSVtoArray("data/data.csv", 'Album');
        $fieldNames = File::printArrayKeys($albums);
        print_r($fieldNames);
    }

    public function testPrintArrayValuesExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'printArrayValues')
        );

    }

    public function testPrintArrayValues()
    {
        $albums = File::readCSVtoArray("data/data.csv", 'Album');
        $table = File::printArrayValues($albums);
        print_r($table);
    }

    public function testPrintArrayRowExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'printArrayRow')
        );
    }

    public function testPrintArrayRow()
    {
        $albums = File::readCSVtoArray("data/data.csv", 'Album');
        $table = File::printArrayRow($albums);
        print_r($table);
    }


}

