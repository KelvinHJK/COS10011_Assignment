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
			<img src="images/food.jfif" alt="Food and Dining"/>
			<h1>Restaurants' Details</h1><hr/>
		</header>

		<section class="products">
			<div class="products_content">
				<div class="products_leftsubcontent">
					<img src="images/alfresco.png" alt="Deluxe Room"/>
					<div class="products_leftsubsubcontent">
						<h2>Al-Fresco</h2>
						<p>
							Situated by the side of a beautifully landscaped sea-view pool, Al Fresco enjoys outdoor dining with spectacular scenery and 
							a relaxing atmosphere. The extensive selection of pasta and seafood dishes and famous wood-fired pizzas are complemented by 
							a lively cocktail menu. This sceneric place is located on Level 1, of The Habor Resort operating daily from 11:00am to 11:00pm; 
							whereas our Sunset Bar is open daily 10:00am to 12:00am.
						</p>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Food and Dining - Al-Fresco', '9')">Enquire now</button>
					</div>
				</div>

				<div class="products_rightsubcontent">
					<img src="images/fivesails.jpg" alt="Five Sails"/>
					<div class="products_rightsubsubcontent">
						<h2>Five Sails</h2>
						<p>
							Buffet dinner at Five Sails is a nice and full affair, loads of interesting gourmets to fill up ones stomach. Five Sails is 
							one of the restaurants at the Habor Resort. Guests get to choose the cool interior air condition room or the open 
							air pool side seating area. Buffets are served daily at breakfast and dinner, except on every Sunday a mid-noon grand lunch 
							time buffet is included.
						</p><br/><br/>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Food and Dining - Five Sails', '10')">Enquire now</button>
					</div>
				</div>

				<div class="products_leftsubcontent">
					<img src="images/tariklounge.jpg" alt="Tarik's Lobby Lounge"/>
					<div class="products_leftsubsubcontent">
						<h2>Tarik's Lobby Lounge</h2>
						<p>
							Tarik’s Lobby Lounge at the farthest end of the vast, magnificent lobby presents panoramic sea views and overlooks the free 
							form swimming pool. Perfect for coffee during the day or a sunset cocktail at night it offers a delicious selection of 
							alcoholic and non-alcoholic beverages, a snack menu and live entertainment at night. Malaysia’s famous pulled tea, 
							the ‘Teh Tarik’, is one of the main attractions at Tarik’s.
						</p><br/>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Food and Dining - Tarik\'s Lobby Lounge', '11')">Enquire now</button>
					</div>
				</div>

				<div class="products_rightsubcontent">
					<img src="images/muffinz.jpg" alt="Muffinz Deli Cafe"/>
					<div class="products_rightsubsubcontent">
						<h2>Muffinz Deli Cafe</h2>
						<p>
							A deli cafe with a seating capacity of 70, both indoor and outdoor, offering an extensive selection of freshly-made 
							sandwiches, garden salads, signature muffins, cakes and refreshing beverages ranging from milk shakes, iced coffees, 
							frappuccinno, coffee and tea.
						</p><br/><br/><br/><br/>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Food and Dining - Muffinz Deli Cafe', '12')">Enquire now</button>
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