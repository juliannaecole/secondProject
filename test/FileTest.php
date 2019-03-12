<?php

declare(strict_types=1);use PHPUnit\Framework\TestCase;final class FileTest extends TestCase

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

    public function testOpenCSVFileExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'openCSVFile')
        );
    }

    public function testRetrieveRowsFromCSVFileExists()
    {
        $this->assertTrue(
            method_exists(File::class, 'retrieveRowsFromCSVFile')
        );
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


    /*

       public function testPrintArrayRowExists()
       {
           $this->assertTrue(
               method_exists(File::class, 'printArrayRow')
           );
       }    public function testPrintArrayRow()

       {
           $albums = File::readCSVtoArray("data/data.csv", 'Album');
           $table = File::printArrayRow($albums);
           print_r($table);
       }
    */}

