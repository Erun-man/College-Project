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
                            
                          $fnameap1 = $_SESSION['fnamedel'];
                          $lnameap1 = $_SESSION['lnamedel'];
                          $emaildel1 = $_SESSION['emaildel'];
                          $numap1 = $_SESSION['numdel'];
                          $bedap1 = $_SESSION['beddel'];
                          $checkinap1 = $_SESSION['checkindel'];
                          $checkoutap1 = $_SESSION['checkoutdel'];
                          $numdaysap1 = $_SESSION['numdaysdel'];
                          $payap1 = $_SESSION['paydel'];

$sql = "UPDATE `reservation` SET `status` = 'checkout' WHERE `reservation`.`email` = '$emaildel1' AND `status` = 'approved'";
if ($conn->query($sql) === TRUE) {
    $msg = 'Succesfull!';
              header('Location:clients_information.php?msg='.$msg.'');
} else {
         $msg = 'Error!';

    header('Location:clients_information.php?msg='.$msg.'');
}

$conn->close();
?>