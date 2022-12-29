

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
            <a href="dashboard-account.html" class="list-group-item list-group-item-action  active">Provinsi</a>
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
                <h2 class="dashboard-title">Shriup Marzan</h2>
                <p class="dashboard-subtitle">
                  Product Details
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
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" value="Papel La Casa">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" value="200">
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label class="form-label">Kategori</label>
                                <select name="category" class="form-select">
                                  <option value="" disabled>Select Category</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" name="editor1" id="editor1"
                                  rows="10" cols="80"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 text-end d-grid gap-2">
                              <button type="submit" class="btn btn-success px-5 btn-block">Save Now</button>
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
                          <div class="col-12">
                            <div class="d-grid gap-2 mt-3">
                              <input type="file" id="file" style="display:none;" multiple>
                              <button class="btn btn-secondary" type="button" onclick="thisFileUpload()">ADD PHOTO</button>
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
  <script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
  <script>
    function thisFileUpload() {
      document.getElementById("file").click();
    }
  </script>
  <script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
  </script>
</body>

</html>