<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<?php
  include 'includes/header.php';
  include 'includes/dbh.php'
 ?>


   <link href="css/viewprofile.css" rel="stylesheet"/>
    <body>
        <div class="container emp-profile">
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
                              <form action="includes/editprofile.php" method='post'>
                                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>First Name</label>
                                          </div>
                                          <div class="col-md-6">
                                              <input type="text" class='inputbox' placeholder="Your First Name" name='cfname' value="<?php echo $_SESSION['cfname'] ?>">
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Last Name</label>
                                          </div>
                                          <div class="col-md-6">
                                              <input type="text" class='inputbox' placeholder="Your Last Name" name='clname' value="<?php echo $_SESSION['clname'] ?>">
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Country</label>
                                          </div>
                                          <div class="col-md-6">
                                              <input type="text" class='inputbox' placeholder="Country" name='country' value="<?php echo $_SESSION['country'] ?>">
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Address</label>
                                          </div>
                                          <div class="col-md-6">
                                              <input type="text" class='inputbox' placeholder="Address" name='address' value="<?php echo $_SESSION['address'] ?>">
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-6">
                                              <label>Phone</label>
                                          </div>
                                          <div class="col-md-6">
                                              <input type="text" class='inputbox' placeholder="Phone" name='phone' value="<?php echo $_SESSION['phone'] ?>">
                                          </div>
                                      </div>
                                  </div>
                                  <button type='submit' class='#' name='btneditprofile'>Edit</buton>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </form>
      </body>

      <?php
        include 'includes/footer.php';
       ?>
