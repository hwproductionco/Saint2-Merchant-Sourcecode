<?php require 'include/core_functions.php' ;

//fe24fc239e6c3f4cc80106dfa425fe48c5fcd1ff
$data['user_id'] = $GLOBALS['api_user'];;
$data['user_password'] = $GLOBALS['api_key'];
$data['type'] = 'account_update';
$data['account_id'] =  $GLOBALS['account_id']; 
$b_name = "";

if(isset($_POST['b_name']))
{
	$data['biz_name'] = $_POST['b_name'];
	//$data['agency'] = $_POST['b_name'];
	$b_name = $_POST['b_name']; 	
}
$adr1 = "";
if(isset($_POST['adr1']))
{
	$data['biz_address1'] = $_POST['adr1'];
	$adr1 = $_POST['adr1']; 	
}
$adr2 = "";
if(isset($_POST['adr2']))
{
	$data['biz_address2'] = $_POST['adr2'];
	$adr2 = $_POST['adr2']; 	
}
$city = "";
if(isset($_POST['city']))
{
	$data['biz_city'] = $_POST['city'];
	$city = $_POST['city']; 	
}
$state = "";
if(isset($_POST['state']))
{
	$data['biz_state'] = $_POST['state'];
	$state = $_POST['state']; 	
}
if(isset($_POST['cntry']))
{
	$data['biz_country'] = $_POST['cntry'];
	$country = $_POST['cntry']; 	
}

$email = "";
if(isset($_POST['email']))
{
	$data['contact_email'] = $_POST['email'];
	$data['client_email'] = $_POST['email'];
	$email = $_POST['email']; 	
}
$phno = "";
if(isset($_POST['phno']))
{
	$data['contact_phone'] = $_POST['phno'];
	$phno = $_POST['phno']; 	
}

/*$owner_id = "";
if(isset($_POST['owner_id']))
{
	$owner_id = $_POST['owner_id']; 	
}
*/

/**/


//$data['user_name']	=	'nicole2';

if(isset($_POST['user_first_name']))
{
	$data['contact_first_name'] = $_POST['user_first_name']; 	
}

if(isset($_POST['user_last_name']))
{
	$data['contact_last_name'] = $_POST['user_last_name']; 	
}
	/*$data['timezone_selector'] = $_POST['user_timezone']; 
	$data['symbol_selector'] = $_POST['c_symbol'];	*/
//*///}

if(isset($_POST['user_first_name']))
{
	$data['contact_first_name'] = $_POST['user_first_name']; 	
}

if(isset($_POST['user_last_name']))
{
	$data['contact_last_name'] = $_POST['user_last_name']; 	
}
$data['symbol_selector'] = $_POST['c_symbol'];
$data['timezone_selector'] = $_POST['user_timezone'];
		

//print_r($data);

submit_cURL ($data);

/*$select = "Select * from tbl_marchent where username = '".$data['user_name']."'";

$result = mysql_query($select);
if(mysql_num_rows($result)>0)
{
	$update = "Update tbl_marchent SET bus_name = '".$b_name."', adr1 = '".$adr1."', adr2='".$adr2."', city='".$city."',state_province='".$state."',country='".$country."',f_name = '".$data['user_first_name']."',l_name='".$data['user_last_name']."',email='".$email."', phno='".$phno."',owner_id='".$owner_id."', currency_symbol='".$c_symbol."',time_zone='".$data['timezone_selector']."',password = '".$_POST['password']."' where username='".$data['user_name']."'";
	
	mysql_query($update);	
}
else
{
	$insert = "Insert INTO tbl_marchent(bus_name,adr1,adr2,city,state_province,country,f_name,l_name,email,phno,owner_id,currency_symbol,time_zone,username,password) values('".$b_name."','".$adr1."','".$adr2."','".$city."','".$state."','".$country."','".$data['user_first_name']."','".$data['user_last_name']."','".$email."','".$phno."','".$owner_id."','".$c_symbol."','".$data['timezone_selector']."','".$data['user_name']."','".$_POST['password']."')";
	mysql_query($insert);	
}
*/header('Location: account_settings.php');