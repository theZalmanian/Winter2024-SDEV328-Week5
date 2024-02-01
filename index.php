<?php

    // require Fat-Free Framework autoload file
    require_once("vendor/autoload.php");

    // instantiate Fat-Free Framework (f3) class
    $f3 = Base::instance();

    // define a default route for the project
    $f3->route("GET /", function() {
        echo "Week 5";
    });

    // run Fat-Free Framework
    $f3->run();
?>