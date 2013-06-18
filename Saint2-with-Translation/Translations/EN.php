<?php

/* =======================
   TRANSLATION NOTES
==========================
This is the American English language file

For a best experience translating this file, use a color-coding text editor, like:
     - BBEdit <http://www.barebones.com/> (Mac)
     - jEdit <http://www.jedit.org/> (Unix, PC)
     - PHP Editor <http://www.dzsoft.com/php-editor.html> (PC)

To edit or modify this file, simply replace the word, phrase,
text, or HTML code in between the doulbe quote (") marks.

Any text after a double slash "//" at the end of a line is a comment to explain or clarify.

Any text between the two characters "/*" and "* /" represents text of graphics that will help
clarify the meaning or context of the line.

Please notice the capitalization of the key words and the English words.  There are many instances
where the same word or phrase shows up twice, the only difference being that in one case it is at
the beginning of a sentence, or in the middle of one. Ex:
$lang['points']							= "points";
$lang['Points']							= "Points";

Sometimes, another word or phrase is inserted in the middle of the text to translate, indicated
by the follwing sample pattern, including the two dots in front and in back:
.$lang['currency'].
When translating, place this pattern back in the right place in relation to the new phrase, and
make sure to add the quotes (") at the begining and end of each segment joined by the pattern. Ex:
	"The ".$lang['currency']." amount entered is not valid."
in French would be:
	"Le montant de ".$lang['currency']." entré n'est pas valide."

If you need to use a double quote in the text, (usually if you want to incude HTML tags),
escape each double quote by placing a \ (forward slash) in front of it. Ex:
    ... = "<span style=\"color: red;\">Hello World!</span>"

Explanation of Terms:
 - Client				Generally refers to the business using StickyStreet's service
 - Customer				Generally refers to customers of a business using StickyStreet.

Lastly, make sure you save the file in _UTF8_ format!

For any questions, send email to support@stickystreet.com

=========================== */


// Initialize global language variable. (ignore the following line:)
global $lang;

$lang['loaded_language']					= 'English';

// Default currency values that can be replaced with preferences in the app.
if (!isset($lang['currency'])) {
	$lang['currency']							= "Dollar";
}
if (!isset($lang['currency_plural'])) {
	$lang['currency_plural']				= "Dollars";
}
if (!isset($lang['currency_symbol'])) {
	$lang['currency_symbol']				= "$";
}
if (!isset($lang['currency_100th'])) {
	$lang['currency_100th']					= "Cent";
}
if (!isset($lang['currency_100th_plural'])) {
	$lang['currency_100th_plural']			= "Cents";
}
if (!isset($lang['currency_100th_symbol'])) {
	$lang['currency_100th_symbol']			= "¢";
}



// Single words and labels
// (Pay attention to capitalization)
$lang['col_1']							= "1";  		// Header for column 1 of reports and bookmarks sections
$lang['col_2']							= "2";  		// Header for column 2 of reports and bookmarks sections
$lang['col_3']							= "3";  		// Header for column 3 of reports and bookmarks sections
$lang['Account']						= "Account";  	// Noun: As in "a collection of transactions". Ex: "Click here to view this customer's account."
$lang['Activate']						= "Activate";  	// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "Activation";	// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "Activity";  	// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "Added";  	// Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']				= "+";			// The mathematical symbol for addition
$lang['All']							= "All";  		// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "Amount";  	// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "and";  		// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']					= "Authorization"; // Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "Available";  // As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "Balance"; 	// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['Balances']						= "Balances";	// Plural
$lang['By']								= "By"; 		// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "Campaign";	// As in a marketing campaign, but in this case, really meaning a "program" as in "Loyalty Program",
														// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "Campaigns";	// Plural
$lang['Country']						= "Country";	// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "Customers";	// As in people who purchase goods or services from the a business that uses the StickyStreet service.
$lang['Date']							= "Date";		// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "Days";		// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "Demo";		// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']					= "Description"; // Ex: "Provide a description of the transaction in this box:"
$lang['Employee']						= "Employee";	// As in a person that works for a business or organization.
$lang['Earned']							= "Earned";		// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "Error";		// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "event";		// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a reward.
$lang['events']							= "events";
$lang['Event']							= "Event";
$lang['Events']							= "Events";
$lang['from']							= "from";		// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "Free";		// As if "no need to pay" or "no charge". Ex: "StickyStreet is free when you have 10 or less customers.
$lang['Hello']							= "Hello";		// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "info";		// Short for "information".
$lang['Level']							= "Level";		// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "Liability";	// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']			= "x";			// The mathematical symbol for multiplication
$lang['Need']							= "Need";		// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "No";			// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "None";		// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "Note";		// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "Notes";		// Plural of "Note", above
$lang['Online']							= "Online";		// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "Operation";  // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['or']								= "or";			// As in "either", between two alternatives. Ex: "this or that".
$lang['point']							= "point";		// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['Paid']							= "Paid";		// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['points']							= "points";
$lang['Point']							= "Point";
$lang['Points']							= "Points";
$lang['per']							= "per";		// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Purchased']						= "Purchased";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Ratio']							= "Ratio";		// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']					= "Recorded By"; // As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "Redeemed"; 	// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "Ref"; 		// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Report']							= "Report"; 	// As in "Relatory", or "Presentation".
$lang['Reward']							= "Reward"; 	// As in a thing that can be claimed after certain conditions have been met. Ex: "The reward for having 1000 points is a free widget."
$lang['Rewards']						= "Rewards"; 	// Plural
$lang['Role']							= "Role";		// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Thank-you']						= "Thank-you";	// As in "Thank-you for your business" - said by the Client to a Customer.
$lang['Tip']							= "Tip";		// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "to";			// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "To Get"; 	// As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['To_Get_One_Of']					= "To Get One Of"; 	// As in "to receive" or "to be given" a single quantity. Ex: "You need to buy 10 coffees to get one of [the same] free"
$lang['Trans_ID']						= "Trans. ID"; 	// Short for "Transaction ID" - Referring to an internal StickyStreet number to reference a particular transaction.
$lang['Transaction']					= "Transaction"; // A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']					= "Transactions"; // Plural
$lang['User']							= "User"; 		// As in an employee of the business or organization that can login to use the StickyStreet service.
$lang['Yes']							= "Yes";

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."-".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "Add Campaign";
$lang['title_add_product_service']		= "Add Product/Service for";
$lang['title_add_promotion']			= "Add Promotion for";
$lang['title_add_reward']				= "Add Reward for";
$lang['title_add_user']					= "Add User";
$lang['title_amnesia'] 					= "Forgot Login or Password";
$lang['title_award_reddeem'] 			= "Award Redeemed";
$lang['title_create_new_account']		= "Create New Account";
$lang['title_default']					= "Gift & Loyalty Management";
$lang['title_edit_account']				= "Edit Account Information";
$lang['title_edit_account_number']		= "Edit Account#";
$lang['title_edit_campaign']			= "Edit Settings for";
$lang['title_edit_product_service']		= "Edit Product/Service for";
$lang['title_edit_promotion']			= "Edit Promotion for";
$lang['title_edit_reward']				= "Edit Reward for";
$lang['title_edit_user']				= "Edit User";
$lang['title_find_add']					= "Find or Add Account in";
$lang['title_login'] 					= "Account Login";
$lang['title_more_r_and_e_banners'] 	= "More Refer and Earn Rewards Banners";
$lang['title_r_and_e_balance']			= "Your Refer and Earn Rewards Balance";
$lang['title_report_all_trans']			= "All Transactions Report";
$lang['title_report_freq_cust']			= "Frequent Customers Report";
$lang['title_report_miss_cust']			= "Missing Customers Report";
$lang['title_report_new_cust']			= "New Customers Report";
$lang['title_report_redeem_trans']		= "Redeemed Transactions Report";
$lang['title_report_totals']			= "Totals Report";
$lang['title_search_result']			= "Search Result";
$lang['title_trans_del']				= "Transaction Deleted";
$lang['title_trans_rec'] 				= "Transaction Recorded";
$lang['title_view_account']				= "View Account#";

// Side Modules
// Module 1
$lang['side_news_header'] 				= "";
$lang['side_news_text']					= "";
// Support Module
$lang['side_support_links']				= "<span style=\"color:#79B216;\">Support</span> Links";
$lang['side_support_desk_describe']		= "See questions and answers in our Knowledge Base, and submit support requests";
// $lang['side_blog_describe']				= "For announcements, tips, and a point of view, visit our"; // ... blog
// $lang['side_support_email_call']		= "Email a support request directly or call:";
// $lang['side_support_phone']				= "<span style=\"font-weight: bold;\">866-780-STICKY</span> <span style=\"color: #888; font-size: 80%;\">(7842)</span>";
// $lang['side_loyalty_link_desc']			= "Bring them back to your site with Online Enrollment and Balance Lookup";
// $lang['side_points_calc_desc']			= "A tool to help you figure out your reward levels";


// Destinations / Section names
$lang['section_account_control_panel']	= "Account Control Panel";
$lang['section_account_info_header']	= "Account Information";
$lang['section_account_login']			= "Account Login";
$lang['section_account_new']				= "Create an Account";
$lang['section_blog']						= "Blog";
$lang['section_campaign_reports']		= "Campaign Reports";
$lang['section_customer_account']		= "Customer Account";
$lang['section_loyalty_link_inst']		= "LoyaltyLink Instructions";
$lang['section_points_calculator']		= "Points Calculator";
$lang['section_points_promotions']		= "Promotions";
$lang['section_support_desk']				= "Support Desk";

// Labels
$lang['label_account_id']					= "Account ID";			// Usually, a Client's account identification "code" (An alphanumeric string of 5 to 20 characters)
$lang['label_unique_id']					= "Account Code";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']				= "Account Owner";			// The person who created a StickyStreet account.
$lang['label_additional_info']			= "Addt'l Info";			// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info_user']		= "Addt'l Info";
$lang['label_card']							= "Card #";					// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']							= "City";
$lang['label_date_range']					= "Date Range";				// Ex: January 2008 to December 2008
$lang['label_email']							= "Email Address";
$lang['label_email_short']					= "Email";
$lang['label_first_name']					= "First Name";				// As in "given name". ie: not the one shared by their family.
$lang['label_last_name']					= "Last Name";				// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_name']							= "Name";					// The joining of first and last names.
$lang['label_organization']				= "Organization";			// As in a business, church, school, club, etc.
$lang['label_owner_id']						= "Owner ID";				// A unique login name that identifies the user as the account owner.
$lang['label_password']						= "Password";
$lang['label_password_new']				= "New Password";
$lang['label_password_retype_short']	= "Re-type Password";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "Re-type new password";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']							= "Phone Number";
$lang['label_state']							= "State / Province";
$lang['label_user_id']						= "User ID";				// A unique login name that allows an employee of a StickyStreet client to access the program.
$lang['label_zip']							= "Zip / Postal Code";

// Navigation
$lang['nav_active']						= "Active";			// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "Add";			// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "Cancel";			// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']					= "Change to:";		// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']					= "Deactivate";  	// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "Deduct";  		// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "Delete";			// Verb: As in "remove" or "erase". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']				= "Deselect All";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "Done";			// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "Edit";			// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "Find";			// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "FINISH";			// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "Go";				// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "Hide";			// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']					= "Jump to:"; 		// As in changing screens, pages, or location.
$lang['nav_log_in']						= "Log in";			// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "Logout";			// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "Lookup";			// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "Next";			// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']					= "On Hold";		// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "Print";			// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']				= "Print Summary";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']				= "Re-Activate";	// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "Record";			// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "Redeem";			// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "Remove";			// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "Return";			// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "Show";			// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']				= "Save Changes";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']					= "Select All";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "Set";			// Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "Step 1";			// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "Step 2";
$lang['step3']							= "Step 3";
$lang['step4']							= "Step 4";

