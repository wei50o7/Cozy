<?php

 if (isset($_POST['btnSignup'])) {
   require 'dbh.php';

   $username = $_POST['username'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $confirmpassword = $_POST['confirmpassword'];
   $role = 3;

   if ($password !== $confirmpassword) {
     header('Location: ../signup.php?error=confirmpassword&username='.$username.'&email='.$email);
     exit();
   } else {
     $sql = 'SELECT Username FROM registered_user WHERE Username=?';
     $stmt = mysqli_stmt_init($conn);

     if (!mysqli_stmt_prepare($stmt, $sql)) {
       header('Location: ../signup.php?error=sql');
       exit();
     } else {
       mysqli_stmt_bind_param($stmt, "s", $username);
       mysqli_stmt_execute($stmt);
       $result = mysqli_stmt_get_result($stmt);
       $row = mysqli_fetch_array($result);

       if ($row > 0) {
         header('Location: ../signup.php?error=usernametaken');
         exit();
       } else {
         $sql = 'INSERT INTO registered_user (Username, Password, Email, RoleID) VALUES (?, ?, ?, ?)';
         $stmt = mysqli_stmt_init($conn);

         if (!mysqli_stmt_prepare($stmt, $sql)) {
           header('Location: ../signup.php?error=sql');
           exit();
         } else {
           $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
           mysqli_stmt_bind_param($stmt, "ssss", $username, $hashedpassword, $email, $role);
           mysqli_stmt_execute($stmt);
           header('Location: session.php?username='.$username);
         }
       }
     }
   }
   mysqli_stmt_close($stmt);
   mysqli_close($conn);

 } else {
     header('Location: ../signup.php');
     exit();
   }
