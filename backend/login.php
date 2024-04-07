<?php

// Include the user functions
include 'login_user_function.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include "dbconn.php";
    // Ensure that the form is submitted using POST method

    // Get user input from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verify user credentials
    if (verifyUser($email, $password)) {
        // Login successful
        loginUser($email);
        $stmt = $pdo->prepare("UPDATE users SET login_attempts = 0 WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $pdo=null;
        // // Check if "Remember Me" is checked
        // if (isset($_POST['remember'])) {
        //     // If checked, set remember me cookie
        //     setcookie('email', $email, time() + (10000), '/'); // Cookie expires in 30 days
        //     // You may also set a token or something else instead of directly setting email in the cookie for security purposes
        // }
        
        if($_SESSION['role'] == 1){
            header("Location: ../admin/index.php");
        }else{
            header("Location: ../admin/courses.php");
        }
    } else {
        // Use prepared statements to prevent SQL injection
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        // Fetch the user record
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if($user['login_attempts'] >= 2){
            header("Location: ../login.php?attempts=max");
        }else{
        $stmt = $pdo->prepare("UPDATE users SET login_attempts = login_attempts + 1 WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        // Invalid credentials
        header("Location: ../login.php?login=failed");
        $pdo=null;
        }
    }
}


?>
