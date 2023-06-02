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
			<h1>About Me</h1><hr/><br/>
		</header>

		<div class="aboutme">
			<img src="images/about_me.jpg" alt="about me"/>
			<div class="demoinfo">
				<br/><br/><h2>Name: <span class="aboutname">Kelvin Ho Juin Ket</span></h2><br/>
				<h3>Student ID: <span class="aboutid">101234677</span></h3><br/>
				<h3>Course: <span class="aboutcourse">Bachelor of Computer Science</span></h3><br/>
				<h4>Other demographic Information:</h4>
				<p>
					Kelvin Ho is a 19-years-old Chinese Sabahan. He is currently enrolled in his first year 
					of Degree studies in the Computer Science course at the Swinburne University of Technology 
					Sarawak. He likes to spend his free time playing games and going to outdoor activities 
					such as basketball and badminton. 
				</p>
			</div>

			<table class="about_table">
				<tr>
					<th>Name</th>
					<td>Kelvin Ho Juin Ket</td>
				</tr>
				<tr>
					<th>Student ID</th>
					<td>101234677</td>
				</tr>
				<tr>
					<th>Hometown</th>
					<td>Kota Kinabalu, Sabah</td>
				</tr>
				<tr>
					<th rowspan="3">Hobbies</th>
					<td>Gaming</td>
				</tr>
				<tr>
					<td>Badminton</td>
				</tr>
				<tr>
					<td>Basketball</td>
				</tr>
			</table>

		</div>

		
		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>
		
	</body>
</html>