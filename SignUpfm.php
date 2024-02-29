a<?php
require(connection.php);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables with default empty values
    $FirstName = $SecondName = $PhoneNumb = $IdNumb = $Email = $password = "";

    // Check if the form fields are set in the $_POST array before accessing them
    if (isset($_POST["firstName"])) {
        $FirstName = htmlspecialchars($_POST["firstName"]);
    }

    if (isset($_POST["secName"])) {
        $SecondName = htmlspecialchars($_POST["secName"]);
    }

    if (isset($_POST["phoneNumb"])) {
        $PhoneNumb = htmlspecialchars($_POST["phoneNumb"]);
    }

    if (isset($_POST["IdNumb"])) {
        $IdNumb = htmlspecialchars($_POST["IdNumb"]);
    }

    if (isset($_POST["email"])) {
        $Email = htmlspecialchars($_POST["email"]);
    }

    if (isset($_POST["password"])) {
        $password = htmlspecialchars($_POST["password"]);
    }

    // Check if any of the required fields are empty
    if (empty($FirstName) || empty($SecondName) || empty($PhoneNumb) || empty($IdNumb) || empty($Email) || empty($password)) {
        header("Location: ../signin.html");
        exit();
    } if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid Email Address.</p>";
        header("Location: ../signin.html");
        exit();
    }
    if (!preg_match('/^[0-9]{10}$/', $PhoneNumb)) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Invalid Phone Number.</p>";
        header("Location: ../signin.html");
        exit();
    }
    else {
        // Process the data if all required fields are present

    }
    $stmt = mysqli_prepare($con, "SELECT * FROM customer WHERE email = ? OR password = ?");
    mysqli_stmt_bind_param($stmt, "ss", $email, $staff_no);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Email or Staff Number already Exists.</p>";
        header("Location: ../signin.html");
        exit();
    }

    $stmt = mysqli_prepare($con, "INSERT INTO customers( FirstName ,SecondName ,PhoneNumb,IdNumb,Email,password) VALUES (?, ?, ?, ?, ?,?)");
    mysqli_stmt_bind_param($stmt, "ssssss",  $FirstName,$SecondName,$PhoneNumb,$IdNumb,$Email,$password);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $_SESSION['status'] = "<p style="."color:green;"."text-align:center".">Registered Successfully</p>";
        header("Location: ../signin.html");
        exit();
    } else {
        $_SESSION['status'] = "<p style="."color:red;"."text-align:center".">Registration Failed</p>";
        header("Location: ../signin.html");
        exit();
    }


}
else{
    header("Location: ../signin.html");
}
?>