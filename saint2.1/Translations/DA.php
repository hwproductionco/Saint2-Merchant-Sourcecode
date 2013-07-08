<?php
/* =======================
   TRANSLATION NOTES
==========================
This is the Danish language file

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

// Default currency values that can be replaced with preferences in the app.
if (!isset($lang['currency'])) {
	$lang['currency']								= "Krone";
}
if (!isset($lang['currency_plural'])) {
	$lang['currency_plural']					= "Kroner";
}
if (!isset($lang['currency_symbol'])) {
	$lang['currency_symbol']					= "kr.";
}
if (!isset($lang['currency_100th'])) {
	$lang['currency_100th']						= "Øre";
}
if (!isset($lang['currency_100th_plural'])) {
	$lang['currency_100th_plural']			= "Øre";
}
if (!isset($lang['currency_100th_symbol'])) {
	$lang['currency_100th_symbol']			= "Øre";
}



// Single words and labels
// (Pay attention to capitalization)
$lang['col_1']							= "1";  		// Header for column 1 of reports and bookmarks sections
$lang['col_2']							= "2";  		// Header for column 2 of reports and bookmarks sections
$lang['col_3']							= "3";  		// Header for column 3 of reports and bookmarks sections
$lang['Account']						= "Konto";  	// Noun: As in "a collection of transactions". Ex: "Click here to view this customer's account."
$lang['Activate']						= "Aktivér";  	// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "Aktivering";	// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "Aktivitet";  	// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "Tilføjet";  	// Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']				= "+";			// The mathematical symbol for addition
$lang['All']							= "Alle";  		// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "Beløb";  	// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "og";  		// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']					= "Autorisation"; // Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "Til rådighed";  // As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "Saldo"; 	// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['Balances']						= "Saldi";	// Plural
$lang['By']								= "Efter"; 		// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "Kampagne";	// As in a marketing campaign, but in this case, really meaning a "program" as in "Loyalty Program",
														// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "Kampagner";	// Plural
$lang['Country']						= "Land";	// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "Kunder";	// As in people who purchase goods or services from the a business that uses the StickyStreet service.
$lang['Date']							= "Dato";		// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "Dage";		// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "Demo";		// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']					= "Beskrivelse"; // Ex: "Provide a description of the transaction in this box:"
$lang['Employee']						= "Ansat";	// As in a person that works for a business or organization.
$lang['Earned']							= "Optjent";		// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "Fejl";		// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "aktivitet";		// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a reward.
$lang['events']							= "aktiviteter";
$lang['Event']							= "Aktivitet";
$lang['Events']							= "Aktiviteter";
$lang['from']							= "fra";		// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "Gratis";		// As if "no need to pay" or "no charge". Ex: "StickyStreet is free when you have 10 or less customers.
$lang['Hello']							= "Hej";		// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "info";		// Short for "information".
$lang['Level']							= "Niveau";		// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "Forpligtelse";	// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']			= "x";			// The mathematical symbol for multiplication
$lang['Need']							= "Behøver";		// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "Ingen";			// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "Ingen";		// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "Bemærk";		// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "Bemærkninger";		// Plural of "Note", above
$lang['Online']							= "Online";		// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "Funktion";  // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['or']								= "eller";			// As in "either", between two alternatives. Ex: "this or that".
$lang['point']							= "point";		// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['Paid']							= "Betalt";		// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['points']							= "points";
$lang['Point']							= "Point";
$lang['Points']							= "Points";
$lang['per']							= "pr.";		// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Purchased']						= "Købt";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Ratio']							= "Forhold";		// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']					= "Noteret af"; // As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "Indløste"; 	// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "Ref"; 		// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Report']							= "Rapport"; 	// As in "Relatory", or "Presentation".
$lang['Reward']							= "Reward"; 	// As in a thing that can be claimed after certain conditions have been met. Ex: "The reward for having 1000 points is a free widget."
$lang['Rewards']						= "Rewards"; 	// Plural
$lang['Role']							= "Rolle";		// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Thank-you']						= "Tak";	// As in "Thank-you for your business" - said by the Client to a Customer.
$lang['Tip']							= "Tip";		// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "til";			// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "At Få"; 	// As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['To_Get_One_Of']					= "At få en af"; 	// As in "to receive" or "to be given" a single quantity. Ex: "You need to buy 10 coffees to get one of [the same] free"
$lang['Trans_ID']						= "Trans. ID"; 	// Short for "Transaction ID" - Referring to an internal StickyStreet number to reference a particular transaction.
$lang['Transaction']					= "Transaktion"; // A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']					= "Transaktioner"; // Plural
$lang['User']							= "Bruger"; 		// As in an employee of the business or organization that can login to use the StickyStreet service.
$lang['Yes']							= "Ja";

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."-".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "Tilføj kampagne";
$lang['title_add_product_service']		= "Tilføj Produkt/Service til";
$lang['title_add_promotion']			= "Tilføj Promotion til";
$lang['title_add_reward']				= "Tilføj Reward til";
$lang['title_add_user']					= "Tilføj Bruger";
$lang['title_amnesia'] 					= "Glemt Login eller Password";
$lang['title_award_reddeem'] 			= "Præmie Indløst";
$lang['title_create_new_account']		= "Opret ny konto";
$lang['title_default']					= "Gave- & Loyalitets Management";
$lang['title_edit_account']				= "Rediger Konto Information";
$lang['title_edit_account_number']		= "Rediger Kontonummer";
$lang['title_edit_campaign']			= "Rediger Indstillinger til";
$lang['title_edit_product_service']		= "Rediger Produkt/Service til";
$lang['title_edit_promotion']			= "Rediger Promotion til";
$lang['title_edit_reward']				= "Rediger Reward til";
$lang['title_edit_user']				= "Rediger Bruger";
$lang['title_find_add']					= "Find eller tilføj konto i";
$lang['title_login'] 					= "Konto Login";
$lang['title_more_r_and_e_banners'] 	= "Flere Henvis-og-Optjen Rewards Bannere";
$lang['title_r_and_e_balance']			= "Din Henvis-og-Optjen Rewards Saldo";
$lang['title_report_all_trans']			= "Alle Transaktioner Rapport";
$lang['title_report_freq_cust']			= "Hyppige Kunder Rapport";
$lang['title_report_miss_cust']			= "Udeblevne Kunder Rapport";
$lang['title_report_new_cust']			= "Nye Kunder Rapport";
$lang['title_report_redeem_trans']		= "Indløste Transaktioner Rapport";
$lang['title_report_totals']			= "Samlet Rapport";
$lang['title_search_result']			= "Søgeresultat";
$lang['title_trans_del']				= "Transaktion Slettet";
$lang['title_trans_rec'] 				= "Transaktion Noteret";
$lang['title_view_account']				= "Se Kontonummer";

// Side Modules
// Module 1
$lang['side_news_header'] 				= "";
$lang['side_news_text']					= "";
// Support Module
$lang['side_support_links']				= "<span style=\"color:#79B216;\">Support</span> Links";
$lang['side_support_desk_describe']		= "Se spørgsmål og svar i vores vidensbase, og indsend support forespørgsler";
// $lang['side_blog_describe']				= "For meddelelser, tips, og meninger se vores"; // ... blog
// $lang['side_support_email_call']		= "Email en support forespørgsel direkte eller ring:";
// $lang['side_support_phone']				= "<span style=\"font-weight: bold;\">866-780-STICKY</span> <span style=\"color: #888; font-size: 80%;\">(7842)</span>";
// $lang['side_loyalty_link_desc']			= "Før dem tilbage til dit site med online tilmelding og online saldo tjek";
// $lang['side_points_calc_desc']			= "Et redskab som hjælper dig med at udregne point niveauer";


// Destinations / Section names
$lang['section_account_control_panel']	= "Konto Kontrol Panel";
$lang['section_account_info_header']	= "Konto Information";
$lang['section_account_login']			= "Konto Login";
$lang['section_account_new']				= "Opret en Konto";
$lang['section_blog']						= "Blog";
$lang['section_campaign_reports']		= "Kampagne Rapporter";
$lang['section_customer_account']		= "Kunde Konto";
$lang['section_loyalty_link_inst']		= "LoyaltyLink Instruktioner";
$lang['section_points_calculator']		= "Point Beregner";
$lang['section_points_promotions']		= "Promotions";
$lang['section_support_desk']				= "Support Desk";

// Labels
$lang['label_account_id']					= "Konto ID";				// Usually, a Client's account identification "code" (An alphanumeric string of 5 to 20 characters)
$lang['label_unique_id']					= "Unikt ID";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']				= "Konto ejer";			// The person who created a StickyStreet account.
$lang['label_additional_info']			= "Yderligere Info";			// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info_user']		= "Yderligere Info";
$lang['label_card']							= "Kortnummer";					// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']							= "By";
$lang['label_date_range']					= "Dato Interval";				// Ex: January 2008 to December 2008
$lang['label_email']							= "Email Adresse";
$lang['label_email_short']					= "Email";
$lang['label_first_name']					= "Fornavn";				// As in "given name". ie: not the one shared by their family.
$lang['label_last_name']					= "Efternavn";				// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_name']							= "Navn";					// The joining of first and last names.
$lang['label_organization']				= "Organisation";			// As in a business, church, school, club, etc.
$lang['label_owner_id']						= "Ejer ID";				// A unique login name that identifies the user as the account owner.
$lang['label_password']						= "Password";
$lang['label_password_new']				= "Nyt Password";
$lang['label_password_retype_short']	= "Indtast Password igen";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "Indtast nyt password igen";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']							= "Telefon";
$lang['label_state']							= "Region";
$lang['label_user_id']						= "Bruger ID";				// A unique login name that allows an employee of a StickyStreet client to access the program.
$lang['label_zip']							= "Postnummer";

// Navigation
$lang['nav_active']						= "Aktiv";			// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "Tilføj";			// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "Slet";			// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']					= "Skift til:";		// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']					= "Deaktiver";  	// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "Trække";  		// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "Slette";			// Verb: As in "remove" or "erase". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']				= "Fravælg Alle";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "Færdig";			// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "Rediger";			// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "Find";			// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "SLUT";			// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "Gå";				// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "Skjul";			// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']					= "Hop til:"; 		// As in changing screens, pages, or location.
$lang['nav_log_in']						= "Log in";			// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "Log ud";			// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "Opslag";			// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "Næste";			// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']					= "Midlertidigt standset";		// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "Print";			// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']				= "Print oversigt";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']				= "Genaktiver";	// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "Noter";			// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "Indløs";			// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "Fjern";			// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "Tilbage";			// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "Vis";			// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']				= "Gem ændringer";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']					= "Vælg Alle";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "Indstil";			// Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "Trin 1";			// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "Trin 2";
$lang['step3']							= "Trin 3";
$lang['step4']							= "Trin 4";

// Login Screen
$lang['login_amnesia_prompt']			= "Har du glemt Bruger ID eller password?";
$lang['login_amnesia_button']			= "Modtag det nu!";
$lang['login_email_missing']			= "Indtast venligst din Konto's emailadresse:";
$lang['login_fancy_1']					= "Konto";
$lang['login_fancy_2']					= "log ind";
$lang['login_new_account_prompt']		= "Har du ikke en konto?";
$lang['login_new_account_button']		= "Sign up nu!";
$lang['login_password_missing']			= "Indtast venligst dit password";
$lang['login_userid_missing']			= "Indtast venligst dit Bruger ID";
$lang['login_wrong_password']			= "Det indtastede password er ikke det rigtige.";
$lang['login_wrong_user_id']			= "Dette bruger ID blev ikke fundet.<br>(Bruger ID er case sensitivt.)";

// Forgot Password / Username section;
$lang['amnesia_header']					= "Har du fået hukommelsestab?";
$lang['amnesia_note_top']				= "Lidt om spamfiltre:";
$lang['amnesia_note_text']				= "Hvis du ikke får en email fra os inden for få minutter, tjek venligst dit spamfilter.
											Emailen kommer fra"; /* StickyStreet or the name of the Agency. */
