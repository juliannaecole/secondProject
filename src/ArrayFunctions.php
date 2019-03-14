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
    public static function printArrayKeys(Array $albums)
    {
        return array_keys(self::getObjectVariableFromArray($albums[0]));

    }
    public static function getSizeOfAlbum(Array $albums)
    {
        return (sizeof($albums)-1);

    }
    public static function getObjectVariableFromArray($albums)
    {
        return (get_object_vars($albums));
    }
    public static function printArrayValues(Array $albums)
    {
        $values = self::makeArray();
        for($i=0; $i <= self::getSizeOfAlbum($albums); $i++ )
        {
            $values[] = self::getObjectVariableFromArray($albums[$i]);
        }
        return $values;
    }
    public static function makeArray()
    {
        return  Array();
    }
}