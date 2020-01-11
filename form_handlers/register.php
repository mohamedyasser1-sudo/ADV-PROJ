<?php 
include 'connect/connect.php';
$message	  ="";

// host regetiration 
//******************************************
//******************************************
	if (isset($_POST['submithost'])){
		
        $username     =mysqli_escape_string($conn,$_POST['username']);
        $first_name   =mysqli_escape_string($conn,$_POST['first_name']);
        $second_name  =mysqli_escape_string($conn,$_POST['second_name']);
		$email        =$_POST['email'];
		$confirmemail =$_POST['confirmemail'];
		$pass         =$_POST['pass'];
        $confirmpass  =$_POST['confirmpass'];
        $country      =$_POST['country'];
        $phone		  =$_POST['phone'];
        $date 		  =date("Y-m-d H:i:s");
        $type		  =1;

        if(empty($username) || empty($first_name) || empty($second_name) || empty($email)|| empty($confirmemail)|| empty($pass)|| empty($confirmpass) || empty($country) || empty($phone)){
        	$message = " Sorry! but you can't leave fields empty ";
			}
		elseif($email !== $confirmemail){
			$message = " email is not matched ";
			}
		elseif ($pass !== $confirmpass) {
			$message = " Password Does not match ";	
			}
		elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
		 	$message= "Sorry, Looks like this is not a valid email";
			}
		elseif(strlen($username) < 3 || strlen($pass) < 6 ){
			$message = "username must be more than three charcters & password must be more than six characters";
			}
		elseif(strlen($phone) < 11 ){
			$message = "You MUST enter you valid phone number";
			}	
		else{
			$checkmail="SELECT * FROM users WHERE email = ?";
			$stmt =mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt,$checkmail)){
                exit();
            }else{
			mysqli_stmt_bind_param($stmt,"s",$email);
			mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
			if(mysqli_stmt_num_rows($stmt) >= 1 ){
				$message = "this email is already exists you can log in";
			}
            else{
				$selector=md5($date);
            	$token = substr($selector,0,6);
				//send_Verification_Code($email,$token);
				// $sql="INSERT INTO `users`(`username`, `first_name`, `second_name`, `email`, `password`, `country`, `phone`, `type`, `date`,`code`) VALUES ('$username','$first_name','$second_name','$email','$pass','$country','$phone','$type','$date','$token')";
				$sql="INSERT INTO users (username, first_name, second_name, email, password, country, phone, type,date,code) VALUES (?,?,?,?,?,?,?,?,?,?)";
				$stmt=mysqli_stmt_init($conn);
				if(!mysqli_stmt_prepare($stmt,$sql)){
					exit();
				}else{
				mysqli_stmt_bind_param($stmt,"ssssssiiss",$username,$first_name,$second_name,$email,$pass,$country,$phone,$type,$date,$token);
				mysqli_stmt_execute($stmt);
				$result =mysqli_stmt_store_result($stmt);
				//$result=mysqli_query($conn,$sql);
				if($result){
                    //header('location: index.html');
					$message = "you are registered, now you can <a href='login.php'>Sign In</a>";
				}
				else{
					$message = "error, TRY again ". mysqli_error($conn);
				}
				}
			}
		}	
	}
}
// advertise regetiration 
//******************************************
//******************************************
// a stands for advertise

    if (isset($_POST['submitadvertise'])){
        
        $usernamea     =mysqli_escape_string($conn,$_POST['usernamea']);
        $first_namea   =mysqli_escape_string($conn,$_POST['first_namea']);
        $second_namea  =mysqli_escape_string($conn,$_POST['second_namea']);
        $emaila        =$_POST['emaila'];
        $confirmemaila =$_POST['confirmemaila'];
        $passa         =$_POST['passa'];
        $confirmpassa  =$_POST['confirmpassa'];
        $countrya      =$_POST['countrya'];
        $phonea        =$_POST['phonea'];
        $datea         =date("Y-m-d H:i:s");
        $typea         =2;

        if(empty($usernamea) || empty($first_namea) || empty($second_namea) || empty($emaila)|| empty($confirmemaila)|| empty($passa)|| empty($confirmpassa) || empty($countrya) || empty($phonea)){
            $message = " Sorry! but you can't leave fields empty ";
            }
        elseif($emaila !== $confirmemaila){
            $message = " email is not matched ";
            }
        elseif ($passa !== $confirmpassa) {
            $message = " Password Does not match "; 
            }
        elseif (!filter_var($emaila, FILTER_VALIDATE_EMAIL)){
            $message= "Sorry, Looks like this is not a valid email";
            }
        elseif(strlen($usernamea) < 3 || strlen($passa) < 6 ){
            $message = "username must be more than three charcters & password must be more than six characters";
            }
        elseif(strlen($phonea) < 11 ){
            $message = "You MUST enter you valid phone number";
            }   
        else{
            $checkmail="SELECT * FROM users WHERE email = ?";
            $stmt =mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$checkmail)){
                exit();
            }else{
            mysqli_stmt_bind_param($stmt,"s",$emaila);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) >= 1 ){
                $message = "this email is already exists you can log in";
            }
            else{
                $selector=md5($datea);
                $token = substr($selector,0,6);
                //send_Verification_Code($emaila,$token);
                // $sql="INSERT INTO `users`(`username`, `first_name`, `second_name`, `email`, `password`, `country`, `phone`, `type`, `date`,`code`) VALUES ('$username','$first_name','$second_name','$email','$pass','$country','$phone','$type','$date','$token')";
                $sql="INSERT INTO users (username, first_name, second_name, email, password, country, phone, type,date,code) VALUES (?,?,?,?,?,?,?,?,?,?)";
                $stmt=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    exit();
                }else{
                mysqli_stmt_bind_param($stmt,"ssssssiiss",$usernamea,$first_namea,$second_namea,$emaila,$passa,$countrya,$phonea,$typea,$datea,$token);
                mysqli_stmt_execute($stmt);
                $result =mysqli_stmt_store_result($stmt);
                //$result=mysqli_query($conn,$sql);
                if($result){
                    //header('location: index.html');
                    $message = "you are registered, now you can <a href='index.php'>Sign In</a>";
                }
                else{
                    $message = "error, TRY again ". mysqli_error($conn);
                }
                }
            }
        }   
    }
}

?> 


<?php 
function send_Verification_Code($email,$token){
            $to = $email;
            $subject = "Verification Code";
            $url="";
            $message = "<p>you have requested to activate your membership, you will find a link below, if that was not you please ignore this email, if this is true please use this code to verify your email :" . $token. "</p>";
            $message.="click this link :  ";
	        $message.='<a href="'.$url.'">Verify your account</a></p>';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= 'From: Ehab Elshamy <ehab_elshamy82@yahoo.com>' . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            if(mail($to, $subject, $message,$headers))
            {
                //header("Location:singggt.php");
                 echo "Done";

            }
            else
            {
              echo'<div class="toast-item toast-type-error"><div class="toast-item-image toast-item-image-error"></div><div class="toast-item-close"></div><p>جدث خطأ يرجى المحاولة لاحقا. </p></div>';
             
            }
            
           
            }

?>