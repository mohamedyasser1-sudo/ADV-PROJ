<?php 
/**************************************
 * paypal script added by mohamed ellithy
 *         6 - 3 march 2020
 *          paypal setting
 **************************************/
require __DIR__ . '/bootstrap.php';

class paypal_checkout{

	 private $cost        ='12';
	 private $currency;
	 private $page_success;
	 private $page_failed; 
	 private $order_id    ='12';
	 private $apiContext;
	 
     function __construct($order_id,$cost,$currency='USD'){
         $this->cost        =$cost;
	     $this->currency    =$currency;
	     $this->order_id    =$order_id;
	     $this->page_failed =$this->get_current_url()."/".$_SERVER['PHP_SELF']."/../success-checkout.php";
	     $this->page_success=$this->get_current_url()."/".$_SERVER['PHP_SELF']."/../success-checkout.php";
	     $this->apiContext  = new \PayPal\Rest\ApiContext(new \PayPal\Auth\OAuthTokenCredential(
	         /* ClientID */ 'AQL6NsrFTxi2xD-kWsjd-1ytoDqw8KH0e_TJ2XuY_M4X0rfxIlDZIhWgCDYzTVFrqG4duVaXvE5c-Qik',     
	        /*ClientSecret*/ 'EFT6dPUgFtniDMH9-KEJgM33c2ACRhJ_DNbo975PFuyf_KaJKp0brB7XpFPcP95eOGmDCVoPCFcB-tmu'      
	        )
		 );
	     $this->checkout_paypal();
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
	 private function checkout_paypal(){

			// After Step 2
			$payer = new \PayPal\Api\Payer();
			$payer->setPaymentMethod('paypal');

			$amount = new \PayPal\Api\Amount();
			$amount->setTotal($this->cost);
			$amount->setCurrency($this->currency);

			$item = new \PayPal\Api\Item();
            $item->setName('mohamed product');
            $item->setSku("321321"); // Similar to `item_number` in Classic API


			$transaction = new \PayPal\Api\Transaction();
			$transaction->setAmount($amount);

			$redirectUrls = new \PayPal\Api\RedirectUrls();
			$redirectUrls->setReturnUrl($this->page_success.'?order_id='.$this->order_id.'&price='.$this->cost)
			             ->setCancelUrl($this->page_failed);

			$payment = new \PayPal\Api\Payment();
			$payment->setIntent('sale')
			    ->setPayer($payer)
			    ->setTransactions(array($transaction))
			    ->setRedirectUrls($redirectUrls);


			// After Step 3
			try {
			    $payment->create($this->apiContext);
			    $_SESSION['Payment_id'] = $payment->id;
			    
			   header('Location:'.$payment->getApprovalLink() );
			}
			catch (\PayPal\Exception\PayPalConnectionException $ex) {
			    // This will print the detailed information on the exception.
			    //REALLY HELPFUL FOR DEBUGGING
			    echo $ex->getData();
			}

	 }

}