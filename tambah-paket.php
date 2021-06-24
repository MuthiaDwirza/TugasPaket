<?php
require_once("connection.php");

$id_paket = $_POST['id-paket'];
$isi = $_POST['isi-paket'];
$id_penghuni = $_POST['id-penghuni'];

$tanggal = $_POST['tanggal-terima'];
$tanggal = strtotime($tanggal);
$tanggal = date("Y/m/d", $tanggal);

$sql = "INSERT INTO paket(
	        id_paket, isi_paket, tanggal_terima, id_penghuni)
	        VALUES ($id_paket, '$isi', '$tanggal', $id_penghuni)";

pg_query($conn, $sql);
header("Location:data-paket.php");

?>