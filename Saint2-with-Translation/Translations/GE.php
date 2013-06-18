<?php
/* =======================
   TRANSLATION NOTES
==========================
This is the American English language file

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
	"Le montant de ".$lang['currency']." entr&egrave; n'est pas valide."

What's that "&egrave;" in the example above? It's the  (accented letter).
Make sure to replace all accented letters (like , , , etc) with their HTML equivalent.
Use one of these online converters:
    http://konieczny.be/article/utf.php (Choose HTML Entities from pull-down)

or for more detail or to do it manually, see:
	http://tlt.its.psu.edu/suggestions/international/web/codehtml.html

If you need to use a double quote in the text, (usually if you want to incude HTML tags),
escape each double quote by placing a \ (forward slash) in front of it. Ex:
    ... = "<span style=\"color: red;\">Hello World!</span>"

Explanation of Terms:
 - Client				Generally refers to the business using StickyStreet's service
 - Customer				Generally refers to customers of a business using StickyStreet.

For any questions, send email to support@stickystreet.com

=========================== */


// Initialize global language variable. (ignore the following line:)
global $lang;

// Default currency values to be replaced with preferences?
$lang['currency']						= "დოლარი";
$lang['currency_plural']				= "დოლარები";
$lang['currency_symbol']				= "$";
$lang['currency_100th']					= "ცენტი";
$lang['currency_100th_plural']			= "ცენტები";
$lang['currency_100th_symbol']			= "&#162;";

// Single words and labels
// (Pay attention to capitalization)
$lang['col_1']							= "1";  		// Header for column 1 of reports and bookmarks sections
$lang['col_2']							= "2";  		// Header for column 2 of reports and bookmarks sections
$lang['col_3']							= "3";  		// Header for column 3 of reports and bookmarks sections
$lang['Account']						= "ანგარიში";  	// Noun: As in "a collection of transactions". Ex: "Click here to view this customer's account."
$lang['Activate']						= "გააქტიურება";  	// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "აქტივაცია";	// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "აქტიურობა";  	// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "დამატებული";  	// Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']				= "+";			// The mathematical symbol for addition
$lang['All']							= "ყველა";  		// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "თანხა";  	// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "და";  		// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']					= "ავტორიზაცია"; // Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "ხელმისაწვდომი";  // As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "ბალანსი"; 	// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['By']								= "მიხედვით"; 		// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "კამპანია";	// As in a marketing campaign, but in this case, really meaning a "program" as in "Loyalty Program",
														// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "კამპანიები";	// Plural
$lang['Country']						= "ქვეყანა";	// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "მომხმარებლები";	// As in people who purchase goods or services from the a business that uses the StickyStreet service.
$lang['Date']							= "თარიღი";		// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "დღეები";		// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "დემონსტრაცია";		// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']					= "აღწერა"; // Ex: "Provide a description of the transaction in this box:"
$lang['Employee']						= "მოსამსახურე";	// As in a person that works for a business or organization.
$lang['Earned']							= "გამომუშავებული";		// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "შეცდომა";		// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "მოვლენა";		// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a reward.
$lang['events']							= "მოვლენები";
$lang['Event']							= "მოვლენა";
$lang['Events']							= "მოვლენები";
$lang['from']							= " -გან";		// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "უფასო";		// As if "no need to pay" or "no charge". Ex: "StickyStreet is free when you have 10 or less customers.
$lang['Hello']							= "სალამი";		// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "ინფორმაცია";		// Short for "information".
$lang['Level']							= "დონე";		// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "პასუხისმგებლობა";	// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']			= "x";			// The mathematical symbol for multiplication
$lang['Need']							= "საჭიროება";		// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "არა";			// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "არცერთი";		// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "შენიშვნა";		// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "შენიშვნები";		// Plural of "Note", above
$lang['Online']							= "ხაზზე";		// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "მოქმედება";  // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['optional']						= "არასავალდებულო"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";
$lang['or']								= "ან";			// As in "either", between two alternatives. Ex: "this or that".
$lang['point']							= "ქულა";		// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['Paid']							= "გადახდილი";		// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['points']							= "ქულები";
$lang['Point']							= "ქულაt";
$lang['Points']							= "ქულები";
$lang['per']							= "ყოველ";		// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Ratio']							= "შეფარდება";		// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']					= "ჩაწერილია"; // As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "გადახდილი"; 	// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "დამოწმება"; 		// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Report']							= "მოხსენება"; 	// As in "Relatory", or "Presentation".
$lang['Role']							= "ფუნქცია";		// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Tip']							= "დარიგება";		// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "დან";			// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "მისაღებად"; 	// As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['Trans_ID']						= "გადარიცხვის დამადასტურებელი მოწმობა"; 	// Short for "Transaction ID" - Referring to an internal StickyStreet number to reference a particular transaction.
$lang['Transaction']					= "გადარიცხვა"; // A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']					= "გადარიცხვები"; // Plural
$lang['User']							= "მომხმარებელი"; 		// As in an employee of the business or organization that can login to use the StickyStreet service.

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."-".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "კამპანიის დამატება";
$lang['title_add_product_service']		= "პროდუქტის დამატება/მომსახურეობისათვის";
$lang['title_add_promotion']			= "წახალისების დამატება";
$lang['title_add_reward']				= "ჯილდოს დამატება";
$lang['title_add_user']					= "მომხმარებლის დამატება";
$lang['title_amnesia'] 					= "დაგავიწყდათ სარეგისტრაციო სახელი ან პაროლი";
$lang['title_award_reddeem'] 			= "გადახდილი ჯილდო";
$lang['title_create_new_account']		= "ახალი ანგარიშის შექმნა";
$lang['title_default']					= "საჩუქრის და ერთგულების მართვა";
$lang['title_edit_account']				= "ანგარიშის ინფორმაციის რედაქტირება";
$lang['title_edit_account_number']		= "ანგარიშის რედაქტირება#";
$lang['title_edit_campaign']			= "მონაცემების რედაქტირება";
$lang['title_edit_product_service']		= "პროდუქტის რედაქტირება/მომსახურეობისათვის";
$lang['title_edit_promotion']			= "დახმარების რედაქტირება";
$lang['title_edit_reward']				= "ჯილდოს რედაქტირება";
$lang['title_edit_user']				= "მომხმარებლის რედაქტირება";
$lang['title_find_add']					= "მძებნეთ ან დაუმატეთ ანგარიშს";
$lang['title_login'] 					= "ანგარიშის შესვლა";
$lang['title_managing_cards']			= "ბარათების მართვა";
$lang['title_more_r_and_e_banners'] 	= "მეტი გააგზავნეთ და მიიღეთ საჩუქრად ბანერები";
$lang['title_r_and_e_balance']			= "თქვენი გადახდები და მიღებული ჯილდოების ბალანსი";
$lang['title_report_all_trans']			= "ყველა გადარიცხვის შეტყობინება";
$lang['title_report_freq_cust']			= "მუდმივი მომხმარებლების შეტყობინება";
$lang['title_report_miss_cust']			= "დაკარგული მომხმარებლების შეტყობინება";
$lang['title_report_new_cust']			= "ახალი მომხმარებლების შეტყობინება";
$lang['title_report_redeem_trans']		= "შესრულებული გადარიცხვების შეტყობინება";
$lang['title_report_totals']			= "შეჯამებული შეტყობინებები";
$lang['title_search_result']			= "ძიების შედეგი";
$lang['title_trans_del']				= "წაშლილი გადარიცხვა";
$lang['title_trans_rec'] 				= "ჩაწერილი გადარიცხვა";
$lang['title_view_account']				= "ანგარიშის ნახვა";

// Side Modules
$lang['side_blog_describe']				= "განცხადებებისათვის, დახმარებისა და სხვა იდეებისათვის ეწვიეთ ჩვენს"; // ... blog
$lang['side_loyalty_link_desc']			= "Bring them back to your site with Online Enrollment and Balance Lookup";
$lang['side_support_desk_describe']		= "ნახეთ შეკითხვები და პასუხები ჩვენი ცოდნის ბაზაში და წარმოადგინეთ თქვენი მოთხოვნები";
$lang['side_support_email_call']		= "უშუალოდ მოგვწერეთ ელექტრონულ ფოსტაზე თქვენი მოთხოვნები ან დაგვირეკეთ";
$lang['side_support_links']				= "<span style=\"color:#79B216;\">Support</span> Links";
$lang['side_support_phone']				= "<span style=\"font-weight: bold;\">866-780-STICKY</span> <span style=\"color: #888; font-size: 80%;\">(7842)</span>";
$lang['side_points_calc_desc']			= "საშუალება რომელიც დაგეხმარებათ თქვენი სასაჩუქრე დონის დადგენაში";

// Destinations / Section names
$lang['section_account_control_panel']	= "ანგარიშის პანელის მართვა";
$lang['section_account_info_header']	= "ინფორმაცია ანგარიშის შესახებ";
$lang['section_account_login']			= "ანგარიშის შესვლა";
$lang['section_account_new']			= "ანგარიშის შექმნა";
$lang['section_blog']					= "Blog";
$lang['section_campaign_reports']		= "კამპანიის შეტყობინებები";
$lang['section_customer_account']		= "მომხმარებლის ანგარიში";
$lang['section_loyalty_link_inst']		= "ერთგულების ბმულის ინსტრუქციები";
$lang['section_points_calculator']		= "ქულების გამომთვლელი";
$lang['section_points_promotions']		= "წახალისება";
$lang['section_support_desk']			= "მხარდაჭერის დაფა";

// Labels
$lang['label_account_id']				= "ანგარიშის იდენტიფიკაცია";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']			= "ანგარიშის მეპატრონე";			// The person who created a StickyStreet account.
$lang['label_additional_info']			= "დამატებითი ინფორმაცია";			// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info_user']		= "დამატებითი ინფორმაცია";
$lang['label_card']						= "ბარათი №";					// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']						= "ქალაქი";
$lang['label_date_range']				= "თარიღის წყობა";				// Ex: January 2008 to December 2008
$lang['label_email']					= "ელექტრონული ფოსტის მისამართი";
$lang['label_first_name']				= "სახელი";				// As in "given name". ie: not the one shared by their family.
$lang['label_last_name']				= "გვარი";				// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_name']						= "სახელი";					// The joining of first and last names.
$lang['label_organization']				= "ორგანიაცია";			// As in a business, church, school, club, etc.
$lang['label_owner_id']					= "მფლობელის იდენტიფიკაცია";				// A unique login name that identifies the user as the account owner.
$lang['label_password']					= "პაროლი";
$lang['label_password_new']				= "ახალი პაროლი";
$lang['label_password_retype_short']	= "ხელახლა შეიყვანეთ პაროლი";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "ხელახლა შეიყვანეთ ახალი პაროლი";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']					= "ტელეფონის ნომერი";
$lang['label_state']					= "შტატი/პროვინცია";
$lang['label_user_id']					= "მომხმარებლის იდენტიფიკაცია";				// A unique login name that allows an employee of a StickyStreet client to access the program.
$lang['label_zip']						= "საფოსტო ინდექსი";

// Navigation
$lang['nav_active']						= "მოქმედი";			// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "დამატება";			// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "გაუქმება";			// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']					= "შეცვლა";		// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']					= "ანულირება";  	// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "გამოკლება";  		// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "წაშლა";			// Verb: As in "remove" or "rease". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']				= "ყველა მონიშნულის გაუქმება";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "დასრულებული";			// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "რედაქტირება";			// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "მოძებნა";			// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "დასასრული";			// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "სვლა";				// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "დაფარვა";			// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']					= "გადასვლა"; 		// As in changing screens, pages, or location.
$lang['nav_log_in']						= "შესვლა";			// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "გამოსვლა";			// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "ცნობარში მონახვა";			// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "შემდეგი";			// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']					= "მოლოდინში";		// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "ამობეჭდვა";			// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']				= "რეზუმეს ამობეჭდვა";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']				= "ხელახალი აქტივაცია";	// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "ჩაწერა";			// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "გადახდა";			// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "ამოშლა";			// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "დაბრუნება";			// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "ჩვენება";			// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']				= "ცვლილებების შენახვა";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']					= "ყველას მონიშვნა";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "დადება";			// Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "ნაბიჯი 1";			// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "ნაბიჯი 2";
$lang['step3']							= "ნაბიჯი 3";
$lang['step4']							= "ნაბიჯი 4";

// Login Screen
$lang['login_amnesia_prompt']			= "დაგავიწყდათ თქვენი სამომხმარებლო სახელი ან პაროლი?";
$lang['login_amnesia_button']			= "დაიბრუნეთ ის ახლა!";
$lang['login_email_missing']			= "გთხოვთ შეიყვანეთ თქვენი ანგარიშის ელექტრონული ფოსტის მისამართი";
$lang['login_fancy_1']					= "ანგარიში";
$lang['login_fancy_2']					= "შესვლა";
$lang['login_new_account_prompt']		= "არ გაქვთ ანგარიში?";
$lang['login_new_account_button']		= "შეავსეთ განაცხადი ახლა!";
$lang['login_password_missing']			= "გთხოვთ შეიყვანეთ თქვენი პაროლი";
$lang['login_userid_missing']			= "გთხოვთ შეიყვანეთ თქვენი სამომხმარებლო სახელი";
$lang['login_wrong_password']			= "შეყვანილი პაროლი არ შეესაბამება თქვენს მიერ მანამდე შეყვანილ მონაცემებს";
$lang['login_wrong_user_id']			= "თქვენს მიერ შეყვანილი სამომხმარებლო სახელი ვერ მოიძებნა";

