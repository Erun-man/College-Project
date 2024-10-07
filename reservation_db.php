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
		
		$_SESSION['key_email'] = $_POST['email1'];
		$_SESSION['fname1'] = $_POST['fname1'];
		$_SESSION['lname1'] = $_POST['lname1'];
		$_SESSION['email1'] = $_POST['email1'];
		$_SESSION['phone1'] = $_POST['phone1'];
		$_SESSION['bed1'] = $_POST['bed1'];
		$_SESSION['cin1'] = $_POST['cin1'];
		$_SESSION['cout1'] = $_POST['cout1'];

		$fname = mysqli_real_escape_string($conn, $_POST['fname1']);
		$lname = mysqli_real_escape_string($conn, $_POST['lname1']);
		$email = mysqli_real_escape_string($conn, $_POST['email1']);
		$phone = mysqli_real_escape_string($conn, $_POST['phone1']);
		$bed = mysqli_real_escape_string($conn, $_POST['bed1']);
		$cin= mysqli_real_escape_string($conn, $_POST['cin1']);
		$cout = mysqli_real_escape_string($conn, $_POST['cout1']);
		$username = $_SESSION['username1'];
		
		$sql= "INSERT INTO `reservation` (`id`, `first_name`, `last_name`, `email`, `phone`, `bed_type`, `cin`, `cout`, `Username`, `status`) VALUES (NULL, '$fname', '$lname', '$email', '$phone', '$bed', '$cin', '$cout', '$username', 'incoming')";
		if ($conn->query($sql) === TRUE) {
					$msg= "SUCCESSFULL!";
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
	
						$msg = 'Reservation has been sent!';
						header('Location:client_page.php?msg='.$msg.'');
						
						
						
							

					}

			}
			else

			{
				echo "Error". $sql . "<br/>" . $conn->error;

			}
			$conn->close();

?>
