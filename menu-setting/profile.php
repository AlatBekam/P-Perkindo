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
          <h4><b>Menu-Setting | Profile</b></h4>
        </div>
      </div>
      <div class="container-fluid">

        <!-- tabel -->
        <div class="overflow-auto">
          <table class="table table-striped table-bordered">
            <thead class="table-primary">
              <th colspan="8" scope="col"><b>DATA FOTO PENGURUS</b>
            </thead>
            <thead>
              <tr class="table-info">
                <th colspan="3" scope="col">
                  <center>SEJARAH PERKINDO KALIMANTAN BARAT</center>
                </th>
                <th colspan="1" scope="col">
                  <center>Aksi</center>
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td colspan="3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque nisi cupiditate vel corporis laborum debitis nemo perferendis accusantium deserunt consequuntur doloremque, eaque quod quam rem provident illo fugiat saepe quibusdam?
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Numquam similique est ab reiciendis, labore illo nemo laudantium corporis, voluptatibus fugiat explicabo aspernatur asperiores eos incidunt nisi, natus ipsum? Quisquam, suscipit?
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto quidem sint recusandae eveniet enim. Labore, nobis cum aut in incidunt perspiciatis iste nesciunt suscipit qui dicta officiis molestias exercitationem fugiat.

                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, unde non. Facilis repellendus quam soluta, tempora aspernatur quod deleniti, dignissimos pariatur illo iure dolor et repudiandae eum repellat eligendi aliquid!

                  Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum nesciunt iste saepe quae ea alias in distinctio incidunt laborum, earum ipsa, quis similique repellendus velit facilis, perferendis rem pariatur quasi?
                </td>
                <td><button class="btn btn-primary"><i class="bi bi-pencil-square"></i>Edit</button></td>
              </tr>
            </tbody>
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