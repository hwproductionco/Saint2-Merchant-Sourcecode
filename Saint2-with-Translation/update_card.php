<?php require 'include/core_functions.php' ;
//var_dump($_POST);
//exit;
//fe24fc239e6c3f4cc80106dfa425fe48c5fcd1ff
$data['API'] = '1.5';
$data['user_id'] = $GLOBALS['api_user'];

				$data['user_api_key'] =  $GLOBALS['api_key'];
				$data['type'] = 'manage_fields';
				$data['action'] = 'update';
//$data['action'] = 'update';

$data['account_id'] =  $GLOBALS['account_id']; 
$data['card_number_label'] = $_POST['card'];
if(isset($_POST['show1']))
{
	$data['card_number_show'] = 'Y';
}
else
{
	$data['card_number_show'] = 'N';	
}
if(isset($_POST['show2']))
{
	$data['first_name_show'] = 'Y';
}
else
{
	$data['first_name_show'] = 'N';	
}
if(isset($_POST['show15']))
{
	$data['customer_PIN_show'] = 'Y';
}
else
{
	$data['customer_PIN_show'] = 'N';
}
if(isset($_POST['show3']))
{
	$data['last_name_show'] = 'Y';
}
else
{
	$data['last_name_show'] = 'N';
}

if(isset($_POST['show4']))
{
	$data['phone_show'] = 'Y';
}
else
{
	$data['phone_show'] = 'N';
}

if(isset($_POST['show5']))
{
	$data['email_show'] = 'Y';
}
else
{
	$data['email_show'] = 'N';
}

if(isset($_POST['show6']))
{
	$data['custom_date_show'] = 'Y';
}
else
{
	$data['custom_date_show'] = 'N';
}

if(isset($_POST['show7']))
{
	$data['street1_show'] = 'Y';
}
else
{
	$data['street1_show'] = 'N';
}

if(isset($_POST['show8']))
{
	$data['street2_show'] = 'Y';
}
else
{
	$data['street2_show'] = 'N';
}

if(isset($_POST['show9']))
{
	$data['city_show'] = 'Y';
}
else
{
	$data['city_show'] = 'N';
}

if(isset($_POST['show10']))
{
	$data['state_show'] = 'Y';
}
else
{
	$data['state_show'] = 'N';
}

if(isset($_POST['show11']))
{
	$data['zip_show'] = 'Y';
}
else
{
	$data['zip_show'] = 'N';
}

if(isset($_POST['show12']))
{
	$data['country_show'] = 'Y';
}
else
{
	$data['country_show'] = 'N';
}

if(isset($_POST['show13']))
{
	$data['customer_username_show'] = 'Y';
}
else
{
	$data['customer_username_show'] = 'N';
}

if(isset($_POST['show14']))
{
	$data['customer_password_show'] = 'Y';
}
else
{
	$data['customer_password_show'] = 'N';
}
   foreach ($_POST as $key => $value){
		 	 //echo $key[0];
			 //echo substr($key,0, 13);
		if(substr($key,0, 13) == 'custom_field_')
		{
			if(substr($value, -1, 1) == ',')
			{	 
				$data[$key] = substr($value, 0, -1);
			}
			else
			{
				$data[$key] = $value;	
			}
			
		}
			
		 
        	
        /*if(is_array($value)){ //If $value is an array, print it as well!
            printArray($value);
        }*/  
    }
	

///$data['card_number_show'] = $_POST['show1'];

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
*/header('Location: custom_fields.php');