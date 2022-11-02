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
  <?php include "../layouts/sidebar-menu-setting.php" ?>


  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="my-2" style="margin-top: 2.5rem !important;
margin-bottom: 0.5rem !important;">
          <h4><b>Menu-Setting | Slide</b></h4>
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
                <!-- tambah slide -->
                <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#tambah-slide"><b>+</b>Tambah Data</button>
                <div class="modal fade" id="tambah-slide" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Slide</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form>
                          <div class="mb-3">
                            <label for="Photo-slide" class="col-form-label">Photo <small>.jpg, .png, .img, .jpeg, .tiff</small>:</label>
                            <input type="file" accept=".jpg, .png, .img, .jpeg, .tiff" class="form-control" id="Photo-slide">
                          </div>
                          <div class="mb-3">
                            <label for="judul-slider" class="col-form-label">Judul:</label>
                            <input type="text" class="form-control" id="judul-slider">
                          </div>
                          <div class="mb-3">
                            <label for="desc-slider" class="col-form-label">Desc:</label>
                            <textarea name="Desc-slider" id="desc-slider" cols="30" rows="4"></textarea>
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
                <!-- end tambah slide -->
                <button type="button" class="btn btn-dark"></i><i class="bi bi-arrow-clockwise"></i></button>
              </div>
            </form>
          </div>
        </div>
        <!-- table utama -->
        <table class="table table-striped table-bordered">
          <thead>
            <tr class="table-info">
              <th scope="col" width="5%">No</th>
              <th scope="col" width="30%">Gambar Slide</th>
              <th scope="col" width="20%">Judul</th>
              <th scope="col" width="40%">Desc</th>
              <th scope="col" width="6%">
                <center>Aksi</center>
              </th>
            </tr>
          </thead>

          <?php
          include "../konekski.php";
          
          $ambil_slide = mysqli_query($koneksi, "select * from slide");
          $no = 1;
          while ($tampil= mysqli_fetch_array($ambil_slide)){

          ?>

          <tbody>
            <tr>
              <th scope="row"><?php echo $no++ ?></th>
              <td></td>
              <td><?php echo $tampil['judul']?></td>
              <td>Mark</td>
              <td class="d-flex gap-2 justify-content-center">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit-slider"><i class="bi bi-pencil-square"></i></button>
                <button class="btn btn-danger"><i class="bi bi-trash"></i></i></button>
            </tr>
          </tbody>
          <?php
          }
          ?>
        </table>
        <!-- end table utama -->

        <!-- Edit SLide -->
        <div class="modal fade" id="edit-slider" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Slide</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="mb-3">
                    <label for="Photo-slide" class="col-form-label">Photo <small>.jpg, .png, .img, .jpeg, .tiff</small>:</label>
                    <input type="file" accept=".jpg, .png, .img, .jpeg, .tiff " class="form-control" id="Photo-slide">
                  </div>
                  <div class="mb-3">
                    <label for="judul-slider" class="col-form-label">Judul:</label>
                    <input type="text" class="form-control" id="judul-slider">
                  </div>
                  <div class="mb-3">
                    <label for="desc-slider" class="col-form-label">Desc:</label>
                    <textarea name="Desc-slider" id="desc-slider" cols="30" rows="4"></textarea>
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
      </div>
      <!-- end edit slide -->

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