<?php
include ("includes/dbh.php");

$sid = intval($_GET['sid']);
$uid = intval($_GET['uid']);
$result = mysqli_query($conn,"DELETE FROM staff WHERE StaffID= $sid");
$result2 = mysqli_query($conn, "DELETE FROM registered_user WHERE UserID= $uid");



if ($result == 1 && $result2==1) {
  echo "<script type='text/javascript'>alert('Deleted successfully');</script>";
  die ("<script>window.history.go(-1);</script>");
}
else {
  echo "<script type='text/javascript'> alert('If you see this we are not getting 4.0 and also if you see this means you ARE GOD because no one can come here because this function doesnt even exist and if you do found this , i will give you rm 100 at your funeral'); </script>";
}
?>
