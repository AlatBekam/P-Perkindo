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
  <?php include "../layouts/sidebar-pengurus.php" ?>


  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="my-2" style="margin-top: 2.5rem !important;
          margin-bottom: 0.5rem !important;">
          <h4><b>Pengurus | Agama</b></h4>
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
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tambah_agama"><b>+</b>Tambah Data</button>
                <div class="modal fade" id="tambah_agama" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="tambah_data">tambah Agama</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Agama:</label>
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
              <th scope="col" width="5%" class="text-center">No</th>
              <th colspan="5" scope="col">Agama</th>
              <th colspan="2" scope="col" width="7%">
                <center>Aksi</center>
              </th>
            </tr>
          </thead>

          <!-- include koneksi -->
          <?php
          include "../konekski.php";

          if(isset($_POST['proses'])){
            mysqli_query($koneksi,"insert into agamas set
            agama = '$_POST[agama]' ");
          };

          $ambil_agama = mysqli_query($koneksi, "select * from agamas");
          $no = 1;
          while ($tampil_agama = mysqli_fetch_array($ambil_agama)) {
            // echo "
            // <tr>
            //   <th>$no</th>;
            //   <td>$tampil_agama[agama]</td>
            //   <td> 
            //   </td>

            // </tr>";

            //   $no++;
          ?>

            <tbody>
              <tr>
                <th colspan="1" scope="row" class="text-center"><?php echo $no++ ?></th>
                <td colspan="5"><?php echo $tampil_agama['agama'] ?></td>
                <td class="d-flex gap-2 justify-content-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_agama"><i class="bi bi-pencil-square"></i></button>
                  <div class="modal fade" id="edit_agama" tabindex="-1" aria-labelledby="tambah_agama" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="editAgama">Edit Agama</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="post" action="../proses/proses_edit.php">
                            <div class="mb-3">
                              <label for="recipient-name" class="col-form-label">Agama:</label>
                              <input type="text" class="form-control" id="agama" name="proses" value="<?php echo $data['data_agama'] ?>">
                            </div>
                            <div class="modal-footer">
                              <a href="" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</a>
                              <a href="" class="btn btn-primary">Simpan Perubahan</a>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a href="?kode=$tampil_agama['agama']" class="btn btn-danger"><i class="bi bi-trash"></i></i></a>
                </td>
              </tr>
            </tbody>
          <?php
          }
          ?>
        </table>

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