<?php
include ("includes/dbh.php");
$sql = "UPDATE reservation SET RoomID='$_POST[roomid]', CheckInDate='$_POST[checkindate]', CheckOutDate='$_POST[checkoutdate]', Payment_Status='$_POST[payment_status]'
WHERE ReserveID='$_POST[reserveid]';";

if (mysqli_query($conn,$sql) ==1)
{
  echo "<script type='text/javascript'>alert('Edit successfully');</script>";
  die ("<script>window.history.go(-2);</script>");
mysqli_close($conn);
}
?>
