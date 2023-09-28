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
				<h1 class="loginHeading">Reset Password</h1>
                <p class="loginDesc mb-3">Set your New Password</p>
				<div class="form-group logInput mb-3">
					<input type="password" placeholder="New Password">
					<span class="absIcon"><img src="assets/images/password.png" alt="img" class="w-100"></span>
					<span class="absIcon_2"><img src="assets/images/eye.png" alt="img" class="w-100"></span>
				</div>
				<div class="form-group logInput mb-3">
					<input type="password" placeholder="Re-type New Password">
					<span class="absIcon"><img src="assets/images/password.png" alt="img" class="w-100"></span>
					<span class="absIcon_2"><img src="assets/images/eye.png" alt="img" class="w-100"></span>
				</div>
				<div class="form-group">
					<a href="login.php" id="pasword" class="cta" type="button">Continue</a>
				</div>
			
			</form>
		</div>
	</div>
</section>

<?php include 'includes/footer.php';?>