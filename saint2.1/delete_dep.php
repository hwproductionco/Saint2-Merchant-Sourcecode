<?php require 'include/core_functions.php' ;


$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] =  $GLOBALS['api_key'];
$data['type'] = 'depreciation_delete';
//$data['action'] = 'promo';
$data['campaign_id'] = $_GET['camp_id'];
$data['depreciation_id'] = $_GET['dep_id'];

submit_cURL ($data);

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