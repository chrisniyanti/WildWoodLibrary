<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sign in</title><link rel="shortcut icon" href="img/logo.png">
		<link rel="stylesheet" type="text/css" href="css/login.css">

	</head>
	
	<body>
		<div class="wrapper fadeInDown">
  			<div id="formContent">
			    <h2 class="active"> Sign In </h2>
			    	<div class="fadeIn first">
			      		<img src="img/logo.png" id="icon" alt="User Icon" />
			    	</div>
				    <form action="login.php" method="POST">
					      <input type="text" class="fadeIn second" name="username" placeholder="username" required>
					      <input type="password" class="fadeIn third" name="passwords" placeholder="passwords" required>
					      <input type="submit" class="fadeIn fourth" name="" value="Log In">
				    </form>
				    <form action="register.php" method="POST">
					       <div id="formFooter">
				      	<a class="underlineHover" href="register.php">Registration?</a>
				    </div>
				    </form>
				   
			 </div>
		</div>	
	</body>
</html>




   