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
			<h1>Enquiry</h1><hr/><br/>
		</header>

		<div class="done_comment">
			<h1>Comment Submitted</h1>
			<h2>We highly appreciate your comments about our resort.</h2>
			<h3>Have a Nice Day!!! ^^</h3>
			<img src="images/groot_dance.gif" alt="Dancing Groot">
		</div>
		
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "Habordb";

			$fname = $_POST['ifname'];
			$lname = $_POST['ilname'];
			$email = $_POST['iemail'];
			$street = $_POST['istreet'];
			$city = $_POST['icity'];
			$state = $_POST['istate'];
			$postcode = $_POST['ipostcode'];
			$phoneno = $_POST['iphoneno'];
			$service = $_POST['iservice'];
			$subject = $_POST['isubject'];
			$comments = $_POST['icomments'];
			

			$server_conn = mysqli_connect($servername, $username, $password);
			if (!$server_conn){
				die("Server connection failed: " . mysql_connect_error());
			}

			$sqldb = "CREATE DATABASE IF NOT EXISTS $dbname";
			if (!mysqli_query($server_conn, $sqldb)){
				echo " Error creating database: " . mysqli_error($server_conn);
			}

			mysqli_close($server_conn);

			$db_conn = mysqli_connect($servername, $username, $password, $dbname);
			if (!$db_conn){
				die("Database connection failed: ". mysqli_connect_error());
			}

			$sqltable = "CREATE TABLE IF NOT EXISTS EnquiryForm (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				fname VARCHAR(25) NOT NULL,
				lname VARCHAR(25) NOT NULL,
				email VARCHAR(50) NOT NULL,
				street VARCHAR(50) NOT NULL,
				city VARCHAR(30) NOT NULL,
				state_ VARCHAR(30) NOT NULL,
				postcode INT(5) NOT NULL,
				phoneno INT(10) NOT NULL,
				service_ INT(100) NOT NULL,
				subject_ VARCHAR(100) NOT NULL,
				comments VARCHAR(1000) NOT NULL,
				req_date TIMESTAMP
				)"; 
			
			if (!mysqli_query($db_conn, $sqltable)){
				echo "Error creating table: " . mysqli_error($db_conn);
			} 

			$sqlinsert = "INSERT INTO EnquiryForm (fname, lname, email, street, city, state_, postcode, phoneno, service_, subject_, comments)
			VALUES ('$fname', '$lname', '$email', '$street', '$city', '$state', '$postcode', '$phoneno', '$service', '$subject', '$comments')";

			if (!mysqli_query($db_conn, $sqlinsert)){
				echo "Error: ". $sqlinsert . "<br>" . mysqli_error($db_conn);
			}

			mysqli_close($db_conn);


		?>



		<!--Footer-->
		<footer>
			<?php include("include/footer.php"); ?>
		</footer>

        
    </body>
</html>