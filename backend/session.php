<?php
include "login_user_function.php";
if(isLoggedIn()){
    include "dbconn.php";
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $_SESSION['email']);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if there are results
    if ($result) {
        // Output data of the user
        $_SESSION['role'] = $result["role"];
        $_SESSION['email'] = $result["email"];
    } else {
        $_SESSION['role'] = "empty";
    }
    
}else{
    header("Location: ../index.html");
}

?>