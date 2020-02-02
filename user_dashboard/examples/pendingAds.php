<?php 
include 'header.php';	
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Pending Ads</h4>
                  <p class="card-category">Pending Ads Info</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        <th>
                          Ad Name
                        </th>
                        <th>
                          Country
                        </th>
                        <th>
                          Host
                        </th>
                        <th>
                          Status
                        </th>
                           <th>
                          Show
                        </th>
                      </thead>
                      <tbody>
                      <?php
                      $sql = "SELECT * FROM advertise WHERE post_id = '$user_id' AND status=1";
                      $result = mysqli_query($conn,$sql);
                        while ($row = mysqli_fetch_array($result)){
                          ?>
                          <tr>
                          <td>
                            <?= $row['id']; ?>
                          </td>
                          <td>
                            <?= $row['description1']; ?>
                          </td>
                          <td>
                             <?= $row['description1']; ?>
                          </td>
                          <td>
                             <?= $row['description1']; ?>
                          </td>
                          <td class="text-primary">
                            <?= $row['description1']; ?>
                          </td>
                             <td class="text-info">
                           Details
                          </td>
                        </tr> 
                        <?php 
                        } 

                         ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
              
         
            </div>
        </div>
      </div>
          
          <?php 
	include 'footer.php'; 
	
?>