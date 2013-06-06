<?php require 'include/core_functions.php' ;

//$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'campaign_new';
				$data['action'] = 'reward';
				$data['account_id'] =  $GLOBALS['account_id'];
				$data['campaign_id'] = $_REQUEST['camp_id'];



if(isset($_REQUEST['desc']))
{
	$data['reward_description'] = $_REQUEST['desc'];
}
if(isset($_REQUEST['need']))
{
	$data['reward_level'] = $_REQUEST['need'];
}
if(isset($_REQUEST['item']))
{
	$data['reward_identifier'] = $_REQUEST['item'];
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
	header('Location: configure_earn_per_event_campaign.php?camp_id='.$_REQUEST['camp_id']);	
}