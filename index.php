<!DOCTYPE html>
<html lang="en">
<head>
	<!-- WEBSITE INSPIRATION: https://lsproductions.com/ -->
	
	<title>ProductionsOne</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" type="text/css" href="./css/stickyelements.css">
	<link rel="stylesheet" href="./css/animate.css">
	<link rel="stylesheet" href="./css/popup.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php include './php/navbar.php';?>

	<div class="top-frame">
		<video autoplay muted loop id="hero-footage">
			<source src="./assets/hero_footage.mp4" type="video/mp4">
		</video>
		<h1>ProductionsOne</h1>
		<h2> The only film agency you need. </h2>
		<p>SCROLL FOR MORE </p>
	</div>

	<div class="intro">
		<p>AB-UNDE APPRECANDO CARBONE. EU NOVERCA EX SUCCESSUS EUM AB’S PROCESSUS NAM ASSUM REM QUOD HARUSEN EU EUM MODERNO EA CRABRONES ASSUMENDA</p>
		<img class="wow fadeInRight" src="./assets/home/intro_right.jpg">
	</div>

	<div class="quote">
		<p>"Cum non tui ac expeditionem sem rem modo y anteacta magni."</p>
	</div>

	<div class="our-work wow fadeIn">
		<h3> Our Work </h3>
		<p>Ac’il supremi quae culpa eorum aenean Dominari, Memoria, Facer sed Deserunt Natoque. Dui merita, ea non est excepto id equestri quam tyrannidem id nunc id elit.</p>
	</div>

	<div class="film-production">
		<div>
			<h3>Film Production</h3>
			<p>Suspendisse odio est, posuere et lorem ac, facilisis porta ipsum. Vestibulum quis neque non felis pretium condimentum. Aliquam eget eleifend ante, ac ultricies mi. Nam id magna nec felis auctor posuere.</p>
		</div>
		<div class="img-container wow fadeInRight">
			<img src="./assets/home/film_production.jpg">
			<a href='./pages/film.php'><button class="btn">Film</button></a>
		</div>
	</div>
	<div class="photo-production">
		<div class="img-container wow fadeInLeft">
			<img src="./assets/home/photo_production.jpg">
			<a href='./pages/photo.php'><button class="btn">Photo</button></a>
		</div>
		<div>
			<h3>Photo Production</h3>
			<p>Nulla efficitur sollicitudin mi vitae iaculis. In non nisl vel tortor mollis porta sit amet eu lacus. Pellentesque sollicitudin luctus ex, sed feugiat nibh finibus ac.</p>
		</div>
	</div>

	<div class="quote">
		<p>"Cum non tui ac expeditionem sem rem modo y anteacta magni."</p>
	</div>

	<div class="film-production">
		<div>
			<h3>Locations</h3>
			<p>Suspendisse odio est, posuere et lorem ac, facilisis porta ipsum. Vestibulum quis neque non felis pretium condimentum. Aliquam eget eleifend ante, ac ultricies mi. Nam id magna nec felis auctor posuere.</p>
		</div>
		<div class="img-container wow fadeInRight">
			<img src="./assets/home/locations.jpg">
			<a href='./pages/locations.php'><button class="btn">Locations</button></a>
		</div>
	</div>
	<div class="photo-production">
		<div class="img-container wow fadeInLeft">
			<img src="./assets/home/our_people.jpg">
			<a href='./pages/ourpeople.php'><button class="btn">People</button></a>
		</div>
		<div>
			<h3>Our People</h3>
			<p>Nulla efficitur sollicitudin mi vitae iaculis. In non nisl vel tortor mollis porta sit amet eu lacus. Pellentesque sollicitudin luctus ex, sed feugiat nibh finibus ac.</p>
		</div>
	</div>
	<div class="quote">
		<p>"Cum non tui ac expeditionem sem rem modo y anteacta magni."</p>
	</div>

	<div class="gallery-container">
		<h3>Gallery </h3>
		<div class="gallery-left wow fadeIn">
			<div class="slides-left">
			    <img src="./assets/carousel/home_carousel1.jpg" style="width:100%">
		    </div>
		    <div class="slides-left">
			    <img src="./assets/carousel/home_carousel2.jpg" style="width:100%">
		    </div>
		    <div class="slides-left">
			    <img src="./assets/carousel/home_carousel3.jpg" style="width:100%">
		    </div>
		    <div class="slides-left">
			    <img src="./assets/carousel/home_carousel4.jpg" style="width:100%">
		    </div>
		    <div class="slides-left">
			    <img src="./assets/carousel/home_carousel5.jpg" style="width:100%">
		    </div>
		</div>
	</div>
	<?php include './php/footer.php';?>
</body>
<script src="./js/script.js"></script>
<script src="./js/wow.min.js"></script>
<script src="./js/popup.js"></script>
              <script>
              new WOW().init();
              </script>
</html>