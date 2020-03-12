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
                  <h4 class="card-title ">Accepted Ads</h4>
                  <p class="card-category">Your Accepted Ads</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <?php

                      if ($acceptedAddsNum == 0 ){
                        echo " No Pending adds yet ";
                        }else { echo ' 
                      <table class="table table-hover">
                      <thead class=" text-primary">
                        <th>Ad ID</th>
                        <th>Page Name</th>
                        <th>Page URL</th>
                        <th>Page Description</th>
                        <th>AD Duration </th>
                        <th>Link</th>
                        <th>Show</th>
                      </thead>
                      <tbody>';
                        foreach($acceptedAddsData as $acceptedAddData){
                          $adv_id = $acceptedAddData['id'];

                          ?>                      
                          <tr>
                          <td><?= $acceptedAddData['id']; ?></td>
                          <td><?= $acceptedAddData['pagename']; ?></td>
                          <td><?= $acceptedAddData['pageurl']; ?></td>
                          <td><?= $acceptedAddData['pagedescription'];?></td>
                          <th><?= $acceptedAddData['period']  ?> Day</th>
                          <td> Not started Yet</td>                          
                          <td class="text-info"><a href="adDetails.php?adv_id=<?= $adv_id; ?>"><button class="btn btn-primary">Details </button></a></td>
                        </tr> 
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