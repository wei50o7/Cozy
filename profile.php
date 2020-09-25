<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--- Include the above in your HEAD tag ---------->
<?php
  include 'includes/header.php';
  include 'includes/dbh.php'
 ?>

 <?php

  $uid = $_SESSION['uid'];
  $sql = 'SELECT * FROM customer WHERE UserID = ?';
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo 'fail';
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "s", $uid);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_array($result);

    $_SESSION['cfname'] = $row['CustFname'];
    $_SESSION['clname'] = $row['CustLname'];
    $_SESSION['country'] = $row['Country'];
    $_SESSION['address'] = $row['Address'];
    $_SESSION['phone'] = $row['Phone'];

  }

  ?>
 <link href="css/viewprofile.css" rel="stylesheet"/>
  <body>
      <div class="container emp-profile">
          <form method="post">
              <div class="row">
                  <div class="col-md-4">

                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <h5><?php echo $_SESSION['cfname'].' '.$_SESSION['clname']; ?></h5>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                      <div class="profile-work">
                              <p style="font-size:30">Navigation</p>
                              <a href="profile.php" style="font-size:20">Profile</a><br/>
                              <a href="editprofile.php" style="font-size:20">Edit Profile</a><br/>
                              <a href="viewreservation.php" style="font-size:20">Reservation</a>
                      </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['cfname'].' '.$_SESSION['clname'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['email'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Country</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['country'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['address'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $_SESSION['phone']; ?></p>
                                            </div>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </form>
      </body>

      <?php
        include 'includes/footer.php';
       ?>
