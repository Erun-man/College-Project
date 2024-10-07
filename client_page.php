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
      <link rel="shortcut icon" href="images/favicon.png">
    <title> Phil Oasis | Clients Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles_clients.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
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
          <div class="col-md-3">
            <div class="list-group">
              <a href="admin.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Account
              </a>
              <a href="client_home.php" class="list-group-item"><span class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Home</li></a>
               <a href="client_page.php" class="list-group-item" style="background-color: #f4f4f4;"><span class="fa fa-credit-card" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Reservation Section</li></a>
               
               <a href="my_account.php" class="list-group-item"><span class="fa fa-gear" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Appointment</li>
            
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

          
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h2 class="panel-title fa fa-calendar">&nbsp;&nbsp;Reservation Section</h3>
              </div>
              <div class="container">                    
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 "><br>
                    <div class="panel panel-success">
                        <div class="panel-heading">

                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
                          <form name="form" action="reservation_db.php" method="post">
                             <font face="century gothic"> <div class="form-group">
                                 <label>First Name</label>
                                    <input name="fname1" class="form-control" required>           
                         </div>
                                     <div class="form-group">
                                          <label>Last Name</label>
                                          <input name="lname1" class="form-control" required>                           
                                      </div>
                                     <div class="form-group">
                                          <label>Email</label>
                                          <input name="email1" type="email" value="" class="form-control" required="">         
                                      </div>           
                                      <div class="form-group">
                                          <label>Phone Number</label>
                                          <input name="phone1" type ="text" class="form-control" required>                    
                                        </div> 


                        </div>  

                    </div>

                </div>
              
            <div class="col-md-4"><br>
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            ROOM INFORMATION
                        </div>
                        <div class="panel-body">
                
                <div class="form-group">
                                            <label>Room Type</label>
                                            <select name="bed1" class="form-control" required="">
                        <option value="category">-&nbsp;Category&nbsp;-</option>
                                                <option value="Single">Single </option>
                                                 <option value="Single">Double</option>
                                                <option value="Twin">Twin</option>
                                                <option value="Deluxe">Deluxe</option>        
                                            </select>
                              </div>
                <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin1" type ="date" class="form-control" placeholder="yyyy-mm-dd" required="">        
                               </div>
                 <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout1" type ="date" class="form-control" placeholder="yyyy-mm-dd" required=""><br><br>
                                            <div class="form-group pull-left">
                                           <label style="color: #24303C ; margin-top: 7px; margin-left: 30px">
                                             <?php 
                                              if (isset($_GET['msg'])) 
                                                  {
                                                    echo $_GET['msg'];
                                                  }
                                              ?>
                                           </label></div>
                                    <div class="form-group pull-right">

                                <button class="btn btn-primary" name="done">Submit</button>     
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

    <footer id="footer" style="height: 72px;">
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
    <script src="js/bootstrap.min.js"></script>
    </font>
  </body>
</html>
