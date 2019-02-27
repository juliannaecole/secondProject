<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 2/26/2019
 * Time: 7:28 PM
 */
declare(strict_types=1);

abstract class Album
{
    public $artist; //tested by assertClassHasAttribute
    public $title;
    public $year;
    public $totalsongs;
    public $genre;

    public function goodRating(): int //tested by assertTrue method_exists (first)
    {

    }

    public function badRating(): int //tested by assertTrue method_exists (second)
    {

    }

}