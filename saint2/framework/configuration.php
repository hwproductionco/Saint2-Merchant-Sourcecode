<?php
session_start();
	// API Login credentials
	// ---------------------

	/*$GLOBALS['api_url'] 		= 'https://app.clienttoolbox.com/api.php';
	//$GLOBALS['api_user'] 		= 'athens_api';
	$GLOBALS['api_key']			= 'e2d7ffa0f9fdda0dfb12cb3da887bd12a00e1ad7';
	//$GLOBALS['account_id']		= 'athensrewards';*/
	$GLOBALS['api_url'] 		= 'https://app.clienttoolbox.com/api.php';
	$GLOBALS['api_user'] 		= $_SESSION['api_user'];
	$GLOBALS['api_key']			= $_SESSION['api_key'];
	$GLOBALS['account_id']		= $_SESSION['account_id'];


	// Admin User(s) definition
	// ---------------------
	$GLOBALS['admin_users']	= array('admin' 	=> 'rewards2012!!' );


	// Customization and Internationalization
	// -------------------------------------
	$GLOBALS['site_window_name']	= 'Athens Rewards';
	$GLOBALS['navigation_height']	= 165;
	$GLOBALS['logo_location']	= 'http://athensrewards.com/dev2/images/Site-Home_Logo2.png';
	$GLOBALS['logo_width']		= 150;
	$GLOBALS['logo_height']		= 150;
	$GLOBALS['logo_offset_top']	= 15;
	$GLOBALS['logo_offset_left']	= 10;
	$GLOBALS['european_dates'] 	= FALSE;


	// Non-Web-Editable Content / Words:
	// ---------------------------------
	$GLOBALS['hard_coded_content'] = array(
		'submit' 		=> 'Submit',
		'save_changes'		=> 'Save Changes',
		'submit_information'	=> 'Submit Information',
		'submit_order'		=> 'Submit Order',
		'record'		=> 'Record',
		'OK'			=> 'OK',
		'email_subject'		=> 'Customer Redemption Request'
	);
	


?>
