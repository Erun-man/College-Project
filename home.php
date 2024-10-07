<?php 
	session_start();
	if (isset($_SESSION['username1']))
	 {
		header('Location: /hrs/client_page.php');
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome to Phil Oasis Hotel and Restaurant!</title>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/w3.css">
	<script src = "js/jquery.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
</head>
<body style="overflow-x: hidden;">
<style type="text/css">
	#logo
	{
			height:45px;
	width:120px;
	left: 7px;
	top: 3px;
	position: absolute;
	}
</style>
	<nav class=" navbar-default navbar-inverse navbar-fixed-top" style="background-color: black;" >
	<img src="images/peacockz.png" id="logo">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-target="#mainNavbar" data-toggle="collapse">
				<span class=icon-bar></span>
				<span class=icon-bar></span>
				<span class=icon-bar></span>
			</button>
		</div>
			<div class="navbar-collapse collapse" id="mainNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php" class="nav-text"></span> HOME</li></a>
					<li><a href="#about.us" class="nav-text"></span> ABOUT</li></a>
					<li><a href="#contact.us" class="nav-text"></span> CONTACT US</li></a>
					
					<li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			          <font face="century gothic" class="nav-text"></span> GALLERY&nbsp;&nbsp;</font>
			         	 <span class="caret "></span></a>
					         	 <ul class="dropdown-menu">
					            <li><a href="#gallery" class="nav-text"></span> POOL</a></li>
					            <li><a href="#bedrooms" class="nav-text"></span> BED ROOMS</a></li>
					            <li><a href="#facilities" class="nav-text"></span> FACILITIES</a></li> 
					         	 </ul>
					         	 
					 <li class="dropdown">
			          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			          <font face="century gothic" class="nav-text"></span> ACCOUNT&nbsp;&nbsp;</font>
			         	 <span class="caret "></span></a>
					         	 <ul class="dropdown-menu">
					            <li><a href="signin_signup.php" class="nav-text" style="color"><span class="fa fa-sign-in"> <font face="century gothic">&nbsp;&nbsp;&nbsp;SIGN IN</font></a></li>	
					            <li><a href="signin_signup.php" class="nav-text"><span class="fa fa-user-plus"><font face="century gothic">&nbsp;&nbsp;&nbsp;SIGN UP</font></a></li>											
					            	
					         	 </ul>        	 

					         	  </font>
          </div>
	</div>
	</nav>	
<div class="container">
				<div class="row">
					<img src="images/bannerflat.jpg" id="bann" style="position: absolute;">
				</div>
			</div>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/hotel.jpg" id="caro">
    </div>
    <div class="item">
      <img src="images/hotel2.jpg" id="caro">
    </div>
    <div class="item">
      <img src="images/hotel3.jpg" id="caro">
    </div>
    <div class="item">
      <img src="images/hotel1.jpg" id="caro">
    </div>
  </div>
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

			
<div class="bg-1 jumbotron">
<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<font face="lato"><h2 class="header1"><b>Welcome to Phil Oasis Hotel and Restaurant</b></h2><br>
				<p class="subheader2">Experience our Rooms, Swimming Pool and our Restaurant</p></font>
			</div>

			


		<div class="container jumbotron">
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="thumbnail text-center " id="thumbnail1">
					<img src="images/single.jpeg" class="img-responsive margin ">
					<a href="signin_signup.php"><font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id="bedroom_info">
				<font face="lato">
					<p>Room Type: Single </p>
					<p>Room Price: 399.00</p>
					<p>Max Occupancy: 1 person</p></font>
				</div>
				</div>
			</div>

			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="thumbnail text-center " id="thumbnail1">
					<img src="images/double.jpeg" class="img-responsive margin ">
					<a href="signin_signup.php"><font face="lato"><button class="btn">Reserved Now!</button> </font></a>
				<p></p>
				<div id="bedroom_info">
				<font face="lato">
					<p>Room Type: Double</p>
					<p>Room Price: 599.00</p>
					<p>Max Occupancy: 2 persons</p></font>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="thumbnail text-center " id="thumbnail1">
					<img src="images/twin.jpeg" class="img-responsive margin ">
					<a href="signin_signup.php"><font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id="bedroom_info">
				<font face="lato">
					<p>Room Type: Twin </p>
					<p>Room Price: 799.00</p>
					<p>Max Occupancy: 2 persons</p></font>
					</div>
				</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="thumbnail text-center " id="thumbnail1">
					<img src="images/deluxe.jpeg" class="img-responsive margin ">
					<a href="signin_signup.php"><font face="lato"><button class="btn"">Reserved Now!</button> </font></a>
				<p></p>
				<div id="bedroom_info">
				<font face="lato">
					<p>Room Type: Deluxe </p>
					<p>Room Price: 1,199.00</p>
					<p>Max Occupancy: 3 persons</p></font>
					</div>
				</div>
			</div>
			

			

		</div>
	</div>	
			<div class="jumbotron">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center header22"><b>What did they just said?</b></h2><hr><br>
				<div class="col-md-6 col-sm-6 col-xs-6">
					<img src="images/user.png" class="img-circle img-responsive center-block quote1">
					 <font face="lato"><br><p class="text-center quote">"This is so cheap but when i experience it's different!. Truly Recommended!"<i><br><br><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><br><br><b>-Coco Martin</b></i></p></font>
				</div>	
				<div class="col-md-6 col-sm-6 col-xs-6">
					<img src="images/user.png" class="img-circle img-responsive center-block quote1">
					<font face="lato"><br><p class="text-center quote">"Well, it's nice in here and the foods are awesome great service. Love it!" <i><br><br><span class="fa fa-star "></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star-o"></span><span class="fa fa-star-o"></span><br><br><b>-Juan Dela Cruz</i></b></p></font>
				</div>
				</div>
			</div>
		</div>
	</div>	
<div class="jumbotron">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center"><br><br><br>
				<a name="gallery"></a><span class="glyphicon glyphicon-sunglasses center-block text-center"></span>
				<font face="lato"><h2 class="header23"><b><br>Explore our Wonderful Hotel</b></h2><hr>
				<h2 class="header31"><br>Swimming Pool</h2><p class="information">Experience our awesome Pools.</p>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/pool2.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/pool1.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/pool3.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/pool4.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-12 text-center"><a name="bedrooms"></a><hr>
			<h2 class="header31"><br> Bed Rooms & Restaurant</h2><p class="information">Experience our relaxing Bed Rooms and Restaurant. <br></p>	
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/br1.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/br2.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/br3.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/br4.jpg" class="img-responsive margin thumbnail">
			</div>

			<div class="col-md-12 text-center"><a name="facilities"></a><hr><br>
			<h2 class="header31">Facilities and More!</h2><p class="information">Experience our beautiful Facilities. <br></p></font>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/fa1.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/fa2.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/fa3.jpg" class="img-responsive margin thumbnail">
			</div>
			<div class="col-md-3 col-sm-3 col-xs-6">
				<img src="images/fa4.jpg" class="img-responsive margin thumbnail">
			</div>
				<br><br><br><br>
			</div>
		</div>
	</div><a name="about.us"></a>
</div><br><br><br>
	<div class="jumbotron">
		<div class="container">
			<div class="col-md-12 col-sm-12"><br>
			<span class="glyphicon glyphicon-user center-block text-center" id="user"></span>
				<h2 class="section text-center main"><b><br>ABOUT US </b></h2>
				<a href="home.php"><br><img src="images/user.png" class="img-circle img-responsive center-block  myicon"></a>
			<br><font face="lato" color="black"><p class="text-center myinfo">Ideally the Hotel is located at Lot 2A,B, & C, Biluso, Silang, 4118 Cavite, Philippines, Phil Oasis promises a relaxing and wonderful visit. Both business travelers  and tourist can enjoy the hotel's facilities and services. Facilities like 24-hour front desk, 24 hour room service, luggage storage, Wi-Fi in public areas, car park are readily available for you to enjoy. Comfortable guest rooms ensure a good night's sleep with some rooms featuring facilities such as internet access, air conditioning ,heating, desk, and mini bar.</p></font><br><br><br>
		</div>
	</div>
		<br><br><br><br><br><a name="contact.us"></a><span class="glyphicon glyphicon-phone center-block text-center"></span>
			<h2 class="section text-center main"><b><br>CONTACT US</b></h2><br>
			<div class="container">
				<div class="row">
					<font face="century gothic"><h3 class="text-center">Message us now!</h3></font>
					<div class="col-md-6">
						
						<form class="form-horizontal" action="message_db.php" method="post"><br><br>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="email" class="form-control" name="email_msg" placeholder="Email Address" required="">	
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-comment"></span>
								</span>
								<input type="textbox" class="form-control" name="msg" placeholder="Message" required="">	

							</div>
							<div class="form-group">
								<button class="btn btn-success" id="create">Send Now</button>
							</div>

				</div>		
				
					

			
			
								<div class="col-md-6 contact_info center-block"><br><br>
					<font face="century gothic"><font face="century gothic" color="#ff6f00"><p>Phone:</font> +63 930 7191308 <br><font face="century gothic" color="#ff6f00">Landline:</font> (046) 414 3201  <br><font face="century gothic" color="#ff6f00">Address:</font> Biluso, Silang, 4118 Cavite, Philippines. <br><font face="century gothic" color="#ff6f00">Email:</font> phil_oasis@gmail.com</p> </font><br>
					 <a href="https://www.facebook.com/pages/Phil-Oasis-Hotel-118972864845137" title="Facebook"><span class="fa fa-facebook fa-2x icons "></span></a>
					 <a href="https://www.instagram.com/Phil- Oasis" title="Instagram"><span class="fa fa-instagram fa-2x icons"></span></a>
					 <a href="https://plus.google.com/Phil-Oasis" title="Google+"><span class="fa fa-google-plus fa-2x icons"></span></a>
						</div>
							</div>
							</form>	
						
					</div>
				</div>
			</div>		
			</div>	
		
	</div>

<footer class="container-fluid text-center">
<div class="col-md-12">
  <font face="century gothic" size="2"><p><br>© All Right Reserved 2018</a></p> </font>

  <div class="social">
 
  </div>
</div>
</footer>
</body>
</html>  