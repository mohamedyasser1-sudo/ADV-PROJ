<?PHP 

/**
** HERE DO update after user checkout
**/
include 'header.php';
include '../../connect/connect.php';

// start check if this is page of success return
if( !empty($_GET['order_id']) && !empty($_GET['paymentId']) && !empty($_GET['token']) && !empty($_GET['PayerID']) ):
	
	// start of check if this same process payment
	if($_SESSION['Payment_id']===$_GET['paymentId']):
		
        $update_query = "UPDATE `advertise` SET price='".strip_tags($_GET['price'])."' WHERE id='".$_GET['order_id']."'"; 	   
	    $result = mysqli_query($conn,$update_query);

		 // start of update in mysqli
		if ($result):
			$_SESSION['Payment_id'] = null;
		    header('Location:pendingAds.php');
		else:
			echo " error ". mysqli_error($conn);
        endif;
        // end of update in mysqli

	endif;
	// end of check if this same process payment

endif;
// end of check if this is page of success return