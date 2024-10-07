<?php
session_start();

if (mysqli_connect('localhost','root','')) {
	if (!mysqli_select_db('hrs')) {}
}

if (isset($_POST['login']))
{

	$username = $_POST['username'];
	$password = $_POST['password'];
	
}
	if (empty($username) || empty($password))
	 {
		$msg = 'Required Fields!';
		header('Location:index.php?msg='.$msg.'');
	}
	else
	{

		$server= "localhost";
		$user = "root";
		$pass = "";
		$dbname = "hrs";

		$conn = new mysqli($server,$user,$pass, $dbname);

		if ($conn->connect_error) {
			die("Connection failed:" . $conn->connect_error);
		}
		$sql = "SELECT * FROM `users_table` WHERE `username` = '$username' AND `UserPass` = '$password' AND `UserAccess` = 'admin'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			$index = 0;
			    // output data of each row
			while($row = $result->fetch_assoc()) {		    	
				$out[$index] = $row;
				$index++;
			}

			session_start();
			// error_reporting(0);
			$_SESSION['user_id'] = $out[0]["UserID"];
			$_SESSION['user_name'] = $out[0]["UserFullName"];
			$_SESSION['username1'] = $out[0]["Username"];
			$_SESSION['admin'] = "admin";
			header('Location:admin.php');	

		} else {		    
			$out[0] = "";
			$msg = "This is the count : ".$query;
			header('Location:signin_signup.php?msg='.$msg.'');
		}

	// 	$count = mysqli_num_rows($query);
	// 	if ($count == 1) 
	// 		{
	// 		session_start();
	// 		$row = mysqli_fetch_array($query);
	// 		$session_id = $row['id'];
	// 		$session_name = $row['username'];
	// 		$_SESSION['user_id'] = $session_id;
	// 		$_SESSION['user_name'] = $session_name;
	// 		$_SESSION['admin'] = "admin";

	// 		header('Location:admin.php');	

	// }
	// 	else
	// 	{
	// 		$msg = 'Login Error';
	// 		header('Location:index.php?msg='.$msg.'');
	// 	}
	}





?>	