<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/12/2019
 * Time: 10:09 PM
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CsvFunctionsTest extends TestCase
{
    public function testOpenCSVFileExists()
    {
        $this->assertTrue(
            method_exists(CsvFunctions::class, 'openCSVFile')
        );

    }
    public function testPrintArrayKeysExists()
    {
        $this->assertTrue(
            method_exists(CsvFunctions::class, 'retrieveRowsFromCSVFile')
        );

    }
    public function testCloseCSVExists()
    {
        $this->assertTrue(
            method_exists(CsvFunctions::class, 'closeCSV')
        );

    }

}