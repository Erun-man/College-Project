<?php 
	session_start()
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

$_SESSION['userup'] = $_POST['username2'];
$full_name2 = mysqli_real_escape_string($conn, $_POST['full_name2']);
$username2 = mysqli_real_escape_string($conn, $_POST['username2']);
$email2 = mysqli_real_escape_string($conn, $_POST['email2']);
$password2 = mysqli_real_escape_string($conn, $_POST['password2']);

// $sql= "INSERT INTO `user_table` (`UserFullName`, `Username`, `UserEmail`, `UserPass`) VALUES ('$full_name2', '$username2', '$email2', '$password2') ";

$sql = "INSERT INTO `users_table` (`UserID`, `UserEmail`, `Username`, `UserPass`, `UserAccess`, `UserFullName`) VALUES (NULL, '$email2', '$username2', '$password2', 'admin', '$full_name2')";

if ($conn->query($sql) === TRUE) {
	$msg= "Account has been created Sign in now!";
header('Location:signin_signup.php?msg='.$msg.'');

}
else

{
	echo "Error". $sql . "<br/>" . $conn->error;

}
$conn->close();

?>