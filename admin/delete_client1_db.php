
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
  $id = $_GET['delete'];

$sql = "DELETE FROM `reservation` WHERE `id` = '$id'";
if ($conn->query($sql) === TRUE) {

    $msg = 'Appointment Deleted!';
		header('Location:clients_information.php?msg='.$msg.'');
} else {
	  $msg = 'Cant delete appointment!';

    header('Location:clients_information.php?msg='.$msg.'');
}

$conn->close();
?>