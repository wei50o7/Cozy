<?php
  if (!isset($_POST['btnLogin'])) {
    header('Location: ../login.php');
  } else {
    require 'dbh.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql1 = 'SELECT * FROM registered_user WHERE Username = ?';
    $sql2 = 'SELECT * FROM customer JOIN registered_user ON registered_user.UserID = customer.UserID WHERE registered_user.Username = ?';
    $sql3 = 'SELECT * FROM staff JOIN registered_user ON registered_user.UserID = staff.UserID WHERE registered_user.Username = ?';
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql1)) {
      header('Location: ../login.php?error=sql');
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, 's', $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($result);
      $passwordcheck = password_verify($password, $row['Password']);

      if($row > 0){
        if ($passwordcheck == false) {
          header('Location: ../login.php?error=pwd');
          exit();
        } elseif ($passwordcheck == true) {
          session_start();
            if ($row['RoleID'] == '1') {
              //admin session
              $_SESSION['uid'] = $row['UserID'];
              $_SESSION['username'] = $row['Username'];
              $_SESSION['email'] = $row['Email'];
              $_SESSION['rid'] = $row['RoleID'];
              if (!mysqli_stmt_prepare($stmt, $sql3)) {
                header('Location: ../login.php?error=sql');
                exit();
              } else {
                mysqli_stmt_bind_param($stmt, 's', $username);
                mysqli_stmt_execute($stmt);
                $result2 = mysqli_stmt_get_result($stmt);
                $row2 = mysqli_fetch_assoc($result2);

                $_SESSION['sid'] = $row2['StaffID'];
                $_SESSION['sfname'] = $row2['StaffFname'];
                $_SESSION['slname'] = $row2['StaffLname'];
                header('Location: ../adminhomepage.php');
              }
          } elseif ($row['RoleID'] == '2') {
            //staff session
            $_SESSION['uid'] = $row['UserID'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['rid'] = $row['RoleID'];
            if (!mysqli_stmt_prepare($stmt, $sql3)) {
              header('Location: ../login.php?error=sql');
              exit();
            } else {
              mysqli_stmt_bind_param($stmt, 's', $username);
              mysqli_stmt_execute($stmt);
              $result2 = mysqli_stmt_get_result($stmt);
              $row2 = mysqli_fetch_assoc($result2);

              $_SESSION['sid'] = $row2['StaffID'];
              $_SESSION['sfname'] = $row2['StaffFname'];
              $_SESSION['slname'] = $row2['StaffLname'];
            header('Location: ../sb.php?');
          }
          } elseif ($row['RoleID'] == '3') {
            //customer session
            $_SESSION['uid'] = $row['UserID'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['rid'] = $row['RoleID'];

          if (!mysqli_stmt_prepare($stmt, $sql2)) {
            header('Location: ../login.php?error=sql');
            exit();
          } else {
            mysqli_stmt_bind_param($stmt, 's', $username);
            mysqli_stmt_execute($stmt);
            $result1 = mysqli_stmt_get_result($stmt);
            $row1 = mysqli_fetch_assoc($result1);

            $_SESSION['cid'] = $row1['CustID'];
            $_SESSION['cfname'] = $row1['CustFname'];
            $_SESSION['clname'] = $row1['CustLname'];
            $_SESSION['country'] = $row1['Country'];
            $_SESSION['address'] = $row1['Address'];
            $_SESSION['phone'] = $row1['Phone'];
            header('Location: ../index.php?login=success');
          }
          }
        } else {
          header('Location: ../login.php?error=login');
          exit();
        }
      } else {
        header('Location: ../login.php?error=login');
      }
      }
    }
