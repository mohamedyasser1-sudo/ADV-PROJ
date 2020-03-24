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
										<div class="card-title">Host Table</div>
									</div>
									<div class="card-body">
										<div class="card-sub">
											you can see all Host users here
										</div>
										<div class="table-responsive">
											<table class="table table-bordered">
                      <thead class=" text-primary">
                        <th> Ad ID</th>
                        <th>Page Name</th>
                        <th> Page URL</th>
                        <th>Page Description</th>
                        <th>Status</th>
                        <th>Show</th>
                      </thead>
						            <tbody>
                      <?php
                        foreach ($pendingaddsdata as $row){
                          $adv_id = $row ['id'];
                          ?>
                          
                        <tr>
                          <td><?= $row['id']; ?></td>
                          <td><?= $row['pagename']; ?></td>
                          <td><?= $row['pageurl']; ?></td>
                          <td><?= $row['pagedescription']; ?></td>
                          <td class="text-primary">Pending</td>
                          <td class="text-info">
                          <a href="adminadvdetails.php?adv_id=<?php echo $adv_id ;?>"><button class='btn btn-primary'>Details</button> </a></td>
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