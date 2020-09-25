<?php
  include 'includes/sbheader.php';
 ?>
 <head>
   <style media="screen">
     #content {
       background-image: url("images/background.jpg");
       width: 1000px;
     }
     .py-5 {
       background-color: white;
       width: 300px;
       height: 300px;

     }
     .py-5 #content title{
       position: absolute;
       left: 500px;
       top: 500px;
       z-index: 1;
       font-size: 50px;
       color: black;
     }
     form {
       position: absolute;
       top: 300px;
       left: 600px;
       background-color: white;
       width: 300px;
       height: 200px;
     }
     form td {
       color: #db3082;
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
<section class="py-5">
  <div id="content">
       <title>Edit Staffs</title>

  <?php
  include ("includes/dbh.php");
  $id = intval ($_GET['sid']); //Get the id from URL
  $result = mysqli_query ($conn,"SELECT * FROM staff WHERE StaffID=$id");
  while ($row = mysqli_fetch_array($result))
  {
  ?>
  <form action="updatestaffs.php" method="post">
 <table style="width: 100%">
    <tr>
      <td style="width: 156px">StaffFname:</td>
      <td><input name="stafffname" type="text" required value="<?php echo $row['StaffFname'] ?>"></td>
    </tr>
    <tr>
      <td style="width: 156px">StaffLname:</td>
      <td><input name="stafflname" type="text" required value="<?php echo $row['StaffLname'] ?>"></td>
    </tr>


  </table>
  <input type="hidden" name="sid" value="<?php echo $row['StaffID'] ?>">
  <input name="Submit1" type="submit" value="Submit">	<input name="Reset1" type="reset" value="Reset" /><br>
  </form>
  <?php
  }
  mysqli_close($conn);
  ?>
  </div>
</section>
