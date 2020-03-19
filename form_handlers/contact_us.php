<?php

	if($_POST)
{
			$user = filter_var($_POST['first_name'], FILTER_SANITIZE_STRING);
			$email=  filter_var($_POST['email'], FILTER_SANITIZE_STRING);
			$mobile =  filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
			$message =  filter_var($_POST['comments'], FILTER_SANITIZE_STRING);



$headers = 'From: ' . $email ;
$myEmail = 'm.yasser@aseel-group.com';
$subject = 'Contact From';

  try
    {
mail($myEmail, $subject, $message, $headers);

	
    
    
    
    }  }
    catch(PDOException $e){
        echo $e->getMessage();
    }



?>