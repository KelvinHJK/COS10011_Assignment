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
            <h1>PHP Enhancements</h1><hr/>
		</header>

        <section class="enhancement">
			<div class="enhance1">
				<h1>Sorting System</h1>
				<p>
					The website utilizes PHP and MySQL database to do sorting for element export from the database. A user can select 
                    to sort the name showed in ascending order or descending order when viewing the enquiries submissions.
				</p>
				<label>Link: </label>
				<div class="enhance_link">
					<a href="view_enquiries.php">View Enquiries</a>
				</div>

			</div>
			
			<div class="enhance1">
				<h1>Anti Automated Form Spam</h1>
				<p>
					The website create a hidden text input in the form element and check whether is it a bot or a real person that submitting 
                    the comment form, this is because if it is a bot submitting automated form, all fo the input will be filled in including 
                    the hidden ones which should be empty, as if its not empty, the php will stop running.
				</p>
				<label>Link: </label>
				<div class="enhance_link">
					<a href="enquiry.php">Enquiry</a>
				</div>
			</div>

		</section>

		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>
        
    </body>
</html>