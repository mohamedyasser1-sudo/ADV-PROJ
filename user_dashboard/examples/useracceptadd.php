<?php
include 'header.php'; 
$adv_id = $_GET['adv_id'];
$insertedUserID=','.$user_id.',';
$secondUserID = $user_id.',';
$query  = mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = '$user_id'");
while ($row = mysqli_fetch_array($query)){
$followerscategory = $row['followers_cat'];
$selectresult = mysqli_query($conn,"SELECT * FROM accepted_adds WHERE add_id ='$adv_id'");
	if(mysqli_num_rows($selectresult) == 0){
			switch ($followerscategory) {
				case 'A':
 				mysqli_query($conn,"INSERT INTO `accepted_adds`(`add_id`, `hosts_id`,`hosts_count`) VALUES ('$adv_id','$insertedUserID',hosts_count+1)");
				mysqli_query($conn,"UPDATE advertise SET count_for_A = count_for_A+1, hosts_id = CONCAT (hosts_id,'$insertedUserID') WHERE id='$adv_id'");
				break;
				case 'B':
				mysqli_query($conn,"INSERT INTO `accepted_adds`(`add_id`, `hosts_id`,`hosts_count`, `required_time`) VALUES ('$adv_id','$insertedUserID',hosts_count+1,'$required_time')");
					$updateadvertisetable= "UPDATE advertise SET count_for_B = count_for_B+1 , hosts_id = CONCAT (hosts_id,'$insertedUserID') WHERE id='$adv_id'";
					mysqli_query($conn,$updateadvertisetable);
					break;	
				case 'C':
				mysqli_query($conn,"INSERT INTO `accepted_adds`(`add_id`, `hosts_id`,`hosts_count`, `required_time`) VALUES ('$adv_id','$insertedUserID',hosts_count+1,'$required_time')");
					$updateadvertisetable= "UPDATE advertise SET count_for_C = count_for_C+1 , hosts_id = CONCAT (hosts_id,'$insertedUserID') WHERE id='$adv_id'";
					mysqli_query($conn,$updateadvertisetable);
					break;										
				default:
					echo " No Ads";
					break;
			}
			$clickcountquery = mysqli_query($conn,"SELECT * FROM advertise WHERE id = '$adv_id'");
			while($advertisedata = mysqli_fetch_array($clickcountquery)){
				$clickcount = $advertisedata['clicks'];
				$advTime    = $advertisedata['period'];
				$A_count 	= $advertisedata['count_for_A'];
				$B_count    = $advertisedata['count_for_B'];
				$C_count    = $advertisedata['count_for_C'];
				$date		= strtotime("now");
				if($advTime == 1){
					$hourbefore = strtotime("+11 hours");
					$halftime   = strtotime("+12 hours");
					$hourafter  = strtotime("+13 hours");
					$endtime    = strtotime("+24 hours");
				}else{
					$hourbefore = strtotime("+23 hours");
					$halftime   = strtotime("+24 hours");
					$hourafter  = strtotime("+25 hours");
					$endtime    = strtotime("+48 hours");
				}
				
				$hosts      = $advertisedata['hosts_id'];
			}

			switch ($clickcount) {
				case '500':
					if($A_count == 4){
					$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
					$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
						$hosts_id = explode(',',$hosts);					
						foreach ($hosts_id as $host_id) {
							if($host_id != 0){
							$links = new generate_link($adv_id,$host_id);
							$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
							$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
							header("Location: acceptedsAds.php");					
							}					
						}				
					}

				break;

				case '1000':
					if($advTime == 1){
						if($A_count == 4 & $B_count == 2){
						$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
						$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
							$hosts_id = explode(',',$hosts);					
							foreach ($hosts_id as $host_id) {
								if($host_id != 0){
								$links = new generate_link($adv_id,$host_id);
								$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
								$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
								header("Location: acceptedsAds.php");					
								}					
							}				
						}
					}
					if($advTime == 2){
						if($A_count == 2 & $B_count == 1){
						$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
						$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
							$hosts_id = explode(',',$hosts);					
							foreach ($hosts_id as $host_id) {
								if($host_id != 0){
								$links = new generate_link($adv_id,$host_id);
								$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
								$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
								header("Location: acceptedsAds.php");					
								}					
							}				
						}
					}

				break;

				case '2000':
					if($advTime == 1){
						if($B_count == 4 & $C_count == 2){
						$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
						$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
							$hosts_id = explode(',',$hosts);					
							foreach ($hosts_id as $host_id) {
								if($host_id != 0){
								$links = new generate_link($adv_id,$host_id);
								$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
								$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
								header("Location: acceptedsAds.php");					
								}					
							}				
						}
					}
					if($advTime == 2){
						if($B_count == 2 & $C_count == 1){
						$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
						$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
							$hosts_id = explode(',',$hosts);					
							foreach ($hosts_id as $host_id) {
								if($host_id != 0){
								$links = new generate_link($adv_id,$host_id);
								$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
								$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
								header("Location: acceptedsAds.php");					
								}					
							}				
						}
					}
					break;

				default:
					break;
			}

	}else{ 		
		$Acceptedresult = mysqli_query($conn,"UPDATE `accepted_adds` SET `hosts_id`= CONCAT (hosts_id,'$secondUserID') WHERE add_id = '$adv_id'");
		$advertiseresult = mysqli_query($conn,"UPDATE `advertise` SET `hosts_id`= CONCAT (hosts_id,'$secondUserID') WHERE id = '$adv_id'");

			switch ($followerscategory) {
				case 'A':
 				mysqli_query($conn,"UPDATE accepted_adds SET hosts_id = CONCAT (hosts_id,'$secondUserID') hosts_count = hosts_count+1 WHERE add_id = '$adv_id'");
				mysqli_query($conn,"UPDATE advertise SET count_for_A = count_for_A+1, hosts_id = CONCAT (hosts_id,'$insertedUserID') WHERE id='$adv_id'");
				break;
				case 'B':
				mysqli_query($conn,"UPDATE accepted_adds SET hosts_id = CONCAT (hosts_id,'$secondUserID') hosts_count = hosts_count+1 WHERE add_id = '$adv_id'");
					$updateadvertisetable= "UPDATE advertise SET count_for_B = count_for_B+1 , hosts_id = CONCAT (hosts_id,'$insertedUserID') WHERE id='$adv_id'";
					mysqli_query($conn,$updateadvertisetable);
					break;	
				case 'C':
				mysqli_query($conn,"UPDATE accepted_adds SET hosts_id = CONCAT (hosts_id,'$secondUserID') hosts_count = hosts_count+1 WHERE add_id = '$adv_id'");
					$updateadvertisetable= "UPDATE advertise SET count_for_C = count_for_C+1 , hosts_id = CONCAT (hosts_id,'$insertedUserID') WHERE id='$adv_id'";
					mysqli_query($conn,$updateadvertisetable);
					break;						
				
				default:
					echo " No Ads";
					break;
			}
			$clickcountquery = mysqli_query($conn,"SELECT * FROM advertise WHERE id = '$adv_id'");
			while($advertisedata = mysqli_fetch_array($clickcountquery)){
				$clickcount = $advertisedata['clicks'];
				$advTime    = $advertisedata['period'];
				$A_count 	= $advertisedata['count_for_A'];
				$B_count    = $advertisedata['count_for_B'];
				$C_count    = $advertisedata['count_for_C'];
				$date		= date("Y-m-d | h:i:sa");
				$hosts      = $advertisedata['hosts_id'];
			}

			switch ($clickcount) {
				case '500':
					if($A_count == 4){
					$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
					$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
						$hosts_id = explode(',',$hosts);					
						foreach ($hosts_id as $host_id) {
							if($host_id != 0){
							$links = new generate_link($adv_id,$host_id);
							$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
							$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
							header("Location: acceptedsAds.php");					
							}					
						}				
					}

				break;

				case '1000':
					if($advTime == 1){
						if($A_count == 4 & $B_count == 2){
						$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
						$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
							$hosts_id = explode(',',$hosts);					
							foreach ($hosts_id as $host_id) {
								if($host_id != 0){
								$links = new generate_link($adv_id,$host_id);
								$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
								$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
								header("Location: acceptedsAds.php");					
								}					
							}				
						}
					}
					if($advTime == 2){
						if($A_count == 2 & $B_count == 1){
						$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
						$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
							$hosts_id = explode(',',$hosts);					
							foreach ($hosts_id as $host_id) {
								if($host_id != 0){
								$links = new generate_link($adv_id,$host_id);
								$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
								$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
								header("Location: acceptedsAds.php");					
								}					
							}				
						}
					}

				break;

				case '2000':
					if($advTime == 1){
						if($B_count == 4 & $C_count == 2){
						$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
						$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
							$hosts_id = explode(',',$hosts);					
							foreach ($hosts_id as $host_id) {
								if($host_id != 0){
								$links = new generate_link($adv_id,$host_id);
								$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
								$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
								header("Location: acceptedsAds.php");					
								}					
							}				
						}
					}
					if($advTime == 2){
						if($B_count == 2 & $C_count == 1){
						$changestatusquery = mysqli_query($conn,"UPDATE advertise SET status = 2,time_to_start ='$date',hour_before_half='$hourbefore',half_time='$halftime', hour_after_half='$hourafter', time_to_end = '$endtime'  WHERE id = '$adv_id'");
						$changestatusquery = mysqli_query($conn,"UPDATE accepted_adds SET time_to_start = '$date' WHERE add_id = '$adv_id'");
							$hosts_id = explode(',',$hosts);					
							foreach ($hosts_id as $host_id) {
								if($host_id != 0){
								$links = new generate_link($adv_id,$host_id);
								$link  = $links->get_current_url().'/AdProject/process.php?pub='.$links->encryption_advertisment_id($host_id).'&ksect='.$links->encryption_advertisment_id($adv_id);
								$save_link = mysqli_query($conn,"INSERT INTO `links`(`adv_id`, `host_id`, `link`) VALUES ('$adv_id','$host_id','$link')");						
								header("Location: acceptedsAds.php");					
								}					
							}				
						}
					}
					break;

				default:
					break;
			}


		if ($Acceptedresult & $advertiseresult){
			$message = " You Accepted That Advertisment";
			header("Location: acceptedsAds.php"); 
		}else{
			echo " error ". mysqli_error($conn);
		}

	}
}

?>