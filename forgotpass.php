<?php
session_start();


$connection = mysqli_connect('localhost:3306', 'root', '', 'onlinefoodphp');
if ($connection) {
    echo "";
} else {
    die("Database Connection Failed");
}



?>
<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <!-- form section start -->
    <section class="main-content">
        <div class="form-area flex align-items-center justify-content-center">
            <form action="forgot_pass.php" method="POST">
                <h2 class="title">Reset Password</h2>
                <div class="input-box">
                    <label for="email_address">Enter OTP (Check Your Mail Box)<span>*</span></label>
                    <input type="number" name="otp" id="otp" placeholder="Enter your OTP" style="width: 100%" required />
                </div>
                <div class="input-box">
                    <label for="email_address">Enter e-mail address <span>*</span></label>
                    <input type="email" name="user-email" id="email_address" placeholder="Enter your e-mail" style="width: 100%" required />
                </div>
                <div class="input-box">
                    <label for="password">Enter New Password <span>*</span></label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" style="width: 100%" required />
                </div>
                <div class="input-box">
                    <label for="cpassword">Confirm Your password <span>*</span></label>
                    <input name="cuser-password" type="password" placeholder="New password" id="cpassword" style="width: 100%" required />
                </div>
                <div class="flex justify-content-space-between">
                    <input class="primary_btn" type="submit" value="Reset" />
                    <button class="primary_btn" type="reset">&circlearrowright;</button>
                </div>
            </form>
        </div>
    </section>
    <!-- form section end -->
    <?php include('footer.php') ?>

    <style>
        /* styles.css */
.main-content {
    background-image: url('restrrr.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Optional */
}

    </style>
</body>
</html>
