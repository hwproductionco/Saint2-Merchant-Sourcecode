<?php require 'include/core_functions.php' ;
$data['API'] = 1.5;
$data['account_id'] = $GLOBALS['account_id'];
$data['user_id'] = $GLOBALS['api_user'];
				$data['user_api_key'] =  $GLOBALS['api_key'];
				$data['type'] = 'manage_fields';
				$data['action'] = 'delete';
$data['field_list'] = $_GET['name'];
submit_cURL ($data);

header('Location: custom_fields.php');