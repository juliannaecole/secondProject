<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/12/2019
 * Time: 10:28 PM
 */

class ArrayFunctions
{
    public static function combineArray(array $key,array $val)
    {
        return array_combine($key, $val);
    }
    public static function printArrayKeys(Array $records)
    {
        return array_keys(self::getObjectVariableFromArray($records[0]));

    }
    public static function getSizeOfAlbum(Array $records)
    {
        return (sizeof($records)-1);

    }
    public static function getObjectVariableFromArray($records)
    {
        return (get_object_vars($records));
    }
    public static function printArrayValues(Array $records)
    {
        $values = self::makeArray();
        for($i=0; $i <= self::getSizeOfAlbum($records); $i++ )
        {
            $values[] = self::getObjectVariableFromArray($records[$i]);
        }
        return $values;
    }
    public static function makeArray()
    {
        return  Array();
    }
}