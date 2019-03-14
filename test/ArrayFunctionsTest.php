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
        $albums = File::readCSVtoArray("data/data.csv", 'Album');
        print_r(ArrayFunctions::printArrayKeys($albums));
    }

    public function testPrintArrayValuesExists()
    {
        $this->assertTrue(
            method_exists(ArrayFunctions::class, 'printArrayValues')
        );

    }
    public function testPrintArrayValues()
    {
        $albums = File::readCSVtoArray("data/data.csv", 'Album');
        print_r(ArrayFunctions::printArrayValues($albums));
    }

    public function testMakeArrayExists()
    {
        $this->assertTrue(
            method_exists(ArrayFunctions::class, 'printArrayValues')
        );

    }

}