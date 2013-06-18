<?php require 'include/core_functions.php' ;
$data['API'] = 1.5;
$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_api_key'] =  $GLOBALS['api_key'];
				$data['type'] = 'manage_fields';
				$data['action'] = 'list';
				$fields_contents	=	 submit_cURL ($data);

				$parse_array_fields = array();
				$parse_array_fields = xml2array($fields_contents, $get_attributes=1, $priority = 'tag');
				$i=0;
				$num = 0;
				$count = 0;
				$num_array = array();
				foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array)
				{
					if(substr($p_array['name'], 0, -1) == 'custom_field_' || substr($p_array['name'], 0, -1) == 'custom_field_1' || substr($p_array['name'], 0, -1) == 'custom_field_2' || substr($p_array['name'], 0, -1) == 'custom_field_3' || substr($p_array['name'], 0, -1) == 'custom_field_4' || substr($p_array['name'], 0, -1) == 'custom_field_5' || substr($p_array['name'], 0, -1) == 'custom_field_6' || substr($p_array['name'], 0, -1) == 'custom_field_7' || substr($p_array['name'], 0, -1) == 'custom_field_8' || substr($p_array['name'], 0, -1) == 'custom_field_9') 
					{
						if(substr($p_array['name'], 0, -1) == 'custom_field_')
						{
							$num_array[$i] = substr($p_array['name'], -1);
						}
						else
						{
							$num_array[$i] = substr($p_array['name'], -2);
						}
						//echo $num_array[$i-1];
						
					}
					$i++;
						
				}
				//print_r($parse_array_fields);

//$data['API'] = '1.5';
$num  = max($num_array);
$count = $num+1;

//print_r($num_array);

$data['action'] = 'add';

if(isset($_POST['lab']))
{
	$data['custom_field_'.$count.'_label'] = $_POST['lab'];
}
if(isset($_POST['show']))
{
	$data['custom_field_'.$count.'_show'] = $_POST['show'];
}
if(isset($_POST['typ']))
{
	$data['custom_field_'.$count.'_type'] = $_POST['typ'];
}
if(isset($_POST['uni']))
{
	$data['custom_field_'.$count.'_unique'] = $_POST['uni'];
}
if(isset($_POST['list']))
{
	$data['custom_field_'.$count.'_choices'] = $_POST['list'];
}

//print_r($data);
submit_cURL ($data);

header('Location: custom_fields.php');