<?php
include("config.php");
if(isset($_POST['input'])){

    $pet_id = $_POST['pet_id'];
    $ownername = $_POST['owner_name'];
    $ownernumber = $_POST['owner_telpnumber'];
    $owneraddress = $_POST['owner_address'];
    $petname = $_POST['pet_name'];
    $breed = $_POST['breed'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];

  $query = pg_query("UPDATE pet SET
                    owner_name = '$ownername',
                    owner_telpnumber = $ownernumber,
                    owner_address = '$owneraddress',
                    pet_name = '$petname',
                    breed = '$breed',
                    gender = '$gender',
                    age = $age 
                    WHERE pet_id = $pet_id");

	if( $query==TRUE ) {
		header('Location: petlist.php');
	} else {
		die("Failed to change the data ...");
	}


} else {
	die("Access denied ...");
}
?>
