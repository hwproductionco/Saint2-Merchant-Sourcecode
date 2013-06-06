<?php require 'include/core_functions.php' ;

$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'depreciation_new';
				$data['action'] = 'promo';
				$data['account_id'] =  $GLOBALS['account_id'];
				$data['campaign_id'] = $_REQUEST['camp_id'];



if(isset($_REQUEST['trans_type']))
{
	$data['depreciation_type'] = $_REQUEST['trans_type'];
}
if(isset($_REQUEST['interval']))
{
	$data['depreciation_interval'] = $_REQUEST['interval'];
}
if(isset($_REQUEST['interval_type']))
{
	$data['depreciation_interval_type'] = $_REQUEST['interval_type'];
}
if(isset($_REQUEST['percent']))
{
	$data['depreciation_percentage'] = $_REQUEST['percent'];
}
//var_dump($data);
submit_cURL ($data);
//exit;
//print_r($parse_array_campaign);
//exit;
if($_REQUEST['page_id'] == '1')
{
	header('Location: configure_points_program.php?camp_id='.$_REQUEST['camp_id']);
}
else if($_REQUEST['page_id'] == '2')
{
	header('Location: configure_event_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
else if($_REQUEST['page_id'] == '3')
{
	header('Location: configure_buy_x_get_free_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
else if($_REQUEST['page_id'] == '4')
{
	header('Location: configure_gift_card_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
else if($_REQUEST['page_id'] == '5')
{
	header('Location: configure_event_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
else if($_REQUEST['page_id'] == '6')
{
	header('Location: configure_earn_per_event_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}

