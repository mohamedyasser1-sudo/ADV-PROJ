<?php
include 'header.php'; 
$adv_id = $_GET['adv_id'];
$insertedUserID=','.$user_id;
$required_time = $advdetails['period'];
$selectsql = "SELECT * FROM accepted_adds WHERE add_id ='$adv_id'";
$selectresult = mysqli_query($conn,$selectsql);
	if(mysqli_num_rows($selectresult) == 0){
	$insertsql = "INSERT INTO `accepted_adds`(`add_id`, `hosts_id`,`hosts_count`, `required_time`) VALUES ('$adv_id','$insertedUserID',hosts_count+1,'$required_time')";
	$result = mysqli_query($conn,$insertsql);
		if ($result){
			$message = " You Accepted That Advertisment";
			header("Location: adsRequests.php"); 
		}else{
			echo " error ". mysqli_error($conn);
		}
	}else{
		$insertsql = "UPDATE `accepted_adds` SET `hosts_id`= CONCAT (hosts_id,'$insertedUserID') WHERE add_id = '$adv_id'";
		
		$result = mysqli_query($conn,$insertsql);
		if ($result){
			$message = " You Accepted That Advertisment";
			header("Location: adsRequests.php"); 
		}else{
			echo " error ". mysqli_error($conn);
		}

	}

?>