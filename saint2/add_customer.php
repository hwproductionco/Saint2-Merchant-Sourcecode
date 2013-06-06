<?php require 'include/core_functions.php' ;
$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] = $GLOBALS['api_key'];
$data['type'] = 'record_customer';
$data['customer_action'] = 'new';
$data['account_id'] = $GLOBALS['account_id'];
$camp = array();
$camp = $_POST['camp'];
$camp_str = '';
for($i = 0;$i<count($camp);$i++)
{
	$camp_str = $camp_str.','.$camp[$i];
}
$camp_str = substr($camp_str, 1);
//}
$data['campaign_id'] = $camp_str;
//}

$data['card_number']	 = $_POST['card'];
//$data['card_number_generate'] = 10; // for 10-digit number.
$data['code']	 = $_POST['card'];
$data['first_name']	 = $_POST['f_name'];
$data['last_name']	 = $_POST['l_name'];
$data['phone']	 = $_POST['phno'];
$data['email']	 = $_POST['email'];
$data['custom_date']	 = date('Y-m-d',strtotime($_POST['DOB']));
//$data['custom_date']	 = '1970-07-14';
$data['street1']	 = $_POST['street1'];
$data['street2']	 = $_POST['street2'];
$data['city']	 = $_POST['city'];
$data['state']	 = $_POST['state'];
$data['postal_code'] = $_POST['zip'];
$data['country']	 = $_POST['cntry'];
/*echo $_POST['count'];
for($i=0;$i<$_POST['count'];$i++)
{
	$data[$_POST['hid'.$i]] = $_POST['hid'.$i];		
}
*/
//print_r($_POST);
     foreach ($_POST as $key => $value){
		 	 //echo $key[0];
			 
			if(is_array($value) && !empty($value))
			{
				$data[$key] = implode(',',$value);
				
				//foreach($value as $key1=>$value1)
				//{
					
					//$str = $str.','.$value1;	
				//}
				//echo $str;
				//$data[$key] = substr($str,1); 
			}
			else{
		 			$data[$key] = $value;
			}
			
				
			
		 
        	
        /*if(is_array($value)){ //If $value is an array, print it as well!
            printArray($value);
        }*/  
    } 
//print_r($data);
//exit;
//printArray($_POST);
/*$data['API'] = 1.5;
$data['user_api_key'] =  $GLOBALS['api_key'];
$data['type'] = 'manage_fields';
$data['action'] = 'list';
$fields_contents	=	 submit_cURL ($data);
	
$parse_array_fields = array();
$parse_array_fields = xml2array($fields_contents, $get_attributes=1, $priority = 'tag');

if(!empty($parse_array_fields['response']['account']['fields']))
{
    foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array)
	{
		if(substr($p_array['name'], 0, -1) == 'custom_field_') 
		{
			if($p_array['name'] == $_POST[''])
			{
					
			}
		}
	}
}
*/

$customer_contents	=	 submit_cURL ($data);

$parse_array_customer = array();
$parse_array_customer = xml2array($customer_contents, $get_attributes=1, $priority = 'tag');

header('Location: manage_customer_transactions2.php?code='.$parse_array_customer['response']['customer']['code']);