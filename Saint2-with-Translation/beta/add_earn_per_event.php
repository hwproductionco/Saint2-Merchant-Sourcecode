<?php require 'include/core_functions.php' ;

//$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'campaign_update';
				$data['action'] = 'campaign';
				$data['account_id'] =  $GLOBALS['account_id'];
				$data['campaign_id'] = $_REQUEST['camp_id'];
				



if(isset($_REQUEST['need']))
{
	$data['new_amount_per_event'] = $_REQUEST['need'];
}

//var_dump($data);
submit_cURL ($data);

//print_r($parse_array_campaign);
//exit;

	header('Location: configure_earn_per_event_campaign.php?camp_id='.$_REQUEST['camp_id']);	
