<?php
include 'header.php'; 
include 'nav.php';
include 'sidebar.php'; 
$adv_id= $_GET['adv_id'];
$advdetails = $adminobj->getAdvData($conn,$adv_id);
$hostsinad = $adminobj->getAdHostsClicks($conn,$adv_id);


?>

			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">

								<div class="card">
									<div class="card-header">
										<div class="card-title">Ad Details And Host Count</div>
									</div>
									<div class="card-body">
										<div class="card-sub">
											This Ad ID IS <a href="adminadvdetails.php?adv_id=<?php echo $adv_id ;?>"><?=$adv_id; ?></a> 
										</div>
										<div class="table-responsive">
											<table class="table table-bordered">
                      <thead class=" text-primary">
                        <th>User ID</th>
                        <th>User email</th>
                        <th>Obtained Clicks</th>
                        <th>Price</th>
                      </thead>
					<tbody>
                      <?php
                        foreach ($hostsinad as $row){
                          $adv_id = $row ['id'];
                          $json   = '['.$row['hosts'].']';
                          $array = json_decode($json);
                          foreach ($array as $key => $jsons) { 
						     foreach($jsons as $key => $value) {
						       foreach ($advdetails as $advdetail) {
						       		$requiredclicks = $advdetail['clicks'];
                          ?>
                          
                        <tr>

                          <td><?= $key ?></td>
                          <td><?php  
                          $userEmail = $adminobj->getUserEmail($conn,$key);
                          echo $userEmail; 
                          ?>
                          	
                          </td>
                          <td><?= $value ?></td>
                          <td class="text-primary">
                          	<?php 
                          	switch ($requiredclicks) {
                          		case '500':
                          			 echo $value * 0.1 ;
                          			break;

                          		case '1000':
                          			 echo $value * 0.09 ;
                          			break;

                          		case '2000':
                          			 echo $value * 0.08 ;
                          			break;

                          		case '5000':
                          			 echo $value * 0.08 ;
                          			break;			
                          		
                          		default:
                          			
                          			break;
                          	}
                          	?>
                          $</td>

                        </tr> 
                        <?php 
                        	}
                          }
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

<?php 
  include 'footer.php';
?>