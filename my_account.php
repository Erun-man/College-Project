<?php 
  session_start(); 
  if (isset($_SESSION['username1'])) {
    
  }else{
    header('Location: /hrs/home.php');
  }

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phil Oasis | Appointment</title>
      <link rel="shortcut icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles_clients.css" rel="stylesheet">
     <script src = "js/jquery.min.js"></script>
  <script src = "js/bootstrap.min.js"></script>
  </head>
  <body>
    
<font face="century gothic">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" style="color: white">Welcome, <?php echo $_SESSION['username1']; ?></a></li>
            <li><a href="client_logout.php" style="color: white">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><img src="images/user.png" style="width: 50px; height: 50px"> Phil Oasis Hotel and Restaurant <small>&nbsp;&nbsp;</small></h1>
          </div>
         
        </div>
      </div>
    </header>

   

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="admin.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Account
              </a>
              <a href="client_home.php" class="list-group-item" ><span class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Home</li></a>
              <a href="client_page.php" class="list-group-item" ><span class="fa fa-credit-card" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Reservation Section</li></a>
               <a href="my_account.php" class="list-group-item" style="background-color: #f4f4f4;"><span class="fa fa-gear" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Appointment</li></a>
            
              <a href="client_message.php" class="list-group-item"><span class="fa fa-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Write Message</a><br>
             
       

                <a href="admin.php" class="list-group-item active main-color-bg">
                <span class="fa fa-bed" aria-hidden="true"></span>&nbsp;&nbsp;Rooms Rate
              </a>
              <div class="well">
          <p>• <b>Single</b> - PHP 399.00  per day.</p>
           <p>• <b>Double</b> - PHP 599.00  per day.</p>
           <p>• <b>Twin</b> - PHP 799.00  per day.</p>
           <p>• <b>Deluxe</b> - PHP 1,999.00  per day.</p>
            </div>
            </div>


          </div>

          
          
            <div class="container-fluid">
              <div class="row">
              <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                
                <form method="POST">
                  <h3 class="panel-title fa fa-check-square-o">&nbsp;&nbsp;Reserved Room</h3>
                  
              </div><br>
               <div class="panel-body">
                  <table class="table table-striped table-hover">
                <tr>
                  
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Phone</th>
                  <th>Bed Type</th>
                  <th>Check In</th>
                  <th>Check Out</th>
                  <th>Payment</th>
                  <th>Number of Days</th>
                  <th>Status</th>
                  <th>Update</th>
                  <th>Delete</th>
                </tr>
             

                <?php

                $server= "localhost";
                $user = "root";
                $pass = "";
                $dbname = "hrs";

                $conn = new mysqli($server,$user,$pass, $dbname);

                if ($conn->connect_error) {
                  die("Connection failed:" . $conn->connect_error);
                }
                  $username = $_SESSION['username1'];
                  error_reporting(0);
                  $result = $conn->query("SELECT * FROM `reservation` WHERE `Username` = '$username'");


                  if ($result->num_rows > 0) {
                    $reservation_index = 0;
                        // output data of each row
                    while($row = $result->fetch_assoc()) {          
                      $reservation_data[$reservation_index] = $row;
                      $reservation_index++;
                    }

                  } 
                 

                  function getPayment($bed_type, $days){

                    switch ($bed_type) {
                      case 'Single':
                        $price = 399 * $days;
                        break;
                      case 'Double':
                        $price = 599 * $days;
                        break;
                      case 'Twin':
                        $price = 799 * $days;
                        break;
                      case 'Deluxe':
                        $price = 1999 * $days;
                        break;
                    }
                    return $price;
                  }
                  

                    foreach ($reservation_data as $key => $value) {
                      $getDays = (strtotime($value['cout'])-strtotime($value['cin'])) / 86400;
                      ?>
                        <tr>
                          <td><?php echo $value['first_name']; ?></td>
                          <td><?php echo $value['last_name']; ?></td>
                          <td><?php echo $value['phone']; ?></td>
                          <td><?php echo $value['bed_type']; ?></td>
                          <td><?php echo $value['cin']; ?></td>
                          <td><?php echo $value['cout']; ?></td>
                          <td>PHP <?php echo getPayment($value['bed_type'], $getDays); ?>.00</td>
                          <td><?php echo $getDays; ?> Days</td>
                          <td><?php echo $value['status']; ?></td>
                          <?php 
                          
                           ?>
                          <td><a class="btn btn-primary" href="client_update.php?edit=<?php echo $value['id']; ?>"><i class="fa fa-edit"></i></a> </td>

                          <td><a class="btn btn-danger" href="delete_db.php?id=<?php echo $value['id']; ?>"><i class="fa fa-trash"></i></a> </td>
                        </tr>
                      <?php
                    }
                 ?>
                 
                 
                 
                    </table><br><br>
                     <!-- <button type="button" class="btn btn-danger pull-right" style="margin-left: 10px;" data-toggle="modal" data-target="#modal-delete">Delete </button> -->
                     
                     <label style="color: #24303C; margin-left: 400px; margin-top: 8px; font-weight: 1px">
                       <?php 
                        if (isset($_GET['msg'])) 
                            {
                              echo $_GET['msg'];
                            }
                        ?>
                     </label>
                     
                    <!-- <button type="button" class="btn btn-primary pull-right" style="margin-left: 10px;">Update </button></a> -->


                       <!-- <button type="button" class="btn btn-success pull-left fa fa-print" style="padding-left: 60px;padding-right: 60px" data-toggle="modal" data-target="#modal-update"><font face="century gothic">&nbsp;&nbsp;Print</font></button><p style="margin-top: 5px">&nbsp;&nbsp;Note: Please print a copy and bring this document.</p> -->
                    </form><br><br>
                   <div class="container">
                    <form class="form-horizontal" action="delete_db.php" method="POST" >
    <div class="modal fade" id="modal-delete" style="overflow-y: hidden">
      <div class="modal-dialog modal-md"><br><br><br><br>
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title text-center">Message</h2>
          </div>
          <div class="modal-body"><br>
              <div class="form-group input-group ">
                <font size="3"><p style="margin-left: 90px;">Are you sure you want to cancel your Appointment?</p>
                </div></font>
             <div class="modal-footer">
              <button class="btn btn-danger pull-right" id="create" name="delete" data-dismiss="modal">No</button>
                <button class="btn btn-primary pull-right" id="create" name="delete" style="width: 100px; margin-right: 10px;">Yes</button>
                

              </div>
            </form>
            
          </div>
                </div>
              </div>
          </div>
            </div>  

              </div>
          </div>
        </div>
      </div>
    </section>
    
  </div><br><br><br>
     <footer id="footer" style="height: 86px;">
       <p>© 2018 Phil Oasis Hotel and Restaurant. All Rights Reserved</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>


  <script>
     CKEDITOR.replace( 'editor1' );
 </script>
    </font>
  </body>
</html>
