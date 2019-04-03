<?php
/**
 * Created by PhpStorm.
 * User: julia
 * Date: 4/2/2019
 * Time: 6:24 PM
 */
function my_autoloader($class) {
    include $class . '.php';
}

// register the autoloader
spl_autoload_register('my_autoloader');