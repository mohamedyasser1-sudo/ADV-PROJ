<?php 
	include 'header.php'; 
	include 'nav.php';
	include 'sidebar.php';

	$message = "";

	if (isset($_POST['changepassword'])) {
		$admin		 = $_SESSION['admin'];
		$oldpassword = $_POST['oldpassword'];
		$newpassword = $_POST['newpassword'];
		$conpassword = $_POST['conpassword'];

		if( empty($oldpassword) || empty($newpassword) || empty($conpassword)){
			$message = " you can't leave fileds empty ";
		}elseif($newpassword !== $conpassword){
			$message = " passwords are not matched ";
		}elseif(strlen($newpassword) < 6){
			$message = " password can't be less than 6 charachters";
		}else{    
			$checkquery ="SELECT * FROM admin WHERE username = '$admin'";
			$result = mysqli_query($conn,$checkquery);
			if(mysqli_num_rows($result) == 1){
				while($row = mysqli_fetch_assoc($result))
				$verify = password_verify($oldpassword,$row['password']);
				if($verify){
				$hashedpassword= password_hash($newpassword, PASSWORD_DEFAULT);
				$update ="UPDATE admin SET password ='$hashedpassword' WHERE username = '$admin'";
        		$sql = mysqli_query($conn,$update);
        		if ($sql) {$message = " yes"; }else {$message= " error". mysqli_error($conn); }
        		//header("Location: login.php");

				} 
			}else{
				$message = " your old password is not correct";

			}
		}

		}  

	
?>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">

								<div class="card">
									<div class="card-header">
										<div class="card-title">Change your Password</div>
									</div>
									<form method="post" action="#">
									<div class="card-body">
										<div class="form-group">
											<label for="oldpassword">Old Password</label>
											<input name="oldpassword" type="password" class="form-control" id="password" placeholder="Old Password">
										</div>
										<div class="form-group">
											<label for="newpassword">New Password</label>
											<input name="newpassword" type="password" class="form-control" id="password" placeholder="New Password">
										</div>
										<div class="form-group">
											<label for="conpassword">confirm Password</label>
											<input name="conpassword" type="password" class="form-control" id="password" placeholder="Confirm New Password">
										</div>
										<div class="card-action">
											<button name="changepassword" class="btn btn-success">Submit</button>
										</div>
										<?php echo $message; ?>
									</div>
								</form>
						</div>

					</div>
				</div>
			</div>



<?php 
	include 'footer.php';
?>