<?php
  include 'dbh.php';

  $username = $_GET['username'];
  $sql = 'SELECT * FROM registered_user WHERE username=?';
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo 'failed';
  } else {
    session_start();

    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result);

    $_SESSION['uid'] = $row['UserID'];
    $_SESSION['username'] = $row['Username'];
    $_SESSION['password'] = $row['Password'];
    $_SESSION['email'] = $row['Email'];
    $_SESSION['role'] = $row['RoleID'];

    header('Location: ../knowmore.php');
  }



  /*$uid = intval($_GET['username']);
  $result = mysqli_query($conn, 'SELECT * FROM registered_user WHERE username='.$uid);
  $row = mysqli_fetch_array($result);

  $_SESSION['uid'] = $row['UserID'];
  $_SESSION['username'] = $row['Username'];
  $_SESSION['password'] = $row['Password'];
  $_SESSION['email'] = $row['Email'];
  $_SESSION['role'] = $row['RoleID'];*/
