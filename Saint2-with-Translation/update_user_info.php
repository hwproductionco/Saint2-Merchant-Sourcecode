<?php require 'include/core_functions.php' ;
$b_name = "";
echo "lang". $_POST['lang'];
if(isset($_POST['b_name']))
{
	$b_name = $_POST['b_name']; 	
}
$adr1 = "";
if(isset($_POST['adr1']))
{
	$adr1 = $_POST['adr1']; 	
}
$adr2 = "";
if(isset($_POST['adr2']))
{
	$adr2 = $_POST['adr2']; 	
}
$city = "";
if(isset($_POST['city']))
{
	$city = $_POST['city']; 	
}
$state = "";
if(isset($_POST['state']))
{
	$state = $_POST['state']; 	
}
$c_symbol = "";

$country = "";
if(isset($_POST['cntry']))
{
	$country = $_POST['cntry']; 	
}
$email = "";
if(isset($_POST['email']))
{
	$email = $_POST['email']; 	
}
$phno = "";
if(isset($_POST['phno']))
{
	$phno = $_POST['phno']; 	
}
$owner_id = "";
if(isset($_POST['owner_id']))
{
	$owner_id = $_POST['owner_id']; 	
}


if(isset($_POST['password']))
{
	//$data['user_password'] = md5($_POST['password']); 	
}

$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] = $GLOBALS['api_key'];
$data['type'] = 'account_update';
$data['account_id'] =  $GLOBALS['account_id'];  
//$data['user_name']	=	'nicole2';

if(isset($_POST['user_first_name']))
{
	$data['contact_first_name'] = $_POST['user_first_name']; 	
}

if(isset($_POST['user_last_name']))
{
	$data['contact_last_name'] = $_POST['user_last_name']; 	
}
	$data['language_selector'] = $_POST['lang'];
	
	$data['timezone_selector'] = $_POST['user_timezone']; 	
//}

//print_r($data);

submit_cURL ($data);


header('Location: user_info.php');