<?php

require 'vendor/autoload.php';
include('pdf.php');


function gen_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        // 32 bits for "time_low"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

        // 16 bits for "time_mid"
        mt_rand( 0, 0xffff ),

        // 16 bits for "time_hi_and_version",
        // four most significant bits holds version number 4
        mt_rand( 0, 0x0fff ) | 0x4000,

        // 16 bits, 8 bits for "clk_seq_hi_res",
        // 8 bits for "clk_seq_low",
        // two most significant bits holds zero and one for variant DCE1.1
        mt_rand( 0, 0x3fff ) | 0x8000,

        // 48 bits for "node"
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
    );
}
// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys

//Provide your secret key here 
\Stripe\Stripe::setApiKey("sk_test_QXjYBeV0ZADxC0G0BT8L6EjI00oVJBK3T8");

// Token is created using Stripe.js or Checkout!
// Get the payment token submitted by the form

//Read JSON from request
$inputJSON = file_get_contents('php://input');

//convert JSON into PHP array
$post = json_decode($inputJSON, TRUE);

//if no valid json found, try it using post/get 
if (!$post) {
	parse_str($inputJSON, $post);
}

//sentize posted data i.e senitize($post);

//Read token 
$errors = [];

if (empty($post['stripe_token'])) {
	$errors[] = "Stripe token missing";
} else {
	$token = $post['stripe_token'];
}

if (empty($post['amount'])) {
	$errors[] = "Amount missing";
} else {
	$amount = $post['amount'];
}
if (empty($post['name'])) {
	$errors[] = "Name missing";
} else {
	$name = $post['name'];
}

if (empty($post['product_id'])) {
	$errors[] = "Product id missing";
} else {
	$productId = $post['product_id'];
}

if (empty($post['description'])) {
	$errors[] = "Product description missing";
} else {
	$description = $post['description'];
}

if (isset($post['currency'])) {
	$currency = $post['currency']; //usd 
} else {
	$currency = 'usd'; 
}


$response = null;

if (!empty($errors)) {
	
	$response = json_encode(['errors' => $errors]);

} else {



	$amount = $amount * 100; //Stripe expects amounts in cents/pence

	try {

	    $info = array(
			"amount" => $amount,
			"currency" => $currency,
			"description" => $description,
			"source" => $token
		);
		
		 
		
		$charge = \Stripe\Charge::create($info);

		//print_r($charge);


		if ($charge->status == 'succeeded') {

			$aammoouu = ($charge->amount / 100);
			$n_share = 10;

			//verify amount here by getting the id of the product
 $file_name = 'payment-details'.md5(rand()) . '.pdf';
 $html = '<html lang="en"><head> <title>Bootstrap Example</title> <meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1"> <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script></head><body><div class="container"> <h2>Investment Invoice</h2> <p>The details of all the securities(shares) are in the table below</p> <table class="table table-bordered"> <thead> <tr> <th>Share ID</th> <th>Rate</th> <th>Amount</th> </tr> </thead> <tbody>';
 for ($i=0; $i <$n_share ; $i++) { 
  $html.='<tr> <td>'.gen_uuid().'</td> <td>$50</td> <td>$50</td> </tr>';
 }
$html.='<tr><td></td><td></td><td>Total : $'.$aammoouu.'</td></tr><td></td><td></td><td>Total Shares : '.$n_share.'</td><tr></tr>';
 $html.='</tbody> </table></div></body></html>';

 $html_code = $html;
 
 $pdf = new Pdf();

			 $pdf->load_html($html_code);
			 $pdf->setPaper('A4', 'portrait');
			 $pdf->render();
			 $file = $pdf->output();
			 file_put_contents($file_name, $file);

			


			$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465,"ssl"))
			  ->setUsername('omerkhanjadoons@gmail.com')
			  ->setPassword('babag11223')
			;

			$mailer = new Swift_Mailer($transport);

			$message = (new Swift_Message('Payment Confirmation - HoopStreet Investment'))    
			 ->setFrom(array('omerkhanjadoons@gmail.com' => 'HoopStreet'))
			 ->setTo(array('omerjadoon1@gmail.com'))    
			 ->setBody('<h1>Hello! Payment Confirmed !!!!</h1>')->attach(\Swift_Attachment::fromPath($file_name)) 
			 ;

			$result = $mailer->send($message);
				
			
			

$response = json_encode([
					'msg'				=> 'Charge successful',
					'amount'			=> ($charge->amount / 100), //again convert amount to usd from pence :D
					'status'			=> $charge->status,
					'transaction_id'	=> $charge->id,
					'captured'			=> $charge->captured,
					'created'			=> $charge->created,
					'currency'			=> $charge->currency,
					'description'		=> $charge->description,
					'paid'				=> $charge->paid,
					'email'				=> "sent"
				]);
			/*
				if charge successful save as orders in orders table with following
			*/
			//store info in orders table along with customer info

			
		} else {
			$response = json_encode([
					'errors' => ['Charge failed', $e->getMessage()]
				]);
		}

	} catch (Exception $e) {
		//print_r($charge);
		$response = json_encode([
				'errors' => $e->getMessage()
			]);
	}
}

echo $response;