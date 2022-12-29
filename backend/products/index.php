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
            <img src="../../images/dashboard-logo.png" alt="" srcset="" class="my-4" width="120px">
          </div>
          <div class="list-group list-group-flush">
            <a href="" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="dashboard-products.html" class="list-group-item list-group-item-action active">Produk</a>
            <a href="../transactions/index.php" class="list-group-item list-group-item-action">Transaksi</a>
            <a href="dashboard-settings.html" class="list-group-item list-group-item-action">Kategori</a>
            <a href="dashboard-account.html" class="list-group-item list-group-item-action">Pelanggan</a>
            <a href="index.html" class="list-group-item list-group-item-action">Provinsi</a>
            <a href="logout.php" class="list-group-item list-group-item-action">Sign Up</a>
          </div>
        </div>
      <!-- End Sidebar -->

      <!-- Page Content -->
        <div id="page-content-wrapper">
          
            <?php
                include '../components/navbar.php';
            ?>

          <!-- Section Content -->
          <div class="section-content section-dashboard-home" data-aos="fade-up">
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">My Products</h2>
                <p class="dashboard-subtitle">
                  Manage it well and get money
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <a href="create.php" class="btn btn-success">Add New Product</a>
                  </div>
                </div>
                <div class="row mt-4">
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="dashboard-products-details.html" class="card card-dashboard-product d-block">
                      <div class="card-body">
                        <img src="../../images/product-card-1.png" alt="" class="w-100 mb-2" srcset="">
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="dashboard-products-details.html" class="card card-dashboard-product d-block">
                      <div class="card-body">
                        <img src="../../images/product-card-2.png" alt="" class="w-100 mb-2" srcset="">
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="dashboard-products-details.html" class="card card-dashboard-product d-block">
                      <div class="card-body">
                        <img src="../../images/product-card-3.png" alt="" class="w-100 mb-2" srcset="">
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="dashboard-products-details.html" class="card card-dashboard-product d-block">
                      <div class="card-body">
                        <img src="../../images/product-card-4.png" alt="" class="w-100 mb-2" srcset="">
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
                      </div>
                    </a>
                  </div>
                  <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <a href="dashboard-products-details.html" class="card card-dashboard-product d-block">
                      <div class="card-body">
                        <img src="../../images/product-card-5.png" alt="" class="w-100 mb-2" srcset="">
                        <div class="product-title">Shirup Marzzan</div>
                        <div class="product-category">Foods</div>
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
</body>

</html>