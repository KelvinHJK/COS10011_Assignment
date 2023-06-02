<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8"/>
		<meta name="description" content="Habor Resort"/>
		<meta name="author" content="Kelvin Ho"/>
		<link rel="stylesheet" href="style.css"/>
		<link rel="stylesheet" href="enhancement.css"/>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<script src="javascript/script.js"></script>
		<script src="javascript/confirm.js"></script>
		<title>Habor Resort</title>
	</head>

    <body>
		<header>
			<?php include("include/header.php"); ?>
			<h1>Enquiry</h1><hr/><br/>
		</header>

        <?php
		if(isset($_POST['empty']) && !empty($_POST['empty'])){
			die("Automated form spam detected.");
		}
            $fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$email = $_POST['email'];
			$street = $_POST['street'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$postcode = $_POST['postcode'];
			$phoneno = $_POST['phoneNo'];
			$service = $_POST['service'];
			$subject = $_POST['subject'];
			$comments = $_POST['comments'];
        ?>

		<div class="confirm_enq">
			<form class="confirm_form" id="confirmform" method="post" action="process.php">
				
					<input type="hidden" name="ifname" value="<?php echo $fname; ?>"/>
					<input type="hidden" name="ilname" value="<?php echo $lname; ?>"/>
					<input type="hidden" name="iemail" value="<?php echo $email; ?>"/>
					<input type="hidden" name="istreet" value="<?php echo $street; ?>"/>
					<input type="hidden" name="icity" value="<?php echo $city; ?>"/>
					<input type="hidden" name="istate" value="<?php echo $state; ?>"/>
					<input type="hidden" name="ipostcode" value="<?php echo $postcode; ?>"/>
					<input type="hidden" name="iphoneno" value="<?php echo $phoneno; ?>"/>
					<input type="hidden" name="iservice" value="<?php echo $service; ?>"/>
					<input type="hidden" name="isubject" value="<?php echo $subject; ?>"/>
					<input type="hidden" name="icomments" value="<?php echo $comments; ?>"/>

					<h1>Confirm Submission:</h1>
					<br/>
					<p><strong>First name: </strong><?php echo $fname; ?></p>
					<p><strong>Last name: </strong><?php echo $lname; ?></p>
					<p><strong>Email: </strong><?php echo $email; ?></p>
					<br/>
					<p><strong>Street Address: </strong><?php echo $street; ?></p>
					<p><strong>City: </strong><?php echo $city; ?></p>
					<p><strong>State: </strong><?php echo $state; ?></p>
					<p><strong>Postcode: </strong><?php echo $postcode; ?></p>
					<p><strong>Phone No: </strong><?php echo $phoneno; ?></p>
					<br/>
					<p><strong>Service selected: </strong><?php echo $service; ?></p>
					<p><strong>Subject: </strong><?php echo $subject; ?></p>
					<p><strong>Comments: </strong><?php echo $comments; ?></p>
					<br/>

					<input type="submit" value="Confirm Submit"/>
					<input type="button" value="Cancel" id="cancelButton" onclick="cancelBooking()"/>



			</form>
		</div>

		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>
    </body>
</html>