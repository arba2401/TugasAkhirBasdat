<?php
include("config.php");

if(isset($_POST['input'])){

    $name = $_POST['name'];
    $number = $_POST['telpnumber'];
    $address = $_POST['address'];
    $pet_id = $_POST['pet_id'];
  
    $query0 = pg_query("SELECT * FROM pet WHERE pet_id = $pet_id");
     $saringan =  pg_fetch_assoc($query0);
    $filter = $saringan["state"];
    if($filter == 't'){
        echo("Already Adopted!");
     }
    else{
    $query = pg_query("UPDATE pet SET state = 't' WHERE pet_id = $pet_id");
    $query1 = pg_query("INSERT INTO adopter (name, telpnumber, address) VALUES ('$name', $number, '$address')");
    $query2 = pg_query("SELECT * FROM adopter WHERE address = '$address'");
    $pecah = pg_fetch_assoc($query2);
    $telaah = $pecah['adopter_id'];
    $query3 = pg_query("INSERT INTO certificate (pet_id, adopter_id) VALUES ($pet_id, $telaah)");
    $query4 = pg_query("SELECT * FROM certificate WHERE pet_id = $pet_id");
    $cacah = pg_fetch_assoc($query4);
    $query5 = pg_query("SELECT * FROM pet WHERE pet_id = $pet_id");
    $gancah = pg_fetch_assoc($query5);
    $sertif = $cacah['certificate_id']; $nama = $gancah["pet_name"]; $spesies = $gancah["breed"]; $gender = $gancah["gender"]; $umur = $gancah["age"];
    $query6 = pg_query("INSERT INTO history (certificate_id, pet_name, breed, gender, age) VALUES ($sertif, '$nama', '$spesies', '$gender', $umur)");

    	if( $query==TRUE && $query0==TRUE && $query1==TRUE && $query2==TRUE && $query3==TRUE && $query4==TRUE && $query5==TRUE && $query6==TRUE) {
	    	header('Location: history.php?status=success');
    	} else {
	    	header('Location: history.php?status=failed');
	    }
    }

} else {
	die("Access forbidden ...");
}
?>
