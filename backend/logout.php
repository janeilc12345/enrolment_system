<?php
include('login_user_function.php');

// Call the logoutUser function
logoutUser();

// Redirect to the login page or any other desired page after logout
header("Location: ../index.html");
exit();

?>