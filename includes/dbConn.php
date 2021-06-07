<?php

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $database = "tutorspace_db";

    $dbConn = mysqli_connect($serverName,$userName, $password, $database);

    if (!$dbConn) {
        die ("Connection failed: " . mysqli_connect_error());
    }