<?php
session_start();
require_once 'dbconfig.php';


if($_POST)
{
        $username     = $_POST['username'];
        $first_name   = $_POST['first_name'];
        $second_name  = $_POST['second_name'];
		$user_email   =$_POST['email'];
		$user_password=$_POST['pass'];
        $confirmpass  =$_POST['confirmpass'];
        $country      =$_POST['country'];
        $phone		  =$_POST['phone'];
        $joining_date 		  =date("Y-m-d H:i:s");
        $type		  =1;
        $active       =1;
	
	//password_hash see : http://www.php.net/manual/en/function.password-hash.php
	//$password 	= password_hash( $user_password, PASSWORD_BCRYPT, array('cost' => 11));
	$password 	= $user_password;
    try
    {       
        $stmt = $db_con->prepare("SELECT * FROM users WHERE email= :email");
        $stmt->execute(array(":email"=>$user_email));
        $count = $stmt->rowCount();
		
        if($count==0){
            $stmt = $db_con->prepare("INSERT INTO users (username, first_name, second_name, email, password, country, phone, type, date ,active) VALUES (:uname, :fname, :sname, :email, :pass, :country, :phone, :type, :date ,:active)");
            
            $stmt->bindParam(":uname",$username);
            $stmt->bindParam(":fname",$first_name);
            $stmt->bindParam(":sname",$second_name);
            $stmt->bindParam(":email",$user_email);
			$stmt->bindParam(":pass",$password);
			$stmt->bindParam(":country",$country);
			$stmt->bindParam(":phone",$phone);
			$stmt->bindParam(":type",$type);
			$stmt->bindParam(":date",$joining_date);
            $stmt->bindParam(":active",$active);
			
            if($stmt->execute())
            {
                echo "registered";
                $_SESSION['registered'] = $username;
                send_Welcome_Mail($user_email);
            }
            else
            {
                echo "Query could not execute !";
            }

        }
        else{

            echo "1"; //  not available
        }

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
}
?>
<?php 
function send_Welcome_Mail($user_email){
            $to = $user_email;
            $subject = "Verification Code";
            $url="http://topad.net/test/ADV-PROJ/user_dashboard/examples/";
            $message = "<p>Welcome to Top AD we are delighted to have you here, lets begin your journey with us,
            you will find below a link to  add your Page Details and start accepting Ads </p>";
            $message .="click this link :  ";
            $message .='<a href="'.$url.'">Access your account</a></p>';
            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "Reply-To: Top AD <support@topad.net>"."\r\n";
            $headers .= "From: top AD  <support@topad.net>"."\r\n";

           
            if(mail($to,$subject, $message,$headers))
            {
               
                 echo "Done";

            }
            else
            {
              echo'<div class="toast-item toast-type-error"><div class="toast-item-image toast-item-image-error"></div><div class="toast-item-close"></div><p>جدث خطأ يرجى المحاولة لاحقا. </p></div>';
             
            }
            
           
            }

?>