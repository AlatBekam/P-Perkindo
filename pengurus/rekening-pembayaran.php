<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../asset/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../asset/css/dataTables.bootstrap5.min.css" />
  <link rel="stylesheet" href="../asset/css/style.css" />

  <title>Admin Dashboard</title>
</head>

<body>
  <!-- top navigation bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid d-flex">
      <a class="navbar-brand text-dark" href="../index.php"><b>PERKINDO <span class=" text-warning">KALBAR</span></b></a>
    </div>
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
        <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
      </button>
      <a class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold" href="#"><img src="img" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="topNavBar">
        <form class="d-flex ms-auto my-3 my-lg-0">
          <div class="input-group">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-dark" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>

        <ul class="navbar-nav ms-3">
          <li class="nav-item dropdown">
            <a class="nav-link ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-envelope"></i>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-bell"></i>
            </a>
          </li>
        </ul>

        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ms-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-fill"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li><a class="dropdown-item" href="#"><i class="bi bi-person-lines-fill" title="Pesan Masuk"></i><span class="drop-item ms-3">Profil</span></a></li>
              <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right" title="Notifikasi"></i><span class="drop-item ms-3">signOut</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- top navigation bar -->
  <!-- offcanvas -->
  <?php include "../layouts/sidebar-pengurus.php" ?>


  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="my-2" style="margin-top: 2.5rem !important;
margin-bottom: 0.5rem !important;">
          <h4><b>Pengurus | Rekening Pembayaran</b></h4>
        </div>
      </div>
      <div class="container-fluid">

        <!-- tabel -->
        <div class="row d-flex justify-content-between my-4">
          <div class="col-6 col-lg-3">
            <form class="d-flex ms-auto my-3 my-lg-0">
              <div class="input-group">
                <input class="form-control" type="search" placeholder="Pencarian" aria-label="Search" />
                <button class="btn btn-dark" type="submit">
                  <i class="bi bi-search"></i>
                </button>
              </div>
            </form>
          </div>
          <div class="col-6 col-lg-3">
            <form class="d-flex ms-auto my-3 my-lg-0">
              <div class="btn-group" role="group" aria-label="Basic example">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal"><b>+</b>Tambah Data</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah rekening Pembayaran</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Bank:</label>
                            <input type="text" class="form-control" id="agama-name">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">No Rek:</label>
                            <input type="text" class="form-control" id="agama-name">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Atas Nama:</label>
                            <input type="text" class="form-control" id="agama-name">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>
                <button type="button" class="btn btn-dark"></i><i class="bi bi-arrow-clockwise"></i></button>
              </div>
            </form>
          </div>
        </div>

        <table class="table table-striped table-bordered">
          <thead>
            <tr class="table-info">
              <th scope="col" width="5%">No</th>
              <th scope="col" width="30%">Rekening Pembayaran</th>
              <th scope="col" width="25%">No Rekening</th>
              <th scope="col" width="30%">Atas Nama</th>
              <th colspan="3" scope="col" width="6%">
                <center>Aksi</center>
              </th>
            </tr>
          </thead>

          <?php
          include "../konekski.php";
          
          $ambil_rekening_pembayaran = mysqli_query($koneksi, "select * from rekening_pembayarans");
          $no = 1;
          while ($tampil= mysqli_fetch_array($ambil_rekening_pembayaran)){

          ?>



          <tbody>
            <tr>
              <th scope="row"><?php echo $no++ ?></th>
              <td><?php echo $tampil['nama_bank'] ?></td>
              <td><?php echo $tampil['no_rek'] ?></td>
              <td>@<?php echo $tampil['atas_nama'] ?></td>
              <td class="d-flex gap-2 justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah rekening Pembayaran</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama Bank:</label>
                            <input type="text" class="form-control" id="rek.pembayaran <?php echo $data['data_jabatan'] ?>">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">No Rek:</label>
                            <input type="text" class="form-control" id="rek.pembayaran <?php echo $data['data_jabatan'] ?>">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Atas Nama:</label>
                            <input type="text" class="form-control" id="rek.pembayaran <?php echo $data['data_jabatan'] ?>">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="btn btn-danger"><i class="bi bi-trash"></i></i></button>
              </td>
            </tr>
          </tbody>
          <?php
          }
          ?>

        <!-- footet -->
        <footer class="sticky-footer bg-secondary fixed-bottom">
          <div class="my-auto">
            <div class="text-end p-2" style="background-color: white;">
              © Copyright: Perkindo Kalbar | 2022
            </div>
          </div>
        </footer>
      </div>
  </main>
  <script src="../asset/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
  <script src="../asset/js/jquery-3.5.1.js"></script>
  <script src="../asset/js/jquery.dataTables.min.js"></script>
  <script src="../asset/js/dataTables.bootstrap5.min.js"></script>
  <script src="../asset/js/script.js"></script>
</body>

</html>