<?php
    //Database params
    define('DB_HOST', 'localhost'); //Add your db host
    define('DB_USER', 'root'); // Add your DB root
    define('DB_PASS', ''); //Add your DB pass
    define('DB_NAME', 'eshop_db'); //Add your DB Name

    //APPROOT
    define('APPROOT', dirname(dirname(__FILE__)));

    //URLROOT (Dynamic links)
    define('URLROOT', $path = str_replace("public/","",  str_replace("index.php","",$_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'])));

    define('ASSETS', $path . 'assets/');

    //Sitename
    define('SITENAME', 'eShop');

    define('THEME', 'eshop/');

    //Debug settings
    define('DEBUG', true);
    if (DEBUG) {
        ini_set('display_errors', 1);
    }else {
        ini_set('display_errors', 0);
    }
