<?php
$db=pg_connect('host=localhost dbname=tugasakhirbasdat user=postgres password=rafli123');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
