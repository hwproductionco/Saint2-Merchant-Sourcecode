<?php require 'include/core_functions.php' ;

//$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'campaign_new';
				$data['action'] = 'promo';
				$data['account_id'] =  $GLOBALS['account_id'];
				$data['campaign_id'] = $_REQUEST['camp_id'];



if(isset($_REQUEST['oprator']))
{
	$data['promo_operation'] = $_REQUEST['oprator'];
}
if(isset($_REQUEST['much']))
{
	$data['promo_amount'] = $_REQUEST['much'];
}
if(isset($_REQUEST['desc']))
{
	$data['promo_description'] = $_REQUEST['desc'];
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