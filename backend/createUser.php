<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure that the form is submitted using POST method

    // Get user input from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = 2;
    // 1 admin
    // 2 student
    // Call the createUser function
    createUser($role, $email, $password, $confirm_password);
}

function createUser($role, $email, $password, $confirm_password) {
    include "dbconn.php";

    if(!emailValidation($email) && !confirmPassword($password, $confirm_password)){
        header("Location: ../register.php?email=notvalid&password=notmatch");

    }elseif(!emailValidation($email)){
        header("Location: ../register.php?email=notvalid");

    }elseif(!confirmPassword($password, $confirm_password)){
        header("Location: ../register.php?password=notmatch");

    }else{
        // Use prepared statements to prevent SQL injection
        $stmt = $pdo->prepare("INSERT INTO users (role, email, password) 
                                        VALUES (:role, :email, :password)");
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        
        // Hash the password using bcrypt
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $hashedPassword);


        // Execute the statement
        try {
            $stmt->execute();
            header("Location: ../login.php");
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }

        // Close the database connection
        $pdo = null;
    }
}

function confirmPassword($password, $confirm_password){
    if($password === $confirm_password){
        return true;
    }
}

function emailValidation($email) {
    // Check if the email ends with "@gmail.com"
    $pattern = '/@gmail\.com$/i'; // Using case-insensitive pattern
    if (preg_match($pattern, $email)) {
        return true;
    } else {
        return false;
    }
}
?>
