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

<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->

  <style>

  label {

    display: inline-block;

    width: 5em;

  }

  </style>

	<style type="text/css">

		/* Layout */
		#popup {

		}


		.tooltip {
		    position: relative;
		    display: inline-block;
		    border-bottom: 1px dotted black;
		}

		.tooltip .tooltiptext {
		    visibility: hidden;
		    width: 120px;
		    background-color: black;
		    color: #fff;
		    text-align: center;
		    border-radius: 6px;
		    padding: 5px 0;

		    /* Position the tooltip */
		    position: absolute;
		    z-index: 1;
		}

		.tooltip:hover .tooltiptext {
		    visibility: visible;
		}

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

	<header >Eksploracja kosmosu</header>

	<div id="container">
		<main id="center" class="column">
			
				<div id="getFixed">This div is going to be fixed</div>

			<a href="http://www.w3schools.com/html/">Visit HTML tutorial</a>

			<hr>

			<img id="image" src="google.jpg" style="float:right; margin:6px">
			<div id="test-text"> Test text Test text Test text Test text Test text Test text Test text est text Test text Test text Test text Test text Test text Test text est text Test text Test text Test text Test text Test text Test text est text Test text Test text Test text Test text Test text Test text </div>

			<hr>


			<h1 class="blood">Vampire!</h1>

			<hr>


			<p id="demo">JQuery can change html text</p>

			<button type="button"
			onclick="document.getElementById('demo').innerHTML = 'Hello JQuery!'">
			Click Me!</button>


			<script>
			document.write(5 + 6);
			</script>


			<hr>
	
			<script>
		    $(window).load(function(){
		        $('#ta').keyup(function(){
		            $('#float').html("<p>"+$(this).val()+"</p>");
		        });
		        $("#fs").change(function() {
		            $('.changeMe').css("font-family", $(this).val());
		        });         
		        $("#size").change(function() {
		            $('.changeMe').css("font-size", $(this).val() + "px");
		        });
		    });
		    </script>

		    <script>
		    	jQuery(function($) {
				  function fixDiv() {
				    var $cache = $('#getFixed');
				    if ($(window).scrollTop() > 100)
				      $cache.css({
				        'position': 'fixed',
				        'top': '10px'
				      });
				    else
				      $cache.css({
				        'position': 'relative',
				        'top': 'auto'
				      });
				  }
				  $(window).scroll(fixDiv);
				  fixDiv();
				});
		    </script>

			<form id="myform">
			    <button>erase</button>
			    <select id="fs"> 
			        <option value="Arial">Arial</option>
			        <option value="Verdana ">Verdana </option>
			        <option value="Impact">Impact </option>
			        <option value="Comic Sans MS">Comic Sans MS</option>
			    </select>

			    <select id="size">
			        <option value="7">7</option>
			        <option value="10">10</option>
			        <option value="20">20</option>
			        <option value="30">30</option>
			    </select>
			</form>

			<br/>

			<textarea class="changeMe">Text into textarea</textarea>
			<div id="container" class="changeMe">
			    <div id="float">
			        <p>
			            Text into container
			        </p>
			    </div>
			</div>


			<hr>

			<div class="fotorama">
			  <img src="http://s.fotorama.io/1.jpg">
			  <img src="http://s.fotorama.io/2.jpg">
			  <img src="http://s.fotorama.io/3.jpg">
			  <img src="http://s.fotorama.io/4.jpg">
			  <img src="http://s.fotorama.io/5.jpg">
			  <img src="http://s.fotorama.io/6.jpg">
			</div>


			<div class="tooltip">Hover over me
			  <span class="tooltiptext">Tooltip text</span>
			</div>
		</main>
	</div>

	
	

	<div id="footer-wrapper">
		<footer style="text-align:center;" >Footer...</footer>
	</div>

</body>

</html>

