<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrs";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
							$fnameap1 = $_SESSION['fname'];
                            $lnameap1 = $_SESSION['lname'];
                            $emaildel1 = $_SESSION['emaildel'];
                            $numap1 = $_SESSION['num'];
                            $bedap1 = $_SESSION['bed'];
                            $checkinap1 = $_SESSION['checkin'];
                            $checkoutap1 = $_SESSION['checkout'];
                            $numdaysap1 = $_SESSION['numdays'];
                            $payap1 = $_SESSION['pay'];
$sql = "INSERT INTO `approved_client` (`id`, `first_name`, `last_name`, `email`, `phome`, `bed_type`, `cin`, `cout`, `Payment`, `Number_of_days`) VALUES (NULL, '$fnameap1', '$lnameap1', '$emaildel1', '$numap1', '$bedap1', '$checkinap1', '$checkoutap1', '$payap1', '$numdaysap1')";
if ($conn->query($sql) === TRUE) {

    $msg = 'Appointment Deleted!';
		header('Location:clients_information.php?msg='.$msg.'');
} else {
	  $msg = 'Cant delete appointment!';

    header('Location:clients_information.php?msg='.$msg.'');
}

$conn->close();
?>