$lang['amnesia_password_button']		= "Tilsend mit password";
$lang['amnesia_password_dir']			= "Indtast dit Bruger ID nedenfor, så sender vi dit password til den emailadresse vi har registreret i systemet.";
$lang['amnesia_password_header']		= "Har du glemt dit Password?";
$lang['amnesia_password_sent']			= "Super!<br><br>Dit password er sendt til<br>den emailadresse vi har noteret<br>på denne konto.";
$lang['amnesia_return_button']			= "Gå tilbage til log-ind siden";
$lang['amnesia_sub_header']				= "Bare rolig, vi skal nok hjælpe...Kan du huske dit navn?";
$lang['amnesia_user_id_button']			= "Tilsend mit Bruger ID";
$lang['amnesia_user_id_dir']			= "Indtast din emailadresse nedenfor, så sender vi alle tilknyttede Bruger ID:";
$lang['amnesia_user_id_header']			= "Har du glemt dit Bruger ID?";
$lang['amnesia_userid_sent']			= "Super!<br><br>Dit Bruger ID er sendt til<br>den oplyste emailadresse.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "eller færre kunder"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "Du skal indtaste din Organisation."; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "Du skal angive en emailadresse.";
$lang['account_email_needed_2']			= "Det er sådan vi giver besked om konto- og opkrævningsændringer.";
$lang['account_enter_first']			= "Indtast venligst dit fornavn.";
$lang['account_enter_last']				= "Indtast venligst dit efternavn.";
$lang['account_id_empty']				= "Du skal vælge og indtaste  et Konto ID.";
$lang['account_id_exists']				= "Dette konto ID eksisterer allerede.<br>Vælg venligst et andet.";
$lang['account_id_not_valid']			= "Et Konto ID kan kun indeholde bogstaver, tal, eller underscores (_)";
$lang['account_terms_agree']			= "Du skal acceptere Vilkår og Betingelser ved at klikke i boksen ovenover.";
$lang['account_new_create_button']		= "Opret Konto";
$lang['account_new_directions']			= "For at komme i gang skal du blot oprette en konto ved at udfylde nedenstående formular:";
$lang['account_new_end']				= "Det var det!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "Fortæl lidt om dig selv";
$lang['account_new_owner_id']			= "Vælg et Ejer ID";
$lang['account_new_owner_restrict']		= "20 tegn max, ingen mellemrum";
$lang['account_new_owner_user_id']		= "Vælg et Bruger ID";
$lang['account_new_password']			= "Vælg et password til din konto.";
$lang['account_new_password_restrict']	= "5 til 20 tegn, kun bogstaver og tal";
$lang['account_new_phone_dir']			= "Start med '+' hvis du befinder dig uden for USA";
$lang['account_new_step1_greet']		= "Tillykke, du har nu oprettet en ny konto.";
$lang['account_new_step1_dir']			= "Du vil nu blive guidet igennem de følgende fire trin:";
$lang['account_new_step1_1']			= "Oprettelse af en loyalitetskampagne eller et gavekortprogram.";
$lang['account_new_step1_2']			= "Tilpasning til dine behov.";
$lang['account_new_step1_3']			= "Indføre en kunde transaktion.";
$lang['account_new_step1_4']			= "Returnere til konto kontrolpanel.";
$lang['account_referred']				= "Hvis du er blevet henvist, af hvem?";
$lang['account_referred_dir']			= "Navn, organisation, eller henvisningskode.";
$lang['account_referrer_record']		= /* The referred business */ "oprettede en gratis konto.";
$lang['account_terms_conditions_dir']	= "Læs venligst og vælg boksen for at acceptere"; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "Vilkår og Betingelser for brug";
$lang['account_terms_conditions_agree']	= "Jeg accepterer Vilkår og Betingelser for brug";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "Virksomhedsinformation";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= "Adresse:";
$lang['account_label_billing_level']	= "Opkrævningsniveau:";
$lang['account_label_biz_name']			= "Virksomhedens Navn:";
$lang['account_label_biz_address1']		= "Adresse Linie 1";
$lang['account_label_biz_address2']		= "Adresse Linie 2";
$lang['account_label_custom_fee']		= "Aftalt månedsgebyr";
$lang['account_label_customers']		= "Kunder";
$lang['account_label_customers_manage']	= "Håndtér kundedata";
$lang['account_label_free']				= "Gratis"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "Konto Ejer";
$lang['account_label_owner_contact']	= "Ejers Kontaktinfo:";
$lang['account_label_pay_invoices']		= "Se / Betal faktura";
$lang['account_label_per_month']		= "/ måned";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "Ejer Log ind";
$lang['account_password_missing']		= "Password mismatch: Indtast venligt det nye password i begge felter.";
$lang['account_passwords_mismatch']		= "Det nye indtastede password stemmer ikke overens.<br>Indtast det venligst igen i begge felter.";
$lang['account_owner_sec_token']		= "Sikkerheds Token";

// Control Panel
$lang['cp_step_dir_header']				= "Så er du færdig!";
$lang['cp_step_dir']					= "Dette er \"Control Panel\" billedet, hvor du starter når du er logget ind.<br>Her kan du håndtere alle aspekter af din konto";
$lang['cp_campaigns_table_header_1']	= "Kampagne Navn";
$lang['cp_campaigns_table_header_2a']	= "Kampagne";	// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']	= "Kunder";	// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']	= "Kampagne";		// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']	= "Transaktioner";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']	= "Kampagne";	// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']	= "Status";		// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']	= "Kampagne";		// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']	= "Indstillinger";	// This is the bottom line of the english phrase "Campaign Preferences"

// Create / Edit User
$lang['user_campaigns_header']			= "Vælg hvilken kampagne denne bruger skal have tilladelse til:";
$lang['user_campaigns_admins']			= "Administratorer har automatisk adgang til alle kampagner";
$lang['user_edit_header']					= "Rediger bruger:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "Skift password";
$lang['user_edit_password2_label']		= "Indtast venligst password igen";
$lang['user_edit_password_note']			= "For at beholde det samme password, undlad at udfylde disse.";
$lang['user_edit_record_change_card']	= /* The Card # */ "er blevet erstattet af:"; /* a new Card # */
$lang['user_edit_record_change_name']	= "Skift navn";
$lang['user_edit_record_del_card']		= /* The Card # */ "er blevet slettet";
$lang['user_edit_record_new_card']		= "Et nyt kortnummer er blevet tildelt:";
$lang['user_edit_record_change_phone']	= "Telefonnummer skift til";
$lang['user_edit_record_replace_phone']= "Telefonnummer skift fra";
$lang['user_edit_record_to_none']		= "Ingenting"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']	= "Email skift til";
$lang['user_edit_record_replace_email']= "Email skift fra";
$lang['user_edit_record_change_addtl']	= "Yderligere info skiftet til";
$lang['user_edit_record_del_addtl']		= "Yderligere info slettet. Tidligere";
$lang['user_edit_record_replace_addtl']= "Yderligere info skiftet fra";
$lang['user_info_sub_header']				= "Bruger Information";
$lang['user_new_header']					= "Ny Bruger";
$lang['user_new_id_empty']					= "Et Bruger ID er påkrævet for at kunne oprette en ny Bruger.";
$lang['user_new_id_not_valid']			= "Et Bruger ID kan kun indeholde bogstaver, tal eller underscore (_)";
$lang['user_new_id_exists']				= "Det Bruger ID du har valgt eksisterer allerede.<br>Vælg venligst et andet.";
$lang['user_new_no_role']					= "Du skal Vælge en rolle for denne bruger:";
$lang['user_new_password_label']			= "Vælg et password til denne bruger";
$lang['user_new_record_button']			= "Registrer Ny Bruger";
$lang['user_new_user_id_label']			= "Vælg et Bruger ID at logge ind med";
$lang['user_restrict_20_char']			= "Max 20 karakterer";
$lang['user_role_header']					= "Bruger Rolle";
$lang['user_role_directions']				= "Vælg venligst en rolle til denne bruger";

// Users: Common actions:
$lang['user_add_button']				= "Tilføj ny Bruger";
$lang['user_delete_popup']				= "<strong>Denne Bruger vil blive fjernet fra din autoriserede brugerliste og arkiveret.</strong><br>
											Dette Bruger ID kan ikke blive anvendt igen som nyt Bruger ID.<br>
											<br>
											Kontakt os for at genanskaffe en arkiveret Bruger. Nb. Der er gebyr for denne service.<br>
											<br>
											<strong>Er du sikker på at du vil fjerne denne bruger?</strong>";
$lang['user_delete_popup_pc']			= "Denne Bruger vil blive fjernet fra din autoriserede brugerliste og arkiveret.\n\n
											Dette Bruger ID kan ikke blive anvendt igen som nyt Bruger ID.\n\n
											Kontakt os for at genanskaffe en arkiveret Bruger. Nb. Der er gebyr for denne service.\n\n
											Er du sikker på at du vil fjerne denne bruger?";
$lang['user_header']					= "Administrer autoriserede brugere og deres adgange";
$lang['user_list_none']					= "Ingen yderligere brugere er tilføjet endnu.";
$lang['user_role_A']					= "Administrator";
$lang['user_role_A_desc']				= "Har adgang til alt.";
$lang['user_role_C']					= "Revisor";
$lang['user_role_C_desc']				= "Kan generere rapporter, se opkrævningsinfo og kampagneindstillinger, men kan ikke se bruger og kunde info.";
$lang['user_role_K']					= "Ekspedient";
$lang['user_role_K_desc']				= "Kan oprette og ændre kundeinfo (men kan ikke ændre deres kortnummer, hvis det er valgt) inden for tilladte kampagner. Kan registrere og indløse kundebesøg (kan kan ikke slette)";
$lang['user_role_M']					= "Manager";
$lang['user_role_M_desc']				= "Har adgang til alt indenfor tilladte kampagner, men har begrænset adgang til kontooplysningsindstillinger. (Kan se opkrævningsinfo, kan generere rapporter og kan tilføje eller rette, men ikke slette brugere af en konto.)";
$lang['user_role_N']					= "Kampagne Manager";
$lang['user_role_N_desc']				= "Har adgang til alt inden for tilladte kampagner, men har begrænset adgang til kontooplysningsindstillinger.(Kan generere rapporter, kan ikke se opkrævningsinfo, kan ikke administrere brugere, kan ikke oprette eller slettet kampagner.)";
$lang['user_role_O']					= "Observatør";
$lang['user_role_O_desc']				= "Kan se bruger- og kundeinfo og visse kampagneindstillinger(rewards og promotions.)";
$lang['user_role_P']					= "Vikar";
$lang['user_role_P_desc']				= "Kan inden for tilladte kampagner oprette nye kunder og kan kun registrere kundebesøg.";
$lang['user_role_S']					= "Associate Manager";
$lang['user_role_S_desc']				= "Kan administrere rewards og promotions indenfor tilladte kampagner, og kan administrere alle aspekter af kundeinformation og kundebesøg.";

// Create New Campaign
$lang['campaign_new_create_button']		= "Opret kampagne";
$lang['campaign_new_created_header']	= "Ny kampagne er oprettet";
$lang['campaign_new_created_msg']		= "<b>Tillykke.</b><br>
											<br>
											Du har nu oprettet en ny kampagne.<br>
											<br>
											Derefter skal du tilpasse kampagneindstillingerne<br>
											så de passer til din forretningsmodel:";
