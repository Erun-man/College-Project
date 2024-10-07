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
                     $id = $_GET['approve'];

                     $fn = $_SESSION['fn'];
                     $ln = $_SESSION['ln'];
                     $email = $_SESSION['email'];
                     $phone = $_SESSION['phone'];
                     $bt = $_SESSION['bt'];
                     $cin = $_SESSION['cin'];
                     $cout = $_SESSION['cout'];
                     $nod = $_SESSION['nod'];
                     $pay = $_SESSION['pay'];

$sql = "INSERT INTO `approved_client` (`id`, `first_name`, `last_name`, `email`, `phome`, `bed_type`, `cin`, `cout`, `Payment`, `Number_of_days`) VALUES (NULL, '$fn', '$ln', '$email', '$phone', '$bt', '$cin', '$cout', '$pay', '$nod') ";
$sql1 = "DELETE FROM `reservation` WHERE `id` = '$id'";
if ($conn->query($sql) === TRUE) {
    if ($conn->query($sql1) === TRUE)
    {
      $sql1 = "DELETE FROM `reservation` WHERE `id` = '$id'";
      $msg = 'Succesfull!';
              header('Location:clients_information.php?msg='.$msg.'');
    }
    $msg = 'Succesfull!';
              header('Location:clients_information.php?msg='.$msg.'');
} else {
         $msg = 'Error!';

    header('Location:clients_information.php?msg='.$msg.'');
}

$conn->close();
?>