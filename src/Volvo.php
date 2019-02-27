<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/14/2019
 * Time: 11:57 AM
 */

final class Volvo extends Car
{
    public function accelerate() :int
    {
        return 1;
    }

    public function decelerate(): int
    {
        return -1;
    }

}