$lang['campaign_new_created_prefs']		= "Lad mig se det";
$lang['campaign_new_created_back_cp']	= "Returner til Konto Kontrol Panel";
$lang['campaign_new_empty']				= "Du skal indtaste et Kampagne Navn:";
$lang['campaign_new_exists']			= "Det kampagne ID du har indtastet findes allerede.<br>Vælg venligst et andet kampagne ID";
$lang['campaign_new_header']			= "Ny kampagne";
$lang['campaign_new_name']				= "Nu skal du vælge et kampagnenavn:";
$lang['campaign_new_name_restrict']		= "(Max. 30 karakterer inkl. mellemrum)";
$lang['campaign_new_step_dir']			= "Opret din første kampagne:";
$lang['campaign_new_sub_header']		= "Vælg kampagnetype:";
$lang['campaign_new_type_empty']		= "Du skal vælge en kampagnetype:";
$lang['campaign_new_buyx_desc']			= "Fungerer på samme måde som det fysiske stempelpapkort den erstatter, blot meget mere fleksibel.
Med denne kampagne type kan du give point eller rabatter til dine kunder baseret på antallet af køb de foretager. Fungerer godt til kaffebarer
eller hvilken som helst butik der har et begrænset varesortiment. (F.eks. køb 10 og få den næste gratis. Du kan oprette lige så
mange &quot;køb X og få den næste gratis&quot; som du vil). Denne kampagne type ses ofte som et papirkort med et antal af felter der skal
stemples efterhånden som kunden foretager sine køb. Denne kampagne type gør det samme, men uden at du behøver at printe kort (eller
håndtere bortkomne kort etc.)
						En anden stor fordel er, at du kan se hvor mange kunder der er tilmeldt programmet samtidig med at du kan trække marketing rapporter
						om kundernes brug.
						Du kan tilknytte præcis det antal enheder der skal til for at udløse et &quot;gratis&quot; køb. Et eksempel:10 gange klip,
						og så er 11 gang gratis. Køb fire gange kage og så den 5. gratis. Du kan også oprette et standard tal X der viser hvor
						mange køb der skal til før den næste er gratis.";
$lang['campaign_new_earn_event_desc']	= "En hybrid mellem et gavekort og en eventbaseret kampagne: Giv rabat (eller kontantudbetaling) for hver event kunden foretager (butiksbesøg, henvisning, etc.) Rabatten kan efterfølgende bruges på produkter eller services du opretter.<br>
											<br>
											<b>Med denne type loyalitetsprogram kan du:</b><br>
											<li>Tildele et antal ".$lang['currency_plural']." som hvert besøg eller event skal give</li>
											<li>Indløse et beløb fra den akkumulerede saldo, præcis som på et gavekort</li>
											<br>
											<b>Et par eksempler</b>:
											<li>Henvisningskampagner: beløn kunder, hotel concierger, receptionister i store virksomheder, for at skaffe
											kunder til din forretning.</li>
											<li>Betal en medarbejder eller ansat for et job der skal gentages mange gange.</li>
											<li>Beløn VIP kunder med 'matador penge' som kun kan bruges i din forretning.</li>
											<li>Giv ungerne belønning for hushjælp.</li>";
$lang['campaign_new_event-based_desc']	= "Her kan du definere rewards baseret på antallet af interaktioner kunderne har med
											din forretning, fremfor penge de har brugt.<br>
											<br>
											Det bliver ofte brugt som kundehenvisningskampagne: En butik giver et par kort som alle er stemplet med det
											samme nummber til en af sine kunder, en concierge på et hotel eller en receptionist i en stor virksomhed.
											Når en ny kunde kommer og giver dig et af disse kort bliver din <i>ambassadør</i>
											belønnet med et 'besøg' på sin konto. Efter f.eks. 5 'besøg' kan de modtage en gratis
											service eller gave. Du får nye kunder. Alle vinder.<br>
											<br>
											Dette er blot et scenarie, men der findes rigtig mange kreative måder du kan bruge dette program på.<br>
											<br>
											Med et Event-baseret Based program kan du:<br>
											<br>
											<b>Tildele et antal af reward niveauer. For eksempel:</b><br>
											<li>Akkumulere 5 events få 10% i rabat</li>
											<li>Akkumulere 10 besøg få 50% i rabat</li>
											<li>Akkumulere 20 henvisninger modtage en gratis services</li>
											<br>
											<b>Nogle eksempler:</b><br>
											<li>Henvisningskampagner som beskrevet ovensfor.</li>
											<li>Fitnesscentre der måler antallet af gengangere. </li>
											<li>Produktreparationer indtil produktet skal erstattes af et nyt. </li>
											<li>VIP klub brug. </li>
											<li>etc... </li>";
$lang['campaign_new_gift_card_desc']	= "En gavekortskampagne der gør dig i stand til at indsætte penge på en kundes konto, og trække dem igen, når kortet bliver brugt som betalingsmiddel.<br>
											<br>
											Simpelt og ligetil. Det bliver ofte brugt sammen med plastikkort, hvor kortet bliver 'optanket' med
											et angivet med et beløb. Kortet kan derefter bruges som gavekort eller som et forudbetalt debitkort.<br>
											<br>
											<b>Plastikkort kan sagtens undværes</b>, programmet kan benyttes til at holde styr på flere konti med
											<i>oparbejdet saldo</i>, som f.eks. barregninginger, afbetalingsplaner, ungernes lommepenge... din fantasi er den eneste begrænsning.";
$lang['campaign_new_points_desc']		= "Dine kunder akkumulerer points baseret på deres køb, betalinger eller promotions som du definerer.
											Points herefter indløses baseret på kunde reward niveauer.<br>
											<br>
											Med et point program, som flyselskabernes 'fly point/miles' programmer, kan du:<br>
											<br>
											<b>Tildele et bestemt antal points forbrugt".$lang['currency_plural']."For eksempel:</b><br>
											<li>5 points for hver ".$lang['currency']."</li>
											<li>.25 points pr. ".$lang['currency']."</li>
											<br>
											<b>Definere Reward niveauer. Et par eksempler:</b><br>
											<li>1.000 points: 50% rabat på næste køb</li>
											<li>5.000 points: Gratis Widget</li>
											<li>100.000 points: TUr til Disneyland.</li>
											<br>
											<b>Definer promotions. Nogle eksempler:</b><br>
											<li>Doble-point tirsdag</li>
											<li>Ekstra 500 point hvis du bestiller nu</li>
											<li>25% Bonus points ved brug af gavekort.</li>
											<br>
											Derudover kan du definere en forbrug-til-reward ratio der gør dig i stand til at indløse points ved at bruge en ".$lang['currency']." værdi.";
$lang['campaign_new_name_desc']			= "Hvis du opretter din første kampagne anbefaler vi at du giver en et navn der starter med 'Test' mens du tjekker systemet ud --
											oprette lige så mange kampagner som du ønsker. Du kan selvfølgelig også pause eller slette uønskede kampagner.<br>
											<br>
											Generelt er det en god ide at bruge dit virksomhedsnavn, hvis det er kort, eller en 'ordleg' baseret på dit virksomhedsnavn. Et par navneeksempler:<br>
											<li><b>AJAX Rewards</b></li>
											<li><b>Club Red</b> (Til en cafe og natklub med navnet 'Red')</li>
											<li><b>Roasters</b> (Til en kaffebar henvendt til motorcyklister)</li>
											<li><b>Party Points</b> (Til en selskabsmadsleverandør)</li>";

// Campaigns: Common actions:
$lang['campaign_add_new']				= "Opret en ny kampagne";
$lang['campaign_delete_popup']			= "<strong>Denne kampagne vil blive slettet fra din kampagneliste og arkiveret.</strong><br>
											Dette kampagnenavn kan ikke anvendes igen til en ny kampagne.<br>
											<br>
											Hvis du skal have adgang til en arkiveret kampagne skal du kontakte os. Der vil være et gebyr for denne service.<br>
											<br>
											<strong>Er du sikker på et du vil fjerne denne kampagne?</strong>";
$lang['campaign_delete_popup_pc']		= "Denne kampagne vil blive slettet fra din kampagneliste og arkiveret.\n\n
											Dette kampagnenavn kan ikke senere anvendes igen som navnet på en ny kampagne.\n\n
											For at hente en arkiveret kampagne skal du kontakte os. Der vil være et gebyr for denne service.\n\n
											Er du sikker på at du vil fjerne denne kampagne?";
$lang['campaign_hide_on_hold']			= "SKjul midlertidigt standsede kampagner";
$lang['campaign_none_yet']				= "For at komme i gang skal du oprette en kampagne (gavekort- eller loyalitetsprogram)<br>
											ved at klikke på Tilføj ny kampagne knappen nedenfor.";

$lang['campaign_type_buyx']				= "Køb X Få 1 gratis Program";
$lang['campaign_type_earn_per_event']	= "Tjen penge pr. event Program";
$lang['campaign_type_event-based']		= "Eventbaseret Program";
$lang['campaign_type_gift_cards']		= "Gavekort Program";
$lang['campaign_type_points']			= "Point Program";
$lang['campaign_view_on_hold']			= "Se midlertidigt standsede kampagner";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']				= "Tilføj et reward-niveau";
$lang['edit_reward_add_another']		= "Tilføj et nyt reward-niveau";
$lang['edit_reward_desc_empty']			= "Du skal angive en beskrivelse af reward-niveauet.";
$lang['edit_reward_level_header']		= "Rediger Reward-niveau";
$lang['edit_reward_header']				= "Reward-niveauer";
$lang['edit_reward_none']				= "Ingen Rewards er pt. defineret";
$lang['edit_reward_table_header']		= "Reward beskrivelse";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "Dette forhold (ratio) kan ændres når det skal være, men kundernes optjente ".$lang['points']." vil ikke ændre sig.";
$lang['edit_points_desc']				= "Dette er et vilkårligt tal og kan blot være et eller andet der giver mening for dig. For eksempel:";
$lang['edit_points_desc_header']		= $lang['Points']." optjent for hver brugt ".$lang['currency']." ";
$lang['edit_points_empty']				= "Du skal indtaste et antal ".$lang['points']." der er påkrævet for at udløse reward-niveauet.";
$lang['edit_points_examples_header']	= "Nogle eksempler på point-baserede rewards:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "20% Rabat";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "Supplerende basis manicure";
$lang['edit_points_ex_3_amount']		= "750";
$lang['edit_points_ex_3_desc']			= "Ekstra overnatning uden ekstrabetaling";
$lang['edit_points_ex_4_amount']		= "1000";
$lang['edit_points_ex_4_desc']			= "Gratis 300 ml. shampoo";
$lang['edit_points_ex_5_amount']		= "20";
$lang['edit_points_ex_5_desc']			= "10kg gratis kattefoder";
$lang['edit_points_ex_6_amount']		= "15,000";
$lang['edit_points_ex_6_desc']			= "VIP Club Niveau";
$lang['edit_points_ex_7_amount']		= "160";
$lang['edit_points_ex_7_desc']			= "Vælg dine egne pladser";
$lang['edit_points_ex_8_amount']		= "100,000";
$lang['edit_points_ex_8_desc']			= "Ekstra tur til Disneyland";
$lang['edit_points_not_valid']			= "Antallet af ".$lang['points']." skal være et tal.";
$lang['edit_points_profit_ratio_error']	= "Du skal indtaste en positiv værdi højere end 0. Spring over for at slå funktionen fra.";
$lang['edit_points_step_dir']			= "Indstil settings for din ".$lang['Points']." kampagne:";
$lang['edit_points_table_header']		= "Beskrivelse af den optjente reward når<br> det angive antal af ".$lang['points']." er opnået.";
$lang['edit_points_too_small']			= "Du skal indtaste en værdi på mindst ".$lang['point'].".";

