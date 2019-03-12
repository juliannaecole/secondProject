<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 3/12/2019
 * Time: 10:06 AM
 */

declare(strict_types=1);
use PHPUnit\Framework\TestCase;
final class FactoryTest extends TestCase
{
    public function testBuildArrayExists()
    {
        $this->assertTrue(
            method_exists(Factory::class, 'buildArray')
    );
    }

   /* public function testRecordsArrayObject()
    {
        $records = Array();
        $count = 0;
        $fieldNames = array();
        if (($handle = File::openCSVFile("data/data.csv", 'Album')) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if ($count == 0) {
                    $fieldNames = $row;
                } else
                {
                    $records[] = Factory::buildArray($fieldNames, $row);
                }
                $count++;
            }
            fclose($handle);
        }        return $records;
                print_r($records);
    } */
}