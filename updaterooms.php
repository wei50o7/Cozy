<?php
include ("includes/dbh.php");
$sql = "UPDATE room SET RoomID='$_POST[roomid]', RoomType='$_POST[roomtype]', PricePerNight='$_POST[pricepernight]'
WHERE RoomID='$_POST[roomid]';";

if (mysqli_query($conn,$sql) ==1)
{
  echo "<script type='text/javascript'>alert('Edit successfully');</script>";
  die ("<script>window.history.go(-2);</script>");
mysqli_close($conn);
}
?>