$lang['edit_promo_table_header']		= "Promotion beskrivelse";
$lang['edit_promo_none']				= "Ingen Promotions er pt. defineret";
$lang['edit_promo_add']					= "Tilføj en Promotion";
$lang['edit_promo_add_another']			= "Tilføj en ny Promotion";
$lang['edit_promo_desc']				= "Promotions modificerer måden ".$lang['points']." er optjent. DU kan have promotions tilføjet eller fratrukket et specifikt antal ".$lang['points'].", eller multiplicere med et angivet antal, når en transaktion er noteret. Se eksemplerne nedenfor:";
$lang['edit_promo_edit_header']			= "Rediger Promotion";
$lang['edit_promo_edit_error_header']	= "Du skal indtaste et tal at multiplicere antallet af optjente ".$lang['points']." med.<br>For eksempel:";
$lang['edit_promo_edit_error_add']		= "Du skal indtaste et antal".$lang['points']." som tilføjes til de allerede eksisterende. For eksempel, \"500\" vil tilføje 500 points til antallet af ".$lang['points']." som er optjent. \"-100\" vil fratrække 100 ".$lang['points']." fra de allerede optjente (ned til 0, kan ikke blive negativ.)";
$lang['edit_promo_edit_error_multi']	= "The amount to multiply the ".$lang['points']." by must be a number.";
$lang['edit_promo_edit_error_not_valid']= "The number of points to add must be a number.";
$lang['edit_promo_edit_ex_1']			= "2 vil gange antallet af optjente points med 2.";
$lang['edit_promo_edit_ex_2']			= ".5 vil halvere dem.";
$lang['edit_promo_edit_ex_3']			= "1.1 vil tilføje 10% flere points.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "Tilføj 500 ".$lang['points']." for en henvisning";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']." Bonus for at blive medlem";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "træk 50 ".$lang['points']." for at komme for sent";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "VIP level: Gang antallet af optjente ".$lang['points']." med 2";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "få 50% ekstra ".$lang['points']." på tirsdage";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "Guld medlemmer: 25% flere ".$lang['points'];
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "for 25% færre ".$lang['points'];
$lang['edit_promo_name_empty']			= "Du skal angive et navn til denne promotion";
$lang['edit_promo_note_1']				= /*(Addtion Operation)*/ "Promotions kan selv registreres fremover: vælg promotion og klik på "; /* ("record button") */
$lang['edit_promo_note_2']				= /*(Multiplication Operation)*/ "Promotions vil ikke fremover kunne registreres selv: En en købspris er påkrævet.";
$lang['edit_promo_table_header_1']		= "Gang<br>eller tilføj";
$lang['edit_promo_table_header_2']		= "med hvor meget";
$lang['edit_promo_table_header_3']		= "Promotion ID";

$lang['edit_str_header']				= "Valgfrit: Mulighed for at indtaste ".$lang['currency']." der skal til for at indløse points";
$lang['edit_str_desc']					= "Forbrug-til-Reward Ratio er en af to ratios du skulle bruge til at udregne reward værdien af dine ".$lang['points'].". Hvis du indtaster den her, vil du aktivere evnen til at indløse ".$lang['points']." ved at indtaste et ".$lang['currency']." beløb istedet:";
$lang['edit_str_ratio_header']			= "Mulighed for at indtaste ".$lang['currency']." beløb<br>for at indløse points:";
$lang['edit_str_ratio_on']				= "Aktiv";	// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']				= "Deaktiveret";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_ratio_sub_header']		= "Din forbrug-til-reward ratio:";
$lang['edit_str_ratio_not_set']			= "Ikke indstillet";
$lang['edit_str_example_header']		= "For eksempel:";
$lang['edit_str_example_1']				= "En kunde vil købe en vare der koster 100 ".$lang['currency_symbol']." og hun har 1.000 ".$lang['points']." optjent. Hun spørger om hun kan betale delvist for varen med sine ".$lang['points'];
$lang['edit_str_example_1_desc']		= "Så når du indtaster denne Forbrug-til-Reward Ratio ovenfor, <b>kan programmet automatisk udregne hvor meget disse ".$lang['points']." er værd</b>. I behøver derfor ikke at huske på besværlige reward skemaer eller bruge en lommeregner.";
$lang['edit_str_example_math_show']		= "Klik her for at se udregningen.";
$lang['edit_str_example_math_hide']		= "ADRR BVADR! Gem den udregning!";
$lang['edit_str_example_math']			= "Lad os antage at du har angivet en ".$lang['ppd']." ratio
											på 5 og en forbrug-til-Reward Ratio på 20. Så bliver:<br>
											1000 ".$lang['points']." / 5 ".$lang['ppd']." / Forbrug-til-Reward Ratio på 20 = ".$lang['currency_symbol']."10<br>
											<br>
											En anden måde at anskue det på er at $10 x 5 ".$lang['ppd']." = 50 ".$lang['points'].", og med
											en forbrug-til-Reward Ratio på 20, har du brug for 20 x 50 ".$lang['points']." (1000 ".$lang['points'].") for at kunne indløse ".$lang['currency_symbol']."10.";
$lang['edit_str_example_math_height']	= "90";	// Dette er højden i pixels på den sektion udregningen vises i.
												// If the translation of the section above requires more room, increase that number accordingly.
$lang['edit_str_note_1']				= "For at slå muligheden fra for at indtaste ".$lang['currency']." værdier til at indløse ".$lang['points'].", fjern forbrug-til-reward ratio (Efterlad blank) og tryk"; /*(Set button)*/
$lang['edit_str_note_2']				= "Du kan til en hver tid ændre på din forbrug-til-rewards ratio, men dine reward niveauer vil ikke ændre sig automatisk.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "DU skal indtaste et antal events der er påkrævet for at modtaget en reward.";
$lang['edit_visits_not_valid']			= "Antallet af events skal være et tal.";
$lang['edit_visits_step_dir']			= "Indstil nogle reward niveauer til din eventbaserede kampagne:";
$lang['edit_visits_table_header']		= "Antallet<br>af Events";
$lang['edit_visits_table_header_2']		= "Beskrivelse af den opnåede reward når<br>det angivede antal af events er nået.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "Du skal indtaste en værdi på mindst 1".$lang['currency_100th_symbol']." (0.01)";
$lang['edit_dpv_heading']				= "Reward indstilling";
$lang['edit_dpv_label']					= $lang['currency_plural']." optjent pr. event:";
$lang['edit_dpv_label_ending']			= "pr. event.";
$lang['edit_dpv_note_1']				= "Dette antal kan ændres når som helst, men kundernes eksisterende optjente ".$lang['currency']." vil ikke ændre sig.";
$lang['edit_dpv_step_dir']				= "Indstil din kampagnes indtjeningsniveau:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "Antallet af services eller produkter skal være mindst 1<br>10 er det anbefalede valg.";
$lang['edit_buyx_header']				= "Køb X og få en gratis promotions";
$lang['edit_buyx_item_empty']			= "Du skal indtaste et produkt- eller servicenavn eller beskrivelse.";
$lang['edit_buyx_item_header']			= /* Add or Edit */ "et produkt eller en service";
$lang['edit_buyx_item_table_header_1']	= "Service, Produkt, eller Kategori";
$lang['edit_buyx_item_table_header_2']	= "Hvor mange indtil<br>Den næste er gratis";
$lang['edit_buyx_none']					= "Ingen service eller produkt er defineret.";
$lang['edit_buyx_step_dir']				= "Indstil din kampagnes reward niveauer:";
$lang['edit_buyx_table_header_1']		= "Produkt, service, eller kategori";
$lang['edit_buyx_table_header_2']		= "Antal indtil<br>Den næste er gratis";
$lang['edit_buyx_add_another']			= "Tilføj endnu en service eller produkt";
$lang['edit_buyx_add']					= "Tilføj en service eller et produkt";
$lang['edit_buyx_default_header']		= "Standard antal af services eller produkter indtil den næste er gratis";
$lang['edit_buyx_default_label']		= "Standard for nye services / produkter:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "Indstil dine kampagneindstillinger reward niveauer:";
$lang['edit_giftcard_no_settings']		= "Gavekortskampagner har ikke nogle settings eller reward niveuaer der skal indstilles.<br>(Hey, det var nemt!)";

// Common Customer Content
$lang['customer_account_activated']		= "Konto aktiveret";
$lang['customer_add_tab']				= "Tilføj en kunde";
$lang['customer_lookup_tab']			= "Slå en kunde op";
$lang['customer_id_not_exist']			= "Kunde konto ID eksisterer ikke.";
$lang['customer_id_missing']			= "Ingen kundekonto ID blev indtastet.";
$lang['customer_tip_1']					= "Hvis du at du kan bruge en stregkode scanner eller en kortlæser til at indtaste kundens kortnummer?";
$lang['customer_tip_2']					= "Vælg denne side som bogmærke ved at benytte bogmærke generatorern nederst på"; /* Account Control Panel screen */
$lang['customer_last_activity']			= "Seneste aktivitet";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "Fejl: Kan ikke slette kortet.";
$lang['manage_cards_find_by_date']		= "Dato for seneste aktivitet";
$lang['manage_cards_find_by_header']	= "eller vis en liste med ALLE kunder:";
$lang['manage_cards_find_directions']	= "Udfyld hvilket som helst af felterne nedenfor:";
$lang['manage_cards_find_header']		= "Find en kunde:";
$lang['manage_cards_find_none']			= "Ingen data matcher din forespørgsel.";
$lang['manage_cards_find_note']			= "Dette kan tage et par minutter hvis du har mere end 1.000 kunder eller har en langsom forbindelse til internettet.";
$lang['manage_cards_header']			= "Håndter kundedata";
$lang['manage_cards_list_header']		= "Kundekonto liste";
$lang['manage_cards_not_exist']			= "Denne kunde eksisterer ikke.";
$lang['manage_cards_cust_deleted']		= "Denne kunde er blevet slettet.";
$lang['manage_cards_popup_warning']		= "Dette vil slette kundens information og ALLE TRANSAKTIONER<br>
											i alle kampagner denne kunde har benyttet sig af.<br><br>
											Derudover, <strong>vil rapporter ikke længere afspejle nogen tidligere aktivitet for denne konto</strong>.<br><br>
											Denne handling kan IKKE FORTRYDES!<br><br>
											Er du sikker på at du vil slette denne kunde?";
$lang['manage_cards_popup_warning_pc']	= "Dette vil slette kundens informationer samt ALLE KUNDENS TRANSAKTIONER\n
											i alle kampagner denne kunde har benyttet sig af.\n\n
											Derudover vil rapporter ikke længere afspejle nogen tidligere aktivitet for denne konto.\n\n
											Denne handling kan IKKE FORTRYDES!\n\n
											Er du sikker på at du vil slette denne kunde?";

