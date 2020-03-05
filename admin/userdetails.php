<?php 
  include 'header.php'; 
  include 'nav.php';
  include 'sidebar.php';
  $user_id= $_GET['id'];
  $singlehostdata=$adminobj->getsingleHostDataForAdmin($conn,$user_id);

?>

      <div class="main-panel">
        <div class="content">
          <div class="container-fluid">
            <h4 class="page-title">User Details</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    User Details
                  </div>
                  <div class="card-body">
                    <table class="table table-typo">
                      <?php 
                          foreach ($singlehostdata as $row){
                          ?>
                      <tbody>
                        <tr>
                          <td>
                            <p>User ID</p>
                          </td>
                          <td><p class="text-muted"><?= $row['id'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Username</p>
                          </td>
                          <td><p class="text-muted"><?= $row['username'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>First Name</p>
                          </td>
                          <td><p class="text-muted"><?= $row['first_name'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Second Name</p>
                          </td>
                          <td><p class="text-muted"><?= $row['second_name'] ?></p></span></td>
                        </tr>    
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Email</p>
                          </td>
                          <td><p class="text-muted"><?= $row['email'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Country</p>
                          </td>
                          <td><p class="text-muted"><?= $row['country'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Phone</p>
                          </td>
                          <td><p class="text-muted"><?= $row['phone'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Joining Date</p>
                          </td>
                          <td><p class="text-muted"><?= $row['date'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                                                                   
                      </tbody>
                       <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



<?php 
  include 'footer.php';
?>