// Forgot Password / Username section;
$lang['amnesia_header']					= "ცოტაოდენი ამნეზია შეგემთხვათ?";
$lang['amnesia_note_top']				= "შენიშვნა სპამის ფილტრების შესახებ:";
$lang['amnesia_note_text']				= "თუ რამოდენიმე წუთის მანძილზე ჩვენგან ვერ მიიღეთ წერილი გთხოვთ აუცილებლად შეამოწმეთ თქვენი სპამის ფილტრი".
											//The email will be coming from <b>StickyStreet.com</b>";
$lang['amnesia_password_button']		= "გამომიგზავნეთ ჩემი პაროლი";
$lang['amnesia_password_dir']			= "შეიყვანეთ დაბლა თქვენი სამომხმარებლო სახელი და ჩვენ გამოგიგზავნით პაროლს თქვენს მიერ მითითებულ ელექტრონულ ფოსტაზე";
$lang['amnesia_password_header']		= "დაგავიწყდათ პაროლი?";
$lang['amnesia_password_sent']			= "Excellent!<br><br>Your password was sent to<br>the email address we have<br>for this account.";
$lang['amnesia_return_button']			= "დაბრუნება შესვლელ გვერდზე";
$lang['amnesia_sub_header']				= "არ აღელდეთ, ჩვენ დაგეხმარებით... ხომ გახსოვთ თქვენი სახელი, ასეა?";
$lang['amnesia_user_id_button']			= "გამომიგზავნეთ ჩემი სამომხმარებლო სახელი";
$lang['amnesia_user_id_dir']			= "შეიყვანეთ დაბლა თქვენი ელექტრონული ფოსტის მისამართი და ჩვენ გამოგიგზავნით თქვენს სამომხმარებლო სახელს და მთლიან მონაცემებს:";
$lang['amnesia_user_id_header']			= "დაგავიწყდათ თქვენი სამომხმარებლო სახელი?";
$lang['amnesia_userid_sent']			= "Excellent!<br><br>Your User ID was sent to<br>the email address you provided.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "ან ნაკლები მომხმარებლების ანგარიში"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "თქვენ უნდა შეიყვანოთ თქვენი ორგანიზაციის სახელი"; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "თქვენ უნდა უზრუნველყოთ ელექტრონული ფოსტის მისამართი";
$lang['account_email_needed_2']			= "სწორედ ასე შეგატყობინებთ ანგარიშის და ხარჯების ცვლილებების შესახებ";
$lang['account_enter_first']			= "გთხოვთ შეიყვანეთ თქვენი სახელი";
$lang['account_enter_last']				= "გთხოვთ შეიყვანეთ თქვენი გვარი";
$lang['account_id_empty']				= "თქვენ უნდა აირჩიოთ და შეიყვანოთ ანგარიშის სამომხმარებლო სახელი";
$lang['account_id_exists']				= "ეს სამომხმარებლო სახელი უკვე დაკავებულია.<br>გთხოვთ აირჩიეთ სხვა";
$lang['account_id_not_valid']			= "სამომხმარებლო სახელი უნდა შედგებოდეს მხოლოდ ასოებისგან, ნომრებისგან, ან აღსაღნიში ხაზისგან (_)";
$lang['account_terms_agree']			= "თქვენ უნდა დათანხმდეთ ვადებს და პირობებს ზემოთ მდებარე ყუთის შემოწმებისას.";
$lang['account_new_create_button']		= "ანგარიშის შექმნა";
$lang['account_new_directions']			= "იმისათვის, რომ დაიწყოთ, უბრალოდ შექმენით ანგარიში ქვემოთ წარმოდგენილი აპლიკაციის საშუალებით:";
$lang['account_new_end']				= "სულ ესაა!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "გვიამბეთ ცოტა თქვენს შესახებ";
$lang['account_new_owner_id']			= "აირჩიეთ მფლობელის სამომხმარებლო სახელი";
$lang['account_new_owner_restrict']		= "მაქსიმუმ 20 ასო, არავითარი სივრცე";
$lang['account_new_owner_user_id']		= "აირჩიეთ სამომხმარებლო სახელი";
$lang['account_new_password']			= "აირჩიეთ პაროლი თქვენი ანგარიშისათვის";
$lang['account_new_password_restrict']	= "5–დან 20 ასომდე, მხოლოდ ასოები და ნომრები";
$lang['account_new_phone_dir']			= "ჩაწერეთ + აშშ–ს ფარგლებს გარეთ";
$lang['account_new_step1_greet']		= "გილოცავთ, თქვენ ახალი ანგარიში შექმენით";
$lang['account_new_step1_dir']			= "ჩვენ გაგიძღვებით თქვენ შემდგომი ოთხი ეტაპის დასრულებამდე";
$lang['account_new_step1_1']			= "ერთგულების კამპანიის და სასაჩუქრე ბარათის პროგრამის შექმნა";
$lang['account_new_step1_2']			= "შეუსაბამეთ ის თქვენს მოთხოვნებს";
$lang['account_new_step1_3']			= "მომხმარებლის გადარიცხვების შეყვანა";
$lang['account_new_step1_4']			= "ანგარიშის საკონტროლო პანელის გვერდზე დაბრუნება";
$lang['account_referred']				= "თუ იყავით ინფორმირებული, ვის მიერ?";
$lang['account_referred_dir']			= "სახელი, ორგანიაცია, ან მიმართულების კოდი";
$lang['account_referrer_record']		= /* The referred business */"ხელმოწერილია უფასო ანგარიშზე";
$lang['account_terms_conditions_dir']	= "გთხოვთ  წაკითხეთ და იხილეთ ყუთი, იმისათვის, რომ დაეთანხმოთ"; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "სარგებლობის ვადები და პირობები";
$lang['account_terms_conditions_agree']	= "ვეთანხმები ვადებს და პირობებს";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "ინფორმაცია საქმიანობის შესახებ";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= " მისამართი";
$lang['account_label_billing_level']	= "გადასახადის გამოწერის დონე:";
$lang['account_label_biz_name']			= "საქმიანობის სახელი:";
$lang['account_label_biz_address1']		= "საქმიანობის მისამართი ხაზი 1";
$lang['account_label_biz_address2']		= "საქმიანობის მისამართი ხაზი 2";
$lang['account_label_custom_fee']		= "თვიური საბაჟო გადასახადი";
$lang['account_label_customers']		= "მომხმარებლების ანგარიში";
$lang['account_label_customers_manage']	= "რამოდენიმეს წაშლა";
$lang['account_label_free']				= "უფასო"; //As in "gratis" or "no payment required".
$lang['account_label_owner']			= "ანგარიშის მფლობელი";
$lang['account_label_owner_contact']	= "მფლობელთან დაკავშირება:";
$lang['account_label_pay_invoices']		= "ნახვა/ინვოისის გადახდა";
$lang['account_label_per_month']		= "/ თვე";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "მფლობელის შესვლა";
$lang['account_password_missing']		= "პაროლი არასწორია: გთხოვთ შეიყვანეთ ახალი პაროლი ორივე გრაფაში.";
$lang['account_passwords_mismatch']		= "თქვენს მიერ შეიყვანილი ახალი პაროლი არასწორია.<br>გთხოვთ ხელახლა შეიყვანეთ ორივე გრაფაში.";
$lang['account_owner_sec_token']		= "უსაფრთხოების ნიშანი";

// Control Panel
$lang['cp_step_dir_header']				= "მზადაა!";
$lang['cp_step_dir']					= "ეს არის \"სამართავი პანელის\" ეკრანი, სადაც დაბრუნდებით სისტემაში შესვლის შემდეგ.<br> სადაც შეგეძლებათ თქვენი ანგარიშის მთლიანად მართვა";
$lang['cp_campaigns_table_header_1']	= "კამპანიის სახელი";
$lang['cp_campaigns_table_header_2a']	= "კამპანია";	// This is the top line of the english phrase "კამპანიის მომხმარებლები"
$lang['cp_campaigns_table_header_2b']	= "მომხმარებლები";	// This is the bottom line of the english phrase "კამპანიის მომხმარებლები"
$lang['cp_campaigns_table_header_3a']	= "კამპანია";		// This is the top line of the english phrase "კამპანიის გადარიცხვები"
$lang['cp_campaigns_table_header_3b']	= "გადარიცხვები";	// This is the bottom line of the english phrase "კამპანიის გადარიცხვები"
$lang['cp_campaigns_table_header_5a']	= "კამპანია";	// This is the top line of the english phrase "კამპანიის სტატუსი"
$lang['cp_campaigns_table_header_5b']	= "სტატუსი";		// This is the bottom line of the english phrase "კამპანიის სტატუსი"
$lang['cp_campaigns_table_header_6a']	= "კამპანია";		// This is the top line of the english phrase "კამპანიის უპირატესობები"
$lang['cp_campaigns_table_header_6b']	= "უპირატესობები";	// This is the bottom line of the english phrase "კამპანიის უპირატესობები"

// Create / Edit User
$lang['user_campaigns_header']			= "აღნიშნეთ რომელ კამპანიაში შეუძლია ამ მომხმარებელს შევიდეს:";
$lang['user_campaigns_admins']			= "ადმინისტრატორებს ავტომატურად შეუძლია შევიდეს ყველა კამპანიაში";
$lang['user_edit_header']				= "მომხმარებელის რედაქტირება:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "შეცვალეთ პაროლი";
$lang['user_edit_password2_label']		= "გთხოვთ ხელახლა შეიყვანეთ პაროლი";
$lang['user_edit_password_note']		= "იგივე პაროლის შესანარჩუნებლად, დატოვეთ ეს ბლანკი.";
$lang['user_edit_record_change_card']	= /* The Card # */ "has been replaced by:"; /* a new Card # */
$lang['user_edit_record_change_name']	= "დასახელების შეცვლა";
$lang['user_edit_record_del_card']		= /* The Card # */ "ამოღებულ იქნა";
$lang['user_edit_record_new_card']		= "ახალი ბარათის ნომერი დადგინდა:";
$lang['user_edit_record_change_phone']	= "ტელეფონი შეიცვლება";
$lang['user_edit_record_replace_phone']	= "Phone # change from";
$lang['user_edit_record_to_none']		= "არაფერი"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']	= "ელექტრონული ფოსტა გადააამისამართე";
$lang['user_edit_record_replace_email']	= "ელექტრონული ფოსტა გადმოამისამართე";
$lang['user_edit_record_change_addtl']	= "შეცვალე დამატებიტი ინფორმაცია";
$lang['user_edit_record_del_addtl']		= "დამატებიტი ინფორმაცია უკვე წაშლილია.";
$lang['user_edit_record_replace_addtl']	= "დამატებითი ინფორმაცია შეცვლილია";
$lang['user_info_sub_header']			= "ინფორმაცია მომხმარებელის შესახებ";
$lang['user_new_header']				= "ახალი მომხმარებელი";
$lang['user_new_id_empty']				= "ახალი ანგარიშის შესაქმნელად საჭიროა მომხმარებელის იდენტიფიკაცია.";
$lang['user_new_id_not_valid']			= "სამომხმარებლო სახელი უნდა შედგებოდეს მხოლოდ ასოებისგან, ნომრებისგან, ან აღსაღნიში ხაზისგან (_)";
$lang['user_new_id_exists']				= "თქვენს მიერ მითითებულ სამომხმარებლო სახელი უკვე არსებობს.<br>გთხოვთ შეიყვანეთ სხვა.";
$lang['user_new_no_role']				= "თქვენ უნდა აღნიშიოთ ამ მომხმარებლის ფუნქცია:";
$lang['user_new_password_label']		= "აირჩიეთ პაროლი ამ მომხმარებლისათვის";
$lang['user_new_record_button']			= "გააკეთეთ ახალ მომხმარებლის ჩანაწერი";
$lang['user_new_user_id_label']			= "აირჩიეთ სამომხმარებლო სახელი რომელთანაც ერთად შეხვალთ სისტემაში";
$lang['user_restrict_20_char']			= "20 ასო მაქსიმუმ";
$lang['user_role_header']				= "მომხმარებლის ფუნქცია";
$lang['user_role_directions']			= "გთხოვთ აღნიშნეთ ამ მომხმარებლის ფუნქცია";

// Users: Common actions:
$lang['user_add_button']				= "დაამატეთ ახალი მომხმარებელი";
$lang['user_delete_popup']				= "<strong>ეს მომხმარებელი ამოშლილი იქნება თქვენი ავტორიზებული მომხმარებლების სიიდან და არქივიდან.</strong><br>
											ეს სამომხმარებლო სახელი ვეღარ იქნება ხელახლა გამოყენებული, როგორც ახალი მომხმარებლის სამომხმარებლო სახელი.<br>
											<br>
											დაარქივებული მომხმარებლების დასაბრუნებლად დაგვიკავშირდით ჩვენ. ეს მომსახურება ფასიანია.<br>
											<br>
											<strong>დარწმუნებული ხართ რომ გსურთ ამ მომხმარებლის წაშლა?</strong>";
