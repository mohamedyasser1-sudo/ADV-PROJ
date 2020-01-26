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
										<div class="card-title">Admins Table</div>
									</div>
									<div class="card-body">
										<div class="card-sub">
											you can see all Current Admins here
										</div>
										<div class="table-responsive">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>#</th>
														<th>Table heading</th>
														<th>Table heading</th>
														<th>Table heading</th>
														<th>Table heading</th>
														<th>Table heading</th>
														<th>Table heading</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
														<td>Table cell</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
								<div class="card">
									<div class="card-header">
										<div class="card-title">make a new admin</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label for="email">username</label>
											<input type="email" class="form-control" id="email" placeholder="Enter Email">
										</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" class="form-control" id="password" placeholder="Password">
										</div>
										<div class="card-action">
											<button class="btn btn-success">Submit</button>
										</div>
									</div>
						</div>
					</div>


<?php 
	include 'footer.php';
?>