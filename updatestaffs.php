<?php
include ("includes/dbh.php");
$sql = "UPDATE staff SET StaffFname='$_POST[stafffname]', StaffLname='$_POST[stafflname]' WHERE StaffID='$_POST[sid]';";

if (mysqli_query($conn,$sql) ==1)
{
  echo "<script type='text/javascript'>alert('Edit successfully');</script>";
  die ("<script>window.history.go(-2);</script>");
mysqli_close($conn);
}
?>
