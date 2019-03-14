<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/13/2019
 * Time: 11:39 AM
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ArrayFunctionsTest extends TestCase
{
    public function testPrintArrayKeysExists()
    {
        $this->assertTrue(
            method_exists(ArrayFunctions::class, 'printArrayKeys')
        );

    }
      public function testArrayPrintsKeys()
    {
        $records = File::readCSVtoArray("data/data.csv", 'Album');
        print_r(ArrayFunctions::printArrayKeys($records));
    }
    public function testGetSizeOfAlbumExists()
    {
        $this->assertTrue(
            method_exists(ArrayFunctions::class, 'getSizeOfAlbum')
        );
    }
    public function testGetSizeOfAlbum()
    {
        $records = File::readCSVtoArray("data/data.csv", 'Album');
        print_r(ArrayFunctions::getSizeOfAlbum($records));
    }
    public function testGetObjectVariableFromArrayExists()
    {
        $this->assertTrue(
            method_exists(ArrayFunctions::class, 'getObjectVariableFromArray')
        );
    }
    public function testGetObjectVariableFromArray()
    {
        $records = File::readCSVtoArray("data/data.csv", 'Album');
        print_r(ArrayFunctions::getObjectVariableFromArray((object)$records));
    }
    public function testPrintArrayValuesExists()
    {
        $this->assertTrue(
            method_exists(ArrayFunctions::class, 'printArrayValues')
        );

    }
    public function testPrintArrayValues()
    {
        $records = File::readCSVtoArray("data/data.csv", 'Album');
        print_r(ArrayFunctions::printArrayValues($records));
    }

    public function testMakeArrayExists()
    {
        $this->assertTrue(
            method_exists(ArrayFunctions::class, 'printArrayValues')
        );

    }

}