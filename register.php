<?php
include("config.php");

if(isset($_POST['input'])){

    $ownername = $_POST['owner_name'];
    $ownernumber = $_POST['owner_telpnumber'];
    $owneraddress = $_POST['owner_address'];
    $petname = $_POST['pet_name'];
    $breed = $_POST['breed'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
 
  $query = pg_query("INSERT INTO pet (owner_name, owner_telpnumber, owner_address, pet_name, breed, gender, age) VALUEs ('$ownername', $ownernumber, '$owneraddress', '$petname', '$breed', '$gender', $age)");

	if( $query==TRUE ) {
		header('Location: petlist.php?status=success');
	} else {
		header('Location: petlist.php?status=failed');
	}


} else {
	die("Access forbidden ...");
}
?>
