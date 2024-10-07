<?php 
	session_start();
 ?>
<?php
		$server= "localhost";
		$user = "root";
		$pass = "";
		$dbname = "hrs";

		$conn = new mysqli($server,$user,$pass, $dbname);

		if ($conn->connect_error) {
			die("Connection failed:" . $conn->connect_error);
		}
		$_SESSION['update_key'] = $_POST['emailup'];
		$update_key = $_SESSION['update_key'] = $_POST['emailup'];
		$fname = mysqli_real_escape_string($conn, $_POST['fnameup']);
		$lname = mysqli_real_escape_string($conn, $_POST['lnameup']);
		$email = mysqli_real_escape_string($conn, $_POST['emailup']);
		$phone = mysqli_real_escape_string($conn, $_POST['phoneup']);
		$bed = mysqli_real_escape_string($conn, $_POST['bedup']);
		$cin= mysqli_real_escape_string($conn, $_POST['cinup']);
		$cout = mysqli_real_escape_string($conn, $_POST['coutup']);
		
		$sql= "INSERT INTO `reservation` (`id`, `first_name`, `last_name`, `email`, `phone`, `bed_type`, `cin`, `cout`) VALUES (NULL, '$fname', '$lname', '$email', '$phone', '$bed', '$cin', '$cout')";
		if ($conn->query($sql) === TRUE) {
					$msg= "Data saved!";
			// header('Location:home.php?msg='.$msg.'');
					$sqlGetPayment = "SELECT `cin`, `cout`, `bed_type` FROM `reservation` WHERE `email` = '$email'";
					$result = $conn->query($sqlGetPayment);
				
					if ($row = $result->fetch_assoc()) 
					{
						if ($row['bed_type'] == "Single") 
						{
							$sample = ((strtotime($row['cout']) - strtotime($row['cin']))/86400) * 399;
							$days = ((strtotime($row['cout']) - strtotime($row['cin']))/86400);
							
						}
						else if ($row['bed_type'] == "Double")
						{
							$sample = ((strtotime($row['cout']) - strtotime($row['cin']))/86400) * 599;
							$days = ((strtotime($row['cout']) - strtotime($row['cin']))/86400);
						}
						else if ($row['bed_type'] == "Twin")
						 {
							$sample = ((strtotime($row['cout']) - strtotime($row['cin']))/86400) * 799;
							$days = ((strtotime($row['cout']) - strtotime($row['cin']))/86400);
						}
						else if ($row['bed_type'] == "Deluxe") 
						{
							$sample = ((strtotime($row['cout']) - strtotime($row['cin']))/86400) * 1999;
							$days = ((strtotime($row['cout']) - strtotime($row['cin']))/86400);
						}
						
						$sqlUpdate = "UPDATE `reservation` SET Payment = '$sample' WHERE email = '$email'";
						$sqlDate = "UPDATE `reservation` SET Number_of_days = '$days' WHERE email = '$email'";
						$resultUpdate = $conn->query($sqlDate); 
						$resultUpdate = $conn->query($sqlUpdate); 
	
						header('Location:client_page.php?msg='.$msg.'');
						
						
						
							

					}

			}
			else

			{
				echo "Error". $sql . "<br/>" . $conn->error;

			}
			$conn->close();

?>
