<?php

$delete = "";
if(isset($_REQUEST['id'])) :
$delete = $_REQUEST['id'];
endif;
echo $delete;

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hrs";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$_SESSION['username1'];
$key = $_SESSION['username1'];
$sql = "DELETE FROM reservation WHERE `id` = '$delete'";
if ($conn->query($sql) === TRUE) {

    $msg = 'Appointment deleted succesfully!';
		header('Location:my_account.php?msg='.$msg.'');
} else {
	  $msg = 'Cant delete appointment!';

    header('Location:my_account.php?msg='.$msg.'');
}

$conn->close();
?>