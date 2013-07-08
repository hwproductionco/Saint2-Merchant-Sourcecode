<?php require 'include/core_functions.php' ;


$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] =  $GLOBALS['api_key'];
$data['type'] = 'campaign_delete';
$data['action'] = 'item';
$data['campaign_id'] = $_GET['camp_id'];
$data['item_id'] = $_GET['promotion_id'];

submit_cURL ($data);

header('Location: configure_buy_x_get_free_campaign.php?camp_id='.$_GET['camp_id']);