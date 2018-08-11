<?php

    define('HOSTNAME','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DATABASE','template');
    $conn = new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE);
    //tester($conn,true);
