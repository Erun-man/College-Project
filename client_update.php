<?php 
 session_start(); 
 error_reporting(0);
  if (isset($_SESSION['username1'])) {
    
  }else{
    header('Location: /hrs/home.php');
  }

  $edit = "";
  if(isset($_REQUEST['edit'])) :
    $edit = $_REQUEST['edit'];
  endif;

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
    $result = $conn->query("SELECT * FROM `reservation` WHERE `Username` = '$username' AND `id` = '$edit'");


    if ($result->num_rows > 0) {
      $reservation_index = 0;
          // output data of each row
      while($row = $result->fetch_assoc()) {          
        $reservation_data[$reservation_index] = $row;
        $reservation_index++;
      }

    } 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phil Oasis | Update Reservation</title>
    <link rel="shortcut icon" href="images/icon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles_clients.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <script src = "js/jquery.min.js"></script>
  <script src = "js/bootstrap.min.js"></script>
  </head>
  <body>
    <?php 
     ?>
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
        </div>
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
         

          <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Update Section</h3>
              </div>
              <div class="container">                    
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 "><br>
                    <div class="panel panel-success">
                        <div class="panel-heading">

                            PERSONAL INFORMATION

                        </div>
                        <div class="panel-body">
                          <form action="reservation_update_db.php" method="POST">
                             <font face="century gothic"> 
                              <div class="form-group">
                                 <label>First Name</label>
                                 <input type="text" name="uid" value=" <?php echo $reservation_data[0]['id'] ?>" hidden>
                                    <input type="text" name="editfname" value="<?php echo $reservation_data[0]['first_name']; ?>" class="form-control"  required>           
                         </div>
                                     <div class="form-group">
                                          <label>Last Name</label>
                                          <input name="editlname" value= "<?php echo $reservation_data[0]['last_name']; ?>" class="form-control" required>                           
                                      </div>
                                       <div class="form-group">
                                      <label>Email</label>
                                    <input type="text" name="editemail" value="<?php echo $reservation_data[0]['email']; ?>" class="form-control"  required>           
                                      </div>
                                      <div class="form-group">
                                          <label>Phone Number</label>
                                          <input name="editphone" type ="text" value= "<?php echo  $reservation_data[0]['phone']; ?>" class="form-control" required>                    
                                        </div> 


                        </div>  

                    </div></div>

            
            <div class="col-md-5"><br>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            ROOM INFORMATION
                        </div>
                        <div class="panel-body">
                
                <div class="form-group">
                                            <label>Room Type</label>
                                            <select name="editbed"  class="form-control" required="">
                                                <option value="<?php echo $reservation_data[0]['bed_type']; ?>" selected><?php echo $reservation_data[0]['bed_type']; ?></option>
                                                <option value="category">-&nbsp;Category&nbsp;-</option>
                                                <option value="Single">Single - 399.00/day</option>
                                                <option value="Double">Double - 599.00/day</option>
                                                <option value="Twin">Twin - 799.00/day</option>
                                                <option value="Deluxe">Deluxe - 1,999.00/day</option>        
                                            </select>
                              </div>
                <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="editcin" type ="date" value= "<?php echo $reservation_data[0]['cin']; ?>" class="form-control" placeholder="yyyy-mm-dd" required="">        
                               </div>
                 <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="editcout" type ="date" value= "<?php echo $reservation_data[0]['cout']; ?>" class="form-control" placeholder="yyyy-mm-dd" required="">
                                    <div class="form-group pull-right"><br><br>

                                <button class="btn btn-primary" name="done" style="width: 120px;">Submit</button> 
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <a href="my_account.php"><button type="button" class="btn btn-danger">Cancel</button> </a>
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



















    <footer id="footer" style="height: 73px;">
        <p>© 2017 PHIL OASIS. All Rights Reserved | Design by Jericho Gonzales & Alleana Rae Ambalada</p>
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
    <script src="js/bootstrap.min.js"></script>
    </font>
  </body>
</html>
