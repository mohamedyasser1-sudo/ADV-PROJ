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
										<div class="card-title">Change your Password</div>
									</div>
									<div class="card-body">
										<div class="form-group">
											<label for="oldpassword">Old Password</label>
											<input type="email" class="form-control" id="email" placeholder="Old Password">
										</div>
										<div class="form-group">
											<label for="newpassword">New Password</label>
											<input type="password" class="form-control" id="password" placeholder="New Password">
										</div>
										<div class="form-group">
											<label for="conpassword">confirm Password</label>
											<input type="password" class="form-control" id="password" placeholder="Confirm New Password">
										</div>
										<div class="card-action">
											<button class="btn btn-success">Submit</button>
										</div>
									</div>
						</div>

					</div>
				</div>
			</div>



<?php 
	include 'footer.php';
?>