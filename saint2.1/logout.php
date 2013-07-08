<?php //$parse_array_login['response'];

session_start(); 	
	//$_SESSION['error'] = 'User Name or password is wrong';
unset($_SESSION['api_user']);
unset($_SESSION['api_key']); 
unset($_SESSION['account_id']);
session_destroy();
	header('Location: login.php');	
//}

//header('Location: index.php');
?>