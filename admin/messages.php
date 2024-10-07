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
    <title>Admin Area | Inbox</title>
    <link rel="shortcut icon" href="image/admin_icon1.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
     <script src = "js/jquery.min.js"></script>
     <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <script src = "js/bootstrap.min.js"></script>
  </head>
  <body style="overflow-x: hidden;">
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
             <li ><a href="admin.php" >Home Page</a></li>
            <li><a href="clients_information.php">Incoming Clients</a></li>
            <li ><a href="approve_client1.php">Checked In</a></li>
             <li ><a href="client_check_out.php">Checked Out</a></li>
            
            <li class="active"><a href="messages.php">Inbox</a></li>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Messages<small>&nbsp;&nbsp;Admin</small></h1>
          </div>
         
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              
                <a href="admin.php" class="list-group-item"><span class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Home Page</a>
              <a href="clients_information.php" class="list-group-item"><span class="fa fa-user-o" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Incoming Clients</a>
              <a href="approve_client1.php" class="list-group-item"><span class="fa fa-sign-in" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Checked In</a>
               <a href="client_check_out.php" class="list-group-item"><span class="fa fa-sign-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Checked Out</a>
             
             
              <a href="messages.php"   style="background-color: #cacdd4" class="list-group-item"><span class="fa fa-envelope-open-o" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Inbox</a>
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
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Inbox</h3>
              </div>

             <form method="POST">
              <div class="container">
                    <div class="row"><br><br>
                      <div class="col-md-7">
                        <input class="form-control" type="text" name="search" placeholder="Search messages...">
                      </div>
                      <div class="col-md-4">
                        <button class="btn " style="width: 110px; background-color: #ac90dd; color: white;">Search</button><br><br>
                      </div>
                    </div>
                
                    <div class="col-md-8">
                   <table class="table table-striped table-hover">
                      <tr>

                    <?php
                      
                      if (isset($_POST['search']))
                      {
                        $word = $_POST['search'];
                        if (empty($word))
                         {
                          $msg = "Required Fields";
                          header('Location:clients_information.php?msg='.$msg.'');
                        }
                        else
                        {
                          $query =$conn->query("SELECT * FROM `message` WHERE (`email` LIKE '%$word%')");
                        }
                        while ($row = mysqli_fetch_array($query))
                         {
                          $email_mess = $row ['email'];
                          $mess = $row ['message'];
                          
                          echo "&nbsp;&nbsp;&nbsp;Search Results: "."<br>";
                          echo "<th>"."Email Address"."<th>";
                          echo "<th>"."Message"."<th>";
                          echo "<tr>";

                          echo "<td>".$email_mess."<td>";
                          echo "<td>".$mess."<td>";

                    

                          
                        }
                      }
                       ?>
                       
                       
                  </div>
                  </div>
                </tr>
</table>
                
                 <?php 
                  
                  $sql="SELECT * FROM message";
                  $records = $conn->query($sql);
                 ?>
                  <div class="col-md-12">
                   <div class="panel panel-default">
                   <div class="panel-heading main-color-bg">
                    <h3 class="panel-title">New Messages</h3>
              </div>
              
                <table class="table table-striped table-hover">

                      <tr>
                    <th>Email Address</th>
                    <th>Message</th>

                </tr>
                <?php
                while ($message = mysqli_fetch_assoc($records)) {
                     echo "<tr>";
                     echo "<td>".$message['email']."</td>";
                     echo "<td>".$message['message']."</td>";

                     echo "</tr>";
                 } 
                 ?>

                    </table><br>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
  </font>
</html>
