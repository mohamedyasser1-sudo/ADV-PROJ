<?php
include '../../connect/connect.php'; 
$user = $_SESSION['email'];
$advertise = new User($conn,$user);
$user_id = $advertise->getUserId(); 
if(isset($_POST['submitbtn'])){

	$pagedesc= $_POST['pagedesc'];
	$pagename= $_POST['pagename'];
	$pageurl = $_POST['pageurl'];
	$pagecategory = $_POST['category'];
	$followersCat = $_POST['followersCat'];
	switch ($followersCat) {
		case 'A':
			$followersnum = '100K - 250K';
			break;
		case 'B':
			$followersnum = '250K - 500K';
			break;
		case 'C':
			$followersnum = '500K - 750K';
			break;
		case 'D':
			$followersnum = '750K - 1M';
			break;
		case 'E':
			$followersnum = '1M';
			break;	
		
		default:
			# code...
			break;
	}
	$insertquery = mysqli_query($conn,"INSERT INTO hostpages (user_id, `name`, `url`, `followers`, `followers_cat`, `description`, `category`,`status`) VALUES ('$user_id','$pagename','$pageurl','$followersnum','$followersCat','$pagedesc','$pagecategory',0)");
	if($insertquery){
		echo " Done ";
	}else{
		echo "error ". mysqli_error($conn);
	}


}


?>