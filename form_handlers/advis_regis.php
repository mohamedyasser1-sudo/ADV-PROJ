<?php
require_once 'dbconfig.php';


if($_POST)
{
        $username     = $_POST['usernamea'];
        $first_name   = $_POST['first_namea'];
        $second_name  = $_POST['second_namea'];
        $user_email   = $_POST['emaila'];
        $user_password= $_POST['passa'];
        $confirmpass  = $_POST['confirmpassa'];
        $country      = $_POST['countrya'];
        $phone        = $_POST['phonea'];
        $joining_date = date("Y-m-d H:i:s");
        $type         = 2;
        $token        = bin2hex(random_bytes(3));
        $active       = 1;
        
    
    //password_hash see : http://www.php.net/manual/en/function.password-hash.php
    //$password     = password_hash( $user_password, PASSWORD_BCRYPT, array('cost' => 11));
    $password   = $user_password;
    try
    {       
        $stmt = $db_con->prepare("SELECT * FROM users WHERE email= :email");
        $stmt->execute(array(":email"=>$user_email));
        $count = $stmt->rowCount();
        
        if($count==0){
            $stmt = $db_con->prepare("INSERT INTO users (username, first_name, second_name, email, password, country, phone, type, date,code, active) VALUES (:uname, :fname, :sname, :email, :pass, :country, :phone, :type, :date ,:code,:active)");
            
            $stmt->bindParam(":uname",$username);
            $stmt->bindParam(":fname",$first_name);
            $stmt->bindParam(":sname",$second_name);
            $stmt->bindParam(":email",$user_email);
            $stmt->bindParam(":pass",$password);
            $stmt->bindParam(":country",$country);
            $stmt->bindParam(":phone",$phone);
            $stmt->bindParam(":type",$type);
            $stmt->bindParam(":date",$joining_date);
            $stmt->bindParam(":code",$token);
            $stmt->bindParam(":active",$active);
            
            if($stmt->execute())
            {
                echo "registered";
              send_Verification_Code($user_email,$token);
                 
              
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
function send_Verification_Code($user_email,$token){
            $to = $user_email;
            $subject = "Verification Code";
            $url="http://topad.net/test/ADV-PROJ/user_dashboard/examples/verify.php";
            $message = "<p>you have requested to activate your membership, you will find a link below, if that was not you please ignore this email, if this is true please use this code to verify your email :" . $token. "</p>";
            $message .="click this link :  ";
            $message .='<a href="'.$url.'">Verify your account</a></p>';
            $headers  = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "Reply-To: Top AD <support@topad.net>"."\r\n";
            $headers .= "From: top AD  <support@topad.net>"."\r\n";

           
            if(mail($to,$subject, $message,$headers))
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