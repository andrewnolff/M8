<?php include 'includes/header-links.php'; ?>

<section class="initial-sec">
    <div class="initial-row">
        <div class="leftCol">
            <a class="logo" href="">
                <img src="assets/images/logo-2.png" alt="">
            </a>
        </div>
        <div class="rightCol p-3 relClass">
            <form class="loginForm">
                <h1 class="loginHeading pb-2">OTP Verification</h1>
                <p class="loginDesc mb-3">We have sent you an email containing 6 Digits verification code. Please enter the code to verify your identity.</p>
                <div method="get" class="digit-group pb-3" data-group-name="digits" data-autosubmit="false" autocomplete="off">
                    <input class="inputItemMain" type="text" id="digit-1" name="digit-1" data-next="digit-2" maxlength="1" placeholder="-">
                    <input class="inputItemMain" type="text" id="digit-2" name="digit-2" data-next="digit-3" data-previous="digit-1" maxlength="1" placeholder="-">
                    <input class="inputItemMain" type="text" id="digit-3" name="digit-3" data-next="digit-4" data-previous="digit-2" maxlength="1" placeholder="-">
                    <input class="inputItemMain" type="text" id="digit-4" name="digit-4" data-next="digit-5" data-previous="digit-3" maxlength="1" placeholder="-">
                    <input class="inputItemMain" type="text" id="digit-5" name="digit-5" data-next="digit-6" data-previous="digit-4" maxlength="1" placeholder="-">
                </div>
                <div class="form-group">
                    <a href="reset-password.php" class="cta" type="button">Verify</a>
                </div>
                <div class="item">
                    <h2>00:<span>00</span></h2>
                    <svg width="160" height="160" xmlns="http://www.w3.org/2000/svg">
                        <circle id="circle" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="4" stroke="#191919" fill="none" />
                    </svg>
                </div>

                <p class="resendBtn">Code didn't received? <a href="#!">Resend</a></p>
            </form>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>