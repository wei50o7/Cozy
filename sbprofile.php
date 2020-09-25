<?php
  include 'includes/sbheader.php';

 ?>
 <body>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="css/viewprofile.css" rel="stylesheet"/>

    <body>
      <div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
          <div class="custom-menu">
            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
          </div>
          <div class="p-4">
            <h1><a href="sb.php" class="logo">Portfolic <span>Portfolio Agency</span></a></h1>
            <?php
            if (isset($_SESSION['rid'])) {
              if ($_SESSION['rid'] == 1) {
              echo '<ul class="list-unstyled components mb-5">
                <li class="">
                  <a href="sbprofilepage.php"><span class="fa fa-home mr-3"></span> Profile</a>
                </li>
                <li>
                    <a href="sbmanagebookings.php"><span class="fa fa-user mr-3"></span>Manage Bookings</a>
                </li>
                <li>
                  <a href="sbmanagerooms.php"><span class="fa fa-briefcase mr-3"></span>Manage Rooms</a>
                </li>
                <li>
                  <a href="adminmanagestaffs.php"><span class="fa fa-cogs mr-3"></span> Manage Staffs</a>
                </li>
                <li>
                  <a href="logout.php"><span class="fa fa-paper-plane mr-3"></span> LogOut</a>
                </li>
              </ul>';
            } elseif($_SESSION['rid'] == 2) {
              echo '<ul class="list-unstyled components mb-5">
                <li class="">
                  <a href="sbprofilepage.php"><span class="fa fa-home mr-3"></span> Profile</a>
                </li>
                <li>
                    <a href="sbmanagebookings.php"><span class="fa fa-user mr-3"></span>Manage Bookings</a>
                </li>
                <li>
                  <a href="sbmanagerooms.php"><span class="fa fa-briefcase mr-3"></span>Manage Rooms</a>
                </li>
                <li>
                  <a href="logout.php"><span class="fa fa-paper-plane mr-3"></span> LogOut</a>
                </li>
              </ul>';
            }
          }
            ?>

            <div class="mb-5">
              <h3 class="h6 mb-3">Subscribe for newsletter</h3>
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <div class="icon"><span class="icon-paper-plane"></span></div>
                  <input type="text" class="form-control" placeholder="Enter Email Address">
                </div>
              </form>
            </div>

            <div class="footer">
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>

          </div>
        </nav>

          <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
          <h2 class="mb-4">Profile</h2>

          <div class="container emp-profile">
                <form method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img" size=''>
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h5>
                                            <?php
                                              echo $_SESSION['username'];
                                             ?>
                                        </h5>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                              <div class="file btn btn-lg btn-primary" id="chgpic">
                                Change Picture

                                  <input type="file" name="file"/>
                              </div>
                                <p>Navigation</p>
                                <a href="">Profile</a><br/>
                                <a href="editprofile.php">Edit Profile</a><br/>
                                <a href="reservationlist.php">Reservation</a><br/>
                                <a href="maps.php">Maps</a><br/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $_SESSION['username'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $_SESSION['email'] ?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Phone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>123 456 7890</p>
                                                </div>
                                            </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Experience</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Expert</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Hourly Rate</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>10$/hr</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Total Projects</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>230</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>English Level</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Expert</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Availability</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>6 months</p>
                                                </div>
                                            </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label>Your Bio</label><br/>
                                            <p>Your detail description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
      </div>

      <script src="js/sbjquery.min.js"></script>
      <script src="js/sbpopper.js"></script>
      <script src="js/sbbootstrap.min.js"></script>
      <script src="js/sbmain.js"></script>
    </body>





</body>
 </html>
