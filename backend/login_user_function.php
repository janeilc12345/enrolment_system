<?php

// Function to verify user credentials
function verifyUser($email, $password) {
    include "dbconn.php";

    // Use prepared statements to prevent SQL injection
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    // Fetch the user record
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verify password
    if ($user && password_verify($password, $user['password'])) {
        session_start();
        $_SESSION['role'] = $user['role'];
        return true; // Login successful
    } else {
        return false; // Invalid credentials
    }
}

// Function to start a session for the user
function loginUser($email) {
    include "dbconn.php";
    session_start();
    $_SESSION['email'] = $email;
}

// Function to check if a user is logged in
function isLoggedIn() {
    session_start();
    return isset($_SESSION['email']);
}

// Function to log out a user
function logoutUser() {
    session_start();
    session_destroy();
}

?>