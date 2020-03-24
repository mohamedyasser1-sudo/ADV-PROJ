<?php 
  include 'header.php'; 
  include 'nav.php';
  include 'sidebar.php';
  $adv_id= $_GET['adv_id'];
  $advdetails = $adminobj->getAdvData($conn,$adv_id);
?>

      <div class="main-panel">
        <div class="content">
          <div class="container-fluid">
            <h4 class="page-title">Typography</h4>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    AD Details
                  </div>
                  <div class="card-body">
                    <table class="table table-typo">
                      <?php 
                          foreach ($advdetails as $row){
                          ?>
                      <tbody>
                        <tr>
                          <td>
                            <p>Ad ID</p>
                          </td>
                          <td><p class="text-muted"><?= $row['id'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Ad Owner</p>
                          </td>
                          <td><p class="text-muted"><?= $row['post_id'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Page Type</p>
                          </td>
                          <td><p class="text-muted"><?= $row['pagetype'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Page Name</p>
                          </td>
                          <td><p class="text-muted"><?= $row['pagename'] ?></p></span></td>
                        </tr>    
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Page Url</p>
                          </td>
                          <td><p class="text-muted"><?= $row['pageurl'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Page Description</p>
                          </td>
                          <td><p class="text-muted"><?= $row['pagedescription'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>First Description</p>
                          </td>
                          <td><p class="text-muted"><?= $row['description1'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>First Image</p>
                          </td>
                          <td><p class="text-muted"><?= $row['image1'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Second Description</p>
                          </td>
                          <td><p class="text-muted"><?= $row['description2'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Second Image2</p>
                          </td>
                          <td><p class="text-muted"><?= $row['image2'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Third Description</p>
                          </td>
                          <td><p class="text-muted"><?= $row['description3'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Third Image</p>
                          </td>
                          <td><p class="text-muted"><?= $row['image3'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Fourth Description</p>
                          </td>
                          <td><p class="text-muted"><?= $row['description4'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Fourth Image</p>
                          </td>
                          <td><p class="text-muted"><?= $row['image4'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>First Category</p>
                          </td>
                          <td><p class="text-muted"><?= $row['requiredcat1'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Second Category</p>
                          </td>
                          <td><p class="text-muted"><?= $row['requiredcat2'] ?></p></span></td>
                        </tr>
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Clicks</p>
                          </td>
                          <td><p class="text-muted"><?= $row['clicks'] ?></p></span></td>
                        </tr> 
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Duration</p>
                          </td>
                          <td><p class="text-muted"><?= $row['period'] ?></p></span></td>
                        </tr> 
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Price</p>
                          </td>
                          <td><p class="text-muted"><?= $row['price'] ?></p></span></td>
                        </tr> 
                        <!-- ********************** -->
                        <tr>
                          <td>
                            <p>Status</p>
                          </td>
                          <td><p class="text-muted"><?= $row['status'] ?></p></span></td>
                        </tr>                                                
                     
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