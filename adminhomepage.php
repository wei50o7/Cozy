<?php
  include 'includes/sbheader.php';
 ?>

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
        <h3>Hello Admin for Hotel Cozy</h3>
        <h4>Select functions on the left side navigation bar to do actions</h4>

      </div>
    </div>

    <script src="js/sbjquery.min.js"></script>
    <script src="js/sbpopper.js"></script>
    <script src="js/sbbootstrap.min.js"></script>
    <script src="js/sbmain.js"></script>
  </body>
</html>
