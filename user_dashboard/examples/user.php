<?php 
include 'header.php';
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Username</label><br>
                          <input type="text" name="username" placeholder="<?php foreach($userprofiledata as $profiledata){ echo $profiledata['username']; } ?>" class="form-control">
                          <br><br>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>First Name</label><br>
                          <input type="text" name= "firstname" placeholder="<?php foreach($userprofiledata as $profiledata){ echo $profiledata['first_name']; } ?>"  class="form-control">
                          <br><br>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Last Name</label><br>
                          <input type="text" name= "secondname" placeholder="<?php foreach($userprofiledata as $profiledata){ echo $profiledata['second_name']; } ?>"  class="form-control">
                          <br><br>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <button type="submit" name="updateprofile" class="btn btn-primary pull-right">Update Profile</button>
                    </div>
                      <?php echo $message; ?>
                    <div class="row">
                      <div class="col-md-12">
                          <hr>
                      </div>
                    </div>
                  </form>
                  <form method="post" action="#">
                  <h4 class="card-title">Edit password</h4>
                  <br><br>
                      <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Old Password</label>
                          <input type="text" name="oldpassword" class="form-control">
                          <br><br>
                        </div>
                      </div>
                    </div>
                      <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">new password</label>
                          <input type="text" name="newpassword" class="form-control">
                          <br><br>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">confirm new password </label>
                          <input type="text" name="confirmpassword" class="form-control">
                          <br><br>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name="updatepassword" class="btn btn-primary pull-right">Update password</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="../assets/img/faces/marc.jpg" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">CEO / Co-Founder</h6>
                  <h4 class="card-title">Alec Thompson</h4>
                  <p class="card-description">
                    Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                  </p>
                  <a href="#pablo" class="btn btn-primary btn-round">Follow</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
          
        <?php 
	include 'footer.php'; 
	
?>