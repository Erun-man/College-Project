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
    <title> Phil Oasis | Home</title>
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
            <h1><img src="images/user.png" style="width: 50px; height: 50px"> Phil Oasis Hotel And Restaurant <small>&nbsp;&nbsp;</small></h1>
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
              <a href="client_page.php" class="list-group-item" style="background-color: #f4f4f4;"><span class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Home</li></a>
               <a href="client_page.php" class="list-group-item"><span class="fa fa-credit-card" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Reservation Section</li></a>
               
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
                <h2 class="panel-title fa fa-building ">&nbsp;&nbsp;Phil Oasis</h3>
              </div>
             <div class="bg-1 jumbotron">
<div class="container">

      <div class="col-md-12 text-center">
        <font face="lato"><h2 class="header1"><b>Welcome to Phil Oasis Hotel and Restaurant</b></h2><br>
        <p class="subheader2">Experience our relaxing hotel, pool, bed rooms and facilities!</p></font>
      </div>

      


      <div class="container jumbotron">
    <div class="row">





      <div class="col-md-3  col-sm-6 col-xs-6">
        <div class="thumbnail text-center " id="thumbnail1">
          <img src="images/single.jpeg" class="img-responsive margin ">
         <br>
        <div id="bedroom_info">
        <font face="century gothic">
          <p style="font-size: 12px">Room Type: Single </p>
          <p  style="font-size: 12px">Room Price: 399.00</p>
          <p  style="font-size: 12px">Max Occupancy: 1 person</p></font>
        </div>
        </div>
      </div>

      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="thumbnail text-center " id="thumbnail1">
          <img src="images/double.jpeg" class="img-responsive margin ">
        <p></p>
        <div id="bedroom_info">
        <font face="century gothic">
          <p  style="font-size: 12px">Room Type: Double</p>
          <p style="font-size: 12px">Room Price: 599.00</p>
          <p style="font-size: 12px">Max Occupancy: 2 persons</p></font>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="thumbnail text-center " id="thumbnail1">
          <img src="images/twin.jpeg" class="img-responsive margin ">
        <p></p>
        <div id="bedroom_info">
        <font face="century gothic" >
          <p style="font-size: 12px">Room Type:<br> Twin </p>
          <p style="font-size: 12px">Room Price: 799.00</p>
          <p style="font-size: 12px">Max Occupancy: 2 persons</p></font>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-6">
        <div class="thumbnail text-center " id="thumbnail1">
          <img src="images/deluxe.jpeg" class="img-responsive margin ">
           </font></a>
        <p></p>
        <div id="bedroom_info">
        <font face="century gothic">
          <p style="font-size: 12px">Room Type: Deluxe </p>
          <p style="font-size: 12px">Room Price: 1,999.00</p>
          <p style="font-size: 12px">Max Occupancy: 3 persons</p></font>
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
