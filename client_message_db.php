<?php
$server= "localhost";
$user = "root";
$pass = "";
$dbname = "hrs";

$conn = new mysqli($server,$user,$pass, $dbname);

if ($conn->connect_error) {
	die("Connection failed:" . $conn->connect_error);
}
$email_msg = mysqli_real_escape_string($conn, $_POST['email_msg']);
$msg = mysqli_real_escape_string($conn, $_POST['msg']);

$sql= "INSERT INTO message (email, message) VALUES ('$email_msg', '$msg')";
	if ($conn->query($sql) === TRUE) {
			$msg= "Message has been sent!";
			header('Location:client_message.php?msg='.$msg.'');

			}
			else

			{
				echo "Error". $sql . "<br/>" . $conn->error;

			}
			$conn->close();
?>