<?php 
	session_start();

if (isset($_POST['login']))
{
	$username = $_POST['user_login1'];
	$password = $_POST['password_login1'];
}
	if (empty($username) || empty($password))
	 {
		$msg = 'Required Fields!';
		header('Location:signin_signup.php?msg='.$msg.'');
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

		$result = $conn->query("SELECT * FROM `users_table` WHERE `UserEmail` = '$username' AND `UserPass` = '$password'");
		// $count = mysqli_num_rows($query);

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
			header('Location:client_page.php');	

		} else {		    
			$out[0] = "";
			$msg = "Incorrect username or password".$query;
			header('Location:signin_signup.php?msg='.$msg.'');
		}
		
	
	}


?>	