<!DOCTYPE HTML>
<head>
	<title>Sign Up to Photos</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginPageLogins">
		<a href="loginPage.html"><button type="button" class="button" id="signUpButton">Login</button></a>
	</div>
	<h1 class="loginsPageTitle">Sign Up</h1>
	<div class="sidenav">
		<ul>
			<li><a href=Index.html>Home</a></li>
			<li><a href=photosOfMe.html>Photos of me</a></li>
			<li><a href=photosOfMallory.html>Photos of Mallory</a></li>
			<li><a href=photosOfDad.html>Photos of Dad</a></li>
			<li><a href=viewAllFrames.html>View all frames</a></li>
		</ul>
	</div><!--close sidenav-->
	<div class="loginBox">
		<h2>Please enter your details</h2>
		<form class="signUpForm">
			<h4>First Name</h4>
			<input type="text" name="usernameBox" label="Username">
			<h4>Last Name</h4>
			<input type="text" name="passwordBox" label="Password">
			<h4>Email</h4>
			<input type="text" name="emailBox" label="Email">
			<h4>Create Password</h4>
			<input type="text" name="createPasswordBox" label="Password">
			<h4>Retype Password</h4>
			<input type="text" name="retypePasswordBox" label="Password">
			<br><br>
			<input type="checkbox" id="tacBox" name="tacBox">
			<h4 id="tcStatement">I agree to the Terms and Conditions.</h4>
			<button id="submitButton" class="buttonOnBrown">Submit</button>
		</form>
	</div><!--close ads-->
	<script type="text/javascript" src="function.js"></script>
</body>