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
		<h2>Register The Pet You Find</h2>

	<form action="register.php" method="POST">
		<div class="form-group">
			<label for="owner_name">Owner's Name: </label>
			<input type="text" name="owner_name" placeholder="Owner's Name" />
        </div>
        <div class="form-group">
			<label for="owner_telpnumber">Owner's Phone Number: </label>
			<input type="text" name="owner_telpnumber" placeholder="Format : 628..." />
        </div>
		<div class="form-group">
			<label for="owner_address">Owner's Address: </label>
			<textarea name="owner_address"></textarea>
        </div>
        <div class="form-group">
			<label for="pet_name">Pet's Name: </label>
			<input type="text" name="pet_name" placeholder="Pet's Name" />
        </div>
        <div class="form-group">
			<label for="breed">Breed: </label>
			<input type="text" name="breed" placeholder="Cat Persia/Dog Bulldog etc." />
        </div>
		<div class="form-group">
			<label for="gender">Gender: </label>
			<label><input type="radio" name="gender" value="Male"> Male</label>
			<label><input type="radio" name="gender" value="Female"> Female</label>
        </div>
		<div class="form-group">
			<label for="age">Age (in years): </label>
			<input type="text" name="age" placeholder="Just Number" />
        </div>
		<input type="submit" name="input" class="btn btn-primary" value="Register">
	</form>
    </div>
	</body>
</html>
