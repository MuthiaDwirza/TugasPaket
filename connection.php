<?php

$host = "localhost";
$user = "postgres";
$pass = "123";
$db = "tugascrud";

$conn = pg_connect("host=$host dbname=$db user=$user password=$pass") or die ("Gagal koneksi ke server\n");

if(!$conn){
    echo "Error : Tidak bisa membuka database\n";
}
?>
