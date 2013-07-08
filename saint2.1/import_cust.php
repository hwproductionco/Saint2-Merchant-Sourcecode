<?php require 'include/core_functions.php' ;
//var_dump($_POST);

$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] =  $GLOBALS['api_key'];
$data['account_id'] =  $GLOBALS['account_id'];
$data['type'] = 'customers_batch';
$data['delimiter'] = $_POST['delim'];
$data['overwrite_duplicates'] = $_POST['over'];
//$data['card_number_generate'] = 10; // for 10-digit number.
$data['campaigns_to_include'] = $_POST['camp_id'];
for($i=0;$i<count($_POST['cust_field']);$i++)
{
	$c = $i+1;
	$data['profiles_header_'.$c] = $_POST['cust_field'][$i];
}
$data['Profiles_Data'] = $_POST['info'];
//var_dump($data);
//submit_cURL ($data);
$import_result	=	 submit_cURL ($data);

									$import_array = array();
									$import_array = xml2array($import_result, $get_attributes=1, $priority = 'tag');
									//print_r($import_array);
									//exit;
									
if(!empty($import_array['response']['error']))
{
	header('Location: import_customers.php?msg='.$import_array['response']['error']);
}
else
{
	if(isset($_POST['email']))
	{
			$data['type'] = 'account_info';
			$contents	=	 submit_cURL ($data);
		
		$parse_array = array();
		$parse_array = xml2array($contents, $get_attributes=1, $priority = 'tag');
		
		$to = $parse_array['response']['account']['contact_email'];
				$subject = 'Customer Import Confirmation';
				$message = '<html><body>
			<p>All Selected Customers are Imported</p>
			</body></html>';
			$from = 'noreply@hwproduction.com';
			
			 $headers  = "From: ".$from."\r\n"; 
			$headers .= "Content-type: text/html\r\n";
			
			mail($to, $subject, $message, $headers);
			
	}
		header('Location: import_customers.php?msg="Customers Imported Successfully"');
}
