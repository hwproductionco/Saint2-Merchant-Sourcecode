<?php require 'include/core_functions.php' ;
$data['user_id'] = $GLOBALS['api_user'];
$data['user_password'] = $GLOBALS['api_key'];
$data['type'] = 'record_customer';
$data['customer_action'] = 'edit';
$data['account_id'] = $GLOBALS['account_id'];
//print_r($_POST['camp']);
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
$data['card_number']	 = $_POST['card'];
//$data['card_number_generate'] = 10; // for 10-digit number.
$data['code']	 = $_POST['code'];
$data['first_name']	 = $_POST['f_name'];
$data['last_name']	 = $_POST['l_name'];
$data['phone']	 = $_POST['phno'];
$data['email']	 = $_POST['email'];
$data['custom_date']	 = $_POST['DOB'];
$data['street1']	 = $_POST['street1'];
$data['street2']	 = $_POST['street2'];
$data['city']	 = $_POST['city'];
$data['state']	 = $_POST['state'];
$data['postal_code'] = $_POST['zip'];
$data['country']	 = $_POST['cntry'];
foreach ($_POST as $key => $value){
		 
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

/*$data['custom_field'] = 'John likes cheese.';
$data['customer_username'] = 'jdoe1970';
$data['customer_password'] = 'ilovecheese';
$data['customer_PIN'] = '1234';
*///$data['custom_field_2'] = 'Single';
$customer_contents	=	 submit_cURL ($data);

$parse_array_customer = array();
$parse_array_customer = xml2array($customer_contents, $get_attributes=1, $priority = 'tag');

header('Location: manage_customer_transactions2.php?code='.$parse_array_customer['response']['customer']['code']);