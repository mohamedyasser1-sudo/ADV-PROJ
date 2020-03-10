<?php 
	include 'header.php'; 	
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Current Ads</h4>
                  <p class="card-category">Current Ads Info and Links</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <?php
                      if($currentaddsnum ==0){
                        echo "No Current Adds Available yet "; 
                      }else {
                      echo '<table class="table table-hover">
                      <thead class=" text-primary">
                        <th>Ad ID</th>
                        <th>User ID</th>
                        <th>Page Name</th>
                        <th>Page URL</th>
                        <th>Page Description</th>
                        <th>Your Link</th>
                        <th>Actions</th>
                      </thead>
                      <tbody>'; 
                          foreach($currentadds as $currentadd){
                            $add_id = $currentadd['id'];
                            $host_id = $user_id;
                          ?>
                          <tr>
                          <td><?= $currentadd['id']; ?></td>  
                          <td><?= $currentadd['post_id']; ?></td>
                          <td><?= $currentadd['pagename']; ?></td>
                          <td><?= $currentadd['pageurl']; ?></td>
                          <td><?= $currentadd['pagedescription']; ?></td>
                          <td class="text-primary">  
                            
                            <a href="<?php new generate_link($add_id,$host_id); ?>"> <?php new generate_link($add_id,$host_id); ?></a>
                            
                          </td>
                          <td><button class="btn btn-primary">Copy</button></td>
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