<?php
require_once 'dbconfig.php';


if($_POST)
{
        $username     = $_POST['usernamea'];
        $first_name   = $_POST['first_namea'];
        $second_name  = $_POST['second_namea'];
		$user_email        =$_POST['emaila'];
		$user_password      =$_POST['passa'];
        $confirmpass  =$_POST['confirmpassa'];
        $country      =$_POST['countrya'];
        $phone		  =$_POST['phonea'];
        $joining_date 		  =date("Y-m-d H:i:s");
        $type		  =2;
	
	//password_hash see : http://www.php.net/manual/en/function.password-hash.php
	//$password 	= password_hash( $user_password, PASSWORD_BCRYPT, array('cost' => 11));
	$password 	= $user_password;
    try
    {       
        $stmt = $db_con->prepare("SELECT * FROM users WHERE email= :email");
        $stmt->execute(array(":email"=>$user_email));
        $count = $stmt->rowCount();
		
        if($count==0){
            $stmt = $db_con->prepare("INSERT INTO users (username, first_name, second_name, email, password, country, phone, type, date) VALUES (:uname, :fname, :sname, :email, :pass, :country, :phone, :type, :date)");
            
            $stmt->bindParam(":uname",$username);
            $stmt->bindParam(":fname",$first_name);
            $stmt->bindParam(":sname",$second_name);
            $stmt->bindParam(":email",$user_email);
			$stmt->bindParam(":pass",$password);
			$stmt->bindParam(":country",$country);
			$stmt->bindParam(":phone",$phone);
			$stmt->bindParam(":type",$type);
			$stmt->bindParam(":date",$joining_date);
			
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