$lang['user_delete_popup_pc']			= "ეს მომხმარებელი ამოშლილი იქნება თქვენი ავტორიზებული მომხმარებლების სიიდან და არქივიდან.\n\n
											ეს სამომხმარებლო სახელი ვეღარ იქნება ხელახლა გამოყენებული, როგორც ახალი მომხმარებლის სამომხმარებლო სახელი.\n\n
											დაარქივებული მომხმარებლების დასაბრუნებლად დაგვიკავშირდით ჩვენ. ეს მომსახურება ფასიანია\n\n
											დარწმუნებული ხართ რომ გსურთ ამ მომხმარებლის წაშლა?";
$lang['user_header']					= "დარეგისტრირებული მომხმარებლების და მათი უფლებამოსილებების მართვაs";
$lang['user_list_none']					= "არცე ერთი დამატებითი მომხმარებელი ჯერ არ ყოფილა დამატებული.";
$lang['user_role_A']					= "ადმინისტრატორი";
$lang['user_role_A_desc']				= "აქვს ყველა განყოფილებაში შესვლის უფლება.";
$lang['user_role_C']					= "ბუღალტერი";
$lang['user_role_C_desc']				= "შეუძლია შეტყობინებების წარმოება, ანგარიშის გადასახადების ინფორმაციის და კამპანიის მონაცამების ნახვა, მაგრამ არ შეუძლია მომხმარებლის და კლიენტის ინფორმაციის ნახვა.";
$lang['user_role_K']					= "კლერკი";
$lang['user_role_K_desc']				= "კამპანიის შესაძლებლობების ფარგლებში, შეუძლია შექმნას და შეცვალოს მომხმარებლების ინფორმაცია (მაგრამ არ უნდა შეცვალოს მათი ბარათის ნომერი თუ დადგენილია),
											ასევე შეუძლია ჩაიწეროს და გადაიხადოს მომხმარებლის ვიზიტები საიტზე (მაგრამ არ უნდა წაშალოს არანაირი ინფორმაცია)";
$lang['user_role_M']					= "მმართველი";
$lang['user_role_M_desc']				= "კამპანიების და ყველა ანგარიშის პარამეტრების შეზღუდული შესაძლებლობების ფარგლებში, მას აქვს ყველგან შესვლის უფლება
											(არ შეუძლია გადასახადების ინფორმაციის ნახვა, შეუძლია შეტყობინებების წარმოება და მომხმარებლების დამატება და რედაქტირება, მაგრამ არ შეუძლია მათი წაშლა.)";
$lang['user_role_N']					= "კამპანიის მმართველი";
$lang['user_role_N_desc']				= "კამპანიების და ყველა ანგარიშის პარამეტრების შეზღუდული შესაძლებლობების ფარგლებში, მას აქვს ყველგან შესვლის უფლება
											(შეუძლია შეტყობინებების წარმოება, არ შეუძლია გადასახადების ინფორმაციის ნახვა, არშეუძლია მომხმარებლების მმართვა და კამპანიების შექმნა ან წაშლა.)";
$lang['user_role_O']					= "დამკვირვებელი";
$lang['user_role_O_desc']				= "შეუძლია მომხმარებლის და კლიენტის ინფორმაციის და კონკრეტული კამპანიის მონაცემების ნახვა (ჯილდოები და წახალისებები.)";
$lang['user_role_P']					= "დროებითი თანაშემწე";
$lang['user_role_P_desc']				= "კამპანიის შესაძლებლობების ფარგლებში შეუძლია მხოლოდ შექმნას ახალი მომხამრებლები და ცაწეროს მათი ვიზიტები.";
$lang['user_role_S']					= "მოკავშირე მმართველი";
$lang['user_role_S_desc']				= "კამპანიის შესაძლებლობების ფარგლებში შეუძლია ჯილდოების, წახალისებების  და ასევე მომხმარებლის ინფორმაციის ყველა ასპექტის და მისი ვიზიტების მართვა.";

// Create New Campaign
$lang['campaign_new_create_button']		= "კამპანიის შექმნა";
$lang['campaign_new_created_header']	= "შექმნილია ახალი კამპანია";
$lang['campaign_new_created_msg']		= "<b>გილოცავთ.</b><br>
											<br>
											თქვენ წარმატებით შექმენით ახალი კამპანია.<br>
											<br>
											ამის შემდეგ უნდა დააყენოთ ამ კამპანიის მონაცემები<br>
											რომელიც დამოკიდებული იქნება თქვენი საქმიანობის მოთხოვნებზე:";
$lang['campaign_new_created_prefs']		= "გადამიყვანე იქ";
$lang['campaign_new_created_back_cp']	= "ანგარიშის სამართავ პანელთან დაბრუნება";
$lang['campaign_new_empty']				= "თქვენ უნდა შეიყვანოთ კამპანიის სამომხმარებლო სახელი:";
$lang['campaign_new_exists']			= "თქვენს მიერ შეყვანილი კამპანიის სამომხმარებლო სახელი უკვე არსებობს.<br>გთხოვთ აირჩიეთ კამპანისს სხვა სამომხმარებლო სახელი";
$lang['campaign_new_header']			= "ახალი კამპანია";
$lang['campaign_new_name']				= "ახლა აირჩიეთ კამპანიის დასახელება:";
$lang['campaign_new_name_restrict']		= "(მაქსიმუმ 20 ასო, სივრცის ჩათვლით)";
$lang['campaign_new_step_dir']			= "შექმენით თქვენი პირველი კამპანია:";
$lang['campaign_new_sub_header']		= "პირველრიგში, აირჩიეთ კამპანიის ტიპი:";
$lang['campaign_new_type_empty']		= "თქვენ უნდა აირჩიოთ კამპანიის ტიპი:";
$lang['campaign_new_buyx_desc']			= "კამპანიის ეს სტილი გაძლევთ უფლებას დააჯილდოვოტთ თქვენი კლიენტები იმის მიხედვით,
											 თუ რამდენად ხშირად შეიძენენ ისინი ინდივიდუალურ ნაწარმს, საპროდუქციო ხაზს ან მომსახურეობებს.<br>
											<br>
											ეს კარგია ყავის სახლებისთვის და ყველა  მაღაზიისთვის, რომლებიც გვთავაზობენ სხვადასხვა საკითხების და მათი ტიპების შეძღუდილ მენიუს.
											It's often encountered in the form of paper cards with a certain number of squares to be punched-out
											before receiving a free item or service. კამპანიის ეს სტილი გეხმარებათ იგივე გააკეთოთ, ოღონდ
											ამჯერად ბარათების დაბეჭდვის გარეშე(დაკარგულებთან საქმის დაჭერის გარეშე,და ა.შ.)მეორე სარგებელი ამ სიტუაციაში ისაა, რომ თქვენ
											ზუსტად იცით თუ რამდენი კლიენტი გყავთ პროგრამაში და თქვენ შეგიძლიათ მათ შესახებ სავაჭრო შეტყობინებების მართვა.</br>
											<br>
											<b>თქვენი კლიენტებისათვის შეგიძლიათ დააწესოთ ნებისმიერი საკითხი ან საკითხის კატეგორიის რაოდენობა
											რომლის მიღება კლიენტს შეეძლება უფასოდ. მაგალითად:</b><br>
											<li>10 ვარცხნილობის შემდეგ 1 იქნება უფასო. </li>
											<li>16 lbs of feed until you get one on the house. </li>
											<li>8 ორცხობილის შემდეგ 1 უფასო იქნება. </li>
											<br>
											თქვენ ასევე შეგილიათ დააწესოდ კონკრეტული ვალდებულება <i>X სანამ შემდეგი არ იქნება უფასო</i>ეს ციფრი  გაამარტივებს კონკრეტული წახალისების დადგენას
											იმ პუნქტებიდან, რომლებსაც ყველა ყიდულობს ერთი და იგივე დონეზე.";
$lang['campaign_new_earn_event_desc']	= "სასაჩუქრე ბარათის და შემთხვევითობის კამპანიის შეჯვარება: დააჯილდოვეთ ვინმე ფულადი კრედიტით
											(ან ნაღდი ფულით) ყოველი ”შემთხვევისათვის” (მაღაზიაში ვიზიტი, მიმართულება და ა.შ.), რომელიც შემდგომში დაიხარჯება პროუქტებში ან
											მომსახურეობაში კონკრეტულად თვქენს დაწესებულებაში.<br>
											<br>
											<b>ერთგულების ეს პროგრამა უფლებას გაძლევთ, რომ:</b><br>
											<li>აღნიშნოთ თუ რამდენი დოლარი მიიღება ყოველ ვიზიტზე და მოქმედებაზე</li>
											<li>შეისყიდეთ დაგროვილი ბალანსის ნებისმიერი რაოდენობა, ისევე როგორც სასაჩუქრე ბარათი</li>
											<br>
											<b>რამოდენიმე მაგალითი</b>:
											<li>მიმართულების კამპანიები: დააჯილდოვეთ კლიენტები, სასტუმროს კონსიერჟები, რეგისტრატორები დიდ ფირმებში, იმისათვის, რომ
											გამოაგზავნონ მომხმარებლები თქვენს ბიზნესში.</li>
											<li>გადაუხადეთ ანაზღაურება მუშაკს ან მოიჯარეს განმეორებითი სამუშაოებისათვის.</li>
											<li>დააჯილდოვეთ VIP (განსაკუთრებულად მნიშვნელოვანი პირები) კლიენტები შიდა ”მონოპოლიური” თანხით” იმისათვის, რომ ეს თანხა თქვენს საქმიანობაში დაიხარჯოს.</li>
											<li>გაეცით დახმარება ’ბავშვების სტიმულირება სახლის ფარგლებში’.</li>";
$lang['campaign_new_event-based_desc']	= "გაძლევთ საშუალებას, რომ დააწესოთ ჯილდო რაც კავშირში იქნება კლიენტების ურთიერთქმედებასთან
											თქვენს ბიზნესთან მიმართებაში, და არა დახარჯული თანხებიt.<br>
											<br>
											ეს ხშირად გამოიყენება კლიენტის მიმართულების კამპანიაში: ბიზნესი დააწესებს რამოდენიმე ბარათზე ერთი და იგივე
											ნომერს კონკრეტული კლიენტისთვის, კოსიერჟისთვის სასტუმროში, ან რეგისტრატორისთვის დიდ ფირმაში.
											როდესაც მათ მიერ მიმართულება მიღებული კლიენტი მოვა თქვენთან და მოგცემთ იმ ბარათებიდან ერთ ერთს, თქვენი<i>ევანგელისტი</i>
											დაამატებს ყოველ ვიზიტს მათ ”ბალანსზე”. მაგალითად, 5 ვიზიტის შემდეგ ისინი მიიღებენ 1 უფასო
											მომსახურეობას. თქვენ მიიღებთ ახალ კლიენტებს. ყველა  მოგებული რჩება.<br>
											<br>
											ეს უბრალოდ სცენარია. ბევრმა ადამიანმა სხვა ძალზედ გამოსადეგი წესები მოიფიქრა ამ პროგრამის გამოყენებისთვის.<br>
											<br>
											შემთხვევაზე დამყარებული პროგრამა გაძლევთ საშუალებას:<br>
											<br>
											<b>დააწესოთ ჯილდოები სხვადასხვა დონეზე. მაგალითად:</b><br>
											<li>5 შემთხვევის დაგროვების შემდეგ 10%-იანი შეღავათის მიღება</li>
											<li>10 ვიზიტის დაგროვების შემდეგ 50%-იანი შეღავათის მიღება</li>
											<li>20 მიმართულების დაგროვების შემდეგ 1 მასაჟის მიღება</li>
											<br>
											<b>რამოდენიმე მაგალითი:</b><br>
											<li>მიმართულების კამპანიაები როგორც აღწერილია ზემოთ.</li>
											<li>Gyms keeping track of routines. </li>
											<li>პროდუქტის შეკეთება, ვიდრე ის არ შეიცვლება. </li>
											<li>VIP კლუბის გამოყენება. </li>
											<li>და ა.შ... </li>";
$lang['campaign_new_gift_card_desc']	= "სასაჩუქრე ბარათის კამპანია გაძლევთ საშუალებას დაუმატოთ თანხა კლიენტის ანგარიშს და გამოაკლოთ ის როდესაც გამოყენებული იქნება გადასახადისთვის.<br>
											<br>
											მარტივი და პირდაპირი. ეს ძირითადად გამოიყენება პლასტიკურ სასაჩუქრე ბარათებთან მიმართებაში, რომლის დროსაც ბარათს აქვს
											კონკრეტული ფულადი ღირებულება და გაიცემა როგორც საჩუქარი ან გამოიყენება როგორც წინასწარ გადახდილი ბარათი.<br>
											<br>
											<b>პლასტიკური ბარათები არ არის საჭირო</b>, და ის შეიძლება ამოყენებული იყოს ნებისმიერ დროს. თქვენ უბრალოდ უნდა გამონახოთ მრავალჯერადი და მრავალმხრივი გზები
											<i>შენარჩუნებული ღირებულება</i> ანგარიშები, ისეთი როგორიცაა საადვოკატო გადასახადები, განვადებით გადახდის გეგმები, ბავშვების შემწეობა... მხოლოდ თქვენს ფანტაზიას შეუძლია ეგზღუდოთ.";
