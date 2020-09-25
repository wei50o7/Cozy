<?php

  if (isset($_POST['btnknowmore'])) {
   session_start();
   require 'dbh.php';

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $country = $_POST['country'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $uid = $_SESSION['uid'];
   $sql = 'INSERT INTO customer(UserID, CustFname, CustLname, Country, Address, Phone) VALUES (?, ?, ?, ?, ?, ?)';
   $stmt = mysqli_stmt_init($conn);

   if (!mysqli_stmt_prepare($stmt, $sql)) {
     header('Location: ../knowmore.php?error=sql');
     exit();
   } else {
     mysqli_stmt_bind_param($stmt, "ssssss", $uid, $firstname, $lastname, $country, $address, $phone);
     $result = mysqli_stmt_execute($stmt);

     if ($result > 0) {
       $sql1 = 'SELECT * FROM customer WHERE UserID = ?';
       $stmt = mysqli_stmt_init($conn);

       if (!mysqli_stmt_prepare($stmt, $sql1)) {
         header('Location: ../index.php?error=sql');
         exit();
       }
       mysqli_stmt_bind_param($stmt, 's', $uid);
       mysqli_stmt_execute($stmt);
       $result1 = mysqli_stmt_get_result($stmt);
       $row = mysqli_fetch_assoc($result1);
       if ($row > 0) {
         session_start();
         $_SESSION['cid'] = $row['CustID'];
         $_SESSION['cfname'] = $row['CustFname'];
         $_SESSION['clname'] = $row['CustLname'];
         $_SESSION['country'] = $row['Country'];
         $_SESSION['address'] = $row['Address'];
         $_SESSION['phone'] = $row['Phone'];
         header('Location: ../index.php?info=updated');
         exit();
       } else {
         header('Location: ../index.php?error=knowmore');
         exit();
       }
     } else {
       header('Location: ../knowmore.php?error=');
       exit();
     }
   }

 } else {
   header('Location: ../login.php');
 }
