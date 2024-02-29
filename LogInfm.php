<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
        $email = htmlspecialchars($_POST["email"]);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Valid Email format";
        } else {
            echo "Invalid Email format";
            die();
        }
    }

    if (isset($_POST["password"])) {
        $password = htmlspecialchars($_POST["password"]);
    }

    echo $email;
    echo $password;


require_once 'db.php';



// Assuming you have a table named 'users' with columns 'email' and 'password'
$email = $_POST['email']; // Assuming the email is sent via POST
$password = $_POST['password']; // Assuming the password is sent via POST

// Validate input (you should perform more thorough validation in a real-world scenario)
if (empty($email) || empty($password)) {
    die("Email and password are required");
}



// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("SELECT email, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    // User with the provided email exists
    $stmt->bind_result($dbEmail, $dbPassword);
    $stmt->fetch();

    // Verify the password using password_verify
    if (password_verify($password, $dbPassword)) {
        // Password is correct
        echo "Login successful. Welcome, " . $dbEmail;
    } else {
        // Password is incorrect
        echo "Incorrect password";
    }
} else {
    // User with the provided email does not exist
    echo "User not found";
}

$stmt->close();
$conn->close();


    

}
else{
    header("Location: ../login.html");
}