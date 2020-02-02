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
                        <th colspan="2" class="text-center">
                          Action
                        </th>
                           <th>
                          Show
                        </th>
                      </thead>
                      <tbody>
                      <?php
                      $sql = "SELECT * FROM advertise WHERE  status=1";
                      $result = mysqli_query($conn,$sql) or die ("Error in query: $query " . mysql_error());
                        
                       $catQuery = "SELECT category FROM hostpages WHERE user_id = '$user_id'";   
                          $catQueryResult = mysqli_query($conn,$catQuery) or die ("Error in query: $query " . mysql_error());
                          
                          $userCatData = mysqli_fetch_row($catQueryResult);
                          $userCat = $userCatData[0];
                       
                         $num_results = mysqli_num_rows($result);

                         
                          
                           
                               
                                   if ($num_results > 0){ 
                                       
                        while ($row = mysqli_fetch_array($result)){
                            if($row['requiredcat1'] == $userCat || $row['requiredcat2'] == $userCat ) {
                          ?>
                          
                          <tr>
                          <td>
                            <?= $row['id']; ?>
                          </td>
                          <td>
                            <?= $row['pagename']; ?>
                          </td>
                          <td>
                              
                              
                             <?= $row['pageurl']; ?>
                          </td>
                          <td>
                             <?= $row['pagedescription']; ?>
                          </td>
                      <td class="text-success">
                           Accept
                          </td>
                             <td class="text-danger">
                           Reject
                          </td>
                              <td class="text-info">
                            Details 
                          </td>
                        </tr> 
                        <?php 
                        } 
 }
    }                       else{
echo '<tr><td colspan="6" class="text-center text-danger h4">No Ads Requests Right Now.</td><tr>';
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