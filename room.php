<?php
  include "includes/header.php"
 ?>
  <body>
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-end">
            <div class="col-md-10 col-sm-12 ftco-animate mb-4">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span><span>Rooms</span></p>
              <h1 class="mb-3">Choose Our Rooms</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section room-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Our Rooms</span>
            <h2>Explore our rooms</h2>
          </div>
        </div>
        <form
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(images/room-1.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3>Luxury Room</h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">$99 <br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p>
                  <?php
                  if (isset($_SESSION['username'])) {
                    echo '<p><a href="reservation.php" class="btn btn-primary" name=luxury>Reserve a room</a></p>';
                  } else {
                    echo '<p><a href="login.php" class="btn btn-primary">Reserve a room</a></p>';
                  }
                  ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(images/room-2.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3>Family Room</h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">$99 <br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p>
                  <?php
                  if (isset($_SESSION['username'])) {
                    echo '<p><a href="reservation.php" class="btn btn-primary" name=luxury>Reserve a room</a></p>';
                  } else {
                    echo '<p><a href="login.php" class="btn btn-primary">Reserve a room</a></p>';
                  }
                  ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(images/room-3.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3>Deluxe Room</h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">$99 <br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p>
                  <?php
                  if (isset($_SESSION['username'])) {
                    echo '<p><a href="reservation.php" class="btn btn-primary" name=luxury>Reserve a room</a></p>';
                  } else {
                    echo '<p><a href="login.php" class="btn btn-primary">Reserve a room</a></p>';
                  }
                  ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(images/room-4.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3>Premier Suite Room</h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">$99 <br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p>
                  <?php
                  if (isset($_SESSION['username'])) {
                    echo '<p><a href="reservation.php" class="btn btn-primary" name=luxury>Reserve a room</a></p>';
                  } else {
                    echo '<p><a href="login.php" class="btn btn-primary">Reserve a room</a></p>';
                  }
                  ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(images/room-5.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3>Superior Room</h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">$99 <br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p>
                  <?php
                  if (isset($_SESSION['username'])) {
                    echo '<p><a href="reservation.php" class="btn btn-primary" name=luxury>Reserve a room</a></p>';
                  } else {
                    echo '<p><a href="login.php" class="btn btn-primary">Reserve a room</a></p>';
                  }
                  ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="room-wrap">
              <a href="#" class="room-img" style="background-image: url(images/room-6.jpg);"></a>
              <div class="text p-4">
                <div class="d-flex mb-1">
                  <div class="one-third">
                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                    <h3>Superior Room Twin</h3>
                  </div>
                  <div class="one-forth text-center">
                    <p class="price">$99 <br><span>/night</span></p>
                  </div>
                </div>
                <p class="features">
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Perfect for traveling couples</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Breakfast included</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Two double beds</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Baby sitting facilities</span>
                  <span class="d-block mb-2"><i class="icon-check mr-2"></i> Free wifi</span>
                </p>
                  <?php
                  if (isset($_SESSION['username'])) {
                    echo '<p><a href="reservation.php" class="btn btn-primary" name=luxury>Reserve a room</a></p>';
                  } else {
                    echo '<p><a href="login.php" class="btn btn-primary">Reserve a room</a></p>';
                  }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span class="icon-instagram"></span> Instagram</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-1.jpg" class="insta-img image-popup" style="background-image: url(images/insta-1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-2.jpg" class="insta-img image-popup" style="background-image: url(images/insta-2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-3.jpg" class="insta-img image-popup" style="background-image: url(images/insta-3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-4.jpg" class="insta-img image-popup" style="background-image: url(images/insta-4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="images/insta-5.jpg" class="insta-img image-popup" style="background-image: url(images/insta-5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

<?php
  include 'includes/footer.php';
 ?>
