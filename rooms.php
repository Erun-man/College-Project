<!DOCTYPE html>
<html>
<head>
	<title>Phil Oasis - Rooms Section</title>
		<link rel="shortcut icon" href="images/icon1.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<script src = "js/jquery.min.js"></script>
	<script src = "js/bootstrap.min.js"></script>
</head>
<body>

<div id="wrapper">
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="index.php"><i class="fa fa-home"></i> Homepage</a>
                    </li>
                    
					</ul>

            </div>

        </nav>
       
                    <div class="col-md-12">
                        <h1 class="page-header">
                            <p class="text-center"> RESERVATION SECTION</p>
                        </h1>
                    </div>

                 
             <div class="container">                    
            <div class="row">
                
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            PERSONAL INFORMATION
                        </div>
                        <div class="panel-body">
						<form name="form" action="reservation_db.php" method="post">
                         
							  <div class="form-group">
                                            <label>First Name</label>
                                            <input name="fname1" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Last Name</label>
                                            <input name="lname1" class="form-control" required>
                                            
                               </div>
							   <div class="form-group">
                                            <label>Email</label>
                                            <input name="email1" type="email" class="form-control" required>
                                            
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
                                            <label>Bedding Type</label>
                                            <select name="bed1" class="form-control" required>
												<option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												<option value="Triple">Triple</option>
                                                <option value="Quad">Quad</option>
												<option value="None">None</option>
                                                
                                             
                                            </select>
                              </div>
							  
							  <div class="form-group">
                                            <label>Check-In</label>
                                            <input name="cin1" type ="date" class="form-control">
                                            
                               </div>
							   <div class="form-group">
                                            <label>Check-Out</label>
                                            <input name="cout1" type ="date" class="form-control">
                                    <div class="form-group pull-right">
                                <button class="btn btn-primary">DONE</button>
                                        
                               </div>
                               
							</div>
                       </div>

                </div>
            </div>          
        </form>
				
</head>

</body>
</html>