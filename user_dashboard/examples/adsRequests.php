<?php 

include 'header.php';	

if(!$_SESSION['email']) {
    
    echo 'Yasser';
}
$userEmail = $_SESSION['email'];
$userObj = new User($conn, $userEmail);

   
    
?>
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Ads Requests</h4>
                  <p class="card-category">Ads Requests Info</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <?php

                      if ($singleuseraddsnum == 0 ){
                        echo " No Pending adds yet ";
                        }else { echo ' 
                      <table class="table table-hover">
                      <thead class=" text-primary">
                        <th>Ad ID</th>
                        <th>Page Name</th>
                        <th>Page URL</th>
                        <th>Page Description</th>
                        <th colspan="2" class="text-center">Action</th><th>Show</th>
                      </thead>
                      <tbody>';
                        foreach($singleuseradds as $addsdata){
                          $adv_id = $addsdata['id'];
                            $query = mysqli_query($conn, "SELECT * FROM accepted_adds WHERE add_id = '$adv_id'");
                              $hostsIDResults= mysqli_fetch_array($query);
                              $hostsIDarray = $hostsIDResults['hosts_id'];
                              $Host_ID_explode = explode(",", $hostsIDarray);

                              $userIDComma = "," . $user_id;

                              if( strstr($hostsIDarray, $userIDComma) ) {
                                $isAccept =  true; 
                              }
                              else {
                                $isAccept = false;                             
                              }
                              $queryreject = mysqli_query($conn, "SELECT * FROM rejected_adds WHERE add_id = '$adv_id'");
                                    $hostsIDResultsReject= mysqli_fetch_array($queryreject);
                                    $hostsIDarrayReject = $hostsIDResultsReject['hosts_id'];
                                    $Host_ID_explodeReject = explode(",", $hostsIDarrayReject);

                                    $userIDCommaReject = ",". $user_id;

                                    if( strstr($hostsIDarrayReject, $userIDCommaReject) ) {
                                      $isReject = true;    
                                    }
                                    else {
                                      $isReject = false;                                     
                                    }
                          ?>                      
                          <tr>
                          <td><?= $addsdata['id']; ?></td>
                          <td><?= $addsdata['pagename']; ?></td>
                          <td><?= $addsdata['pageurl']; ?></td>
                          <td><?= $addsdata['pagedescription'];?></td>

                          <?php
                            if($isAccept){
                              echo '<td class="text-danger"><button class="btn btn-success disabled"> You have Accepted this Advertisment</button></td>';
                            }else{

                                if ($isReject){
                                echo '<td class="text-danger"><button class="btn btn-disabled disabled"> You have Rejected this Advertisment</button></td>';
                              }else{
                                 echo '<td class="text-danger"><a href="useracceptadd.php?adv_id='.$adv_id.'"><button class="btn btn-success"> Accept</button></a></td>';
                                echo '<td class="text-danger"><a href="userrejectadd.php?adv_id='.$adv_id.'"><button class="btn btn-danger"> Reject</button></a></td>';                              
                              }

                             

                              }
                           ?>
                          
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