<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Aplikasi Paket Asrama</title>
  </head>
  <body>
  <div class="continer-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Paket Asrama</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Form Paket </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data-paket.php">Data Paket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="data-penghuni.php">Data Penghuni</a>
      </li>
    </ul>
  </div>
    </nav>
  </div>
<?php
require_once("connection.php");

$id = $_GET['id'];
$sql = "SELECT * FROM penghuni
            WHERE id_penghuni = $id";
$result = pg_query($conn, $sql);
$row = pg_fetch_assoc($result);

?>
<div class="container-fluid isi">
    <div class="row">
        <div class="col-sm-12">
            <p class="h3 text-center">Form Tambah Penghuni</p>
        </div>
    </div>
    <hr>
    <div class="row isi">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
        <form action="ubah-data-penghuni.php" method="POST">
            <div class="form-group">
                <label for="id-penghuni">ID Penghuni</label>
                <input type="text" class="form-control" id="id-penghuni" name="id-penghuni" value="<?php echo $row['id_penghuni']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama-penghuni">Nama Penghuni</label>
                <input type="text" class="form-control" id="nama-penghuni" name="nama-penghuni" value="<?php echo $row['nama_penghuni']; ?>">
            </div>
            <div class="form-group">
                <label for="nomor-kamar">Nomor Kamar</label>
                <input type="text" class="form-control" id="id-nomor-kamar" name="nomor-kamar" value="<?php echo $row['nomor_kamar']; ?>">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
<br>
<div class="card-footer text-muted text-center">
    <small>Tugas-CRUD-6701194125</small>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>