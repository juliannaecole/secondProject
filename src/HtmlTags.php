<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/13/2019
 * Time: 1:23 PM
 */

class HtmlTags
{
    public static function bootstrapDocumentation()
    {
        return "<!DOCTYPE html>
                <html lang=\"en\">
                <head>
                    <title>Music Review</title>
                    <meta charset=\"utf-8\">
                    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css\">
                    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
                    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
                    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js\"></script>
                    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js\"></script>
                    <link href=\"https://fonts.googleapis.com/css?family=Poppins\" rel=\"stylesheet\">
                    <link rel=\"stylesheet\" type=\"text/css\" href=\"/stylesheets/main.css\"/>
                </head>";
    }

    public static function BeginContainer()
    {
        return "<body><div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-sm\" style=\"font-family: 'Poppins', sans-serif;\">
                        <br>";
    }
    public static function CloseContainer()
    {
        return " </div></div></div></body></html>";
    }
    public static function BeginOfTable()
    {
        return '<table class="table">';
    }
    public static function EndOfTable()
    {
        return '</table>';
    }
    public static function BeginOfHead()
    {
        return "<thead class=\"thead-dark\" style=\"font-family: \'Poppins\', sans-serif;\">";
    }
    public static function EndOfHead()
    {
        return '</thead>';
    }
    public static function BeginOfBody()
    {
        return "<tbody style=\"font-family: 'Poppins', sans-serif;\">";
    }
    public static function EndOfBody()
    {
        return '</tbody>';
    }
    public static function BeginOfRow()
    {
        return '<tr>';
    }
    public static function EndOfRow()
    {
        return '</tr>';
    }
    public static function HeaderCellTags($value)
    {
        return '<th>' . $value . '</th>';
    }
    public static function RowCellTags($value)
    {
        return '<td>' . $value . '</td>';
    }
    public static function BeginOfHtml()
    {
        return (HtmlTags::BeginOfTable()) . (HtmlTags::BeginOfHead()) . (HtmlTags::BeginOfRow());
    }
    public static function MidOfHtml()
    {
        return (HtmlTags::EndOfRow()) . (HtmlTags::EndOfHead()). (HtmlTags::BeginOfBody());
    }
    public static function EndOfHtml()
    {
        return (HtmlTags::EndOfBody()) . (HtmlTags::EndOfTable());
    }

}