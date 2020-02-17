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
											you can see all adverising users here
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
														<?php foreach($advertisedata as $advuserdata){
														$useridforblock = $advuserdata['id'];
														$blockestatus = $advuserdata['active']; ?>

														<th scope="row"><?= $advuserdata['id']; ?></th>
														<td><?= $advuserdata['username']; ?></td>
														<td><?= $advuserdata['email']; ?></td>
														<td><?= $advuserdata['country']; ?></td>
														<td><?= $advuserdata['phone']; ?></td>
														<td><?= $advuserdata['date']; ?></td>

														<td>
															<?php  
														if($blockestatus == 0 ){
								
														echo
														"<a href='blockuser.php?id=$useridforblock' ><button class='btn btn-success'>Unblock</button> </a>";
													}
													elseif($blockestatus == 1){
														echo
														"<a href='blockuser.php?id=$useridforblock' ><button class='btn btn-danger'>Block</button> </a>";
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