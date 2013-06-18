<?php require 'include/core_functions.php' ;

$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'redeem';
				
				$data['account_id'] =  $GLOBALS['account_id'];
				$data['campaign_id'] = $_REQUEST['camp_id'];
				$data['code'] = $_REQUEST['code'];



if(isset($_REQUEST['desc']))
{
	$data['authorization'] = $_REQUEST['desc'];
}
if(isset($_REQUEST['reward']))
{
	$data['reward_to_redeem'] = $_REQUEST['reward'];
}
//var_dump($data);
submit_cURL ($data);

//print_r($parse_array_campaign);
//exit;
header('Location: manage_customer_transactions2.php?code='.$_POST['code']);