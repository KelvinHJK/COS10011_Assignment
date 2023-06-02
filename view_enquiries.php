<?php

// Ascending Order
if(isset($_POST['asc']))
{
    $asc_query = "SELECT * FROM EnquiryForm ORDER BY fname ASC";
    $result = executeQuery($asc_query);
}

// Descending Order
elseif (isset ($_POST['desc'])) 
    {
          $desc_query = "SELECT * FROM EnquiryForm ORDER BY fname DESC";
          $result = executeQuery($desc_query);
    }
    
    // Default Order
else {
        $default_query = "SELECT * FROM EnquiryForm";
        $result = executeQuery($default_query);
}

function executeQuery($query)
{
    $connect = mysqli_connect("localhost", "root", "", "Habordb");
    $result = mysqli_query($connect, $query);
    return $result;
}

?>

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
			<h1>Enquiry Submissions</h1><hr/><br/>
		</header>

        <form class="view_enq" action="view_enquiries.php" method="post">
			<p> Arrange name in
			<input id="arrangeButton" type="submit" name="asc" value="Ascending"> /
			<input id="arrangeButton" type="submit" name="desc" value="Descending">
			order.</p>

			<table>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Address</th>
					<th>Phone No</th>
					<th>Comments</th>
				</tr>
				
				<!--Normal SELECT-->
				<?php
				/*$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "Habordb";

				$conn = mysqli_connect($servername, $username, $password, $dbname);
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				$sqlselect = "SELECT id, fname, lname, email, street, city, state_, postcode, phoneno, service_, subject_, comments FROM EnquiryForm";
				$result = $conn->query($sqlselect);

				if ($result->num_rows > 0) {
					echo "<table><tr><th>ID</th><th>Name</th><th>email</th><th>Address</th><th>Phone No</th><th>Comments</th></tr>";
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row["id"]. "</td><td>" . $row["fname"]. " " . $row["lname"]. "</td><td>" . $row["email"]. "</td><td>" . $row["street"]. "<br/>" . $row["city"]."<br/>" . $row["state_"] . " " . $row["postcode"]. "</td><td>" . $row["phoneno"]. "</td><td>" . $row["subject_"]. "<br/>*****************************************<br/>". $row["comments"]."</td></tr>";
					}
					echo "</table>";
				} else {
					echo "0 results";
				}

				mysqli_close($conn);*/
				?>

				<!--SELECT with sorting system-->
				<?php while ($row = mysqli_fetch_array($result)):?>
                <tr>
                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1] . " " . $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[4] . "<br/>" . $row[5] ."<br/>" . $row[6] . " " . $row[7]; ?></td>
					<td><?php echo $row[8];?></td>
					<td><?php echo $row[10]. "<br/>*****************************************<br/>". $row[11];?></td>
                </tr>
                <?php endwhile;?>
			</table>
        
        </form>

        <!--Footer-->
        <footer>
			<?php include("include/footer.php"); ?>
		</footer>


    </body>
</html>