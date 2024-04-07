<?php

include "dbconn.php";

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ($stmt->execute()) {
        header("Location: ../admin/review.php");
    } else {
        echo "Error deleting user.";
    }
} else {
    echo "Invalid user ID.";
}

?>
