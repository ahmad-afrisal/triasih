<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Store - Your Best Marketplace</title>

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
            <img src="../../images/dashboard-logo.png" alt="" srcset="" class="my-4" width="120px">
          </div>
          <div class="list-group list-group-flush">
            <a href="" class="list-group-item list-group-item-action active">Dashboard</a>
            <a href="../products/index.php" class="list-group-item list-group-item-action">Produk</a>
            <a href="../transactions/index.php" class="list-group-item list-group-item-action">Transaksi</a>
            <a href="../categories/" class="list-group-item list-group-item-action">Kategori</a>
            <a href="#" class="list-group-item list-group-item-action">Pelanggan</a>
            <a href="../provinces/index.php" class="list-group-item list-group-item-action">Provinsi</a>
            <a href="#" class="list-group-item list-group-item-action">Ongkos Kirim</a>
            <a href="#" class="list-group-item list-group-item-action">Akun</a>
            <a href="logout.php" class="list-group-item list-group-item-action">Sign Out</a>

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
                        <img src="https://ui-avatars.com/api/?name=<?= $_SESSION['name']; ?>" alt="" class="rounded-circle me-2 profile-picture">
                        Hi, <?= $_SESSION['name']; ?>
                      </a>
                      <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Dashboard</a>
                        <a href="#" class="dropdown-item">Settings</a>
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
              <div class="dashboard-heading">
                <h2 class="dashboard-title">Dashboard</h2>
                <p class="dashboard-subtitle">
                  Look what you have made today!
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Customer
                        </div>
                        <div class="dashboard-card-subtitle">
                          15.209
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Revenue
                        </div>
                        <div class="dashboard-card-subtitle">
                          $931,290
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-2">
                      <div class="card-body">
                        <div class="dashboard-card-title">
                          Transaction
                        </div>
                        <div class="dashboard-card-subtitle">
                          22,409,399
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-12 mt-2">
                    <h5 class="mb-3">Recent Transactions</h5>
                    <a href="dashboard-transactions-details.html" class="card card-list d-block">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img src="../images/dashboard-icon-product-1.png" alt="" srcset="">
                          </div>
                          <div class="col-md-4">
                            Shirup Marzzan
                          </div>
                          <div class="col-md-3">
                            Angga Risky
                          </div>
                          <div class="col-md-3">
                            12 Januari, 2020
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img src="../../images/dashboard-arrow-right.svg" alt="">
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class="card card-list d-block" href="dashboard-transactions-details.html">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img src="../../images/dashboard-icon-product-2.png" alt="" />
                          </div>
                          <div class="col-md-4">
                            LeBrone X
                          </div>
                          <div class="col-md-3">
                            Masayoshi
                          </div>
                          <div class="col-md-3">
                            11 Januari, 2020
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img src="../../images/dashboard-arrow-right.svg" alt="" />
                          </div>
                        </div>
                      </div>
                    </a>
                    <a class="card card-list d-block" href="dashboard-transactions-details.html">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-1">
                            <img src="../../images/dashboard-icon-product-3.png" alt="" />
                          </div>
                          <div class="col-md-4">
                            Soffa Lembutte
                          </div>
                          <div class="col-md-3">
                            Shayna
                          </div>
                          <div class="col-md-3">
                            11 Januari, 2020
                          </div>
                          <div class="col-md-1 d-none d-md-block">
                            <img src="../../images/dashboard-arrow-right.svg" alt="" />
                          </div>
                        </div>
                      </div>
                    </a>
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
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>