<?php
include 'header.php'; 
$adv_id = $_GET['adv_id'];
$insertedUserID=$user_id.',';
$selectsql = "SELECT * FROM rejected_adds WHERE add_id ='$adv_id'";
$selectresult = mysqli_query($conn,$selectsql);
	if(mysqli_num_rows($selectresult) == 0){
	$insertsql = "INSERT INTO `rejected_adds`(`add_id`, `hosts_id`) VALUES ('$adv_id','$insertedUserID')";
	$result = mysqli_query($conn,$insertsql);
		if ($result){
			$message = " You Rejected That Advertisment";
			header("Location: adsRequests.php"); 
		}else{
			echo " error ". mysqli_error($conn);
		}
	}else{
		// $insertsql = "UPDATE `rejected_adds` SET `hosts_id`= CONCAT (hosts_id,'$insertedUserID') WHERE add_id = '$adv_id'";
		
		// $result = mysqli_query($conn,$insertsql);
		// if ($result){
		$insertsql = "UPDATE `rejected_adds` SET `hosts_id`= CONCAT (hosts_id,'$insertedUserID') WHERE add_id = '$adv_id'";		
		$Rejecteresult = mysqli_query($conn,$insertsql);
		$insertAdvertisesql ="UPDATE `advertise` SET `rejects_id`= CONCAT (rejects_id,'$insertedUserID') WHERE id = '$adv_id'";
		$advertiseresult = mysqli_query($conn,$insertAdvertisesql);
		if ($advertiseresult){	
			$message = " You Rejected That Advertisment";
			header("Location: adsRequests.php"); 
		}else{
			echo " error ". mysqli_error($conn);
		}

	}

?>