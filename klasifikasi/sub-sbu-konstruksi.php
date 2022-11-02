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
  <?php include "../layouts/navbar.php" ?>
  <!-- top navigation bar -->
  <!-- offcanvas -->
  <?php include "../layouts/sidebar-klasifikasi.php" ?>

  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="my-2" style="margin-top: 2.5rem !important;
margin-bottom: 0.5rem !important;">
          <h4><b>Klasifikasi | Sub SBU Konstruksi</b></h4>
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
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Sbu Klasifikasi Kontruksi</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Klasifikasi SBU Kontruksi:</label>
                            <div class="input-group mb-3">
                              <label class="input-group-text" for="inputGroupSelect01">Options</label>
                              <select class="form-select" id="inputGroupSelect01">
                                <option selected>Choose...</option>
                                <option value="1">One</option>
                              </select>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Kode:</label>
                            <input type="text" class="form-control" id="kode-name">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Sub Klasifikasi:</label>
                            <input type="text" class="form-control" id="kode-name">
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Lingkup Pekerjaan:</label>
                            <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                              <label for="floatingTextarea2"></label>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Komentar:</label>
                            <div class="form-floating">
                              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                              <label for="floatingTextarea"></label>
                            </div>
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
        <div class="overflow-auto">
          <table class="table table-striped table-bordered">
            <thead>
              <tr class="table-info">
                <th scope="col" width="5%">No</th>
                <th scope="col" width="20%">Klasifikasi Sub Kontruksi</th>
                <th scope="col" width=10%">Kode</th>
                <th scope="col">Sub Klasifikasi</th>
                <th scope="col" width="7%">Aksi</th>
              </tr>
            </thead>


            <?php
          include "../konekski.php";
          
          $ambil_sub_klasifikasi_sbu_konstruksi = mysqli_query($koneksi, 
          "SELECT  .klasifikasi, sub_klasifikasi_sbu_konstruksi.kode, sub_klasifikasi_sbu_konstruksi.klasifikasi_sbu_konstruksi_id, sub_klasifikasi_sbu_konstruksi.sub_klasifikasi
          FROM klasifikasi_sbu_konstruksi, sub_klasifikasi_sbu_konstruksi WHERE sub_klasifikasi_sbu_konstruksi.klasifikasi_sbu_konstruksi_id = klasifikasi_sbu_konstruksi.id");

          $no = 1;
          while ($tampil= mysqli_fetch_array($ambil_sub_klasifikasi_sbu_konstruksi)){

          ?>

           
            <tbody>
              <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo $tampil['klasifikasi'] ?></td>
                <td><?php echo $tampil['kode'] ?></td>
                <td><?php echo $tampil['sub_klasifikasi'] ?></td>
                <td class="d-flex gap-2 justify-content-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i></button>
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Sbu Klasifikasi Kontruksi</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Klasifikasi SBU Kontruksi:</label>
                              <div class="input-group mb-3">
                                <label class="input-group-text" for="inputGroupSelect01">Options</label>
                                <select class="form-select" id="inputGroupSelect01">
                                  <option selected>Choose...</option>
                                  <option value="1">One</option>
                                  <option value="2">Two</option>
                                  <option value="3">Three</option>
                                </select>
                              </div>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Kode:</label>
                              <input type="text" class="form-control" id="kode-name">
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Sub Klasifikasi:</label>
                              <input type="text" class="form-control" id="kode-name">
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Lingkup Pekerjaan:</label>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2"></label>
                              </div>
                            </div>
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Komentar:</label>
                              <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                                <label for="floatingTextarea"></label>
                              </div>
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

          </div>

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