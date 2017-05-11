<?php
	include('login.php'); // Memasuk-kan skrip Login 
 
if(isset($_SESSION['login_user'])){
header("location: ../menu.php");
}
?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Log in ACC</title>
        <link rel="stylesheet" href="../css/style.css">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" action="" method="post">
			<input id="name" name="username" placeholder="username" type="text">
			<input id="password" name="password" placeholder="password" type="password">
			<button type="submit" name="submit" id="login-button" value="Login">Login</button>
			<p><a href="register.php">you have account,Sign Up</a></p>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>
