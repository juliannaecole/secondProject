<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 3/13/2019
 * Time: 8:00 PM
 */
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class HtlmTagTest extends TestCase
{
    public function testBeginOfTableExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'BeginOfTable')
        );
    }
    public function testBeginOfTable()
    {
        $this->assertEquals('<table class="table">','<table class="table">');
    }
    public function testEndOfTableExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'EndOfTable')
        );
    }
    public function testEndOfTable()
    {
        $this->assertEquals('</table>','</table>');
    }
    public function testBeginOfHeadExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'BeginOfHead')
        );
    }
    public function testBeginOfHead()
    {
        $this->assertEquals("<thead class=\"thead-dark\" style=\"font-family: \'Poppins\', sans-serif;\">","<thead class=\"thead-dark\" style=\"font-family: \'Poppins\', sans-serif;\">");
    }
    public function testEndOfHeadExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'EndOfHead')
        );
    }
    public function testEndOfHead()
    {
        $this->assertEquals('</thead>', '</thead>');
    }
    public function testBeginOfBodyExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'BeginOfBody')
        );
    }
    public function testBeginOfBody()
    {
        $this->assertEquals("<tbody style=\"font-family: 'Poppins', sans-serif;\">", "<tbody style=\"font-family: 'Poppins', sans-serif;\">");
    }
    public function testEndOfBodyExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'EndOfBody')
        );
    }
    public function testEndOfBody()
    {
        $this->assertEquals('</tbody>', '</tbody>');
    }
    public function testBeginOfRowExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'BeginOfRow')
        );
    }
    public function testBeginOfRow()
    {
        $this->assertEquals('<tr>', '<tr>');
    }
    public function testEndOfRowExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'EndOfRow')
        );
    }
    public function testEndOfRow()
    {
        $this->assertEquals('</tr>', '</tr>');
    }
    public function testHeaderCellTagsExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'HeaderCellTags')
        );
    }
    public function testHeaderCellTags()
    {
        $this->assertEquals('<th>', '<th>');
        $this->assertEquals('</th>', '</th>');
    }
    public function testRowCellTagsExist()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'RowCellTags')
        );
    }
    public function testRowCellTags()
    {
        $this->assertEquals('<td>', '<td>');
        $this->assertEquals('</td>', '</td>');
    }
    public function testBeginOfHtmlExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'BeginOfHtml')
        );
    }
    public function testBeginOfHtml()
    {
        $this->assertEquals((HtmlTags::BeginOfTable()) . (HtmlTags::BeginOfHead()) . (HtmlTags::BeginOfRow()), (HtmlTags::BeginOfTable()) . (HtmlTags::BeginOfHead()) . (HtmlTags::BeginOfRow()));

    }
    public function testMidOfHtmlExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'MidOfHtml')
        );
    }
    public function testMidOfHtml()
    {
        $this->assertEquals((HtmlTags::EndOfRow()) . (HtmlTags::EndOfHead()). (HtmlTags::BeginOfBody()), (HtmlTags::EndOfRow()) . (HtmlTags::EndOfHead()). (HtmlTags::BeginOfBody()));
    }
    public function testEndOfHtmlExists()
    {
        $this->assertTrue(
            method_exists(HtmlTags::class, 'EndOfRow')
        );
    }
    public function testEndOfHtml()
    {
        $this->assertEquals((HtmlTags::EndOfBody()) . (HtmlTags::EndOfTable()),(HtmlTags::EndOfBody()) . (HtmlTags::EndOfTable()));
    }
}