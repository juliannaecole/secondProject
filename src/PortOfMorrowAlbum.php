<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 2/26/2019
 * Time: 8:20 PM
 */

final class PortOfMorrowAlbum extends Album
{
    public function goodRating(): int //tested by assertTrue method_exists (first)
    {
        return 1;
    }

    public function badRating(): int //tested by assertTrue method_exists (second)
    {
        return -1;
    }

}