// Create New Customer Account
$lang['customer_new_card_desc']			= "Et unikt kortnummer eller <i>Kundekonto ID</i> er er nødvendigt for at blive i stand<br>til at tjekke deres saldo på din hjemmeside.";
$lang['customer_new_create_button']		= "Opret Kundekonto";
$lang['customer_new_demo_phone']		= "55 55 55 55";
$lang['customer_new_demo_email']		= "demo@email.com";
$lang['customer_new_demo_addtl_info']	= "Yderligere informationer kan udfyldes her.";
$lang['customer_new_id_exists']			= "Det kundekonto ID du har indtastet findes allerede i systemet.";
$lang['customer_new_id_match']			= "Følgende konto matcher"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "Dette er ikke et gyldigt kundekonto ID.";
$lang['customer_new_exists']			= "Den angivne information matcher en eksisterende kunde.";
$lang['customer_new_header']			= "Opret ny kundekonto";
$lang['customer_new_multiple_matches']	= "Disse konti matcher nogle af de informationer du har angivet:";
$lang['customer_new_other_campaigns']	= "Andre kampagne du kan <br>tilføje kunder til:";
$lang['customer_new_random_id']			= "Generer et tilfældigt nummer";
$lang['customer_new_steps_header']		= "Opret en prøve kundekonto:";
$lang['customer_new_steps_dir']			= "En kundekonto kan identificeres med en unik identifier, som f.eks. et telefonnummer, email,
											stregkode, eller alt andet der er unikt for denne kunde. Du er velkommen til at bruge en testkonto
											som f.eks. '11111' indtil videre; Du kan altid slette denne konto senere.";
$lang['customer_new_not_allowed']		= "Du har ikke rettigheder til at oprettet nye kundedata.";

// Lookup Customer Account
$lang['customer_activity_header']		= "Konto aktivitet";
$lang['customer_activity_none']			= "Denne konto har ingen aktivitet.";
$lang['customer_activity_print_short']	= "Seneste transaktion"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "Nuværende saldo:";
$lang['customer_lookup_balances_none']	= "Ingen saldi";
$lang['customer_lookup_button']			= "Find kunde";
$lang['customer_lookup_header']			= "Find en kundes konto";
$lang['customer_lookup_instructions']	= "Indtast nogle af kundens informationer:";
$lang['customer_lookup_multiple_match']	= "Følgende data matcher din søgning";
$lang['customer_lookup_multiple_view']	= "Se kontodetaljer";
$lang['customer_lookup_no_match_add']	= "Ingen matchende data er fundet. Du kan oprette en ny konto nedenfor";
$lang['customer_lookup_no_match']		= "Ingen kunder i denne kampagne matcher din forespørgsel.";
$lang['customer_lookup_not_allowed']	= "Du har ikke tilladelse til at se individuelle kundedata.";
$lang['customer_lookup_steps_header']	= "Tilføj eller indløs transaktioner.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "Tilføj kunder til andre kampagner:";
$lang['customer_edit_campaigns_note']	= "Ved at tilføje en kunde til andre kampagner får du mulighed for at søge efter dem ved at bruge delvise søgninger på hvilket
							som helst af deres kontoinformation. Ellers kan du søge på deres kortnummer, Konto ID, eller bruge
							pull-down menuen i øverste højre hjørne for at skifte fra kampagne til kampagne indenfor en kundes data.";
$lang['customer_edit_header']			= "Rediger Kontoinformation";
$lang['customer_edit_random_number']	= "Generer tilfældigt nummer";
$lang['customer_edit_sub_header']		= "Alle felter er valgfrie.";
$lang['customer_edit_activity_header']	= "Information om aktivitet på Kundekonti";

// Record Customer Transactions
$lang['transaction_add_button']			= "Tilføj til konto";
$lang['transaction_amount_not_valid']	= "TRANSAKTIONs FEJL:<br>Enhed ".$lang['currency']." Det indtastede beløb er ikke gyldigt";
$lang['transaction_amount_too_samll']	= "TRANSAKTIONS FEJL:<br>Enhed ".$lang['currency']." Det indtastede beløb skal være minimum 0.01";
$lang['transaction_new_gc_header']		= "Tilføj til konto";
$lang['transaction_new_header']			= "Ny aktivitet";
$lang['transaction_no_amount']			= "TRANSAKTIONs FEJL:<br>Du skal indtaste enten et ".$lang['currency']." beløb<br>eller vælge en salgsfremmende foranstaltning (promotion).";
$lang['transaction_promo_not_valid']	= "TRANSAKTIONS FEJL:<br>Du skal indtaste en købspris<br>for at kunne bruge denne promotion.";
$lang['transaction_promos_label']		= "Vælg en salgsfremmende foranstaltning (promotion):";
$lang['transaction_purchase_label']		= "Indtast total købspris:";
$lang['send_email']						= "Send Email?";
$lang['transactions_buyx_none']			= "Ingen services eller produkter er defineret.";
$lang['transactions_buyx_none_dir']		= "Returner til kontrolpanelet for at editere indstillingerne.";
$lang['transactions_visit_credited']	= "1 Event oprettet";
$lang['transactions_visit_redeemed']	= "Events indløst";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "Fejl. Fik ikke slettet transaktionen. Prøvvenligst igen.";
$lang['transaction_delete_popup']		= "<strong>Dette vil slette transaktionen permanent.</strong><br><br>
											Denne handling kan ikke fortrydes!<br><br>
											Er du sikker på at du vil slette transaktionen?";
$lang['transaction_delete_popup_pc']	= "Dette vil slette transaktionen permanent.\n\n
											Denne handling kan ikke fortrydes!\n\n
											Er du sikker på at du vil slette transaktionen?";

// Redeem Rewards
$lang['redeem_buyx_header']				= "Rewards Tabel";
$lang['redeem_buyx_sub_header']			= "Kunden har samlet nok aktiviteter sammen til:";
$lang['redeem_header']					= "Tilgængelige rewards";
$lang['redeem_header_alt']				= "Træk fra konto";
$lang['redeem_points_partial_header']	= "Kan du trække de valgte"; /* points or dollars */
$lang['redeem_points_partial_none']		= "Når denne konto har en saldo."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "Eller vælge en reward at indløse";
$lang['redeem_reward_description']		= "Beskrivelse af Reward";
$lang['redeem_reward_balance_none']		= "Den nuværende saldo på denne konto er ikke<br>tilstrækkelig til at indløse en præ-defineret reward.";
$lang['redeem_reward_balance_zero']		= "Den nuværende saldo på denne konto<br>er ikke nok til at trække noget fra den";
$lang['redeem_reward_balances_none']	= "Den nuværende saldo på denne konto<br>er ikke tilstrækkelig til at indløse en reward.";

// Reports
$lang['report_audit_title']				= "Transaktions Audit Rapport";
$lang['report_audits_all_trans']		= "Alle Transaktioner";
$lang['report_audits_header']			= "Audits";
$lang['report_audits_redeemed_only']	= "Redeemed Only";
$lang['report_audits_totals']			= "Totaler";
$lang['report_campaigns_included']		= "Inkluderede kampagner:";
$lang['report_col_1_header']			= "Vælg en rapport";
$lang['report_col_2_header']			= "Vælg et datointerval";
$lang['report_col_3_header']			= "Vælg kampagne(r)";
$lang['report_date_not_valid']			= "Ugyldig dato<br>(Kan være skudår)";
$lang['report_date_mismatch']			= "Fejl: Start dato kan ikke være<br>senere end slut dato.";
$lang['report_frequent_header']			= "Rapport over hyppige kunder";
$lang['report_frequent_min_trans']		= "Minimum antal transaktioner";
$lang['report_none']					= "No Customers Match Criteria";
$lang['report_marketing_header']		= "Marketing";
$lang['report_marketing_new_cust']		= "Nye kunder";
$lang['report_marketing_freq_cust']		= "Hyppige kunder";
$lang['report_marketing_freq_or_more']	= /* A given number of */ "tranaktioner eller mere.";
$lang['report_marketing_include']		= "Inkluder indløs Transaktioner.";
$lang['report_marketing_miss_dir_1']	= "Kunder som havde en tranaktion i det ovenstående datointerval,";
$lang['report_marketing_miss_dir_2']	= "og som ikke har handlet i mange dage:";
$lang['report_missing_header']			= "Kunder som ikke er set i"; /* a number of days.*/
$lang['report_new_customers_header']	= "Nye kunder rapport";
$lang['report_new_customers_none']		= "Ingen nye kunder matcher kriterierne";
$lang['report_new_customers_range']		= "Nye kunder mellem"; /* one date and another date */
$lang['report_no_transactions']			= "Ingen transaktioner fundet";
$lang['report_redeem_one_letter_code']	= "R";
$lang['report_run_report_button']		= "Kør rapport";
$lang['report_totals_header']			= "Fuld Rapport";

// Report Months
$lang['Jan']							= "Jan";
$lang['Feb']							= "Feb";
$lang['Mar']							= "Mar";
$lang['Apr']							= "Apr";
$lang['May']							= "Maj";
$lang['Jun']							= "Jun";
$lang['Jul']							= "Jul";
$lang['Aug']							= "Aug";
$lang['Sep']							= "Sep";
$lang['Oct']							= "Okt";
$lang['Nov']							= "Nov";
$lang['Dec']							= "Dec";

// Auto-Generated Emails
$lang['email_account_activity']			= "Update vedr. Kontoaktiviteter";
$lang['email_activated_header']			= "Kampagne er aktiveret";
$lang['email_activated_sub_header']		= "Følgende kampagne er aktiveret:";
$lang['email_billing_header']			= "Opkrævningsniveau ændring";
$lang['email_billing_from_level']		= "Din kontos opkrævningsniveau er ændret fra";
$lang['email_deactivated_header']		= "Kampagne er deaktiveret";
$lang['email_deactivated_sub_header']		= "Følgende kampagne er deaktiveret:";
$lang['email_greeting']					= "Hej"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "Opbevar disse informationer et sikkert sted";
$lang['email_html_callout_url']			= "Login URL"; // As in "the internet address where a client can log into the acount management application of StickyStreet."
$lang['email_keep_email_footer_1']		= "Opbevar venligst denne besked et sikkert sted.";
$lang['email_keep_email_footer_2']		= "Den indeholder vigtige kontooplysninger.";
$lang['email_new_account_header']		= "Ny Konto";
$lang['email_new_account_sub_header']	= "En ny konto er blevet oprettet.";
$lang['email_html_password_nochange']	= "Intet ændret"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "Online kunderegistrering";
$lang['email_online_register']			= "Følgende kunder har oprettet en konto online:";
$lang['email_password_header']			= "Passwords anmodning modtaget";
$lang['email_password_dir1']			= "Du har anmodet om password for bruger"; /* shows the User ID */
$lang['email_password_dir2']			= "Det er:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "Ændringer på din konto";
$lang['email_update_sub_header']		= "Din kontoinformation er blevet opdateret.";
$lang['email_user_id_header']			= "Bruger ID anmodning";
$lang['email_user_id_sub_header_1']		= "Du har anmodet om det bruger ID der er tilknyttet til din emailadresse:";
$lang['email_user_id_sub_header_2']		= "Du har anmodet om de bruger ID der er tilknyttet til din emailadresse:"; // Plural


// Bookmarks
$lang['bookmarks_header']				= "Opret Auto-Login Bogmærke";
$lang['bookmarks_table_header_1']		= "Vælg en side der skal oprettes som bogmærke";
$lang['bookmarks_table_header_2']		= "Vælg bruger der skal logge ind automatisk";
$lang['bookmarks_table_header_3']		= "Bogmærke Link";
$lang['bookmarks_link_1']				= "Højre-klik<br>på dette link for at<br>vælge det som bogmærke.";
$lang['bookmarks_link_2']				= "Klik for at gå til<br>siden og<br>vælg det som<br>bogmærke derfra.";
$lang['bookmarks_note']					= "Opbevar de tilsendte links som du opbevarer passwords til din konto.
											Vi anbefaler at du ikke sender dem med email eller messenger, log istedet in selv fra den computer hvor
											ønsker at bogmærket skal ligge, og tilføj det til browserens bogmærke liste.";

