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
            <a href="dashboard-products.html" class="list-group-item list-group-item-action">Produk</a>
            <a href="../transactions/index.php" class="list-group-item list-group-item-action">Pesanan</a>
            <a href="dashboard-settings.html" class="list-group-item list-group-item-action">Kategori</a>
            <a href="dashboard-account.html" class="list-group-item list-group-item-action">Pelanggan</a>
            <a href="../provinces/index.php" class="list-group-item list-group-item-action active">Provinsi</a>
            <a href="logout.php" class="list-group-item list-group-item-action">Sign Out</a>
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
                <h2 class="dashboard-title">Tambah Provinsi</h2>
                <p class="dashboard-subtitle">
                  Tambah Provinsi Brau
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12">
                    <form action="">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label">Nomor Provinsi</label>
                                <input type="number" class="form-control" value="">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label">Nama Provinsi</label>
                                <input type="text" class="form-control" value="">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label class="form-label">Ongkos Kirims</label>
                                <select name="category" class="form-select">
                                  <option value="" disabled>Select Ongkos Kirim</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-4 mb-4">
                            <div class="gallery-container position-relative">
                              <img src="images/product-card-1.png" alt="" srcset="" class="w-100">
                              <a href="#" class="delete-gallery">
                                <img src="images/icon-delete.svg"
                                  class="position-absolute top-0 start-100 translate-middle" alt=""
                                  srcset="">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4 mb-4">
                            <div class="gallery-container position-relative">
                              <img src="images/product-card-2.png" alt="" srcset="" class="w-100">
                              <a href="#" class="delete-gallery">
                                <img src="images/icon-delete.svg"
                                  class="position-absolute top-0 start-100 translate-middle" alt="" srcset="">
                              </a>
                            </div>
                          </div>
                          <div class="col-md-4 mb-4">
                            <div class="gallery-container position-relative">
                              <img src="images/product-card-3.png" alt="" srcset="" class="w-100">
                              <a href="#" class="delete-gallery">
                                <img src="images/icon-delete.svg"
                                  class="position-absolute top-0 start-100 translate-middle" alt="" srcset="">
                              </a>
                            </div>
                          </div>
                            <div class="d-grid gap-2 mt-3">
                            <div class="col-12 text-end d-grid gap-2">
                              <button type="submit" class="btn btn-secondary px-5 btn-block">Simpan</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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