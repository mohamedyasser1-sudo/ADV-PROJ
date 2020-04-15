<?php 
	include 'header.php'; 	
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Finished Ads</h4>
                  <p class="card-category">Finished Ads Info and Links</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <?php
                      if($addhistorynum ==0){
                        echo "No Current Adds Available yet "; 
                      }else {
                      echo '<table class="table table-hover">
                      <thead class=" text-primary">
                        <th>Ad ID</th>
                        <th>User ID</th>
                        <th>Page Name</th>
                        <th>Page URL</th>
                        <th>Page Description</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>'; 
                          foreach($addhistory as $addhistorysingle){
                            $add_id = $addhistorysingle['id'];
                            $host_id = $user_id;
                          ?>
                          <tr>
                          <td><?= $addhistorysingle['id']; ?></td>  
                          <td><?= $addhistorysingle['post_id']; ?></td>
                          <td><?= $addhistorysingle['pagename']; ?></td>
                          <td><?= $addhistorysingle['pageurl']; ?></td>
                          <td><?= $addhistorysingle['pagedescription']; ?></td>

                          <td><a href="adDetails.php?adv_id=<?= $adv_id ?>" class="text-info"><button class="btn btn-primary">Details</button></a></td>
                        <?php           
                          }
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