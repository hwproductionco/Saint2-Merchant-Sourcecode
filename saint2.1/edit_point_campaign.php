<?php require 'include/core_functions.php' ;

//$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'campaign_update';
				$data['action'] = 'campaign';
				$data['account_id'] =  $GLOBALS['account_id'];
				$data['campaign_id'] = $_REQUEST['camp_id'];
				



if(isset($_REQUEST['name']))
{
	$data['new_campaign_name'] = $_REQUEST['name'];
}
if(isset($_REQUEST['points_ratio']))
{
	$data['new_points_ratio'] = $_REQUEST['points_ratio'];
}
if(isset($_REQUEST['reward_ratio']))
{
	$data['new_reward_ratio'] = $_REQUEST['reward_ratio'];
}

//var_dump($data);
submit_cURL ($data);

//print_r($parse_array_campaign);
//exit;
if($_REQUEST['page_id'] == '1')
{
	header('Location: configure_points_program.php?camp_id='.$_REQUEST['camp_id']);	
}
else if($_REQUEST['page_id'] == '2')
{
	header('Location: configure_buy_x_get_free_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
else if($_REQUEST['page_id'] == '3')
{
	header('Location: configure_event_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
else if($_REQUEST['page_id'] == '4')
{
	header('Location: configure_gift_card_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
else if($_REQUEST['page_id'] == '5')
{
	header('Location: configure_earn_per_event_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}