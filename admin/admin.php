<?php 
 session_start();

 if (isset($_SESSION['admin'])) {
    
  }else{
    header('Location: /hrs/admin/');
  }

  $server= "localhost";
    $user = "root";
    $pass = "";
    $dbname = "hrs";

    $conn = new mysqli($server,$user,$pass, $dbname);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Main Page</title>
    <link rel="shortcut icon" href="image/admin_icon1.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
     <script src = "js/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
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
          <a class="navbar-brand" href="#">Phil Oasis Hotel and Restaurant</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <?php echo $_SESSION['admin']; ?>

            <li class="active" ><a href="admin.php" >Home Page</a></li>
            <li><a href="clients_information.php">Incoming Clients</a></li>
            <li><a href="approve_client1.php">Checked In</a></li>
             <li><a href="approve_client1.php">Checked Out</a></li>
            
            <li><a href="messages.php">Inbox</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Admin</a></li>
            <li><a href="admin_logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Main Page <small>&nbsp;&nbsp;Admin</small></h1>
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
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
               <a href="admin.php" style="background-color: #cacdd4" class="list-group-item"><span class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Home Page</a>
              <a href="clients_information.php" class="list-group-item"><span class="fa fa-user-o" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Incoming Clients</a>
              <a href="approve_client1.php" class="list-group-item"><span class="fa fa-sign-in" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Checked In</a>
               <a href="client_check_out.php" class="list-group-item"><span class="fa fa-sign-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Checked Out</a>
             
             
              <a href="messages.php" class="list-group-item"><span class="fa fa-envelope-open-o" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Inbox</a>
             
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default" >
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #3498db">
                    <h2><span class="fa fa-building" aria-hidden="true"></span>&nbsp;399</h2>
                    <h4>Single</h4>
                    <span class="fa fa-child"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #9b59b6">
                    <h2><span class="fa fa-building" aria-hidden="true"></span>&nbsp;499</h2>
                    <h4>Double</h4>
                    <span class="fa fa-child"></span><span class="fa fa-child"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #e74c3c">
                    <h2><span class="fa fa-building" aria-hidden="true"></span> &nbsp;599</h2>
                    <h4>Twin</h4>
                    <span class="fa fa-child"></span><span class="fa fa-child"></span>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box" style="background-color: #f1c40f">
                    <h2><span class="fa fa-building" aria-hidden="true"></span> &nbsp;1999</h2>
                    <h4>Deluxe</h4>
                    <span class="fa fa-child"></span><span class="fa fa-child"></span><span class="fa fa-child"></span>
                  </div>
                </div>
              </div>
              </div>
              <?php 
                $sql="SELECT * FROM `reservation` WHERE `status` = 'incoming'";
                $sql1="SELECT * FROM `reservation` WHERE `status` = 'approved'";
                $sql2="SELECT * FROM `reservation` WHERE `status` = 'checkout'";

                $result_reservation = $conn->query($sql);  
                $result_checkout = $conn->query($sql2); 
                $result_approved = $conn->query($sql1); 
              ?>
              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">List of all Clients</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                    <th>Full Name</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Client Status</th>
                </tr>
                <?php

                   while ($checkout = $result_checkout->fetch_assoc()) 
                {
                  echo "<tr>";
                     echo "<td>".$checkout['first_name']." ".$checkout['last_name']."</td>";
                     echo "<td>".$checkout['email']."</td>";
                     echo "<td>".$checkout['phone']."</td>";
                     echo "<td>"."<button class = out title = Departed></button>"."<td>";

                     echo "</tr>";
                }
                 while ($approved = $result_approved->fetch_assoc()) 
                {
                
                     echo "<tr>";
                     echo "<td>".$approved['first_name']." ".$approved['last_name']."</td>";
                     echo "<td>".$approved['email']."</td>";
                     echo "<td>".$approved['phone']."</td>";
                     echo "<td>"."<button class = approved title = Approved></button>"."<td>";

                     echo "</tr>";
                 }

                while ($reservation = $result_reservation->fetch_assoc()) 
                {
                  
                     echo "<tr>";
                     echo "<td>".$reservation['first_name']." ".$reservation['last_name']."</td>";
                     echo "<td>".$reservation['email']."</td>";
                     echo "<td>".$reservation['phone']."</td>";
                     echo "<td>"."<button class = new title = Waiting></button>"."<td>";

                     echo "</tr>";
                 } 
                 ?>
                    </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>© 2018 Phil Oasis Hotel and Restaurant. All Rights Reserved</p>
    </footer>
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
 </script></font>
  </body>
</html>
