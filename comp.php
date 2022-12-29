<div class="col-12 col-sm-6 col-md-4 col-lg-3">
    <a href="dashboard-products-details.html" class="card card-dashboard-product d-block">
      <div class="card-body">
        <img src="../../images/product-card-1.png" alt="" class="w-100 mb-2" srcset="">
        <div class="product-title">Shirup Marzzan</div>
        <div class="product-category">Foods</div>
      </div>
    </a>
  </div>

<!--  -->

<?php
                    $query = mysqli_query($config, "SELECT * FROM categories");
                    while ($data = mysqli_fetch_array($query)) {
                  ?>

                  <?php
                    }
                  ?>