$lang['campaign_new_points_desc']		= "თქვენი კლიენტები აგროოვებენ ქულებს მათი შესყიდვების, გადახდების და წახალისებების ხარჯზე, რომლებსაც თქვენ თვითინ ადგენთ მათთვის.
											ქულები შესაძლებელია შესყიდული იყოს ჯილდოების დადგენილი წესების მიხედვით.<br>
											<br>
											ქულების პროგრამა, ისევე როგორც ავიახაზების მილების პროგრამა, საშუალებას გაძლევთ:<br>
											<br>
											<b>დააწესოთ ქულების კონკრეტული რაოდენობა ყოველი დახარჯული დოლარისთვის. მაგალითად:</b><br>
											<li>5 ქულა ყოველი დახარჯული დოლარისთვის</li>
											<li>.25 ქულა ყოველი დახარჯული დოლარისთვის</li>
											<br>
											<b>დააწესეთ ჯილდოების დონეები. რამოდენიმე მაგალითი:</b><br>
											<li>1000 ქულიდან: შესყიდვის 50% </li>
											<li>5000 ქულიდან: უფასო Widget</li>
											<li>100,000 ქულიდან: მოგზაურობა დისნეილენდში.</li>
											<br>
											<b>დააწესეთ წახალისებები. რამოდენიმე მაგალითი:</b><br>
											<li>ორმაგი ქულები სამსაბათობით</li>
											<li>დამატებითი 500 ქულა წინასწარი შეკვეთისთვის</li>
											<li>25%-იანი ბონუს ქულები სასაჩუქრე ბარათის შესყიდვით.</li>
											<br>
											თვითნებურად, თქვენ შეგიძლიათ დაადგინოთ ჯილოდოს დახარჯვის პროგრამა, რომელიც საშუალებას მოგცემთ შეისყიდოთ ქულები, რომლებსაც ფულადი ღირებულება ექნებათ.";
$lang['campaign_new_name_desc']			= "თუ თქვენ პირველად ქმნით კამპანიას, დაარქვით მას დროებითი სახელი ’ტესტი’ სანამ შეისწავლით ყველა მონაცემებს და ინფრომაციას--
											თქვენ შეგიძლიათ იმდენი კამპანია შექმნათ რამდენიც მოგესურვებათ, შეჩერდეთ ან წაშალოთ არასასურველები.<br>
											<br>
											საერთოდ, ეს კარგი აზრია რომ გამოიყენოთ თქვენი ორგანიზაციის სახელი, თუ შემოკლებულად გსურთ შეგიძლიათ მისი ინიციალები ცაწეროთ. რამოდენიმე მაგალითი:<br>
											<li><b>ACME-ს ჯილდოები</b></li>
											<li><b>წითელი კლუბი</b> (სალონისთვის რომელსაც ’წითელი ქვია)</li>
											<li><b>მანგალი</b> (ყავის მაღაზია რომელიც ველოსიპედისტებს ანებივრებს)</li>
											<li><b>ქულების ზეიმი</b> (მომმარაგებლისათვის)</li>";

// Campaigns: Common actions:
$lang['campaign_add_new']				= "ახალი კამპანიის დამატება";
$lang['campaign_delete_popup']			= "<strong>ეს კამპანია ამოშლილი იქნება თვქენი კამპანიების სიიდან და დაარქივდება.</strong><br>
											კამპანიის ეს სახელი ვერ იქნება ხელახლა გამოყენებული როგორც ახალი კამპანიის დასახელება.<br>
											<br>
											დაარქივებული კამპანიის დასაბრუნებლად ჩვენ დაგვიკავშირდით. ეს მომსახურეობა ფასიანია.<br>
											<br>
											<strong>დარწმუნებული ხართ, რომ გსურთ ამ კამპანიის წაშლა?</strong>";
$lang['campaign_delete_popup_pc']		= "ეს კამპანია ამოშლილი იქნება თვქენი კამპანიების სიიდან და დაარქივდება.\n\n
											კამპანიის ეს სახელი ვერ იქნება ხელახლა გამოყენებული როგორც ახალი კამპანიის დასახელება.\n\n
											დაარქივებული კამპანიის დასაბრუნებლად ჩვენ დაგვიკავშირდით. ეს მომსახურეობა ფასიანია.\n\n
											დარწმუნებული ხართ, რომ გსურთ ამ კამპანიის წაშლა?";
$lang['campaign_hide_on_hold']			= "მოლოდინში მყოფი კამპანიის დამალვა";
$lang['campaign_none_yet']				= "იმისათვის, რომ დაიწყოთ შექმენით ახალი კამპანია (სასაჩუქრე და ერთგულების პროგრამა)<br>
											და დააჭირეთ ღილაკს ქვემოთ ’ახალი კამპანიის დამატება’.";

$lang['campaign_type_buyx']				= "პროგრამა იყიდე X  და მიიღე ერთი უფასოდ";
$lang['campaign_type_earn_per_event']	= "პროგრამა მიიღე ფული ყოველი ვიზიტისთვის";
$lang['campaign_type_event-based']		= "ვიზიტზე დამყარაბული პროგრამა";
$lang['campaign_type_gift_cards']		= "სასაჩუქრე ბარათის პროგრამა";
$lang['campaign_type_points']			= "ქულების პროგრამა";
$lang['campaign_view_on_hold']			= "მოლოდინში მყოფი კამპანიის ნახვა";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']				= "დაამატეთ დაჯილდოების დონე";
$lang['edit_reward_add_another']		= "დაამატეთ  კიდევ ერთი დაჯილდოების დონე";
$lang['edit_reward_desc_empty']			= "თქვენ უნდა უზრუნველყოთ დაჯილდოების დონეების აღწერა.";
$lang['edit_reward_level_header']		= "დაჯილდოების დონის რედაქტირება";
$lang['edit_reward_header']				= "დაჯილდოების დონეები";
$lang['edit_reward_none']				= "ამჟამად არანაირი ჯილდო არ დადგინდა";
$lang['edit_reward_table_header']		= "ჯილდოს აღწერა";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "ეს თანაფარდობა შეიძლება შეიცვალოს ნებისმიერ დროს, მაგრამ არსებული კლიენტების დაგროვილი ქულები".$lang['points']."არ შეიცვლება.";
$lang['edit_points_desc']				= "ეს მართლაც თვითნებური ციფრია და ის შესაძლებელია იყოს ნებისმიერი რამ რაც თქვენთანაა კავშირში. მაგალითად:";
$lang['edit_points_desc_header']		= $lang['Points']." ყოველ დახარჯულ დოლარზე მიღებული.";
$lang['edit_points_empty']				= "თქვენ უნდა შეიყვანოთ ნომერი".$lang['points']." ეს საჭიროა ჯილდოს მისაღებად.";
$lang['edit_points_examples_header']	= "ქულებზე დამყარებული პროგრამის რამოდენიმე მაგალითი:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "20%-იანი ფასდაკლება";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "მთავარი მოსაპატიჟებელი მანიკური";
$lang['edit_points_ex_3_amount']		= "750";
$lang['edit_points_ex_3_desc']			= "დამატებითი ღამის გასათევი არანაირი დამატებითი გადასახადით";
$lang['edit_points_ex_4_amount']		= "1000";
$lang['edit_points_ex_4_desc']			= "20 უნცია უფასო შაპუნი";
$lang['edit_points_ex_5_amount']		= "20";
$lang['edit_points_ex_5_desc']			= "კატის საკვების უფასო 10 კილოგრამი";
$lang['edit_points_ex_6_amount']		= "15, 000";
$lang['edit_points_ex_6_desc']			= "VIP კლუბის დონე";
$lang['edit_points_ex_7_amount']		= "160";
$lang['edit_points_ex_7_desc']			= "პრიორიტეტის განლაგება";
$lang['edit_points_ex_8_amount']		= "100, 000";
$lang['edit_points_ex_8_desc']			= "მისალოცავი მოგზაურობა დისნეილენდში";
$lang['edit_points_not_valid']			= "რაოდნეობა".$lang['points']."უნდა იყოს ციფრი.";
$lang['edit_points_profit_ratio_error']	= "თქვენ უნდა დააფიქსიროთ პოზიტიური ღირებულება, ნულზე უფრო მაღალი თანხაzero. დატოვე ბლანკი გასაუქმებლად.";
$lang['edit_points_step_dir']			= "დააწესეთ უპირატესობები თქვენი ქულების".$lang['Points']." კამპანიისთვის:";
$lang['edit_points_table_header']		= "დაჯილდოების აღწერა მიიღება მაშინ როდესაც<br>გარკვეული რაოდენობა ქულების".$lang['points']." არის მიღწეული.";
$lang['edit_points_too_small']			= "თქვენ უნდა დააფიქსიროთ ღიღებულების 1 ერთეული მაინც".$lang['point'].".";

$lang['edit_promo_table_header']		= "წახალისების აღწერა";
$lang['edit_promo_none']				= "ამჟამად არანაირი წახალისება არ დადგინდა";
$lang['edit_promo_add']					= "წახალისების დამატება";
$lang['edit_promo_add_another']			= "კიდევ ერთი წახალისების დამატება";
$lang['edit_promo_desc']				= "წახალისებები განისაზღვრება".$lang['points']." დაგროვების მიხედვით.თქვენ შეგიძლიათ დაამატოთ წახალისებები ან გამოაკლოთ ქულების გარკვეული რაოდენობა".$lang['points'].", ან გაზარდოთ გარკვეული რაოდენობით, როდესაც გადარიცხვა დაფიქსირებულია.ნახეთ მაგალიტები ქვემოთ:";
$lang['edit_promo_edit_header']			= "წახალისების რედაქტირება";
$lang['edit_promo_edit_error_header']	= "თქვენ უნდა შეიყვანოთ ციფრი იმისათვის, რომ გააორმაგოთ ქულა".$lang['points']." მიღებული.<br>მაგალითად:";
$lang['edit_promo_edit_error_add']		= "თქვენ უნდა შეიყვანოთ ნომერი ქულების".$lang['points']."იმისათვის რომ დაუმატოთ გამომუშავებულებს. მაგალითად, \"500\" will add 500 points to the amount of ".$lang['points']." earned. \"-100\" will take away 100 ".$lang['points']." from those earned (down to 0, but no further.)";
$lang['edit_promo_edit_error_multi']	= "ქულების რაოდენობის გასადიდებლად".$lang['points']." უნდა იყოს ციფრი.";
$lang['edit_promo_edit_error_not_valid']= "ქულების რაოდენობის დასამატებლად აუცილებელია, რომ იყოს ციფრი.";
$lang['edit_promo_edit_ex_1']			= "2 გაამრავლებს დაგროვებულ ქულებს 2-ჯერ.";
$lang['edit_promo_edit_ex_2']			= "0.5 გაანახევრებს მას.";
$lang['edit_promo_edit_ex_3']			= "1.1 დაუმატებს 10 %-ით მეტ ქულას.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "Add 500 ".$lang['points']." for a referral";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']." ბონუსი წევრად გახდომისათვის";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "მოაკელი 50 ".$lang['points']." დაგვიანებისათვის";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "VIP დონე: გააორმაგე".$lang['points']." მოპოვებული";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "დამატებითი 50 %-თვის".$lang['points']." სამშაბათობით";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "ვერცხლი წევრი: დამატებითი  25% ".$lang['points'];
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "25 %-თვის ნაკლები".$lang['points'];
$lang['edit_promo_name_empty']			= "თქვენ უნდა წარმოადგინოთ სახელწოდება წახალისებისათვის";
$lang['edit_promo_note_1']				= /*(Addtion Operation)*/ "წახალისებები თავისით დაფიქსირდებიან: უბრალოდ მონიშნეთ წახალისება და დააჭირეთ ღილაკს"; /* ("record button") */
$lang['edit_promo_note_2']				= /*(Multiplication Operation)*/ "წახალისებები ვერ დაფიქრდებიან თავისით: შესყიდვის რაოდენობა აუცილებელია.";
$lang['edit_promo_table_header_1']		= "გაორმაგება<br>ან დამატება";
$lang['edit_promo_table_header_2']		= "მიერ<br>რამდენი";

$lang['edit_str_header']				= "არასავალდებულო: შესაძლებლობა ქულების გამოსასყიდად,  დოლარის რაოდენობის დაფიქსირებით";
$lang['edit_str_desc']					= "ჯილდოს დახარჯვის პროგრამა სწორედ ის თანაფარდობაა, რომელიც უნდა გამოიყენოთ".$lang['points']."თქვენი ჯილდოს ფასეულობის დადგენაში. თუ აქ შეხვალთ, თქვენ მოგეცემათ შესაძლებლობა გამოსყიდვის".$lang['points']." by entering a ".$lang['currency']." value instead:";
$lang['edit_str_ratio_header']			= "შესაძლებლობა ქულების გამოსასყიდად<br>t დოლარის რაოდენობის დაფიქსირებით:";
$lang['edit_str_ratio_on']				= "ჩართული";	// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']				= "გამორთული";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_ratio_sub_header']		= "თქვენი ჯილდოს დახარჯვის თანაფარდობა:";
$lang['edit_str_ratio_not_set']			= "არ არის დაყენებული";
$lang['edit_str_example_header']		= "მაგალითისთვის:";
$lang['edit_str_example_1']				= "თქვენს კლიენტს სურს შეიძინოს რაიმე ნივთი რაც ღირს".$lang['currency_symbol']."100 და მას აქვს მხოლოდ 1000".$lang['points']." დაგროვებული. ის გეკითხებათ შეუძლია თუ არა მას ნაწილობრივ თავისი ქულებით გადახდა".$lang['points'];
$lang['edit_str_example_1_desc']		= "და როდესაც თვქენ ზევით შეხვალთ ჯილდოს დახარჯვის განყოფილებაში, <b>პროგრამა ავტომატურად გამოთვლის თუ რამდენი ქულაა საჭირო".$lang['points']." და რა არის მათი ღირებულება</b>. ასე, რომ აღარ არის იმის საჭიროება, რომ თქვენ ან თქვენმა მოლარემ დაიმახსოვროთ დაჯილდოების გართულებული განრიგი ან თან ატაროთ გამომთვლელი.";
$lang['edit_str_example_math_show']		= "დააჭირეთ აქ, რომ ნახოთ მათემატიკა.";
$lang['edit_str_example_math_hide']		= "Yikes! დამალე ეგ მათემატიკა!";
$lang['edit_str_example_math']			= "Let's say you specified a ".$lang['ppd']." Ratio
											of 5 and a Spend-to-Reward Ratio of 20. Then:<br>
											1000 ".$lang['points']." / 5 ".$lang['ppd']." / Spend-to-Reward Ratio of 20 = ".$lang['currency_symbol']."10<br>
											<br>
											Another way to look at this is that $10 x 5 ".$lang['ppd']." = 50 ".$lang['points'].", and with
											a Spend-to-Reward Ratio of 20, you need 20 x 50 ".$lang['points']." (1000 ".$lang['points'].") to be able to redeem ".$lang['currency_symbol']."10.";
