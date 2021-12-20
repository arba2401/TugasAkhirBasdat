<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Adoption Center</title>
</head>

<body>
	<header>
		<h3>List of pet in our care</h3>
	</header>

	<br>

	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Owner's Name</th>
			<th>Owner's Phone Number</th>
			<th>Owner's Address</th>
			<th>Pet's Name</th>
			<th>Breed</th>
            <th>Gender</th>
            <th>Age</th>
            <th colspan="2">action</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = pg_query("SELECT * FROM pet");
		// $query = mysqli_query($db, $sql);


		while($hewan = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$hewan['pet_id']."</td>";
			echo "<td>".$hewan['owner_name']."</td>";
			echo "<td>".$hewan['owner_telpnumber']."</td>";
			echo "<td>".$hewan['owner_address']."</td>";
			echo "<td>".$hewan['pet_name']."</td>";
            echo "<td>".$hewan['breed']."</td>";
            echo "<td>".$hewan['gender']."</td>";
            echo "<td>".$hewan['age']."</td>";

			echo "<td>";
			echo "<a href='erase.php?id=".$hewan['pet_id']."'>Erase</a>";
			echo "</td>";
			
			echo "<td>";
			echo "<a href='formedit.php?id=".$hewan['pet_id']."'>Edit</a>";
			echo "</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<p>Total pet available: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>
