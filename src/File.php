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
        $records = Array(); //creating empty array
        $count = 0;
        $fieldNames = '';
        if (($handle = fopen($filename, "r")) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {

                if ($count == 0) {
                    $fieldNames = $row;
                } else {
                    $records[] = array_combine($fieldNames, $row);
                }
                $count++;
            }
            fclose($handle);
        }

        return $records;
    }

     public static function printArrayAsTable(Array $records): string
    {
        /*
        echo "\n\n";
        echo "artist\ttitle\tyear\ttotalsongs\tgenre";

        foreach ($records as $value)
        {
            echo "\n", $value['artist'], "\t\t\t\t\t\t\t\t", $value['title'], "\t\t\t\t\t\t\t", $value['year'], "\t\t\t\t\t\t\t", $value['totalsongs'], "\t\t\t\t\t\t\t", $value['genre'];
        }
        */
        $table = "<table class=\"table\"><thead class=\"thead-dark\" style=\"font-family: 'Poppins', sans-serif;\"><tr><th>Artist</th><th>Title</th><th>Year</th><th>Total Songs</th><th>Genre</th></tr></thead><tbody style=\"font-family: 'Poppins', sans-serif;\">";
        foreach ($records as $value)
        {
            $table .= "<tr>";
            $table .= "    <td>" . $value['artist'] . "</td>";
            $table .= "    <td>" . $value['title'] . "</td>";
            $table .= "    <td>" . $value['year'] . "</td>";
            $table .= "    <td>" . $value['totalsongs'] . "</td>";
            $table .= "    <td>" . $value['genre'] . "</td>";
            $table .= "</tr>";
        }

        $table .= "</tbody></table>";
        echo $table;
        return $table;
    }

}