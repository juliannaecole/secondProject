<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/12/2019
 * Time: 7:32 PM
 */

class Records
{
    public function __construct($fieldNames, $values)
    {
        $records = ArrayFunctions::combineArray($fieldNames, $values);
        foreach ($records as $column => $value) {
            self::createCell($column, $value);
        }
    }
    public function createCell($column, $value) {
        $this->{$column} = $value;
    }
}