<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Habor Resort"/>
		<meta name="author" content="Kelvin Ho"/>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="enhancement.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<title>Habor Resort</title>
	</head>

	<body>
		<header>
			<?php include("include/header.php"); ?>
			<h1>CSS Enhancements</h1><hr/>
		</header>
		
		<section class="enhancement">
			<div class="enhance1">
				<h1>Image Slide Show</h1>
				<p>
					The website utilizes HTML and CSS bullet input types in the use of an image slider. A user can hover each 
					bullet(bar below) to view miniature version of that slide. A simple but effective way to preview upcoming slides.
				</p>
				<label>Link: </label>
				<div class="enhance_link">
					<a href="index.html">Home Page</a>
				</div>

			</div>
			
			<div class="enhance1">
				<h1>Google Maps</h1>
				<p>
					The website goes one step further in customer service by adding Google Maps on our home page. Our location is 
					located on a map that is framed inside a box using an iframe. Using Google Map, a user can select our shop's 
					location and estimate the distance and reach time from their a site of their own choice.
				</p>
				<label>Link: </label>
				<div class="enhance_link">
					<a href="index.html">Home Page</a>
				</div>
			</div>

		</section>

		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>
	
	</body>
</html>