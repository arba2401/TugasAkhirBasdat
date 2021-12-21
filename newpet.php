<!DOCTYPE html>
<html>
<head>
	<title>New Pet</title>
	<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
	<!--nav-->
  <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="#">
          <i class="fad fa-paw"></i> 
          Adoption Center 
          <i class="fad fa-paw"></i></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarText"
          aria-controls="navbarText"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
	
    <div class="container text-center bg-light">
		<h2 class="display-4">Register The Pet You Find <i class="fad fa-paw"></i></h2>
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
