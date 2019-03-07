<?php
/**
 * Created by PhpStorm.
 * User: MAlzate
 * Date: 2/26/2019
 * Time: 8:50 PM
 */
final class AmericanIdiotAlbum extends Album
{
    public function goodRating(): int
    {
        return 1;
    }

    public function badRating(): int
    {
        return -1;
    }

}