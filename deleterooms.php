<?php
include ("includes/dbh.php");

$rid = intval($_GET['roomid']);
print_r($rid);
$result = mysqli_query($conn,"DELETE FROM room WHERE RoomID= $rid");


if ($result == 1) {
  echo "<script type='text/javascript'>alert('Deleted successfully');</script>";
  die ("<script>window.history.go(-1);</script>");
}
else {
  echo "<script type='text/javascript'> alert('This room still exist in reservations, cannot be deleted'); </script>";
  die ("<script>window.history.go(-1);</script>");
}
?>