// Refer-and-Earn
$lang['refer_balance_header']			= "Optjent beløb indtil videre<br>fra henvisninger";
$lang['refer_balance_link']				= "Se din 'henvis & tjen'historik";
$lang['refer_banner_header']			= "Smid et StickyStreet banner på dit website:";
$lang['refer_banner_desc']				= "Disse banners er gratis at bruge på dit website. Her er nogle flere størrelser og farver at vælge imellem:";
$lang['refer_banner_more_link']			= "Flere banners..."; // As in "Click here to see more banners."
$lang['refer_banner_more_header']		= "Flere banners"; // As in "Below you will find more banners."
$lang['refer_banner_more_sub_title']	= "Disse banners er gratis at bruge på dit website. Her er nogle flere størrelser at vælge imellem:";
$lang['refer_banner_more_instruct']		= "Simply drag and drop them on your desktop, or right-click to save where you want.";
$lang['refer_banner_more_title']		= "Smid etStickyStreet banner på dit website:";
$lang['refer_header']					= "Henvis og Tjen";
$lang['refer_link_header']				= "Dit henvisningslink:";
$lang['refer_link_desc']				= "Brug dette link til at sende brugere til StickyStreet websitet. Dette er et unikt som vil tracke antallet af brugere du henviser til StickyStreet og som opretter en konto:";
$lang['refer_sub_header']				= "Henvis til StickyStreet og tjen $10.";


// Common Error Messages:
$lang['error_email_space']				= "Det er ikke tilladt med mellemrum i emailadresser.";
$lang['error_email_not_found']			= "Denne emailadresse blev ikke fundet.";
$lang['error_email_not_valid']			= "Denne emailadresse er ikke gyldig.";
$lang['error_customer_id_empty']		= "Du skal indtaste et kundekonto ID.";
$lang['error_next_page']				= "Der opstod et problem med at gå til næste side. Prøv venligst igen.";
$lang['error_password_empty']			= "Du skal vælge og indtaste et password.";
$lang['error_password_length']			= "Dit password skal være mellem 5 og 20 karakterer langt.";
$lang['error_password_not_valid']		= "Et password kan kun indeholde bogstaver, tal og underscore (_)";
$lang['error_password2_empty']			= "Du skal indtaste dit password igen for at sikre<br>at det er indtastet korrekt første gang.";
$lang['error_passwords_no_match']		= "Dine passwords matcher ikke.<br>Indtast dem venligst igen.";
$lang['error_phone_area_code']			= "Indtast venligst en gyldig area code.";
$lang['error_phone_not_valid']			= "Dette telefonnummer er ikke gyldigt.";
$lang['error_service_down']				= "Denne service er midlertidigt ikke tilgængelig.<br><br>Vi undskylder den ulejlighed det forårsager.";
$lang['error_updating']					= "Der skete en uventet fejl da informaionerne skulle opdateres. Prøv venligst igen.";
$lang['error_userid_error']				= "Fejl: Det bruger ID du har indtastet blev ikke fundet.";
$lang['error_balance_lookup_activity']	= /* The account id entered */ "har ingen registreret aktivitet.";
$lang['error_balance_lookup_no_cust']	= "Ingen kundekonto.";
$lang['error_balance_lookup_no_acct']	= "Intet konto ID.";

// Alt Tags
$lang['alt_add_customer_button']		= "Klik og tilføj kundekonti til denne kampagne";
$lang['alt_account_edit_save']			= "Klik og gem ændringerne til denne formular";
$lang['alt_campaign_delete']			= "Klik og slet denne kampagne";
$lang['alt_campaign_edit']				= "Klik og rediger denne kampagnes indstillinger";
$lang['alt_campaign_name']				= "Klik på kampagnenavnet for at slå eksisterende kunder op eller for at tilføje nye";
$lang['alt_campaign_new_create']		= "Klik for at oprette denne kampagne";
$lang['alt_campaign_place_on_hold']		= "Denne kampagne er aktiv. Klik for midlertidigt at standse dem";
$lang['alt_campaign_re-activate']		= "Klik for at gen-aktivere denne kampagne";
$lang['alt_cancel_changes']				= "Klik for at annullere ændringer og gå tilbage til forrige billede";
$lang['alt_goto_ss']					= "Klik for at åbne en ny fane og gå til StickyStreet.com";
$lang['alt_lookup_customer_button']		= "Klik for at se kundekonti i denne kampagne";
$lang['alt_user_add']					= "Klik for at tilføje en ny bruger med at valgfrit login navn og tilladelsesniveau";
$lang['alt_user_delete']				= "Klik for at slette denne bruger, så brugeren ikke længere kan logge ind og se denne konto";
$lang['alt_user_edit']					= "Klik for at redigere egenskaberne for denne bruger";

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
$lang['Referrer']						= "Henviser"; 	// As in a person or entity that sends business your way.
$lang['Comma']							= "Komma";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Deducted']						= "Fratrukket";	// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Item']							= "Enhed";		// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Pipe']							= "Pipe";		// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "Købt";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Tab']							= "Tab";		// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Required']						= "Obligatorisk";	// As in necessary, compulsory. Ex: "The name field is required."
$lang['optional']						= "Valgfrit"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";

// Page Titles
$lang['title_managing_cards']			= "Håndter kundedata";
	$lang['importing_customers']		= "Importer kunder";
	$lang['customers_imported']			= "Kunder importeret";
	$lang['importing_transactions']		= "Importer transaktioner";
	$lang['transactions_imported']		= "Transaktioner Importeret";

// Labels
$lang['label_currency']					= "Valuta";				// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']			= "Valuta Symbol";		// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_language_select']			= "Vis sprog";		// As in a prompt to the user to select a language for the application
$lang['label_localization']				= "Lokalisering";			// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_timezone']					= "Tidszone";

// New Account Screen
$lang['account_language_error']			= "Der er opstået en fejl med det valgte sprog.";
$lang['account_language_note']			= "NB: Dette er kontoens foretrukne sprogvalg.<br>
											En kontohavers indstillinger (i brugersektionen), eller ved at vælge<br>
											et andet sprog ved login vil tilsidesætte dette valg.";
$lang['account_timezone_note']			= "NB: Dette er kontoens foretrukne tidszone.<br>
											En kontohaver kan instilles til en anden tidszone (i brugersektionen),<br>
											hvilket vil tilsidesætte denne indstilling.";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']			= "Importer kunder og transaktioner";
$lang['manage_import_customers']		= "Importer kunder";
$lang['manage_import_transactions']		= "Importer kundetransaktioner";
$lang['manage_import_no_none']			= "Alle felter kan ikke sættes til 'ingen'. Vælg venligst et felt der skal importeres.";
$lang['manage_import_duplicate_card']	= "DUBLET KORT:";
$lang['manage_import_duplicate_found']	= "Dublet";
$lang['manage_import_duplicates_found']	= "Dubletter";
$lang['manage_import_successful']		= "Import Succesfuld";
$lang['manage_import_new_customer']		= "ny kunde importeret";
$lang['manage_import_new_customers']	= "nye kunder importeret";
$lang['manage_import_updated_customer']	= "Kunde opdateret";
$lang['manage_import_updated_customers']= "Kunder opdateret";
$lang['manage_import_no_cust_data']		= "Ingen kundedata blev valgt til import. Kopier og indsæt (copy-paste) dine kundedata i nedenstående boks:";
$lang['manage_import_campgn_not_valid']	= "En af de valgte kampagner er ikke gyldig.";
$lang['manage_import_select_1_campaign']= "Du skal vælge mindst en kampagne at tilf dine kunder tiløje:";
$lang['manage_import_select_delimiter']	= "Vælg venligst en af afgrænsningerne ovenfor.";
$lang['manage_import_new_trasns']		= /* a number */ "nye transaktioner er noteret";
$lang['manage_import_new_account']		= "Ny kundekonto er oprettet";
$lang['manage_import_new_accounts']		= "Nye kundekonti er oprettet";
$lang['manage_import_no_cust']			= "Ingen kunder er importeret eller opdateret";
$lang['manage_import_no_trans']			= "Ingen transaktioner er noteret";
$lang['manage_import_no_trans_data']	= "Ingen transaktionsdata blev valgt til import. Kopier og indsæt (copy-paste) dine transaktionsdata i nedenstående boks:";
$lang['manage_import_fields_missing']	= "Nogle obligatoriske felter mangler.";
$lang['manage_import_cust_instr_head']	= "<b>Importer en liste af kunder. Det er ret nemt:</b>";
$lang['manage_import_cust_instr_1']		= "Vælg den/de kampagne(r) som disse kunder skal tilføjes til.";
$lang['manage_import_cust_instr_2']		= "Specificer hvordan hvert kolonne er separeret og i hvilken rækkefølge.";
$lang['manage_import_cust_instr_3']		= "Copy-paste din liste i den store boks, og vælg den boks hvor du vil have matchende data<br>
													(med det samme konto ID / kortnummer) til at blive overskrevet eller ignoreret.";
$lang['manage_import_cust_instr_4']		= 'Datoer kan have følgende formater <i>(årstal skal være i firecifret format)</i>:<br>
														<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre>';
$lang['manage_import_campaigns_list']	= "Kampagneliste";
$lang['manage_import_add_campaigns']	= "Tilføj til kampagner";
$lang['manage_import_field_order']		= "Feltrækkefølge";
$lang['manage_import_field_delimiter']	= "Feltafgrænser";
$lang['manage_import_excel_default']	= "(Default når der copy-pastes fra MS Excel)";
$lang['manage_import_field_note']		= "<i>Hvert felt er valgfrit.</i><br>
												<br>
												NB: Hvis du har planer om at importere<br>
												kundetransaktioner senere, er et unikt <i>Kunde<br>
												Konto ID / Kortnummer</i> for hver kunde<br>
												nødvendigt (for at kunne matche<br>
												transaktionerne til kunderne).";
$lang['manage_import_customer_list']	= "Kundeliste";
$lang['manage_import_duplicates']		= "Dubletter?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "Overskriv"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "Indsæt (paste) kundelisten i nedenstående boks";
$lang['manage_import_trans_instrctns']	= "<b>Importer en liste med (pre-konverterede) transaktioner:</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">Hvis du importerer til en point-baseret kampagne fra<b>KONTANT transaktioner</b>, skal du sørge for
													<b><i>konvertere kontantbeløbet til point til at begynde med</i></b>. (I Excel, opret en ny kolonne, og gang kontant
													transaktion beløbet med den ".$lang['ppd']." ratio som er indstillet i kampagneindstillingerne. Dermed sikres at de optjente point konverteres.)
												<li style=\"padding-bottom: 5px;\">Specificer hvordan hver kolonne er separeret og i hvilken rækkefølge i drop-down menuen nedenfor.</li>
												<li style=\"padding-bottom: 5px;\">Du skal sikre at 'Indløste' transaktioner har et'<b>J</b>' i 'Indløs Event' kolonnen og er indtastet som en <b><i>POSITIV værdi</i></b>.</li>
												<li style=\"padding-bottom: 5px;\">Hvis du importerer transaktioner for en'<b>Køb X få en gratis</b>' kampagne, skal du sikre at du har valgt en'<b>Enheder købt</b>'kolonne.</li>
												<li style=\"padding-bottom: 5px;\">Hvis en dato ikke er inkluderet vil transaktionen blive noteret med dags dato.<br>
													Datoer kan have følgende formater <i>(årstal skal være i firecifret format)</i>:<br>
													<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre></li>
												<li style=\"padding-bottom: 0px;\">Kopier og indsæt (Copy-paste) din liste i den store boks nedenfor.</li>
											</ol>";
