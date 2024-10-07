<?php 
	 session_start();
  if (isset($_SESSION['username1'])) {
    header('Location: /hrs/client_page.php');
  }
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>PHIL OASIS HOTEL AND RESTAURANT</title>
		<meta charset="utf-8" />
		<link rel="shortcut icon" href="images/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<style type="text/css">
		h2{
			size: 100px;font-size: 60px;
		}
	</style>
	<body class="loading">
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">
					<header id="header">
						<h1>PHIL OASIS HOTEL <br><h1><h2></h2>
						<p>Service &nbsp;&bull;&nbsp; Excellence &nbsp;&bull;&nbsp; Experience</p>
						<nav>
							<ul>
								<font face="comic sans ms"><a href="home.php"><button id="button">Check Us Out...</button></a></font>
							</ul>
						</nav>
					</header>
					<footer id="footer">
						
					</footer>
			</div>
		</div>
	</body>
</html>