<!DOCTYPE html>
<html>

<head>
	<!-- META TAGS-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="noindex" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
	<!-- META TAGS-->
	<title>Andrew Web App</title>
	<link rel="icon" href="assets/images/favicon.png" />
	<!-- BOOTSTRAP 5 -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!-- BOOTSTRAP 5 -->
	<!-- SELECT2 CSS -->
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<!-- SELECT2 CSS -->
	<!-- RESPONSIVE NAVIFATION -->
	<link rel="stylesheet" href="assets/css/stellarnav.min.css" />
	<!-- RESPONSIVE NAVIFATION -->
	<!-- SWIPER SLIDER -->
	<link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
	<!-- SWIPER SLIDER -->
	<!-- GOOGLE FONTS -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- GOOGLE FONTS -->
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="assets/css/font-awesome-all.min.css" />
	<!-- FONT AWESOME -->
	<!-- STYLE SHEETS -->
	<link rel="stylesheet" href="assets/css/style.css" />
	<link rel="stylesheet" href="assets/css/responsive.css" />
	<!-- STYLE SHEETS -->
</head>

<body>

	<header class="mainHeader">
		<div class="container-fluid">
			<div class="headerSection d_flexSpacebetween">
				<div class="logoSect">
					<a href="index.php">
						<img src="assets/images/logo.png" alt="" style="width:50px;">
					</a>
				</div>
				<a href="javascript:void(0)" class="menutoggle"><img src="assets/images/menu_bar.png" alt=""></a>
				<div class="nav_links">
					<div class="mobile_searchfield">
						<div class="search_Sect">
							<a href="jaavscript:void(0)" class="search" data-bs-toggle="modal" data-bs-target="#searchfilterModal">
								<img src="assets/images/search_icon.png" alt="">
							</a>
						</div>
						<div class="notifiaction_sect">
							<a href="javascript:void(0)" class="notification" data-bs-toggle="modal" data-bs-target="#notifiactionModal">
								<img src="assets/images/notification_icon.png" alt="">
							</a>
						</div>
					</div>
					<div class="userProfile_sect mobile_userview">
						<a class="user_dropDown d_flexSpacebetween">
							<span class="user_img">
								<img src="assets/images/user_img.png" alt="">
							</span>
							<span class="user_detail">
								<p class="name">John Smith</p>
								<p class="email">john.smith@domain.com</p>
							</span>
							<span class="dropDown_icon">
								<img src="assets/images/drop_down.png" alt="">
							</span>
						</a>
						<div class="profile_login_detail">
							<ul>
								<li class="account_detailList">
									<a href="request-profile.php"><img src="assets/images/user_icon.png" alt=""> My Profile</a>
								</li>
								<li class="account_detailList">
									<a href="chat-friends-screen.php"><img src="assets/images/friends.png" alt=""> My Friends</a>
								</li>
								<li class="account_detailList">
									<a href="settings.php"><img src="assets/images/help-button.png" alt=""> Help</a>
								</li>
								<li class="account_detailList">
									<a href="prelogin.php"><img src="assets/images/logout.png" alt=""> Logout</a>
								</li>
							</ul>
						</div>
					</div>
					<ul class="d_flexCenterGap">
						<li>
							<a href="chat.php">M8s</a>
						</li>
						<li>
							<a href="events.php">D8s</a>
						</li>
						<li>
							<a href="index.php">Explore</a>
						</li>
						<li>
							<a href="request-profile.php">Profile</a>
						</li>
						<a href="javascript:void(0)" class="menuclose"><img src="assets/images/close.png" alt=""></a>
					</ul>
				</div>
				<div class="profile_notification d_flexCenterGap">
					<div class="search_Sect desktop_search">
						<a href="jaavscript:void(0)" class="search" data-bs-toggle="modal" data-bs-target="#searchfilterModal">
							<img src="assets/images/search_icon.png" alt="">
						</a>
					</div>
					<div class="notifiaction_sect desktop_notif">
						<a href="javascript:void(0)" class="notification" data-bs-toggle="modal" data-bs-target="#notifiactionModal">
							<img src="assets/images/notification_icon.png" alt="">
						</a>
					</div>
					<div class="userProfile_sect desktop_userview">
						<a class="user_dropDown d_flexSpacebetween">
							<span class="user_img">
								<img src="assets/images/user_img.png" alt="">
							</span>
							<span class="user_detail">
								<p class="name">John Smith</p>
								<p class="email">john.smith@domain.com</p>
							</span>
							<span class="dropDown_icon">
								<img src="assets/images/drop_down.png" alt="">
							</span>
						</a>
						<div class="profile_login_detail">
							<ul>
								<li class="account_detailList">
									<a href="request-profile.php"><img src="assets/images/user_icon.png" alt=""> My Profile</a>
								</li>
								<li class="account_detailList">
									<a href="chat-friends-screen.php"><img src="assets/images/friends.png" alt=""> My Friends</a>
								</li>
								<li class="account_detailList">
									<a href="settings.php"><img src="assets/images/help-button.png" alt=""> Help</a>
								</li>
								<li class="account_detailList">
									<a href="prelogin.php"><img src="assets/images/logout.png" alt=""> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</header>