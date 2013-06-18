<?php require 'include/core_functions.php' ;
$data['user_id'] = $GLOBALS['api_user'];

$data['user_password'] =  $GLOBALS['api_key'];
$data['type'] = 'generate_card_number';
//$data['action'] = 'update';
//$data['action'] = 'update';
$data['how_many_digits'] = 8;
$data['account_id'] =  $GLOBALS['account_id']; 
//print_r($data);
$card_contents = submit_cURL ($data);

$parse_array_card = array();
$parse_array_card = xml2array($card_contents, $get_attributes=1, $priority = 'tag');
//$parse_array_card['response']['error'];	
//$parse_array_login['response'];
echo $parse_array_card['response']['customer']['card_number']; 	
