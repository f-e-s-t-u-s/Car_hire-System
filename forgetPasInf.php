<?php
// require(connection.php);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables with default empty values
    $Email = "";

    // Check if the form fields are set in the $_POST array before accessing them

    

    if (isset($_POST["email"])) {
        $Email = htmlspecialchars($_POST["email"]);
    }
    elseif (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid Email Address.</p>";
    header("Location: ../signin.html");
    exit();
    }
    else{echo $Email;}
    




} else {
    /*  
       To protect against HTTP response splitting attacks, handle the REQUEST_METHOD variable to ensure that you only accept GET requests 
       */
      header("Location: ../signin.html");
}