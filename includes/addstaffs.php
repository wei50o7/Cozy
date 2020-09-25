<?php

if (isset($_POST['btnAddStaff'])) {
  include ("dbh.php");

  $StaffUsername = $_POST['staffuname'];
  $StaffPassword = $_POST['staffpassword'];
  $hashpassword = password_hash($StaffPassword, PASSWORD_DEFAULT);
  $StaffEmail = $_POST['staffemail'];
  $StaffFname = $_POST['stafffname'];
  $StaffLname = $_POST['stafflname'];
  $result1 = mysqli_query($conn, "SELECT UserID FROM registered_user WHERE Username='$StaffUsername'");
  $row = mysqli_fetch_array($result1);

  if ($row > 0) {
    header('Location:../adminmanagestaffs.php?error=usernameexist ');
    exit();
  } else {
    $result2 = mysqli_query($conn, "INSERT INTO registered_user (Username, Password, Email, RoleID) VALUES ('$StaffUsername', '$hashpassword', '$StaffEmail', 2)");
    if ($result2 > 0) {
       $result3 = mysqli_query($conn, "SELECT UserID FROM registered_user WHERE Username='$StaffUsername'");
       $row2 = mysqli_fetch_assoc($result3);
       $uid = $row2['UserID'];
       if ($row2 > 0) {
         mysqli_query($conn, "INSERT INTO staff(UserID,StaffFname,StaffLname) VALUES ('$uid','$StaffFname','$StaffLname')");
         echo "<script type='text/javascript'>alert('Staff successfully registered!');</script>";
         header('Location: ../adminmanagestaffs.php');
       } else {
         header('Location: ../adminmanagestaffs.php?error=nouser');
         exit();
       }
    } else {
      header('Location: ../adminmanagestaffs.php?error=usernameexist');
      exit();
    }
  }
  /*print_r($RoomID);
  print_r($RoomType);
  print_r($PricePerNight);*/

  /*if ($result == 1) {
    //header('Location: ../adminmanagestaffs.php?add=success');
    exit();
  } else {
    //header('Location: ../adminmanagestaffs.php?add=failed');
    exit();
  }*/
}
?>
