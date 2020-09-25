<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hotel Cozy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Hotel Cozy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="room.php">Rooms</a>
            </li>
            <li class="nav-item"><a href="dining-bar.php" class="nav-link">Dining &amp; Bar</a></li>
            <li class="nav-item"><a href="amenities.php" class="nav-link">Amenities</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
<!-- Show 'Login', 'Logout', 'Profile' Buttons-->
            <?php
              if (isset($_SESSION['username'])) {
                echo '<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
                echo '<li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>';
              } else {
                echo '<li class="nav-item"><a href="login.php" class="nav-link">Login  |  Sign Up</a></li>';
              }
             ?>



          </ul>
        </div>
      </div>
    </nav>
  </head>