$lang['manage_import_campaign_name']	= "Kampagne ID";
$lang['manage_import_trans_date']		= "Transaktions Dato";
$lang['manage_import_trans_amount']		= "Transaktions Beløb";
$lang['manage_import_redeem_event']		= "Indløs Event (J/N)";
$lang['manage_import_req_for_buyx']		= "Kun påkrævet for 'køb x og få 1 gratis' kampagner";
$lang['manage_import_item_purchased']	= "Enhed købt";
$lang['manage_import_description_auth']	= "Beskrivelse / Autorisation.";
$lang['manage_import_trans_list']		= "Transaktionsliste";
$lang['manage_import_paste_trans']		= "Indsæt (paste) kundernes transaktioner i boksen nedenfor";

// Reports
$lang['report_all_customers']			= "Alle kunder";
$lang['report_all_customers_header']	= "Alle kunder rapport";
$lang['report_all_customers_range']		= "Alle kunder mellem"; /* one date and another date */
$lang['report_balances_header']			= "Kundesaldo rapport";
$lang['report_balances']				= "Kundesaldo for";
$lang['report_date_range']				= "Kunder der har haft en transaktion mellem:"; /* a range of dates.*/
$lang['report_search_header']			= "Find kunder rapport";
$lang['report_search']					= "Find kunder for:";
$lang['report_search_range']			= "Mellem"; /* one date and another date */
$lang['report_search_not_valid']		= "Du skal indtaste noget at søge efter.";

// Report Exporting
$lang['export_xls']						= "Export til Excel";

// Users: Common actions:
$lang['user_role_F']					= "Fulfilment partner";
$lang['user_role_F_desc']				= "Kan indenfor tilladte kampagne kun indløse kunde rewards.";

// Common Error Messages:
$lang['error_language_selector']		= "Der er opstået en fejl med det valgte sprog.";

$lang['side_support_ideas']				= "Kampagne Ideer";
$lang['side_support_ideas_describe']	= "Ideer til hvordan du kan bruge vores programmer i dine marketing- og kundekampagner";

// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================

$lang['error_account_suspended']		= "Denne konto er suspenderet";

// Calculator
$lang['calculator_title']				= "Points Program Beregneren";
$lang['str_ratio']						= "Forbrug-til-Reward Ratio";  // (same as "edit_str_ratio_sub_header", but without "your")
$lang['check_section_desc']				= "Las os sikre os at du ikke giver mere væk end du tjener:";
$lang['Print']							= "Print";
$lang['column_product_or_pervice']		= "Produkt eller Service";
$lang['column_retail_price'] 			= "Forhandlerpris for produktet / servicen";
$lang['column_points_earned'] 			= "Points optjent for køb af kunderne";
$lang['column_points_needed'] 			= "Points customer needs to redeem it as a reward";
$lang['column_cost_to_provide'] 		= "Dine omkostninger til dette produkt / service";
$lang['column_profit_made'] 			= "Profit fra salget af";
$lang['column_profit_made_part2']		= "produkter<br>eller services";
$lang['column_cost_reward_perc']		= "Udgift til rewards<br>som % af profitten.";
$lang['column_cost_reward_smaller']		= "(Jo mindre des bedre)";
$lang['instructions']					= "Instruktioner";
$lang['calculator_instructions_1']		= "<strong>1) Dine kunder skal tjene POINTS for hver krone de bruger.
											Hvor mange points? Dette er et vilkårligt tal:</strong><br>
											<br>
											Selvfølgelig er 1 point for hver krone nemt, men det gør det også nemmere for dine kunder at regne ud
											hvor meget de har brugt i din butik når de kigger på antallet af points de har samlet sammen.
											Der er jo ingen grund til at gøre dem opmærksomme på at de holder for meget af din butik og derfor bruger alt for mange penge der,
											Så måske skal du benytte et 'skævt' tal der gør det bare lidt sværere at regne ud for kunden at han eller hun er blevet en shopaholic
											Vi anbefaler mindst 100 hvis du regner med øre, men det kan også blot være 3 eller 5 eller 20, hvis
											du ikke har noget imod at nogle  øre bliver afrundet til nærmest hele point.<br>
											<br>
											<strong>Når du har valgt et antal, indtast dette nummer i<span class=\"orangeH\">Points pr. krone</span> boksen ovenfor.</strong><br>";
$lang['calculator_instructions_2']		= "<strong>2) Derefter, <i>indtast Forbrug-til-Reward Ratioen</i>
											Kan 'oversættes' med som \"hvor mange gange skal en kunde købe et produkt eller en service før en reward af lignende værdi er opnået?\"</strong><br />
											<br>
											Typisk er dette antal mellem 8 og 25 gange større, men det er selvfølgelig forretningsspecifikt.
											For eksempel kan man ofte se cafeer tilbyde en gratis kop kaffe efter den tiende kop. Jo højere antal des mere konservativ
											er du, rent pengemæssigt, men dermed bliver det også sværere for dine kunder at opnå deres rewards.<br>
											<br>
											<strong>Indtast et antal i <span class=\"orangeH\">Forbrug-til-rewards Ratio</span> boksen,
											og leg herefter med nogle af tallene.
											Prøv nogle forskellige værdier indtil du er fortrolig og tilfreds med resultatet.</strong>";
$lang['calculator_disclaimer']			= "<strong>Disclaimer</strong>: Denne
											beregner er kun stillet til rådighed som reference værktøj, og vi opfordrer
											alle virksomhedsejere til at konsultere deres finansielle rådgiver før de lancerer
											et af vores programer!";
// =========================
// ADDITIONAL TRANSLATIONS 3
// =========================

// Transaction Email Content Preferences:
$lang['transaction_email_content']		= "Transaktions Email: Indhold";
$lang['transaction_email_desc']			= "Hvis en kunde har registreret en emailadressse i systemet når en transaktion registreres, kan du vælge at sende en email til kunden.";
$lang['transaction_email_instr']			= "Udfyld eller ret i boksene nedenfor for at tilpasse emailen kunderne modtager vedr. denne kampagne:";
$lang['transaction_email_default']		= "Mange tak for din støtte og for at benytte os!";
$lang['transaction_email_incl_balance']	= "Inkluder saldo";
$lang['transaction_email_incl_rewards']	= "Inkluder tilgængelige rewards";
$lang['transaction_email_incl_coupon']	= "Inkluder kupon eller salgsfremmende foranstaltning (promotion)";
$lang['error_general_permission']		= "Indhold er ikke tilgængeligt.";

// =========================
// ADDITIONAL TRANSLATIONS 4
// =========================
$lang['customer_edit_address_change']	= "Adresse ændret til";
$lang['customer_edit_address_delete']	= "Adresse fjernetd. Tidligere";
$lang['customer_edit_address_replace']	= "Adresse ændret fra";


// =========================
// ADDITIONAL TRANSLATIONS 5
// =========================
// Email Updates:
$lang['email_agency_update_header']             = "Kontoændringer:";
$lang['email_agency_update_sub_header'] 			= "Følgende konto information er  blevet opdateret:";
// Import Updates:
$lang['Options']                                = "Muligheder";  // Plural. The ability to choose from different alternatives or non-required additional specifications.
$lang['manage_import_duplicates_update']        = "Opdater";
$lang['manage_import_duplicates_ignore']        = "Spring over";
$lang['manage_import_convert_currency'] 			= "Konverter transaktionsbeløb til hvad kampagnen tracker?";
$lang['manage_import_trans_instrctns_2']        = 'Hvis du importerer <b>CASH transactions</b> til en point-baseret kampagne, eller importerer en liste af besøg til en Tjen-pr-Event kampagne, skal du vælge "'.$lang['manage_import_convert_currency'].'" checkboxen. Hvis du importerer tilpassede point beløb eller tilpassede optjente beløb, skal checkboxen ikke vøre valgt.';
// Import Undo
$lang['import_previous_title']                  = 'Tidligere importeret';
$lang['Undo']                                   = 'Fortryd';
// BuyX Membership Functionality
$lang['Quantity']                               = "Antal der skal tiløjes";
// Mailchimp Integration:
$lang['select_a_list_to_export_to']             = "Vælg en liste at eksportere til";
$lang['success']                                = "OK";
$lang['export_complete']                        = "Eksport OK";
$lang['loading']                                = "Loading...";
$lang['oops']                                   = "Ups!";
$lang['addresses_successfully_added']   			= "E-mailadresser er succesfuldt tilføjet til denne liste";
$lang['all_addresses_exist']                    = "Alle disse adresser findes allerede i denne liste!";
$lang['addresses_exist']                        = "E-mail adresser der allerede eksisterer i denne liste";
$lang['we_found']                               = "Vi fandt";
$lang['errors']                                 = "fejl";
$lang['addresses_with_errors']                  = "E-mail adresser med fejl";
$lang['Back']                                   = "Tilbage";
$lang['CLOSE']                                  = "LUK";
$lang['Visit_MailChimp']                        = "Besøg MailChimp";

$lang['mailchimp_integration']                  = "MailChimp Integration";
$lang['mailchimp_login_error']                  = "MailChimp genkendte ikke dig brugernavn/koderod.  Til info: Efter 10 forkerte login forsøg skal du vente i fem minutter før du kan prøve igen. ";
$lang['mailchimp_no_account_info']              = "Vi fandt ikke din MailChimp konto information.  Indtast det nu for at fortsætte med at eksportere!";
$lang['mailchimp_bad_account_info']             = "Dit MailChimp brugernavn eller kodeord blev ikke genkendt af MailChimp.  Indtast det nu for at fortsætte med at eksportere!";
$lang['bananas']                                = "Bananas!";
$lang['no_username']                            = "Du indtastede ikke et brugernavn og/eller et koderod!";
$lang['Username']                               = "Brugernavn";
$lang['Password']                               = "Kodeord";


// =========================
// ADDITIONAL TRANSLATIONS 6
// =========================
$lang['account_new_header_agency']				= "Tell us about your client:";
// Custom Date functionality
$lang['label_date']									= 'Dato';
$lang['label_Year']									= 'År';
$lang['label_Month']									= 'Måned';
$lang['label_Day']									= 'Dag';
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
$lang['edit_reward_id']								= "Optional: Reward ID";
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


/// =========================
// ADDITIONAL TRANSLATIONS 14
// =========================
$lang['user_my_info_header']                        = "Mine bruger oplysninger";
$lang['user_role_I']                                    = "Firma klient og import";
$lang['user_role_I_desc']                            = "Manager, med mulighed for at editere kampagner. Brugere kan afvikle rapporter og håndtere kunder (slet, import); men har ikke mulighed for at oprette kampagner eller Account brugere.";
$lang['user_role_G']                                    = "Lokal klient";
$lang['user_role_G_desc']                            = "Manager, med mulighed for at editere kampagne muligheder, brugere, og afvikling af rapporter; men ingen mulighed for at oprette kampagner eller eksterne brugere; eller sletning/import af kunder.";


// =========================
// ADDITIONAL TRANSLATIONS 15
// =========================

$lang['coalition_balance_label']                    = "Koalition<br>Point Sum:";
$lang['coalition_redeem_header']                 = "Koalition, varer til rådighed";
$lang['customer_activity_coalition_header']     = "Kunde historik (kun denne koalition)";
$lang['report_coalition_header']                    = "Point rapporter";
$lang['report_audits_totals_points']            = "Samlet antal point i butik";
$lang['report_audits_totals_giftcard']            = "Samlet antal gavekort i butik";
$lang['section_account_options_header']        = "Avancerede konto indstillinger";
$lang['section_account_options_sub']            = "Hvis du ønsker at oprette en avanceret konto (ikke-lukket program), venligst indtast aktiveringskoden i feltet nedenfor. Hvis du har spørgsmål, eller ikke har modtaget din aktiveringskode, kontakt os venligst. ";
$lang['section_coalition_token']                    = "Koalition aktiveringskode";
$lang['section_mall_token']                        = "To-Tier aktiveringskode";
$lang['section_coalition_note']                    = "Kan tilkøbes.";
$lang['section_mall_note']                            = "Kan tilkøbes.";
$lang['section_mall_campaign_id']                = "Master kampagne ID";
$lang['section_mall_percentage']                    = "Kampagne optjening (%)";
$lang['section_token_invalid']                    = "Aktiveringskoden er ikke gyldig";
$lang['section_mall_options_header']            = "To-Tier konto opsætning";
$lang['percentage_not_valid']                        = "Procentsatsen er ikke gyldig.";


