<?php

session_start(); // start session cookies
require("Login.class.php"); // pull in file
$login = new Login; // create object login

$login->authorize(); // make user login

?>


<!DOCTYPE html>
<html>
<head>
		<title>Tembusu College Orientation</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
			<link rel="stylesheet" href="semantic-ui-1.0/semantic.css">
		</noscript>
	</head>
<body>

<div id="header-wrapper">
				<div class="container">

					<!-- Header -->
						<header id="header">
							<div class="inner">
							
								<!-- Logo -->
									<h1><a href="index.html" id="logo">Tembusu College Orientation</a></h1>
								
								<!-- Nav -->
									<nav id="nav">
									
</ul>
</nav>


</div>
</header>
<br>
<div class = "postLoginDetails">
	<h2 class = "postLoginDetails">Welcome Jane Doe</h1>
	<h1 class = "postLoginDetails">Below are the details of all orientees under your charge</h2>
	<table id = "post"></table>
	<script>
	var table = "";
	table += "<tr><th>No.</th><th>Name</th><th>Contact Number</th><th>Email</th><th>NOK</th><th><NOK's contact</th></tr>";
	for (var i = 1 ; i < 16; i++) {
	table += "<tr><td>" + i + "</td><td></td><td></td><td></td><td></td><td></td></tr>";
}
document.getElementById("post").innerHTML = table;
	</script>
</div>
</div>
</div>
<!-- Footer Wrapper -->
			<div id="footer-wrapper">
				<footer id="footer" class="container">
			
					<div class="row">

						<div class="12u">
							<div id="copyright">
								<ul class="menu">
									<li>&copy; Moazzam Khan || David Vasquez || Jerry. <br>All rights reserved</li>
								</ul>
							</div>
						</div>
					</div>
				</footer>
			</div>

	</body>
</html>

