<?php
require_once("connection.php");

$id = $_POST['id-penghuni'];
$nama = $_POST['nama-penghuni'];
$nomor = $_POST['nomor-kamar'];

$sql = "UPDATE penghuni
        SET nama_penghuni='$nama', nomor_kamar='$nomor'
        WHERE id_penghuni=$id";
pg_query($conn, $sql);

header("Location:data-penghuni.php");
?>