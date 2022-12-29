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
              <a href="dashboard.php" class="list-group-item list-group-item-action">Dashboard</a>
              <a href="dashboard-transactions.php" class="list-group-item list-group-item-action active">Pesanan</a>
              <a href="dashboard-account.php" class="list-group-item list-group-item-action ">Akun</a>
              <a href="../logout.php" class="list-group-item list-group-item-action">Sign Up</a>
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
                        <a href="dashboard.html" class="dropdown-item">Dashboard</a>
                        <a href="dashboard-account.html" class="dropdown-item">Settings</a>
                        <div class="dropdwon-divider"></div>
                        <a href="/" class="dropdown-item">Logout</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link d-inline-block mt-2">
                        <img src="../../images/icon-cart-filled.svg" alt="" srcset="">
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
                <h2 class="dashboard-title">#STORE0839</h2>
                <p class="dashboard-subtitle">
                  Transactions Details
                </p>
              </div>
              <div class="dashboard-content" id="transactionDetails">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12 col-md-4">
                            <img src="images/product-details-dashboard.png" class="w-100 mb-3" alt="">
                          </div>
                          <div class="col-12 col-md-8">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">Customer Name</div>
                                <div class="product-subtitle">Angga Risky</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Product Name</div>
                                <div class="product-subtitle">Shirup Marzzan</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Date of Transaction</div>
                                <div class="product-subtitle">12 Januari, 2020</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Status</div>
                                <div class="product-subtitle text-danger">Pending</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Total Amount</div>
                                <div class="product-subtitle text-danger">$280,409</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Mobile</div>
                                <div class="product-subtitle text-danger">+628 2020 1111</div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-12 mt-4">
                            <h5>Shippping Information</h5>
                          </div>
                          <div class="col-12">
                            <div class="row">
                              <div class="col-12 col-md-6">
                                <div class="product-title">Address I</div>
                                <div class="product-subtitle">Setra Duta Cemara</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Address II</div>
                                <div class="product-subtitle">Block B2 No. 34</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Province</div>
                                <div class="product-subtitle">West Java</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">City</div>
                                <div class="product-subtitle">Bandung</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Postal Code</div>
                                <div class="product-subtitle">123999</div>
                              </div>
                              <div class="col-12 col-md-6">
                                <div class="product-title">Country</div>
                                <div class="product-subtitle">Indonesia</div>
                              </div>
                              <div class="col-12 col-md-3">
                                <div class="product-title">Status</div>
                                <select name="status" id="status" class="form-select" v-model="status">
                                  <option value="UNPAID">unpaid</option>
                                  <option value="PENDING">pending</option>
                                  <option value="SHIPPING">shipping</option>
                                  <option value="SUCCESS">success</option>
                                </select>
                              </div>
                              <template v-if="status == 'SHIPPING'">
                                <div class="col-md-3">
                                  <div class="product-title">Input Resi</div>
                                  <input type="text" class="form-control" name="resi" v-model="resi">
                                </div>
                                <div class="col-md-2">
                                  <button type="submit" class="btn btn-success btn-block mt-4">
                                    Update resi
                                  </button>
                                </div>
                              </template>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-4">
                          <div class="col-12 text-end">
                            <button type="submit" class="btn btn-success btn-lg mt-4">Save Now</button>
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
  <script src="vendor/vue/vue.min.js"></script>
  <script>
    var transactionDetails = new Vue({
      el: "#transactionDetails",
      data: {
        status: "SHIPPING",
        resi: "BD012308012132",
      },
    });
  </script>
</body>

</html>