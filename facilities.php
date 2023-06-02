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
			<img src="images/facilities.png" alt="Facilities"/>
			<h1>Facilities</h1><hr/>
		</header>

		<section class="products">
			<div class="products_content">
				<div class="products_leftsubcontent">
					<img src="images/fitness.jpg" alt="Fitness Centre"/>
					<div class="products_leftsubsubcontent">
						<h2>Fitness Centre</h2>
						<p>
							Fitness Centre at The Habor Resort comes equipped with work stations, treadmills and free weights. The Fitness Center is a 
							health, recreational, and social facility geared towards exercise, sports, and other physical activities. It may be a 
							for-profit commercial facility or a community- or institutionally-supported center. A successful facility will accommodate 
							both the serious athlete and the casual recreational user.
						</p>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Facilities - Fitness Centre', '5')">Enquire now</button>
					</div>
				</div>

				<div class="products_rightsubcontent">
					<img src="images/pool.jpg" alt="Swimming Pool"/>
					<div class="products_rightsubsubcontent">
						<h2>Swimming Pools</h2>
						<p>
							The swimming pools at our hotels are beautifully landscaped and surrounded by greenery, flowers and palm trees alongside 
							white, sandy beaches overlooking the South China Sea and the tropical islands nearby. The free form pools and Olympic sized 
							lap pool at the Marina  commands fabulous views of the entire resort and all the yachts. Our pools are accessible to guests 
							of all ages and are patrolled by experienced and friendly life guards. 
						</p>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Facilities - Swimming Pools', '6')">Enquire now</button>
					</div>
				</div>

				<div class="products_leftsubcontent">
					<img src="images/beach.jpg" alt="Private Beach"/>
					<div class="products_leftsubsubcontent">
						<h2>Private Beach and Water Activities</h2>
						<p>
							The Pacific Sutera Hotel enjoys a private and exclusive beach front area overlooking the South China Sea and its tropical 
							islands of Tunku Abdul Rahman Marine Park. A great spot to enjoy a favourite drink in hand while catching the majestic 
							sunset while on holiday in Kota Kinabalu, Sabah. For your convenience, there is a well-known company, SeaQuest Tours, located 
							at our marina jetty which provides island hopping packages, snorkelling and diving trips, as well as water sports such as 
							jet-skiing and more, all at an additional charge. 
						</p>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Facilities - Private Beach and Water Activities', '7')">Enquire now</button>
					</div>
				</div>

				<div class="products_rightsubcontent">
					<img src="images/playground.jpg" alt="Kids' Playground"/>
					<div class="products_rightsubsubcontent">
						<h2>Kids Club</h2>
						<p>
							The kids club was great for smaller kids but they do need to be four years to be left without a parent. On one rainy day I 
							took him in and he had a great time making cookies which he got to take and share with the older kids! Besides the kids 
							club there is a playground just outside the kids club and next to the kids pool, a giant inflatable waterslide that they 
							set up each day at the main pool, games around the pool like Angry Birds aswell as a bowling lane over at the marina which 
							is between the two hotels!
						</p>
						<button type="submit" name="button" class="button_1" onclick="storeitem('Facilities - Kids Club', '8')">Enquire now</button>
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