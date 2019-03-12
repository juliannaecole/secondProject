<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 3/12/2019
 * Time: 6:02 PM
 */

class ArrayFunctions
{
    public function arrayCombine($fieldNames,$values)
    {
        $records = array_combine($fieldNames, $values);
    }
    public static function printArrayKeys(Array $records): array
    {
        $fieldNames = array_keys(get_object_vars($records[0]));
        return $fieldNames;
    }

    public static function printArrayValues(Array $records): array
    {
        $values = array();
        for($i=0; $i <= (sizeof($records)-1); $i++ )
        {
            $values[] = get_object_vars($records[$i]);
        }
        return $values;
    }
}