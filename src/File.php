<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/21/2019
 * Time: 11:36 AM
 *
 *
 */
include_once "CsvFunctions.php";
include_once "ArrayFunctions.php";
include_once "RecordFactory.php";
include_once "Records.php";
include_once "HtmlTags.php";
class File
{

    public static function readCSVtoArray(String $filename, String $class): array
    {
        $albums = ArrayFunctions::makeArray();
        $count = 0;
        $fieldNames = '';
        if (($handle = CsvFunctions::openCSVFile($filename)) !== FALSE) {
            while (($row = CsvFunctions::retrieveRowsFromCSVFile($handle)) !== FALSE) {
                if ($count == 0) {
                    $fieldNames = $row;
                } else {
                   $albums[] =(object)RecordFactory::buildArray($fieldNames, $row);
                }
                $count++;
            }
            CsvFunctions::closeCSV($handle);
        }

        return $albums;
    }

    public static function printArrayAsTable(Array $albums): string
    {
        $row = (HtmlTags::BeginOfHtml());
        $fieldnames = ArrayFunctions::printArrayKeys($albums);
        $values = ArrayFunctions::printArrayValues($albums);
        foreach ($fieldnames as $fieldname)
        {
            $row .= HtmlTags::HeaderCellTags($fieldname);
        }
        $row .= (HtmlTags::MidOfHtml());
        foreach ($values as $value)
        {
            $row .= HtmlTags::BeginOfRow();
            foreach ($fieldnames as $fieldname) {

                $row .= HtmlTags::RowCellTags($value[$fieldname]);
            }
            $row .= HtmlTags::EndOfRow();
        }
        $row .= (HtmlTags::EndOfHtml());
        return $row;
    }

}