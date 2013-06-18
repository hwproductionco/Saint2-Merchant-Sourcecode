<?php require 'include/core_functions.php' ;

//$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'campaign_fee_new';
				
				$data['account_id'] =  $GLOBALS['account_id'];
				$data['campaign_id'] = $_REQUEST['camp_id'];



if(isset($_REQUEST['time']))
{
	$data['fee_interval'] = $_REQUEST['time'];
}
if(isset($_REQUEST['period']))
{
	$data['interval_type'] = $_REQUEST['period'];
}
if(isset($_REQUEST['amount']))
{
	$data['fee_amount'] = $_REQUEST['amount'];
}
if(isset($_REQUEST['desc']))
{
	$data['fee_description'] = $_REQUEST['desc'];
}
//var_dump($data);
submit_cURL ($data);

//print_r($parse_array_campaign);
//exit;
$page = $_REQUEST['page'];
if($page == '1')
{
	header('Location: configure_gift_card_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
if($page == '2')
{
	header('Location: configure_points_program.php?camp_id='.$_REQUEST['camp_id']);	
}