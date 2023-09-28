<?php include 'includes/header-links.php';?>

<section class="initial-sec">
	<div class="initial-row">
		<div class="leftCol">
			<a href="index.php">
				<img src="assets/images/logo-2.png" alt="">
			</a>
		</div>
		<div class="rightCol p-3">
			<form class="loginForm">
				<h1 class="loginHeading">Sign-up</h1>
				<div class="form-group logInput mb-3">
					<input type="text" placeholder="Email Address / Phone Number">
					<span class="absIcon"><img src="assets/images/email.png" alt="img" class="w-100"></span>
				</div>
                <div class="form-group logInput mb-3">
					<input type="password" placeholder="Password">
					<span class="absIcon"><img src="assets/images/password.png" alt="img" class="w-100"></span>
					<span class="absIcon_2"><img src="assets/images/eye.png" alt="img" class="w-100"></span>
				</div>
				<div class="form-group logInput mb-3">
					<input type="password" placeholder="Re-enter Password">
					<span class="absIcon"><img src="assets/images/password.png" alt="img" class="w-100"></span>
					<span class="absIcon_2"><img src="assets/images/eye.png" alt="img" class="w-100"></span>
				</div>
				<div class="form-group">
					<a href="createprofile-basic.php" class="cta mb-4" type="button">Signup</a>	
				</div>
				
			</form>
		</div>
	</div>
</section>

<?php include 'includes/footer.php';?>