<?php
include("config.php");
$pet_id = $_GET["pet_id"];
$query = pg_query("SELECT * FROM pet WHERE pet_id = $pet_id");
$edit = pg_fetch_assoc($query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>New Pet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<h2>Edit Data of The Pet That You Find</h2>

	<form action="editing.php" method="POST">
        <input type="hidden" name="pet_id" value="<?= $edit["pet_id"]; ?>"/>
		<div class="form-group">
			<label for="owner_name">Owner's Name: </label>
			<input type="text" name="owner_name" placeholder="Owner's Name" value="<?= $edit["owner_name"]; ?>" />
        </div>
        <div class="form-group">
			<label for="owner_telpnumber">Owner's Phone Number: </label>
			<input type="text" name="owner_telpnumber" placeholder="Format : 628..." value="<?= $edit["owner_telpnumber"]; ?>"/>
        </div>
		<div class="form-group">
			<label for="owner_address">Owner's Address: </label>
			<textarea name="owner_address"><?php echo $edit["owner_address"];?></textarea>
        </div>
        <div class="form-group">
			<label for="pet_name">Pet's Name: </label>
			<input type="text" name="pet_name" placeholder="Pet's Name" value="<?= $edit["pet_name"]; ?>"/>
        </div>
        <div class="form-group">
			<label for="breed">Breed: </label>
			<input type="text" name="breed" placeholder="Cat Persia/Dog Bulldog etc." value="<?= $edit["breed"]; ?>"/>
        </div>
		<div class="form-group">
			<label for="gender">Gender: </label>
			<label><input type="radio" name="gender" value="Male"<?= ($edit["gender"]=='Male')?'checked':''; ?>> Male</label>
			<label><input type="radio" name="gender" value="Female"<?= ($edit["gender"]=='Female')?'checked':''; ?>> Female</label>
        </div>
		<div class="form-group">
			<label for="age">Age (in years): </label>
			<input type="text" name="age" placeholder="Just Number" value="<?= $edit["age"]; ?>"/>
        </div>
		<input type="submit" name="input" class="btn btn-primary" value="Edit">
	</form>
    </div>
	</body>
</html>
