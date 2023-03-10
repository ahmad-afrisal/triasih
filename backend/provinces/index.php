<?php
    session_start();
    include '../../config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Triasih</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="../../style/main.css" rel="stylesheet" />

</head>

<body>
  <div class="page-dashboard">
    <!-- <div class="d-flex" id="wrapper" data-aos="fade-right"> kalo pake class d-flex-->
    <div class="d-flex"  id="wrapper" data-aos="fade-right">
      <!-- Sidebar -->
        <div class="border-right" id="sidebar-wrapper">
          <div class="sidebar-heading text-center">
            <img src="images/dashboard-store-logo.svg" alt="" srcset="" class="my-4">
          </div>
          <div class="list-group list-group-flush">
            <a href="dashboard.html" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="index.php" class="list-group-item list-group-item-action">Produk</a>
            <a href="dashboard-transactions.html" class="list-group-item list-group-item-action">Pesanan</a>
            <a href="dashboard-settings.html" class="list-group-item list-group-item-action ">Kategori</a>
            <a href="dashboard-account.html" class="list-group-item list-group-item-action">Pelanggan</a>
            <a href="dashboard-account.html" class="list-group-item list-group-item-action active">Provinsi</a>
            <a href="index.html" class="list-group-item list-group-item-action">Sign Out</a>
          </div>
        </div>
      <!-- End Sidebar -->

      <!-- Page Content -->
        <div id="page-content-wrapper">
          <!-- Navigation -->
          <nav class="navbar navbar-store navbar-expand-lg navbar-light" data-aos="fade-down">
            <div class="container-fluid">
              <button class="btn btn-secondary d-md-none me-auto me-2" id="menu-toggle"> &laquo; Menu</button>
              <!-- Memuculkan Menu Humburger Ketika di HP -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- ms-auto = margin left -->
                <!-- Desktop Menu -->
                <!-- d-none = agar tidak muncul d mobile -->
                <!-- d-lg-flex = agar muncul di tampilan desktop dengan mode flexbox -->

                <ul class="navbar-nav ms-auto d-none d-lg-flex">
                    <li class="nav-item dropdown">
                      <a href="#" class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                        <img src="../../images/icon-user.png" alt="" class="rounded-circle me-2 profile-picture">
                        Hi, Angga
                      </a>
                      <div class="dropdown-menu">
                        <a href="dashboard.html" class="dropdown-item">Dashboard</a>
                        <a href="dashboard-account.html" class="dropdown-item">Settings</a>
                        <div class="dropdwon-divider"></div>
                        <a href="/" class="dropdown-item">Logout</a>
                      </div>
                    </li>
                </ul>

                <!-- End Desktop Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Hi, Angga
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!-- End Navigation -->

          <!-- Section Content -->
          <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
                <div div class="dashboard-heading">
                    <h2 class="dashboard-title">Daftar Provinsi</h2>
                    <p class="dashboard-subtitle">
                        Kategori Baru
                    </p>
                </div>
                <div class="dashboard-content">
                    <div class="row mb-3">
                        <div class="col-12">
                            <a href="create.php" class="btn btn-success">Tambah Provinsi</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form action="store.php" method="POST" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>NO</th>
                                                                <th>Daerah Tujuan</th>
                                                                <th>Ongkos Kirim</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                $no = 1;
                                                                $query = mysqli_query($config, "SELECT * FROM provinces");
                                                                while ($data = mysqli_fetch_array($query)) {
                                                            ?>
                                                            <tr>
                                                                <td><?= $no++; ?></td>
                                                                <td><?= $data['provinces_name']; ?></td>
                                                                <td>Rp. <?= number_format($data['shipping_cost']); ?></td>
                                                                <td>
                                                                    <a href="edit.php?provinces_id=<?= $data['provinces_id'];?>" class="btn btn-primary">Ubah</a>
                                                                    <a href="destroy.php?provinces_id=<?= $data['provinces_id'];?>" class="btn btn-danger">Hapus</a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      <!-- End Page Content -->
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="../../vendor/jquery/jquery.slim.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    $('#menu-toggle').click(function (e) {
      e.preventDefault();
      $('#wrapper').toggleClass('toggled');
    });
  </script>
  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>

  <script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
  </script>
</body>

</html>