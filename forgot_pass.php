<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $otp = $_POST['otp'];
    $n = $_SESSION['$n'];

    if ($otp == $n) {
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Check for both 'email' and 'password' before attempting to update
            if (!empty($email) && !empty($password)) {
                $pass = md5($password);
                $user_login = mysqli_query($conn, "UPDATE user_info SET user_password = '$pass' WHERE email = '$email'");
                
                // Check if the update was successful
                if ($user_login) {
                    echo "Password updated successfully!";
                } else {
                    echo "Password update failed: " . mysqli_error($conn);
                }
            } else {
                echo "Email and password must be provided.";
            }
        } else {
            echo "Email and/or password not provided.";
        }
    } else {
        echo "Invalid OTP.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Password</title>
</head>
<body>
    <h1>Update Password</h1>
    <form method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" required>
        <br>
        <label for="password">New Password:</label>
        <input type="password" name="password" required>
        <br>
        <label for="otp">OTP:</label>
        <input type="text" name="otp" required>
        <br>
        <input type="submit" value="Update Password">
    </form>
</body>
<style>
        /* styles.css */
.main-content {
    background-image: url('restrrr.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Optional */
}

    </style>
</html>