$lang['edit_str_example_math_height']	= "90";	// This is the height, in pixels, of the section that the "math" is in.
												// If the translation of the section above requires more room, increase that number accordingly.
$lang['edit_str_note_1']				= "იმისათვის, რომ გამორთოთ ".$lang['currency']." ღირებულებების შესყიდვის შესაძლებლობა".$lang['points'].", ამოშალეთ ჯილდოს დახარჯვის თანაფარდობა (ცარიელი დატოვეთ) და დააჭირეთ"; /*(Set button)*/
$lang['edit_str_note_2']				= "თქვენ შეგიძლიათ დაჯილოდების დახარჯვის თანაფარდობის შეჩვლა ნებისმიერ დროს, მაგრამ თქვენი ჯილდოების დონეები ავტომატურად არ შეიცვლება.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "თქვენ უნდა შეიყვანოთ სავალდებულო შემთხვევების ციფრი იმისათვის, რომ მიიღოთ ჯილდო.";
$lang['edit_visits_not_valid']			= "შემთხვევების რაოდენობა უნდა იყოს კონკრეტული ციფრი.";
$lang['edit_visits_step_dir']			= "დააწესეთ რამოდენიმე დაჯილდოების წესები ვიზიტზე დამოკიდებული პროგრამისათვის:";
$lang['edit_visits_table_header']		= "შემთხვევების<br>რაოდენობა";
$lang['edit_visits_table_header_2']		= "დაჯილდოების აღწერილობა დადგინდება მაშინ, როდესაც<br>ვიზიტების გარკვეული რაოდენობა მიღწეული იქნება.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "თქვენ უნდა დააფიქსიროთ ღიღებულების 1 ერთეული მაინც".$lang['currency_100th_symbol']." (0.01)";
$lang['edit_dpv_heading']				= "ჯილდოს მონაცემების დარეგულირება";
$lang['edit_dpv_label']					= $lang['currency_plural']." გამომუშავება ვიზიტის მიხედვით:";
$lang['edit_dpv_label_ending']			= "ვიზიტის მიხედვით.";
$lang['edit_dpv_note_1']				= "ეს ნომერი შეიძლება შეიცვალოს ნებისმიერ დროს, მაგრამ არსებული კლიენტის მიერ დაგროვებული".$lang['currency']." არ შეიცვლება.";
$lang['edit_dpv_step_dir']				= "დააწესეთ თქვენი კამპანიის გამომუშავების პირობები:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "მომსახურეობის ან პროდუქტების რაოდენობა უნდა შეადგენდეს 1 მაინც<br>10 არის რეკომენდირებული არჩევანი.";
$lang['edit_buyx_header']				= "მომსახურეობის ან პროდუქტების რაოდენობა შემდეგ გამოყენებამდე უფასოა";
$lang['edit_buyx_item_empty']			= "თქვენ უნდა შეიყვანოტ პროდუქტის ან მომსახურეობის დასახელება ან აღწერილობა.";
$lang['edit_buyx_item_header']			= /* Add or Edit */ "პროდუქტი ან მომსახურეობა";
$lang['edit_buyx_item_table_header_1']	= "მომსახურეობა, პროდუქტი ან კატეგორია";
$lang['edit_buyx_item_table_header_2']	= "რამდენი გამოყენებამდე<br>შემდგომი უფასო იქნება";
$lang['edit_buyx_none']					= "არც მომსახურეოობა ან პროდუქტი არ დადგინდა.";
$lang['edit_buyx_step_dir']				= "დააწესეთ თქვენი კამპანიის დაჯილდოების პირობები:";
$lang['edit_buyx_table_header_1']		= "პროდუქტი, მომსახურეობა ან კატეგორია";
$lang['edit_buyx_table_header_2']		= "# სანამ<br>შემდგომი უფასო იქნება";
$lang['edit_buyx_add_another']			= "დაამატეთ კიდევ ერთი მომსახურეობა ან პროდუქტი";
$lang['edit_buyx_add']					= "დაამატეთ მომსახურეობა ან პროდუქტი";
$lang['edit_buyx_default_header']		= "Default number of services or products until the next one is free";
$lang['edit_buyx_default_label']		= "Default for new services / products:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "დააწესეთ თქვენი კამპანიის პირობები და დაჯილოდების დონეები:";
$lang['edit_giftcard_no_settings']		= "სასაჩუქრე ბარათის კამპანიას არ გააჩნია რაიმე უპირატესობები ან დასაჯილდოებელი დონეების დასაყენებელი პირობები.<br>(მშვენიერია, ეს მარტივი იყო!)";

// Common Customer Content
$lang['customer_account_activated']		= "ანგარიში გააქტიურებულია";
$lang['customer_add_tab']				= "დაამატეთ მომხმარებელი";
$lang['customer_lookup_tab']			= "კლიენტის ძიება";
$lang['customer_id_not_exist']			= "კლიენტის ანგარისის სამომხმარებლო სახელი არ არსებობს.";
$lang['customer_id_missing']			= "მომხმარებლის არანაირი სამომხმარებლო სახელი არ იქნა შეყვანილი.";
$lang['customer_tip_1']					= "იცოდით, რომ კლიენტის ბარათის ნომრის დასადგენად, შეგიძლიათ შტრიხ კოდის სკანერის ან  ბარათის მაგნიტური მკითხველის გამოყენება?";
$lang['customer_tip_2']					= "შეინახეთ ეს გვერდი შენახვის გენერატორის გამოყენებიტ რომელიც ქვევით მდებარეობს"; /* Account Control Panel screen */
$lang['customer_last_activity']			= "ბოლო აქტიურობა";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "შეცდომა: შეუძლებელია ბარათის წაშლა.";
$lang['manage_cards_find_by_date']		= "ბოლო აქტიურობის თარიღი";
$lang['manage_cards_find_by_header']	= "ან აჩვენე ყველა კლიენტის სია:";
$lang['manage_cards_find_directions']	= "შეავსეთ ქვევით მდებარე ნებისმიერი ველი:";
$lang['manage_cards_find_header']		= "მოძებნეთ კლიენტი იმისათვის, რომ წაშალოთ:";
$lang['manage_cards_find_none']			= "არც ერთი ჩანაწერი არ შეესაბამება თქვენს შეკითხვას.";
$lang['manage_cards_find_note']			= "ამას მხოლოდ რამოდენიმე წუთი დაჭირდება იმ შემთხვევაში თუ თქვენ გყავთ რამოდენიმე ატასი კლიენტი ან გაქვთ შენელებული ინტერნეტ კავშირი.";
$lang['manage_cards_header']			= "წაშალეთ კლიენტის ანგარისები";
$lang['manage_cards_list_header']		= "კლიენტის ანგარიშების სია";
$lang['manage_cards_not_exist']			= "ეს კლიენტი არ არსებობს.";
$lang['manage_cards_cust_deleted']		= "ეს კლიენტი უკვე წაშლილია სისტემიდან.";
$lang['manage_cards_popup_warning']		= "ეს წაშლის კლიენტის ინფორმაციას და ყველა აქტიურ გადარიცხვას<br>
											ყველა კამპანია, რომელიც კავშირშია ამ კლიენტთან.<br><br>
											ასევე, <strong>შეტყობინებები აღარ დააფიქსირებს ამ ანგარიშის რაიმე წარსულ აქტირუ მოქმედებას</strong>.<br><br>
											ეს ქმედება არ შეიძლება არ იყოს შესრულებული!<br><br>
											დარწმუნებული ხართ, რომ გსურთ ამ მომხმარებლის ანგარისის გაუქმება?";
$lang['manage_cards_popup_warning_pc']	= "ეს წაშლის კლიენტის ინფორმაციას და ყველა აქტიურ გადარიცხვას\n
											ყველა კამპანია, რომელიც კავშირშია ამ კლიენტთან.\n\n
											ასევე, შეტყობინებები აღარ დააფიქსირებს ამ ანგარიშის რაიმე წარსულ აქტირუ მოქმედებას.\n\n
											ეს ქმედება არ შეიძლება არ იყოს შესრულებული!\n\n
											დარწმუნებული ხართ, რომ გსურთ ამ მომხმარებლის ანგარისის გაუქმება?";

// Create New Customer Account
$lang['customer_new_card_desc']			= "ბარათის უნიკალური # ან <i>მომხმარებლის ანგარიშის სამომხმარებლო სახელი</i> საჭიროა იმისათვის, რომ მათ ჰქონდეთ შესაძლებლობა შეამოწმონ<br>თავიანთი ბალანსი თქვენს ინტერნეტ გვერდზე.";
$lang['customer_new_create_button']		= "შექმენით მომხმარებლის ანგარიში";
$lang['customer_new_demo_phone']		= "(555)555-5555";
$lang['customer_new_demo_email']		= "demo@email.com";
$lang['customer_new_demo_addtl_info']	= "ნებისმიერი დამატებიტი ინფორმაცია შეიძლება ჩაიწეროს აქ.";
$lang['customer_new_id_exists']			= "თქვენს მიერ შეყვანილი მომხმარებლის ანგარისის სამომხმარებლო სახელი უკვე არსებობს.";
$lang['customer_new_id_match']			= "შემდეგი ანგარიში შეესაბამება"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "ამ ანგარიშის სამომხმარებლო სახელი არ არის სწორი.";
$lang['customer_new_exists']			= "შეყვანილი ინფორმაცია შეესაბამება არსებულ მომხმარებელს.";
$lang['customer_new_header']			= "შექმენით ახალი მომხმარებლის ანგარიში";
$lang['customer_new_multiple_matches']	= "ეს ანგარიშები შეესაბამება თვქვენს მიერ დაფიქსირებულ ინფორმაციას:";
$lang['customer_new_other_campaigns']	= "სხვა კამპანიები<br>დაამატეთ მომხმარებელი:";
$lang['customer_new_random_id']			= "დაწერეთ შემთხვევითი ციფრი";
$lang['customer_new_steps_header']		= "შექმენით მომხმარებლის სანიმუშო ანგარიში:";
$lang['customer_new_steps_dir']			= "მომხმარებლის ანგარიში უნდა დადგინდეს უნიკალური ამომცნობის მეშვეობით, როგორიცაა მაგალითად ტელეფონის ნომერი, ელექტრონული ფოსტის მისამართი,
											შტრიხ კოდი, ან ნებისმიერი სხვა რამე რაც კონკრეტულად ამ მომხმარებელთანაა კავშირში. ტავისუფლად ისარგებლეთ მომხმარებლის საცდელი ანგარიშით
											როგორ  '11111' ამ ჯერად; თქვენ გექნებათ შესაძლებლობა წაშალოთ ეს ანგარიში მოგვიანებით.";
$lang['customer_new_not_allowed']		= "თქვენ არ გაქვთ უფლება შექმნათ ახალი მომხმარებლის ჩანაწერები.";

// Lookup Customer Account
$lang['customer_activity_header']		= "ანგარიშის აქტიურიბა";
$lang['customer_activity_none']			= "ეს ანგარიში არ არის აქტიური.";
$lang['customer_activity_print_short']	= "ბოლო გადარიცხვა"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "მიმდინარე ბალანსი:";
$lang['customer_lookup_balances_none']	= "არანაირი ბალანსი";
$lang['customer_lookup_button']			= "მომხმარებლის ძიება";
$lang['customer_lookup_header']			= "მომხმარებლის ანგარისის ძიება";
$lang['customer_lookup_instructions']	= "შეიყვანეთ მომხმარებლის ინფორმაციის ნებისმიერი ნაწილი:";
$lang['customer_lookup_multiple_match']	= "შემდეგი ჩანაწერები შეესაბამება თვქენი ზიების რეზულტატს";
$lang['customer_lookup_multiple_view']	= "ნახეთ ანგარიშის დეტალები";
$lang['customer_lookup_no_match_add']	= "არანაირი შეაბამისი ჩანაწერები არ მოიძებნა. თქვენ შეგიძლიათ ქვევით შექმნათ ახალი ანგარიში";
$lang['customer_lookup_no_match']		= "ამ კამპანიაში არცერთი წარმოდგენილი მომხმარებლელი არ შეესაბამება თვქვენს შეკითხვას.";
$lang['customer_lookup_not_allowed']	= "თქვენ არ გაქვთ ნებართვა იხილოტ მოხმარებლების ინდივიდუალური ჩანაწერები.";
$lang['customer_lookup_steps_header']	= "დაამატეთ და გამოისყიდეთ რამოდენიმე გადარიცხვა.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "დაუმატეთ მომხმარებელი სხვა კამპანიას:";
$lang['customer_edit_campaigns_note']	= "მომხმარებლის სხვა კამპანიაში დამატება გაძლევთ საშუალებას მოძებნოთ ისინი კერძო
											ინფორმაციის ძიების საშუალებით.სხვაგვარად, თქვენ შეგიძლიათ მოძებნოთ ისინი მათი ბარათის ნომრით# / სამომხმარებლო სახელით, ან შეგიძლიათ გამოიყენოთ
											ზედა მარჯვენა კუთხეში განლაგებული მენიუთი და გადახვიდეთ ერთი კამპანიიდან მეორე კამპანიაშჳo და იმოქმედოთ კლიენტის ჩანაწერების ფარგლებში.";
