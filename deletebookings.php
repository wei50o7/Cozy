<?php
include ("includes/dbh.php");

$id = intval($_GET['rid']);
$result = mysqli_query($conn,"DELETE FROM reservation WHERE ReserveID= $id");


if ($result == 1) {
  echo "<script type='text/javascript'>alert('Deleted successfully');</script>";
  die ("<script>window.history.go(-1);</script>");
}
else {
  echo "<script type='text/javascript'> alert('If you see this we are not getting 4.0'); </script>";
}
?>
