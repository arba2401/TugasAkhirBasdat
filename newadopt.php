<?php
include("config.php");

if(isset($_POST['input'])){

    $name = $_POST['name'];
    $number = $_POST['telpnumber'];
    $address = $_POST['address'];
    $pet_id = $_POST['pet_id'];
 
  $query = pg_query("INSERT INTO adopter (name, telpnumber, address) VALUES ('$name', $number, '$address')");
  $query = pg_query("SELECT * FROM pet WHERE pet_id = $pet_id");
  $cacah = pg_fetch_assoc($query);
  $query = pg_query("SELECT * FROM adopter WHERE address = '$address'");
  $pecah = pg_fetch_assoc($query);
  echo($cacah["pet_id"]);
//   echo($pecah["adopter_id"]);
  $query = pg_query("INSERT INTO certificate (pet_id, adopter_id) VALUES ($cacah['pet_id'], $pecah['adopter_id'])");
//   $query = pg_query("SELECT * FROM certificate WHERE pet_id = $pet_id");
//   $cacah = pg_fetch_assoc($query);
//   $query = pg_query("INSERT INTO history (certificate_id, pet_name, breed, gender, age) VALUES ($cacah["certificate_id"],'$cacah["pet_name"]', '$cacah["breed"]', '$cacah["gender"]', $cacah["age"])");
 


	// if( $query==TRUE  ) {
	// 	header('Location: history.php?status=success');
	// } else {
	// 	header('Location: history.php?status=failed');
	// }


} else {
	die("Access forbidden ...");
}
?>
