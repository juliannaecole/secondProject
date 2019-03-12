<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 3/12/2019
 * Time: 7:08 PM
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
        $fieldNames = ArrayFunctions::printArrayKeys($records);
        print_r($fieldNames);
    }

    public function testPrintArrayValuesExists()
    {
        $this->assertTrue(
            method_exists(ArrayFunctions::class, 'printArrayValues')
        );
    }

    public function testArrayPrintsValues()
    {
        $records = File::readCSVtoArray("data/data.csv", 'Album');
        $table = ArrayFunctions::printArrayValues($records);
        print_r($table);
    }
}