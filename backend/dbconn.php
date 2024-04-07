<?php

    // Replace these values with your actual database credentials
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "enrolment_system";

    // Create a PDO connection with prepared statements
    try {
        $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Connection failed: " . $e->getMessage());
    }


?>