<?php

require_once("connection.php");

$id = $_POST['id-penghuni'];
$nama = $_POST['nama-penghuni'];
$nomor = $_POST['nomor-kamar'];

$sql = "INSERT INTO penghuni(
	        id_penghuni, nama_penghuni, nomor_kamar)
	        VALUES ($id, '$nama', '$nomor')";
pg_query($conn, $sql);
header("Location:data-penghuni.php");

?>