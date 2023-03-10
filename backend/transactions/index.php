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
            <img src="images/dashboard-store-logo.svg" alt="" srcset="" class="my-4">
          </div>
          <div class="list-group list-group-flush">
            <a href="dashboard.html" class="list-group-item list-group-item-action">Dashboard</a>
            <a href="dashboard-products.html" class="list-group-item list-group-item-action">My Products</a>
            <a href="dashboard-transactions.html" class="list-group-item list-group-item-action active">Transactions</a>
            <a href="dashboard-settings.html" class="list-group-item list-group-item-action">Store Settings</a>
            <a href="dashboard-account.html" class="list-group-item list-group-item-action">My Account</a>
            <a href="index.html" class="list-group-item list-group-item-action">Sign Up</a>
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
                        <img src="images/icon-user.png" alt="" class="rounded-circle me-2 profile-picture">
                        Hi, Angga
                      </a>
                      <div class="dropdown-menu">
                        <a href="dashboard.html" class="dropdown-item">Dashboard</a>
                        <a href="dashboard-account.html" class="dropdown-item">Settings</a>
                        <div class="dropdwon-divider"></div>
                        <a href="/" class="dropdown-item">Logout</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link d-inline-block mt-2">
                        <img src="images/icon-cart-filled.svg" alt="" srcset="">
                        <div class="card-badge">3</div>
                      </a>
                    </li>
                </ul>

                <!-- End Desktop Menu -->
                <ul class="navbar-nav d-block d-lg-none">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Hi, Angga
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link d-inline-block">
                      Cart
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
                <h2 class="dashboard-title">Transactions</h2>
                <p class="dashboard-subtitle">
                  Big result start from the small one
                </p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                  <div class="col-12 mt-2">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                          data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                          aria-selected="true">Sell Product</button>
                      </li>
                      <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                          data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                          aria-selected="false">Buy Product</button>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                        aria-labelledby="pills-home-tab"><a href="dashboard-transactions-details.html"
                          class="card card-list d-block">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img src="images/dashboard-icon-product-1.png" alt="" srcset="">
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
                                <img src="images/dashboard-arrow-right.svg" alt="">
                              </div>
                            </div>
                          </div>
                        </a>
                        <a class="card card-list d-block" href="dashboard-transactions-details.html">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img src="images/dashboard-icon-product-2.png" alt="" />
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
                                <img src="images/dashboard-arrow-right.svg" alt="" />
                              </div>
                            </div>
                          </div>
                        </a>
                        <a class="card card-list d-block" href="dashboard-transactions-details.html">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img src="images/dashboard-icon-product-3.png" alt="" />
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
                                <img src="images/dashboard-arrow-right.svg" alt="" />
                              </div>
                            </div>
                          </div>
                        </a></div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <a href="dashboard-transactions-details.html" class="card card-list d-block">
                          <div class="card-body">
                            <div class="row">
                              <div class="col-md-1">
                                <img src="images/dashboard-icon-product-1.png" alt="" srcset="">
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
                                <img src="images/dashboard-arrow-right.svg" alt="">
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
          </div>
          
        </div>
      <!-- End Page Content -->
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.slim.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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