// Login Screen
$lang['login_amnesia_prompt']			= "Forgot your User ID or password?";
$lang['login_amnesia_button']			= "Retrieve it now!";
$lang['login_email_missing']			= "Please enter your account's email address:";
$lang['login_fancy_1']					= "account";
$lang['login_fancy_2']					= "login";
$lang['login_new_account_prompt']		= "Don't have an account?";
$lang['login_new_account_button']		= "Sign-up now!";
$lang['login_password_missing']			= "Please enter your password";
$lang['login_userid_missing']			= "Please enter your User ID";
$lang['login_wrong_password']			= "The password submitted does not match the one on record.";
$lang['login_wrong_user_id']			= "The User ID you entered was not found.<br>(The User ID is case-sensitive.)";

// Forgot Password / Username section;
$lang['amnesia_header']					= "Slight Case of Amnesia?";
$lang['amnesia_note_top']				= "A note about spam filters:";
$lang['amnesia_note_text']				= "If you don't get an email from us within a few minutes please be sure to check your spam filter.
											The email will be coming from"; /* StickyStreet or the name of the Agency. */
$lang['amnesia_password_button']		= "Send me my password";
$lang['amnesia_password_dir']			= "Enter your User ID below, and we'll email your password to the email address we have on file.";
$lang['amnesia_password_header']		= "Forgot Your Password?";
$lang['amnesia_password_sent']			= "Excellent!<br><br>Your password was sent to<br>the email address we have<br>for this account.";
$lang['amnesia_return_button']			= "Return to Login Screen";
$lang['amnesia_sub_header']				= "Don't worry, we can help... you do remember your name, right?";
$lang['amnesia_user_id_button']			= "Send me my User ID";
$lang['amnesia_user_id_dir']			= "Enter your email address below, and we'll email you back all User IDs associated with it:";
$lang['amnesia_user_id_header']			= "Forgot Your User ID?";
$lang['amnesia_userid_sent']			= "Excellent!<br><br>Your User ID was sent to<br>the email address you provided.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "or less customer accounts"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "You must enter the name of your Organization."; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "You have to provide an email address.";
$lang['account_email_needed_2']			= "This is how we notify you of account and billing level changes.";
$lang['account_enter_first']			= "Please enter your first name.";
$lang['account_enter_last']				= "Please enter your last name.";
$lang['account_id_empty']				= "You must choose and enter an Account ID.";
$lang['account_id_exists']				= "This Account ID has already been taken.<br>Please select another one.";
$lang['account_id_not_valid']			= "An Account ID can only have letters, numbers, or underscores (_)";
$lang['account_terms_agree']			= "You must agree to the Terms and Conditions by checking the box above.";
$lang['account_new_create_button']		= "Create Account";
$lang['account_new_directions']			= "To get started, simply create an account by filling out the form below:";
$lang['account_new_end']				= "That's it!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "Tell us just a little about yourself";
$lang['account_new_owner_id']			= "Choose an Owner ID";
$lang['account_new_owner_restrict']		= "20 characters max, no spaces";
$lang['account_new_owner_user_id']		= "Choose a User ID";
$lang['account_new_password']			= "Select a password for your account.";
$lang['account_new_password_restrict']	= "5 to 20 characters, letters and numbers only";
$lang['account_new_phone_dir']			= "Start with '+' if outside the U.S.";
$lang['account_new_step1_greet']		= "Congratulations, you have created a new account.";
$lang['account_new_step1_dir']			= "We will now guide you through the following four steps:";
$lang['account_new_step1_1']			= "The creation of a loyalty campaign or gift card program.";
$lang['account_new_step1_2']			= "Customizing it to your needs.";
$lang['account_new_step1_3']			= "Entering a customer transaction.";
$lang['account_new_step1_4']			= "Returning to the account control panel.";
$lang['account_referred']				= "If you were referred, by whom?";
$lang['account_referred_dir']			= "Name, organization, or referral code.";
$lang['account_referrer_record']		= /* The referred business */ "signed up for a free account.";
$lang['account_terms_conditions_dir']	= "Please read and check the box to agree to the"; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "Terms and Conditions of Use";
$lang['account_terms_conditions_agree']	= "I agree with the Terms &amp; Conditions";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "Business Information";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= "Address:";
$lang['account_label_billing_level']	= "Billing Level:";
$lang['account_label_biz_name']			= "Business Name:";
$lang['account_label_biz_address1']		= "Address Line 1";
$lang['account_label_biz_address2']		= "Address Line 2";
$lang['account_label_custom_fee']		= "Custom Monthly Fee";
$lang['account_label_customers']		= "Customers";
$lang['account_label_customers_manage']	= "Manage Customer Records";
$lang['account_label_free']				= "Free"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "Account Owner";
$lang['account_label_owner_contact']	= "Owner Contact:";
$lang['account_label_pay_invoices']		= "View / Pay Invoices";
$lang['account_label_per_month']		= "/ month";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "Owner Login";
$lang['account_password_missing']		= "Password mismatch: Please type the new password in both boxes.";
$lang['account_passwords_mismatch']		= "The new password you entered does not match.<br>Please type it again in both boxes.";
$lang['account_owner_sec_token']		= "API access Security Token";

// Control Panel
$lang['cp_step_dir_header']				= "All done!";
$lang['cp_step_dir']					= "This is the \"Control Panel\" screen, where you start after loging-in.<br>From here you can manage all aspects of your account";
$lang['cp_campaigns_table_header_1']	= "Campaign Name";
$lang['cp_campaigns_table_header_2a']	= "Campaign";	// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']	= "Customers";	// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']	= "Campaign";		// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']	= "Transactions";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']	= "Campaign";	// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']	= "Status";		// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']	= "Campaign";		// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']	= "Preferences";	// This is the bottom line of the english phrase "Campaign Preferences"

// Create / Edit User
$lang['user_campaigns_header']			= "Select which campaigns this user is allowed access to:";
$lang['user_campaigns_admins']			= "Administrators automatically have access to all campaigns";
$lang['user_edit_header']					= "Edit User:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "Change the password";
$lang['user_edit_password2_label']		= "Please type the password again";
$lang['user_edit_password_note']			= "To keep the same password, leave these blank.";
$lang['user_edit_record_change_card']	= /* The Card # */ "has been replaced by:"; /* a new Card # */
$lang['user_edit_record_change_name']	= "Name change";
$lang['user_edit_record_del_card']		= /* The Card # */ "has been removed";
$lang['user_edit_record_new_card']		= "A new card # has been assigned:";
$lang['user_edit_record_change_phone']	= "Phone # change to";
$lang['user_edit_record_replace_phone']= "Phone # change from";
$lang['user_edit_record_to_none']		= "none"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']	= "Email change to";
$lang['user_edit_record_replace_email']= "Email change from";
$lang['user_edit_record_change_addtl']	= "Addt'l Info changed to";
$lang['user_edit_record_del_addtl']		= "Addt'l Info Removed. Previously";
$lang['user_edit_record_replace_addtl']= "Addt'l Info changed from";
$lang['user_info_sub_header']				= "User Information";
$lang['user_new_header']					= "New User";
$lang['user_new_id_empty']					= "A User ID is required to create a new user.";
$lang['user_new_id_not_valid']			= "A User ID can only have letters, numbers, or an underscore (_)";
$lang['user_new_id_exists']				= "The User ID you selected already exists.<br>Please select another one.";
$lang['user_new_no_role']					= "You must select a role for this user:";
$lang['user_new_password_label']			= "Choose a password for this user";
$lang['user_new_record_button']			= "Record New User";
$lang['user_new_user_id_label']			= "Choose a User ID to log-in with";
$lang['user_restrict_20_char']			= "20 characters max";
$lang['user_role_header']					= "User Role";
$lang['user_role_directions']				= "Please select a role for this user";

// Users: Common actions:
$lang['user_add_button']				= "Add a New User";
$lang['user_delete_popup']				= "<strong>This user will be removed from your Authorized Users list and archived.</strong><br>
											This User ID cannot be used again as the User ID of a new user.<br>
											<br>
											To retrieve an archived user, contact us. There is a fee for this service.<br>
											<br>
											<strong>Are you sure you want to remove this user?</strong>";
$lang['user_delete_popup_pc']			= "This user will be removed from your Authorized Users list and archived.\n\n
											This User ID cannot be used again as the User ID of a new user.\n\n
											To retrieve an archived user, contact us. There is a fee for this service.\n\n
											Are you sure you want to remove this user?";
$lang['user_header']					= "Manage Authorized Users and their permissions";
$lang['user_list_none']					= "No additional users added yet.";
$lang['user_role_A']					= "Administrator";
$lang['user_role_A_desc']				= "Has access to everything.";
$lang['user_role_C']					= "Accountant";
$lang['user_role_C_desc']				= "Can generate reports, view account billing info and campaign settings, but cannot view user and customer info.";
$lang['user_role_K']					= "Clerk";
$lang['user_role_K_desc']				= "Within allowed campaigns, can create & edit customers's info (but not change their card #,
											if assigned) and only record & redeem customer visits (but not delete any.)";
