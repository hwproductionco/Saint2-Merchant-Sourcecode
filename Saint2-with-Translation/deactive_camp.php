<?php require 'include/core_functions.php' ;
$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] = $GLOBALS['api_key'];
$data['type'] = 'campaign_deactivate';
$data['account_id'] = $GLOBALS['account_id'];
//$data['code'] = '1234567890123456';
echo $str = $_GET['campaigns'];
$str = substr($str, 1);
$str_arr = array();

$str_arr = explode(',',$str);
//print_r($str_arr);
for($i=0;$i<count($str_arr);$i++)
{
	$data['campaign_id'] = $str_arr[$i];
	//var_dump($data);
	submit_cURL ($data);
		
}

header('Location: view_all_programs.php');