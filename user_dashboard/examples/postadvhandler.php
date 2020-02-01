<?php
include '../../connect/connect.php';
include '../../classes/User.php';
$user = $_SESSION['email'];
$advertise = new User($conn,$user);
$user_id = $advertise->getUserId();
if (isset($_POST['submitbtn']) ){

	$post_id = $user_id;
	$pagetype= $_POST['pagetype'];
	$pagename= $_POST['pagename'];
	$pageurl = $_POST['pageurl'];
	$pagedesc= $_POST['pagedesc'];

	$desc1 = $_POST['desc1'];
	$desc2 = $_POST['desc2'];
	$desc3 = $_POST['desc3'];
	$desc4 = $_POST['desc4'];

	$clickcount = $_POST['clickcount'];
	$days		= $_POST['days'];
	$category   = $_POST['category'];
	$category1   = $_POST['category'];
	$price		= 50;

	if(empty($pagetype) || empty($pagename) || empty($pageurl) || empty($pagedesc) || empty($desc1) || empty($desc2) || empty($desc3) || empty($desc4) || empty($clickcount) || empty($days) || empty($category) || empty($price)){
		$message = "you can't leave fields empty ";
	}else { 

	//first image 	
	if(isset($_FILES['image1']['name'])){
	$target_dir = "../../uploads/images";
	$target_file = $target_dir . basename($_FILES["image1"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["image1"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["image1"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file)) {
	    	$image1 = $_FILES['image1']['tmp_name'];
	
	        //echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }

// second image 
	
	if(isset($_FILES['image2']['name'])){
	$target_dir = "../../uploads/images";
	$target_file = $target_dir . basename($_FILES["image2"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["image2"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["image2"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["image2"]["tmp_name"], $target_file)) {
	    	$image2 = $_FILES['image2']['tmp_name'];
	        //echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }

	// third image 
	
	if(isset($_FILES['image3']['name'])){
	$target_dir = "../../uploads/images";
	$target_file = $target_dir . basename($_FILES["image3"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["image3"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["image3"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["image3"]["tmp_name"], $target_file)) {
	    	$image3 = $_FILES['image3']['tmp_name'];
	        //echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }

	// fourth image 
	
	if(isset($_FILES['image4']['name'])){
	$target_dir = "../../uploads/images";
	$target_file = $target_dir . basename($_FILES["image4"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image

    $check = getimagesize($_FILES["image4"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}
	// Check file size
	if ($_FILES["image4"]["size"] > 500000) {
	    echo "Sorry, your file is too large.";
	    $uploadOk = 0;
	}
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["image4"]["tmp_name"], $target_file)) {
	    	$image4 = $_FILES['image4']['tmp_name'];
	}
	        //echo "The file ". basename( $_FILES["image1"]["name"]). " has been uploaded.";
	     else {
	        echo "Sorry, there was an error uploading your file.";
	    }        


	    $insertsql = "INSERT INTO `advertise`(`post_id`, `pagetype`, `pagename`, `pageurl`, `pagedescription`, `description1`, `image1`, `description2`, `image2`, `description3`, `image3`, `description4`, `image4`, `requiredcat1`, `requiredcat2`, `clicks`, `period`, `price`, `status`) VALUES ('$user_id','$pagetype','$pagename','$pageurl','$pagedesc','$desc1','$image1','$desc2','$image2','$desc3','$image3','$desc4','$image4','$category','$category1','$clickcount','$days','$price',1)";
	    $result = mysqli_query($conn,$insertsql);
			if ($result){
		$message = " your add has been moved to pinding ads, wait till it be published "; 
		}else{
		echo " error ". mysqli_error($conn);

}


	}

}
}
}
}

}

















?>





