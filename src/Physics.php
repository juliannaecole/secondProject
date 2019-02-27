<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 2/14/2019
 * Time: 12:41 PM
 */

class Physics
{
    public static function acceleration($force, $mass) :float
    {
        $acceleration = $force * $mass;

        return $acceleration;
    }
}