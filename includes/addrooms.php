<?php

if (isset($_POST['btnAddRoom'])) {
  include ("dbh.php");

  $RoomID = $_POST['roomid'];
  $RoomType = $_POST['roomtype'];
  $PricePerNight = $_POST['pricepernight'];

  print_r($RoomID);
  print_r($RoomType);
  print_r($PricePerNight);

  $result = mysqli_query($conn, "INSERT INTO room(RoomID,RoomType,PricePerNight) VALUES ($RoomID,'$RoomType',$PricePerNight)");

  if ($result == 1) {
    header('Location: ../sbmanagerooms.php?add=success');
    exit();
  } else {
    header('Location: ../sbmanagerooms.php?add=failed');
    exit();
  }
}
?>
