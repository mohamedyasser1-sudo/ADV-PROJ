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

    
    

		public function getUserPendingAdsnum($conn,$user_id){
		$this->conn= $conn;
		$addsquery=mysqli_query($conn,"SELECT * FROM advertise WHERE post_id = '$user_id' AND status=1");
		$add = mysqli_fetch_array($addsquery);
		return mysqli_num_rows($addsquery);
		}

		public function getUserPendingAdsdata($conn,$user_id){
		$array = array();
		$result=mysqli_query($conn,"SELECT * FROM advertise WHERE post_id = '$user_id' AND status=1");
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

		public function getHostAdds($conn,$user_id){
			$array = array();
			$query = mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = '$user_id'");
			while($row = mysqli_fetch_array($query)){
			$followerscatregory = $row['followers_cat'];
			$pagecategory       = $row['category'];

			if($followerscatregory == 'A'){
				$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND clicks IN (500,1000) AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory')");
				while ($row = mysqli_fetch_array($result)){	
					$array[]=$row;
				}	
	 			return  $array;
			}elseif($followerscatregory == 'B'){
				$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND clicks IN (1000,2000) AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory')");
				while ($row = mysqli_fetch_array($result)){	
					$array[]=$row;
				}	
	 			return  $array;				
			}elseif($followerscatregory == 'C'){
				$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND status=1 AND clicks = 2000 ");
				while ($row = mysqli_fetch_array($result)){	
					$array[]=$row;
				}	
	 			return  $array;
		}
		}	
		}

		public function getHostAddsnum($conn,$user_id){
			$array = array();
			$query = mysqli_query($conn,"SELECT * FROM hostpages WHERE user_id = '$user_id'");
			while($row = mysqli_fetch_array($query)){
			$followerscatregory = $row['followers_cat'];
			$pagecategory       = $row['category'];

			if($followerscatregory == 'A'){
				$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND clicks IN (500,1000) AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory')");
	 			$num = mysqli_num_rows($result);
	 			return $num;
			}elseif($followerscatregory == 'B'){
				$result=mysqli_query($conn,"SELECT * FROM advertise WHERE status=1 AND clicks IN (1000,2000) AND (requiredcat1='$pagecategory' or requiredcat2='$pagecategory')");
	 			$num = mysqli_num_rows($result);
	 			return $num;			
			}elseif($followerscatregory == 'C'){
				$result=mysqli_query($conn,"SELECT * FROM advertise WHERE (requiredcat1 = '$pagecategory' or requiredcat2 ='$pagecategory') AND status=1 AND clicks = 2000 ");
	 			$num = mysqli_num_rows($result);
	 			return $num;
		}
		}	
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