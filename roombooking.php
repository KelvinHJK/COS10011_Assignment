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
		<title>Habor Resort</title>
	</head>

	<body>
		
		<header>
			<?php include("include/header.php"); ?>
			<img src="images/roombooking.jpeg" alt="Resort view"/>
			<h1>Room Details</h1><hr/>
		</header>


		<section class="products">
			<div class="products_content">
				<div class="products_leftsubcontent">
					<img src="images/deluxe_room.jpg" alt="Deluxe Room"/>
					<div class="products_leftsubsubcontent">
						<h2>Deluxe Sea View Room</h2>
						<p>
							The sparkling ocean and tropical islands, the blue water treasures in the ocean park near the edge of the resort, 
							are the deluxe ocean view room's privileges. All ocean-view rooms of the Magellan 5 star luxury resort in Kota Kinabalu 
							will present a modern and elegant appearance, creating a warm and relaxing atmosphere for our guests. At the same time, 
							the balcony faces the island and overlooks the horizon.
						</p>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Room Details - Deluxe Sea View Room', '1')">Enquire now</button>
					</div>
				</div>

				<div class="products_rightsubcontent">
					<img src="images/Executive.jpg" alt="Executive Suite"/>
					<div class="products_rightsubsubcontent">
						<h2>Executive Suite</h2>
						<p>
							The ultimate luxury is extra space and adding to the already luxurious trimming and finishing of The Habor Resort is 
							the spacious Deluxe Suite. In addition to the guest room and bathroom, a living room and dining area make you wish you 
							could make it your permanent home.
						</p><br/><br/><br/><br/>
						<button type="submit" name="button"  class="button_1" onclick="storeitem('Room Details - Executive Suite', '2')">Enquire now</button>
					</div>
				</div>

				<div class="products_leftsubcontent">
					<img src="images/family_room.jpg" alt="Family Room"/>
					<div class="products_leftsubsubcontent">
						<h2>Family Room</h2>
						<p>
							The Family room only accommodates 2 adults and 2 children (below 12 years old) with one king-sized bed and twin beds. 
							Facing the panoramic view of the undulating golf course, this room is fitted with a private toilet and bath with shower 
							and tub, television with satellite channels, coffee/tea facility, hair dryer, complimentary internet access, mini-bar, 
							ironing board, radio, safe, and phone with voicemail.
						</p>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Room Details - Family Room', '3')">Enquire now</button>
					</div>
				</div>

				<div class="products_rightsubcontent">
					<img src="images/presidential.jpg" alt="Presidential Suite"/>
					<div class="products_rightsubsubcontent">
						<h2>Presidential Suite</h2>
						<p>
							Prestigious. Luxurious. Accomplished. Not just the description of the room, but that of the guest who stay in the 
							Habor Resort Presidential Suite. Home away from home of the Prime Minister himself during his visits to Sabah, the 
							Presidential Suite is the pinnacle of a 5-star luxury, reserved for the crest of society.
						</p><br/><br/>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Room Details - Presidential Suite', '4')">Enquire now</button>
					</div>
				</div>
			</div>
			
		</section>

	
		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>

	</body>
</html>