<?php
declare(strict_types=1);

abstract class Car //tested by assertInstanceOf
{
    public $wheels; //tested by assertClassHasAttribute
    public $make;
    public $model;
    public $year;
    public $doors;
    public $weight;
    public $engine;

    public function accelerate() :int //tested by assertTrue method_exists (first)
    {

    }

    public function decelerate() :int //tested by assertTrue method_exists (second)
    {

    }

    public function carColor() :array
    {
        $array = [
                'one' => 'blue',
                'two' => 'green',
                'three' => 'red'
        ];                            //Associative array

        return $array;

    }
}

