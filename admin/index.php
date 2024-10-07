<?php 
	session_start();

	if (isset($_SESSION['admin']))
	 {
		header('Location: /hrs/admin/admin.php');

	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Area | Login</title>
	<link rel="shortcut icon" href="image/admin_icon1.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<div class="loginBox">
		<img src="image/user.png" id="icon" class="user">
		<font face="century gothic"><h2 >Admin Login</h2>
			
		<form action="login_db.php" method="POST">
			
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="login" value="Login">
			<font face="century gothic"><p style="color: #d04152">
				<?php 
				if (isset($_GET['msg'])) 
				{
					echo $_GET['msg'];
				}
				 ?>	 	
			 </p></font>

		</form>
		</font>
	</div>
</body>
</html>