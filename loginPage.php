<!DOCTYPE HTML>
<head>
	<title>Login to Photos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginPageLogins">
		<a href="signUpPage.html"><button type="button" class="button" id="signUpButton">Sign Up</button></a>
	</div>
	<h1 class="loginsPageTitle">Login</h1>
	<?php include_once 'subPages/sidenav.php'; ?>
	<div class="loginBox">
		<h2>Please enter your username and password</h2>
		<form class="loginForm">
			<h4>Username:</h4>
			<input type="text" name="usernameBox" label="Username">
			<h4>Password:</h4>
			<input type="text" name="passwordBox" label="Password">
			<br><br>
			<button id="submitButton" class="buttonOnBrown">Submit</button>
		</form>
	</div><!--close ads-->
	<script type="text/javascript" src="function.js"></script>
</body>