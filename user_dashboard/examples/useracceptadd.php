<?php
include 'header.php'; 
$adv_id = $_GET['adv_id'];
$insertedUserID=$user_id.',';
$query  = mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = '$user_id'");
while ($row = mysqli_fetch_array($query)){
$followerscategory = $row['followers_cat'];
//$required_time = $row['period'];

$selectsql = "SELECT * FROM accepted_adds WHERE add_id ='$adv_id'";
$selectresult = mysqli_query($conn,$selectsql);
	if(mysqli_num_rows($selectresult) == 0){
			switch ($followerscategory) {
				case 'A':
 				mysqli_query($conn,"INSERT INTO `accepted_adds`(`add_id`, `hosts_id`,`hosts_count`, `required_time`) VALUES ('$adv_id','$insertedUserID',hosts_count+1,'$required_time')");
				mysqli_query($conn,"UPDATE advertise SET count_for_A = count_for_A+1, hosts_id = CONCAT (hosts_id,'$insertedUserID') WHERE id='$adv_id'");
				$message = " You Accepted That Advertisment";
				header("Location: adsRequests.php");
				break;
				case 'B':
				mysqli_query($conn,"INSERT INTO `accepted_adds`(`add_id`, `hosts_id`,`hosts_count`, `required_time`) VALUES ('$adv_id','$insertedUserID',hosts_count+1,'$required_time')");
					$updateadvertisetable= "UPDATE advertise SET count_for_B = count_for_B+1 , hosts_id = CONCAT (hosts_id,'$insertedUserID') WHERE id='$adv_id'";
					mysqli_query($conn,$updateadvertisetable);
					$message = " You Accepted That Advertisment";
					header("Location: adsRequests.php");
					break;	
				case 'C':
				mysqli_query($conn,"INSERT INTO `accepted_adds`(`add_id`, `hosts_id`,`hosts_count`, `required_time`) VALUES ('$adv_id','$insertedUserID',hosts_count+1,'$required_time')");
					$updateadvertisetable= "UPDATE advertise SET count_for_C = count_for_C+1 , hosts_id = CONCAT (hosts_id,'$insertedUserID') WHERE id='$adv_id'";
					mysqli_query($conn,$updateadvertisetable);
					$message = " You Accepted That Advertisment";
					header("Location: adsRequests.php");
					break;						
				
				default:
					echo " No Ads";
					break;
			}
	}else{
		$insertsql = "UPDATE `accepted_adds` SET `hosts_id`= CONCAT (hosts_id,'$insertedUserID') WHERE add_id = '$adv_id'";		
		$Acceptedresult = mysqli_query($conn,$insertsql);
		$insertAdvertisesql ="UPDATE `advertise` SET `hosts_id`= CONCAT (hosts_id,'$insertedUserID') WHERE id = '$adv_id'";
		$advertiseresult = mysqli_query($conn,$insertAdvertisesql);
		if ($Acceptedresult & $advertiseresult){
			$message = " You Accepted That Advertisment";
			header("Location: adsRequests.php"); 
		}else{
			echo " error ". mysqli_error($conn);
		}

	}
}

?>