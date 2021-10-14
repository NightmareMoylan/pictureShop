<!DOCTYPE html>
<head>
	<Title>Photos of me</Title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="logins">
		<a href="loginPage.html"><button type="button" class="button" id="loginButton">Login</button></a> or <a href="signUpPage.html"><button type="button" class="button" id="signUpButton">Sign Up</button></a>
	</div> <!-- logins -->
	<div class="pageTitle">
		<h1>Photos of me</h1>
	</div>
	<?php include_once 'subPages/sidenav.php'; ?>
	<div class="ads">
		<div id="burgandyHills">
			<img width=136 height=291 src="mePhotos/burgandyHills.png">
			<h5>"Burgandy Hills"</h5>
			<h6>From £5.99</h6>
			<button class="button">Buy</button>
		</div>
		<div id="armed">
			<img width=160 height=291 src="mePhotos/armed.jpg">
			<h5>"Armed"</h5>
			<h6>From £7.99</h6>
			<button class="button">Buy</button>
		</div>
		<div id="couchSprawl">
			<img width=136 height=291 src="mePhotos/youngCouchSprawled.jpg">
			<h5>"Couch Sprawl"</h5>
			<h6>From £5.99</h6>
			<button class="button">Buy</button>
		</div>
	</div>
</body>