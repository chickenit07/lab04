<?php
    $servername = "localhost";
    $username = "root";
    $password = "Dat090299@";
    $dbname = "business_service";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }