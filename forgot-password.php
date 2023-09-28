<?php include 'includes/header-links.php';?>

<section class="initial-sec">
	<div class="initial-row">
		<div class="leftCol">
            <a class="logo" href="">
                <img src="assets/images/logo-2.png" alt="">
            </a>
		</div>
		<div class="rightCol p-3"> 
			<form class="loginForm">
				<h1 class="loginHeading">Forgot Password</h1>
                <p class="loginDesc mb-3">Enter your Email Address for verification code</p>
				<div class="form-group logInput mb-3">
					<input type="text" placeholder="Email Address / Phone Number">
					<span class="absIcon"><img src="assets/images/email.png" alt="img" class="w-100"></span>
				</div>
				<div class="form-group">
					<a href="otp.php" id="pasword" class="cta" type="button">Continue</a>
				</div>
			
			</form>
		</div>
	</div>
</section>

<?php include 'includes/footer.php';?>