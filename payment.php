<?php
  include 'includes/dbh.php';
  session_start();
  $cid = $_SESSION['cid'];
  $sql = "UPDATE reservation SET Payment_Status = 'Paid' WHERE CustID = $cid ";
  $result = mysqli_query($conn, $sql);

  if ($result == 1) {
  echo "<script type='text/javascript'>alert('Paid successfully');</script>";
  die ("<script>window.history.go(-1);</script>");
}
else {
  echo "<script type='text/javascript'> alert('If you see this we are not getting 4.0 and also if you see this means you ARE GOD because no one can come here because this function doesnt even exist and if you do found this , i will give you rm 100 at your funeral'); </script>";
}
 ?>