$lang['user_role_H']					= "Associate Clerk";
$lang['user_role_H_desc']				= "Same as Clerk, except they cannot change customer info once in system.";
$lang['user_role_M']					= "Manager";
$lang['user_role_M_desc']				= "Has access to everything within allowed campaigns and limited access to account-wide settings
											(Can't view billing info, can generate reports, and can add or edit but not delete account users.)";
$lang['user_role_N']					= "Campaign Manager";
$lang['user_role_N_desc']				= "Has access to everything within allowed campaigns and limited access to account-wide settings
											(Can generate reports, can't view billing info, can't manage users, can't create or delete campaigns.)";
$lang['user_role_O']					= "Observer";
$lang['user_role_O_desc']				= "Can view user & customer info and certain campaign settings (rewards and promotions.)";
$lang['user_role_P']					= "Temp";
$lang['user_role_P_desc']				= "Within allowed campaigns, can only create new customers, and only record customer visits.";
$lang['user_role_Q']					= "Temp II";
$lang['user_role_Q_desc']				= "Same as Temp, except they can see the customer transaction history.";
$lang['user_role_S']					= "Associate Manager";
$lang['user_role_S_desc']				= "Can manage rewards and promotions within allowed campaigns, and manage all aspects of customer information and visits.";

// Create New Campaign
$lang['campaign_new_create_button']		= "Create Campaign";
$lang['campaign_new_created_header']	= "New Campaign Created";
$lang['campaign_new_created_msg']		= "<b>Congratulations.</b><br>
											<br>
											You have successfully created a new campaign.<br>
											<br>
											Next, you should customize the settings for this campaign<br>
											based on your business needs:";
$lang['campaign_new_created_prefs']		= "Take Me There";
$lang['campaign_new_created_back_cp']	= "Return to the Account Control Panel";
$lang['campaign_new_empty']				= "You must enter a Campaign Name:";
$lang['campaign_new_exists']			= "The Campaign ID you entered already exists.<br>Please select a different Campaign ID";
$lang['campaign_new_header']			= "New Campaign";
$lang['campaign_new_name']				= "Now Choose a Campaign Name:";
$lang['campaign_new_name_restrict']		= "(30 characters maximum, including spaces)";
$lang['campaign_new_step_dir']			= "Create your first campaign:";
$lang['campaign_new_sub_header']		= "First, Select a Campaign Type:";
$lang['campaign_new_type_empty']		= "You must select a Campaign Type:";
$lang['campaign_new_buyx_desc']			= "Like the paper punch-card it replaces, only much more flexible, this campaign style allows you to reward your customers based on
											the number of times they purchase <b>any number of different</b> products, product lines, or services.<br>
											<br>
											Great for coffee houses and any store that offers a limited menu of items or types of items. (Like buy 10 regulars coffees
											and get the next free, buy 3 mugs and get the next one free, etc. Define as many of these Buy 'X' and Get One Free promotions as you want.)
											It's often encountered in the form of paper cards with a certain number of squares to be punched-out
											before receiving a free item or service. This type of campaign allows you to do the same, but now without
											the necessity of printing cards (and dealing with lost ones, etc.) Another immense benefit is that you
											know how many customers you have on the program and you can run marketing reports on them.</br>
											<br>
											<b>You can assign any number of items or item categories a specific number until the customer
											can receive a free one. For example:</b><br>
											<li>10 haircuts until the next one is free. </li>
											<li>16 lbs of feed until you get one on the house. </li>
											<li>8 Pastries until the next one is free. </li>
											<br>
											You can also assign a default <i>X until the next one is free</i> number to make it easier to set up a bunch
											of items that all redeem at the same level.";
$lang['campaign_new_earn_event_desc']	= "A hybrid between a Gift Card and an Event-Based campaign: Reward someone by giving them monetary credit
											(or actual cash) for each 'event' (store visit, referral, etc.), to be redeemed later for products or
											services at your establishment.<br>
											<br>
											<b>This type of loyalty programs lets you:</b><br>
											<li>Assign how many ".$lang['currency_plural']." are earned for each visit or action</li>
											<li>Redeem any amount from the accumulated balance, just like a gift card</li>
											<br>
											<b>Some examples</b>:
											<li>Referral campaigns: Reward customers, hotel concierges, receptionists at large firms, for sending
											customers to your business.</li>
											<li>Pay an employee or contractor for repetitive jobs.</li>
											<li>Reward VIP customers with in-house 'monopoly' money to spend on your business.</li>
											<li>Give kids help-around-the-house incentives.</li>";
$lang['campaign_new_event-based_desc']	= "Allows you to define rewards based on the number of interactions customers have with
											your business, rather than money spent.<br>
											<br>
											It is often used for customer referral campaigns: A business will give a few cards all stamped with
											the same number to one of its customers, a concierge at a hotel, or a receptionist at a large firm.
											When one of their referrals comes to your business and hands you one of those cards, your <i>evangelist</i>
											gets a 'visit' added to their balance. After, for example, 5 'visits' they receive a free
											service or widget. You get new customers. Everyone wins.<br>
											<br>
											That is just one scenario. People have found some pretty creative ways to use this program.<br>
											<br>
											An Events-Based program lets you:<br>
											<br>
											<b>Assign a number of reward levels. For example:</b><br>
											<li>accumulate 5 events and get 10% off</li>
											<li>accumulate 10 visits and get 50% off</li>
											<li>accumulate 20 referrals and get a massage</li>
											<br>
											<b>Some examples:</b><br>
											<li>Referral Campaigns as described above.</li>
											<li>Gyms keeping track of routines. </li>
											<li>Product repairs until it gets replaced. </li>
											<li>VIP Club usage. </li>
											<li>etc... </li>";
$lang['campaign_new_gift_card_desc']	= "A Gift Card campaign allows you to add money to a customer\'s account, and deduct it when used as payment.<br>
											<br>
											Simple and straightforward. It\'s usually used in conjunction with plastic gift cards, where a card is loaded with
											a certain cash value to be given out as a present or to be used as a pre-paid debit card.<br>
											<br>
											<b>Plastic cards are not needed</b>, and it can be used any time you simply need to keep track of multiple
											<i>stored value</i> accounts, such as bar tabs, installment purchase plans, kids' allowance... your imagination is the only limit.";
$lang['campaign_new_points_desc']		= "Your customers accumulate points based on their purchases, payments, or promotion you define.
											Points can be redeemed based on custom reward levels.<br>
											<br>
											A points program, like an airline miles programs, lets you:<br>
											<br>
											<b>Assign a certain amount of points per ".$lang['currency_plural']." spent. For example:</b><br>
											<li>5 points for each ".$lang['currency']."</li>
											<li>.25 points per ".$lang['currency']."</li>
											<br>
											<b>Define Reward Levels. Some examples:</b><br>
											<li>1000 points: 50% off a purchase</li>
											<li>5000 points: Free Widget</li>
											<li>100,000 points: Trip to Disneyland.</li>
											<br>
											<b>Define promotions. Some examples:</b><br>
											<li>Double-point Tuesdays</li>
											<li>Extra 500 points for pre-booking</li>
											<li>25% Bonus points with Gift Card purchase.</li>
											<br>
											Optionally, you can define a Spend-to-Reward Ratio that allows you to redeem points using a ".$lang['currency']." value.";
$lang['campaign_new_name_desc']			= "If you are creating your first campain, give it a name that starts with 'Test' while you try things out --
											You will be able to create as many campaigns as you want, and pause or delete any unwanted ones.<br>
											<br>
											In general, it's a good idea to use your organization's name, if short, or a play on words based on it. Some examples of names:<br>
											<li><b>ACME Rewards</b></li>
											<li><b>Club Red</b> (For a salon called 'Red')</li>
											<li><b>Roasters</b> (For a coffee shop that caters to bikers)</li>
											<li><b>Party Points</b> (For a caterer)</li>";

// Campaigns: Common actions:
$lang['campaign_add_new']				= "Add a New Campaign";
$lang['campaign_delete_popup']			= "<strong>This campaign will be removed from your Campaigns list and archived.</strong><br>
											This campaign name cannot be used again as the name of a new campaign.<br>
											<br>
											To retrieve an archived campaign, contact us. There is a fee for this service.<br>
											<br>
											<strong>Are you sure you want to remove this campaign?</strong>";
$lang['campaign_delete_popup_pc']		= "This campaign will be removed from your Campaigns list and archived.\n\n
											This campaign name cannot be used again as the name of a new campaign.\n\n
											To retrieve an archived campaign, contact us. There is a fee for this service.\n\n
											Are you sure you want to remove this campaign?";
$lang['campaign_hide_on_hold']			= "Hide On-Hold Campaigns";
$lang['campaign_none_yet']				= "To get started, create a campaign (Gift or Loyalty Program)<br>
											by clicking the Add a New Campaign button below.";

$lang['campaign_type_buyx']				= "Buy X Get 1 Free Program";
$lang['campaign_type_earn_per_event']	= "Earn Money per Event Program";
$lang['campaign_type_event-based']		= "Event-Based Program";
$lang['campaign_type_gift_cards']		= "Gift Card Program";
$lang['campaign_type_points']			= "Points Program";
$lang['campaign_view_on_hold']			= "View On-Hold Campaigns";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']				= "Add a Reward Level";
$lang['edit_reward_add_another']		= "Add Another Reward Level";
$lang['edit_reward_desc_empty']			= "You must provide a description of the reward level.";
$lang['edit_reward_level_header']		= "Edit Reward Level";
$lang['edit_reward_header']				= "Reward Levels";
$lang['edit_reward_none']				= "No Rewards Currently Defined";
$lang['edit_reward_table_header']		= "Reward Description";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "This ratio can be changed anytime, but customers' existing accumulated ".$lang['points']." will not change.";
$lang['edit_points_desc']				= "This is really an arbitrary number and can be anything that makes sense to you. For example:";
$lang['edit_points_desc_header']		= $lang['Points']." earned for every ".$lang['currency']." spent.";
$lang['edit_points_empty']				= "You must enter a number of ".$lang['points']." required to receive the reward.";
$lang['edit_points_examples_header']	= "Some examples of point-based rewards:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "20% Discount";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "Complimentary Basic Manicure";
$lang['edit_points_ex_3_amount']		= "750";
$lang['edit_points_ex_3_desc']			= "Extra night stay at no extra charge";
$lang['edit_points_ex_4_amount']		= "1000";
$lang['edit_points_ex_4_desc']			= "Free 20oz Shampoo";
$lang['edit_points_ex_5_amount']		= "20";
$lang['edit_points_ex_5_desc']			= "Free 10kg bag of cat food";
$lang['edit_points_ex_6_amount']		= "15,000";
$lang['edit_points_ex_6_desc']			= "VIP Club Level";
$lang['edit_points_ex_7_amount']		= "160";
$lang['edit_points_ex_7_desc']			= "Priority Seating";
$lang['edit_points_ex_8_amount']		= "100,000";
$lang['edit_points_ex_8_desc']			= "Complimentary trip to Disneyland";
$lang['edit_points_not_valid']			= "The amount of ".$lang['points']." must be a number.";
$lang['edit_points_profit_ratio_error']	= "You must enter a positive value higher than zero. Leave blank to disable.";
$lang['edit_points_step_dir']			= "Set the preferences for your ".$lang['Points']." campaign:";
$lang['edit_points_table_header']		= "Description of reward earned when<br>the amount of ".$lang['points']." specifed is attained.";
$lang['edit_points_too_small']			= "You must enter a value of at least 1 ".$lang['point'].".";

$lang['edit_promo_table_header']		= "Promotion Description";
$lang['edit_promo_none']				= "No Promotions Currently Defined";
$lang['edit_promo_add']					= "Add a Promotion";
$lang['edit_promo_add_another']			= "Add Another Promotion";
$lang['edit_promo_desc']				= "Promotions modify the way ".$lang['points']." are earned. You can have promotions add or subtract a specific amount of ".$lang['points'].", or multiply by a certain amount, when a transaction is recorded. See examples below:";
$lang['edit_promo_edit_header']			= "Edit Promotion";
$lang['edit_promo_edit_error_header']	= "You must enter a number to multiply the ".$lang['points']." earned by.<br>For example:";
$lang['edit_promo_edit_error_add']		= "You must enter a number of ".$lang['points']." to add to those earned. For example, \"500\" will add 500 points to the amount of ".$lang['points']." earned. \"-100\" will take away 100 ".$lang['points']." from those earned (down to 0, but no further.)";
$lang['edit_promo_edit_error_multi']	= "The amount to multiply the ".$lang['points']." by must be a number.";
$lang['edit_promo_edit_error_not_valid']= "The number of points to add must be a number.";
$lang['edit_promo_edit_ex_1']			= "2 will multiply the points earned by 2.";
$lang['edit_promo_edit_ex_2']			= ".5 will halve them.";
$lang['edit_promo_edit_ex_3']			= "1.1 will add 10% more points.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "Add 500 ".$lang['points']." for a referral";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']." bonus for becoming a member";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "deduct 50 ".$lang['points']." for being late";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "VIP level: Double the ".$lang['points']." earned";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "for 50% Extra ".$lang['points']." Tuesdays";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "Silver member: 25% Extra ".$lang['points'];
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "for 25% less ".$lang['points'];
$lang['edit_promo_name_empty']			= "You must provide a name for the promotion";
$lang['edit_promo_note_1']				= /*(Addtion Operation)*/ "Promotions will be able to be recorded by themselves: just select the promotion and click on "; /* ("record button") */
$lang['edit_promo_note_2']				= /*(Multiplication Operation)*/ "Promotions will not be able to be recorded by themselves: A purchase amount will be required.";
$lang['edit_promo_table_header_1']		= "Multiply or Add";
$lang['edit_promo_table_header_2']		= "By How Much";
$lang['edit_promo_table_header_3']		= "Promo ID";

$lang['edit_str_header']				= "Optional: Ability to Enter ".$lang['currency']." Amounts to Redeem Points";
$lang['edit_str_desc']					= "The Spend-to-Reward Ratio is one of two ratios that you had to use to figure out the ".$lang['points']." value of your rewards. If you enter it here, you will turn on the ability to redeem ".$lang['points']." by entering a ".$lang['currency']." value instead:";
$lang['edit_str_ratio_header']			= "Ability to enter ".$lang['currency']." amounts<br>to redeem points:";
$lang['edit_str_ratio_on']				= "Turned On";	// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']				= "Turned Off";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_ratio_sub_header']		= "Your Spend-to-Reward Ratio:";
$lang['edit_str_ratio_not_set']			= "Not Set";
$lang['edit_str_example_header']		= "For example:";
$lang['edit_str_example_1']				= "Your customer wants to buy something that is ".$lang['currency_symbol']."100 and she has 1000 ".$lang['points']." accumulated. She asks if she can pay for part of the item with her ".$lang['points'];
$lang['edit_str_example_1_desc']		= "So when you enter this Spend-to-Reward Ratio above, <b>the program can automatically figure out how much those ".$lang['points']." are worth</b>. There's no need for you or your cashiers to remember complicated rewards tables, or whip out a calculator.";
$lang['edit_str_example_math_show']		= "Click here to see the math.";
$lang['edit_str_example_math_hide']		= "Yikes! Hide that math!";
$lang['edit_str_example_math']			= "Let's say you specified a ".$lang['ppd']." Ratio
											of 5 and a Spend-to-Reward Ratio of 20. Then:<br>
											1000 ".$lang['points']." / 5 ".$lang['ppd']." / Spend-to-Reward Ratio of 20 = ".$lang['currency_symbol']."10<br>
											<br>
											Another way to look at this is that $10 x 5 ".$lang['ppd']." = 50 ".$lang['points'].", and with
											a Spend-to-Reward Ratio of 20, you need 20 x 50 ".$lang['points']." (1000 ".$lang['points'].") to be able to redeem ".$lang['currency_symbol']."10.";
$lang['edit_str_example_math_height']	= "90";	// This is the height, in pixels, of the section that the "math" is in.
												// If the translation of the section above requires more room, increase that number accordingly.
$lang['edit_str_note_1']				= "To turn off the ability to enter ".$lang['currency']." values to redeem ".$lang['points'].", remove the Spend-to-Reward Ratio (leave blank) and press"; /*(Set button)*/
$lang['edit_str_note_2']				= "You can change the Spend-to-Reward ratio anytime, but your reward levels will not change automatically.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "You must enter a number of events required to receive the reward.";
$lang['edit_visits_not_valid']			= "The number of events must be a number.";
$lang['edit_visits_step_dir']			= "Set some reward levels for your Events-Based campaign:";
$lang['edit_visits_table_header']		= "Number<br>of Events";
$lang['edit_visits_table_header_2']		= "Description of reward obtained when<br>the number of events specifed is attained.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "You must enter a value of at least 1".$lang['currency_100th_symbol']." (0.01)";
$lang['edit_dpv_heading']				= "Reward Setting";
$lang['edit_dpv_label']					= $lang['currency_plural']." earned per event:";
$lang['edit_dpv_label_ending']			= "per event.";
$lang['edit_dpv_note_1']				= "This number can be changed anytime, but customers' existing accumulated ".$lang['currency']." will not change.";
$lang['edit_dpv_step_dir']				= "Set your campaign's earning level:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "The number of services or products must be at least 1<br>10 is a recommended choice.";
$lang['edit_buyx_header']				= "Buy X Get One Free Promotions";
$lang['edit_buyx_item_empty']			= "You must enter a product or service name or description.";
$lang['edit_buyx_item_header']			= /* Add or Edit */ "a Product or Service";
$lang['edit_buyx_item_table_header_1']	= "Service, Product, or Category";
$lang['edit_buyx_item_table_header_2']	= "How Many Until<br>Next Is Free";
$lang['edit_buyx_none']					= "No Service or Product Defined.";
$lang['edit_buyx_step_dir']				= "Set your campaign's reward levels:";
$lang['edit_buyx_table_header_1']		= "Product, Service, or Category";
$lang['edit_buyx_table_header_2']		= "# Until<br>Next Is Free";
$lang['edit_buyx_add_another']			= "Add Another Service or Product";
$lang['edit_buyx_add']					= "Add a Service or Product";
$lang['edit_buyx_default_header']		= "Default number of services or products until the next one is free";
$lang['edit_buyx_default_label']		= "Default for new services / products:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "Set your campaign's preferences and reward levels:";
$lang['edit_giftcard_no_settings']		= "Gift Card campaigns do not have any preferences or reward levels to set.<br>(Well, that was easy!)";

// Common Customer Content
$lang['customer_account_activated']		= "Account Activated";
$lang['customer_add_tab']				= "Add a Customer";
$lang['customer_lookup_tab']			= "Lookup a Customer";
$lang['customer_id_not_exist']			= "Customer Account ID does not exist.";
$lang['customer_id_missing']			= "No customer Account ID was entered.";
$lang['customer_tip_1']					= "Did you know you can use a barcode scanner or mag-stripe reader to enter a customer's Card #?";
$lang['customer_tip_2']					= "Bookmark this page using the Bookmark Generator at the bottom of the"; /* Account Control Panel screen */
$lang['customer_last_activity']			= "Last Activity";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "Error: Unable to delete card.";
$lang['manage_cards_find_by_date']		= "Date of Last Activity";
$lang['manage_cards_find_by_header']	= "or show a list of ALL customers:";
$lang['manage_cards_find_directions']	= "Fill-in any of the fields below:";
$lang['manage_cards_find_header']		= "Find a customer:";
$lang['manage_cards_find_none']			= "No records match your query.";
$lang['manage_cards_find_note']			= "This could take a few minutes if you have more than a few thousand customers or a slow internet connection.";
$lang['manage_cards_header']			= "Manage Customer Records";
$lang['manage_cards_list_header']		= "Customer Account List";
$lang['manage_cards_not_exist']			= "This customer does not exist.";
$lang['manage_cards_cust_deleted']		= "This customer has been deleted.";
$lang['manage_cards_popup_warning']		= "This will delete the customer information and ALL TRANSACTION ACTIVITY<br>
											in all campaigns associated with this customer.<br><br>
											Also, <strong>reports will no longer reflect any past activity for this account</strong>.<br><br>
											This action CANNOT BE UNDONE!<br><br>
											Are you sure you want to delete this customer?";
$lang['manage_cards_popup_warning_pc']	= "This will delete the customer information and ALL TRANSACTION ACTIVITY\n
											in all campaigns associated with this customer.\n\n
											Also, reports will no longer reflect any past activity for this account.\n\n
											This action CANNOT BE UNDONE!\n\n
											Are you sure you want to delete this customer?";

// Create New Customer Account
$lang['customer_new_card_desc']			= "A unique Card # or <i>Customer Acccount ID</i> is necessary for them to be able to check<br>their balances on your site.";
$lang['customer_new_create_button']		= "Create Customer Account";
$lang['customer_new_demo_phone']		= "(555)555-5555";
$lang['customer_new_demo_email']		= "demo@email.com";
$lang['customer_new_demo_addtl_info']	= "Any extra information can be entered here.";
$lang['customer_new_id_exists']			= "The customer Account Id you entered already exists.";
$lang['customer_new_id_match']			= "The following account matches the"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "This is not a valid Customer Account ID.";
$lang['customer_new_exists']			= "The information entered matches an existing customer.";
$lang['customer_new_header']			= "Create a New Customer Account";
$lang['customer_new_multiple_matches']	= "These accounts match some of the information you provided:";
$lang['customer_new_other_campaigns']	= "Other campaigns to<br>add customer to:";
$lang['customer_new_random_id']			= "Generate Random Number";
$lang['customer_new_steps_header']		= "Create a sample customer account:";
$lang['customer_new_steps_dir']			= "A customer account can be defined by a unique identifier, such as a phone number, email address,
											bar code, or anything else that is unique to that customer. Feel free to use a test account
											like '11111' for now; You'll be able to delete this account later.";
$lang['customer_new_not_allowed']		= "You are not allowed to create new customer records.";

// Lookup Customer Account
$lang['customer_activity_header']		= "Account Activity";
$lang['customer_activity_none']			= "This account has no activity.";
$lang['customer_activity_print_short']	= "Last Transaction"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "Current Balance:";
$lang['customer_lookup_balances_none']	= "No Balances";
$lang['customer_lookup_button']			= "Find Customer";
$lang['customer_lookup_header']			= "Find a Customer's Account";
$lang['customer_lookup_instructions']	= "Enter any part of a customer's information:";
$lang['customer_lookup_multiple_match']	= "The following records match your search";
$lang['customer_lookup_multiple_view']	= "View Account Details";
$lang['customer_lookup_no_match_add']	= "No matching records found. You can create a new account below";
$lang['customer_lookup_no_match']		= "No customers in this campaign match your query.";
$lang['customer_lookup_not_allowed']	= "You are not allowed to view individual customer records.";
$lang['customer_lookup_steps_header']	= "Add and redeem some transactions.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "Add Customer to other Campaigns:";
$lang['customer_edit_campaigns_note']	= "Adding a customer to another campaigns allows you to search for them using partial searches on any
											of their account information. Otherwise, you can search by their Card # / Account ID only, or use
											the pull-down menu on the top-right to move from campaign to campaign within a customer's record.";
$lang['customer_edit_header']			= "Edit Account Information";
$lang['customer_edit_random_number']	= "Generate Random Number";
$lang['customer_edit_sub_header']		= "All fields are optional.";
$lang['customer_edit_activity_header']	= "Customer Account Information Activity";

// Record Customer Transactions
$lang['transaction_add_button']			= "Add to Account";
$lang['transaction_amount_not_valid']	= "TRANSACTION ERROR:<br>The ".$lang['currency']." amount entered is not valid";
$lang['transaction_amount_too_samll']	= "TRANSACTION ERROR:<br>The ".$lang['currency']." amount entered must be at least 0.01";
$lang['transaction_new_gc_header']		= "Add to Account";
$lang['transaction_new_header']			= "New Activity";
$lang['transaction_no_amount']			= "TRANSACTION ERROR:<br>You must either enter a ".$lang['currency']." amount<br>or select a promotion.";
$lang['transaction_promo_not_valid']	= "TRANSACTION ERROR:<br>You must enter a purchase amount<br>to use this promotion.";
$lang['transaction_promos_label']		= "Select a Promotion:";
$lang['transaction_purchase_label']		= "Enter Purchases Total:";
$lang['send_email']						= "Send Email?";
$lang['transactions_buyx_none']			= "No Services or Products Defined.";
$lang['transactions_buyx_none_dir']		= "Return to the control panel and edit the settings.";
$lang['transactions_visit_credited']	= "1 Event Credited";
$lang['transactions_visit_redeemed']	= "Events Redeemed";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "Error removing transaction. Please try again.";
$lang['transaction_delete_popup']		= "<strong>This will delete the transaction permanently.</strong><br><br>
											This action CANNOT BE UNDONE!<br><br>
											Are you sure you want to delete the transaction?";
$lang['transaction_delete_popup_pc']	= "This will delete the transaction permanently.\n\n
											This action CANNOT BE UNDONE!\n\n
											Are you sure you want to delete the transaction?";

// Redeem Rewards
$lang['redeem_buyx_header']				= "Rewards Table";
$lang['redeem_buyx_sub_header']			= "Customer has accumulated enough activity for:";
$lang['redeem_header']					= "Rewards Available";
$lang['redeem_header_alt']				= "Deduct from Account";
$lang['redeem_points_partial_header']	= "Deduct "; /* points or dollars */
$lang['redeem_points_partial_none']		= "Once this account has a balance."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "Or select a reward to redeem";
$lang['redeem_reward_description']		= "Description of Reward";
$lang['redeem_reward_balance_none']		= "The current balance on this account is not<br>enough to claim a pre-defined reward.";
$lang['redeem_reward_balance_zero']		= "The current balance on this account<br>is not enough to deduct anything from it.";
$lang['redeem_reward_balances_none']	= "The current balances on this account<br>are not enough to claim a reward.";

// Reports
$lang['report_audit_title']				= "Transaction Audit Report";
$lang['report_audits_all_trans']		= "All Transactions";
$lang['report_audits_header']			= "Audits";
$lang['report_audits_redeemed_only']	= "Redeemed Only";
$lang['report_audits_totals']			= "Totals";
$lang['report_campaigns_included']		= "Campaigns Included:";
$lang['report_col_1_header']			= "Select a Report";
$lang['report_col_2_header']			= "Select a Date Range";
$lang['report_col_3_header']			= "Select Campaign(s)";
$lang['report_date_not_valid']			= "Invalid date<br>(Might be a leap year)";
$lang['report_date_mismatch']			= "Error: Start date cannot<br>be later than end date.";
$lang['report_frequent_header']			= "Frequent Customers Report";
$lang['report_frequent_min_trans']		= "Minimum Number of Transactions";
$lang['report_none']					= "No Customers Match Criteria";
$lang['report_marketing_header']		= "Marketing";
$lang['report_marketing_new_cust']		= "New Customers";
$lang['report_marketing_freq_cust']		= "Frequent Customers";
$lang['report_marketing_freq_or_more']	= /* A given number of */ "transactions or more.";
$lang['report_marketing_include']		= "Include Redeem Transactions.";
$lang['report_marketing_miss_dir_1']	= "Customers who had a transaction in the date range above,";
$lang['report_marketing_miss_dir_2']	= "and haven't been back in this many days:";
$lang['report_missing_header']			= "Customers Who Haven't Returned in"; /* a number of days.*/
$lang['report_new_customers_header']	= "New Customers Report";
$lang['report_new_customers_none']		= "No New Customers Match Criteria";
$lang['report_new_customers_range']		= "New Customers Between"; /* one date and another date */
$lang['report_no_transactions']			= "No Transactions Found";
$lang['report_redeem_one_letter_code']	= "R";
$lang['report_run_report_button']		= "Run Report";
$lang['report_totals_header']			= "Totals Audit Report";

// Report Months
$lang['Jan']							= "Jan";
$lang['Feb']							= "Feb";
$lang['Mar']							= "Mar";
$lang['Apr']							= "Apr";
$lang['May']							= "May";
$lang['Jun']							= "Jun";
$lang['Jul']							= "Jul";
$lang['Aug']							= "Aug";
$lang['Sep']							= "Sep";
$lang['Oct']							= "Oct";
$lang['Nov']							= "Nov";
$lang['Dec']							= "Dec";

// Auto-Generated Emails
$lang['email_account_activity']			= "Account Activity Update";
$lang['email_activated_header']			= "Campaign Activated";
$lang['email_activated_sub_header']		= "The following campaign has been activated:";
$lang['email_billing_header']			= "Billing Level Change";
$lang['email_billing_from_level']		= "Your account billing level has changed from";
$lang['email_deactivated_header']		= "Campaign Deactivated";
$lang['email_deactivated_sub_header']	= "The following campaign has been deactivated:";
$lang['email_greeting']					= "Hi"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "Keep this info in a safe place";
$lang['email_html_callout_url']			= "Login URL"; // As in "the internet address where a client can log into the acount management application of StickyStreet."
$lang['email_keep_email_footer_1']		= "Please keep this message for your records.";
$lang['email_keep_email_footer_2']		= "It contains important account information.";
$lang['email_new_account_header']		= "New Account";
$lang['email_new_account_sub_header']	= "A new account has been created.";
$lang['email_html_password_nochange']	= "No Change"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "Online Customer Registration";
$lang['email_online_register']			= "The following customer has registered online for an account:";
$lang['email_password_header']			= "Password Retrieval Requested";
$lang['email_password_dir1']			= "You have requested the password for the user"; /* shows the User ID */
$lang['email_password_dir2']			= "It is:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "Changes To Your Account";
$lang['email_update_sub_header']		= "Your account information has been updated.";
$lang['email_user_id_header']			= "User ID Retrieval Request";
$lang['email_user_id_sub_header_1']		= "You have requested the User ID associated with your email address:";
$lang['email_user_id_sub_header_2']		= "You have requested the User IDs associated with your email address:"; // Plural


// Bookmarks
$lang['bookmarks_header']				= "Make Auto-Login Bookmarks";
$lang['bookmarks_table_header_1']		= "Choose Page to Bookmark";
$lang['bookmarks_table_header_2']		= "Choose User to Auto-Login";
$lang['bookmarks_table_header_3']		= "Bookmark Link";
$lang['bookmarks_link_1']				= "Right-Click<br>on this link to<br>set bookmark.";
$lang['bookmarks_link_2']				= "Click to go to<br>the page and <br>bookmark it<br>from there.";
$lang['bookmarks_note']					= "Treat the links provided like the passwords into your acccount that they are.
											We recommend you do not send any by email or instant messenger, instead log-in in yourself from the computer where
											you want the bookmark to be and add it then to the browser's bookmark list.";

// Common Error Messages:
$lang['error_email_space']				= "Empty spaces are not allowed in email addresses.";
$lang['error_email_not_found']			= "This email address is not found.";
$lang['error_email_not_valid']			= "This email address is not valid.";
$lang['error_customer_id_empty']		= "You must enter a Customer Account ID.";
$lang['error_next_page']				= "There was a problem trying to get to the next page. Please Try again.";
$lang['error_password_empty']			= "You must choose and enter a password.";
$lang['error_password_length']			= "Your password must be between 5 and 20 characters long.";
$lang['error_password_not_valid']		= "A password can only have letters, numbers, or an underscore (_)";
$lang['error_password2_empty']			= "You must enter the password again to make sure<br>it was typed correctly the first time.";
$lang['error_passwords_no_match']		= "The passwords you entered do not match.<br>Please type them in again.";
$lang['error_phone_area_code']			= "Please enter a valid area code.";
$lang['error_phone_not_valid']			= "This is not a valid phone number.";
$lang['error_service_down']				= "Performing server upgrade.<br>Please stand by.<br><br>We apologize for the inconvenience.";
$lang['error_updating']						= "There was an error updating the information. Please try again.";
$lang['error_userid_error']				= "Error: The User ID you entered was not found.";
$lang['error_balance_lookup_activity']	= /* The account id entered */ "has no recorded activity.";
$lang['error_balance_lookup_no_cust']	= "No Customer Account.";
$lang['error_balance_lookup_no_acct']	= "No Account ID.";

// Alt Tags
$lang['alt_add_customer_button']		= "Click to ADD customer accounts to this campaign";
$lang['alt_account_edit_save']			= "Click to save the changes made to this form";
$lang['alt_campaign_delete']			= "Click to delete this campaign";
$lang['alt_campaign_edit']				= "Click to edit this campaign's settings";
$lang['alt_campaign_name']				= "Click on the campaign name to lookup existing customers or add new ones";
$lang['alt_campaign_new_create']		= "Click to create this campaign";
$lang['alt_campaign_place_on_hold']		= "This Campaign is active. Click to place it on hold";
$lang['alt_campaign_re-activate']		= "Click re-activate this campaign";
$lang['alt_cancel_changes']				= "Click to cancel any changes and return to the previous screen";
$lang['alt_goto_ss']					= "Click to open a window to go to this destination.";
$lang['alt_lookup_customer_button']		= "Click to LOOKUP customer accounts in this campaign";
$lang['alt_user_add']					= "Click to add a new user with a custom login name and permission level";
$lang['alt_user_delete']				= "Click to delete this user so they cannot login and access this account";
$lang['alt_user_edit']					= "Click to edit the properties of this user";

// =========================
// ADDITIONAL TRANSLATIONS 1
// =========================

// Single words and labels
$lang['Referrer']						= "Referrer"; 	// As in a person or entity that sends business your way.
$lang['Comma']							= "Comma";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Deducted']						= "Deducted";	// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Item']							= "Item";		// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Pipe']							= "Pipe";		// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "Purchased";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Tab']							= "Tab";		// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Required']						= "Required";	// As in necessary, compulsory. Ex: "The name field is required."
$lang['optional']						= "optional"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";

// Page Titles
$lang['title_managing_cards']			= "Managing Customer Records";
	$lang['importing_customers']		= "Importing Customers";
	$lang['customers_imported']			= "Customers Imported";
	$lang['importing_transactions']		= "Importing Transactions";
	$lang['transactions_imported']		= "Transactions Imported";

// Labels
$lang['label_currency']					= "Currency";				// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']			= "Currency Symbol";		// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_language_select']			= "Display Language";		// As in a prompt to the user to select a language for the application
$lang['label_localization']				= "Localization";			// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_timezone']					= "Timezone";

// New Account Screen
$lang['account_language_error']			= "There is an error with the language chosen.";
$lang['account_language_note']			= "Note: This is the account's general language preference.<br>
											An Account User's setting (in the Users section), or selecting<br>
											a different language at the login screen will override this preference.";
$lang['account_timezone_note']			= "Note: This is the account's general timezone preference.<br>
											An Account User can be set to another timezone (in the User section),<br>
											which will override this preference.";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']			= "Import Customers and Transactions";
$lang['manage_import_customers']		= "Import Customers";
$lang['manage_import_transactions']		= "Import Customer Transactions";
$lang['manage_import_no_none']			= "All the fields can't be set to 'none'. Please select at least one field to import.";
$lang['manage_import_duplicate_card']	= "DUPLICATE CARD:";
$lang['manage_import_duplicate_found']	= "Duplicate";
$lang['manage_import_duplicates_found']	= "Duplicates";
$lang['manage_import_successful']		= "Import Successful";
$lang['manage_import_new_customer']		= "new customer imported";
$lang['manage_import_new_customers']	= "new customers imported";
$lang['manage_import_updated_customer']	= "customer updated";
$lang['manage_import_updated_customers']= "customers updated";
$lang['manage_import_no_cust_data']		= "No customer data was given to import. Please copy and paste your customer data in the box below:";
$lang['manage_import_campgn_not_valid']	= "One of the campaigns selected is not valid.";
$lang['manage_import_select_1_campaign']= "You must select at least one campaign to add your customers to:";
$lang['manage_import_select_delimiter']	= "Please select one of the delimiters above.";
$lang['manage_import_new_trasns']		= /* a number */ "new transactions recorded";
$lang['manage_import_new_account']		= "new customer account created";
$lang['manage_import_new_accounts']		= "new customer accounts created";
$lang['manage_import_no_cust']			= "No customers imported or updated";
$lang['manage_import_no_trans']			= "No transactions were recorded";
$lang['manage_import_no_trans_data']	= "No transaction data was given to import. Please copy and paste your transactions data in the box below:";
$lang['manage_import_fields_missing']	= "Some required fields are missing.";
$lang['manage_import_cust_instr_head']	= "<b>To import a list of customers is quite simple:</b>";
$lang['manage_import_cust_instr_1']		= "Select the campaign(s) you want those customers to be added to.";
$lang['manage_import_cust_instr_2']		= "Specify how each column is separated, and in what order.";
$lang['manage_import_cust_instr_3']		= "Copy-paste your list in the large box, and check the box if you want matching records<br>
													(with the same account id / card #) to be overritten or ignored.";
$lang['manage_import_cust_instr_4']		= "Dates can be in any of the following formats <i>(Years must be in 4-digit format)</i>:<br>
																<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre>";
$lang['manage_import_campaigns_list']	= "Campaigns List";
$lang['manage_import_add_campaigns']	= "Add to Campaigns";
$lang['manage_import_field_order']		= "Field Order";
$lang['manage_import_field_delimiter']	= "Field Delimiter";
$lang['manage_import_excel_default']	= "(the default when copy-pasting from MS Excel)";
$lang['manage_import_customer_list']	= "Customer List";
$lang['manage_import_duplicates']		= "Duplicates?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "Overwrite"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "Paste the customer list in the box below";
$lang['manage_import_campaign_name']	= "Campaign ID";
$lang['manage_import_trans_date']		= "Transaction Date";
$lang['manage_import_trans_amount']		= "Transaction Amount";
$lang['manage_import_redeem_event']		= "Redeem Event (Y/N)";
$lang['manage_import_req_for_buyx']		= "Required (for 'Buy X Get One Free' campaigns ONLY)";
$lang['manage_import_item_purchased']	= "Item Purchased";
$lang['manage_import_description_auth']	= "Description / Auth.";
$lang['manage_import_trans_list']		= "Transaction List";
$lang['manage_import_paste_trans']		= "Paste the customers' transactions in the box below";

// Reports
$lang['report_all_customers']			= "All Customers";
$lang['report_all_customers_header']	= "All Customers Report";
$lang['report_all_customers_range']		= "All Customers Between"; /* one date and another date */
$lang['report_balances_header']			= "Customer Balances Report";
$lang['report_balances']				= "Customer Balances for";
$lang['report_date_range']				= "Customers had a transaction between:"; /* a range of dates.*/
$lang['report_search_header']			= "Customer Search Report";
$lang['report_search']					= "Search Customers For:";
$lang['report_search_range']			= "Between"; /* one date and another date */
$lang['report_search_not_valid']		= "You must enter something to search for.";

// Report Exporting
$lang['export_xls']						= "Export to Excel";
$lang['export_mailchimp']				= "Export to Mailchimp";
$lang['export_apex']						= "Export to SMS";

// Users: Common actions:
$lang['user_role_F']					= "Fulfilment Contractor";
$lang['user_role_F_desc']				= "Within allowed campaigns, can only redeem customer rewards.";

// Common Error Messages:
$lang['error_language_selector']		= "There is an error with the language chosen.";

$lang['side_support_ideas']				= "Campaign Ideas";
$lang['side_support_ideas_describe']	= "Ideas and How-Tos on creative ways to use our programs for your marketing, organizational, and behaviour-modification needs";

// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================

$lang['error_account_suspended']		= "This account has been suspended";

// Calculator
$lang['calculator_title']				= "The Points Program Calculator";
$lang['str_ratio']						= "Spend-to-Reward Ratio";  // (same as "edit_str_ratio_sub_header", but without "your")
$lang['check_section_desc']				= "Let's make sure you're not giving away<br>more than you're making:";
$lang['Print']							= "Print";
$lang['column_product_or_pervice']		= "Product or Service";
$lang['column_retail_price'] 			= "Retail price of the product / service";
$lang['column_points_earned'] 			= "Points earned for its purchase by customer";
$lang['column_points_needed'] 			= "Points customer needs to redeem it as a reward";
$lang['column_cost_to_provide'] 		= "Your cost to provide the product / service";
$lang['column_profit_made'] 			= "Profit made from sale of";
$lang['column_profit_made_part2']		= "products<br>or services";
$lang['column_cost_reward_perc']		= "Cost of reward<br>as % of profit.";
$lang['column_cost_reward_smaller']		= "(The smaller, the better)";
$lang['instructions']					= "Instructions";
$lang['calculator_instructions_1']		= "<strong>1) Your customers have to earn POINTS for every dollar they spend.
											How many points? This is an arbitrary number:</strong><br>
											<br>
											Of course, 1 point for 1 dollar is easy, but it also makes it much easier for your customers to figure out
											how much they have spent at your business when they look at the amount of points they will have accumulated.
											Really, there's no reason to alarm them that they love you very much and spend boatloads at your shop,
											so perhaps an odd number that makes it just a little more difficult to quickly calculate they are Shopaholics!
											We recommend at least 100 if you're going to be counting pennies, but again, it can simply be 3 or 5 or 20, if
											you don't mind some cents getting rounded off to the nearest full point value.<br>
											<br>
											<strong>Once you have picked number, enter that number in the <span class=\"orangeH\">Points per Dollar</span> box above.</strong><br>";
$lang['calculator_instructions_2']		= "<strong>2) Next, <i>the Spend to Reward Ratio</i>
											can be thought of as \"how many times should a customer buy a product or service until a reward of equal value is reached?\"</strong><br />
											<br>
											Typically this is a number between 8 and 25 or more, but again, this is something that's business specific.
											For example, you often see coffee shops offer a free cup of coffee after your 10th one. The higher the number, the more  conservative
											you are, money-wise, but also the harder for your customers to get to their reward.<br>
											<br>
											<strong>Enter a number in the <span class=\"orangeH\">Spend to Rewards Ratio</span> box,
											and then play around with some numbers.
											Try a few values until you are comfortable with the results.</strong>";
$lang['calculator_disclaimer']			= "<strong>Disclaimer</strong>: This
											calculator is provided solely as a reference tool, and we encourage
											our business owners to check with their financial adviser before launching
											any of our feel good, make money, it's so easy programs!";

// =========================
// ADDITIONAL TRANSLATIONS 3
// =========================

// Transaction Email Content Preferences:
$lang['transaction_email_content']		= "Transaction Email: Content";
$lang['transaction_email_desc']			= "If a customer has an email address on file when you record a transaction, you can select to have an email sent to them.";
$lang['transaction_email_instr']			= "To customize the email they receive from you for this campaign, fill-in or edit the boxes in the email template below:";
$lang['transaction_email_default']		= "Thanks for your patronage and for choosing us!";
$lang['transaction_email_incl_balance']	= "Include balance";
$lang['transaction_email_incl_rewards']	= "Include rewards available";
$lang['transaction_email_incl_coupon']	= "Include coupon or promotion";
$lang['error_general_permission']		= "Content not available.";

// =========================
// ADDITIONAL TRANSLATIONS 4
// =========================
$lang['customer_edit_address_change']	= "Address changed to";
$lang['customer_edit_address_delete']	= "Address Removed. Previously";
$lang['customer_edit_address_replace']	= "Address changed from";

// =========================
// ADDITIONAL TRANSLATIONS 5
// =========================
// Email Updates:
$lang['email_agency_update_header']			= "Changes To Account:";
$lang['email_agency_update_sub_header']	= "The following account information has been updated:";
// Import Updates:
$lang['Options']									= "Options";  // Plural. The ability to choose from different alternatives or non-required additional specifications.
$lang['manage_import_duplicates_update']	= "Update";
$lang['manage_import_duplicates_ignore']	= "Skip";
$lang['manage_import_convert_currency']	= "Convert transaction amount into what the campaign tracks?";
$lang['manage_import_trans_instrctns_2'] 	= 'If you are importing <b>CASH transactions</b> into a Point-based campaign,
																or importing a list of visits into a Earn-per-Event campaign, make sure to check the
																"'.$lang['manage_import_convert_currency'].'" checkbox. If you are importing custom point amounts or
																custom earned amounts, make sure to leave the box unchecked.';
// Import Undo
$lang['import_previous_title']				= 'Previous Imports';
$lang['Undo']										= 'Undo';
// BuyX Membership Functionality
$lang['Quantity']								= "Quantity to add";
// Mailchimp Integration:
$lang['select_a_list_to_export_to']		= "Select a List to Export to";
$lang['success']								= "Success";
$lang['export_complete']					= "Export Complete";
$lang['loading']								= "Loading...";
$lang['oops']									= "Oops!";
$lang['addresses_successfully_added']	= "E-mail addresses successfully added to this list";
$lang['all_addresses_exist']				= "All of these addresses already exist in this list!";
$lang['addresses_exist']					= "E-mail addresses that already exist in this list";
$lang['we_found']								= "We found";
$lang['errors']								= "errors";
$lang['addresses_with_errors']			= "E-mail addresses with errors";
$lang['Back']									= "Back";
$lang['CLOSE']									= "CLOSE";
$lang['Visit_MailChimp']					= "Visit MailChimp";
$lang['mailchimp_integration']			= "MailChimp Integration";
$lang['mailchimp_login_error'] 			= "MailChimp didn't recognize your username/password.  Heads up - for security reasons, after 10 consecutive login attempts, you'll have to wait 5 minutes before trying again. ";
$lang['mailchimp_no_account_info']		= "We did not find your MailChimp account info.  Enter it now to continue with the export!";
$lang['mailchimp_bad_account_info']		= "Your MailChimp login or password were not recognized by MailChimp.  Enter it now to continue with the export!";
$lang['bananas']								= "Bananas!";
$lang['no_username']							= "You didn't enter a username and/or password!";
$lang['Username']								= "Username";
$lang['Password']								= "Password";

// =========================
// ADDITIONAL TRANSLATIONS 6
// =========================
$lang['account_new_header_agency']				= "Tell us about your client:";
// Custom Date functionality
$lang['label_date']									= 'Birthday';
$lang['label_Year']									= 'Year';
$lang['label_Month']									= 'Month';
$lang['label_Day']									= 'Day';
$lang['customer_new_demo_date']					= '01/01/2010';
$lang['user_edit_record_change_custom_date']	= "Birthday change to";
$lang['user_edit_record_replace_custom_date']= "Birthday change from";
$lang['report_customer_birthday']				= "Customers who will celebrate a Birthday in the date range above";
$lang['report_customer_birthday_header']		= "Customers Birthday Report";
$lang['report_custom_date']						= "Customers whose Birth date is in the date range above";
$lang['report_custom_date_header']				= "Customers Birthday/date Report";
// API functionality
$lang['api_redeem_reward_exeeds']				= "The reward level selected exceeds the available balance";
$lang['api_redeem_amount_exeeds']				= "The amount entered exceeds the available balance";
$lang['api_redeem_amount_not_valid']			= "The amount entered is not valid";
$lang['api_redeem_amount_not_enough']			= "The amount entered needs to be at least 1";
$lang['api_redeem_currency_not_enough']		= "The amount entered must be at least 0.01";
$lang['api_redeem_nothing']						= "Nothing was requested to be redeemed";
// Campaign Name Change functionality
$lang['Campaign_Name'] 								= $lang['cp_campaigns_table_header_1'];
$lang['Campaign_ID']									= $lang['manage_import_campaign_name'];

// =========================
// ADDITIONAL TRANSLATIONS 7
// =========================
// Never implemented (Additional Manager-based roles)

// =========================
// ADDITIONAL TRANSLATIONS 8
// =========================
// Custom Modifications for PaP Solutions
$lang['user_edit_record_change_password']		= "Password changed";
$lang['label_customer_password']					= "Password";							// PT: "Senha"
$lang['label_cutoff_day']							= "Billing Cycle Day";				// PT: "Dia de corte"
$lang['label_nonpayment']							= "Card Status";						// PT: "Status de cliente"  // (C = cancelado, S = suspenso, A = ativo)
$lang['label_nonpayment_short']					= "Status";
$lang['manage_import_bonus_adj']					= "Bonus/Adjustment? (Y/N) "; 	// PT: "Bonus/Ajuste? (Y/N)" // (Y = sim, N = não)
$lang['Bonus_Adjustment']							= "Bonus/Adjustment?";				// PT: "Bonus/Ajuste?"
$lang['Bonus_Adjustment_abbreviated']			= "Adj";									// PT: "Aj."
$lang['cp_campaigns_table_head_depreciation']	= "Points Expiration"; 			// PT: "Duração da vida de pontos"
$lang['cp_campaigns_table_depreciation']		= "Points Longevity"; 				// PT: "Longevidade dos pontos"
$lang['cp_campaigns_export_depreciation']		= "Expiration Date";
$lang['days']											= "days";
$lang['months']										= "months";
$lang['years']											= "years";
$lang['depreciation_interval_too_small']		= "The amount entered needs to be at least 1";
$lang['customer_password_missing']				= "There is no recorded password for this customer";
$lang['report_papsolutions_monthly_summary']	= "Today's Monthly Summaries";
$lang['report_campaign_select_error']			= "Campaign selection failed";
$lang['report_daily_monthly_summary']			= "Monthly Summaries for";
$lang['label_previous_balance']					= "Previous Balance";
$lang['report_interval_new_activity']			= "New Activity";
$lang['report_interval_adjustments']			= "Adjustments";
$lang['report_interval_redemptions']			= "Redemptions";


// =========================
// ADDITIONAL TRANSLATIONS 9
// =========================
// Custom Modifications for Apex Integration
$lang['apex_integration']						= "SMS Integration";
$lang['apex_account_key']						= "SMS Account Key";
$lang['apex_dynamic_sender']					= "SMS Dynamic Sender";
$lang['Low']										= "Low";
$lang['High']										= "High";
$lang['Quality']									= "Quality";
$lang['credits_available']						= "Credits Available";
$lang['credits_for_msg']						= "Credits for Msg";
$lang['country_code']							= "Country Code (Required)";
$lang['message']									= "Message";
$lang['remaining']								= "remaining";
$lang['send_sms']									= "Send SMS";
$lang['apex_success']							= "SMS batch exported successfully!";
$lang['apex_transfer_error']					= "The SMS export failed. If problem persists, contact us";
$lang['apex_login_error']						= "FTP login failed. Contact us to verify FTP credentials";
$lang['apex_account_key_invalid']			= "Your account key is not valid.<br/> Please contact";
$lang['apex_not_subscribed']					= "You are not subscribed to SMS integration.<br/> Please contact";
$lang['apex_country_code_required']			= "A country code is required.";
$lang['apex_empty_message']					= "The message cannot be empty.";
$lang['apex_credentails_invalid']			= $lang['apex_account_key_invalid'];

// =========================
// ADDITIONAL TRANSLATIONS 10
// =========================
// New Field: Reward ID
$lang['edit_reward_id']							= "Optional: Reward ID";
// Previous integration:
$lang['user_edit_record_change_password']		= "Password changed";
$lang['label_customer_password']					= "Password";
// Trial Limit feature:
$lang['error_trial_overage']						= 'Cannot add more customers: Account in Trial mode.';
$lang['error_trial_overage_some']				= 'Account in Trial mode: Maximum of 10 customers. Transactions for extra customers not recorded.';
$lang['error_activate_missing']					= 'Activate parameter missing or incorrect.';

// =========================
// ADDITIONAL TRANSLATIONS 11
// =========================
// API - Users List
$lang['api_error_users_list_not_owner']		= "Only account owners can access this information";
$lang['api_error_no_users']						= "No other users are found.";
$lang['Campaign_Error']								= "Campaign not valid or deactivated.";

// =========================
// ADDITIONAL TRANSLATIONS 12
// =========================
$lang['api_error_no_customer_match']			= "No customer matches data provided.";
$lang['api_error_multiple_customer_match']	= "More than one customer matches data provided.";
$lang['api_error_PIN_empty']						= "No PIN exists in the record";
$lang['api_error_PIN_no_match']					= "PINs do not match";
$lang['api_error_password_missing']				= "No password provided";
$lang['api_error_PIN_missing']					= "No PIN provided";
$lang['api_error_username_exists']				= "The username is already in use.";
$lang['api_error_invalid_delimiter']			= "Invalid delimiter";
$lang['api_error_no_data']							= "No data was given";
$lang['manage_import_field_note']		= "<i>Each field is optional.</i><br>
												<br>
												Note: If you plan on importing customer<br>
												<b>transactions</b> later, a unique <i>Account ID</i><br>
												for each customer is REQUIRED so as to be<br>
												able to match transactions to customers<br>
												regardless of changeable <i>Card #</i>.<br>
												If you don't have a separate unique id<br>
												for each customer, enter the <i>Card #</i> for<br>
												both 'Account ID' and 'Card #'.";

$lang['label_PIN']					= "PIN"; // (PIN is a 4 or 5 digit "personal identification number")
$lang['label_PIN_new']				= "New PIN";
$lang['user_new_PIN_label']		= "Choose a PIN for this user";
$lang['user_new_PIN_note']			= "Optional: For terminals, mainly.";
$lang['user_edit_PIN_label']		= "Change the PIN";
$lang['user_edit_PIN_note']		= "To keep the same PIN, leave it blank.";
$lang['user_PIN_not_numeric']		= "A PIN must be 4 or 5 numbers only";


// =========================
// ADDITIONAL TRANSLATIONS 13
// =========================
$lang['edit_record_change_PIN']			= "PIN changed";
$lang['edit_record_change_username']	= "Username changed";
$lang['manage_undo_warning']				= "Are you sure you want to undo this import?.<br><br>This action CANNOT BE UNDONE!";
$lang['manage_undo_warning_pc']			= "Are you sure you want to undo this import?\n\nThis action CANNOT BE UNDONE!";


// =========================
// ADDITIONAL TRANSLATIONS 14
// =========================
$lang['user_my_info_header']						= "My User Info";
$lang['user_role_I']									= "Agency Client + Imports";
$lang['user_role_I_desc']							= "Manager, with ability to  edit campaign settings, users, run reports, and
																manage customers (delete, import), but not the ability to add campaigns or account users.";
$lang['user_role_G']									= "Agency Client";
$lang['user_role_G_desc']							= "Manager, with ability to  edit campaign settings, users, and run reports,
																but not the ability to add campaigns, account users, nor delete or import customers.";


// =========================
// ADDITIONAL TRANSLATIONS 15
// =========================

$lang['coalition_balance_label']					= "Current<br>Coalition Balance:";
$lang['coalition_redeem_header'] 				= "Available Store Rewards";
$lang['customer_activity_coalition_header'] 	= "Customer History (This Store Only)";
$lang['report_coalition_header']					= "Coalition Reports";
$lang['report_audits_totals_points']			= "Store Totals - Points";
$lang['report_audits_totals_giftcard']			= "Store Totals - Giftcards";
$lang['section_account_options_header']		= "Advanced Account Options";
$lang['section_account_options_sub']			= "If you would like to create an Advanced Account (non-closed program), please enter
																the Activation Code you requested in one of the fields below.  If you have questions
																or have not received your Advanced Account Activation Code, please contact us. ";
$lang['section_coalition_token']					= "Coalition Activation Code";
$lang['section_mall_token']						= "Two-Tier / Mall Activation Code";
$lang['section_coalition_note']					= "Provided for additional cost.";
$lang['section_mall_note']							= "Provided for additional cost.";
$lang['section_mall_campaign_id']				= "Master Campaign ID";
$lang['section_mall_percentage']					= "Campaign Contribution (%) ";
$lang['section_token_invalid']					= "The Activation Code is not valid";
$lang['section_mall_options_header']			= "Two-Tier Account Options";
$lang['percentage_not_valid']						= "The percentage is not valid.";


// =========================
// ADDITIONAL TRANSLATIONS 16
// =========================
$lang['api_error_permission_denied']			= "User does not have permission"; // An error message that shows up when a user makes an API call their permission level does not allow access to.
$lang['api_error_wrong_account']					= "User does not have permission to access the account affected"; // An error message that shows up when a user makes an API call that affects the wrong account.
$lang['api_error_missing_username']				= "Missing username"; // An error message that shows up when a username (Account User, not Customer) is required but is missing.
$lang['api_error_PIN_too_many_matches']		= "Too many users match that PIN";  // Shows when an account user is trying to be validated in a terminal-like setting bY entering only their PIN which ought to be unique, but there is more than one matching PIN.
$lang['api_error_PIN_duplicate']					= "This PIN is already in use"; // Shows when an user is created or updated and the PIN assigned to them is already in use bu another user in the account.
$lang['api_error_campaign_id']					= 'Error with campaign ID';
$lang['api_error_campaign_name']					= 'Error with campaign name';
$lang['api_error_campaign_type']					= 'Error with campaign type';
$lang['api_error_campaign_points_ratio']		= 'Error with campaign points-per-'.$lang['currency'].' ratio';
$lang['api_error_campaign_rewards_ratio']		= 'Error with campaign spend-to-reward ratio';
$lang['api_error_campaign_depreciation']		= 'Error with campaign depreciation settings';
$lang['api_error_campaign_dpv']					= 'Error with campaign earn-per-event amount';
$lang['api_error_campaign_promo']				= 'Error with campaign promotion parameters';
$lang['api_error_campaign_reward']				= 'Error with campaign reward parameters';
$lang['api_error_campaign_item']					= 'Error with BuyX campaign item parameters';



// =========================
// ADDITIONAL TRANSLATIONS 17
// =========================
// Mainly small changes regardin coalition and two-tier programs.
$lang['coalition_points_program']				= "Coalition Points Program";  // A label in reports that aggregate an account's points-based coalition campaigns into a single line.
$lang['coalition_giftcards_program']			= "Coalition Stored Value Program";  // A label in reports that aggregate an account's stored-value (giftcard) based coalition campaigns into a single line.
$lang['coalition_program']							= "Coalition Program";
$lang['twotier_program']							= "Two-Tier Program";
$lang['opt_out']										= "Opt out";

$lang['user_role_L']									= "Coalition Store Manager";
$lang['user_role_L_desc']							= "Same access as a Manager, but restricted to managing users only on the campaigns (store) they have access to.";
$lang['user_role_D']									= "Campaign Designer";
$lang['user_role_D_desc']							= "Unique role that allows only the ability to add, edit, suspend, and re-activate campaigns,
																and run reports, but nothing else.";

// =========================
// ADDITIONAL TRANSLATIONS 18
// =========================
$lang['account_label_fields_manage']			= "Manage Custom Fields";  // A button text that lets the user add/manage the fields of data collected for the account's customers.
$lang['error_action_undefined']					= "Action Undefined"; // Shows mainly as an API error message when the "action" parameter is not given or does not match one of the expected action words.
$lang['error_entry_not_in_list']					= "Non-allowed option submitted."; // Shows mainly as an API error message when a value is input that does not match one of the options in the list of options for that field.
$lang['error_entries_not_in_list']				= "Non-allowed options submitted."; // Shows mainly as an API error message when a series of values is input that do not exist in the list of options for that field.
$lang['error_not_numeric']							= "Not a valid number."; //
$lang['error_not_monetary']						= "Not a valid monetary amount."; //
$lang['error_not_date']								= "Not a valid date."; //
$lang['error_not_unique']							= "Not Unique"; //
$lang['manage_fields_top_header']				= "Select Data Fields to Manage";  // The page header where data fields are managed (customers, transations, etc.)
$lang['manage_fields_customers_top_header']	= "Manage Customer Data Fields";  // The page header where customers' data fields are managed (to add, show/hide, etc.)
$lang['manage_fields_transactions_top_header']	= "Manage Transaction Data Fields";  // The page header where customers' transaction data fields are managed
$lang['manage_fields_predefined_header']		= "Predefined Customer Fields";  // The section where the original set of customer fields are show, and where the user can choose to show or hide them.
$lang['manage_fields_custom_header']			= "Custom Fields";  // The section where new custom customer data fields are shown.
$lang['label_customer_fields']					= 'Customer Fields'; // A button for the user to select to manage the fields related to customer data.
$lang['label_transaction_fields']				= 'Transaction Fields'; // A button for the user to select to manage the fields related to a customer's transaction data.
$lang['label_Label']									= "Label";  // As in "the word that describes a category" -- ex: The label of this field is the word that describes what the field is for.
$lang['label_Type']									= "Type";  // As in "the kind of thing it is" -- ex: This field is of a text type. The type of this other field is a date.
$lang['label_Text']									= "Text";  		// One of the types of field mentioned above. In this case a field that includes any kind of character.
$lang['label_Date']									= "Date";  		// One of the types of field mentioned above. In this case a field that represents a calendar date and time, to the second.
$lang['label_List']									= "List";  		// One of the types of field mentioned above. In this case a field that allows the user to choose elements in a list.
$lang['label_Picklist']								= "Picklist";  // One of the types of field mentioned above. In this case a field that allows the user to pick ONE elements from a list.
$lang['label_Number']								= "Number";  	// One of the types of field mentioned above. In this case a field that is numerical in value only.
$lang['label_Money']									= "Money";  	// One of the types of field mentioned above. In this case a field that is numerical, with exactly two decimals.
$lang['label_Choices']								= "List Options";  // A description of a field type that allows the user to store alternatives to be chosen in a list.
$lang['label_Choices_sub']							= "Separate each option with a comma"; // Instructions to the user to separate each option for the list with a comma (,) character.
$lang['label_Unique']								= "Unique";  // Description of a field choice that asks the user if the values recorded in the field in question must be unique.
$lang['label_Select']								= "Select:";  // The word that appears as the initial selection (and thereby, as the instruction) in a pull-down menu.
$lang['custom_field_delete_popup']				= "This custom field will be deleted, along with ALL ITS CUSTOMER DATA.<br><br>
																This action CANNOT BE UNDONE!<br><br>
																Are you sure you want to delete this custom field?";
$lang['custom_field_delete_popup_pc']			= "This custom field will be deleted, along with ALL ITS CUSTOMER DATA.\n\n
																This action CANNOT BE UNDONE!\n\n
																Are you sure you want to delete this custom field?";
$lang['success_customer_fields']					= "Changes to the customer fields were successfully recorded.";
$lang['success_transaction_fields']				= "Changes to the transaction fields were successfully recorded.";
$lang['button_add_field']							= "Add a new custom field";

$lang['ID']												= "ID"; // Generic SHORT identifier for "Identification" (whether numeric or alpha-numeric)
$lang['generate_id_error']							= "Error generating ID. Please try again.";


// =========================
// ADDITIONAL TRANSLATIONS 19
// =========================
// Custom Modifications for BlackHawk
$lang['customer_not_registered'] 				= "Customer is not yet registered";


// =========================
// ADDITIONAL TRANSLATIONS 20
// =========================
$lang['label_Searchable']							= "&nbsp;Is&nbsp;ID&nbsp;";  // Description of a field choice that asks the user if the values stored in this field can be used to pull up customers in campaigns where a customer is not registered.
$lang['orig_amount']									= "Orig. Amount";
$lang['DB_Timestamp']								= "DB Timestamp";

$lang['depreciation_expired']						= "Expired";
$lang['depreciation_short']						= "Exp'd";  // The header of a NARROW column that shows the percentage of the points that has expired or depreciated.
$lang['preferences_depreciation_header']		= "Depreciation";
$lang['preferences_depreciation_none']			= "No Depreciation Defined.";
$lang['edit_depreciation_add']					= "Add a Depreciation";
$lang['edit_depreciation_add_another']			= "Add another Depreciation";
$lang['edit_depreciation_type_prompt']			= "Depreciation type:";
// Original: $lang['edit_depreciation_type_T']				= "Per transaction, based on the date of each transaction";
$lang['edit_depreciation_type_T']				= "For each amount earned, depreciation is applied regardless of subsequent activity";
// Original: $lang['edit_depreciation_type_L']				= "On the balance, based on the date of the last transaction";
$lang['edit_depreciation_type_L']				= "Any activity will reset the depreciation 'clock' to the current balance";
$lang['edit_depreciation_longevity']			= "Amounts will depreciate after:";
$lang['edit_depreciation_percentage']			= "by:";
$lang['depreciation_interval_too_small']		= "The amount entered needs to be at least 1";
$lang['depreciation_percentage_too_small']	= "The amount entered needs to be greater than 0";
$lang['api_error_depreciation_exists']			= 'A depreciation for the time interval given already exists.';
$lang['report_expiration']							= "Expiration Date";
$lang['report_depreciation']						= "Depreciation";
$lang['preferences_recurring_fee_header']		= "Recurring Fee";
$lang['edit_recurring_fee_interval']			= "Every";
$lang['edit_recurring_fee_amount']				= "deduct";
$lang['edit_recurring_fee_description']		= "for the following reason:";
$lang['edit_recurring_fee_add']					= "Add a Recurring Fee";
$lang['edit_recurring_fee_add_another']		= "Add another Recurring Fee";
$lang['preferences_recurring_fee_none']		= "No Recurring Fee Defined.";
$lang['recurring_fee_too_small']					= "The amount entered needs to be greater than 0";


// =========================
// ADDITIONAL TRANSLATIONS 21
// =========================
$lang['transactions_not_visible']				= "No visible transactions.";
$lang['section_account_copy']						= 'Copy Settings?';
$lang['section_account_copy_sub']				= 'Select another account to copy the settings from. If none, leave the selection blank.';
$lang['account_to_copy_from_label']				= 'Copy settings from:';
$lang['error_copy_from_missing_agency']		= 'The agency token is missing';
$lang['error_copy_from_wrong_account']			= 'The account does not belong to the agency';













// ==========================
// The following translations are here because they require other trnaslations,
// and thus need to be declared only AFTER all their components have been previously declared.
// ==========================
$lang['manage_import_trans_instrctns']	= "<b>To import a list of (pre-converted) transactions:</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">In the pull-downs below, specify how each column is separated, and in what order.</li>
												<li style=\"padding-bottom: 5px;\">Make sure that 'Redeemed' transactions have a '<b>Y</b>' in the 'Redeem Event' column and are entered as <b><i>POSITIVE values</i></b>.</li>
												<li style=\"padding-bottom: 5px;\">If you are importing transactions for a '<b>Buy X Get One Free</b>' campaign, make sure to have an '<b>Item Purchased</b>' column selected.</li>
												<li style=\"padding-bottom: 5px;\">If a date is not included, the transaction will be recorded with today's date.<br>
													Dates can be in any of the following formats <i>(Years must be in 4-digit format)</i>:<br>
													<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre></li>
												<li style=\"padding-bottom: 5px;\">".$lang['manage_import_trans_instrctns_2']."</li>
												<li style=\"padding-bottom: 0px;\">Copy-paste your list in the large box below.</li>
											</ol>";


// ==========================
// Outside / Optional Links
// ==========================
// Translate this section ONLY if the embeded links have been replicated in the new language:

// Legal Documents
$lang['terms_conditions_location']		= 'terms-conditions.html';

// Edit Preferences: Points Campaign
$lang['edit_points_note_1_graphic']		= '<a href="http://www.clienttoolbox.com/calculator.php" target="_blank"><img align="right" src="graphics/calculator.gif" width="72" height="80" border="0" vspace="5" hspace="3"></a><span style="color: #666;">';
$lang['calculator_link'] 				= '<a href="http://www.clienttoolbox.com/calculator.php" target="_blank">';
$lang['edit_points_note_1'] 			= "For some help with figuring out the points needed for an award, use our handy-dandy ".$lang['calculator_link']." points calculator</a>:";
$lang['blog_link_accounting'] 			= '<a href="http://support.stickystreet.com/forums/16257/entries/12598" target="_blank">';
$lang['edit_points_note_2'] 			= "For a discussion on Reward Levels and the accounting / math behind it, check-out ".$lang['blog_link_accounting']."this post</a> in the support forum.";
$lang['edit_str_desc_with_link']		= "The Spend-to-Reward Ratio is one of two ratios that you had to use to figure out the ".$lang['points']." value of your rewards (whether you used the ".$lang['calculator_link'].$lang['Points']." Calculator</a> or not.) If you enter it here, you will turn on the ability to redeem ".$lang['points']." by entering a ".$lang['currency']." value instead:";


// ======================================
// IGNORE THESE:  (DEPRECATED DEFINITONS)
// ======================================
// Refer-and-Earn
$lang['refer_balance_header']			= "Amount Earned So Far<br>From Referrals";
$lang['refer_balance_link']				= "View your Refer & Earn history";
$lang['refer_banner_header']			= "Put a StickyStreet Banner on your website:";
$lang['refer_banner_desc']				= "These banners are free to use anywhere on your website. Here are a few sizes and colors for you to choose from:";
$lang['refer_banner_more_link']			= "More Banners..."; // As in "Click here to see more banners."
$lang['refer_banner_more_header']		= "More Banners"; // As in "Below you will find more banners."
$lang['refer_banner_more_sub_title']	= "These banners are free to use anywhere on your website. Here are a few more sizes to choose from:";
$lang['refer_banner_more_instruct']		= "Simply drag and drop them on your desktop, or right-click to save where you want.";
$lang['refer_banner_more_title']		= "Put a StickyStreet Banner on your website";
$lang['refer_header']					= "Refer and Earn";
$lang['refer_link_header']				= "Your referral link:";
$lang['refer_link_desc']				= "Use this link to send users to the StickyStreet website. This unique link will track the number of users you refer to StickyStreet that create an account:";
$lang['refer_sub_header']				= "Refer StickyStreet and Earn $10.";

// ----------------------------------

?>