$lang['customer_edit_header']			= "ანგარიშის ინფორმაციის რედაქტირება";
$lang['customer_edit_random_number']	= "დაწერეთ შემთხვევითი ციფრი";
$lang['customer_edit_sub_header']		= "ყველა ველი დამატებითია.";
$lang['customer_edit_activity_header']	= "მომხმარებლის ანგარიშის ინფორმაციის აქტირუობა";

// Record Customer Transactions
$lang['transaction_add_button']			= "დაუმატეთ ანგარიშს";
$lang['transaction_amount_not_valid']	= "გადარიცხვის შეცდომა:<br>The ".$lang['currency']." შეყვანილი თანხა არ არის სწორი";
$lang['transaction_amount_too_samll']	= "გადარიცხვის შეცდომა:<br>The ".$lang['currency']." შეყვანილი თანხა უნდა შეადგენდეს 0.01 მაინც";
$lang['transaction_new_gc_header']		= "დაუმატეთ ანგარიშს";
$lang['transaction_new_header']			= "ახალი აქტიურიბა";
$lang['transaction_no_amount']			= "გადარიცხვის შეცდომა:>თქვენ ან უნდა შეიყვანოთ ".$lang['currency']." თანხა<br>ან მონიშნოთ წახალისება.";
$lang['transaction_promo_not_valid']	= "გადარიცხვის შეცდომა:<br>თქვენ უნდა შეიყვანოთ შესყიდვის ოდენობა<br>იმისათვის, რომ ისარგებლოთ ამ წახალისებით.";
$lang['transaction_promos_label']		= "შეარჩიეთ წახალისება:";
$lang['transaction_purchase_label']		= "შეიყვანეთ შესყიდვის მთლიანი რაოდნეობა:";
$lang['transactions_buyx_none']			= "არც მომსახურეობა ან პროდუქტი დადგინდა.";
$lang['transactions_buyx_none_dir']		= "სამართავ პანელთან დაბრუნება და მონაცემების რედაქტირება.";
$lang['transactions_visit_credited']	= "1 დაკრედიტებული შემთხვევა";
$lang['transactions_visit_redeemed']	= "Events Redeemed";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "შეცდომა გადარიცხვის წაშლისას. გთხოვთ კიდევ ერთხელ სცადეთ.";
$lang['transaction_delete_popup']		= "<strong>ეს გადარიცხვებს პერმანენტულად წაშლის.</strong><br><br>
											ეს ქმედება არ შეიძლება არ იყოს შესრულებული!<br><br>
											დარწმუნებული ხართ, რომ გსურთ გადარიცხვის გაუქმება?";
$lang['transaction_delete_popup_pc']	= "ეს გადარიცხვებს პერმანენტულად წაშლის.\n\n
											ეს ქმედება არ შეიძლება არ იყოს შესრულებული!\n\n
											დარწმუნებული ხართ, რომ გსურთ გადარიცხვის გაუქმება?";

// Redeem Rewards
$lang['redeem_buyx_header']				= "ჯილდოების ცხრილი";
$lang['redeem_buyx_sub_header']			= "კლიენტმა საკმაოდ იაქტიურა იმისათვის, რომ:";
$lang['redeem_header']					= "დაჯილდოება ხელმისაწვდომია";
$lang['redeem_header_alt']				= "გამოაკელით ანგარიშიდან";
$lang['redeem_points_partial_header']	= "თქვენ შეგიძლიათ შეცვალოთ ჩვეულება"; /* points or dollars */
$lang['redeem_points_partial_none']		= "როგორც კი ამ ანგარიშს ექნება ბალანსი."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "ან მონიშნეთ ჯილდოს გამოსყივა";
$lang['redeem_reward_description']		= "ჯილდოს აღწერა";
$lang['redeem_reward_balance_none']		= "ამ ანგარიშზე არსებული მიმდინარე ნაშთი არ არის<br>საკმარისი ისისათვის, რომ მოითხოვოს დაჯილდოების წინასწარი დადგენა.";
$lang['redeem_reward_balance_zero']		= "ამ ანგარიშზე არსებული მიმდინარე ნაშთი არ არი<br>არ არის საკმარისი იმისავის, რომ რაიმდე იქნეს გამოკლებული მისგან.";
$lang['redeem_reward_balances_none']	= "ამ ანგარიშზე არსებული ნაშთები არ არის<br>საკმარისი იმისათვის, რომ მოითხოვოს დაჯილდოება.";

// Reports
$lang['report_audit_title']				= "შეტყობინება გადარიცხვის გაკონტროლების შესახებ ";
$lang['report_audits_all_trans']		= "ყველა გადარიცხვები";
$lang['report_audits_header']			= "ანგარიშების შემოწმება";
$lang['report_audits_redeemed_only']	= "მხოლოდ გამოსყიდვა";
$lang['report_audits_totals']			= "ჯამურად";
$lang['report_balances_header']			= "შეტყობინება კლიენტის ნაშთის შესახებ";
$lang['report_campaigns_included']		= "კამპაანიები შეიცავს ასევე:";
$lang['report_col_1_header']			= "აირჩიეთ შეტყობინება";
$lang['report_col_2_header']			= "აირჩიეთ თარიღის განრიგი";
$lang['report_col_3_header']			= "აირჩიეთ კამპანია(ები)";
$lang['report_date_not_valid']			= "არასწორი თარიღი<br>(Might be a leap year)";
$lang['report_date_mismatch']			= "შეცდომა: საწყისი თარიღი არ შეიძლება<br>იყოს ბოლო თარიღზე გვიანი.";
$lang['report_frequent_header']			= "ხშირი მომხმარებლების შეტყობინება";
$lang['report_frequent_min_trans']		= "გადარიცხვების მინიმუმი რაოდენობა";
$lang['report_none']					= "არც ერთი მომხმარებეი არ შეესაბამება მონაცემებს";
$lang['report_marketing_header']		= "ვაჭრობა";
$lang['report_marketing_new_cust']		= "ახალი მომხმარებლები";
$lang['report_marketing_freq_cust']		= "ხშირი მომხმარებლები";
$lang['report_marketing_freq_or_more']	= /* A given number of */ "გადარიცხვების ან მეტი.";
$lang['report_marketing_include']		= "ასევე შესყიდული გადარიცხვები.";
$lang['report_marketing_miss_dir_1']	= "მომხმარებლები, რომლებმაც მოინახულეს თარიღის განლაგება ზედა კუთხეში,";
$lang['report_marketing_miss_dir_2']	= "და აღარ დაბრუნებულან ამ უკანასკენლი დღეების მანძილზე:";
$lang['report_missing_header']			= "მომხმარებლები, რომლებიც არარ დაბრუდნენ"; /* a number of days.*/
$lang['report_new_customers_header']	= "ახალი მომხმარებლების შეთყობინებები";
$lang['report_new_customers_none']		= "არც ერთი ახალი მომხმარებლი არ შეესაბამება მონაცემებს";
$lang['report_new_customers_range']		= "ახალ მომხმარებლებს შორის"; /* one date and another date */
$lang['report_redeem_one_letter_code']	= "რ";
$lang['report_run_report_button']		= "შეტყობინების უწყება";
$lang['report_no_transactions']			= "ვერ მოიძებნა ვერც ერთი გადარიცხვა";
$lang['report_totals_header']			= "ჯამური შეტყობინებები ანგარიში მართვის შესახებ";

// Report Months
$lang['Jan']							= "იანვარი";
$lang['Feb']							= "ტებერვალი";
$lang['Mar']							= "მარტი";
$lang['Apr']							= "აპრილი";
$lang['May']							= "მაისი";
$lang['Jun']							= "ივნისი";
$lang['Jul']							= "ივლისი";
$lang['Aug']							= "აგვისტო";
$lang['Sep']							= "სექტემბერი";
$lang['Oct']							= "ოქტომბერი";
$lang['Nov']							= "ნოემბერი";
$lang['Dec']							= "დეკემბერი";

// Auto-Generated Emails
$lang['email_activated_header']			= "კამპანია გააქტივირებულია";
$lang['email_activated_sub_header']		= "შემდეგი კამპანია გააქტივირებულია:";
$lang['email_billing_header']			= "ანგარიშის დონის შეცვლა";
$lang['email_billing_from_level']		= "თქვენი ანგარიშის გადასახადის დონე შეცვლილია";
$lang['email_deactivated_header']		= "კამპანია გაუქმებულია";
$lang['email_deactivated_sub_header']	= "შემდეგი კამპანია გაუქმებულია:";
$lang['email_greeting']					= "სალამი"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "შეინახე ეს ინფორმაცია უსაფრთხო ადგილას";
$lang['email_html_callout_url']			= "შესვლის ბმული"; // As in "the internet address where a client can log into the acount management application of StickyStreet."
$lang['email_keep_email_footer_1']		= "გთხოვთ შეინახეთ ეს შეტყობინება თქვენი ჩანაწერებისათვის.";
$lang['email_keep_email_footer_2']		= "ის შეიცავს მნიშვნელოვან ინფორმაციას ანგარისის შესახებ.";
$lang['email_new_account_header']		= "ახალი ანგარიში";
$lang['email_new_account_sub_header']	= "ახალი ანგარიში შეიქმნა.";
$lang['email_html_password_nochange']	= "არავითარი ცვლილება"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "ხაზზე მყოფი მომხმარებელის რეგისტრაცია";
$lang['email_online_register']			= "შემდეგი ხაზზე მყოფი მომხმარებელი დარეგისტრირდა:";
$lang['email_password_header']			= "პაროლის დაბრუნების მოტხოვნა";
$lang['email_password_dir1']			= "თქვენი მოთხოვნა პაროლის დასაბრუნებლად"; /* shows the User ID */
$lang['email_password_dir2']			= "ეს არის:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "თქვენი ანგარიშის ცვლილებები";
$lang['email_update_sub_header']		= "არსებული თქვენი ანგარიშის ინფორმაცია განახლებულია.";
$lang['email_user_id_header']			= "სამომხმარებლო სახელის დაბრუნების მოთხოვნა";
$lang['email_user_id_sub_header_1']		= "თქვენ მოითხოვეთ სამომხმარებლო სახელი, რომელიც კავშირშია თქვენს ელექტრონულ ფოსტასთან:";
$lang['email_user_id_sub_header_2']		= "თქვენ მოითხოვეთ სამომხმარებლო სახელი, რომელიც კავშირშია თქვენს ელექტრონულ ფოსტასთან:"; // Plural


// Bookmarks
$lang['bookmarks_header']				= "Make Auto-Login Bookmarks";
$lang['bookmarks_table_header_1']		= "აირჩიეთ დასამახსოვრებელი გვერდი";
$lang['bookmarks_table_header_2']		= "Choose User to Auto-Login";
$lang['bookmarks_table_header_3']		= "დაიმახსოვრე ბმული";
$lang['bookmarks_link_1']				= "დააჭირეთ მარჟვენა ღილაკს იმისათვის, რომ დაიმახსოვროთRight-Click<br>on this link to<br>set bookmark.";
$lang['bookmarks_link_2']				= "დააჭირეთ წინსვლას იმისათვის, რომ დაიმახსოვროთ ის აქედანClick to go to<br>the page and <br>bookmark it<br>from there.";
$lang['bookmarks_note']					= "შეამოწმეთ ბმულები, რომლებიც უზრუნველყოფილია როგორც პაროლები თქვენს ანგარიშთან.
											ჩვენ გირჩევთ, რომ თქვენ არ გააგზავნოთ რაიმე სწრაფი რეაგირების წერილი ელექტრონული ფოსტით, ამის ნაცვლად შედით სისტემაში თქვენი კომპიუტერიდან, სადაც
											თქვენ გსურთ შეინახოთ და დაამატოთ ბრაუზერის სია.";

