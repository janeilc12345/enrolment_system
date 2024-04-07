<?php

// Counts the total number of students enrolled
function total() {
    include "dbconn.php";
    $stmt = $pdo->prepare("SELECT COUNT(strand) AS numberOfStudents FROM students");
    $stmt->execute();
    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // Echo the result
    return $result['numberOfStudents'];
}

// Counts the total number of STEM students enrolled
function stem() {
    include "dbconn.php";
    $stmt = $pdo->prepare("SELECT COUNT(strand) AS numberOfStem FROM students WHERE strand = 'STEM'");
    $stmt->execute();
    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // Echo the result
    return $result['numberOfStem'];
}

function stemPercent(){
    return (stem() / total()) * 100;
}

// Counts the total number of ABM students enrolled
function abm() {
    include "dbconn.php";
    $stmt = $pdo->prepare("SELECT COUNT(strand) AS numberOfAbm FROM students WHERE strand = 'ABM'");
    $stmt->execute();
    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // Echo the result
    return $result['numberOfAbm'];
}

function abmPercent(){
    return (abm() / total()) * 100;
}

// Counts the total number of GAS students enrolled
function gas() {
    include "dbconn.php";
    $stmt = $pdo->prepare("SELECT COUNT(strand) AS numberOfGas FROM students WHERE strand = 'GAS'");
    $stmt->execute();
    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // Echo the result
    return $result['numberOfGas'];
}

function gasPercent(){
    return (gas() / total()) * 100;
}

// Counts the total number of HE students enrolled
function he() {
    include "dbconn.php";
    $stmt = $pdo->prepare("SELECT COUNT(strand) AS numberOfHe FROM students WHERE strand = 'HE'");
    $stmt->execute();
    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // Echo the result
    return $result['numberOfHe'];
}

function hePercent(){
    return (he() / total()) * 100;
}

// Counts the total number of ICT students enrolled
function ict() {
    include "dbconn.php";
    $stmt = $pdo->prepare("SELECT COUNT(strand) AS numberOfIct FROM students WHERE strand = 'ICT'");
    $stmt->execute();
    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // Echo the result
    return $result['numberOfIct'];
}

function ictPercent(){
    return (ict() / total()) * 100;
}



?>