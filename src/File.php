<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/21/2019
 * Time: 11:36 AM
 */

class File
{

    public static function readCSVtoArray(String $filename, String $class): array
    {
        $albums = Array();
        $count = 0;
        $fieldNames = '';
        if (($handle = fopen($filename, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {

                if ($count == 0) {
                    $fieldNames = $row;
                } else {
                    $albums[] = array_combine($fieldNames, $row);
                }
                $count++;
            }
            fclose($handle);
        }

        return $albums;
    }

    public static function printArrayKeys(Array $albums): array
    {
        $fieldNames = array_keys($albums[0]);
        return $fieldNames;
    }


     public static function printArrayAsTable(Array $albums): string
    {
        $fieldNames = array_keys($albums[0]);

        $table = "<table class=\"table\"><thead class=\"thead-dark\" style=\"font-family: 'Poppins', sans-serif;\"><tr>";

        foreach ($fieldNames as $columnname)
        {
            $table .= "    <th>" . $columnname . "</th>";
        }
        $table .= "</tr></thead><tbody style=\"font-family: 'Poppins', sans-serif;\">";
        foreach ($albums as $row)
        {
            $table .= "<tr>";
            $table .= "    <td>" . $row['Artist'] . "</td>";
            $table .= "    <td>" . $row['Title'] . "</td>";
            $table .= "    <td>" . $row['Year'] . "</td>";
            $table .= "    <td>" . $row['Total Songs'] . "</td>";
            $table .= "    <td>" . $row['Genre'] . "</td>";
            $table .= "</tr>";
        }

        $table .= "</tbody></table>";
        echo $table;
        return $table;
    }



}