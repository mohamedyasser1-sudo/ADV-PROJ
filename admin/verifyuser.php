<?php 
	include 'header.php'; 
	include 'nav.php';
	include 'sidebar.php';

	$message = "";

	if (isset($_POST['sendcode'])) {
		$user_id	 = $_GET['hostid'];
		$code 		 = $_POST['code'];
		$recode		 = $_POST['recode'];

		if(empty($code) || empty($recode)){
			$message = " you can't leave fileds empty ";
		}elseif($code !== $recode){
			$message = " codes are not matched ";
		}else{    
			$update ="UPDATE hostpages SET verification ='$code', status = 1 WHERE user_id = '$user_id'";
    	   	$sql = mysqli_query($conn,$update);
         		if ($sql){
         			$message = " Verification Code has been sent, Once user verifies it on his page he will start working normally";
         			header("Location: verifiyhostpages.php"); 
         		}else {
         			$message= " error". mysqli_error($conn);
         		}
				} 
			}
?>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">

								<div class="card">
									<div class="card-header">
										<div class="card-title">Write the activation code You sent to the Host User</div>
									</div>
									<form method="post" action="#">
									<div class="card-body">
										<div class="form-group">
											<label for="oldpassword">Activation Code</label>
											<input name="code" type="password" class="form-control" id="password" placeholder="Code">
										</div>
										<div class="form-group">
											<label for="newpassword">Confirm Activation Code</label>
											<input name="recode" type="password" class="form-control" id="password" placeholder="Rewrite Code">
										</div>

										<div class="card-action">
											<button name="sendcode" class="btn btn-success">Submit</button>
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