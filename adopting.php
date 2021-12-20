<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Adopting</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>Thanks for giving them a second chance</h2>

	<form action="newadopt.php" method="POST">
		<div class="form-group">
			<label for="name">Adopter's Name: </label>
			<input type="text" name="name" placeholder="Adopter's Name" />
        </div>
        <div class="form-group">
			<label for="telpnumber">Adopter's Phone Number: </label>
			<input type="text" name="telpnumber" placeholder="Format : 628..." />
        </div>
		<div class="form-group">
			<label for="address">Adopter's Address: </label>
			<textarea name="address"></textarea>
        </div>
		<div class="form-group">
			<label for="age">Pet ID that wanted to be adopted: </label>
			<input type="text" name="pet_id" placeholder="Just Number" />
        </div>
		<input type="submit" name="input" class="btn btn-primary" value="Adopt!">
	</form>
    </div>
	</body>
</html>
