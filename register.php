<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Store - Your Best Marketplace</title>

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link href="style/main.css" rel="stylesheet" />
</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-store sticky-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
      <a href="index.html" class="navbar-brand">
        <img src="images/logo.svg" alt="Logo">
      </a>
      <!-- Memuculkan Menu Humburger Ketika di HP -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <!-- ms-auto = margin left -->
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a href="index.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="categori.php" class="nav-link">Categori</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Rewards</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigation -->

  <div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">
          <div class="col-lg-4">
            <h2>
              Memulai untuk jual beli <br> dengan cara terbaru.
            </h2>
            <form action="register-action.php" method="POST" class="mt-3">
              <div class="mb-3">
                <label class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="name"  autofocus required>
                <!-- is-valid -->
              </div>
              <div class="mb-3">
                <label class="form-label">Alamat Email</label>
                <input type="email" class="form-control" name="email"  required> 
                <!-- is-invalid -->
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" name="confPassword" required>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success btn-block mt-4">
                  Daftar Sekarang
                </button>
                <a href="login.php" class="btn btn-signup btn-block mt-2">
                  Kembali
                </a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <p class="pt-4 pb-2">
            2023 Copyright Store. All Rights Reserved.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="script/navbar-scroll.js"></script>
</body>

</html>