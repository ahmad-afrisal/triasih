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

  <title>Triasih</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="../style/main.css" rel="stylesheet" />
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
              <a href="dashboard-transactions.php" class="list-group-item list-group-item-action">Pesanan</a>
              <a href="dashboard-account.php" class="list-group-item list-group-item-action active">Akun</a>
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
                <h2 class="dashboard-title">My Account</h2>
                <p class="dashboard-subtitle">
                  Update your current profile
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
                                <label for="name" class="form-label">Your Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                  value="Ahmad Afrisal">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label for="email" class="form-label">Your Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                  value="ahmadafrisal2002@gmail.com">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label for="addressOne" class="form-label">Address 1</label>
                                <input type="text" class="form-control" id="addressOne" name="addressOne"
                                  value="Setra Duta Cemara">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label for="addressTwo" class="form-label">Address 2</label>
                                <input type="text" class="form-control" id="addressTwo" name="addressTwo"
                                  value="Blok B2 No. 34">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="mb-3">
                                <label for="province" class="form-label">Province</label>
                                <select name="province" id="province" class="form-select">
                                  <option value="West Java">West Java</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <select name="city" id="city" class="form-select">
                                  <option value="Bandung">Bandung</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="mb-3">
                                <label for="postalCode" class="form-label">Postal Code</label>
                                <input type="text" class="form-control" id="postalCode" name="postalCode" value="40512">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label for="country" class="form-label">Country</label>
                                <input type="text" class="form-control" id="country" name="country" value="Indonesia">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="text" class="form-control" id="mobile" name="mobile"
                                  value="+628 2020 11111">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col text-end">
                              <button type="submit" class="btn btn-success px-5">Save Now</button>
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