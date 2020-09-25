<?php
  include 'dbh.php';
  session_start();

  
    $cid = $_SESSION['cid'];

    $read = 'SELECT * FROM customer WHERE CustID ='.$cid;
    $result = mysqli_query($conn, $read);
    $row = mysqli_fetch_assoc($result);

    $_SESSION['cfname'] = $row['CustFname'];
    $_SESSION['clname'] = $row['CustLname'];
    $_SESSION['country'] = $row['Country'];
    $_SESSION['address'] = $row['Address'];
    $_SESSION['phone'] = $row['Phone'];

    print_r($_SESSION['cfname']);
