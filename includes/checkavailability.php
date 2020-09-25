<?php

  if (!isset($_POST['btncheck'])) {
    header('Location: ../index.php');
    exit();
  } else {
    include 'dbh.php';

    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room = $_POST['room'];

    $sql = 'SELECT RoomID FROM room WHERE RoomType=? AND RoomID NOT IN(SELECT reservation.RoomID FROM reservation JOIN room ON room.RoomID=reservation.RoomID WHERE RoomType = ? AND (CheckOutDate >= ?  AND CheckInDate <= ?))';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "../index.php?error=sql";
    } else {
      mysqli_stmt_bind_param($stmt, 'ssss', $room, $room, $checkin, $checkout);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($result);

      if ($row > 0) {
        header('Location: ../index.php?status=available');
        exit();
      } elseif($row == 0) {
        header('Location: ../index.php?status=booked');
        exit();
      }

    }
  }
