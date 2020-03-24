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
										<div class="card-title">Advertisers Table</div>
									</div>
									<div class="card-body">
										<div class="card-sub">
											you can see all Hosting users here
										</div>
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>User ID</th>
														<th>Username</th>
														<th>Email</th>
														<th>County</th>
														<th>Phone</th>
														<th>Join Data</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<?php foreach($hostdata as $hostuserdata){
														$useridforblock = $hostuserdata['id'];
														$blockestatus = $hostuserdata['active']; ?>

														<th scope="row"><?= $hostuserdata['id']; ?></th>
														<td><?= $hostuserdata['username']; ?></td>
														<td><?= $hostuserdata['email']; ?></td>
														<td><?= $hostuserdata['country']; ?></td>
														<td><?= $hostuserdata['phone']; ?></td>
														<td><?= $hostuserdata['date']; ?></td>

														<td>
															<?php  
														if($blockestatus == 0 ){
								
														echo
														"<a href='unblockuser.php?hostid=$useridforblock' ><button class='btn btn-success'>Unblock</button> </a>";
													}
													elseif($blockestatus == 1){
														echo
														"<a href='blockuser.php?hostid=$useridforblock' ><button class='btn btn-danger'>Block</button> </a>";
													}
															?>
														</td>
											
													</tr>
													<?php } ?>

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