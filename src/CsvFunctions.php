<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/12/2019
 * Time: 10:03 PM
 */

class CsvFunctions
{
    public static function openCSVFile(String $filename)
    {
        return fopen($filename, "r");
    }
    public static function retrieveRowsFromCSVFile($filename)
    {
        return fgetcsv($filename, 1000, ",");
    }
    public static function closeCSV($filename)
    {
        return fclose($filename);
    }

}