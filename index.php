<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign in</title><link rel="shortcut icon" href="img/TheA.png">
		<link rel="stylesheet" type="text/css" href="css/login.css">

	</head>
	
	<body>
		<div class="wrapper fadeInDown">
  			<div id="formContent">
		     <!-- Tabs Titles -->
			    <h2 class="active"> Sign In </h2>

			    <!-- Icon -->
			    <div class="fadeIn first">
			      <img src="img/logo.png" id="icon" alt="User Icon" />
			    </div>

			    <!-- Login Form -->
			    <form action="login.php" method="POST">
			      <input type="text" class="fadeIn second" name="username" placeholder="username" required>
			      <input type="password" class="fadeIn third" name="passwords" placeholder="passwords" required>
			      <input type="submit" class="fadeIn fourth" name="" value="Log In">
			    </form>


			    <!-- Remind Passowrd -->
			    <div id="formFooter">
			      <a class="underlineHover" href="#">Forgot Password?</a>
			    </div>

			  </div>
			</div>	

	</body>
</html>




   