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
		<script src="javascript/enhancement.js"></script>
		<title>Habor Resort</title>
	</head>

	<body>
		<header>
			<?php include("include/header.php"); ?>
			<h1>Enquiry</h1><hr/><br/>
		</header>

		<div class="enquiry">
			<form class="enquiry_form" id="enqform" method="post" onsubmit="validateForm()" action="confirm.php" novalidate="novalidate" onsubmit="return transferData()">
				<input type="text" name="empty" class="hidden"/>
				<fieldset>
					<legend>Personal details</legend><br/>
					<label for="fname">First name:</label>
					<input type="text" id="fname" name="fname" placeholder="Your first name" autocomplete="off" required="required" pattern="[A-Za-z]*" maxlength="25"/>*<br/><br/>
					<label for="lname">Last name:</label>
					<input type="text" id="lname" name="lname" placeholder="Your last name" autocomplete="off" required="required" pattern="[A-Za-z]*" maxlength="25"/>*<br/><br/>
					<label for="email">Email:</label>
					<input type="email" id="email" name="email" placeholder="example@email.com" autocomplete="off" required="required"/>*<br/><br/>
				</fieldset>

				<fieldset>
					<legend>Address</legend><br/>
					<label for="street">Street Address:</label>
					<input type="text" id="street" name="street" maxlength="40" required="required"/>*<br/><br/>
					<label for="city">City/Town:</label>
					<input type="text" id="city" name="city" maxlength="20" required="required"/>*<br/><br/>

					<label for="state">State:</label>
						<select name="state" id="state">
							<script>stateList()</script>
							<!--<option value="none" selected="selected">Choose</option>
							<option value="johor">Johor</option>
							<option value="kedah">Kedah</option>
							<option value="kelantan">Kelantan</option>
							<option value="kualalumpur">Kuala Lumpur</option>
							<option value="labuan">Labuan</option>
							<option value="malacca">Malacca</option>
							<option value="negerisembilan">Negeri Sembilan</option>
							<option value="pahang">Pahang</option>
							<option value="penang">Penang</option>
							<option value="perak">Perak</option>
							<option value="perlis">Perlis</option>
							<option value="putrajaya">Putrajaya</option>
							<option value="sabah">Sabah</option>
							<option value="sarawak">Sarawak</option>
							<option value="selangor">Selangor</option>
							<option value="terengganu">Terengganu</option>
							<option value="other">other</option>-->
						</select>*<br/><br/>
					
					<label for="postcode">Postcode:</label>
					<input type="text" id="postcode" name="postcode" pattern="[0-9]*" maxlength="5" placeholder="#####" required="required"/>*<br/><br/>
				</fieldset>
				
				<fieldset>
					<legend>Enquiry</legend><br/>
					<label for="phoneNo">Enter your phone number:</label>
					<input type="tel" id="phoneNo" name="phoneNo" placeholder="0123456789" pattern="[0-9]*" maxlength="10" required="required"/>*<br/><br/>
					
					<label for="enquireabout">What are you looking for: </label>
					<select name="service" id="enquireabout" onchange="change()">
						<option value="none" selected="selected">Choose</option>
						<optgroup label="Room Details">
							<script>enqAboutRoomList()</script>
							<!--<option value="Room Details - Deluxe Sea View Room">Room Details - Deluxe Sea View Room</option>
							<option value="Room Details - Executive Suite">Room Details - Executive Suite</option>
							<option value="Room Details - Family Room">Room Details - Family Room</option>
							<option value="Room Details - Presidential Suite">Room Details - Presidential Suite</option>-->
						</optgroup>

						<optgroup label="Facilities">
							<script>enqAboutFaciList()</script>
							<!--<option value="Facilities - Fitness Centre">Facilities - Fitness Centre</option>
							<option value="Facilities - Swimming Pools">Facilities - Swimming Pools</option>
							<option value="Facilities - Private Beach and Water Activities">Facilities - Private Beach and Water Activities</option>
							<option value="Facilities - Kids Club">Facilities - Kids Club</option>-->
						</optgroup>

						<optgroup label="Food and Dining">
							<script>enqAboutFoodList()</script>
							<!--<option value="Food and Dining - Al-Fresco">Food and Dining - Al-Fresco</option>
							<option value="Food and Dining - Five Sails">Food and Dining - Five Sails</option>
							<option value="Food and Dining - Tarik's Lobby Lounge">Food and Dining - Tarik's Lobby Lounge</option>
							<option value="Food and Dining - Muffinz Deli Cafe">Food and Dining - Muffinz Deli Cafe</option>-->
						</optgroup>

						<optgroup label="Services and Convenience">
							<script>enqAboutServicesList()</script>
							<!--<option value="Services and Convenience - Cash withdrawal">Services and Convenience - Cash withdrawal</option>
							<option value="Services and Convenience - Contactless Check-in/out">Services and Convenience - Contactless Check-in/out</option>
							<option value="Services and Convenience - Currency Exchange">Services and Convenience - Currency Exchange</option>
							<option value="Services and Convenience - Doorman">Services and Convenience - Doorman</option>
							<option value="Services and Convenience - Fire place">Services and Convenience - Fire place</option>
							<option value="Services and Convenience - 24 hours front desk">Services and Convenience - 24 hours front desk</option>
							<option value="Services and Convenience - Gift/Souvenir shop">Services and Convenience - Gift/Souvenir shop</option>
							<option value="Services and Convenience - Internet Access">Services and Convenience - Internet Access</option>
							<option value="Services and Convenience - Laundry service">Services and Convenience - Laundry service</option>
							<option value="Services and Convenience - Multilanguage">Services and Convenience - Multilanguage</option>
							<option value="Services and Convenience - Taxi service">Services and Convenience - Taxi service</option>
							<option value="Services and Convenience - Wheel Chair Accessible">Services and Convenience - Wheel Chair Accessible</option>-->
						</optgroup>

						<option value="Disclaimer">Disclaimer</option>
						<option value="others">others</option>
					</select><br/><br/>

					<label for="subject" id="subjectLabel">Subject:</label>
					<input type="text" name="subject" id="subject" size="50"/><br/><br/>

					<label for="comments">Comments:</label><br/>
					<textarea name="comments" id="comments" rows="5"></textarea><br/><br/>
				</fieldset><br/>

				<button class="btn1" type="submit" value="Submit">Submit</button>
				<button class="btn2" type="reset" value="Reset">Reset</button>

			</form>
		</div>

		
		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>

	</body>
</html>