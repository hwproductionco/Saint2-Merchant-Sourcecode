<?php require 'include/core_functions.php' ;

//$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_password'] =  $GLOBALS['api_key'];
				$data['type'] = 'campaign_new';
				$data['action'] = 'campaign';
				
if(isset($_REQUEST['point']))
{
	$data['campaign_type'] = $_REQUEST['point'];
}
if(isset($_REQUEST['name']))
{
	$data['campaign_name'] = $_REQUEST['name'];
}
if($_REQUEST['point']=='earned')
{
	$data['amount_per_event'] = '4.9';
}

$campaign_contents = submit_cURL ($data);
$parse_array_campaign = array();
$parse_array_campaign = xml2array($campaign_contents, $get_attributes=1, $priority = 'tag');
//print_r($parse_array_campaign);
//exit;
if($_REQUEST['point']=='points')
{
	header('Location: configure_points_program.php?camp_id='.$parse_array_campaign['response']['campaign']['id'].'&camp_name='.$_REQUEST['name']);
}
if($_REQUEST['point']=='giftcard')
{
	header('Location: configure_gift_card_campaign.php?camp_id='.$parse_array_campaign['response']['campaign']['id'].'&camp_name='.$_REQUEST['name']);
}
if($_REQUEST['point']=='buyx')
{
	header('Location: configure_buy_x_get_free_campaign.php?camp_id='.$parse_array_campaign['response']['campaign']['id'].'&camp_name='.$_REQUEST['name']);
}
if($_REQUEST['point']=='events')
{
	header('Location: configure_event_campaign.php?camp_id='.$parse_array_campaign['response']['campaign']['id'].'&camp_name='.$_REQUEST['name']);
}
if($_REQUEST['point']=='earned')
{
	header('Location: configure_earn_per_event_campaign.php?camp_id='.$parse_array_campaign['response']['campaign']['id'].'&camp_name='.$_REQUEST['name']);
}