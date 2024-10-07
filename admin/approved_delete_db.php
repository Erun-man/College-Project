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
   $emaildel1 = $_SESSION['emaildel'];
$sql = "DELETE FROM `approved_client` WHERE `email` = '$emaildel1'";
if ($conn->query($sql) === TRUE) {

    $msg = 'Appointment Deleted!';
		header('Location:approved_client1.php?msg='.$msg.'');
} else {
	  $msg = 'Cant delete appointment!';

    header('Location:approved_client1.php?msg='.$msg.'');
}

$conn->close();
?>