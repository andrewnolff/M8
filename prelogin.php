<?php include 'includes/header-links.php'; ?>

<section class="initial-sec">
    <div class="initial-row">
        <div class="leftCol">
            <a class="logo" href="">
                <img src="assets/images/logo-2.png" alt="">
            </a>
        </div>
        <div class="rightCol xy-center p-3 relClass">
            <form class="loginForm">
                <h1 class="loginHeading pb-2">Login</h1>
                <!--<p class="semiBold mb-2">Login</p>-->
                <div class="form-group mb-3">
                    <a href="login.php" class="cta cta_emailbtn" type="button"> <img src="assets/images/envelope.png" alt=""> Login with Phone/Email</a>
                </div>
                <div class="form-group mb-3">
                    <a href="loginwithphone.php" class="cta cta_facebookbtn" type="button"><img src="assets/images/facebook.png" alt=""> Login with Facebook</a>
                </div>
                <div class="form-group mb-3">
                    <a href="loginwithphone.php" class="cta cta_gmailbtn" type="button"><img src="assets/images/google.png" alt=""> Login with Gmail</a>
                </div>
                <div class="form-group mb-3">
                    <a href="loginwithphone.php" class="cta cta_applebtn" type="button"><img src="assets/images/apple.png" alt=""> Login with Apple</a>
                </div>
            </form>
            <p class="resendBtn preloginresend">Don't have an account? <a href="signup.php">Sign-up</a></p>
            <p class="resendBtn">By Signing-in, You agree to our <br> <a href="terms-and-condition.php">Terms & Conditions</a> & <a href="privacy-policy.php">Privacy Policy</a> </p>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>