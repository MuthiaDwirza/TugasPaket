<?php
require_once("connection.php");

$id = $_GET['id'];

$sql = "DELETE FROM penghuni
            WHERE id_penghuni = $id";
pg_query($conn, $sql);

header("Location:data-penghuni.php");
?>