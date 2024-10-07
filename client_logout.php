<?php 
	session_start();
	session_destroy();
	header('Location: /hrs/signin_signup.php');
 ?>