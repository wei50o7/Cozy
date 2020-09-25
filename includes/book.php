<?php

  if (isset($_POST['btnBook'])) {
    if ($_POST['rooms'] == 'None') {
      header('Location: ../reservation.php?error=select');
      exit();
    } else {
    session_start();
    require 'dbh.php';

    $payment = 'Pending';
    $rname = $_POST['rooms'];
    $cid = $_SESSION['cid'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $sql1 = 'SELECT RoomID FROM room WHERE RoomType=? AND RoomID NOT IN(SELECT reservation.RoomID FROM reservation JOIN room ON room.RoomID=reservation.RoomID WHERE RoomType = ? AND reservation.CheckInDate AND reservation.CheckOutDate BETWEEN ? AND ?)';
    $sql = 'INSERT INTO reservation (RoomID, CustID, CheckInDate, CheckOutDate, Payment_Status) VALUES (?, ?, ?, ?, ? )';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql1)) {
      header('Location : ../reservation.php?error=sql');
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, 'ssss', $rname, $rname, $checkin, $checkout);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_array($result);
      $rid = $row['RoomID'];

      if ($row > 0) {
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header('Location: ../reservation.php?error=sql1');
          exit();
        } else {
          mysqli_stmt_bind_param($stmt, 'sssss', $rid, $cid, $checkin, $checkout, $payment);
          $result1 = mysqli_stmt_execute($stmt);
          if ($result1 > 0) {
            header('Location: ../viewreservation.php');
            exit();
          } else {
            header('Location: ../reservation.php?book=failed');
            exit();
          }
        }
      } else {
        header('Location: ../reservation.php?error=roombooked');
        exit();
      }
    }
  }
} else {
    echo 'a';
  }
