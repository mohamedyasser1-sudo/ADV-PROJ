<?php 
/********************************
**   Generate link of advertise
*********************************/
class generate_link{
	private $user_name;
	function __construct($advertise_id,$publisher_id){
		/* here change url of file to show user after click on hosts */
        echo $this->get_current_url().'/AdProject/process.php?pub='.$this->encryption_advertisment_id($publisher_id).'&sect='.$this->encryption_advertisment_id($advertise_id);        
	}


	function get_current_url(){
     	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
		  $url = "https://";   
		else  
		  $url = "http://";   
		
		// Append the host(domain name, ip) to the URL.   
		$url.= $_SERVER['HTTP_HOST'];   
		    
		// Append the requested resource location to the URL   
		//$url.= $_SERVER['REQUEST_URI'];
		return $url; 

     }

     function encryption_advertisment_id($advertise_id){
     	// Our original string store in the variable that need to be encrypted
		$str = $advertise_id; 
		// Store the cipher method in variable
		$cipher = "AES-128-CTR"; 
		// Get the cipher iv length
		$iv_length = openssl_cipher_iv_length($cipher); 
		$options = 0;  
		$iv = '8565825542115032'; 
		// Take the encryption key in a variable
		$enc_key = "CodeSpeedyKeybj54HH"; 
		// Encrypt the data using openssl_encrypt function 
		$encrypted_string = openssl_encrypt($str, $cipher, $enc_key, $options, $iv); 
		
		return str_replace('=','',$encrypted_string);
     }
}