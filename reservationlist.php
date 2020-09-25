<?php
  include 'includes/header.php';
 ?>
<head>
  <link rel="stylesheet" type="text/css" href="css/tableview.css">
  <style media="screen">
    #content {
      background-image: url("#");
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
      <div id="content" class="p-4 p-md-5 pt-5">
        <h2 class="mb-4">List of Customer Bookings </h2>
   <div class="table-users">
   <div class="header">Bookings</div>

   <table cellspacing="0">
      <tr bgcolor="#FF69B4">
         <th>ReserveID</th>
         <th>RoomID</th>
         <th>CustID</th>
         <th>CheckInDate</th>
         <th>CheckOutDate</th>
         <th>Payment_Status</th>
         <th>Pay</th>
         <th>Delete</th>
      </tr>
      <?php
      include ("includes/dbh.php");
      $result = mysqli_query($conn,"SELECT * FROM reservation");
      while($row = mysqli_fetch_array($result))
      {
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
      echo "<td><a href='payment.php'>";
      echo "Edit</a></td>";
      echo "<td><a href=\"deletebookings.php?rid=";
      echo $row['ReserveID'];
      echo "\" onClick=\"return confirm('Delete details for ReserveID=";
      echo $row['ReserveID'];
      echo "?');\">Delete</a></td></tr>";
      }

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
