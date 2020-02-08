<?php 

include 'header.php';	

if(!$_SESSION['email']) {
    
    echo 'Yasser';
}

$userEmail = $_SESSION['email'];

$adverObj = new User($conn, $userEmail);
    
    
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
                          Ad ID
                        </th>
                        <th>
                          Page Name
                        </th>
                        <th>
                           Page URL
                        </th>
                        <th>
                          Page Description
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

                      foreach($userdata as $adddata){
                    
                          ?>
                          
                          <tr>
                          <td><?= $adddata['post_id']; ?></td>
                          <td><?= $adddata['pagename']; ?></td>
                          <td><?= $adddata['pageurl']; ?></td>
                          <td><?= $adddata['pagedescription']; ?></td>
                          <td class="text-primary">  
                            <?php
                              if($adddata['status'] == 1){
                              echo 'Pending'; }
                              ?>
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