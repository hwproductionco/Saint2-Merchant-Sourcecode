<?php
/*
=======================
   Morris-Eye-Group
=======================
*/

// Initialize global language variable. (ignore the following line:)
global $lang;

// Account ID / Card # => Phone Number
$lang['label_account_id']				= "ID";
$lang['label_unique_id']				= "ID";
$lang['label_card']						= "Phone #";
$lang['customer_id_not_exist']			= "Customer Phone # does not exist.";
$lang['customer_id_missing']			= "No customer Phone # was entered.";
$lang['manage_import_cust_intructions']	= "<b>To import a list of customers is quite simple:</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">Select the campaign(s) you want those customers to be added to.</li>
												<li style=\"padding-bottom: 5px;\">Specify how each column is separated, and in what order.</li>
												<li style=\"padding-bottom: 0px;\">Copy-paste your list in the large box, and check the box if you want matching records<br>
													(with the same Phone #) to be overritten or ignored.</li>
											</ol>";
$lang['customer_new_id_exists']			= "The Customer Phone # you entered already exists.";
$lang['customer_new_id_match']			= "The following account matches the"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "This is not a valid Customer Phone #.";
$lang['manage_import_field_note']		= "<i>Each field is optional.</i><br>
												<br>
												Note: If you plan on importing customer<br>
												transactions later, a unique <i>Customer<br>
												Phone #</i> for each customer is<br>
												required (to then be able to match<br>
												the transactions to customers).";
$lang['customer_edit_campaigns_note']	= "Adding a customer to another campaigns allows you to search for them using partial searches on any
											of their account information. Otherwise, you can search by their Phone # only, or use
											the pull-down menu on the top-right to move from campaign to campaign within a customer's record.";
$lang['error_customer_id_empty']		= "You must enter a Customer Phone #.";
$lang['error_balance_lookup_no_acct']	= "No Phone #.";

$lang['user_edit_record_new_card']		= "A new Phone # has been assigned:";
$lang['customer_new_card_desc']			= "A unique Phone # is necessary for them to be able to check<br>their balances on your site.";

// Addt'l Info => Card #
$lang['label_additional_info']			= "Card #";
$lang['label_additional_info_user']		= "Addt'l Info";
$lang['user_edit_record_change_addtl']	= "Card # changed to";
$lang['user_edit_record_del_addtl']		= "Card # Removed. Previously";
$lang['user_edit_record_replace_addtl']	= "Card # changed from";

?>
