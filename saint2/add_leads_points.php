<?php require 'include/core_functions.php' ;

$data['user_id'] = $GLOBALS['api_user'];

				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'record_activity';
				
$data['account_id'] =  $GLOBALS['account_id']; 
   foreach ($_POST as $key => $value){
		if(substr($key,0, 13) == 'custom_field_')
		{	 
			if(substr($value, -1, 1) == ',')
			{	 
				$data[$key] = substr($value, 0, -1);
			}
			else
			{
				$data[$key] = $value;	
			}

			
		}
			
		 
        	
    }
	
if(isset($_REQUEST['amount']))
{
	$data['amount'] = $_REQUEST['amount'];	
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

if(isset($_POST['redirect']))
{
	header('Location: manage_customer_transactions2.php?code='.$_POST['code']);
}
else
{
	header('Location: manage_customer_transactions2.php?code='.$_POST['code']);	
}