<?php require 'include/core_functions.php' ;

$data['user_id'] = $GLOBALS['api_user'];

				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'record_activity';
				
$data['account_id'] =  $GLOBALS['account_id']; 
	
if(isset($_REQUEST['service_product']))
{
	$data['service_product'] = $_REQUEST['service_product'];	
}
if(isset($_REQUEST['qty']))
{
	$data['buyx_quantity'] = $_REQUEST['qty'];	
}
if(isset($_REQUEST['code']))
{
	$data['code'] = $_REQUEST['code'];	
}
if(isset($_REQUEST['camp']))
{
	$data['campaign_id'] = $_REQUEST['camp'];	
}
if(isset($_REQUEST['desc']))
{
	$data['authorization'] = $_REQUEST['desc'];	
}
if(isset($_REQUEST['email']))
{
	$data['send_transaction_email'] = $_REQUEST['email'];	
}
//var_dump($data);
submit_cURL ($data);

header('Location: manage_customer_transactions2.php?code='.$_POST['code']);