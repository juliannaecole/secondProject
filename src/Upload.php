<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 4/9/2019
 * Time: 7:31 PM
 */
include('../src/File.php');
include('../src/db/SQLiteConnection.php');
include('../src/SQLiteFunctions.php');
include('../src/HtmlTags.php');


$allowedFileExtensions = ['csv','xlsx'];
$fileName = $_FILES['fileUploaded']['name'];
$fileTemporaryName  = $_FILES['fileUploaded']['tmp_name'];
$fileSize = $_FILES['fileUploaded']['size'];
$fileType = $_FILES['fileUploaded']['type'];
$temp = explode('.', $fileName);
$fileExtension = end($temp);
$uploadPath = getcwd() . "/uploads/" . basename($fileName);
$errors = [];

if (isset($_POST['submit'])) {
    if (! in_array($fileExtension,$allowedFileExtensions)) {
        $errors[] = "This file extension is not a csv or a xlsx try again";
    }
    if ($fileSize > 2000000) {
        $errors[] = "This file is more than 2MB. Try again.";
    }
    if (empty($errors)) {
        $didUpload = move_uploaded_file($fileTemporaryName, $uploadPath);
        if ($didUpload) {
            echo basename($fileName) . " has been uploaded";

            $records = File::readCSVtoArray($uploadPath, 'Album');
            SQLiteFunctions::createTableInDatabase($records);
            SQLiteFunctions::addValuestoTableInDatabase($records);


            $table = HtmlTags::bootstrapDocumentation(). HtmlTags::BeginContainer() . File::printArrayAsTable($records) . HtmlTags::CloseContainer();
            echo $table ;

        } else {
            echo "There was an error adding to the database";
        }
    }
    else {
        foreach ($errors as $error) {
            echo $error;
        }
    }
}