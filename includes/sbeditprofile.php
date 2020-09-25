<?php

  if (!isset($_POST['btneditprofile'])) {
    header('Location: ../sbprofilepage.php');
    exit();
  } else {

    session_start();
    include 'dbh.php';

    $sfname = $_POST['sfname'];
    $slname = $_POST['slname'];
    $sid = $_SESSION['sid'];

    /*echo $clname.'</br>';
    echo $cfname.'</br>';
    echo $country.'</br>';
    echo $address.'</br>';
    echo $phone.'</br>';*/

    $sql = 'UPDATE staff SET StaffFname=?, StaffLname=? WHERE StaffID=?';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header('Location: ../sbeditprofile.php?error=sql');
      exit();
    } else {

      mysqli_stmt_bind_param($stmt, 'sss', $sfname, $slname, $sid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_store_result($stmt);

      $read = 'SELECT * FROM staff WHERE StaffID ='.$sid;
      $result = mysqli_query($conn, $read);
      $row2 = mysqli_fetch_assoc($result);

      $_SESSION['sfname'] = $row2['StaffFname'];
      $_SESSION['slname'] = $row2['StaffLname'];

      //print_r($row2);


      header('Location: ../sbeditprofile.php?edit=success ');

    }
  }
