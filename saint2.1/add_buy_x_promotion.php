<?php require 'include/core_functions.php' ;

//$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'campaign_new';
				$data['action'] = 'item';
				$data['account_id'] =  $GLOBALS['account_id'];
				$data['campaign_id'] = $_REQUEST['camp_id'];



if(isset($_REQUEST['need']))
{
	$data['reward_level'] = $_REQUEST['need'];
}
if(isset($_REQUEST['promo_id']))
{
	$data['item_identifier'] = $_REQUEST['promo_id'];
}
if(isset($_REQUEST['desc']))
{
	$data['item_description'] = $_REQUEST['desc'];
}
//var_dump($data);
submit_cURL ($data);

//print_r($parse_array_campaign);
//exit;

	header('Location: configure_buy_x_get_free_campaign.php?camp_id='.$_REQUEST['camp_id']);	
