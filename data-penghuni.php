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

<div class="container-fluid isi">
    <div class="row">
        <div class="col-sm">
            <p class="h3 text-center">Data Penghuni Asrama</p>
        </div>
    </div>
    <hr>
    <div class="row isi">
      <div class="col-sm-1"></div>
      <div class="col-sm-11">
        <a href="tambah-penghuni.php"><button type="button" class="btn btn-success">Tambah</button></a>
      </div>
    </div>
    
    <div class="row isi">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">ID Penghuni</th>
                <th scope="col">Nama Penghuni</th>
                <th scope="col">Nomor Kamar</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
  <?php
    require_once("connection.php");
    $sql = "SELECT * FROM penghuni
              ORDER BY nama_penghuni ASC";
    $result = pg_query($conn, $sql);
    $nomor = 1;
    while($row = pg_fetch_assoc($result)){
    
  ?>
                <th scope="row"><?php echo $nomor;?></th>
                <td><?php echo $row['id_penghuni'] ?></td>
                <td><?php echo $row['nama_penghuni'] ?></td>
                <td><?php echo $row['nomor_kamar'] ?></td>
                <td>
                <a href="hapus-penghuni.php?id=<?php echo $row['id_penghuni']; ?>"><button type="button" class="btn btn-danger">Hapus</button></a>
                <a href="ubah-penghuni.php?id=<?php echo $row['id_penghuni']; ?>"><button type="button" class="btn btn-warning">Ubah</button></a>
                </td>
                </tr>
                <?php
    $nomor++;
  }
?>
            </tbody>
            </table>
        </div>
        <div class="col-sm-1"></div>
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