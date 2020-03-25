<?php 
include '../../connect/connect.php'; 
	$currenttime = strtotime("NOW");

// End clicks count  Managment 
	$getAdsQuery = mysqli_query($conn," SELECT * FROM advertise WHERE status = 2");
	while($row = mysqli_fetch_array($getAdsQuery)){
		$adv_id = $row['id'];
		$advperiod = $row['period'];
		$requiredclicks = $row['clicks'];
				$getClicks = mysqli_query($conn,"SELECT * FROM clicks WHERE adv_id = '$adv_id'");
				while($clicksRow = mysqli_fetch_array($getClicks)){
					$clicskNum = $clicksRow['parts'];
					if($clicskNum = $requiredclicks){
						$changeToPending = mysqli_query($conn, "UPDATE advertise SET status = 3 WHERE id = '$adv_id'");
						//$deleteAccepted = mysqli_query($conn,"DELETE FROM `accepted_adds` WHERE add_id='$adv_id'");
					}
				}
				
	}


// End time managment 
	$getFulltimeAdsQuery = mysqli_query($conn," SELECT * FROM advertise WHERE status = 2 AND time_to_end >= '$currenttime'");
	while($endmanage = mysqli_fetch_array($getFulltimeAdsQuery)){
		$adv_id = $endmanage['id'];
		$finishadv= mysqli_query($conn,"UPDATE advertise SET status = 3 WHERE adv_id = '$adv_id'");

	}

// half time managment	
	$getAdsQuery = mysqli_query($conn," SELECT * FROM advertise WHERE status = 2 AND hour_after_half >= '$currenttime'  AND hour_before_half <= '$currenttime'");
	while($row = mysqli_fetch_array($getAdsQuery)){
		$adv_id = $row['id'];
		$advperiod = $row['period'];
		$requiredclicks = $row['clicks'];
		switch ($requiredclicks) {
			case '500':
				$getClicks = mysqli_query($conn,"SELECT * FROM clicks WHERE adv_id = '$adv_id'");
				while($clicksRow = mysqli_fetch_array($getClicks)){
					$clicskNum = $clicksRow['parts'];
					if($clicskNum <= 0.7 * $requiredclicks){
						$changeToPending = mysqli_query($conn, "UPDATE advertise SET status = 1, failed_id = CONCAT (failed_id,hosts_id), hosts_id = '',count_for_A = '',count_for_B ='',count_for_C = '',time_to_start='',hour_before_half='',half_time='',hour_after_half='',time_to_end='' WHERE id = '$adv_id'");
						$deleteAccepted = mysqli_query($conn,"DELETE FROM `accepted_adds` WHERE add_id='$adv_id'");
					}
				}
				break;

			case '1000':
			if($advperiod == 1 ){
				$getClicks = mysqli_query($conn,"SELECT * FROM clicks WHERE adv_id = '$adv_id'");
				while($clicksRow = mysqli_fetch_array($getClicks)){
					$clicskNum = $clicksRow['parts'];
					if($clicskNum <= 0.7 * $requiredclicks){
						$changeToPending = mysqli_query($conn, "UPDATE advertise SET status = 1, failed_id = CONCAT (failed_id,hosts_id), hosts_id = '',count_for_A = '',count_for_B ='',count_for_C = '',time_to_start='',hour_before_half='',half_time='',hour_after_half='',time_to_end='' WHERE id = '$adv_id'");
						$deleteAccepted = mysqli_query($conn,"DELETE FROM `accepted_adds` WHERE add_id='$adv_id'");
					}
				}
			}
			if($advperiod == 2 ){
				$getClicks = mysqli_query($conn,"SELECT * FROM clicks WHERE adv_id = '$adv_id'");
				while($clicksRow = mysqli_fetch_array($getClicks)){
					$clicskNum = $clicksRow['parts'];
					if($clicskNum <= 0.6 * $requiredclicks){
						$changeToPending = mysqli_query($conn, "UPDATE advertise SET status = 1, failed_id = CONCAT (failed_id,hosts_id), hosts_id = '',count_for_A = '',count_for_B ='',count_for_C = '',time_to_start='',hour_before_half='',half_time='',hour_after_half='',time_to_end='' WHERE id = '$adv_id'");
						$deleteAccepted = mysqli_query($conn,"DELETE FROM `accepted_adds` WHERE add_id='$adv_id'");
					}
				}
			}	
				break;

			case '2000':
			if($advperiod == 1 ){
				$getClicks = mysqli_query($conn,"SELECT * FROM clicks WHERE adv_id = '$adv_id'");
				while($clicksRow = mysqli_fetch_array($getClicks)){
					$clicskNum = $clicksRow['parts'];
					if($clicskNum <= 0.7 * $requiredclicks){
						$changeToPending = mysqli_query($conn, "UPDATE advertise SET status = 1, failed_id = CONCAT (failed_id,hosts_id), hosts_id = '',count_for_A = '',count_for_B ='',count_for_C = '',time_to_start='',hour_before_half='',half_time='',hour_after_half='',time_to_end='' WHERE id = '$adv_id'");
						$deleteAccepted = mysqli_query($conn,"DELETE FROM `accepted_adds` WHERE add_id='$adv_id'");
					}
				}
			}
			if($advperiod == 2 ){
				$getClicks = mysqli_query($conn,"SELECT * FROM clicks WHERE adv_id = '$adv_id'");
				while($clicksRow = mysqli_fetch_array($getClicks)){
					$clicskNum = $clicksRow['parts'];
					if($clicskNum <= 0.6 * $requiredclicks){
						$changeToPending = mysqli_query($conn, "UPDATE advertise SET status = 1, failed_id = CONCAT (failed_id,hosts_id), hosts_id = '',count_for_A = '',count_for_B ='',count_for_C = '',time_to_start='',hour_before_half='',half_time='',hour_after_half='',time_to_end='' WHERE id = '$adv_id'");
						$deleteAccepted = mysqli_query($conn,"DELETE FROM `accepted_adds` WHERE add_id='$adv_id'");
					}
				}
			}	
				break;		
			
			default:
				break;
		}

	}

?>