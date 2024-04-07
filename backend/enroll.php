<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ensure that the form is submitted using POST method

    // Get user input from the form
    $lrn = $_POST['lrn'];
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $guardian = $_POST['guardian'];
    $guardian_no = $guardian = $_POST['guardian_no'];
    $student_no = $guardian = $_POST['student_no'];
    $strand = $_POST['strand'];
    $grade = $_POST['grade'];
    
    // Call the createUser function
    createUser($lrn, $email, $firstname, $middlename, $lastname, $birthdate, $gender, $address, $strand, $grade, $guardian, $guardian_no, $student_no);
}

function createUser($lrn, $email, $firstname, $middlename, $lastname, $birthdate, $gender, $address, $strand, $grade, $guardian, $guardian_no, $student_no) {
    include "dbconn.php";
    
    // Use prepared statements to prevent SQL injection
    $stmt = $pdo->prepare("INSERT INTO students (lrn, email, firstname, middlename, lastname, birthdate, gender, address, strand, grade, guardian, guardian_no, student_no) 
                                      VALUES (:lrn, :email, :firstname, :middlename, :lastname, :birthdate, :gender, :address, :strand, :grade, :guardian, :guardian_no, :student_no)");
    $stmt->bindParam(':lrn', $lrn);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':middlename', $middlename);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':birthdate', $birthdate);
    $stmt->bindParam(':gender', $gender);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':guardian', $guardian);
    $stmt->bindParam(':guardian_no', $guardian_no);
    $stmt->bindParam(':student_no', $student_no);
    $stmt->bindParam(':strand', $strand);
    $stmt->bindParam(':grade', $grade);
    

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

?>
