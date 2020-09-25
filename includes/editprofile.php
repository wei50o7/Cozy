<?php

  if (!isset($_POST['btneditprofile'])) {
    header('Location: ../login.php');
    exit();
  } else {

    session_start();
    include 'dbh.php';

    $cfname = $_POST['cfname'];
    $clname = $_POST['clname'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $cid = $_SESSION['cid'];

    /*echo $clname.'</br>';
    echo $cfname.'</br>';
    echo $country.'</br>';
    echo $address.'</br>';
    echo $phone.'</br>';*/

    $sql = 'UPDATE customer SET CustFname=?, CustLname=?, Country=?, Address=?, Phone=? WHERE CustID=?';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header('Location: ../editprofile.php?error=sql');
      exit();
    } else {

      mysqli_stmt_bind_param($stmt, 'ssssss', $cfname, $clname, $country, $address, $phone, $cid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_store_result($stmt);

      $read = 'SELECT * FROM customer WHERE CustID ='.$cid;
      $result = mysqli_query($conn, $read);
      $row2 = mysqli_fetch_assoc($result);

      $_SESSION['cfname'] = $row2['CustFname'];
      $_SESSION['clname'] = $row2['CustLname'];
      $_SESSION['country'] = $row2['Country'];
      $_SESSION['address'] = $row2['Address'];
      $_SESSION['phone'] = $row2['Phone'];

      //print_r($row2);


      header('Location: ../editprofile.php?edit=success ');

    }
  }
