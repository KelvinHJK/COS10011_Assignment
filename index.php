<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Habor Resort"/>
		<meta name="author" content="Kelvin Ho"/>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="enhancement.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<script src="javascript/enhancement.js"></script>
		<title>Habor Resort</title>
	</head>

	<body onload="showSlides(1)">
		<header>
			<?php include("include/header.php"); ?>
		</header>
		
		<!--Slide Show Enhancement-->
		<div class="slideshow_container">
			<div class="slides fade">
				<img src="images/resort.jpg" alt="Habor Resort Overview"/>
				<div class="text">Welcome to Habor Resort</div>
			</div>
			<div class="slides fade">
				<img src="images/view.jpg" alt="Magnificent Scenery"/>
				<div class="text">Magnificent Scenery</div>
			</div>
			<div class="slides fade">
				<img src="images/dining.jpg" alt="Relax and Chill Dining"/>
				<div class="text">Relax and Chill Dining</div>
			</div>
			<div class="slides fade">
				<img src="images/8ball.jpeg" alt="Things to Do"/>
				<div class="text">Things to Do</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>
		</div>

		<div style="text-align:center">
			<span class="slidesdot" onclick="currentSlide(1)"></span>
			<span class="slidesdot" onclick="currentSlide(2)"></span>
			<span class="slidesdot" onclick="currentSlide(3)"></span>
			<span class="slidesdot" onclick="currentSlide(4)"></span>
		</div>

	<!-- Old Slide Show with only HTML and CSS
		<div class="slideshow middle">
		
			<div class="slides">
				<input type="radio" name="r" id="r1" checked="checked"/>
				<input type="radio" name="r" id="r2"/>
				<input type="radio" name="r" id="r3"/>
				<input type="radio" name="r" id="r4"/>
				
				
				
				<div class="slide s1">
					<img src="images/resort.png" alt="Habor Resort Overview"/>
				</div>
				<div class="slide">
					<img src="images/view.png" alt="Magnificent Scenery"/>
				</div>
				<div class="slide">
					<img src="images/dining.png" alt="Relax and Chill Dining"/>
				</div>
				<div class="slide">
					<img src="images/8ball.png" alt="Things to Do"/>
				</div>
			</div>
			
			<div class="navslides">
				<label for="r1" class="bar"></label>
				<label for="r2" class="bar"></label>
				<label for="r3" class="bar"></label>
				<label for="r4" class="bar"></label>
			</div>
		</div>
	-->
		
		
		<section class="center">
			<div class="content">
				<h1>Welcome to Habor Resort</h1>
				<hr/><br/>
				<article>
					<p>As Malaysia's premier integrated property, we are absolutely committed to providing you with an unforgettable experience and first-class accommodation and customer service.
					</p>
					<p><br/>Nestled between the shores of the South China Sea, fronting the tropical islands and the majestic Mount Kinabalu, is the grand expanse of Harbor Resort.
					</p>
					<p><br/>The 384-acre resort provides a spectacular array of activities from its luxurious five-star hotels, championship golf course, 104-berth marina and recreational facilities.
					</p>
					<p><br/>The elegant business setting of The Pacific Sutera Hotel is complemented by the resort ambience of The Magellan Sutera Resort, offering a total of 956 guest rooms and suites of luxurious comfort
					</p>
				</article>
			</div>
			<!--Location Enhancement-->
			<div class="location">
				<h1>Our Location</h1>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15872.767183331229!2d116.04937267657283!3d5.968302171939318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x323b69c3ee5a996b%3A0x516604edb7dd96ec!2sSutera%20Harbour%2C%2088100%20Kota%20Kinabalu%2C%20Sabah!5e0!3m2!1sen!2smy!4v1616470494225!5m2!1sen!2smy" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
			</div>

		</section>
		
		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>

	</body>
</html>