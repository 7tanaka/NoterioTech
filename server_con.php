<?php

    //server configuration

    $server = "localhost";
    $user = "root";
    $password ="";
    $database ="noteriotech";

    //establishing a connection to MySQL Server

    $connection = mysqli_connect($server, $user, $password, $database);

    //check connection

    if (!$connection){
        die("<h2>ERROR 404</h2> ".mysqli_connect_error());
    } 






?>