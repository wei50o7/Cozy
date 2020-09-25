<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--- Include the above in your HEAD tag ---------->
<?php
  include 'includes/header.php';
  include 'includes/dbh.php'
 ?>

 <link href="css/viewprofile.css" rel="stylesheet"/>
  <body>
      <div class="container emp-profile">
          <form method="post">
              <div class="row">
                  <div class="col-md-4">
                      
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5><?php echo $_SESSION['cfname'].' '.$_SESSION['clname']; ?></h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <div class="profile-work">
                              <p style="font-size:30">Navigation</p>
                              <a href="profile.php" style="font-size:20">Profile</a><br/>
                              <a href="editprofile.php" style="font-size:20">Edit Profile</a><br/>
                              <a href="viewreservation.php" style="font-size:20">Reservation</a>
                      </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <table cellspacing="0">
                                 <tr bgcolor="#FF69B4">
                                    <th>ReserveID</th>
                                    <th>RoomID</th>
                                    <th>CustID</th>
                                    <th>CheckInDate</th>
                                    <th>CheckOutDate</th>
                                    <th>Payment_Status</th>
                                    <th>Delete</th>

                                 </tr>
                                 <?php
                                 include ("includes/dbh.php");
                                 $cid = $_SESSION['cid'];
                                 $result = mysqli_query($conn,"SELECT * FROM reservation WHERE CustID='$cid'");
                                 $result1 = mysqli_query($conn,"SELECT * FROM reservation WHERE CustID='$cid'");
                                 if (is_null($row1 = mysqli_fetch_array($result1))) {
                                   echo '<p style="font-size:80px;position:relative;right:-265px;line-height:90px">0</p>';
                                   echo '<p style="position:relative;right:-190px;line-height:0px;">None is the loneliest number.</p>';
                                   echo '<p style="position:relative;right:-250px;line-height:0px;">Book Now!</p>';
                                   echo '<tr><td colspan="7" bgcolor="#FFC0CB" align="center">No records found!</td></tr>';
                                 } elseif ($row1 > 0) {
                                 while($row = mysqli_fetch_array($result)) {
                                 echo "<tr bgcolor=\"#FFC0CB\">";
                                 echo "<td>";
                                 echo $row['ReserveID'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo $row['RoomID'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo $row['CustID'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo $row['CheckInDate'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo $row['CheckOutDate'];
                                 echo "</td>";
                                 echo "<td>";
                                 echo $row['Payment_Status'];
                                 echo "</td>";
                                 //pay
                                 echo "<td><a href=\"deletebookings.php?rid=";
                                 echo $row['ReserveID'];
                                 echo "\" onClick=\"return confirm('Delete details for ReserveID=";
                                 echo $row['ReserveID'];
                                 echo "?');\">Delete</a></td>";
                                if ($row['Payment_Status'] == 'Pending') {
                                   echo "<td><a href=\"payment.php?rid=";
                                   echo $row['ReserveID'];
                                   echo "\" onClick=\"return confirm('Pay for ReserveID=";
                                   echo $row['ReserveID'];
                                   echo "?');\">Pay</a></td></tr>";
                                 }
                                 }
                               }
                                 ?>
                               </table>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
            </form>
      </body>

      <?php
        include 'includes/footer.php';
       ?>
