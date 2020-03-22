<?php 
include '../../connect/connect.php'; 
	$currenttime = strtotime("NOW");
	$anhourlater = strtotime("-1 hour");
	$getAdsQuery = mysqli_query($conn," SELECT * FROM advertise WHERE status = 2 AND hour_after_half >= '$currenttime'  AND hour_before_half <= '$currenttime'");
	while($row = mysqli_fetch_array($getAdsQuery)){
		$adv_id = $row['id'];
		$requiredclicks = $row['clicks'];
		$getClicks = mysqli_query($conn,"SELECT * FROM clicks WHERE adv_id = '$adv_id'");
		while($clicksRow = mysqli_fetch_array($getClicks)){
			$clicskNum = $clicksRow['parts'];
			if($clicskNum <= 0.7 * $requiredclicks){
				$changeToPending = mysqli_query($conn, "UPDATE advertise SET status = 1, failed_id = CONCAT (failed_id,hosts_id), hosts_id = '',count_for_A = '',count_for_B ='',count_for_C = '',time_to_start='',hour_before_half='',half_time='',hour_after_half='',time_to_end='' WHERE id = '$adv_id'");
				$deleteAccepted = mysqli_query($conn,"DELETE FROM `accepted_adds` WHERE add_id='$adv_id'");
			}
		}
	}

?>