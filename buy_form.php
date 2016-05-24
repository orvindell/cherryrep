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
	
	<script>
		function getForm(str) {
			if (str == "") {
				document.getElementById("formDiv").innerHTML = "";
				return;
			} else {
				if (window.XMLHttpRequest) {
					// code for IE7+, Firefox, Chrome, Opera, Safari
					xmlhttp = new XMLHttpRequest();
				} else {
					// code for IE6, IE5
					xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
				}
				xmlhttp.onreadystatechange = function() {
					if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
						document.getElementById("formDiv").innerHTML = xmlhttp.responseText;
					}
				};
				xmlhttp.open("GET","buy_form_details.php?id="+str,true);
				xmlhttp.send();
			}
		}

		function printPrice()
		{
			var typ_dzialki = $("#categories_list option:selected").text();
			
			var prices = {"tania" : "2499.99", "standard" : "6412.50", "luksus" : "1475.00"};
			
			$("#cena").text("Cena jednostkowa: " + prices[typ_dzialki]);
		}

	</script>

	
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
			Wybierz planetę:
			<select name="planets" onchange="getForm(this.value)">
				<option value="" selected="selected">Wybierz planetę:</option>
				<?php
					$planets = get_planet_names($db);
					foreach ($planets as $planet) {
						echo '<option value="'.$planet['id'].'">'.$planet['nazwa'].'</option>';
					}
				?>
			</select>
			<div id="formDiv"><b>Najpierw wybierz planetę...</b></div>
		</main>
	</div>

</body>

</html>

<?php
$db->close();
?>