// Refer-and-Earn
$lang['refer_balance_header']			= "Amount Earned So Far<br>From Referrals";
$lang['refer_balance_link']				= "ნახეთ თქვენი გაგზავნების ისტორია";
$lang['refer_banner_header']			= "განათავსეთ StickyStreet-ს ბანერი თვქნეს ინტერნეტ გვერდზე:";
$lang['refer_banner_desc']				= "ამ ბანერების გამოყენება თავისუფლად შეიძლება თქვენს ინტერნეტ გვერდზე. აქ გთავაზობთ რამოდენიმე ზომის და ფერების არჩევანს:";
$lang['refer_banner_more_link']			= "მეტი ბანერები..."; // As in "Click here to see more banners."
$lang['refer_banner_more_header']		= "მეტი ბანერები"; // As in "Below you will find more banners."
$lang['refer_banner_more_sub_title']	= "ამ ბანერების გამოყენება თავისუფლად შეიძლება თქვენს ინტერნეტ გვერდზე. აქ გთავაზობთ რამოდენიმე ზომის და ფერების არჩევანს:";
$lang['refer_banner_more_instruct']		= "უბრალოდ დააჭირეთ და გადმოიწერეთ ის თქვენს სამუშაო მაგიდაზე, ან დააჭირეთ მარჟვენა ღილაკს, იმისათვის, რომ შეინახოთ ის იქ სადაც მოისურვებთ.";
$lang['refer_banner_more_title']		= "დადეთ StickyStreet-ის ბანერი თქვენს ინტერნეტ გვერდზე";
$lang['refer_header']					= "გააგზავნეთ და გამოიმუშავეთ";
$lang['refer_link_header']				= "თქვენი მიმართულების ბმული:";
$lang['refer_link_desc']				= "გამოყენეთ ეს ბმული იმისათვის, რომ მომხმარებლები StickyStreet-ის ინტერნეტ გვერდზე გადაიყვანოთ. ეს უნიკალური ბმული გამოავლენს იმ მომხმარებლების რაოდენობას, რომლებიც თვქნე გადააგზავნეთ StickyStreet-ს ინტერნეტ გვერდზე ანგარიშის შესაქმნელად:";
$lang['refer_sub_header']				= "მიმართე StickyStreet-ს და გამოიმუშავე 10 $.";


// Common Error Messages:
$lang['error_email_space']				= "ცარიელი სივრცეები დაუშვებელია ელექტრონულ ფოსტაში.";
$lang['error_email_not_found']			= "ეს ელექტრონული ფოსტა ვერ მოიძებნა.";
$lang['error_email_not_valid']			= "ეს ელექტრონული ფოსტა არ არის სწორი.";
$lang['error_customer_id_empty']		= "თქვენ უნდა შეიყვანოთ მომხმარებლის ანგარიშის სამომხმარებლო სახელი.";
$lang['error_next_page']				= "შემდეგ ფურცელზე გადასვლისას წარმოიშვა პრობლემა. გთხოვთ სცადეთ კიდევ ერთხელ.";
$lang['error_password_empty']			= "თქვენ უნდა აირჩიოთ და შეიყვანოთ პაროლი.";
$lang['error_password_length']			= "თქვენი პაროლი უნდა იყოს 5-დან 20 ასომდე.";
$lang['error_password_not_valid']		= "პაროლი უნდა შედგებოდეს მხოლოდ ასოებისგან, ნომრებისგან, ან აღსაღნიში ხაზისგან(_)";
$lang['error_password2_empty']			= "თქვენ ხელახლა უნდა შეიყვანოთ პაროლი იმისათვის, რომ დარწმუნდეთ<br> რომ ის თავიდანვე სწორად იყო აკრეფილი.";
$lang['error_passwords_no_match']		= "თქვენს მიერ შეყვანილი პაროლები არ ემთხვევა.<br>გთხოვთ ხელახლა დაწერეთ ისინი.";
$lang['error_phone_area_code']			= "გთხოვთ შეიყვანეთ სწორი რაიონული კოდი.";
$lang['error_phone_not_valid']			= "ეს ტელეფონის ნომერი არ არის სწორი.";
$lang['error_service_down']				= "ეს მომსახურეობა დროებით მიუწვდომელია.<br><br>ბოდიშს გიხდით შეფერხებისთვის.";
$lang['error_updating']					= "ინფორმაციის განახლებისას დაფიქსირდა შეცდომა. გთხოვთ კიდევ ერთხელ სცადეთ.";
$lang['error_userid_error']				= "შეცდომა: თქვენს მიერ შეყვანილი სამომხმარებლო სახელი ვერ მოიძებნა.";

// Alt Tags
$lang['alt_add_customer_button']		= "დააჭირეთ აქ იმისათვის, რომ მომხმარებლის ანგარიშები დაუმატოთ ამ კამპანიას";
$lang['alt_account_edit_save']			= "დააჭირეთ აქ იმისათვის, რომ შეინახოთ თქვენს მიერ გაკეთებული ცვლილებები";
$lang['alt_campaign_delete']			= "დააჭირეთ აქ იმისათვის, რომ წშალოთ ეს კამპანია";
$lang['alt_campaign_edit']				= "დააჭირეთ აქ იმისათვის, რომ რედაქტირება გაუწიოთ ამ კამპანიის მონაცემებს";
$lang['alt_campaign_name']				= "დააჭირეთ კამპანიის დასახელებას იმისათვის, რომ მოძებნოთ არსებული მომხმარებლები ან დაამატოტ ახალი მომხმარებლები";
$lang['alt_campaign_new_create']		= "დააჭირეთ აქ იმისათვის, რომ შექმნათ ეს კამპანია";
$lang['alt_campaign_place_on_hold']		= "ეს კამპანია აქტიურია. დააჭირეთ აქ იმისათვის, რომ გადაიყვანოთ მოლოდინის რეჟიმში";
$lang['alt_campaign_re-activate']		= "დააჭირეთ აქ იმისათვის, რომ ხელახლა გაააქტიუროთ ეს კამპანია";
$lang['alt_cancel_changes']				= "დააჭირეთ აქ იმისათვის, რომ გაუქმდეს ყველა ცვლილება და დაბრუნდით წინა ფურცელზე";
$lang['alt_goto_ss']					= "დააჭირეთ ფანჯარას StickyStreet.com-ზე შესასვლელად";
$lang['alt_lookup_customer_button']		= "დააჭირეთ აქ იმისათვის, რომ მოძბნოთ მომხმარებლის ანგარიშები ამ კამპანიაში";
$lang['alt_user_add']					= "დააჭირეთ აქ იმისსათვის, რომ დაამატოთ ახალი მომხმარებელი, რომელსაც ექნება შესაბამისი შესვლის და უფლებამოსილებების სტატუსი";
$lang['alt_user_delete']				= "დააჭირეთ აქ იმისათვის, რომ წაშალოთ ეს მომხმარებელი, იმისათვის, რომ მათ აღარ ქონდეთ ანგარიშში შესვლის უფლება";
$lang['alt_user_edit']					= "დააჭირეთ აქ იმისათვის, რომ რედაქტირება გაუწიოთ ამ მომხმარებლის მონაცემებს";


// Outside / Optional Links
// ------------------------
// Translate this section ONLY if the embeded links have been replicated in the new language:

// Legal Documents
$lang['terms_conditions_location']		= 'terms-conditions.html';

// Edit Preferences: Points Campaign
$lang['edit_points_note_1_graphic']		= '<a href="http://www.stickystreet.com/calculator.php" target="_blank"><img align="right" src="graphics/calculator.gif" width="72" height="80" border="0" vspace="5" hspace="3"></a><span style="color: #666;">';
$lang['calculator_link'] 				= '<a href="http://www.stickystreet.com/calculator.php" target="_blank">';
$lang['edit_points_note_1'] 			= "For some help with figuring out the points needed for an award, use our handy-dandy ".$lang['calculator_link']." points calculator</a>:";

$lang['blog_link_accounting'] 			= '<a href="http://support.stickystreet.com/forums/16257/entries/12598" target="_blank">';
$lang['edit_points_note_2'] 			= "For a discussion on Reward Levels and the accounting / math behind it, check-out ".$lang['blog_link_accounting']."this post</a> in the support forum.";

$lang['edit_str_desc_with_link']		= "The Spend-to-Reward Ratio is one of two ratios that you had to use to figure out the ".$lang['points']." value of your rewards (whether you used the ".$lang['calculator_link'].$lang['Points']." Calculator</a> or not.) If you enter it here, you will turn on the ability to redeem ".$lang['points']." by entering a ".$lang['currency']." value instead:";

// =========================
// ADDITIONAL TRANSLATIONS 1
// =========================

// Single words and labels
$lang['Referrer']							= "ინფორმაციის მიმწოდებელი"; 	// As in a person or entity that sends business your way.
$lang['Comma']								= "Comma";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Deducted']							= "გამოკლებული";	// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Item']								= "საკითხი";		// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Pipe']								= "Pipe";		// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "შესყიდული";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Tab']								= "მიმართულება";		// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Required']							= "საჭირო";	// As in necessary, compulsory. Ex: "The name field is required."
$lang['optional']							= "არასავალდებულო"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";

// Page Titles
$lang['title_managing_cards']			= "მომხმარებლის ჩანაწერების მართვა";
	$lang['importing_customers']		= "კლიენტების იმპორტირება";
	$lang['customers_imported']		= "იმპორტირებული კლიენტები";
	$lang['importing_transactions']	= "გადარიცხვების იმპორტირება";
	$lang['transactions_imported']	= "იმპორტირებული გადარიცხვები";

// Labels
$lang['label_currency']					= "ვალუტა";				// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']		= "ვალუტის სიმბოლო";		// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_language_select']		= "ენის ჩვენება";		// As in a prompt to the user to select a language for the application
$lang['label_localization']			= "ლოკალიზაცია";			// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_timezone']					= "საათობრივი ზონა";

// New Account Screen
$lang['account_language_error']		= "ენის არჩევისას შეცდომა დაფიქსირდა.";
$lang['account_language_note']		= "შენიშვნა: ეს არის ამ ანგარიშის ძირითადი უპირატესი ენა.<br>
													მომხმარებლის ანგარიშის მონაცემების( მომხმარებლის სექციაში ), ან სხვა ენის არჩევა<br>
													შესასვლელ პანელთან  უკუაგდებს ამ მონაცემებს.";
$lang['account_timezone_note']		= "შენიშვნა: ეს არის ამ ანგარიშის ძირითადი უპირატესი საათობრივი ზონა.<br>
													მომხმარებლის ანგარიშის სხვა საათობრივ მონაცემებზე გადასვლა  (მომხმარებლის სექციაში ),<br>
													უკუაგდებს ამ მონაცემებს.";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']					= "კლიენტების და გადარიცხვების იმპორტირება";
