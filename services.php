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
			<img src="images/services.png" alt="Resort view"/>
			<h1>Services and Conveniences</h1><hr/>
		</header>
		
		<section class="products">
			<div class="products_content">
				<table class="services_table">
					<caption>Press any box above to enquire now</caption>
					
					<tr>
						<td class="table_left">
							<a onclick="storeitem('Services and Convenience - Cash withdrawal', '13')">
								<h3>Cash withdrawal <i class="fa fa-credit-card" aria-hidden="true"></i></h3>
								<p>Cash withdrawn at the ATM machine</p>
							</a>
						</td>
						<td>
							<a onclick="storeitem('Services and Convenience - Contactless Check-in/out', '14')">
								<h3><i class="fa fa-check-square-o" aria-hidden="true"></i> Contactless Check-in/out</h3>
								<p>Check in/out with our website online</p>
							</a>
						</td>
					</tr>
					<tr>
						<td class="table_left">
							<a onclick="storeitem('Services and Convenience - Currency Exchange', '15')">
								<h3>Currency Exchange <i class="fa fa-usd" aria-hidden="true"></i></h3>
								<p>Currency Exchange from any dollar</p>
							</a>
						</td>
						<td>
							<a onclick="storeitem('Services and Convenience - Doorman', '16')">
								<h3><i class="fa fa-male" aria-hidden="true"></i> Doorman</h3>
								<p>Doorman/Security 24-hours</p>
							</a>
						</td>

					</tr>
					<tr>
						<td class="table_left">
							<a onclick="storeitem('Services and Convenience - Fire place', '17')">
								<h3>Fire place <i class="fa fa-free-code-camp" aria-hidden="true"></i></h3>
								<p>Modern fireplaces vary in heat efficiency</p>
							</a>
						</td>
						<td>
							<a onclick="storeitem('Services and Convenience - 24 hours front desk', '18')">
								<h3><i class="fa fa-handshake-o" aria-hidden="true"></i> 24 hours front desk</h3>
								<p>24-hours front desk online for you</p>
							</a>
						</td>
					</tr>
					<tr>
						<td class="table_left">
							<a onclick="storeitem('Services and Convenience - Gift/Souvenir shop', '19')">
								<h3>Gift/Souvenir shop <i class="fa fa-gift" aria-hidden="true"></i></h3>
								<p>Meant to be a reminder of coming Sabah</p>
							</a>
						</td>
						<td>
							<a onclick="storeitem('Services and Convenience - Internet Access', '20')">
								<h3><i class="fa fa-wifi" aria-hidden="true"></i> Internet Access</h3>
								<p>Internet access throughout the Resort</p>
							</a>
						</td>
					</tr>
					<tr>
						<td class="table_left">
							<a onclick="storeitem('Services and Convenience - Laundry service', '21')">
								<h3>Laundry service <img src="images/laundry.png" alt="Laundry icon"/></h3>
								<p>Laundry/Dry Cleaning services provided</p>
							</a>
						</td>
						<td>
							<a onclick="storeitem('Services and Convenience - Multilanguage', '22')">
								<h3><i class="fa fa-language" aria-hidden="true"></i> Multilanguage</h3>
								<p>Come with any language</p>
							</a>
						</td>
					</tr>
					<tr>
						<td class="table_left">
							<a onclick="storeitem('Services and Convenience - Taxi service', '23')">
								<h3>Taxi service <i class="fa fa-taxi" aria-hidden="true"></i></h3>
								<p>Taxi/Grab easily accessed</p>
							</a>
						</td>
						<td>
							<a onclick="storeitem('Services and Convenience - Wheel Chair Accessible', '24')">
								<h3><i class="fa fa-wheelchair" aria-hidden="true"></i> Wheel Chair Accessible</h3>
								<p>Facilities for disabled people</p>
							</a>
						</td>
					</tr>
				</table>
			</div>		
		</section>

		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>

	</body>
</html>