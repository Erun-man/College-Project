<?php 
	session_start();
	   $keyemail = $_SESSION['username1'];
	   
		$server= "localhost";
		$user = "root";
		$pass = "";
		$dbname = "hrs";

		$conn = new mysqli($server,$user,$pass, $dbname);

		if ($conn->connect_error) {
			die("Connection failed:" . $conn->connect_error);
		}
		if (isset($_POST['done'])) 
		{
			$email = $_SESSION['username1'];
			$uid = $_POST['uid'];
			$editfname = $_POST['editfname'];
			$editlname = $_POST['editlname'];
			$editphone = $_POST['editphone'];
			$editbed = $_POST['editbed'];
			$editcin = $_POST['editcin'];
			$editcout = $_POST['editcout'];
			

					
			$sample = 0;
			$days = 0;

			if ($editbed == "Single") 
			{
				$sample = ((strtotime($editcout) - strtotime($editcin))/86400) * 399;
				$days = ((strtotime($editcout) - strtotime($editcin))/86400);
			}
			else if ($editbed == "Double")
			{
				$sample = ((strtotime($editcout) - strtotime($editcin))/86400) * 599;
				$days = ((strtotime($editcout) - strtotime($editcin))/86400);
			}
			else if ($editbed == "Twin")
			 {
				$sample = ((strtotime($editcout) - strtotime($editcin))/86400) * 799;
				$days = ((strtotime($editcout) - strtotime($editcin))/86400);
			}
			else if ($editbed == "Deluxe") 
			{
				$sample = ((strtotime($editcout) - strtotime($editcin))/86400) * 1999;
				$days = ((strtotime($editcout) - strtotime($editcin))/86400);
			} 
			

			$sql = "UPDATE `reservation` SET `first_name` = '$editfname', `last_name` = '$editlname', `phone` = '$editphone', `bed_type` = '$editbed', `cin` = '$editcin', `cout` = '$editcout', `Number_of_days` = '$days', `Payment` = '$sample' WHERE `reservation`.`id` = '$uid'";
			$updateResult = $conn->query($sql);
	 		$msg = 'Appointment updated succesfully!';
			header('Location:my_account.php?msg='.$msg.'');
						
						
							

					

			}
			
		
			

?>
