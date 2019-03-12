<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/21/2019
 * Time: 11:36 AM
 */class File
{
    public static function openCSVFile(String $filename)
    {
        $openedFile = fopen($filename, "r");
        return $openedFile;
    }

    public static function retrieveRowsFromCSVFile($openedFile): array
    {
        $openedFile = self::openCSVFile($openedFile);
        $tableRow = fgetcsv($openedFile, 1000, ",");
        return $tableRow;
    }

    public static function readCSVtoArray(String $filename, String $class): array
    {
        $records = Array();
        $count = 0;
        $fieldNames = array();
        if (($handle = self::openCSVFile($filename)) !== FALSE) {
            while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if ($count == 0) {
                    $fieldNames = $row;
                } else
                    {
                    $records[] = Factory::buildArray($fieldNames, $row);
                    }
                $count++;
            }
            fclose($handle);
        }        return $records;
    }

        public static function printArrayAsTable(Array $records): string
        {
            $row ="<table class=\"table\"><thead class=\"thead-dark\" style=\"font-family: \'Poppins\', sans-serif;\"><tr>";
            $fieldnames = ArrayFunctions::printArrayKeys($records);
            $values = ArrayFunctions::printArrayValues($records);
            foreach ($fieldnames as $fieldname)
            {
                $row .= "<th>" . $fieldname . "</th>";
            }
            $row .= "</tr></thead><tbody style=\"font-family: 'Poppins', sans-serif;\">";
            foreach ($values as $value)
            {
                $row .= "<tr>";
                foreach ($fieldnames as $fieldname)
            {
                $row .= "<td>" . $value[$fieldname] . "</td>";
            }
            $row .= "</tr>";
        }
        $row .= "</tbody></table>";
        return $row;
    }
}