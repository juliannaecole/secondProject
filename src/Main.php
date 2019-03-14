<?php
/**
 * Created by PhpStorm.
 * User: kwilliams
 * Date: 10/1/18
 * Time: 9:23 PM
 */

class main  {
    static public function start($filename) {
        $records = CSV::getRecords($filename);
        $table = ArrayFunctions::generateTable($records);
    }
}