$lang['manage_import_customers']				= "კლიენტების იმპორტირება";
$lang['manage_import_transactions']			= "კლიენტის გადარიცხვების იმპორტირება";
$lang['manage_import_no_none']				= "ყველა ველი ცარიელი ვერ გაიგზავნება. აირჩიეთ ერთი ველი მაინც, რომ მოხდეს იმპორტირება.";
$lang['manage_import_duplicate_card']		= "დუბლიკატი ბართი:";
$lang['manage_import_duplicate_found']		= "დუბლირება";
$lang['manage_import_duplicates_found']	= "დუბლირებულები";
$lang['manage_import_successful']			= "წარმატებული იმპორტი";
$lang['manage_import_new_customer']			= "ახალი იმპორტირებული მომხმარებელი";
$lang['manage_import_new_customers']		= "ახალი იმპორტირებული მომხმარებლები";
$lang['manage_import_updated_customer']	= "განახლებული მომხმარებელი";
$lang['manage_import_updated_customers']	= "განახლებული მომხმარებლები";
$lang['manage_import_no_cust_data']			= "კლიენტის არანაირი ცნობები არ იქნა მოცემული იმპორტირებისთვის. გთხოვთ დააკოპირეთ და ჩასვით თქვენი კლიენტის მონაცემები ქვემოთ მითითებულ ყუთში:";
$lang['manage_import_campgn_not_valid']	= "ერთ-ერთი არჩეული კამპანია არასწორია.";
$lang['manage_import_select_1_campaign']	= "იმისათვის, რომ დაამატოთ თქვენი კლიენტები, თქვენ ერთი კამპანია მაინც უნდა აირჩიოთ:";
$lang['manage_import_select_delimiter']	= "გთხოვთ აირჩიეთ ზემოთ მითითებული განმსაზღვრელებიდან ერთ-ერთი.";
$lang['manage_import_new_trasns']			= /* a number */ "ახალი გადარიცხვები ჩაწერილია";
$lang['manage_import_new_account']			= "ახალი მომხმარებელის ანარიში შექმნილია";
$lang['manage_import_new_accounts']			= "ახალი მომხმარებლების ანარიში შექმნილია";
$lang['manage_import_no_cust']				= "არც ერთი მომხმარებელი არ არის იმპირტირებული ან განახლებული";
$lang['manage_import_no_trans']				= "არცერთი გადარიცხვა არ არის ჩაწერილი";
$lang['manage_import_no_trans_data']		= " გადარიცხვების არანაირი ცნობები არ იქნა მოცემული იმპორტირებისთვის. გთხოვთ დააკოპირეთ და ჩასვით თქვენი გადარიცხვების მონაცემები ქვემოთ მითითებულ ყუთში:";
$lang['manage_import_fields_missing']		= "ზოგიერთი აუცილებელი ველი გამოტოვებულია.";
$lang['manage_import_cust_instr_head']		= "<b>კლიენტების სიის იმპორტირება საკმაოდ მარტივია:</b>";
$lang['manage_import_cust_instr_1']			= "<li style=\"padding-bottom: 5px;\">Select the campaign(s) you want those customers to be added to.</li>";
$lang['manage_import_cust_instr_2']			= "<li style=\"padding-bottom: 5px;\">Specify how each column is separated, and in what order.</li>";
$lang['manage_import_cust_instr_3']			= "<li style=\"padding-bottom: 0px;\">Copy-paste your list in the large box, and check the box if you want matching records<br>
													(with the same account id / card #) to be overritten or ignored.</li>";
$lang['manage_import_cust_instr_4']			= "<li>Dates can be in any of the following formats <i>(Years must be in 4-digit format)</i>:<br>
																<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre></li>";
$lang['manage_import_campaigns_list']	= "კამპანიების სია";
$lang['manage_import_add_campaigns']	= "კამპანიებზე დამატება";
$lang['manage_import_field_order']		= "საველე შეკვეთა";
$lang['manage_import_field_delimiter']	= "საველე განმსაზღვრელი";
$lang['manage_import_excel_default']	= "(the default when copy-pasting from MS Excel)";
$lang['manage_import_field_note']		= "<i>ყოველი ველი დამატებითია.</i><br>
												<br>
												Note: If you plan on importing customer<br>
												transactions later, a unique <i>Customer<br>
												Account ID / Card #</i> for each customer is<br>
												required (to then be able to match<br>
												the transactions to customers).";
$lang['manage_import_customer_list']	= "კლიენტების სია";
$lang['manage_import_duplicates']		= "დუბლიკატები?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "ხელახლა დაწერა"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "ჩასვით კლიენტების სია ქვემოთ მითითებულ ყუთში";
$lang['manage_import_trans_instrctns']	= "<b>გადარიცხვების სიის იმპრტირებისათვის ( წინასწარ გადაკეტებული ) :</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">If importing to a Points-Based campaign from <b>CASH transactions</b>, make sure to
													<b><i>convert the cash amount to Points first</i></b>. (In Excel, create a new column, and in it multiply the cash
													transaction amount by the ".$lang['ppd']." ratio set in the campaign's preferences in order to conver to points earned.)
												<li style=\"padding-bottom: 5px;\">In the pull-downs below, specify how each column is separated, and in what order.</li>
												<li style=\"padding-bottom: 5px;\">Make sure that 'Redeemed' transactions have a '<b>Y</b>' in the 'Redeem Event' column and are entered as <b><i>POSITIVE values</i></b>.</li>
												<li style=\"padding-bottom: 5px;\">If you are importing transactions for a '<b>Buy X Get One Free</b>' campaign, make sure to have an '<b>Item Purchased</b>' column selected.</li>
												<li style=\"padding-bottom: 5px;\">If a date is not included, the transaction will be recorded with today's date.<br>
													Dates can be in any of the following formats <i>(Years must be in 4-digit format)</i>:<br>
													<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre></li>
												<li style=\"padding-bottom: 0px;\">Copy-paste your list in the large box below.</li>
											</ol>";
$lang['manage_import_campaign_name']	= "კამპანიის დასახელება";
$lang['manage_import_trans_date']		= "გადარიცხვის თარიღი";
$lang['manage_import_trans_amount']		= "გადარიცხვის რაოდენობა";
$lang['manage_import_redeem_event']		= "ვიზიტის/შემთხვევის შესყიდვა (Y/N)";
$lang['manage_import_req_for_buyx']		= "საჭიროა ( 'იყიდე X და მიიღე ერთი უფასოდ' კამპანიისთვის მხოლოდ )";
$lang['manage_import_item_purchased']	= "შესყიდული პუნქტი";
$lang['manage_import_description_auth']	= "განმარტება/ ავტორი.";
$lang['manage_import_trans_list']		= "გადარიცხვის სია";
$lang['manage_import_paste_trans']		= "ჩასვით კლიენტის გადარიცხვები ქვემოთ მითიტებულ ყუთში";

// Reports
$lang['report_all_customers']				= "ყველა მომხმარებელი";
$lang['report_all_customers_header']	= "ყველა მომხმარებელის შეტყობინება";
$lang['report_all_customers_range']		= "ყველა მომხმარებელს შორის"; /* one date and another date */
$lang['report_balances_header']			= "მომხმარებლის ბალანსების შეტყობინება";
$lang['report_balances']					= "მომხმარებლის ბალანსები";
$lang['report_date_range']					= "მომხმარებლებმა განახორციელეს გადარიცხვები:"; /* a range of dates.*/
$lang['report_search_header']				= "მომხმარებლის ძიების შეტყობინება";
$lang['report_search']						= "მომხმარებლის ძიება:";
$lang['report_search_range']				= "შორის"; /* one date and another date */
$lang['report_search_not_valid']			= "თქვენ უნდა შეიყვანოტ რაიმე მონაცემი ძიებისთვის.";

// Report Exporting
$lang['export_xls']							= "ექსპორტი Excel-ში";

// Users: Common actions:
$lang['user_role_F']							= "შესრულების მოიჯარე";
$lang['user_role_F_desc']					= "კამპანიის შესაძლებლობების ფარგლებში,შეიძლება მხოლოდ კლიენტის ჯილდოების შესყიდვა.";

// Common Error Messages:
$lang['error_language_selector']			= "ენის არჩევისას შეცდომა დაფიქსირდა.";

$lang['side_support_ideas']				= "იდეები კამპანიის შესახებ";
$lang['side_support_ideas_describe']	= "იდეები და სხვადსახვა ხერხები კრეატიული გზების გამონახვისათვის, რაც დაგეხმარებათ ჩვენი პროგრამის გამოყენებაში იმისათვის, რომ მართოთ თქვენი მარკეტინგი, ორგანიზაციული და ქცევის მოდიფიკაციის საჭიროება";

// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================

$lang['error_account_suspended']		= "ეს ანგარიში შეჩერებულია";

// Calculator
$lang['calculator_title']				= "ქულების პორგრამის გამომთვლელი";
$lang['str_ratio']						= "Spend-to-Reward Ratio";  // (same as "edit_str_ratio_sub_header", but without "your")
$lang['check_section_desc']				= "მოდით დავრწმუნდეთ იმაში, რომ თქვენ არ გასცემთ იმაზე მეტს<br>ვიდრე აკეთებთ:";
$lang['Print']							= "ამობეჭდვა";
$lang['column_product_or_pervice']		= "პროდუქტი ან მომსახურეობა";
$lang['column_retail_price'] 			= "პროდუქტის/მომსახურეობის საცალო ფასი";
$lang['column_points_earned'] 			= "ქულები დაგროვებულია კლიენტის მყიდველობითი დონის მიხედვით";
$lang['column_points_needed'] 			= "ქულები, რომლებიც კლიენტს ჭირდება იმისათვის, რომ შეისყიდოს ის როგორც ჯილდო";
$lang['column_cost_to_provide'] 		= "თქვენი გადასახადი პროდუქტის/მომსახურეობის უზრუნველყოფისათვის";
$lang['column_profit_made'] 			= "გაყიდვიდან მიღებული სარგებელი";
$lang['column_profit_made_part2']		= "პროდუქტები<br>ან მომსახურეობები";
$lang['column_cost_reward_perc']		= "გადასახადი ჯილოდისთვის<br>as % სარგებლისთვის.";
$lang['column_cost_reward_smaller']		= "(რაც უფრო მცირეა, მით უკეთესია )";
$lang['instructions']					= "ინსტრუქციები";
$lang['calculator_instructions_1']		= "<strong>1) თქვენმა კლიენტმა უნდა მიიღოს კულები ყოველ დახარჯულ დოლარზე.
											რამდენი ქულა? ეს თვითნებური ციფრია:</strong><br>
											<br>
											რა თქმა უნდა 1 ქულა 1 დოლარისთვის მარტივია. თუმცა, უფრო მარტივი იქნება თქვენი კლიენტებისთვის, რომ გაათვითცნობიერონ
											თუ რამდენი უნდა დახარჯონ მათ თქვენს ბიზნეს-საქმიანობაში როდესაც ისინი აკვირდებიან დაგროვილი ქულების რაოდენობას.
											მართლაც, სულ არ არის იმის საჭიროება, რომ განგაშით შეატყობინოთ მათ, რომ ისინი ისე არიან თვქნე მაღაზიაზე შეყვარებულნი, რომ მთელ თავიანთ ფულს თქვენს დაწესებულებაში ხარჯავენ,
											ასე, რომ იქნებ შემთხვევითი ნომერი, რომელიც ცოტა ართულებს ვითარებას, საკმარისია იმის გამოსათვლელად, რომ ისინი ნამდვილი შოპოგილიკები არიან!
											ჩვენ რეკომენდაციას გიწევთ 100-ზე მაინც თუ თქვენ სათითაოდ აპირებთ თვლას, მაგარამ, ისევ და ისევ შეგახსენებთ, რომ ეს უბრალოდ შეიძლება იყოს 3 ან 5 ან 20, თუ
											თქვენ წინააღმდეგი არ ხართ, რომ ცენტების გარკვეული რაოდენობა დამრგვალდეს მთლიანი ქულების რაოდენობასთან.<br>
											<br>
											<strong>მას შემდეგ რაც აირჩევთ ნომერს, შეიყვანეთ ის <span class=\"orangeH\">ქულები ყოველ დოლარზე</span> ზევით მდებარე ყუთი.</strong><br>";
$lang['calculator_instructions_2']		= "<strong>2) შემდეგი, <i>the Spend to Reward Ratio</i>
											can be thought of as \"რა რაოდენობით უნდა შეიძინოს კლიენტმა პროდუქტი ან ისარგებლოს მომსახურეობით იმისათვის, რომ ჯილდოს თანაბარ რაოდენობას მიაღწიოს?\"</strong><br />
											<br>
											ძირითადად ეს ციფრი მერყეობს 8-ს და 25-ს ან უფრო მეტს შოირს, თუმცა, ეს არის ის რაც ბიზნესს ახასიათებს.
											მაგალითად, ალბათ ბევრჯერ შეგინიშნავთ ყავის მაღაზიების წამახალისებელი შემოთავაზებები, უფასო ყავის ფინჯანი ყოველი მეატე ვიზიტის შემდეგ. რაც უფრო მაღალია ციფრი მით უფრო კონსერვატიულია ის
											თქვენ გათვითცნობიერებულნი ხართ ფინანსურ საკითხებში, მაგრამ ეს ურთულებს გზას თქვენს კლიენტებს იოლი გზა გამონახონ ჯილდოების მოპოვებისათვის.<br>
											<br>
											<strong>შეიყვანეთ ნომერი <span class=\"orangeH\">Spend to Rewards Ratio</span> box,
											და შემდეგ თქვენ თვითონ განსაზღვრეთ ციფრების თამაშის წესები.
											სცადეთ რამოდენიმე ვარიანტი სანამ არ მიიღებთ სასურველ შედეგს.</strong>";
$lang['calculator_disclaimer']			= "<strong>უარყოფა</strong>: ეს
											გამომთვლელი უზრუნველყოფილია მხოლოდ როგორც სარეკომენდაციო საშუალება და ჩვენ ხელს ვუწყობთ
											ჩვენს ბიზნეს-საქმიანობის მფლობელებს კონსულტაცია გაიარონ თავიანთ ფინანსურ მრჩეველბთან სანამ გამოიყენებენ
											ჩვენს მარტივ პროგრამას, რომელიც მათ იოლად მოუტანს შემოსავალს!";

// Transaction Email Content Preferences:
$lang['transaction_email_content']		= "გადარიცხვის ელექტრონული ფოსტა: შინაარსი";
$lang['transaction_email_desc']			= "თუ კლიენტს მითითებული აქვს ელეტქრონული ფოსტა იმ დროს როდესაც თქვენ გადარიცხვას იწერთ, თქვენ შეიგიძლიათ აირჩიოთ ფუქნცია, რომლის საშუალებითაც ელეტქრონული ფოსტა მათ გადაეგზავნებათ.";
$lang['transaction_email_instr']		= "იმისათვის, რომ მართოთ ელექტრონული ფოსტა რომელსაც თქვენ უგზავნით მათ ამ კამპანიისათვის, შეავსეთ და შეცვალეთ ყუთები ელექტრონულ ფოსტაში, რომელიც ქვემოთ არის მითითებული:";
$lang['transaction_email_default']		= "გამდლობთ თქვენი ქომაგობისთვის და იმისათვის, რომ ჩვენ აგვირჩიეთ!";
$lang['transaction_email_incl_balance']	= "ბალანსის ჩამატება";
$lang['transaction_email_incl_rewards']	= "ჩაამატეთ ხელმისაწვდომი ჯილდოები";
$lang['transaction_email_incl_coupon']	= "ჩაამატეთ კუპონი ან წახალისება";
$lang['error_general_permission']		= "შინაარსი არ არის ხელმისაწვდომი.";


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
$lang['report_customer_birthday']						= "Customers with a Birthday in the range above";
$lang['report_customer_birthday_header']				= "Customers Birthday Report";
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
// Never implemented

// =========================
// ADDITIONAL TRANSLATIONS 8
// =========================
// Custom Modifications for PaP Solutions

// =========================
// ADDITIONAL TRANSLATIONS 9
// =========================
// Custom Modifications for Apex Integration

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

$lang['label_PIN_new']				= "New PIN"; // (PIN is a 4 or 5 digit "personal identification number")
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
$lang['manage_undo_warning']		= "Are you sure you want to undo this import?.<br><br>This action CANNOT BE UNDONE!";
$lang['manage_undo_warning_pc']	= "Are you sure you want to undo this import?\n\nThis action CANNOT BE UNDONE!";




// END OF FILE
?>
