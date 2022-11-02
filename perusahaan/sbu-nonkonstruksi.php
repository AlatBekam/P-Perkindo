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
  <?php include "../layouts/sidebar-perusahaan.php" ?>


  <!-- offcanvas -->
  <main class="mt-5 pt-3">
    <div class="container-fluid">
      <div class="row">
        <div class="my-2" style="margin-top: 2.5rem !important;
margin-bottom: 0.5rem !important;">
          <h4><b>Perusahaan | SBU Non Konstruksi</b></h4>
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
        </div>

        <div class="overflow-auto">
          <table class="table table-striped table-bordered">
            <thead>
              <tr class="table-info">
                <th scope="col" width="5%">No</th>
                <th scope="col" width="15%">Nomor Seri Formulir</th>
                <th scope="col" width="15%">Nomor Keanggotaan</th>
                <th scope="col">Nama Perusahaan</th>
                <th scope="col" width="15%">Tanggal Masuk</th>
                <th scope="col" width="15%">Berlaku sampai</th>
                <th scope="col" width="15%">
                  <center>Aksi</center>
                </th>
              </tr>
            </thead>
            
            <?php
          include "../konekski.php";
          
          $ambil_sbu_konstruksi = mysqli_query($koneksi, "select * from sbu_non_konstruksi");
          $no = 1;
          while ($tampil= mysqli_fetch_array($ambil_sbu_konstruksi)){

          ?>
            <tbody>
              <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo $tampil['no_seri_formulir'] ?></td>
                <td><?php echo $tampil['anggota_id'] ?></td>
                <td><?php echo $tampil['no_seri_formulir'] ?></td>
                <td><?php echo $tampil['no_seri_formulir'] ?></td>
                <td><?php echo $tampil['no_seri_formulir'] ?></td>
                <td><button class="btn btn-info"><i class="bi bi-eye"></i></button>
                  <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                  <button class="btn btn-danger"><i class="bi bi-trash"></i></i></button>
                </td>
              </tr>
            </tbody>
            <?php
            }
            ?>
          </table>
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