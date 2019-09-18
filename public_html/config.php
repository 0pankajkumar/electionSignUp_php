<?php
    $host = "localhost";
    $userName = "id10912974_electionuser";
    $password = "quad2core";
    $dbName = "id10912974_electiondata";
    // Create database connection
    $conn = new mysqli($host, $userName, $password, $dbName);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
    ?>