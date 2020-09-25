<?php
  include 'includes/sbheader.php';
 ?>
<head>
  <link rel="stylesheet" type="text/css" href="css/tableview.css">
  <style media="screen">
    #content {
      background-image: url("images/background.jpg");
    }
    .mb-4{
      color: #ff78a9;
    }
    .header{
      color: #ff9a62;
    }
  </style>
</head>
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

        <h2 class="mb-4">List of Staffs </h2>


   <div class="table-users">
   <div class="header">Staffs</div>

   <table cellspacing="0">
      <tr bgcolor="#FF69B4">
         <th>StaffID</th>
         <th>StaffFirstName</th>
         <th>StaffLastName</th>
         <th>Edit</th>
         <th>Delete</th>
      </tr>
      <?php
      include ("includes/dbh.php");
      $result = mysqli_query($conn,"SELECT * FROM staff");
      while($row = mysqli_fetch_array($result))
      {
      echo "<tr bgcolor=\"#FFC0CB\">";
      echo "<td>";
      echo $row['StaffID'];
      echo "</td>";
      echo "<td>";
      echo $row['StaffFname'];
      echo "</td>";
      echo "<td>";
      echo $row['StaffLname'];
      echo "</td>";
      echo "<td><a href=\"editstaffs.php?sid=";
      echo $row['StaffID'];
      echo "\">Edit</a></td>";
      echo "<td><a href=\"deletestaffs.php?sid=";
      echo $row['StaffID'];
      echo "&uid=";
      echo $row['UserID'];
      echo "\" onClick=\"return confirm('Delete details for StaffID=";
      echo $row['StaffID'];
      echo "?');\">Delete</a></td></tr>";
      }
      echo "<tr bgcolor=\"#FFF200\">";
      echo "<td><a href=\"addstaffs.php";
      echo "\">AddStaff</a></td></tr>";

      ?>
    </table>
  </div>
</div>
</div>


    <script src="js/sbjquery.min.js"></script>
    <script src="js/sbpopper.js"></script>
    <script src="js/sbbootstrap.min.js"></script>
    <script src="js/sbmain.js"></script>
  </body>
</html>
