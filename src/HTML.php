<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 3/12/2019
 * Time: 9:11 PM
 */

class HTML {
    public static function generateTable($records) {
    $count = 0;
    foreach ($records as $record) {
        if($count == 0) {
            $array = $record->returnArray();
            $fields = array_keys($array);
            $values = array_values($array);
            print_r($fields);
            print_r($values);
        } else {
            $array = $record->returnArray();
            $values = array_values($array);
            print_r($values);
        }
        $count++;
    }
}
}