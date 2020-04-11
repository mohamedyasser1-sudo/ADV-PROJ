<?php 
	include 'header.php'; 
	include 'nav.php';
	include 'sidebar.php';
?>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">

								<div class="card">
									<div class="card-header">
										<div class="card-title">Ads History</div>
									</div>
									<div class="card-body">
										<div class="card-sub">
											you can see all Finished Ads Here
										</div>
										<div class="table-responsive">
											<table class="table table-bordered">
                      <thead class=" text-primary">
                        <th> Ad ID</th>
                        <th>Page Name</th>
                        <th> Page URL</th>
                        <th>Page Description</th>
                        <th># of Clicks</th>
                        <th>Status</th>
                        <th>Action</th>
                      </thead>
					<tbody>
                      <?php
                        foreach ($historyAdsData as $row){
                          $adv_id = $row ['id'];
                          ?>
                          
                        <tr>
                          <td><?= $row['id']; ?></td>
                          <td><?= $row['pagename']; ?></td>
                          <td><?= $row['pageurl']; ?></td>
                          <td><?= $row['pagedescription']; ?></td>
                          <td><?= $row['clicks']; ?></td>
                          <td class="text-primary">Finished</td>
                          <td class="text-info">
                          <a href="adminadvhistorydetails.php?adv_id=<?php echo $adv_id ;?>"><button class='btn btn-primary'>Details</button> </a></td>
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



<?php 
	include 'footer.php';
?>