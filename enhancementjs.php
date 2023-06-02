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
			<h1>JavaScript Enhancements</h1><hr/>
		</header>
		
		<section class="enhancement">
			<div class="enhance1">
				<h1>Image Slide Show</h1>
				<p>
					The website utilizes JavaScript's index in the use of an image slider. Also, the website used fade effect whenever next image is shown. 
                    A user can hover each bullet (dots below) to view miniature version of that slide. A simple but effective way to preview upcoming slides.
				</p><br/>
				<label>Link: </label>
				<div class="enhance_link">
					<a href="index.html">Home Page</a>
				</div>

			</div>
			
			<div class="enhance1">
				<h1>Enquiry Form Submission Confirmation</h1>
				<p>
					The website utilizes javascript's window.confirm in the use to make confirmation on information typed in enquiry form. The pop-up box 
					shows the user's name, email and phone number for the user to do last checking.
				</p><br/>
				<label>Link: </label>
				<div class="enhance_link">
					<a href="enquiry.html">Enquiry Page</a>
				</div>
			</div>

		</section>

		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>
	
	</body>
</html>