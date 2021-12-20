<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Adoption Center</title>
</head>

<body>
	<header>
		<h3>List of pet that have found a new family</h3>
	</header>

	<br>

	<table border=2>
	<thead>
		<tr>
			<th>No</th>
			<th>Certificate ID</th>
			<th>Pet's Name</th>
			<th>Breed</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Time Adopted</th>
		</tr>
	</thead>
	<tbody>

		<?php
		$query = pg_query("SELECT * FROM history");

		while($hewan = pg_fetch_array($query)){
			echo "<tr>";

			echo "<td>".$hewan['history_id']."</td>";
			echo "<td>".$hewan['certificate_id']."</td>";
			echo "<td>".$hewan['pet_name']."</td>";
            echo "<td>".$hewan['breed']."</td>";
            echo "<td>".$hewan['gender']."</td>";
            echo "<td>".$hewan['age']."</td>";
            echo "<td>".$hewan['timestamps']."</td>";

			echo "</tr>";

			}


		?>

	</tbody>
	</table>

	<p>Total pet adopted: <?php echo pg_num_rows($query) ?></p>

	</body>
</html>
