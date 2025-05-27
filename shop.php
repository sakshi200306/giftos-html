<?php
include "header.php";
include "db_connection.php";
?>

<!-- end hero area -->

<!-- shop section -->

<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Latest Products
      </h2>
    </div>
    <div class="row">
      <?php
      if (isset($_GET["id"])) {

        $categary = $_GET['id'];
        $query = "SELECT * FROM  product_tbl WHERE `categary` = '$categary'";
      } else {

        $query = "SELECT * FROM  product_tbl";
      }
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($result)) {
      ?>
        <div class="col-lg-3">
          <div class="box">
            <div class="img-box">
              <img style="width:100px; height:100px;" src="admin/uploads/ecommerce/<?= $row["image"] ?> " class="rounded-top" alt="">

            </div>

            <div class="detail-box">
              <span>
                <h6>Name: <?= $row["name"] ?></h6>
                <h6>MRP: <?= $row["MRP"] ?></h6>
                <h6>Discount Percentage: <?= $row["per"] ?></h6>
                <h6>Discount Value: <?= $row["value"] ?></h6>
                <h6>Sale Price: <?= $row["sell"] ?></h6>
                <h6>Description: <?= $row["dis"] ?></h6>

              </span>
            </div>
            <div class="new">
              <span>
                New
              </span>
            </div> <br>
            <form action="card_out.php" method="post">
              <input type="hidden" name="id" value="<?= $row["id"] ?>">
              <input type="hidden" name="qty" value="1">

              <button type="submit" class="btn btn-outline-dark btn-square"><i class="fa fa-shopping-cart"></i></button>
              <button type="submit" class="btn btn-outline-dark btn-square"><i class="fa-solid fa-heart"></i></button>
            </form>
          </div>
        </div>
      <?php
      } ?>
    </div>
  </div>
</section>
<!-- info section -->

<section class="info_section  layout_padding2-top">
  <div class="social_container">
    <div class="social_box">

      <a href="">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
      <a href="">
        <i class="fa fa-youtube" aria-hidden="true"></i>
      </a>
    </div>
  </div>
  <div class="info_container ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <h6>
            ABOUT US
          </h6>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
          </p>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="#">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <h6>
            NEED HELP
          </h6>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
          </p>
        </div>
        <div class="col-md-6 col-lg-3">
          <h6>
            CONTACT US
          </h6>
          <div class="info_link-box">
            <a href="">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <span> Gb road 123 london Uk </span>
            </a>
            <a href="">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>+01 12345678901</span>
            </a>
            <a href="">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span> demo@gmail.com</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  include "footer.php";
  ?>