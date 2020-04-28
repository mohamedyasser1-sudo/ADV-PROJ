<?php 
            include 'connect/connect.php';
           $advertise_id =  $_GET['sect'];
            
            	 function decryption_params($advertise_id){
     	
                    /* Store the cipher method in variable*/
                    $cipher = "AES-128-CTR"; 
                    /* Get the cipher iv length*/
                    $iv_length = openssl_cipher_iv_length($cipher); 
                    $options = 0;  
                    $iv = '8565825542115032'; 
                    /* Take the encryption key in a variable*/
                    $enc_key = "CodeSpeedyKeybj54HH"; 
                    
                    $decryption_iv = '8565825542115032'; 
                    /* Store the decryption key */
                    $dec_key = "CodeSpeedyKeybj54HH"; 
                    
                    /* Use openssl_decrypt() function to decrypt the data */
                    $decrypted_string=openssl_decrypt ($advertise_id, $cipher, $dec_key, $options, $decryption_iv); 
                    /* Display the decrypted string */
                    
                    return $decrypted_string;
                    }
            
            
            $fixed_id = decryption_params($advertise_id);
            
	        $notcountquery=mysqli_query($conn,"SELECT * FROM advertise WHERE id = '$fixed_id'" );
            while($stopcount = mysqli_fetch_array($notcountquery)){
            
            $pagename = $stopcount['pagename'];
            $image1 = $stopcount['image1'];
            $desc1  = $stopcount['description1'];
            $pagedescription = $stopcount['pagedescription'];
}
//header("Location: ./index.php"); 
?>
<!DOCTYPE html>
<html>
<head>
    <meta property="og:url"                content="http://topad.net/preview/advertisedata.php?id=<?= $fixed_id ?>" />
	<meta property="og:type"               content="article" />
	<meta property="og:title"              content="<?= $pagename ?>" />
	<meta property="og:description"        content="<?= $desc1; ?> " />
	<meta property="og:image"              content="http://topad.net/preview/uploads/images/<?=$image1; ?>" />

</head>
<body>

</body>
</html>



<?php 
/**
 * process advertisment 
 **/
class process_advertisment{
    private $real_id_of_advertisment;
    private $last_added_at_click_table;
    private $db_name  ='topadn6_project';
    private $user_name='topadn6_root';
    private $user_password = '.)@[4jW.y0B7';
    private $table_name    = 'clicks';   
    private $dvertisment_table='advertise'; 
    private $redirect_url  ='';
    private $hosts;
    private $conn;
	function __construct(){
	   if(!empty($_GET['sect'])):
	   	    $this->connect_dataBase();
	   	    echo $this->handle_references_link();
			$this->real_id_of_advertisment = $this->decryption_params($_GET['sect']);
		    if($this->get_last_data_of_click_on_advertisment() != false):
                $result =$this->get_last_data_of_click_on_advertisment();
                $row    = $result->fetch_assoc(); 
                $obtainedClicks = $row['total'];

            $notcountquery=mysqli_query($this->conn,"SELECT * FROM advertise WHERE id = '".$this->real_id_of_advertisment."' " );
            $count = mysqli_num_rows($notcountquery);
            $stopcount = mysqli_fetch_array($notcountquery);
            $pagename = $stopcount['pagename'];
            $image1 = $stopcount['image1'];
            $desc1  = $stopcount['desc1'];
            $pagedescription = $stopcount['pagedescription'];

            $count = $stopcount['clicks']; 
          		if($obtainedClicks < $count ){  
                $this->update_value_with_new_click($row);
          			echo $count;
                }else{
                	header("location:notvalidlink.php");
                }

		    else:
		    	$this->insert_value_with_new_click();
		    endif;
		endif;
		return;
	}

	private function get_last_data_of_click_on_advertisment(){
		if($this->check_adertisment_exist() !=false):
			$query = "SELECT * FROM $this->table_name where adv_id='".$this->real_id_of_advertisment."' ";
			$result = mysqli_query($this->conn,$query);
			if ($result->num_rows > 0)
				return $result;
		    else
		    	return false;
		else:
			header("HTTP/1.0 404 Not Found");
	    endif;
	}

