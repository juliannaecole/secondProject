<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/13/2019
 * Time: 1:23 PM
 */

class HtmlTags
{
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