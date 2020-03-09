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
	$result=mysqli_query($conn,"SELECT * FROM users WHERE type=1");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
	}

	public function getHostDataForAdmin($conn){
	$array = array();
	$result=mysqli_query($conn,"SELECT * FROM users WHERE type=2");
	while ($row = mysqli_fetch_array($result)){	
		$array[]=$row;
	}	
 	return  $array; 
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

	public function getUserPendingAdsnum($conn,$user_id){
	$this->conn= $conn;
	$addsquery=mysqli_query($conn,"SELECT * FROM advertise WHERE post_id = '$user_id' AND status=1 AND price > 0");
	$add = mysqli_fetch_array($addsquery);
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

	public function getAdminPendingAdsnum($conn){
	$this->conn= $conn;
	$addsquery=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1");
	$add = mysqli_fetch_array($addsquery);
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

	public function getHostAdds($conn,$user_id){
		$array = array();
		$searchedID= ','.$user_id.',';
		$query = mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = '$user_id'");
		$userpagedata = mysqli_fetch_array($query);
		$followerscategory  = $userpagedata['followers_cat'];
		$pagecategory       = $userpagedata['category'];
		$alldataquery       = mysqli_query($conn,"SELECT * FROM advertise");
		while ($advertiseDataRaw = mysqli_fetch_array($alldataquery)){
			$period = $advertiseDataRaw['period'];

			switch ($period) {
					case '1':
						if($followerscategory == 'A'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_A < 4 AND clicks IN (500,1000) AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;
						}elseif($followerscategory == 'B'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_B < 2 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') UNION SELECT * FROM advertise WHERE status=1 AND count_for_B < 4 AND clicks = 2000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%' ");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;				
						}elseif($followerscategory == 'C'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND status=1 AND clicks = 2000 AND count_for_C < 2  AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;
					}
						break;

					case '2':
						if($followerscategory == 'A'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_A < 2 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;
						}elseif($followerscategory == 'B'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_B < 1 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') UNION SELECT * FROM advertise WHERE status=1 AND count_for_B < 2 AND clicks = 2000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%' ");
							while ($row = mysqli_fetch_array($result)){	
								$array[]=$row;
							}	
				 			return  $array;				
						}elseif($followerscategory == 'C'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND status=1 AND clicks = 2000 AND count_for_C < 1 AND hosts_id NOT LIKE
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

	public function getHostAddsnum($conn,$user_id){
		$searchedID= ','.$user_id.',';
		$query = mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = '$user_id'");
		$userpagedata = mysqli_fetch_array($query);
		$followerscategory = $userpagedata['followers_cat'];
		$pagecategory       = $userpagedata['category'];
		$alldataquery       = mysqli_query($conn,"SELECT * FROM advertise");
		while ($advertiseDataRaw = mysqli_fetch_array($alldataquery)){
			$period = $advertiseDataRaw['period'];
			switch ($period) {
					case '1':
						if($followerscategory == 'A'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_A < 4 AND clicks IN (500,1000) AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							$num= mysqli_num_rows($result);
							return $num;	
						}elseif($followerscategory == 'B'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_B < 2 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') UNION SELECT * FROM advertise WHERE status=1 AND count_for_B < 4 AND clicks = 2000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%' ");
							$num= mysqli_num_rows($result);
							return $num;			
						}elseif($followerscategory == 'C'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND status=1 AND clicks = 2000 AND count_for_C < 2 AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%' ");
							$num= mysqli_num_rows($result);
							return $num;
					}
						break;

					case '2':
						if($followerscategory == 'A'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_A < 2 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND hosts_id NOT LIKE
							'%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							$num= mysqli_num_rows($result);
							return $num;
						}elseif($followerscategory == 'B'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND count_for_B < 1 AND clicks = 1000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') UNION  SELECT * FROM advertise WHERE status=1 AND count_for_B < 2 AND clicks = 2000 AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory') AND hosts_id NOT LIKE '%$searchedID%' AND rejects_id NOT LIKE '%$searchedID%'");
							$num= mysqli_num_rows($result);
							return $num;			
						}elseif($followerscategory == 'C'){
							$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND status=1 AND clicks = 2000 AND count_for_C < 1 AND hosts_id NOT LIKE
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
		$row = mysqli_fetch_array($user_info);
		$user_id = $row['id'];
		$user_type = $row['type'];
		$user_status = $row['active'];

		return $user_status;
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
	$this->conn= $conn;
	$userTypequery=mysqli_query($conn,"SELECT type FROM users WHERE id = '$user_id'");
	$userType = mysqli_fetch_row($userTypequery);
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
		$add = mysqli_fetch_array($addsquery);
		return mysqli_num_rows($addsquery);
		}
    
    
    

	public function getNumberOfFriendRequests() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT * FROM friend_requests WHERE user_to='$username'");
		return mysqli_num_rows($query);
	}

	public function getNumPosts() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT num_posts FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['num_posts'];
	}

	public function getFirstAndLastName() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT first_name, last_name FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['first_name'] . " " . $row['last_name'];
	}

	public function getProfilePic() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT profile_pic FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['profile_pic'];
	}

	public function getFriendArray() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT friend_array FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);
		return $row['friend_array'];
	}

	public function isClosed() {
		$username = $this->user['username'];
		$query = mysqli_query($this->con, "SELECT user_closed FROM users WHERE username='$username'");
		$row = mysqli_fetch_array($query);

		if($row['user_closed'] == 'yes')
			return true;
		else 
			return false;
	}

	public function isFriend($username_to_check) {
		$usernameComma = "," . $username_to_check . ",";

		if((strstr($this->user['friend_array'], $usernameComma) || $username_to_check == $this->user['username'])) {
			return true;
		}
		else {
			return false;
		}
	}

	public function didReceiveRequest($user_from) {
		$user_to = $this->user['username'];
		$check_request_query = mysqli_query($this->con, "SELECT * FROM friend_requests WHERE user_to='$user_to' AND user_from='$user_from'");
		if(mysqli_num_rows($check_request_query) > 0) {
			return true;
		}
		else {
			return false;
		}
	}

	public function didSendRequest($user_to) {
		$user_from = $this->user['username'];
		$check_request_query = mysqli_query($this->con, "SELECT * FROM friend_requests WHERE user_to='$user_to' AND user_from='$user_from'");
		if(mysqli_num_rows($check_request_query) > 0) {
			return true;
		}
		else {
			return false;
		}
	}

	public function removeFriend($user_to_remove) {
		$logged_in_user = $this->user['username'];

		$query = mysqli_query($this->con, "SELECT friend_array FROM users WHERE username='$user_to_remove'");
		$row = mysqli_fetch_array($query);
		$friend_array_username = $row['friend_array'];

		$new_friend_array = str_replace($user_to_remove . ",", "", $this->user['friend_array']);
		$remove_friend = mysqli_query($this->con, "UPDATE users SET friend_array='$new_friend_array' WHERE username='$logged_in_user'");

		$new_friend_array = str_replace($this->user['username'] . ",", "", $friend_array_username);
		$remove_friend = mysqli_query($this->con, "UPDATE users SET friend_array='$new_friend_array' WHERE username='$user_to_remove'");
	}

	public function sendRequest($user_to) {
		$user_from = $this->user['username'];
		$query = mysqli_query($this->con, "INSERT INTO friend_requests VALUES('', '$user_to', '$user_from')");
	}

	public function getMutualFriends($user_to_check) {
		$mutualFriends = 0;
		$user_array = $this->user['friend_array'];
		$user_array_explode = explode(",", $user_array);

		$query = mysqli_query($this->con, "SELECT friend_array FROM users WHERE username='$user_to_check'");
		$row = mysqli_fetch_array($query);
		$user_to_check_array = $row['friend_array'];
		$user_to_check_array_explode = explode(",", $user_to_check_array);

		foreach($user_array_explode as $i) {

			foreach($user_to_check_array_explode as $j) {

				if($i == $j && $i != "") {
					$mutualFriends++;
				}
			}
		}
		return $mutualFriends;

	}







}

?>