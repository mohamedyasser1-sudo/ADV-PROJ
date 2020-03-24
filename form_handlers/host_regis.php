<?php
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