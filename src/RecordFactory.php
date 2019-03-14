<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/13/2019
 * Time: 12:14 PM
 */

class RecordFactory
{
    public static function buildArray($fieldNames,$values)
    {
        return new Records($fieldNames, $values);
    }
}