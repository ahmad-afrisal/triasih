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
            <a href="index.html" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="categories.html" class="nav-link">Categories</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Rewards</a>
          </li>
        </ul>
          <?php
          if(isset($_SESSION["login"])) {
            ?>
            <ul class="navbar-nav d-none d-lg-flex">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                  <img src="https://ui-avatars.com/api/?name=<?= $_SESSION['name']; ?>" alt="" class="rounded-circle me-2 profile-picture">
                  Hi, <?= $_SESSION['name']; ?>
                </a>
                <div class="dropdown-menu">
                  <?php
                    if(isset($_SESSION['roles']) == 'ADMIN') {
                      echo '<a href="backend/dashboard/dashboard.php" class="dropdown-item">Dashboard</a>       
                      <a href="backend/users/dashboard-account.php" class="dropdown-item">Settings</a>
                      <div class="dropdwon-divider"></div>
                      <a href="logout.php" class="dropdown-item">Logout</a>';
                    } else {
                      echo '<a href="frontend/dashboard/dashboard.php" class="dropdown-item">Dashboard</a>       
                      <a href="frontend/users/dashboard-account.php" class="dropdown-item">Settings</a>
                      <div class="dropdwon-divider"></div>
                      <a href="logout.php" class="dropdown-item">Logout</a>';
                    }

                  ?>
                  
                </div>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link d-inline-block mt-2">
                  <img src="images/icon-cart-empty.svg" alt="" srcset="">
                </a>
              </li>
            </ul>
            <!-- End Desktop Menu -->
    
            <ul class="navbar-nav d-block d-lg-none">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  Hi, <?= $_SESSION['name']; ?>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link d-inline-block">
                  Cart
                </a>
              </li>
            </ul>

            <?php
          } else {
            echo '<li class="nav-item">
                    <a href="register.php" class="nav-link">Sign Up</a>
                  </li>
                  <li class="nav-item">
                    <a href="login.php" class="btn btn-success nav-link px-4 text-white">Sign In</a>
                  </li>
                ';
          }

          ?>
          
       
      </div>
    </div>
  </nav>
  <!-- End Navigation -->

  <!-- Page Content -->
    <div class="page-content page-home">
      <!-- Section Carousel -->
         <section class="store-carousel">
          <div class="container">
            <div class="row">
              <div class="col-lg-12" data-aos="zoom-in">
                <div id="storeCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="storeCarousel" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="storeCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="storeCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                    </div>               
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images/banner.jpg" alt="Carousel Image" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="images/banner.jpg" alt="Carousel Image" class="d-block w-100">
                      </div>
                      <div class="carousel-item">
                        <img src="images/banner.jpg" alt="Carousel Image" class="d-block w-100">
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </section> 
      <!-- End Section Carousel -->

      <!-- Section Trend Categories -->
        <section class="store-trend-categories">
          <div class="container">
            <div class="row">
              <div class="col-12" data-aos="fade-up">
                <h5>Trend Categories</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="images/categories-gadgets.svg" alt="" srcset="" class="w-100">
                  </div>
                  <p class="categories-text">
                    Gadgets
                  </p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="images/categories-furniture.svg" alt="" srcset="" class="w-100">
                  </div>
                  <p class="categories-text">
                    Furniture
                  </p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="images/categories-makeup.svg" alt="" srcset="" class="w-100">
                  </div>
                  <p class="categories-text">
                    Make Up
                  </p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="images/categories-sneaker.svg" alt="" srcset="" class="w-100">
                  </div>
                  <p class="categories-text">
                    Sneaker
                  </p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="images/categories-tools.svg" alt="" srcset="" class="w-100">
                  </div>
                  <p class="categories-text">
                    Tools
                  </p>
                </a>
              </div>
              <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
                <a href="#" class="component-categories d-block">
                  <div class="categories-image">
                    <img src="images/categories-baby.svg" alt="" srcset="" class="w-100">
                  </div>
                  <p class="categories-text">
                    Baby
                  </p>
                </a>
              </div>
            </div>
          </div>
        </section>
      <!-- End Section Trend Categories -->

      <!-- Section Products -->
        <div class="store-new-products">
          <div class="container">
            <div class="row">
              <div class="col-12" data-aos="fade-up">
                <h5>New Products</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('images/products-apple-watch.jpg')"></div>
                  </div>
                  <div class="products-text">Apple Watch 4</div>
                  <div class="products-price">$890</div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('images/products-black-edition-nike.jpg')"></div>
                  </div>
                  <div class="products-text">Black Edition Nike</div>
                  <div class="products-price">$840</div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('images/products-bubuk-maketti.jpg')"></div>
                  </div>
                  <div class="products-text">Bubuk Maketti</div>
                  <div class="products-price">$990</div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('images/products-monkey-toys.jpg')"></div>
                  </div>
                  <div class="products-text">Monkey Toys</div>
                  <div class="products-price">$400</div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('images/products-mavic-kawe.jpg')"></div>
                  </div>
                  <div class="products-text">Mavic Kawe</div>
                  <div class="products-price">$503</div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('images/products-tatakan-gelas.jpg')"></div>
                  </div>
                  <div class="products-text">Tatakan Gelas</div>
                  <div class="products-price">$45,184</div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('images/products-sofa-ternyaman.jpg')"></div>
                  </div>
                  <div class="products-text">Sofa Ternyaman</div>
                  <div class="products-price">$1.409</div>
                </a>
              </div>
              <div class="col-12 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                <a href="details.html" class="component-products d-block">
                  <div class="products-thumbnail">
                    <div class="products-image" style="background-image: url('images/products-orange-bogotta.jpg')"></div>
                  </div>
                  <div class="products-text">Orange Bogotta</div>
                  <div class="products-price">$94,509</div>
                </a>
              </div>
            </div>
          </div>
        </div>
      <!-- End Section Products -->
    </div>
  <!-- End Page Content -->

<!-- Footer -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <p class="pt-4 pb-2">
          2020 Copyright Store. All Rights Reserved.
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