<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php
  include 'includes/sbheader.php';
  include 'includes/dbh.php'
 ?>


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
            <h1><a href="sb.php" class="logo">Hotel Cozy <span>Hotel that make you crazy</span></a></h1>
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
              <h3 class="h6 mb-3"></h3>
              <form action="#" class="subscribe-form">
                <div class="form-group d-flex">
                  <div class="icon"><span class="icon-paper-plane"></span></div>

                </div>
              </form>
            </div>

            <div class="footer">
              <p>Hotel Cozy Sdn.Bhd</p>
            </div>

          </div>
        </nav>

          <!-- Page Content  -->
        <div id="content" class="p-4 p-md-5 pt-5">
          <h2 class="mb-4">Hotel Cozy </h2>
          <div class="container emp-profile">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                <h5><?php
                                    echo $_SESSION['sfname']  .' '.$_SESSION['slname'];
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
                                    <p>Navigation</p>
                                    <a href="sbprofilepage.php">Profile</a><br/>
                                    <a href="sbeditprofile.php">Edit Profile</a><br/>
                                    <a href="reservationlist.php"><p></p></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <form action="includes/sbeditprofile.php" method='post'>
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>First Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class='inputbox' placeholder="Your First Name" name='sfname' value="<?php echo $_SESSION['sfname'] ?>">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Last Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" class='inputbox' placeholder="Your Last Name" name='slname' value="<?php echo $_SESSION['slname'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <button type='submit' class='#' name='btneditprofile'>Edit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
      </div>

      <script src="js/sbjquery.min.js"></script>
      <script src="js/sbpopper.js"></script>
      <script src="js/sbbootstrap.min.js"></script>
      <script src="js/sbmain.js"></script>

      </body>
