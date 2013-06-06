<?php require 'include/core_functions.php' ;


$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] =  $GLOBALS['api_key'];
$data['type'] = 'campaign_fee_delete';
//$data['action'] = 'promo';
$data['campaign_id'] = $_GET['camp_id'];
$data['fee_id'] = $_GET['fee_id'];

submit_cURL ($data);

	//header('Location: configure_gift_card_campaign.php?camp_id='.$_REQUEST['camp_id']);	
$page = $_REQUEST['page_id'];
if($page == '1')
{
	header('Location: configure_gift_card_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
if($page == '2')
{
	header('Location: configure_points_program.php?camp_id='.$_REQUEST['camp_id']);	
}