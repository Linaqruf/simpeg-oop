<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>SIMPEG</title>
  </head>
  <body>
    <!-- NAVBAR -->
    <div class="mb-3">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sistem Informasi Kepegawaian</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="index.php">Kelola Data Pegawai</a>
              <a class="nav-link active" href="?page=penggajian">Tabel Penggajian</a>
              <a class="nav-link d-flex me-2" href="#">Dibuat oleh Furqanil Taqwa</a>

            </div>
          </div>
        </div>
      </nav>
    </div>  
    <!-- END OF NAVBAR -->
    <div class="container">
      <!-- CARD -->
      <div class="card">
        <?php
        if (empty($_GET["page"])) {
        include "view.php";
        } elseif ($_GET['page'] == 'tambah') {
        include "create.php";
        } elseif ($_GET['page'] == 'ubah') {
        include "edit.php";
        } elseif ($_GET['page'] == 'detail') {
        include "detail.php";
        } elseif ($_GET['page'] == 'penggajian') {
        include "gaji.php";
        }
        ?> 
      </div>
      <!-- END OF CARD -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  </body>
</html>