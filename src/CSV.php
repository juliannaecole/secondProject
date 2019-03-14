<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 3/12/2019
 * Time: 9:10 PM
 */

class CSV
{
    static public function getRecords($filename) {
        $file = fopen($filename,"r");
        $fieldNames = array();
        $count = 0;
        while(! feof($file))
        {
            $record = fgetcsv($file);
            if($count == 0) {
                $fieldNames = $record;
            } else {
                $records[] = Factory::create($fieldNames, $record);
            }
            $count++;
        }
        fclose($file);
        return $records;
    }
}