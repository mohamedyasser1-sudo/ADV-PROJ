<?php 
if(session_id()=='') session_start();
include 'connect/connect.php';
$message ="";
if(isset($_SESSION['email'])){
   header("Location: ./index.php"); 
}else{
	if (isset($_POST['login'])){	
		$email        =$_POST['email']; 
		$pass         =$_POST['pass'];
		$checkuser="SELECT * FROM users WHERE email = ? AND password = ?";
		$stmt =mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$checkuser)){
            exit();
        }else{
		mysqli_stmt_bind_param($stmt,"ss",$email,$pass);
		mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
		if(mysqli_stmt_num_rows($stmt) != 1 ){
			$message = "your information is not correct please write the correct information or <a href='index.php#home'>Sign Up</a>";
		}

		else{
			  //$_SESSION['email'] = true;
		  $_SESSION['email'] = $email;
		  if(isset($_SESSION['email'])){
		  $user_info= mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");
		  while ($row = mysqli_fetch_array($user_info)){
		  $user_id = $row['id'];
		  $user_type = $row['type'];
		  $user_status = $row['active'];
		  $Pagequery= mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = '$user_id'");
		  $pageDataRowResult = mysqli_num_rows($Pagequery);
		  switch ($user_type) {
		  	case '1':
		  		if($pageDataRowResult == 0 ){
		  			header("Location: ./user_dashboard/examples/registerHostPage.php?id=$user_id");	
		  		}elseif($user_status == 0 ){
		  			header("Location: ./user_dashboard/examples/block.php?id=$user_id");
		  		}elseif($user_status == 1) {
		  			header("Location: ./user_dashboard/examples/verify.php?id=$user_id");
		  		}else{
		  			header("Location: ./user_dashboard/examples/index.php");
		  		}
		  		break;
		  	case '2':
		  		if($user_status == 0){
		  			header("Location: ./user_dashboard/examples/block.php?id=$user_id");
		  		}elseif($user_status == 1){
		  			header("Location: ./user_dashboard/examples/verify.php?id=$user_id");
		  		}else{
		  			header("Location: ./user_dashboard/examples/index.php");
		  		}
		  		break;			  	
		  	default:
		  		# code...
		  		break;
		  }

			}
			}



		} 
	}
	

	}
}	
?>