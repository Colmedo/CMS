<?php
/**
 * User: Carlos-Olmedo
 * Date: 27/06/2018
 * Time: 22:01
 */

    // __FILE__ returns the current path to this file
    // dirname() returns the path to the parent directory

    define('PRIVATE_PATH', dirname(__FILE__));
    define('PROJECT_PATH', dirname(PRIVATE_PATH));
    define('PUBLIC_PATH', PROJECT_PATH . '/public');
    define('SHARED_PATH', PRIVATE_PATH . '/shared');

    require_once('functions.php');
