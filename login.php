<?php
session_start();
include 'config.php';

if (isset($_POST["submit"])) {
  # code...
  $email = $_POST["email"];
  $password = $_POST["password"];


  $result = mysqli_query($config,"SELECT * FROM users WHERE email = '$email'");

  if (mysqli_num_rows($result) === 1) {
    # code...
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password,$row["password"])) {

      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      $_SESSION["name"] = $row["name"];
      $_SESSION["username"] = $row["username"];
      $_SESSION["roles"] = $row["roles"];
      if($_SESSION["roles"] === "ADMIN") {
        header("Location: backend/dashboard/dashboard.php");
      } else {
        header("Location: index.php");
      }
      exit;
    }
    
  }
  $error = true;
  
}


if(isset($_SESSION['message']))
{
    ?>
        <div class="toast-container align-items-center text-bg-primary border-0 position-fixed top-0 start-50 translate-middle-x">
          <div id="liveToast" class="toast " role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex">
              <div class="toast-body">
                <?= $_SESSION['message']; ?>
              </div>
              <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
          </div>
        </div>
          <?php 
    unset($_SESSION['message']);
}

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
            <a href="categories.php" class="nav-link">Kategori</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Rewards</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navigation -->

  <div class="page-content page-auth">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-6 text-center">
            <img src="images/login-placeholder.png" alt="" class="w-50 mb-4 mb-lg-none">
          </div>
          <div class="col-lg-5">
            <h2>
              Belanja kebutuhan utama, <br> menjadi lebih mudah.
            </h2>
            <form action="" method="POST" class="mt-3">
              <div class="mb-3">
                <label class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-control w-75">
              </div>
              <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control w-75">
              </div>
              <?php if(isset($error)) : ?>
                  <p style="color:red;">email / password salah</p>
                <?php endif; ?>
              <button type="submit" name="submit" class="btn btn-success btn-block w-75 mt-4">
                Masuk
              </button>
              <a href="register.php" class="btn btn-signup btn-block w-75 mt-2">
                Daftar
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>





  <?php include 'layouts/footer.php'; ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
    const toastTrigger = document.getElementById('liveToastBtn')
    const toastLiveExample = document.getElementById('liveToast')
    const toast = new bootstrap.Toast(toastLiveExample)
    toast.show()

  </script>
  <script src="script/navbar-scroll.js"></script>
</body>

</html>