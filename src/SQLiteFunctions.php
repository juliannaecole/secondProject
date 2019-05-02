<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 5/2/2019
 * Time: 9:20 AM
 */

//namespace ma867\src;
include "ArrayFunctions.php";



class SQLiteFunctions
{

    public static function createTableInDatabase(Array $records)
    {
        global $pdo;
        $pdo= (new SQLiteConnection())->connect();
        if ($pdo != null)
            echo 'Connected to the SQLite database successfully!';
        else
            echo 'Whoops, could not connect to the SQLite database!';

        $fieldnames = ArrayFunctions::printArrayKeys($records);

        $counter = 0;
        $columnNames = 'create table music (';
        foreach ($fieldnames as $fieldname) {
            $counter++;
            if($counter == count($fieldnames)){
                $columnNames .= $fieldname . ' varchar(255)';
            }
            else {
                $columnNames .= $fieldname . ' varchar(255)' . ', ';
            }
        }
        $columnNames.= ')';
       // echo $columnNames;
        $stmt = $pdo->prepare($columnNames);
        $stmt->execute();
    }
    public static function addValuestoTableInDatabase(Array $records)
    {
        global $pdo;
        $pdo= (new SQLiteConnection())->connect();
        if ($pdo != null)
            echo 'Connected to the SQLite database successfully!';
        else
            echo 'Whoops, could not connect to the SQLite database!';
        $fieldnames = ArrayFunctions::printArrayKeys($records);
        $values = ArrayFunctions::printArrayValues($records);
        foreach ($values as $value) {
            $counter2 = 0;
            $row ='insert into music values(';
            foreach ($fieldnames as $fieldname) {
                $counter2++;
                if($counter2 == count($fieldnames)){
                    $row .= "'" . ($value[$fieldname]) . "')";
                }
                else {
                    $row .= "'" .($value[$fieldname]) . "'" . ', ';
                }

            }
          //  echo $row;
            $stmt2 = $pdo->prepare($row);
            $stmt2->execute();
        }
    }
}