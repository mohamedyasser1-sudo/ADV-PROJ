<?php
class User {
	private $user;
	private $conn;

	public function __construct($conn, $user){
		$this->conn = $conn;
		$user_details_query = mysqli_query($conn, "SELECT * FROM users WHERE email='$user'");
		$this->user = mysqli_fetch_array($user_details_query);
	}

	public function getUsername() {
		return $this->user['username'];
	}
	public function getUserId() {
		return $this->user['id'];
	}

	public function getAdvertiseDataForAdmin($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM users WHERE type=2");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getAdvertiseNumForAdmin($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM users WHERE type=2");
	$num = mysqli_num_rows($result);	
 	return  $num; 
	}

	public function getHostDataForAdmin($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM users WHERE type=1");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getHostNumForAdmin($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM users WHERE type=1");
	$num = mysqli_num_rows($result);	
 	return  $num;
	}

	public function getsingleHostDataForAdmin($conn,$user_id){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM users WHERE id='$user_id'");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	
	public function getUserProfileData($conn,$user_id){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM users WHERE id = '$user_id'");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getHostCurrentAds($conn,$user_id){
		$array = array();
		$searchedID= ','.$user_id.',';
		$result = mysqli_query($conn,"SELECT * FROM advertise WHERE status = 'current' AND hosts_id LIKE '%$searchedID%'");
		while ($row = mysqli_fetch_array($result)){
			$array[]=$row;
		}
		return $array;
	}

	public function getHostCurrentAdsnum($conn,$user_id){
		
		$searchedID= ','.$user_id.',';
		$result = mysqli_query($conn,"SELECT * FROM advertise WHERE status = 'current' AND hosts_id LIKE '%$searchedID%'");
		$num = mysqli_num_rows($result);
		return $num;
	}

	public function getUserPendingAdsnum($conn,$user_id){
	$this->conn= $conn;
	$addsquery=mysqli_query($conn,"SELECT * FROM advertise WHERE post_id = '$user_id' AND status=1 AND price > 0");
	//while ($add = mysqli_fetch_array($addsquery));
	return mysqli_num_rows($addsquery);
	}

	public function getUserPendingAdsdata($conn,$user_id){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM advertise WHERE post_id = '$user_id' AND status=1 AND price > 0");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getAdminAllAdsnum($conn){
	$addsquery=mysqli_query($conn,"SELECT * FROM advertise");
	return mysqli_num_rows($addsquery);
	}

	public function getAdminPendingAdsdata($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getAdminPendingAdsNum($conn){
	$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1");
	$num = mysqli_num_rows($result);
 	return  $num; 
	}

	public function getAdminCurrentAdsNum($conn){
	$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status='current'");
	$num = mysqli_num_rows($result);
 	return  $num; 
	}

	public function getAdminHistoryAdsNum($conn){
	$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=3");
	$num = mysqli_num_rows($result);
 	return  $num; 
	}

	public function getAdminHistoryAdsData($conn){
	$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=3");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getBlockedUsersNum($conn){
	$result=mysqli_query($conn,"SELECT * FROM users WHERE active=0");
	$num = mysqli_num_rows($result);
 	return  $num; 
	}

	public function getPageTypes($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM lookups_table WHERE LOOKUP_TYPE = 'PAGE_TYPE'");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}	

	public function getClickCounts($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM lookups_table WHERE LOOKUP_TYPE = 'CLICK_COUNTS'");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}
	

	public function getAdsDuration($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM lookups_table WHERE LOOKUP_TYPE = 'ADS_DURATION'");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getPageCategories($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM lookups_table WHERE LOOKUP_TYPE = 'PAGE_CATEGORIES'");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getAdvData($conn,$adv_id){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM advertise WHERE id = '$adv_id'");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getUserEmail($conn,$id){
	$result=mysqli_query($conn,"SELECT * FROM users WHERE id = '$id'");
	while ($row = mysqli_fetch_array($result)){	
		$email=$row['email'];
	}	
 	return  $email;
	}

	

	public function getAdHostsClicks($conn,$adv_id){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM clicks WHERE adv_id = '$adv_id'");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array;
	}




	public function getHostAdds($conn,$user_id){
		$array = array();
		$searchedID= ','.$user_id.',';
		$query = mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = '$user_id'");
		while ( $userpagedata = mysqli_fetch_array($query)){
		$followerscategory  = $userpagedata['followers_cat'];
		$pagecategory       = $userpagedata['category'];
		$alldataquery       = mysqli_query($conn,"SELECT * FROM advertise");
		while ($advertiseDataRaw = mysqli_fetch_array($alldataquery)){
			$period = $advertiseDataRaw['period'];

			switch ($period) {
					case '1':
						if($followerscategory == 'A'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_A < 4 AND clicks IN (500,1000) AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;
						}elseif($followerscategory == 'B'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_B < 2 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 UNION SELECT * FROM advertise WHERE status=1 AND count_for_B < 4 AND clicks = 2000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 AND hosts_id NOT LIKE '%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%' ");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;				
						}elseif($followerscategory == 'C'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND price > 0 AND status=1 AND clicks = 2000 AND count_for_C < 2  AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;
					}
						break;

					case '2':
						if($followerscategory == 'A'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_A < 2 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;
						}elseif($followerscategory == 'B'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_B < 1 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 UNION SELECT * FROM advertise WHERE status=1 AND count_for_B < 2 AND clicks = 2000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 AND hosts_id NOT LIKE '%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%' ");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;				
						}elseif($followerscategory == 'C'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND price > 0 AND status=1 AND clicks = 2000 AND count_for_C < 1 AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%' ");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;
					}
						break;	
					
					default:
						echo " Data";
						break;
				}	
		

	}
	}
	}

	public function getHostAddsnum($conn,$user_id){
		$searchedID= ','.$user_id.',';
		$query = mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = '$user_id'");
		while($userpagedata = mysqli_fetch_array($query)){
		$followerscategory = $userpagedata['followers_cat'];
		$pagecategory       = $userpagedata['category'];
		$alldataquery       = mysqli_query($conn,"SELECT * FROM advertise");
		while ($advertiseDataRaw = mysqli_fetch_array($alldataquery)){
			$period = $advertiseDataRaw['period'];
			switch ($period) {
					case '1':
						if($followerscategory == 'A'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_A < 4 AND clicks IN (500,1000) AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							$num= mysqli_num_rows($result);
							return $num;	
						}elseif($followerscategory == 'B'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_B < 2 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 UNION SELECT * FROM advertise WHERE status=1 AND count_for_B < 4 AND clicks = 2000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 AND hosts_id NOT LIKE '%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%' ");
							$num= mysqli_num_rows($result);
							return $num;			
						}elseif($followerscategory == 'C'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND price > 0 AND status=1 AND clicks = 2000 AND count_for_C < 2 AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%' ");
							$num= mysqli_num_rows($result);
							return $num;
					}
						break;

					case '2':
						if($followerscategory == 'A'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_A < 2 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							$num= mysqli_num_rows($result);
							return $num;
						}elseif($followerscategory == 'B'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_B < 1 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 UNION  SELECT * FROM advertise WHERE status=1 AND count_for_B < 2 AND clicks = 2000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND price > 0 AND hosts_id NOT LIKE '%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							$num= mysqli_num_rows($result);
							return $num;			
						}elseif($followerscategory == 'C'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND price > 0 AND status=1 AND clicks = 2000 AND count_for_C < 1 AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							$num= mysqli_num_rows($result);
							return $num;					}
						break;	
					
					default:
						echo " Data";
						break;
				}		
	
	}
	}	
	} 

	public function getAcceptedAdds($conn,$user_id){
		$array = array();
		$searchedID= ','.$user_id.',';
		$AccResult=mysqli_query($conn,"SELECT * FROM accepted_adds WHERE hosts_id LIKE '%$searchedID%'");
		while ($AccRow = mysqli_fetch_array($AccResult)){
			$add_id = $AccRow['add_id'];
		$result=mysqli_query($conn,"SELECT * FROM advertise WHERE id LIKE '$add_id'");
		while ($row = mysqli_fetch_array($result)){		
			$array[]=$row;
		}
		}	
 		return  $array;
	}

	public function getAcceptedAddsNum($conn,$user_id){
		$searchedID= ','.$user_id.',';
		$AccResult=mysqli_query($conn,"SELECT * FROM accepted_adds WHERE hosts_id LIKE '%$searchedID%'");
		$num = mysqli_num_rows($AccResult);
		return  $num;
 	
	}

	public function getHistoryAds($conn,$user_id){
		$array = array();
		$searchedID= ','.$user_id.',';
		$HisResult=mysqli_query($conn,"SELECT * FROM advertise WHERE status = 3 AND hosts_id LIKE '%$searchedID%'");
		while ($row = mysqli_fetch_array($HisResult)){		
			$array[]=$row;
		
		}	
 		return  $array;

	}

	public function getHistoryAdsNum($conn,$user_id){
		$searchedID= ','.$user_id.',';
		$HisResult=mysqli_query($conn,"SELECT * FROM advertise WHERE status = 3 AND hosts_id LIKE '%$searchedID%'");
		$num = mysqli_num_rows($HisResult);
		return  $num;

	}



	public function getHostPagesData($conn){
		$array = array();
		$result=mysqli_query($conn,"SELECT * FROM hostpages WHERE status = 0");
		while ($row = mysqli_fetch_array($result)){	
			$array[]=$row;
		}	
 		return  $array;

	}

	public function getHostPagesDataNum($conn){
		
		$result=mysqli_query($conn,"SELECT * FROM hostpages WHERE status = 0");
		$num= mysqli_num_rows($result);	
 		return  $num;
	}

	public function getUserStatus($conn,$email){
		$user_info= mysqli_query($conn,"SELECT * FROM users WHERE email = '$email'");
		while($row = mysqli_fetch_array($user_info)){
		$user_id = $row['id'];
		$user_type = $row['type'];
		$user_status = $row['active'];
		}
		return $user_status;
	}

	public function getAdsLinksForHost($conn,$user_id,$adv_id){
		$array = array();
		$result=mysqli_query($conn,"SELECT * FROM links WHERE adv_id = '$adv_id' AND host_id='$user_id'");
		while ($row = mysqli_fetch_array($result)){	
			$array[]=$row;
		}	
 		return  $array;
	}

	public function getAdsLinksForHostNum($conn,$user_id,$adv_id){
		$result=mysqli_query($conn,"SELECT * FROM links WHERE adv_id = '$adv_id' AND host_id='$user_id'");
		$num= mysqli_num_rows($result);	
 		return  $num;
	}


	// public function getRejectedID($conn,$user_id) {
	// 	$adv_id=$_GET['adv_id'];
	// 	$query = mysqli_query($conn, "SELECT * FROM rejected_adds WHERE adv_id = '$adv_id'");
	// 	$hostsIDResults= mysqli_fetch_array($query);
	// 	$hostsIDarray = $hostsIDResults['hosts_id'];
	// 	$Host_ID_explode = explode(",", $hostsIDarray);

	// 	$userIDComma = "," . $user_id;

	// 	if( strstr($hostsIDarray, $userIDComma) ) {
	// 		return true;		
	// 	}
	// 	else {
	// 		return false;
			
	// 	}

	// } 

	// public function getAcceptedID($conn,$user_id) {
	// 	$adv_id=$_GET['adv_id'];
	// 	$query = mysqli_query($conn, "SELECT * FROM accepted_adds WHERE add_id = '$adv_id'");
	// 	$hostsIDResults= mysqli_fetch_array($query);
	// 	$hostsIDarray = $hostsIDResults['hosts_id'];
	// 	$Host_ID_explode = explode(",", $hostsIDarray);

	// 	$userIDComma = "," . $user_id;

	// 	if( strstr($hostsIDarray, $userIDComma) ) {
	// 		return true;
			
	// 	}
	// 	else {
	// 		return false;
			
	// 	}

	// }  

	public function checkHostPage($conn,$user_id){
		$checkQuery = mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = $user_id");
		$num 		= mysqli_num_rows($checkQuery);	
 		return $num;

	}

	public function getHostPageFollowersCategory($conn){
		$array = array();
		$result=mysqli_query($conn,"SELECT * FROM lookups_table WHERE LOOKUP_TYPE = 'FOLLOWERS'");
		while ($row = mysqli_fetch_array($result)){	
			$array[]=$row;
		}	
	 	return  $array;

	}

	public function getUserType($conn,$user_id){
	$userTypequery=mysqli_query($conn,"SELECT * FROM users WHERE id = '$user_id'");
	while ($row = mysqli_fetch_array($userTypequery)){
		$userType = $row['type'];	
	}
	return $userType;
	}
    
    public function getFullName($conn,$user_id){
		$this->conn= $conn;
		$userFullquery=mysqli_query($conn,"SELECT first_name, second_name FROM users WHERE id = '$user_id'");
		$userFullname = mysqli_fetch_row($userFullquery);
        
        $fname = $userFullname[0];
        $lname = $userFullname[1];
        $fullName = $fname . ' ' . $lname;
        
		return $fullName;
	}
    
    
    	public function getAdsByCat($conn,$user_id){
		$this->conn= $conn;
		$addsquery=mysqli_query($conn,"SELECT * FROM advertise WHERE post_id = '$user_id' AND status=1");
		//$add = mysqli_fetch_array($addsquery);
		return mysqli_num_rows($addsquery);
		}

}

?>