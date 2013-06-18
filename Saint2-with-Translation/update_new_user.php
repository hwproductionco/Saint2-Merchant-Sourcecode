<?php require 'include/core_functions.php' ;

//fe24fc239e6c3f4cc80106dfa425fe48c5fcd1ff
$data['user_id'] = $GLOBALS['api_user'];;
$data['user_password'] = $GLOBALS['api_key'];
$data['type'] = 'user_update';
$data['account_id'] =  $GLOBALS['account_id']; 

$b_name = "";

if(isset($_POST['user_name']))
{
	$data['user_name'] = $_POST['user_name'];
	//$data['agency'] = $_POST['b_name'];
		
}
$adr1 = "";
if(isset($_POST['password']))
{
	$data['user_new_password'] = $_POST['password'];
		
}
$adr2 = "";
if(isset($_POST['f_name']))
{
	$data['user_first_name'] = $_POST['f_name'];
	//$adr2 = $_POST['adr2']; 	
}
$city = "";
if(isset($_POST['l_name']))
{
	$data['user_last_name'] = $_POST['l_name'];
	//$city = $_POST['city']; 	
}
$state = "";
if(isset($_POST['info']))
{
	$data['user_custom1'] = $_POST['info'];
}
if(isset($_POST['pin']))
{
	$data['user_PIN'] = $_POST['pin'];
	
}

$email = "";
if(isset($_POST['lang']))
{
	$data['language_selector'] = $_POST['lang'];
		
}
$phno = "";
if(isset($_POST['i_time']))
{
	$data['timezone_selector'] = $_POST['i_time'];
		
}

/*$owner_id = "";
if(isset($_POST['owner_id']))
{
	$owner_id = $_POST['owner_id']; 	
}
*/

/**/


//$data['user_name']	=	'nicole2';

if(isset($_POST['role']))
{
	$data['user_role'] = $_POST['role']; 	
}


	$data['allowed_campaigns'] = 'none'; 	
//}
	/*$data['timezone_selector'] = $_POST['user_timezone']; 
	$data['symbol_selector'] = $_POST['c_symbol'];	*/
//*///}

//var_dump($data);
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
*/header('Location: manage_authorized_users.php');