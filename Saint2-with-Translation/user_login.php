<?php require 'include/core_functions.php' ;
$data['type'] = 'user_login';
$data['user_id'] = trim($_POST['input-username']);
$data['user_password'] = $_POST['input-password'];
//print_r($data);
$login_contents = submit_cURL ($data);

$parse_array_login = array();
$parse_array_login = xml2array($login_contents, $get_attributes=1, $priority = 'tag');
$parse_array_login['response']['error'];	
//$parse_array_login['response'];
 	
if($parse_array_login['response']['error'] != '')
{
	$_SESSION['error'] = 'User Name or password is wrong';
	header('Location: login.php?msg=1');	
}
$_SESSION['api_user'] = $parse_array_login['response']['account']['user_id'];
$_SESSION['api_key'] = $parse_array_login['response']['account']['user_api_key']; 
$_SESSION['account_id'] = $parse_array_login['response']['account']['account_id'];

header('Location: index.php');