<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/21/2019
 * Time: 11:36 AM
 */

class File
{

    public static function readCSVtoArray(String $filename, String $class) :array
    {
        $records = Array();
        $count = 0;
        $fieldNames = '';
        if (($handle = fopen($filename, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {

                if($count == 0)
                {
                    $fieldNames = $row;  //row goes to fieldNames, row must contain fieldNames
                } else
                    {
                        $records[] = (object) array_combine($fieldNames, $row);  //if it's not 0, array combines row with field names (trying to get make, model, and year as header for table, information will not be 0
                    } // (object) is called type casting, whatever data type you put in, it's going to try to take what's in array ( ) and turn it into an object
                    $count++;
            }
            fclose($handle);
        }

        return $records;
    }


}