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
                      $sql = "SELECT * FROM advertise WHERE status=1";
                      $result = mysqli_query($conn,$sql) or die ("Error in query: $query " . mysql_error());;
                         
                       
                         $num_results = mysqli_num_rows($result);

                            
                           if ($num_results > 0){ 
                        while ($row = mysqli_fetch_array($result)){
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
                          <td class="text-primary">
                              
                              
                            <?php
                              if($row['status'] == 1)
                              echo 'Pending'; ?>
                          </td>
                             <td class="text-info">
                           Details
                          </td>
                        </tr> 
                        <?php 
                        } 
 }
                           else{
echo '<tr><td colspan="6" class="text-center text-danger h4">No Pending Right Now.</td><tr>';
}
                         ?>
                       
                      </tbody>
<!-- 												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
													</tr>
												</tbody> -->
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