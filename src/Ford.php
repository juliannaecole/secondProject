<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/14/2019
 * Time: 11:57 AM
 */

final class Ford extends Car
{
    public function accelerate() :int
    {
        return 2;
    }

    public function decelerate() :int
    {
        return -2;
    }

}