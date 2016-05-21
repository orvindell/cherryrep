<?php
require_once('/connect.php');
require_once('/functions.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta name="keywords" content="Kosmos, ksiezyc, podroze" />
	<meta name="description" content="Strona o podrozach w kosmos" />
	<meta name="author" content="Tomasz Florek">
	<meta name="application-name" content="Kosmos w pigułce">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Podróże w kosmos</title>
	
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	
  	<link rel="stylesheet" type="text/css" href="FlorekStyle.css">
  	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->




	<style type="text/css">

		#container {
			padding-left: 200px;
			padding-right: 190px;
		}
		
		#container .column {
			position: relative;
			float: left;
		}
		
		#center {
			padding: 10px 20px;
			width: 100%;
		}
		
		#left {
			width: 180px;
			padding: 0 10px;
			right: 240px;
			margin-left: -100%;
		}
		
		#right {
			width: 250px;
			padding: 0 10px;
			margin-right: -100%;
		}
		
		#footer {
			clear: both;
		}
		
		/* Make the columns the same height as each other */
		#container {
			overflow: hidden;
		}

		#container .column {
			padding-bottom: 1001em;
			margin-bottom: -1000em;
		}

		/* Fix for the footer */
		* html body {
			overflow: hidden;
		}
		
		* html #footer-wrapper {
			float: left;
			position: relative;
			width: 100%;
			padding-bottom: 10010px;
			margin-bottom: -10000px;
			background: #fff;
		}

		/* Aesthetics */
		
		nav ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
		}
		
		nav ul a {
			color: darkgreen;
			text-decoration: none;
		}

		#left {
			background: #DAE9BC;
		}
		
		#right {
			background: #F7FDEB;
		}

		#center {
			background: #fff;
		}
		
		#main_table{
			width:100%;
		}

	
	</style>

	
</head>

<body>
	<nav>
		<ul class="main-nav">
		<li><a href="index.php">Home</a></li>
		<li><a href="mailto:tomasz.florek@student.po.edu.pl">E-mail me</a></li>
		<li><a href="http://www.w3schools.com/html/">Visit HTML tutorial</a></li>
		<li><a href="#">Blog</a>
		<ul class="children">
			<li><a href="#">Posts</a></li>
			<li><a href="#">Gallery</a>
				<ul class="children">
					<li><a href="#">Photos</a></li>
					<li><a href="#">Movies</a></li>
				</ul>
			</li>
			<li><a href="#">Archive</a></li>
		</ul>
		</li>
		<li><a href="#">Contact</a></li>
		<li><a href="dzialki.php">Kup działkę na planecie!</a>
		</ul>
	</nav>

	<header >Kup działkę:</header>

	<div id="container">
		<main id="center" class="column">
			
		</main>
	</div>

</body>

</html>

<?php
$db->close();
?>