<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 3/12/2019
 * Time: 10:02 AM
 */

class Factory
{
    public static function buildArray($fieldNames,$row)
    {
        $records = ArrayFunctions::arrayCombine($fieldNames, $row);
        return $records;
    }
}