<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 4/2/2019
 * Time: 6:24 PM
 */

// index.php

// my custom autoloader
function my_autoloader($class) {
    include 'Classes/' . $class . '.php';
}

// register the autoloader
spl_autoload_register('my_autoloader');

// load A class
$a = new A();

// check the list of all loaded files
var_dump(get_included_files());