// =========================
// ADDITIONAL TRANSLATIONS 16
// =========================
$lang['api_error_permission_denied']            = "Denne bruger har ikke rettighed til dette område"; // An error message that shows up when a user makes an API call their permission level does not allow access to.
$lang['api_error_wrong_account']                    = "Bruger har ikke rettighed til at tilgå denne konto"; // An error message that shows up when a user makes an API call that affects the wrong account.
$lang['api_error_missing_username']                = "Manglende brugernavn"; // An error message that shows up when a username (Account User, not Customer) is required but is missing.
$lang['api_error_PIN_too_many_matches']        = "For mange brugere har denne PIN kode";  // Shows when an account user is trying to be validated in a terminal-like setting bY entering only their PIN which ought to be unique, but there is more than one matching PIN.
$lang['api_error_PIN_duplicate']                    = "Denne PIN kode er allerede i brug"; // Shows when an user is created or updated and the PIN assigned to them is already in use bu another user in the account.
$lang['api_error_campaign_id']                    = 'Fejl i kampagne ID';
$lang['api_error_campaign_name']                    = 'Fejl i kampagne navn';
$lang['api_error_campaign_type']                    = 'Fejl i kampagne type';
$lang['api_error_campaign_points_ratio']        = 'Fejl i optjente point pr. købsenhed';
$lang['api_error_campaign_rewards_ratio']        = 'Fejl i kampagne - præmie fordeling';
$lang['api_error_campaign_depreciation']        = 'Fejl i kampagne afskrivnings-opsætning';
$lang['api_error_campaign_dpv']                    = 'Fejl i kampagne, optjening pr. transaktion';
$lang['api_error_campaign_promo']                = 'Fejl i kampagne optjeningsparametre';
$lang['api_error_campaign_reward']                = 'Fejl i kampagne præmie parametre';
$lang['api_error_campaign_item']                    = 'Fejl i køb x vare i kampagne';



// =========================
// ADDITIONAL TRANSLATIONS 17
// =========================
// Mainly small changes regardin coalition and two-tier programs.
$lang['coalition_points_program']                = "Koalition point rapport";  // A label in reports that aggregate an account's points-based coalition campaigns into a single line.
$lang['coalition_giftcards_program']            = "Samlet arkiveret koalitions varer";  // A label in reports that aggregate an account's stored-value (giftcard) based coalition campaigns into a single line.
$lang['coalition_program']                            = "Koalitions Program";
$lang['twotier_program']                            = "To-Tier Program";
$lang['opt_out']                                        = "Fravalgt";

$lang['user_role_L']                                    = "Koalition Butik Manager";
$lang['user_role_L_desc']                            = "Samme adgang som Manager, men begrænset til kun at redigere i de kampagner (butikker) de har adgang til.";
$lang['user_role_D']                                    = "Kampagne Designer";
$lang['user_role_D_desc']                            = "Unik rolle, der udelukkende giver adgang til at tilføje og rette rapporter. Men intet andet.";

// =========================
// ADDITIONAL TRANSLATIONS 18
// =========================
$lang['account_label_fields_manage']            = "Redigere brugerdefinerede felter";  // A button text that lets the user add/manage the fields of data collected for the account's customers.
$lang['error_action_undefined']                    = "Aktion ikke defineret"; // Shows mainly as an API error message when the "action" parameter is not given or does not match one of the expected action words.
$lang['error_entry_not_in_list']                    = "Ikke tilladt mulighed tilføjet."; // Shows mainly as an API error message when a value is input that does not match one of the options in the list of options for that field.
$lang['error_entries_not_in_list']                = "Ikke tilladte muligheder tilføjet."; // Shows mainly as an API error message when a series of values is input that do not exist in the list of options for that field.
$lang['error_not_numeric']                            = "Ikke gyldigt nummer."; //
$lang['error_not_monetary']                        = "Ikke gyldigt beløb."; //
$lang['error_not_date']                                = "Ikke gyldig dato."; //
$lang['error_not_unique']                            = "Ikke unik"; //
$lang['manage_fields_top_header']                = "Vælg hvilke datafelter du vil ændre";  // The page header where data fields are managed (customers, transations, etc.)
$lang['manage_fields_customers_top_header']    = "Rediger kundedata felter";  // The page header where customers' data fields are managed (to add, show/hide, etc.)
$lang['manage_fields_transactions_top_header']    = "Rediger transaktions data felter";  // The page header where customers' transaction data fields are managed
$lang['manage_fields_predefined_header']        = "Prædefinerede kunde felter";  // The section where the original set of customer fields are show, and where the user can choose to show or hide them.
$lang['manage_fields_custom_header']            = "Brugerdefinerede felter";  // The section where new custom customer data fields are shown.
$lang['label_customer_fields']                    = 'Kunde felter'; // A button for the user to select to manage the fields related to customer data.
$lang['label_transaction_fields']                = 'Transaktions felter'; // A button for the user to select to manage the fields related to a customer's transaction data.
$lang['label_Label']                                    = "Kategori";  // As in "the word that describes a category" -- ex: The label of this field is the word that describes what the field is for.
$lang['label_Type']                                    = "Type";  // As in "the kind of thing it is" -- ex: This field is of a text type. The type of this other field is a date.
$lang['label_Text']                                    = "Tekst";          // One of the types of field mentioned above. In this case a field that includes any kind of character.
$lang['label_Date']                                    = "Dato";          // One of the types of field mentioned above. In this case a field that represents a calendar date and time, to the second.
$lang['label_List']                                    = "Liste";          // One of the types of field mentioned above. In this case a field that allows the user to choose elements in a list.
$lang['label_Picklist']                                = "Plukliste";  // One of the types of field mentioned above. In this case a field that allows the user to pick ONE elements from a list.
$lang['label_Number']                                = "Tal";      // One of the types of field mentioned above. In this case a field that is numerical in value only.
$lang['label_Money']                                    = "Beløb";      // One of the types of field mentioned above. In this case a field that is numerical, with exactly two decimals.
$lang['label_Choices']                                = "Liste af muligheder";  // A description of a field type that allows the user to store alternatives to be chosen in a list.
$lang['label_Choices_sub']                            = "Adskil hver mulighed med et komma"; // Instructions to the user to separate each option for the list with a comma (,) character.
$lang['label_Unique']                                = "Unik";  // Description of a field choice that asks the user if the values recorded in the field in question must be unique.
$lang['label_Select']                                = "Vælg:";  // The word that appears as the initial selection (and thereby, as the instruction) in a pull-down menu.
$lang['custom_field_delete_popup']                = "Dette brugerdefinerede felt vil blive slettet, sammen med alle data i feltet.<br><br>
                                                                Denne aktion kan IKKE fortrydes!<br><br>
                                                                Er du sikker på at du vil slette det brugerdefinerede felt?";
$lang['custom_field_delete_popup_pc']            = "Dette brugerdefinerede felt vil blive slettet, sammen med alle data i feltet.\n\n
                                                                Denne aktion kan IKKE fortrydes!\n\n
                                                                Er du sikker på at du vil slette det brugerdefinerede felt?";
$lang['success_customer_fields']                    = "Ændringer af de brugerdefinerede felter er gennemført korrekt.";
$lang['success_transaction_fields']                = "Ændringer af transaktions felter er gennemført korrekt.";
$lang['button_add_field']                            = "Tilføj et nyt brugerdefineret felt";

$lang['ID']                                                = "ID"; // Generic SHORT identifier for "Identifikation" (whether numeric or alpha-numeric)
$lang['generate_id_error']                            = "Fejl ved oprettelse af ID. Prøv venligst igen.";


// =========================
// ADDITIONAL TRANSLATIONS 19
// =========================
// Custom Modifications


// =========================
// ADDITIONAL TRANSLATIONS 20
// =========================
$lang['label_Searchable']                            = "&nbsp;Is&nbsp;ID&nbsp;";  // Description of a field choice that asks the user if the values stored in this field can be used to pull up customers in campaigns where a customer is not registered.
$lang['orig_amount']                                    = "Oprindeligt beløb";
$lang['DB_Timestamp']                                = "DB tidsstempel";

$lang['depreciation_expired']                        = "Udløbet";
$lang['depreciation_short']                        = "Udl. i %";  // The header of a NARROW column that shows the percentage of the points that has expired or depreciated.
$lang['preferences_depreciation_header']        = "Afskrivning";
$lang['preferences_depreciation_none']            = "Afskrivning ikke defineret.";
$lang['edit_depreciation_add']                    = "Tilføj afskrivning";
$lang['edit_depreciation_add_another']            = "Tilføj endnu en afskrivning";
$lang['edit_depreciation_type_prompt']            = "Afskrivnings type:";
// Original: $lang['edit_depreciation_type_T']                = "Pr. transaktion, baseret på dato for hver transaktion";
$lang['edit_depreciation_type_T']                = "For hvert optjent beløb. Afskrivning tilføjes uanset anden aktivitet";
// Original: $lang['edit_depreciation_type_L']                = "På balancen, baseret på datoen for den sidste nye transaktion";
$lang['edit_depreciation_type_L']                = "Enhver aktivitet vil nulstille afskrivnings 'uret' til den øjeblikkelige balance";
$lang['edit_depreciation_longevity']            = "Beløb vil blive afskrevet efter:";
$lang['edit_depreciation_percentage']            = "procent:";
$lang['depreciation_interval_too_small']        = " Det indtastede beløb skal være mindst 1";
$lang['depreciation_percentage_too_small']    = "Det indtastede beløb skal være større end nul";
$lang['api_error_depreciation_exists']            = 'Der eksisterer allerede en afskrivning i det angivne tidsinterval.';
$lang['report_expiration']                            = "Udløbs dato";
$lang['report_depreciation']                        = "Afskrivning";
$lang['preferences_recurring_fee_header']        = "Tilbagevendende præmie";
$lang['edit_recurring_fee_interval']            = "Alle";
$lang['edit_recurring_fee_amount']                = "Fratræk";
$lang['edit_recurring_fee_description']        = "Af den følgende grund:";
$lang['edit_recurring_fee_add']                    = "Tilføj en tilbagevendende præmie";
$lang['edit_recurring_fee_add_another']        = "Tilføj endnu en tilbagevendende præmie";
$lang['preferences_recurring_fee_none']        = "Ingen tilbagevendende præmie defineret.";
$lang['recurring_fee_too_small']                    = "Det indtastede beløb skal være større end nul";


// =========================
// ADDITIONAL TRANSLATIONS 21
// =========================
$lang['transactions_not_visible']                = "Ingen synlige transaktioner.";
$lang['section_account_copy']                        = 'Kopier indstillinger?';
$lang['section_account_copy_sub']                = 'Vælg en anden konto indstilling at kopiere fra. Hvis ingen findes, lad feltet stå tomt.';
$lang['account_to_copy_from_label']                = 'Kopier indstillinger fra:';
$lang['error_copy_from_missing_agency']        = 'Agentur token mangler';
$lang['error_copy_from_wrong_account']            = 'Denne konto hører ikke til agenturet';




// END OF FILE
?>
