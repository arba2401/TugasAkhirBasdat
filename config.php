<?php
$db=pg_connect('host=localhost dbname=tugasakhirbasdat user=postgres password=iostreamaja');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
