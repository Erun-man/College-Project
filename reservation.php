<!DOCTYPE html>
<html>
<head>
	<title>Phil Oasis | Reservation Section</title>
		<link rel="shortcut icon" href="images/icon.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src = "js/jquery.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
</head>
<body>
<a href="home.php" id="back"><font face="Source Open Sans">Homepage</a></font>
          </div>
    </div>
    </nav>    
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <p class="text-center" id="maintxt"> <br><br>RESERVATION SECTION</p>
                        </h1>
                    </div>
             <div class="container">                    
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 ">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" action="reservation_db.php" method="post">
							 <font face="Source open Sans"> <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname1" class="form-control" required>           
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname1" class="form-control" required>                           
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email1" type="email" class="form-control" required="">                                     
                               </div>						
								<div class="form-group">
                                            <label>Phone Number</label>
                                            <input name="phone1" type ="text" class="form-control" required>                           
                               </div>							   
                        </div>                        
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            RESERVATION INFORMATION
                        </div>
                        <div class="panel-body">
								
							  <div class="form-group">
                                            <label>Room Type</label>
                                            <select name="bed1" class="form-control" required>
												<option value="category">-&nbsp;Category&nbsp;-</option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												<option value="Twin">Twin</option>
                                                <option value="Deluxe">Deluxe</option>        
                                            </select>
                              </div>
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin1" type ="date" class="form-control" required="">        
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout1" type ="date" class="form-control" required="">
                                    <div class="form-group pull-right">
                                <button class="btn btn-primary" name="done">DONE</button>     
                               </div>
							</div>
                       </div>
                </div>
            </div>          
        </form>
              

</body>
</html>