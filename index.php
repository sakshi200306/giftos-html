<?php
include "header.php";
include "db_connection.php";
?>
<!-- slider section -->

<section class="slider_section">
  <div class="slider_container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>
                    Welcome To Our <br>
                    Gift Shop
                  </h1>
                  <p>
                    A gift shop is a retail store that sells a variety of items that are commonly purchased as gifts. These items can include souvenirs, decorative objects, greeting cards, toys, jewelry, home décor, specialty products, and more.
                  </p>
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
              <div class="col-md-5 ">
                <div class="img-box">
                  <img src="images/slider-img.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>
                    Welcome To Our <br>
                    Gift Shop
                  </h1>
                  <p>
                    A gift shop is a retail store that sells a variety of items that are commonly purchased as gifts. These items can include souvenirs, decorative objects, greeting cards, toys, jewelry, home décor, specialty products, and more.
                  </p>
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
              <div class="col-md-5 ">
                <div class="img-box">
                  <img src="images/slider-img.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-7">
                <div class="detail-box">
                  <h1>
                    Welcome To Our <br>
                    Gift Shop
                  </h1>
                  <p>
                    A gift shop is a retail store that sells a variety of items that are commonly purchased as gifts. These items can include souvenirs, decorative objects, greeting cards, toys, jewelry, home décor, specialty products, and more.
                  </p>
                  <a href="">
                    Contact Us
                  </a>
                </div>
              </div>
              <div class="col-md-5 ">
                <div class="img-box">
                  <img src="images/slider-img.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <i class="fa fa-arrow-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <img src="images/line.png" alt="" />
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- end slider section -->
</div>
<!-- end hero area -->
<br><br> <br><br>
<!-- saving section -->

<!-- <section class="gift_section layout_padding-bottom">
  <div class="box ">
    <div class="container-fluid">
      <div class="row">
      
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Categories
              </h2>
            </div>
            <?php
            $query = "SELECT * FROM  categary";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
              <div class="col-lg-3">
                <div class="box">

                  <a href="">
                    <div class="img-box">
                      <img style="width:100px; height:100px;" src="admin/uploads/ecommerce/<?= $row["image"] ?> " class="rounded-top" alt="">
                    </div>
                    <div class="detail-box">
                      <h6>
                        Categary
                      </h6>
                      <h6>
                        Price
                        <span>
                          $200
                        </span>
                      </h6>
                    </div>
                    <div class="new">
                      <span>
                        New
                      </span>
                    </div>
                  </a>
                </div>
              </div>
              <div class="btn-box">
                <a href="#" class="btn1">
                  Buy Now
                </a>
                <a href="#" class="btn2">
                  See More
                </a>
              </div>
            <?php
            } ?>
        
        </div>
      </div>
    </div>
  </div>
  </div>
</section> -->
<section class="shop_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Categories
      </h2>
    </div>
    <div class="row">
      <?php
      $query = "SELECT * FROM  categary";
      $result = mysqli_query($conn, $query);
      while ($row = mysqli_fetch_array($result)) {
      ?>
        <div class="col-lg-3">
          <div class="box">

            <a href="shop.php?id=<?= $row['id'] ?>">
              <div class="img-box">
                <img style="width:100px; height:100px;" src="admin/uploads/ecommerce/<?= $row["image"] ?> " class="rounded-top" alt="">
              </div>
              <div class="detail-box">
                <span>
                  <h6>Name: <?= $row["product_name"] ?></h6>
                  <h6>Discription: <?= $row["dis"] ?></h6>
                </span>
              </div>
              <div class="new">
                <span>
                  New
                </span>
              </div>
            </a>
          </div>
        </div>
      <?php
      } ?>

    </div>
  </div>
</section>


<!-- end saving section -->
<br> <br> <br> <br><br>
<!-- gift section -->

<section class="gift_section layout_padding-bottom">
  <div class="box ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">
          <div class="img_container">
            <div class="img-box">
              <img src="images/gifts.png" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-7">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Gifts for your <br>
                loved ones
              </h2>
            </div>
            <p>
              Finding the perfect gifts for your loved ones depends on their interests and your relationship with them.
            </p>
            <div class="btn-box">
              <a href="#" class="btn1">
                Buy Now
              </a>
              <a href="#" class="btn2">
                See More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end gift section -->


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