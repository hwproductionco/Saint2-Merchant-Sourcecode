<?php require 'include/core_functions.php' ;

//$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'campaign_update';
				$data['action'] = 'reward';
				$data['account_id'] =  $GLOBALS['account_id'];
				$data['campaign_id'] = $_REQUEST['camp_id'];
				$data['reward_id'] = $_REQUEST['reward_id'];



if(isset($_REQUEST['desc']))
{
	$data['new_reward_description'] = $_REQUEST['desc'];
}
if(isset($_REQUEST['need']))
{
	$data['new_reward_level'] = $_REQUEST['need'];
}
if(isset($_REQUEST['item']))
{
	$data['new_reward_identifier'] = $_REQUEST['item'];
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
	header('Location: configure_event_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}
else if($_REQUEST['page_id'] == '3')
{
	header('Location: configure_earn_per_event_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}