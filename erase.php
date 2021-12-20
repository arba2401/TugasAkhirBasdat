<?php
include("config.php");
if(isset($_GET['pet_id'])){

    $pet_id = $_GET['pet_id'];

    $query = pg_query("DELETE FROM pet WHERE pet_id = $pet_id");

    if($query){
        header('Location : petlist.php');
    }
    else{
        die("failed to erase ...");
    }
}
else{
    die("access denied ...");
}
    
?>