	private function check_adertisment_exist(){
        $query = "SELECT * FROM $this->dvertisment_table where id='".$this->real_id_of_advertisment."' ";
		$result = mysqli_query($this->conn,$query);
		if($result->num_rows > 0):
			$this->redirect_url = $result->fetch_assoc()['pageurl'];
			return $result;
	    else:
	    	return false;
	    endif;
	}

	private function connect_dataBase(){
        $this->conn=mysqli_connect('localhost', $this->user_name, $this->user_password , $this->db_name );
		$name="SET NAMES utf8";
		if(mysqli_connect_errno()):
		    echo "MySQLi Connection was not established: " . mysqli_connect_error();
		    exit();
		else:
            mysqli_query($this->conn,$name);
	    endif;
	}


	 function decryption_params($advertise_id){
     	
		/* Store the cipher method in variable*/
		$cipher = "AES-128-CTR"; 
		/* Get the cipher iv length*/
		$iv_length = openssl_cipher_iv_length($cipher); 
		$options = 0;  
		$iv = '8565825542115032'; 
		/* Take the encryption key in a variable*/
		$enc_key = "CodeSpeedyKeybj54HH"; 
		
		$decryption_iv = '8565825542115032'; 
		/* Store the decryption key */
		$dec_key = "CodeSpeedyKeybj54HH"; 

		/* Use openssl_decrypt() function to decrypt the data */
		$decrypted_string=openssl_decrypt ($advertise_id, $cipher, $dec_key, $options, $decryption_iv); 
		/* Display the decrypted string */

		return $decrypted_string;
     }

     function insert_value_with_new_click(){
     	$publisher_id = (!empty( $this->handle_references_link() )?$this->handle_references_link():null);
     	 /*check if exist reference come from*/
     	 if(!empty($publisher_id) && !isset($_COOKIE[$publisher_id]) ):
            setcookie($publisher_id,'ok', time() + (86400), "/"); /* 86400 = 1 day*/
	        $array_of_host =array($publisher_id=>1);
	        $this->hosts = json_encode($array_of_host);
	        /*check if count of hosts allow to add hosts in table*/
            $this->count_of_hosts = count($array_of_host);
            $date = date("Y-m-d H:i:s");
	     	$insertsql   = "INSERT INTO $this->table_name (adv_id,parts,hosts,total,date)
	     	  VALUES ('$this->real_id_of_advertisment','$this->count_of_hosts','$this->hosts',total+1,'$date')";
		    $result       = mysqli_query($this->conn,$insertsql);
			if($result):
			   $order_id = mysqli_insert_id($this->conn);
			   header('Location:'.$this->redirect_url);
	        else:
			   echo " error ". mysqli_error($this->conn);
			endif;
	        
	    endif;
	    /*check if exist reference come from*/
     }

     function update_value_with_new_click($rows_data){
	        $this->hosts = json_encode( $this->handle_hosts_before_update($rows_data));
	        
	     	$updatesql   = "UPDATE $this->table_name SET hosts='$this->hosts' , parts='$this->count_of_hosts' , total = total+1 WHERE adv_id='$this->real_id_of_advertisment' ";
		    $result      = mysqli_query($this->conn,$updatesql);
			if($result):
			   $order_id = mysqli_insert_id($this->conn);
			   header('Location:'.$this->redirect_url);
	        else:
			   echo " error ". mysqli_error($this->conn);
			endif;

     }

     function handle_hosts_before_update($rows_data){
     	$array_of_host = json_decode($rows_data['hosts'],true);
        $publisher_id  = ( !empty( $this->handle_references_link() )?$this->handle_references_link():null);
        if(!empty($publisher_id) && !isset($_COOKIE[ $publisher_id ]) ):
            setcookie($publisher_id,'ok', time() + (86400), "/"); // 86400 = 1 day
	        if(array_key_exists($publisher_id,$array_of_host)):
	            $array_of_host[ $publisher_id ]=intval ($array_of_host[ $publisher_id ]) +1;    
	        else:
	               $array_of_host[ $publisher_id ] =1;
	        endif;
	    endif;

        $this->count_of_hosts = count($array_of_host);
        return $array_of_host;
     }


     function handle_references_link(){
     	return $this->decryption_params($_GET['pub']);

     }

}


/* here run your code*/
new process_advertisment();
?>

