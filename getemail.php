<?php 
session_start();
 ?>
<!---form section start--->
<!---form area start--->
<section class="main-content">
    <div class="form-area flex align-items-center justify-content-center">
        <form action="sendmail.php" method="POST">
            <h2 class="title">Generate OTP</h2>
            <div class="input-box">
                <label for="email_address">Enter e-mail address <span>*</span></label>
                <input type="email" name="user-email" id="email_address" placeholder="Enter your e-mail"
                        style="width: 100%" required />
            </div>
                <input class="primary_btn" type="submit" value="Send OTP" />
                <button class="primary_btn" type="reset">&circlearrowright;</button>
            </div>
        </form>
        <style>
        /* styles.css */
.main-content {
    background-image: url('restrrr.png');
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed; /* Optional */
}

    </style>
    </div>
</section>

<!---form area end--->
<!---form section end--->
<?php include('footer.php') ?>