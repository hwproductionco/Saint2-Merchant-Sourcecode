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

// Default currency values that can be replaced with preferences in the app.
if (!isset($lang['currency'])) {
	$lang['currency']								= "Dollar";
}
if (!isset($lang['currency_plural'])) {
	$lang['currency_plural']					= "Dollars";
}
if (!isset($lang['currency_symbol'])) {
	$lang['currency_symbol']					= "$";
}
if (!isset($lang['currency_100th'])) {
	$lang['currency_100th']						= "Cent";
}
if (!isset($lang['currency_100th_plural'])) {
	$lang['currency_100th_plural']			= "Cents";
}
if (!isset($lang['currency_100th_symbol'])) {
	$lang['currency_100th_symbol']			= "¢";
}



// Single words and labels
// (Pay attention to capitalization)
$lang['col_1']							= "1";  		// Header for column 1 of Berichts and bookmarks sections
$lang['col_2']							= "2";  		// Header for column 2 of Berichts and bookmarks sections
$lang['col_3']							= "3";  		// Header for column 3 of Berichts and bookmarks sections
$lang['Account']						= "Konto";  	// Noun: As in "a collection of transactions". Ex: "Click here to view this customer's account."
$lang['Activate']						= "Aktivieren";  	// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "Aktivierung";	// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "Aktivität";  	// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "Hinzugefügt";  	// Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']					= "+";			// The mathematical symbol for addition
$lang['All']							= "Alle";  		// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "Summe";  	// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "und";  		// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']						= "Autorisierung"; // Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "zur Verfügung";  // As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "Saldo"; 	// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['Balances']						= "Saldi";	// Plural
$lang['By']								= "Nach"; 		// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "Kampagne";	// As in a marketing campaign, but in this case, really meaning a "program" as in "Loyalty Program",
														// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "Kampagnen";	// Plural
$lang['Country']						= "Land";	// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "Kunden";	// As in people who purchase goods or services from the a business that uses the StickyStreet service.
$lang['Date']							= "Datum";		// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "Tage";		// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "Demo";		// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']						= "Beschreibung"; // Ex: "Provide a description of the transaction in this box:"
$lang['Employee']						= "Mitarbeiter";	// As in a person that works for a business or organization.
$lang['Earned']							= "Angesammelt";		// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "Fehlermeldung";		// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "Ereignis";		// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a reward.
$lang['events']							= "Ereignisse";
$lang['Event']							= "Ereignis";
$lang['Events']							= "Ereignisse";
$lang['from']							= "von";		// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "Gratis";		// As if "no need to pay" or "no charge". Ex: "StickyStreet is free when you have 10 or less customers.
$lang['Hello']							= "Hallo";		// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "info";		// Short for "information".
$lang['Level']							= "Ebene";		// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "Forderung";	// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']					= "x";			// The mathematical symbol for multiplication
$lang['Need']							= "Benötigen";		// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "Keine";			// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "Keine";		// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "Bemerkung";		// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "Bemerkungen";		// Plural of "Note", above
$lang['Online']							= "Online";		// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "Operation";  // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['or']								= "oder";			// As in "either", between two alternatives. Ex: "this or that".
$lang['point']							= "Punkt";		// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['Paid']							= "Bezahlt";		// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['points']							= "Punkte";
$lang['Point']							= "Punkt";
$lang['Points']							= "Punkte";
$lang['per']							= "pro";		// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Purchased']						= "Gekauft";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Ratio']							= "Verhältnis";		// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']					= "Erfasst durch"; // As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "Eingelöst"; 	// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "Ref"; 		// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Report']							= "Bericht"; 	// As in "Relatory", or "Presentation".
$lang['Reward']							= "Belohnung"; 	// As in a thing that can be claimed after certain conditions have been met. Ex: "The reward for having 1000 points is a free widget."
$lang['Rewards']						= "Belohnungen"; 	// Plural
$lang['Role']							= "Rolle";		// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Thank-you']						= "Herzlichen Dank";	// As in "Thank-you for your business" - said by the Client to a Customer.
$lang['Tip']							= "Hinweis";		// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "bis";			// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "zu erhalten"; 	// As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['To_Get_One_Of']					= "und erhalten Sie ein"; 	// As in "to receive" or "to be given" a single quantity. Ex: "You need to buy 10 coffees to get one of [the same] free"
$lang['Trans_ID']						= "Trans. ID"; 	// Short for "Transaction ID" - Referring to an internal StickyStreet number to reference a particular transaction.
$lang['Transaction']					= "Transaktion"; // A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']					= "Transaktionen"; // Plural
$lang['User']							= "Benutzer"; 		// As in an employee of the business or organization that can login to use the StickyStreet service.
$lang['Yes']							= "Ja";

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."-".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "Kampagne hinzufügen";
$lang['title_add_product_service']		= "Hinzufügen eines Produktes/Services für";
$lang['title_add_promotion']			= "Hinzufügen einer Promotion für";
$lang['title_add_reward']				= "Hinzufügen einer Belohnung für";
$lang['title_add_user']					= "Benutzer hinzufügen";
$lang['title_amnesia'] 					= "Login oder Passwort vergessen";
$lang['title_award_reddeem'] 			= "Auszeichnung ausbezahlt";
$lang['title_create_new_account']		= "Neues Benutzerkonto erstellen";
$lang['title_default']					= "Geschenk & Loyalitäts Management";
$lang['title_edit_account']				= "Benutzerkonto Informationen bearbeiten";
$lang['title_edit_account_number']		= "Benutzerkontonr. bearbeiten";
$lang['title_edit_campaign']			= "Einstellungen änder für";
$lang['title_edit_product_service']		= "Produkt/Service bearbeiten für";
$lang['title_edit_promotion']			= "Promotion bearbeiten für";
$lang['title_edit_reward']				= "Belohnung bearbeiten für";
$lang['title_edit_user']				= "Benutzer bearbeiten";
$lang['title_find_add']					= "Finden oder Hinzufügen eines Benutzerkontos in";
$lang['title_login'] 					= "Benutzer Login";
$lang['title_more_r_and_e_banners'] 	= "Mehr Empfehlungs und Earn Rewards Banners";
$lang['title_r_and_e_balance']			= "Your Refer and Earn Rewards Balance";
$lang['title_report_all_trans']			= "Bericht aller Transaktionen";
$lang['title_report_freq_cust']			= "Bericht häufiger Kunden";
$lang['title_report_miss_cust']			= "Bericht fernbleibender Kunden";
$lang['title_report_new_cust']			= "Bericht neuer Kunden";
$lang['title_report_redeem_trans']		= "Bericht der eingelösten Transaktionen";
$lang['title_report_totals']			= "Bericht der Totale";
$lang['title_search_result']			= "Suchergebnis";
$lang['title_trans_del']				= "Transaktion gelöscht";
$lang['title_trans_rec'] 				= "Transaktion gespeichert";
$lang['title_view_account']				= "Konto# anzeigen";

// Side Modules
// Module 1
$lang['side_news_header'] 				= "";
$lang['side_news_text']					= "";
// Support Module
$lang['side_support_links']				= "<span style=\"color:#79B216;\">Support</span> Links";
$lang['side_support_desk_describe']		= "In unserer Wissensdatenbank finden Sie Antworten auf Ihre Fragen. Ebenso können Sie Supportanfragen einreichen";
// $lang['side_blog_describe']				= "For announcements, tips, and a point of view, visit our"; // ... blog
// $lang['side_support_email_call']		= "Email a support request directly or call:";
// $lang['side_support_phone']				= "<span style=\"font-weight: bold;\">866-780-STICKY</span> <span style=\"color: #888; font-size: 80%;\">(7842)</span>";
// $lang['side_loyalty_link_desc']			= "Bring them back to your site with Online Enrollment and Balance Lookup";
// $lang['side_points_calc_desc']			= "A tool to help you figure out your reward levels";


// Destinations / Section names
$lang['section_account_control_panel']	= "Kontoverwaltung";
$lang['section_account_info_header']	= "Kontoinformation";
$lang['section_account_login']			= "Konto Login";
$lang['section_account_new']				= "Konto anlegen";
$lang['section_blog']						= "Blog";
$lang['section_campaign_reports']		= "Kampagnenberichte";
$lang['section_customer_account']		= "Kundenkonto";
$lang['section_loyalty_link_inst']		= "LoyaltyLink Instruktionen";
$lang['section_points_calculator']		= "Punkterechner";
$lang['section_points_promotions']		= "Promotionen";
$lang['section_support_desk']				= "Support";

// Labels
$lang['label_account_id']					= "Konto ID";				// Usually, a Client's account identification "code" (An alphanumeric string of 5 to 20 characters)
$lang['label_unique_id']					= "Eindeutige ID";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']				= "Kontobesitzer";			// The person who created a StickyStreet account.
$lang['label_additional_info']			= "Zusatzinfo";			// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info_user']			= "Zusatzinfo";
$lang['label_card']							= "Karten #";					// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']							= "Ort";
$lang['label_date_range']					= "Datumsauswahl";				// Ex: January 2008 to December 2008
$lang['label_email']							= "Email Adresse";
$lang['label_email_short']					= "Email";
$lang['label_first_name']					= "Vorname";				// As in "given name". ie: not the one shared by their family.
$lang['label_last_name']					= "Nachname";				// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_name']							= "Name";					// The joining of first and last names.
$lang['label_organization']				= "Organisation";			// As in a business, church, school, club, etc.
$lang['label_owner_id']						= "Besitzer ID";				// A unique login name that identifies the user as the account owner.
$lang['label_password']						= "Passwort";
$lang['label_password_new']				= "Neues Passwort";
$lang['label_password_retype_short']	= "Passwort erneut eingeben";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "Neues Passwort erneut eingeben";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']							= "Telefonnummer";
$lang['label_state']							= "Bundesland / Kanton";
$lang['label_user_id']						= "Benutzer ID";				// A unique login name that allows an employee of a StickyStreet client to access the program.
$lang['label_zip']							= "Postleitzahl (PLZ)";

// Navigation
$lang['nav_active']						= "Aktiv";			// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "Hinzufügen";			// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "Abbrechen";			// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']					= "Auf";		// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']					= "Deaktivieren";  	// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "Abziehen";  		// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "Löschen";			// Verb: As in "remove" or "erase". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']				= "Alle Markierungen entfernen";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "Fertig";			// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "Bearbeiten";			// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "Suchen";			// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "BEENDEN";			// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "Gehe zu";				// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "Verstecken";			// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']					= "Gehe zu:"; 		// As in changing screens, pages, or location.
$lang['nav_log_in']						= "Log in";			// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "Logout";			// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "Auffinden";			// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "Vorwa&umlrts";			// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']					= "Inaktiv";		// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "Drucken";			// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']				= "Zusammenfassung drucken";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']				= "Reaktivieren";	// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "Speichern";			// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "Einlösen";			// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "Entfernen";			// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "Zurück";			// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "Anzeigen";			// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']				= "Änderungen speichern";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']					= "Alle auswählen";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "Setzen";			// Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "Schritt 1";			// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "Schritt 2";
$lang['step3']							= "Schritt 3";
$lang['step4']							= "Schritt 4";

// Login Screen
$lang['login_amnesia_prompt']			= "Benutzer ID oder Passwort vergessen?";
$lang['login_amnesia_button']			= "Jetzt wiederbeschaffen!";
$lang['login_email_missing']			= "Bitte Email Adresse des Kontos eintragen:";
$lang['login_fancy_1']					= "Konto";
$lang['login_fancy_2']					= "Login";
$lang['login_new_account_prompt']		= "Kein Konto vorhanden?";
$lang['login_new_account_button']		= "Jetzt anmelden!";
$lang['login_password_missing']			= "Bitte Passwort eingeben";
$lang['login_userid_missing']			= "Bitte Benutzer ID eingeben";
$lang['login_wrong_password']			= "Das eingegebene Passwort stimmt nicht mit dem gespeicherten überein.";
$lang['login_wrong_user_id']			= "Die eingegebene Benutzer ID wurde nicht gefunden.<br>(Gross/Klein-Schreibung beachten.)";

// Forgot Password / Username section;
$lang['amnesia_header']					= "Leichter Fall von Vergesslichkeit?";
$lang['amnesia_note_top']				= "Anberkung über Spam-Filter:";
$lang['amnesia_note_text']				= "Wenn Sie in den nächsten paar Minuten keine Email von uns erhalten, prüfen Sie bitte Ihren Spam Filter.
											Die Email hat den Absender"; /* StickyStreet or the name of the Agency. */
$lang['amnesia_password_button']		= "Passwort zusenden";
$lang['amnesia_password_dir']			= "Geben Sie Ihre Benutzer ID unten ein und wir senden Ihnen Ihr Passwort an die Email Adresse in unserem Verzeichnis.";
$lang['amnesia_password_header']		= "Passwort vergessen?";
$lang['amnesia_password_sent']			= "Exzellent!<br><br>Ihr Passwort wurde<br>für dieses Konto<br>an die Email Adresse geschickt.";
$lang['amnesia_return_button']			= "Zurück zum Login";
$lang['amnesia_sub_header']				= "Keine Sorge, wir können helfen... Erinnern Sie sich an Ihren Namen?";
$lang['amnesia_user_id_button']			= "Benutzer ID senden";
$lang['amnesia_user_id_dir']			= "Geben Sie unten Ihre Email Adresse an und wir senden Ihnen alle dazugehörigen Benutzer IDs:";
$lang['amnesia_user_id_header']			= "Benutzer ID vergessen?";
$lang['amnesia_userid_sent']			= "Exzellent!<br><br>Ihre Benutzer ID wurde an<br>die angegebene Email Adresse geschickt.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "oder weniger Kundenkonten"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "Geben Sie den Namen Ihrer Organisation ein."; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "Sie müssen eine gültige Email Adresse angeben.";
$lang['account_email_needed_2']			= "Auf diesem Weg benachrichtigen wir Sie über Ihre Konto und Rechnungsstufen änderungen.";
$lang['account_enter_first']			= "Bitte geben Sie Ihren Vornamen an.";
$lang['account_enter_last']				= "Bitte geben Sie Ihren Nachnamen an.";
$lang['account_id_empty']				= "Sie müssen eine Konto ID auswählen und eingeben.";
$lang['account_id_exists']				= "Diese Konto ID ist bereits vergeben.<br>Bitte wählen Sie eine andere.";
$lang['account_id_not_valid']			= "Eine Konto ID kann nur Buchstaben, Nummern, oder Unterstriche (_) beinhalten";
$lang['account_terms_agree']			= "Sie müssen den obigen allgemeinen Geschäftsbedingungen zustimmen, indem Sie ein Häkchen setzen.";
$lang['account_new_create_button']		= "Konto erstellen";
$lang['account_new_directions']			= "Starten Sie, indem Sie einfach untenstehendes Formular ausfüllen und ein Konto erstellen:";
$lang['account_new_end']				= "Das war's!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "Erzählen Sie uns etwas über sich";
$lang['account_new_owner_id']			= "Wählen Sie eine Besitzer ID";
$lang['account_new_owner_restrict']		= "Maximal 20 Zeichen, keine Leerzeichen";
$lang['account_new_owner_user_id']		= "Wählen Sie eine Benutzer ID";
$lang['account_new_password']			= "Wählen Sie für Ihr Konto ein Passwort.";
$lang['account_new_password_restrict']	= "5 bis 20 Zeichen, nur Buchstaben und Nummern";
$lang['account_new_phone_dir']			= "Beginnen Sie mit '+' falls Sie ausserhalb der U.S. sind.";
$lang['account_new_step1_greet']		= "Herzliche Gratulation, Sie haben ein neues Konto erstellt.";
$lang['account_new_step1_dir']			= "Wir werden Sie nun durch die folgenden vier Schritte begleiten:";
$lang['account_new_step1_1']			= "Die Erstellung einer Loyalitätskampagne oder Geschenkkarten Kampagne.";
$lang['account_new_step1_2']			= "Passen Sie es Ihren Bedürfnissen an.";
$lang['account_new_step1_3']			= "Geben Sie eine Kundentransaktion ein.";
$lang['account_new_step1_4']			= "Kehren Sie zum Kontoverwaltung zurück.";
$lang['account_referred']				= "Durch wen wurden Sie allenfalls empfohlen?";
$lang['account_referred_dir']			= "Name, Organisation oder Weiterempfehlungs Code.";
$lang['account_referrer_record']		= /* The referred business */ "hat sich für ein gratis Konto eingeschrieben";
$lang['account_terms_conditions_dir']	= "Um den allgemeinen Geschäftsbedingungen zuzustimmen, lesen Sie diese durch und erklären sich durch ein Häkchen damit einverstanden"; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "Allgemeine Geschäftsbedingungen für die Benutzung";
$lang['account_terms_conditions_agree']	= "Ich erkläre mich mit den allgemeinenGeschäftsbedingungen einverstanden";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "Geschäftsinformation";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= "Adresse:";
$lang['account_label_billing_level']	= "Rechnungsstufe:";
$lang['account_label_biz_name']			= "Geschäftsname:";
$lang['account_label_biz_address1']		= "Adresszeile 1";
$lang['account_label_biz_address2']		= "Adresszeile 2";
$lang['account_label_custom_fee']		= "Festgelegte Monatsgebühr";
$lang['account_label_customers']		= "Kunden";
$lang['account_label_customers_manage']	= "Kundendaten verwalten";
$lang['account_label_free']				= "Gratis"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "Kontoinhaber";
$lang['account_label_owner_contact']	= "Kontaktangaben des Inhabers:";
$lang['account_label_pay_invoices']		= "Rechnungen ansehen / begleichen";
$lang['account_label_per_month']		= "/ monatlich";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "Inhaber Login";
$lang['account_password_missing']		= "Passwort stimmt nicht überein: Bitte geben Sie das Passwort in beiden Textboxen ein.";
$lang['account_passwords_mismatch']		= "Das neue Password, das Sie eingegeben haben, stimmt nicht überein.<br>Bitte geben Sie es erneut in beide Textboxen ein.";
$lang['account_owner_sec_token']		= "Sicherheits Token";

// Control Panel
$lang['cp_step_dir_header']				= "Alles erledigt!";
$lang['cp_step_dir']					= "Dies ist das \"Control Panel\", mit dem Sie nach dem Login starten.<br>Hier können Sie alle Konteneinstellungen verwalten.";
$lang['cp_campaigns_table_header_1']	= "Kampagnenname";
$lang['cp_campaigns_table_header_2a']	= "Kampagne";	// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']	= "Kunden";	// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']	= "Kampagne";		// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']	= "Transaktionen";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']	= "Kampagne";	// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']	= "Status";		// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']	= "Kampagne";		// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']	= "Präferenzen";	// This is the bottom line of the english phrase "Campaign Preferences"

// Create / Edit User
$lang['user_campaigns_header']			= "Wählen Sie aus für, welche Kampagnen dieser Benutzer zugangsberechtigt ist:";
$lang['user_campaigns_admins']			= "Administratoren haben automatisch Zugang zu allen Kampagnen";
$lang['user_edit_header']					= "Benutzer bearbeiten:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "Passwort ändern";
$lang['user_edit_password2_label']		= "Bitte geben Sie das Passwort erneut ein";
$lang['user_edit_password_note']			= "Um dasselbe Passwort zu behalten, diese bitte leer lassen.";
$lang['user_edit_record_change_card']	= /* The Card # */ "wurde ersetzt durch:"; /* a new Card # */
$lang['user_edit_record_change_name']	= "Namensänderung";
$lang['user_edit_record_del_card']		= /* The Card # */ "wurde gelöscht";
$lang['user_edit_record_new_card']		= "Eine neue Karten # wurde zugeordnet:";
$lang['user_edit_record_change_phone']	= "ändere Telefon # auf";
$lang['user_edit_record_replace_phone']= "ändere Telefon # von";
$lang['user_edit_record_to_none']		= "keine Angaben"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']	= "Email ändern in";
$lang['user_edit_record_replace_email']= "Email ändern von";
$lang['user_edit_record_change_addtl']	= "Zusätzliche Info änderte auf";
$lang['user_edit_record_del_addtl']		= "Zusätzliche Info entfernt. Vorgängig";
$lang['user_edit_record_replace_addtl']= "Zusätzliche Info änderte von";
$lang['user_info_sub_header']				= "Benutzer Information";
$lang['user_new_header']					= "Neuer Benutzer";
$lang['user_new_id_empty']					= "Zur Efassung eines neuen Benutzers wird eine Benutzer ID benötigt.";
$lang['user_new_id_not_valid']			= "Eine Benutzer ID kann nur Buchstaben, Nummern, oder ein Unterstrich (_) beinhalten";
$lang['user_new_id_exists']				= "Die von Ihnen ausgewählte Benuter ID existiert bereits.<br> Bitte wählen Sie eine andere aus.";
$lang['user_new_no_role']					= "Für diesen Benutzer müssen Sie eine Rolle auswählen:";
$lang['user_new_password_label']			= "Wählen Sie ein neues Passwort für diesen Benutzer";
$lang['user_new_record_button']			= "Neue Benutzerdaten";
$lang['user_new_user_id_label']			= "Wählen Sie eine Benutzer ID, um sich einzuloggen";
$lang['user_restrict_20_char']			= "Maximal 20 Zeichen";
$lang['user_role_header']					= "Benutzerrolle";
$lang['user_role_directions']				= "Bitte wählen Sie eine Rolle für diesen Benutzer aus";

// Users: Common actions:
$lang['user_add_button']				= "Neuen Benutzer hinzufügen";
$lang['user_delete_popup']				= "<strong>Dieser Benutzer wird von Ihrer Benutzerliste entfernt und archiviert.</strong><br>
											Diese Benutzer ID kann nicht als Benutzer ID eines neuen Benutzers wieder verwendet werden.<br>
											<br>
											Kontaktieren Sie uns, um einen archivierten Benutzer wieder zu finden. Für diese Dienstleistung wird eine Gebühr erhoben.<br>
											<br>
											<strong>Sind Sie sicher, dass Sie diesen Benutzer entfernen wollen?</strong>";
$lang['user_delete_popup_pc']			= "Dieser Benutzer wird von Ihrer autorisierten Benuterzliste entfernt und archiviert.\n\n
											Diese Benutzer ID kann nicht als Benutzer ID eines neuen Benutzers wieder verwendet werden.\n\n
											Kontaktieren Sie uns, um einen archivierten Benutzer wieder zu finden. Für diese Dienstleistung wird eine Gebühr erhoben.\n\n
											Sind Sie sicher, dass Sie diesen Benutzer entfernen wollen?";
$lang['user_header']					= "Benutzer und Ihre Berechtigungen verwalten";
$lang['user_list_none']					= "Bisher wurden keine zusätzlichen Kunden hinzugefügt.";
$lang['user_role_A']					= "Administrator";
$lang['user_role_A_desc']				= "Ist auf alles zugriffsberechtigt.";
$lang['user_role_C']					= "Buchhalter";
$lang['user_role_C_desc']				= "Kann Berichte erzeugen, sieht Rechnungen und Kampagneneinstellungen, sieht aber keine Benutzer- und Kundeninformationen.";
$lang['user_role_K']					= "Mitarbeiter";
$lang['user_role_K_desc']				= "Kann innerhalb berechtigter Kampagnen Kundeninformationen erfassen und ändern (aber nicht die Karten #,
											falls ausgestellt) und kann nur Kundenbesuche erfassen und einlösen (aber keine löschen.)";
$lang['user_role_M']					= "Manager";
$lang['user_role_M_desc']				= "Innerhalb berechtigter Kampagnen hat er auf alles Zugang und beschränkter Zugang zu kontoweiten Einstellungen
											(Kann keine Rechnungsinformationen sehen, kann Berichte erzeugen und kann Kunden hinzufügen oder ändern aber keine Kundenkonten löschen.)";
$lang['user_role_N']					= "Kampagnenmanager";
$lang['user_role_N_desc']				= "Ist auf alles innerhalb den erlaubten Kampagnen zugriffsberechtigt und hat beschränkten Zugriff auf kontoweite Einstellungen
											(Kann Berichte erzeugen, kann keine Rechnungsinformationen einsehen, kann keine Benutzer verwalten, kann keine Kampagnen erzeugen oder löschen.)";
$lang['user_role_O']					= "Beobachter";
$lang['user_role_O_desc']				= "Kann Benutzer- und Kunden-Info sowie bestimmte Kampagneneinstellungen einsehen (Belohnungen und Promotionen.)";
$lang['user_role_P']					= "Befristeter Mitarbeier";
$lang['user_role_P_desc']				= "Innerhalb berechtigter Kampagnen kann er nur neue Kunden anlegen sowie nur Kundenbesuche erfassen.";
$lang['user_role_S']					= "Stellvertretender Manager";
$lang['user_role_S_desc']				= "Kann Belohnungen und Promotionen innerhalb berechtigter Kampagnen verwalten, und kann alle Kundeninformations- und Kundenbesuchs-Aspekte verwalten.";

// Create New Campaign
$lang['campaign_new_create_button']		= "Kampagne erstellen";
$lang['campaign_new_created_header']	= "Neue Kampagne wurde erstellt";
$lang['campaign_new_created_msg']		= "<b>Herzliche Gratulation.</b><br>
											<br>
											Sie haben erfolgreich eine neue Kampagne erstellt.<br>
											<br>
											Als nächstes sollten Sie die Einstellungen für diese Kampagne<br>
											nach Ihren Geschäftsbedürfnissen anpassen:";
$lang['campaign_new_created_prefs']		= "Hier geht es weiter";
$lang['campaign_new_created_back_cp']	= "Zurück zum Konto Control Panel";
$lang['campaign_new_empty']				= "Sie müssen eine Kampagnenname eingeben:";
$lang['campaign_new_exists']			= "Die eingegebene Kampagnen-ID besteht bereits.<br>Bitte geben Sie eine andere Kampagnen-ID ein";
$lang['campaign_new_header']			= "Neue Kampagne";
$lang['campaign_new_name']				= "Geben Sie jetzt einen Kampagnennamen ein:";
$lang['campaign_new_name_restrict']		= "(Maximal 30 Zeichen, inklusive Leerschläge)";
$lang['campaign_new_step_dir']			= "Erstellen Sie Ihre erste Kampagne:";
$lang['campaign_new_sub_header']		= "Wählen Sie als Erstes den Kampagnentyp aus:";
$lang['campaign_new_type_empty']		= "Sie müssen einen Kampagnen Typ auswählen:";
$lang['campaign_new_buyx_desc']			= "Dieser Kampagnentyp ersetzt die Stempelkarten aus Papier und ist dadurch viel flexibler. Dieser Kampagnentyp erlaubt Ihnen, Ihre Kunden aufgrund einer beliebig festgelegten Anzahl verschiedener gekaufter Produkte, Produktkategorien oder Dienstleistungen zu belohnen.<br>
											<br>
											Bestens geeignet für Kaffehäuser und jede Art von Läden, die eine beschränkte Anzahl an Gegenständen oder Typen anbieten. (Bspw.: Kaufe 10 Kaffees und erhalte den
											nächsten kostenlos, kaufe 3 Tassen und du erhältst die nächste geschenkt, etc. Definieren Sie so viele dieser Kaufe 'X' und erhalte eine geschenkt Promotionen wie Sie wollen.)
											Diese Art von Kampagne wird oft in der Form von Papierkarten mit einer bestimmen Anzahl von leeren Quadraten, die voll gestempelt werden müssen, bevor eine Dienstleistung oder ein Produkt geschenkt wird, angetroffen.
											Dieser Kampagnentyp erlaubt Ihnen das selbe, aber nun ohne die Notwendigkeit, Karten zu drucken (und sich um verlorene zu kümmern, etc.). Ein anderer grosser Nutzen liegt darin, dass Sie wissen
											wie viele Kunden Sie im Programm haben und Sie jederzeit Kundenberichte erstellen können.
											</br>
											<br>
											<b>Sie können einer beliebigen Anzahl von Produkten oder Produktkategorien eine spezifische Anzahl Bezüge zuweisen, bis der Kunde ein
											kostenloses Produkt erhält. Zum Beispiel:</b><br>
											<li>10 mal Haare schneiden und das 11. Mal ist geschenkt. </li>
											<li>8 Kilogramm Tierfutter und das neute geht auf's Haus. </li>
											<li>8 Kuchenstücke und das nächste ist geschenkt. </li>
											<br>
											Es ist auch möglich, einen Standardwert festzulegen:<i>X bis das nächste kostenlos ist.</i> Dieser Standardwert erleichtert das Einrichten von mehreren
											Produkten, die alle nach derselben Anzahl Bezüge ein kostenloses Produkt zur Folge haben.";
$lang['campaign_new_earn_event_desc']	= "Ein Mischling zwischen einer Geschenkkarte und einer Ereignis-basierten Kampagne: Belohnen Sie jemanden, indem Sie ihm eine Geldgutschrift oder Bargeld
											für jedes Ereignis (Ladenbesuch, Weiterempfehlung, etc.) zuschreiben, das er später für Produkte oder Dienstleistungen in Ihrem Geschäft einlösen kann.
											<br>
											<br>
											<b>Mit diesem Kampagnentyp lassen sich folgende Kampagnenarten realisieren:</b><br>
											<li>Geben Sie an, wie viele ".$lang['currency_plural']." für jede Handlung oder jeden Besuch gutgeschrieben werden</li>
											<li>Lösen Sie eine beliebige Summe des gesammelten Kundentreueguthabens ein, genau wie bei einer Geschenkkarte</li>
											<br>
											<b>Einige Beispiele</b>:
											<li>Weiterempfehlungs Kampagne: Belohnen Sie Kunden, Hotel Concierges, Rezeptionsangesellte von grossen Unternehmen, für das Weiterempfehlen von Kunden in Ihr Geschäft.
											</li>
											<li>Zahlen Sie einem Mitarbeiter oder einem Auftragnehmer etwas für sich wiederholende Arbeiten.</li>
											<li>Belohnen Sie VIP Kunden mit geschäftseigenem Spielgeld, das sie in Ihrem Gescha&umlft wieder ausgeben können.</li>
											<li>Geben Sie Ihren Kindern Haushaltshilfe-Belohnungen.</li>";
$lang['campaign_new_event-based_desc']	= "Dieser Kampagnentyp erlaubt Ihnen Belohnungen abhängig von der Anzahl Kundenbesuche in Ihrem Geschäft anstatt aufgrund der ausgegebenen Geldsumme zu vergeben.
											<br>
											<br>
											Dieser Kampagnentyp wird oft für Weiterempfehlungskampagnen verwendet: Ihr Geschäft gibt einige Karten mit gleichlautenden Identifikationsnummern einem Ihrer Kunden, einem Hotel Concierge oder einer Rezeptionistin einer Firma.
											Wenn ein neuer Kunde durch Weiterempfehlung zu Ihnen in das Geschäft kommt und Ihnen eine dieser Karten übergibt, erhält die Person, die Sie weiterempfohlen hat, einen zusätzlichen 'Kundenbesuch'.
											Nach beispielsweise 5 'Besuchen' erhält die weiterempfehlende Person eine Belohnung. Sie erhalten mehr Neukunden. Alle Beteiligten gewinnen. <br>
											<br>
											Dies ist nur ein Szenario. Die Leute haben sehr kreative Wege gefunden, dieses Programm effektiv einzusetzen. <br>
											<br>
											Ein ereignisbasiertes Programm ermöglicht Ihnen:<br>
											<br>
											<b>Belohnungsabstufungen vorzunehmen. Zum Beispiel:</b><br>
											<li>Sammeln Sie 5 Ereignisse und erhalten Sie 10% Rabatt</li>
											<li>Sammeln Sie 10 Besuche und erhalten Sie 50% Rabatt</li>
											<li>Sammeln Sie 20 Weiterempfehlungen und erhalten Sie eine Massage</li>
											<br>
											<b>Einige Beispiele:</b><br>
											<li>Weiterempfehlungskampagnen wie oben beschrieben.</li>
											<li>Fitness-Studios, die über die Trainingseinheiten der Kunden Buch führen. </li>
											<li>Anzahl Produktreparationen, bis es ersetzt wird. </li>
											<li>Verwendung als VIP Club.</li>
											<li>etc... </li>";
$lang['campaign_new_gift_card_desc']	= "Eine Geschenkskampagne erlaubt Ihnen einem Kundenkonto einen Geldbetrag gutzuschreiben und diesen bei Verwendung wieder zu verkleinern.<br>
											<br>
											Simpel und einfach. Sie wird meistens in Verbindung mit einer Geschenkkarte aus Plastik verwendet, die mit einem bestimmten Geldbetrag aufgeladen wird. Diese kann dann als Geschenk oder als Pre-Paid Karte verwendet werden.
											<br>
											<br>
											<b>Plastikkarten werden nicht gebraucht.</b> Dieses Loyalitätsprogramm überall dort eingesetzt werden, wo ein hinterlegter Geldbetrag gebraucht wird.
											Abonnement, Sammelbezahlung, Teilzahlungsplan, Kinderrabatt... Ihrer Fantasie sind keine Grenzen gesetzt.";
$lang['campaign_new_points_desc']		= "Ihre Kunden sammeln basierend auf ihren Einkäufen, getätigten Zahlungen oder die durch uns festgelegten Promotionen Punkte.
											Die Punkte kl&uml;nnen je nach kundenindividueller Punkteabstufung eingelöst werden.<br>
											<br>
											Ein Punkteprogramm wie ein Airline Meilenprogramm erlaubt Ihnen:<br>
											<br>
											<b>Weisen Sie eine bestimmte Punktesumme pro ausgegebenen ".$lang['currency_plural']." zu. Zum Beispiel:</b><br>
											<li>5 Punkte für jeden ".$lang['currency']."</li>
											<li>.25 Punkte pro ".$lang['currency']."</li>
											<br>
											<b>Legen Sie Bonusstufen fest. Einige Beispiele:</b><br>
											<li>1000 Punkte: 50% Rabatt auf einen Einkauf</li>
											<li>5000 Punkte: Kostenloses Geschenk</li>
											<li>100,000 Punkte: Eine Reise in das Disneyland.</li>
											<br>
											<b>Definieren Sie Promotionen. Einige Beispiele:</b><br>
											<li>Dienstags doppelte Punkteanzahl</li>
											<li>500 Punkte extra für Frühbucher</li>
											<li>25% Bonuspunkte durch einen Einkauf mit Geschenkkarte.</li>
											<br>
											Optional können Sie ein Kaufsummen-zu-Belohnungs-Verhältnis definieren, das Ihnen das Einlösen von Punkten durch einen ".$lang['currency']." Betrag erlaubt.";
$lang['campaign_new_name_desc']			= "Falls Sie Ihre erste Kampagne erstellen, geben Sie ihr einen Namen, der mit 'Test' beginnt. So erkennen Sie jederzeit, dass Sie bloss Sachen ausprobieren --
											Sie können beliebig viele Kampagnen anlegen, pausieren oder wieder löschen wie Sie möchten.<br>
											<br>
											Normalerweise ist es vorteilhaft, Ihren Organisationsnamen oder ein kurzes Wortspiel davon als Kampagnennamen zu verwenden. Hier einige Beispielnamen:<br>
											<li><b>ABC Bonusprogramm</b></li>
											<li><b>Gold Club</b> (For a salon called 'Red')</li>
											<li><b>Super Card</b> (For a coffee shop that caters to bikers)</li>
											<li><b>Party Punkte</b> (Für einen Catering Service)</li>";

// Campaigns: Common actions:
$lang['campaign_add_new']				= "Neue Kampagne hinzufügen";
$lang['campaign_delete_popup']			= "<strong>Diese Kampagne wird aus Ihrer Kampagnenliste entfernt und archiviert.</strong><br>
											Dieser Kampagnenname kann nicht als Name für eine neue Kampagne wiederverwendet werden.<br>
											<br>
											Um eine archivierte Kampange wieder zu aktivieren, kontaktieren Sie uns bitte. Für diesen Service wird eine Gebühr erhoben.<br>
											<br>
											<strong>Sind Sie sicher, dass Sie diese Kampagne entfernen wollen?</strong>";
$lang['campaign_delete_popup_pc']		= "Diese Kampagne wird aus Ihrer Kampagnenliste entfernt und archiviert.\n\n
											Dieser Kampagnenname kann nicht als Name für eine neue Kampagne wiederverwendet werden.\n\n
											Um eine archivierte Kampange wieder zu aktivieren, kontaktieren Sie uns bitte. Für diesen Service wird eine Gebühr erhoben.\n\n
											Sind Sie sicher, dass Sie diese Kampagne entfernen wollen?";
$lang['campaign_hide_on_hold']			= "Deaktivierte Kampagnen verbergen";
$lang['campaign_none_yet']				= "Um eine neue Kampagne zu erstellen, (Geschenk- oder Loyalitätsprogramm)<br>
											klicken Sie untenstehenden  Kampagnen hinzuf&uml;gen Knopf";

$lang['campaign_type_buyx']				= "Kaufe X erhalte 1 gratis Programm";
$lang['campaign_type_earn_per_event']	= "Verdiene Geld pro Event Programm";
$lang['campaign_type_event-based']		= "Ereignisbasiertes Programm";
$lang['campaign_type_gift_cards']		= "Geschenkkarten Programm";
$lang['campaign_type_points']			= "Punkte-Programm";
$lang['campaign_view_on_hold']			= "Deaktivierte Kampagnen anschauen";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']				= "Fügen sie eine Prämienstufe hinzu";
$lang['edit_reward_add_another']		= "Fügen Sie eine zusätzliche Prämienstufe hinzu";
$lang['edit_reward_desc_empty']			= "Sie müssen eine Beschreibung der Prämienstufe angeben.";
$lang['edit_reward_level_header']		= "Prämienstufe bearbeiten";
$lang['edit_reward_header']				= "Behlohnungsstufen";
$lang['edit_reward_none']				= "Zurzeit sind keine Prämien definiert";
$lang['edit_reward_table_header']		= "Belohnungsbeschreibung";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "Dieses Verhältnis kann jederzeit geändert werden. Die von den Kunden bestehenden, angesammelten ".$lang['points']." werden nicht ändern.";
$lang['edit_points_desc']				= "Dies kann eine x-beliebige Zahl sein. Alles, was für Sie Sinn macht. Zum Beispiel:";
$lang['edit_points_desc_header']		=  "Für jeden ausgegebenen ".$lang['currency']." werden ".$lang['Points']." vergeben.";
$lang['edit_points_empty']				= "Um die Belohnung zu erhalten, müssen Sie eine Zahl von ".$lang['points']." eingeben.";
$lang['edit_points_examples_header']	= "Einige Beispiele von Punkte basierten Belohnungen:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "20% Rabatt";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "Zusätzliche Maniküre";
$lang['edit_points_ex_3_amount']		= "750";
$lang['edit_points_ex_3_desc']			= "Eine geschenkte zusätzliche Übernachtung";
$lang['edit_points_ex_4_amount']		= "1000";
$lang['edit_points_ex_4_desc']			= "Ein kostenloses Shampoo";
$lang['edit_points_ex_5_amount']		= "20";
$lang['edit_points_ex_5_desc']			= "Ein 10kg Sack Katzenfutter kostenlos";
$lang['edit_points_ex_6_amount']		= "15,000";
$lang['edit_points_ex_6_desc']			= "VIP Club Level";
$lang['edit_points_ex_7_amount']		= "160";
$lang['edit_points_ex_7_desc']			= "Vorzugsplatzierung";
$lang['edit_points_ex_8_amount']		= "100,000";
$lang['edit_points_ex_8_desc']			= "Zusätzlicher Reiseteilnehmer nach Disneyland";
$lang['edit_points_not_valid']			= "Die Summe von ".$lang['points']." muss eine Nummer sein.";
$lang['edit_points_profit_ratio_error']	= "Sie müssen einen positiven Wert eingeben. Leer lassen, um nicht zu verwenden.";
$lang['edit_points_step_dir']			= "Legen Sie die Einstellungen für Ihre ".$lang['Points']." Kampagen vor:";
$lang['edit_points_table_header']		= "Beschreibung Ihrer Belohnung falls Sie den Betrag von ".$lang['points']." erreichen.";
$lang['edit_points_too_small']			= "Sie müssen mindestens einen Wer von 1 eingeben ".$lang['point'].".";

$lang['edit_promo_table_header']		= "Promotionsbeschreibung";
$lang['edit_promo_none']				= "Zurzeit ist keine Promotion definiert";
$lang['edit_promo_add']					= "Fügen Sie eine Promotion hinzu";
$lang['edit_promo_add_another']			= "Fügen Sie eine zusätzliche Promotion hinzu";
$lang['edit_promo_desc']				= "Promotionen verändern den Weg, wie ".$lang['points']." erworben werden. Sie können Promotionen aufsetzen, die eine bestimmte Anzahl ".$lang['points']." hinzufügen oder abziehen oder mit einem bestimmten Faktor multipliziert werden, sobald eine Transaktion erfasst wird. Betrachten Sie folgende Beispiele:";
$lang['edit_promo_edit_header']			= "Promotion bearbeiten";
$lang['edit_promo_edit_error_header']	= "Sie müssen eine Zahl eingeben, mit der die erworbenen ".$lang['points']." multiplizert werden.<br>Zum Beispiel:";
$lang['edit_promo_edit_error_add']		= "Sie müssen eine Zahl von ".$lang['points']." eingeben, um die erworbenen Punkte hinzu zu fügen. Zum Beispiel, \"500\" wird die erworbenen ".$lang['points']." um 500 erhöhen. \"-100\" wird die Anzahl erworbener ".$lang['points']." um 100 reduzieren (bis zu 0 Punkte, aber nicht weiter.)";
$lang['edit_promo_edit_error_multi']	= "Der Faktor, mit der die ".$lang['points']." multipliziert werden, muss eine Zahl sein.";
$lang['edit_promo_edit_error_not_valid']= "Die hinzuzufügende Punkte müssen eine Zahl sein.";
$lang['edit_promo_edit_ex_1']			= "2 wird die erworbenen Punkte verdoppeln.";
$lang['edit_promo_edit_ex_2']			= ".5 wird die Punkte halbieren.";
$lang['edit_promo_edit_ex_3']			= "1.1 fügt 10% mehr Punkte hinzu.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "500 ".$lang['points']." für eine Weiterempfehlung hinzufügen";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']." Neumitgliederbonus";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "50 ".$lang['points']." Abzug für zu spätes erscheinen";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "VIP Mitglied: Verdoppeln der erworbenen ".$lang['points']."";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "Dienstags 50% Extra ".$lang['points']."";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "Silber Mitglied: 25% Extra ".$lang['points'];
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "für 25% weniger ".$lang['points'];
$lang['edit_promo_name_empty']			= "Um von der Promotion zu provitieren, müssen Sie einen Namen angeben";
$lang['edit_promo_note_1']				= /*(Addtion Operation)*/ "Promotionen werden automatisch erfasst: Wählen Sie nur die Promotion aus und klicken Sie auf"; /* ("record button") */
$lang['edit_promo_note_2']				= /*(Multiplication Operation)*/ "Promotionen werden nicht automatisch erfasst: Ein Einkaufsbetrag wird benötigt.";
$lang['edit_promo_table_header_1']		= "Multiplizieren<br>oder addieren";
$lang['edit_promo_table_header_2']		= "Mit Wie Viel";
$lang['edit_promo_table_header_3']		= "Promotion ID";

$lang['edit_str_header']				= "Optional: Möglichkeit, ".$lang['currency']." Beträge einzugeben, um Punkte einzulösen";
$lang['edit_str_desc']					= "Das Ausgaben-zu-Belohnungsverhältnis ist eines von zwei Verhältnissen, das Sie gebraucht haben, um die richtigen Wert an ".$lang['points']." herauszufinden, mit denen Sie Ihre Kunden belohnen. Wenn Sie dieses Verhältnis hier eingeben, aktivieren Sie die Möglichkeit, dass Ihre Kunden alternativ die Anzahl ".$lang['points']." als einen ".$lang['currency']." Betrag einlösen können:";
$lang['edit_str_ratio_header']			= "Möglichkeit, den Betrag von ".$lang['currency']." einzugeben,<br>um Punkte einzulösen:";
$lang['edit_str_ratio_on']				= "Eingeschaltet";	// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']				= "Ausgeschaltet";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_ratio_sub_header']		= "Ihr Ausgabe-zu-Belohnungs Verhältnis:";
$lang['edit_str_ratio_not_set']			= "Nicht gesetzt";
$lang['edit_str_example_header']		= "Zum Beispiel:";
$lang['edit_str_example_1']				= "Ihr Kunde will etwas kaufen, das ".$lang['currency_symbol']."100 Punkte benötigt und Sie hat 1000 ".$lang['points']." akkumuliert. Er fragt, ob er den Gegenstand teilweise mit seinen  ".$lang['points']." bezahlen kann.";
$lang['edit_str_example_1_desc']		= "Wenn Sie also das oben genannte Ausgabe-zu-Belohnungs Verhältnis eingegeben haben, <b>kann das Programm automatisch herausfinden, wie viele ".$lang['points']." es  wert sind</b>. Es ist daher für Sie oder Ihre Kassenmitarbeiter nicht nötig, komplizierte Prämientabellen in Erinnerung zu haben oder einen Taschenrechner zu Hilfe zu nehmen.";
$lang['edit_str_example_math_show']		= "Klicken Sie hier, um die Berechnung zu sehen.";
$lang['edit_str_example_math_hide']		= "Huch! Mathe-Formeln verbergen!";
$lang['edit_str_example_math']			= "Sagen wir, Sie legen ein ".$lang['ppd']." Verhältnis
											von 5 und ein Ausgabe-zu-Belohnungs Verhältnis von 20 fest. Dann gilt:<br>
											1000 ".$lang['points']." / 5 ".$lang['ppd']." / Ausgabe-zu-Belohnungs Verhältnis von 20 = ".$lang['currency_symbol']."10<br>
											<br>
											Eine andere Art diese Formel zu betrachten ist, dass CHF10 x 5 ".$lang['ppd']." = 50 ".$lang['points'].", und mit
											einem Ausgabe-zu-Belohnungs Verhältnsi von 20 benötigen Sie 20 x 50 ".$lang['points']." (1000 ".$lang['points'].") damit Sie ".$lang['currency_symbol']."10 einlösen können.";
$lang['edit_str_example_math_height']	= "90";	// Dies ist die Höhe, in Pixeln, des Abschnitts in dem die Mathe-Formeln eingeblendet sind.
												// Falls die Übersetzung des obigen Abschnitts mehr Platz bedarf, erhöhe diese Zahl entsprechend.
$lang['edit_str_note_1']				= "Um die Möglichkeit aufzuheben, ".$lang['currency']." Werte für ".$lang['points']." einzulösen , entfernen Sie das Ausgabe-zu-Belohnungsverhältnis (leer lassen) und drücken Sie"; /*(Set button)*/
$lang['edit_str_note_2']				= "Sie können das Ausgabe-zu-Belohnungsverhältnis jederzeit ändern, aber Ihre Prämienstufen werden nicht automatisch angepasst.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "Sie müssen die Anzahl von Ereignissen eingeben, die für die Einlösung der Prämie benötigt werden.";
$lang['edit_visits_not_valid']			= "Die Anzahl von Ereignissen muss eine Zahl sein.";
$lang['edit_visits_step_dir']			= "Setzen Sie für die Ereignisbasierten Kampagnen einige Prämienstufen:";
$lang['edit_visits_table_header']		= "Anzahl<br> der Ereignisse";
$lang['edit_visits_table_header_2']		= "Beschreibung der erhältlichen Belohnung sobald<br>die festgelegte Anzahl an Ereignissen erreicht wurde.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "Sie müssen mindestens einen Wert von 1 eingeben".$lang['currency_100th_symbol']." (0.01)";
$lang['edit_dpv_heading']				= "Prämien Einstellungen";
$lang['edit_dpv_label']					= $lang['currency_plural']." Verdienst pro Ereignis:";
$lang['edit_dpv_label_ending']			= "pro Ereignis.";
$lang['edit_dpv_note_1']				= "Diese Zahl kann jederzeit geändert werden, aber die bestehenden, von Kunden akkumulierten ".$lang['currency']." werden nicht verändert.";
$lang['edit_dpv_step_dir']				= "Legen Sie das Bargeld-Prämienlevel für die Kampagne fest:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "Die Anzahl von Services oder Produkten muss mindestens 1 sein<br>10 ist eine empfohlene Anzahl.";
$lang['edit_buyx_header']				= "Kaufen Sie X, erhalten Sie eines kostenlos Promotionen";
$lang['edit_buyx_item_empty']			= "Sie müssen einen Produkte- oder Service-Namen oder Beschreibung eingeben.";
$lang['edit_buyx_item_header']			= /* Hinzufügen oder Bearbeiten */ "ein Produkt oder einen Service";
$lang['edit_buyx_item_table_header_1']	= "Service, Produkt oder Kategorie";
$lang['edit_buyx_item_table_header_2']	= "Wie Viele Bis<br>das Nächste kostenlos ist";
$lang['edit_buyx_none']					= "Kein Service oder Produkt festgelegt.";
$lang['edit_buyx_step_dir']				= "Legen Sie die Prämienstufen für die Kampagne fest:";
$lang['edit_buyx_table_header_1']		= "Produkt, Service oder Kategorie";
$lang['edit_buyx_table_header_2']		= "# bis<br>das nächste kostenfrei ist";
$lang['edit_buyx_add_another']			= "Einen weiteren Service oder Produkt hinzufügen";
$lang['edit_buyx_add']					= "Einen Service oder ein Produkt hinzufügen";
$lang['edit_buyx_default_header']		= "Standard Anzahl an Services oder Produkten, bis das nächste kostenfrei ist";
$lang['edit_buyx_default_label']		= "Standard für neue Services / Produkte:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "Legen Sie für Ihre Kampagne die Einstellungen und Prämienstufen fest:";
$lang['edit_giftcard_no_settings']		= "Für Geschenkkarten Kampagnen müssen keine Einstellungen oder Prämienstufen festgelegt werden.<br>(Gut, das war einfach!)";

// Common Customer Content
$lang['customer_account_activated']		= "Konto aktiviert";
$lang['customer_add_tab']				= "Kunde hinzufügen";
$lang['customer_lookup_tab']			= "Kunde suchen";
$lang['customer_id_not_exist']			= "Kundenkonto ID existiert nicht.";
$lang['customer_id_missing']			= "Keine Kundenkonto ID wurde eingegeben.";
$lang['customer_tip_1']					= "Haben Sie gewusst, dass Sie einen Strichcode-Scanner oder eine Magnetstreifen-Kartenlester verwenden können, um eine Kundennummer einzulesen?";
$lang['customer_tip_2']					= "Bookmarken Sie diese Seite unter Verwendung des Buchzeichen-Generators am Ende des"; /* Account Control Panel screen */
$lang['customer_last_activity']			= "Letzte Aktivität";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "Fehlermeldung: Löschen der Karte nicht möglich.";
$lang['manage_cards_find_by_date']		= "Datum der letzten Aktivität";
$lang['manage_cards_find_by_header']	= "oder eine Liste ALLER Kunden anzeigen:";
$lang['manage_cards_find_directions']	= "Füllen Sie untenstehende Felder aus:";
$lang['manage_cards_find_header']		= "Ein Kunde suchen:";
$lang['manage_cards_find_none']			= "Ihrer Anfrage entsprechen keine Datensätze.";
$lang['manage_cards_find_note']			= "Dies kann einige Minuten dauern, falls Sie ein paar tausend Kunden oder eine langsame Internet Verbindung haben.";
$lang['manage_cards_header']			= "Kundendatensätze verwalten";
$lang['manage_cards_list_header']		= "Kundenkonto Liste";
$lang['manage_cards_not_exist']			= "Dieser Kunde existiert nicht.";
$lang['manage_cards_cust_deleted']		= "Dieser Kunde wurde gelöscht.";
$lang['manage_cards_popup_warning']		= "Alle Kundeninformationen und alle Transaktionsaktivitäten werden hiermit <br>
											in allen mit diesem Kunden verbundenen Kampagenen gelöscht.<br><br>
											Auch werden <strong>Berichte keine vergangenen Aktivitäten dieses Kontos mehr aufzeigen</strong>.<br><br>
											Diese Handlung kann NICHT wieder RÜCKGÄNGIG gemacht werden!<br><br>
											Sind Sie sicher, diesen Kunden löschen zu wollen?";
$lang['manage_cards_popup_warning_pc']	= "Alle Kundeninformationen und alle Transaktionsaktivitäten werden hiermit\n
											in allen mit diesem Kunden verbundenen Kampagenen gelöscht.\n\n
											Auch werden Berichte keine vergangenen Aktivitäten dieses Kontos mehr aufzeigen\n\n
											Diese Handlung kann NICHT wieder RÜCKGÄNGIG gemacht werden!\n\n
											Sind Sie sicher, diesen Kunden löschen zu wollen?";

// Create New Customer Account
$lang['customer_new_card_desc']			= "Eine eindeutige Karten # oder <i>Kundenkonto ID</i> wird benötigt, damit Ihre Kunden die Kontostände<br> auf Ihrer Website abrufen können.";
$lang['customer_new_create_button']		= "Kundenkonto erstellen";
$lang['customer_new_demo_phone']		= "(555)555-5555";
$lang['customer_new_demo_email']		= "demo@email.com";
$lang['customer_new_demo_addtl_info']	= "Zusatzinformationen können hier eingegeben werden.";
$lang['customer_new_id_exists']			= "Die eingegebene Kundenkonto ID existiert bereits.";
$lang['customer_new_id_match']			= "Das nachfolgende Konto passt zu"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "Dies ist eine ungültige Kundenkonto ID.";
$lang['customer_new_exists']			= "Die eingegebene Information passt zu einem existierenden Kunden.";
$lang['customer_new_header']			= "Erstellen Sie ein neues Kundenkonto";
$lang['customer_new_multiple_matches']	= "Diese Konti passen zu der von Ihnen angegebenen Information:";
$lang['customer_new_other_campaigns']	= "Andere Kampagnen, denen Kunden<br>hinzuzufügen sind:";
$lang['customer_new_random_id']			= "Zufallsnummer erzeugen";
$lang['customer_new_steps_header']		= "Erstellen Sie ein Kundenkonto. Beispiel:";
$lang['customer_new_steps_dir']			= "Ein Kundenkonto kann mit einer eindeutigen Identifikationsangabe wie bspw. einer Telefonnummer, Email Adresse,
											Strichcode oder irgend etwas anderem, das den Kunden eindeutig identifiziert, angelegt werden. Fühlen Sie sich frei, ein Testkonto wie
											'11111' einzurichten; Sie können das Kundenkonto später wieder löschen.";
$lang['customer_new_not_allowed']		= "Es ist Ihnen nicht erlaubt, neue Kundendatensätze zu erstellen.";

// Lookup Customer Account
$lang['customer_activity_header']		= "Kontoaktivität";
$lang['customer_activity_none']			= "Dieses Konto war nicht aktiv.";
$lang['customer_activity_print_short']	= "Letzte Transaktion"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "Aktueller Kontostand:";
$lang['customer_lookup_balances_none']	= "Keine Kontostände";
$lang['customer_lookup_button']			= "Kunde suchen";
$lang['customer_lookup_header']			= "Kundenkonto suchen";
$lang['customer_lookup_instructions']	= "Geben Sie einen beliebigen Teil einer Kundeninformation ein:";
$lang['customer_lookup_multiple_match']	= "Die Nachfolgenden Datensätze entsprechen Ihrer Suchanfrage";
$lang['customer_lookup_multiple_view']	= "Kontodetails ansehen";
$lang['customer_lookup_no_match_add']	= "Keine entsprechende Datensätze gefunden. Untenstehend können Sie ein neues Konto anlegen";
$lang['customer_lookup_no_match']		= "In dieser Kampagne entsprechen keine Kunden Ihrer Suchanfrage.";
$lang['customer_lookup_not_allowed']	= "Sie dürfen keine individuellen Kundendatensätez ansehen.";
$lang['customer_lookup_steps_header']	= "Transaktionen hinzufügen und einlösen.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "Diesen Kunden zu anderen Kampagnen hinzufügen:";
$lang['customer_edit_campaigns_note']	= "Einen Kunden einer anderen Kampagne hinzufügen erlaubt Ihnen, nach dem Kunden mit einer Teileingabe einer Konto Information zu suchen.
											 Ansonsten können Sie mit der Karten # / nur mit der Konto ID, oder verwenden Sie
											das pull-down Menü oberhalb in der rechten Ecke, um von einer Kampagne zur nächsten innerhalb eines Kundendatensatzes zu navigieren.";
$lang['customer_edit_header']			= "Konto Information bearbeiten";
$lang['customer_edit_random_number']	= "Zufallsnummer erzeugen";
$lang['customer_edit_sub_header']		= "Alle Felder sind optional.";
$lang['customer_edit_activity_header']	= "Kundenkonto Informationsaktivität";

// Record Customer Transactions
$lang['transaction_add_button']			= "Zum Konto hinzufügen";
$lang['transaction_amount_not_valid']	= "TRANSAKTIONS FEHLER:<br>Der eingegebene Betrag in ".$lang['currency']." ist nicht gültig";
$lang['transaction_amount_too_samll']	= "TRANSAKTIONS FEHLER:<br>Der eingegebene Betrag in ".$lang['currency']." muss mindestens 0.01 sein";
$lang['transaction_new_gc_header']		= "Dem Konto hinzufügen";
$lang['transaction_new_header']			= "Neue Aktivität";
$lang['transaction_no_amount']			= "TRANSAKTIONS FEHLER:<br>Sie müssen einen Betrag in ".$lang['currency']." eingeben<br>oder eine Promotion auswählen.";
$lang['transaction_promo_not_valid']	= "TRANSAKTIONS FEHLER:<br>Um diese Promotion zu verwenden, müssen Sie einen Einkaufsbetrag eingeben.";
$lang['transaction_promos_label']		= "Eine Promotion auswählen:";
$lang['transaction_purchase_label']		= "Einkaufstotal Eingeben:";
$lang['send_email']						= "Email senden?";
$lang['transactions_buyx_none']			= "Keine Services oder Produkte definiert.";
$lang['transactions_buyx_none_dir']		= "Kehern Sie zum Kontroll-Panel zurück und bearbeiten Sie die Einstellungen.";
$lang['transactions_visit_credited']	= "1 Ereignis gutgeschrieben";
$lang['transactions_visit_redeemed']	= "Ereignisse eingelöst";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "Fehler beim Entfernen der Transaktion. Bitte versuchen Sie es erneut.";
$lang['transaction_delete_popup']		= "<strong>Dies wird die Transaktion permanent löschen.</strong><br><br>
											Diese Handlung kann nicht rückgängig gemacht werden!<br><br>
											Sind Sie sicher, dass Sie diese Transaktion löschen wollen?";
$lang['transaction_delete_popup_pc']	= "Dies wird die Transaktion permanent löschen.\n\n
											Diese Handlung kann nicht rückgängig gemacht werden!\n\n
											Sind Sie sicher, dass Sie diese Transaktion löschen wollen?";

// Redeem Rewards
$lang['redeem_buyx_header']			= "Prämien Tabelle";
$lang['redeem_buyx_sub_header']			= "Der Kunde hat genügend Aktivitäten angesammelt für:";
$lang['redeem_header']				= "Erhältliche Prämien";
$lang['redeem_header_alt']			= "Das Konto belasten";
$lang['redeem_points_partial_header']		= "Individuelle Reduktionen möglich"; /* points or dollars */
$lang['redeem_points_partial_none']		= "Sobald dieses Konto einen postitiven Kontostand hat."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "Oder wählen Sie eine Prämie aus, um sie einzulösen";
$lang['redeem_reward_description']		= "Prämienbeschreibung";
$lang['redeem_reward_balance_none']		= "Der aktuelle Kontostand ist zu gering,<br>um die vordefinierte Prämie einzufordern.";
$lang['redeem_reward_balance_zero']		= "Der aktuelle Kontostand ist zu gering,<br>um etwas beziehen zu können.";
$lang['redeem_reward_balances_none']		= "Der aktuelle Kontostand ist zu gering,<br>um eine Prämie einzufordern.";

// Reports
$lang['report_audit_title']			= "Transaktions Audit-Bericht";
$lang['report_audits_all_trans']		= "Alle Transaktionen";
$lang['report_audits_header']			= "Audits";
$lang['report_audits_redeemed_only']		= "Nur Eingelöste";
$lang['report_audits_totals']			= "Totale";
$lang['report_campaigns_included']		= "Kampagnen inklusive:";
$lang['report_col_1_header']			= "Bericht selektieren";
$lang['report_col_2_header']			= "Zeitperiode selektieren";
$lang['report_col_3_header']			= "Kampagne(n) selektieren";
$lang['report_date_not_valid']			= "Ungültiges Datum<br>(Evtl. ist es ein Schaltjahr)";
$lang['report_date_mismatch']			= "Fehlermeldung: Das Start-Datum kann nicht später als das End-Datum sein.";
$lang['report_frequent_header']			= "Stammkunden Bericht";
$lang['report_frequent_min_trans']		= "Minimale Transaktionsanzahl";
$lang['report_none']					= "Keine Kunden Übereinstimmungskriterium";
$lang['report_marketing_header']		= "Marketing";
$lang['report_marketing_new_cust']		= "Neukunden";
$lang['report_marketing_freq_cust']		= "Stammkunden";
$lang['report_marketing_freq_or_more']		= /* A given number of */ "Transaktionen oder anderes.";
$lang['report_marketing_include']		= "Einlöse-Transaktionen einschliessen.";
$lang['report_marketing_miss_dir_1']		= "Kunden mit Transaktionen in der obgennanten Zeitperiode,";
$lang['report_marketing_miss_dir_2']		= "und die nicht innerhalb nachfolgender Anzahl Tage zurück gekehrt sind:";
$lang['report_missing_header']			= "Kunden, die seit X-Tagen weg geblieben sind"; /* a number of days.*/
$lang['report_new_customers_header']		= "Neukunden Bericht";
$lang['report_new_customers_none']		= "Kein Neukunden Übereinstimmungskriterium";
$lang['report_new_customers_range']		= "Neukunden zwischen"; /* one date and another date */
$lang['report_no_transactions']			= "Keine Transaktionen gefunden";
$lang['report_redeem_one_letter_code']		= "R";
$lang['report_run_report_button']		= "Bericht ausführen";
$lang['report_totals_header']			= "Totale der Audit-Berichts";

// Report Months
$lang['Jan']							= "Jan";
$lang['Feb']							= "Feb";
$lang['Mar']							= "Mär";
$lang['Apr']							= "Apr";
$lang['May']							= "Mai";
$lang['Jun']							= "Jun";
$lang['Jul']							= "Jul";
$lang['Aug']							= "Aug";
$lang['Sep']							= "Sep";
$lang['Oct']							= "Okt";
$lang['Nov']							= "Nov";
$lang['Dec']							= "Dez";

// Auto-Generated Emails
$lang['email_account_activity']			= "Kontoaktivit‰ts-Update";
$lang['email_activated_header']			= "Kampagne Aktiviert";
$lang['email_activated_sub_header']		= "Die nachfolgende Kampagne wurde aktiviert:";
$lang['email_billing_header']			= "Änderung der Rechnungsstufe";
$lang['email_billing_from_level']		= "Bei Ihrem Konto hat die Rechnungsstufe geändert von";
$lang['email_deactivated_header']		= "Kampagke Deaktiviert";
$lang['email_deactivated_sub_header']	= "Die nachfolgende Kampagne wurde deaktiviert:";
$lang['email_greeting']					= "Hallo"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "Bewahren Sie diese Information an einem sicheren Ort auf";
$lang['email_html_callout_url']			= "Login URL"; // As in "the internet address where a client can log into the acount management application of StickyStreet."
$lang['email_keep_email_footer_1']		= "Bitte bewahren Sie diese Nachricht auf.";
$lang['email_keep_email_footer_2']		= "Sie beinhaltet wichtige Kontoinformationen.";
$lang['email_new_account_header']		= "Neues Konto";
$lang['email_new_account_sub_header']	= "Ein neues Konto wurde eroeffnet.";
$lang['email_html_password_nochange']	= "Keine Änderung"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "Online Kundenregistration";
$lang['email_online_register']			= "Der nachfolgende Kunde hat sich online fuer ein Konto registriert:";
$lang['email_password_header']			= "Passwortauffindung angefordert";
$lang['email_password_dir1']			= "Die Passwortanforderung lautet auf den Benutzer"; /* shows the User ID */
$lang['email_password_dir2']			= "Es lautet:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "Kontoänderungen";
$lang['email_update_sub_header']		= "Ihre Kontoinformation wurde aktualisiert.";
$lang['email_user_id_header']			= "Benutzer ID Auffindungsanforderung";
$lang['email_user_id_sub_header_1']		= "Sie haben die Ihrer Email-Adresse zugeordnete Benutzer ID angefordert:";
$lang['email_user_id_sub_header_2']		= "Sie haben die Ihrer Email-Adresse zugeordneten Benutzer IDs angefordert:"; // Plural


// Bookmarks
$lang['bookmarks_header']				= "Erstellen Sie Auto-Login Bookmarks";
$lang['bookmarks_table_header_1']		= "Wählen Sie die Seite, die Sie bookmarken wollen";
$lang['bookmarks_table_header_2']		= "Wählen Sie den Benutzer, um automatisch einzuloggen";
$lang['bookmarks_table_header_3']		= "Bookmarken Sie den Link";
$lang['bookmarks_link_1']				= "Klicken Sie mit der rechten Maustaste <br>auf diesen Link,<br>um ihn zu bookmarken.";
$lang['bookmarks_link_2']				= "Klicken Sie hier, um<br>zu der Seite zu gelangen<br> und von dort den Auto-Login zu bookmarken.";
$lang['bookmarks_note']					= "Behandeln Sie diese Links wie die Passwörter in Ihrem Konto.
											Wir empfehlen Ihnen, keine dieser Links per Email oder Chat zu versenden, stattdessen loggen Sie sich von dem Computer Ihrer Wahl ein
											und fügen Sie dort den Bookmark zur Bookmark-Liste des Browsers hinzu.";


// Common Error Messages:
$lang['error_email_space']				= "Leerzeichen sind in dieser Email Adresse nicht erlaubt.";
$lang['error_email_not_found']			= "Diese Email Adresse wurde nicht gefunden.";
$lang['error_email_not_valid']			= "Diese Email Adresse ist ungültig.";
$lang['error_customer_id_empty']		= "Sie müssen eine Kundenkonto ID eingeben.";
$lang['error_next_page']				= "Es gab ein Problem, die nächste Seite zu laden. Bitte versuchen Sie es noch einmal.";
$lang['error_password_empty']			= "Sie müssen ein ausgesuchtes Passwort eingeben.";
$lang['error_password_length']			= "Ihr Passwort muss zwischen 5 und 20 Zeichen lang sein.";
$lang['error_password_not_valid']		= "Ein Passwort kann nur Buchstaben, Zahlen oder Unterstriche (_) beinhalten";
$lang['error_password2_empty']			= "Sie müssen das Passwort erneut eingeben, um sicher zu stellen,<br>dass es das erste Mal korrekt eingegeben wurde.";
$lang['error_passwords_no_match']		= "Die Passwörter die Sie eingegeben haben, entsprechen sich nicht.<br>Bitte geben Sie diese erneut ein.";
$lang['error_phone_area_code']			= "Bitte geben Sie eine gültige Postleitzahl ein.";
$lang['error_phone_not_valid']			= "Dies ist eine ungültige Telefonnummer.";
$lang['error_service_down']				= "Dieser Dienst ist vorübergehend nicht verfügbar.<br><br>Wir entschuldigen uns für diese Unannehmlichkeit.";
$lang['error_updating']					= "Beim Akutalisieren der Information gab es einen Fehler. Bitte versuchen Sie es erneut.";
$lang['error_userid_error']				= "Fehlermeldung: Die Benutzer ID, die Sie eingegeben haben, wurde nicht gefunden.";
$lang['error_balance_lookup_activity']	= /* The account id entered */ "hat keine vermerkte Aktivität.";
$lang['error_balance_lookup_no_cust']	= "Kein Kundenkonto.";
$lang['error_balance_lookup_no_acct']	= "Keine Konto ID.";

// Alt Tags
$lang['alt_add_customer_button']		= "Klicken, um Kundenkonten dieser Kampagne hinzuzufügen";
$lang['alt_account_edit_save']			= "Klicken, um die Änderungen in diesem Formular abzuspeichern";
$lang['alt_campaign_delete']			= "Klicken, um diese Kampagne zu löschen";
$lang['alt_campaign_edit']				= "Klicken, um die Einstellungen dieser Kampagne zu bearbeiten";
$lang['alt_campaign_name']				= "Auf den Kampagnenname klicken, um bestehende Kunden zu suchen oder neue hinzu zu fügen";
$lang['alt_campaign_new_create']		= "Klicken, um diese Kampagne zu erstellen";
$lang['alt_campaign_place_on_hold']		= "Diese Kampagne ist aktiv. Hier klicken, um sie zu pausieren";
$lang['alt_campaign_re-activate']		= "Klicken, um diese Kampagne zu reaktivieren";
$lang['alt_cancel_changes']				= "Klicken, um alle Änderungen zu verwerfen und auf den vorausgegangenen Screen zurück zu kehren.";
$lang['alt_goto_ss']					= "Klicken, um in einem neuen Fenster zu diesen Link zu öffnen";
$lang['alt_lookup_customer_button']		= "Klicken, um in dieser Kampagne Kundenkonten zu suchen";
$lang['alt_user_add']					= "Klicken, um einen neuen Benutzer mit eigenen Login Name und Berechtigungsstufe anzulegen";
$lang['alt_user_delete']				= "Klicken, um diesen Benutzer zu löschen, damit er sich nicht mehr einloggen kann und keinen Kontozugriff mehr hat.";
$lang['alt_user_edit']					= "Klicken, um die Eigenschaften dieses Benutzers zu bearbeiten";

// Outside / Optional Links
// ------------------------
// Translate this section ONLY if the embeded links have been replicated in the new language:

// Legal Documents
$lang['terms_conditions_location']		= 'terms-conditions.html';

// Edit Preferences: Points Campaign
$lang['edit_points_note_1_graphic']		= '<a href="http://www.stickystreet.com/calculator.php" target="_blank"><img align="right" src="graphics/calculator.gif" width="72" height="80" border="0" vspace="5" hspace="3"></a><span style="color: #666;">';
$lang['calculator_link'] 				= '<a href="http://www.stickystreet.com/calculator.php" target="_blank">';
$lang['edit_points_note_1'] 			= "Unser Punkte Kalkulator ".$lang['calculator_link']." unterstützt Sie beim Herausfinden der benötigten Prämienpunkte</a>:";

$lang['blog_link_accounting'] 			= '<a href="http://support.stickystreet.com/forums/16257/entries/12598" target="_blank">';
$lang['edit_points_note_2'] 			= "Für eine Diskussion über Prämienstufen und der dahinterliegenden Logik sehen Sie ".$lang['blog_link_accounting']."sich diesen Post</a> im Support-Forum an.";

$lang['edit_str_desc_with_link']		= "Das Ausgabe-zu-Belohnungs Verhältins ist eines von zwei Verhältnissen, das Sie für die Berechnung der ".$lang['points']." Werte für Ihre Prämien benötigen (unabhängig, ob sie den ".$lang['calculator_link'].$lang['Points']." Rechner verwendet haben</a> oder nicht.) Wenn Sie es hier eingeben, können Sie die Funktion der Rückzahlung von  ".$lang['points']." durch die Eingabe eines ".$lang['currency']." Wertes aktivieren:";


// =========================
// ADDITIONAL TRANSLATIONS 1
// =========================

// Single words and labels
$lang['Referrer']						= "Empfehler"; 	// As in a person or entity that sends business your way.
$lang['Comma']							= "Komma";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Deducted']						= "Subtrahiert";	// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Item']							= "Gegenstand";		// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Pipe']							= "Pipe";		// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "Gekauft";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Tab']							= "Tabulator";		// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Required']						= "Zwingend";	// As in necessary, compulsory. Ex: "The name field is required."
$lang['optional']						= "optional"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";

// Page Titles
$lang['title_managing_cards']			= "Kundendaten verwalten";
	$lang['importing_customers']		= "Kunden importieren";
	$lang['customers_imported']			= "Importierte Kunden";
	$lang['importing_transactions']		= "Transaktionen importieren";
	$lang['transactions_imported']		= "Importierte Transaktionen";

// Labels
$lang['label_currency']					= "Währung";				// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']			= "Währungssymbol";		// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_language_select']			= "Anzeigesprache";		// As in a prompt to the user to select a language for the application
$lang['label_localization']				= "Lokalisierung";			// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_timezone']					= "Zeitzone";

// New Account Screen
$lang['account_language_error']			= "Mit der gewählten Sprache gibt es einen Fehler.";
$lang['account_language_note']			= "Bemerkung: Dies ist die standard Spracheinstellung für dieses Konto.<br>
											Sie kann in der Benutzerverwaltung oder beim Login<br>
											durch die Auswahl einer anderen Sprache geändert werden.";
$lang['account_timezone_note']			= "Bemerkung: Dies ist die standard Zeitzoneneinstellung für dieses Konto.<br>
											Ein Kontobenutzer kann (in der Benutzerverwaltung) auf eine andere Zeitzone gesetzt werden,<br>
											dies wird die aktuelle Einstellung überschreiben.";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']			= "Kunden und Transaktionen Import";
$lang['manage_import_customers']		= "Kunden importieren";
$lang['manage_import_transactions']		= "Kundentransaktionen importieren";
$lang['manage_import_no_none']			= "Alle Felder können nicht auf 'none' gesetzt sein. Bitte wählen Sie mindestens ein Feld für den Import aus.";
$lang['manage_import_duplicate_card']	= "Karte duplizieren:";
$lang['manage_import_duplicate_found']	= "Duplizieren";
$lang['manage_import_duplicates_found']	= "Duplikate";
$lang['manage_import_successful']		= "Erfolgreicher Import";
$lang['manage_import_new_customer']		= "Neuer Kunde importiert";
$lang['manage_import_new_customers']	= "Neue Kunden importiert";
$lang['manage_import_updated_customer']	= "Kunde aktualisiert";
$lang['manage_import_updated_customers']= "Kunden aktualisiert";
$lang['manage_import_no_cust_data']		= "Es wurden keine Kundendaten für den Import angegeben. Bitte kopieren Sie Ihre Kundendaten in die untenstehende Box hinein:";
$lang['manage_import_campgn_not_valid']	= "Eine der ausgewählten Kampagnen ist ungültig.";
$lang['manage_import_select_1_campaign']= "Sie müssen mindestens eine Kampagne auswählen, der Sie die Kunden hinzufügen wollen:";
$lang['manage_import_select_delimiter']	= "Bitte wählen Sie eines der obigen Trennzeichen aus.";
$lang['manage_import_new_trasns']		= /* a number */ "Neue Transaktionen erfasst";
$lang['manage_import_new_account']		= "Neues Kundenkonto erstellt";
$lang['manage_import_new_accounts']		= "Neue Kundenkonten erstellt";
$lang['manage_import_no_cust']			= "Keine Kunden importiert oder aktualisiert";
$lang['manage_import_no_trans']			= "Keine Transaktionen erfasst";
$lang['manage_import_no_trans_data']	= "Es wurden keine Transaktionsdaten für den Import angegeben. Bitte kopieren Sie die Transaktionsdaten in die untenstehende Box hinein:";
$lang['manage_import_fields_missing']	= "Einige zwingend auszufüllende Felder fehlen.";
$lang['manage_import_cust_instr_head']	= "<b>Eine Liste mit Kunden zu importieren ist ziemlich einfach:</b>";
$lang['manage_import_cust_instr_1']		= "Wählen Sie die Kmapagne(n) aus, denen die Kunden hinzugefügt werden sollen.";
$lang['manage_import_cust_instr_2']		= "Legen Sie die Spaltenreihenfolge und das Spaltentrennzeichen fest.";
$lang['manage_import_cust_instr_3']		= "Kopieren Sie Ihre Liste in die grosse Box hinein und überprüfen Sie ob Sie übereinstimmende Datensätze <br> mit derselben Konto ID / Karten # überschreiben oder ignorieren wollen.";
$lang['manage_import_cust_instr_4']		= "Daten können in einem beliebigen der nachfolgenden Formate sein<i>(Jahre müssen 4 Zeichen haben)</i>:<br>
														<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre>";
$lang['manage_import_campaigns_list']	= "Kampagnenliste";
$lang['manage_import_add_campaigns']	= "Zu den Kampagnen hinzufügen";
$lang['manage_import_field_order']		= "Feldreihenfolge";
$lang['manage_import_field_delimiter']	= "Feld Trennzeichen";
$lang['manage_import_excel_default']	= "(den Standard bei Kopie aus MS Excel)";
$lang['manage_import_field_note']		= "<i>Jedes Feld ist optional.</i><br>
												<br>
												Hinweis: Falls Sie später Kundentransaktionen hinzufügen wollen<br>
												wird für jeden Kunden eine eindeutige <i>Kunden<br>
												Konto ID / Karten #</i> benötigt<br>
												 (um anschliessend die Transaktionen einzelnen Kunden<br>
												zuordnen zu können).";
$lang['manage_import_customer_list']	= "Kundenliste";
$lang['manage_import_duplicates']		= "Duplikate?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "überschreiben"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "Kopiere die Kundenliste in untenstehende Box";
$lang['manage_import_trans_instrctns']	= "<b>Um eine (vor-konvertierte) Transaktionsliste zu importieren:</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">Wenn Sie <b>Bargeld Transaktionen</b>in eine Punkte-Basierte Kampagne importieren , versichern Sie sich, dass Sie
													<b><i>Bargeldbeträge erst in Punkte konvertieren</i></b>. (Erstellen Sie in Excel eine neue Spalte und multiplizieren Sie in dieser den
													geldmässigen Kaufbetrag mit dem ".$lang['ppd']." Verhältnis, das in den Kampagnen-Einstellungen vorgegeben ist, um den Geldbetrag in erworbene Punkte umzurechnen.)
												<li style=\"padding-bottom: 5px;\">Legen Sie in untenstehendem Pull-Down Menü fest, wie die Spalten in der Exportdatei getrennt sind und in welcher Reihenfolge sie vorkommen.</li>
												<li style=\"padding-bottom: 5px;\">Vergewissern Sie sich, dass 'Einlöse-Transaktionen' ein '<b>Y</b>' in der 'Redeem Event' Spalte haben und dass sie als <b><i>POSITIVE Werte</i></b> eingegeben sind.</li>
												<li style=\"padding-bottom: 5px;\">Wenn sie Transaktionen für eine '<b>Kaufe X erhalte eines gratis</b>' Kampagne importieren, vergewissern Sie sich, die '<b>Item Purchased</b>' Spalte selektiert zu haben.</li>
												<li style=\"padding-bottom: 5px;\">Falls kein Datum mit der Transaktion mitgeliefert wird, wird die Transaktion mit dem heutigen Datum abgespeichert.<br>
													Daten können in einem beliebigen der nachfolgenden Formate sein<i>(Jahre müssen 4 Zeichen haben)</i>:<br>
													<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre></li>
												<li style=\"padding-bottom: 0px;\">Kopieren Sie Ihre Liste nachfolgend in die grosse Box hinein.</li>
											</ol>";
$lang['manage_import_campaign_name']	= "Kampagnen-ID";
$lang['manage_import_trans_date']		= "Transaktionsdatum";
$lang['manage_import_trans_amount']		= "Transaktionssumme";
$lang['manage_import_redeem_event']		= "Eingelöstes Ereignis (Y/N)";
$lang['manage_import_req_for_buyx']		= "Benötigt ausschliesslich (für 'Kaufe X erhalte eines gratis' Kampagnen)";
$lang['manage_import_item_purchased']	= "Gekaufter Gegenstand";
$lang['manage_import_description_auth']	= "Beschreibung / Auth.";
$lang['manage_import_trans_list']		= "Transaktionsliste";
$lang['manage_import_paste_trans']		= "Kopieren Sie die Kundentransaktionen in die untenstehende Box";

// Reports
$lang['report_all_customers']			= "Alle Kunden";
$lang['report_all_customers_header']	= "Bericht über alle Kunden";
$lang['report_all_customers_range']		= "Alle Kunden zwischen"; /* one date and another date */
$lang['report_balances_header']			= "Kundensaldo Bericht";
$lang['report_balances']				= "Kundensaldi für";
$lang['report_date_range']				= "Kunden, die Transaktionen hatten zwischen:"; /* a range of dates.*/
$lang['report_search_header']			= "Kunden Such Bericht";
$lang['report_search']					= "Nach Kunden suchen mit:";
$lang['report_search_range']			= "Zwischen"; /* one date and another date */
$lang['report_search_not_valid']		= "Sie müssen etwas eingeben, um danach zu suchen.";

// Report Exporting
$lang['export_xls']						= "Nach Excel exportieren";

// Users: Common actions:
$lang['user_role_F']					= "Leistungserbringender Vertragspartner";
$lang['user_role_F_desc']				= "Innerhalb der berechtigten Kampagnen kann er nur Kundenprämien einlösen.";

// Common Error Messages:
$lang['error_language_selector']		= "Mit der gewählten Sprache gibt es einen Fehler.";

$lang['side_support_ideas']				= "Kampagnen Ideen";
$lang['side_support_ideas_describe']	= "Ideen und Anleitungen über kreative Wege, um unsere Programme für Ihr Marketing, Ihre Organisation oder allgemeine Verhaltens-änderungs Bedürfnisse zu verwenden.";

// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================

$lang['error_account_suspended']		= "Dieses Konto wurde aufgehoben";

// Calculator
$lang['calculator_title']				= "Punkte-Programm Rechner";
$lang['str_ratio']						= "Ausgaben-zu-Belohnungs-Verhältnis";  // (same as "edit_str_ratio_sub_header", but without "your")
$lang['check_section_desc']				= "Vergewissern Sie sich, dass Sie nicht mehr verschenken<br>als Sie einnehmen:";
$lang['Print']							= "Drucken";
$lang['column_product_or_pervice']		= "Produkt oder Service";
$lang['column_retail_price'] 			= "Einzelhandelspreis des Produkts / Service";
$lang['column_points_earned'] 			= "Gesammelte Punkte durch Einkäufe pro Kunde";
$lang['column_points_needed'] 			= "Benötigte Punkte, um sie als Belohnung einlösen zu können";
$lang['column_cost_to_provide'] 		= "Ihre Kosten, um das Produkt / Service anzubieten";
$lang['column_profit_made'] 			= "Erzielerter Gewinn durch den Verkauf von";
$lang['column_profit_made_part2']		= "Produkte<br>oder Dienstleistungen";
$lang['column_cost_reward_perc']		= "Belohnungskosten<br>in % des Gewinns.";
$lang['column_cost_reward_smaller']		= "(Je kleiner, umso besser)";
$lang['instructions']					= "Anweisungen";
$lang['calculator_instructions_1']		= "<strong>1) Ihre Kunden erhalten Punkte für jede Geldeinheit, die sie ausgeben.
											Wie viele Punkte? Dies ist eine beliebige Zahl:</strong><br>
											<br>
											Sicherlich, 1 Punkt fu&umll;r eine Geldeinheit ist einfach, aber es macht es Ihren Kunden auch viel leichter herauszufinden,
											wieviel sie in Ihrem Geschäft ausgegeben haben, wenn sie auf die kumulierte Punktesumme  schauen.
											Echt, es gibt keinen Grund, Ihre Kunden darauf aufmerksam zu machen, dass sie Ihr Geschäft lieben und ein Vermögen bei Ihnen ausgeben.
											Deshalb ist es sinnvoller, eine Zahl zu nehmen, die es ein wenig schwieriger macht, den kumulierten, ausgegebenen Betrag auszurechnen!
											Wir empfehlen mindestens 100, falls Sie Cents oder Rappen zählen. Es können aber auch einfach 3, 5 oder 20 sein, wenn
											es Ihnen nichts ausmacht, wenn einige Cents auf den nächsten vollen Punktewert abgerundet werden.<br>
											<br>
											<strong>Wenn Sie eine Zahl ausgewählt haben, tragen Sie diese in die <span class=\"orangeH\">Punkte pro Geldeinheit</span> Box ein.</strong><br>";
$lang['calculator_instructions_2']		= "<strong>2) Als nächstes ist <i>das Ausgabe-zu-Belohnungs Verhältnis</i> festzulegen.
											Dabei ist folgende Frage zu beantworten: \"Wie viele Male sollte ein Kunde ein Produkt oder Service kaufen, bis eine Belohnung von gleichem Wert erreicht ist?\"</strong><br />
											<br>
											Normalerweise handelt es sich um eine Zahl zwischen 8 und 25 oder mehr. Aber generell ist dies etwas sehr Geschäftsspezifisches.
											Beispielsweise sehen Sie oft Kaffeestuben, die einen kostenlosen Kaffee nach 10 bezahlten offerieren. Je höher die Zahl, desto konservativer
											ist das Programm, bezgl. den Geldbeträgen, aber für Ihre Kunden wird es auch umso schwieriger Ihre Präie zu erhalten.<br>
											<br>
											<strong>Geben Sie eine Zahl in das<span class=\"orangeH\">Ausgaben-zu-Belohnungs-Verhältnis</span> Feld ein,
											und spielen Sie mit verschiedenen Werten.
											Probieren Sie einige Werte aus, bis Sie mit den Ergebnissen zufrieden sind.</strong>";
$lang['calculator_disclaimer']			= "<strong>Haftungsausschluss</strong>: Dieser Rechner wird nur als Referenzwerkzeug zur Verfügung gestellt und wird ermutigen unsere Geschäftsinhaber vor einer Kampagne die Folgen mit einem erfahrenen Berater zu besprechen!";

// =========================
// ADDITIONAL TRANSLATIONS 3
// =========================

// Transaction Email Content Preferences:
$lang['transaction_email_content']		= "Transaktions-Email: Inhalt";
$lang['transaction_email_desc']			= "Wenn Sie eine Transaktion erfassen und der Kunde eine Email-Adresse hinterlegt hat, können Sie auswählen, ihm eine Email zu senden.";
$lang['transaction_email_instr']			= "Um die Email, die Ihre Kunden von Ihnen für diese Kampagne erhalten anzupassen, befüllen oder ändern Sie die Textboxen in der nachfolgenden Email-Vorlage:";
$lang['transaction_email_default']		= "Herzlichen Dank für Ihre Treue und das uns entgegengebrachte Vertrauen!";
$lang['transaction_email_incl_balance']	= "Kontostand hinzufügen";
$lang['transaction_email_incl_rewards']	= "Prämien Info hinzufügen";
$lang['transaction_email_incl_coupon']	= "Coupon oder Promotion hinzufügen";
$lang['error_general_permission']		= "Inhalt nicht verfügbar";

// =========================
// ADDITIONAL TRANSLATIONS 4
// =========================
$lang['customer_edit_address_change']	= "Die geänderte Adresse lautet";
$lang['customer_edit_address_delete']	= "Die Adresse wurde entfernt. Previously";
$lang['customer_edit_address_replace']	= "Die Adresse änderte von";

// =========================
// ADDITIONAL TRANSLATIONS 5
// =========================
// Email Updates:
$lang['email_agency_update_header']				= "Kontoaenderungen";  //Kontoaenderungen
$lang['email_agency_update_sub_header'] 		= "Die folgenden Kontoinformationen wurden aktualisiert:";
// Import Updates:
$lang['Options']                             = "Optionen";  // Plural. The ability to choose from different alternatives or non-required additional specifications.
$lang['manage_import_duplicates_update']     = "Aktualisieren";
$lang['manage_import_duplicates_ignore']     = "Überspringen";
$lang['manage_import_convert_currency'] 		= "Transaktionsbetrag in gemessene Kampagnen-Einheiten umwandeln?";
$lang['manage_import_trans_instrctns_2']    	= 'Wenn Sie <b>BAR Transaktionen</b> in eine Punkte basierte Kampagne,
                                             oder eine Besucherliste in ein Verdiene-pro-Ereignis Kampagne importieren, stellen Sie sicher, dass Sie das
                                             "'.$lang['manage_import_convert_currency'].'" Kästchen ankreuzen. Versichern Sie sich, dass wenn Sie
															individuelle Punktemengen oder individuell gutgeschriebene Punktemengen importieren, Sie das Kästchen nicht ankreuzen.';
// Import Undo
$lang['import_previous_title']              = 'Vorgängige Importe';
$lang['Undo']                               = 'Rückgängig';
// BuyX Membership Functionality
$lang['Quantity']                          = "Hinzuzufügende Menge";
// Mailchimp Integration:
$lang['select_a_list_to_export_to']       = "Wählen Sie eine Liste für den Export aus";
$lang['success']                          = "Erfolg";
$lang['export_complete']                  = "Export abgeschlossen";
$lang['loading']                          = "Ladevorgang läuft...";
$lang['oops']                             = "Ups!";
$lang['addresses_successfully_added']   	= "Zu dieser Liste erfolgreich hinzugefügte E-mail Adressen";
$lang['all_addresses_exist']              = "Jede dieser Adressen ist bereits in der Liste vorhanden!";
$lang['addresses_exist']                  = "Bereits in dieser Liste existierende E-mail Adressen";
$lang['we_found']                         = "Gefunden wurden";
$lang['errors']                           = "Fehlermeldungen";
$lang['addresses_with_errors']            = "E-mail Adressen mit Fehlermeldungen";
$lang['Back']                             = "Zur&uml;ck";
$lang['CLOSE']                            = "SCHLIESSEN";
$lang['Visit_MailChimp']                  = "MailChimp besuchen";
$lang['mailchimp_integration']                  = "MailChimp Integration";
$lang['mailchimp_login_error']                  = "MailChimp hat Ihr Benutzername/Passwort nicht erkannt.  Dank den Sicherheitseinstellungen m&uml;ssen Sie nach 10 aufeinanderfolgenden Login-Versuchen 5 Minuten warten, bevor Sie es erneut versuchen. ";
$lang['mailchimp_no_account_info']              = "Wir haben Ihre MailChimp Kontoinformationen nicht gefunden. Geben Sie diese jetzt ein, um mit dem Export fortzufahren!";
$lang['mailchimp_bad_account_info']             = "Ihr MailChimp Login-Name oder Passwort wurden durch MailChimp nicht erkannt. Geben Sie diese nun ein, um mit dem Export fortzufahren!";
$lang['bananas']                          = "Bananen!";
$lang['no_username']                      = "Sie haben kein Benutzername und/oder Passwort eingegeben!";
$lang['Username']                         = "Benutzername";
$lang['Password']                         = "Passwort";

// =========================
// ADDITIONAL TRANSLATIONS 6
// =========================
$lang['account_new_header_agency']           = "Geben Sie uns Auskunft über Ihren Kunden:";
// Custom Date functionality
$lang['label_date']									= 'Datum';
$lang['label_Year']									= 'Jahr';
$lang['label_Month']									= 'Monat';
$lang['label_Day']									= 'Tag';
$lang['customer_new_demo_date']                 = '01/01/2010';
$lang['user_edit_record_change_custom_date']    = "Geburtstag ändert auf";
$lang['user_edit_record_replace_custom_date']	= "Geburtstag ändert auf";
$lang['report_customer_birthday']               = "Kunden, die in obenstehender Periode Geburtstag haben";
$lang['report_customer_birthday_header']        = "Report der Kundengeburtstage";
// API functionality
$lang['api_redeem_reward_exeeds']               = "Die ausgewählte Belohnungsstufe überschreitet den vorhandenen Punktestand";
$lang['api_redeem_amount_exeeds']               = "Der eingegebene Betrag überschreite den vorhandenen Punktestand";
$lang['api_redeem_amount_not_valid']            = "Der eingegebene Betrag ist ungültig";
$lang['api_redeem_amount_not_enough']           = "Der eingegebene Betrag muss mindestens 1 sein";
$lang['api_redeem_currency_not_enough']         = "Der eingegebene Betrag muss mindestens 0.01 sein";
$lang['api_redeem_nothing']                     = "Nichts wurde zur Einlösung verlangt";
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
$lang['edit_reward_id']								= "Optional: Prämien ID";
// Previous integration:
$lang['user_edit_record_change_password']		= "Passwort geändert";
$lang['label_customer_password']					= "Passwort";
// Trial Limit feature:
$lang['error_trial_overage']						= 'Kann keine zusätzlichen Kunden registrieren: Der Zugang ist im Test-Modus.';
$lang['error_trial_overage_some']				= 'Test-Zugang: Maximal 10 Kunden. Transaktionen von weiteren Kunden werden nicht registriert.';
$lang['error_activate_missing']					= 'Aktiver Parameter fehlt oder ist falsch.';

// =========================
// ADDITIONAL TRANSLATIONS 11
// =========================
// API - Users List
$lang['api_error_users_list_not_owner']		= "Nur Kontoinhaber haben Zugang zu dieser Information";
$lang['api_error_no_users']						= "Keine anderen Beutzer gefunden.";
$lang['Campaign_Error']								= "Ungültige oder deaktivierte Kampagne.";

// =========================
// ADDITIONAL TRANSLATIONS 12
// =========================
$lang['api_error_no_customer_match']			= "Kein Kunde passt zu den Angaben.";
$lang['api_error_multiple_customer_match']	= "Mehrere Kunden passen zu den Angaben.";
$lang['api_error_PIN_empty']						= "Es gibt keine PIN in diesem Datensatz";
$lang['api_error_PIN_no_match']					= "PINs passen nicht";
$lang['api_error_password_missing']				= "Kein Passwort angegeben";
$lang['api_error_PIN_missing']					= "Keine PIN angegeben";
$lang['api_error_username_exists']				= "Der Benutzername wird bereits verwendet.";
$lang['api_error_invalid_delimiter']			= "Ungültiges Trennzeichen";
$lang['api_error_no_data']							= "Keine Daten eingegeben";
$lang['manage_import_field_note']		= "<i>Jedes Feld ist optional.</i><br>
												<br>
												Achtung: Wenn Sie Kunden importieren wollen und<br>
												<b>Transaktionen</b> später, wird für jeden Kunden eine eindeutige<i>Konto ID</i><br>
												benötigt, um Transaktionen mit Kunden <br>
												zu verbinden. Unabhängig von<br>
												wechselnden <i>Karten #</i>.<br>
												Wenn Sie keine separaten, eindeutigen IDs <br>
												für jeden Kunden haben, geben Sie die<i>Karten #</i> für<br>
												beide 'Konto ID' und 'Karten #' ein.";

$lang['label_PIN_new']				= "Neue PIN"; // (PIN is a 4 or 5 digit "personal identification number")
$lang['user_new_PIN_label']		= "PIN für diesen Benutzer wählen";
$lang['user_new_PIN_note']			= "Optional: Nur für Terminals.";
$lang['user_edit_PIN_label']		= "PIN Ändern";
$lang['user_edit_PIN_note']		= "Leer lassen, um dieselbe PIN zu behalten.";
$lang['user_PIN_not_numeric']		= "Eine PIN muss 4 oder 5 Zahlen beinhalten";


// =========================
// ADDITIONAL TRANSLATIONS 13
// =========================
$lang['edit_record_change_PIN']			= "PIN geändert";
$lang['edit_record_change_username']	= "Benutzername geändert";
$lang['manage_undo_warning']		= "Sind Sie sicher, dass Sie diesen Import rückgängig machen wollen?<br><br>Dieser Schritt kann nicht rückgängig gemacht werden!";
$lang['manage_undo_warning_pc']	= "Sind Sie sicher, dass Sie diesen Import rückgängig machen wollen?\n\Dieser Schritt kann nicht rückgängig gemacht werden!";


// =========================
// ADDITIONAL TRANSLATIONS 14
// =========================
$lang['user_my_info_header']						= "Meine Benutzerinfo";
$lang['user_role_I']									= "Agentur Client + Imports";
$lang['user_role_I_desc']							= "Manger mit den Möglichkeiten, Kampagneneinstellungen und Benutzer zu ändern, Reports zu generieren sowie Kunden zu verwalten (löschen, importieren), ohne jedoch die Möglichkeit, Kampagnen oder Kontobenutzer hinzuzufügen.";
$lang['user_role_G']									= "Agentur Client";
$lang['user_role_G_desc']							= "Manger mit den Möglichkeiten, Kampagneneinstellungen und Benutzer zu ändern und Reports zu generieren aber nicht Kunden zu verwalten (löschen, importieren) oder Kampagnen und Kontobenutzer hinzuzufügen.";


// =========================
// ADDITIONAL TRANSLATIONS 15
// =========================

$lang['coalition_balance_label']					= "Aktueller<br>Verbund-Kontostand:";
$lang['coalition_redeem_header'] 				= "Verfügbare Ladenprämien";
$lang['customer_activity_coalition_header'] 	= "Kundenhistorie (Nur dieser Laden)";
$lang['report_coalition_header']					= "Verbund-Berichte";
$lang['report_audits_totals_points']			= "Laden Saldi - Punkte";
$lang['report_audits_totals_giftcard']			= "Laden Saldi - Geschenkkarten";
$lang['section_account_options_header']		= "Fortgeschrittene Konto Optionen";
$lang['section_account_options_sub']			= "Wenn Sie ein Konto für Fortgeschrittene (nicht-geschlossene Programme) einrichten möchten, geben Sie bitte den erhaltenen Aktivierungscode in eines der untenstehenden Felder ein. Falls Sie Fragen haben oder Ihren Aktivierungscode nicht erhalten haben, kontaktieren Sie uns bitte. ";
$lang['section_coalition_token']					= "Verbund-Aktivierungscode";
$lang['section_mall_token']						= "Zwei-Stufen / Shopping Center Aktivierungscode";
$lang['section_coalition_note']					= "Für Aufpreis erhältlich.";
$lang['section_mall_note']							= "Für Aufpreis erhältlich.";
$lang['section_mall_campaign_id']				= "Masterkampagnen ID";
$lang['section_mall_percentage']					= "Kampagnenbeitrag (%) ";
$lang['section_token_invalid']					= "Der Aktivierungscode ist ungültig";
$lang['section_mall_options_header']			= "Kontooptionen der zweiten Stufe";
$lang['percentage_not_valid']						= "Der Prozentsatz ist ungültig.";


// =========================
// ADDITIONAL TRANSLATIONS 16
// =========================
$lang['api_error_permission_denied']            = "Benutzer hat kein Zugriffsrecht"; // An error message that shows up when a user makes an API call their permission level does not allow access to.
$lang['api_error_wrong_account']                    = "Benutzer hat kein Zugriffsrecht auf das betroffene Konto"; // An error message that shows up when a user makes an API call that affects the wrong account.
$lang['api_error_missing_username']                = "Fehlender Benutzername"; // An error message that shows up when a username (Account User, not Customer) is required but is missing.
$lang['api_error_PIN_too_many_matches']        = "Zu viele Benutzer verwenden diese PIN";  // Shows when an account user is trying to be validated in a terminal-like setting bY entering only their PIN which ought to be unique, but there is more than one matching PIN.
$lang['api_error_PIN_duplicate']                    = "Diese PIN wird bereits verwendet"; // Shows when an user is created or updated and the PIN assigned to them is already in use bu another user in the account.
$lang['api_error_campaign_id']                    = 'Error with campaign ID';
$lang['api_error_campaign_name']                    = 'Fehler mit Kampagnenname';
$lang['api_error_campaign_type']                    = 'Fehler mit Kampagnentyp';
$lang['api_error_campaign_points_ratio']        = 'Fehler mit Kampagnen Punkte-zu-'.$lang['currency'].' Verh‰ltnis';
$lang['api_error_campaign_rewards_ratio']        = 'Fehler mit Kampagnen Ausgaben-zu-Belohnungsverh‰ltnis';
$lang['api_error_campaign_depreciation']        = 'Fehler mit Kampagnenabschreibungs-Einstellungen';
$lang['api_error_campaign_dpv']                    = 'Feher mit Kampagnen Verdiene-pro-Event Betrag';
$lang['api_error_campaign_promo']                = 'Fehler mit Kampagnenpromotionsparameter';
$lang['api_error_campaign_reward']                = 'Fehler mit Kampagnenpr‰mien Parameter';
$lang['api_error_campaign_item']                    = 'Fehler mit BuyX Kampagnenparameter';
$lang['report_custom_date']                        = "Kunden, deren Spezialdatum sich in obenstehendem Abschnitt befindet";
$lang['report_custom_date_header']                = "Kunden Spezialdatum-Report";


// =========================
// ADDITIONAL TRANSLATIONS 17
// =========================
// Mainly small changes regarding coalition and two-tier programs.

$lang['coalition_points_program']                = "Verbund-Punkteprogramm"; // A label in reports that aggregate an account's points-based coalition campaigns into a single line.
$lang['coalition_giftcards_program']            = "Verbund-Geschenkkartenprogramm"; // A label in reports that aggregate an account's stored-value (giftcard) based coalition campaigns into a single line.
$lang['coalition_program']								= "Verbund-Programm";
$lang['twotier_program']								= "Zwei-Stufen-Programm";
$lang['opt_out']											= "Nicht teilnehmen";

$lang['user_role_L']                                    = "Verbund-Ladenmanager";
$lang['user_role_L_desc']                            = "Same access as a Manager, but without the ability to edit customers' info once entered.";
$lang['user_role_D']                                    = "Kampagnen Designer";
$lang['user_role_D_desc']                            = "Spezielle Rolle, die es nur erlaubt, Kampagnen hinzuzufügen, zu verändern, zu deaktivieren oder zu reaktivieren, und um Reports zu starten, aber nichts anderes mehr.";

// =========================
// ADDITIONAL TRANSLATIONS 18
// =========================
$lang['account_label_fields_manage']          	 = "Zusatzfelder verwalten";// A button text that lets the user add/manage the fields of data collected for the account's customers.
$lang['error_action_undefined']                    = "Undefinierte Aktion";// Shows mainly as an API error message when the "action" parameter is not given or does not match one of the expected action words.
$lang['error_entry_not_in_list']                    = "Unerlaubte Option übermittelt.";// Shows mainly as an API error message when a value is input that does not match one of the options in the list of options for that field.
$lang['error_entries_not_in_list']                = "Unerlaubte Optionen übermittelt.";// Shows mainly as an API error message when a series of values is input that do not exist in the list of options for that field.
$lang['error_not_numeric']                            = "Ungültige Nummer.";
$lang['error_not_monetary']                        = "Ungültiger Geldbetrag.";
$lang['error_not_date']                                = "Ungültiges Datum.";
$lang['error_not_unique']									= "Nicht eindeutiger Wert"; //When a field is given a value that is supposed to be unique, but already exists in the database.
$lang['manage_fields_top_header']                = "Zu verwaltende Datenfelder selektieren";// The page header where data fields are managed (customers, transations, etc.)
$lang['manage_fields_customers_top_header']    = "Zusatzfelder verwalten";// The page header where customers' data fields are managed (to add, show/hide, etc.)
$lang['manage_fields_transactions_top_header']    = "Transaktionsdatenfelder verwalten";// The page header where customers' transaction data fields are managed
$lang['manage_fields_predefined_header']        = "Vordefinierte Kundenfelder";// The section where the original set of customer fields are show, and where the user can choose to show or hide them.
$lang['manage_fields_custom_header']            = "Zusatzfelder";// The section where new custom customer data fields are shown.
$lang['label_customer_fields']                    = 'Kundenfelder';// A button for the user to select to manage the fields related to customer data.
$lang['label_transaction_fields']                = 'Transaktionsfelder';// A button for the user to select to manage the fields related to a customer's transaction data.
$lang['label_Label']                                    = "Label"; // As in "the word that describes a category" -- ex: The label of this field is the word that describes what the field is for.
$lang['label_Type']                                    = "Typ";// As in "the kind of thing it is" -- ex: This field is of a text type. The type of this other field is a date.
$lang['label_Text']                                    = "Text";// One of the types of field mentioned above. In this case a field that includes any kind of character.
$lang['label_Date']                                    = "Datum";// One of the types of field mentioned above. In this case a field that represents a calendar date and time, to the second.
$lang['label_List']                                    = "Liste"; // One of the types of field mentioned above. In this case a field that allows the user to choose elements in a list.
$lang['label_Picklist']                                = "Auswahlliste";// One of the types of field mentioned above. In this case a field that allows the user to pick ONE elements from a list.
$lang['label_Number']                                = "Numerisches Feld";// One of the types of field mentioned above. In this case a field that is numerical in value only.
$lang['label_Money']                                    = "Geld";// One of the types of field mentioned above. In this case a field that is numerical, with exactly two decimals.
$lang['label_Choices']                                = "Listenoptionen";// A description of a field type that allows the user to store alternatives to be chosen in a list.
$lang['label_Choices_sub']                            = "Jedes Feld mit einem Komma trennen";// Instructions to the user to separate each option for the list with a comma (,) character.
$lang['label_Unique']                                = "Eindeutig?";// Description of a field choice that asks the user if the values recorded in the field in question must be unique.
$lang['label_Select']                                = "Auswahl:";// The word that appears as the initial selection (and thereby, as the instruction) in a pull-down menu.
$lang['custom_field_delete_popup']                = "This custom field will be deleted, along with ALL ITS CUSTOMER DATA.<br><br>
                                                               This action CANNOT BE UNDONE!<br><br>
                                                               Are you sure you want to delete this custom field?";
$lang['custom_field_delete_popup_pc']            = "This custom field will be deleted, along with ALL ITS CUSTOMER DATA.\n\n
                                                               This action CANNOT BE UNDONE!\n\n
                                                               Are you sure you want to delete this custom field?";
$lang['success_customer_fields']                    = "Änderungen der Kundenfelder war erfolgreich.";
$lang['success_transaction_fields']                = "Änderungen an den Transaktionsfeldern war erfolgreich.";
$lang['button_add_field']                            = "Neues Zusatzfeld hinzufügen";
$lang['ID']                                                = "ID";// Generic SHORT identifier for "Identification" (whether numeric or alpha-numeric)
$lang['generate_id_error']                            = "Fehlererzeugende ID. Erneut versuchen.";


// =========================
// ADDITIONAL TRANSLATIONS 19
// =========================
// Custom Modifications for BlackHawk


// =========================
// ADDITIONAL TRANSLATIONS 20
// =========================
$lang['label_Searchable']                            = "&nbsp;Is&nbsp;ID&nbsp;";  // Description of a field choice that asks the user if the values stored in this field can be used to pull up customers in campaigns where a customer is not registered.
$lang['orig_amount']                                    = "Orig. Betrag";
$lang['DB_Timestamp']                                = "DB Zeitstempel";

$lang['depreciation_expired']                        = "Verfallen";
$lang['depreciation_short']                        = "Verf";  // The header of a NARROW column that shows the percentage of the points that has expired or depreciated.
$lang['preferences_depreciation_header']        = "Entwertung";
$lang['preferences_depreciation_none']            = "Keine Entwertung definiert.";
$lang['edit_depreciation_add']                    = "Entwertung hinzufügen";
$lang['edit_depreciation_add_another']            = "Neue Entwertung hinzufügen";
$lang['edit_depreciation_type_prompt']            = "Entwertungstyp:";
$lang['edit_depreciation_type_T']                = "Pro Transaktion, basierend auf dem Datum jeder Transaktion";
$lang['edit_depreciation_type_L']                = "Nach dem Kontostand, basierend auf dem Datum der letzten Transaktion";
$lang['edit_depreciation_longevity']            = "Beträge werden entwertet nach:";
$lang['edit_depreciation_percentage']            = "Mit:";
$lang['depreciation_interval_too_small']        = "Der eingegebene Betrag muss mindestens 1 betragen";
$lang['depreciation_percentage_too_small']    = "Der eingegebene Betrag muss grösser als 0 sein";
$lang['api_error_depreciation_exists']            = 'Eine Entwertung für das angegebene Zeitintervall existiert bereits.';
$lang['report_expiration']                            = "Verfalldatum";
$lang['report_depreciation']                        = "Entwertung";
$lang['preferences_recurring_fee_header']        = "Wiederkehrende Gebühr";
$lang['edit_recurring_fee_interval']            = "Alle";
$lang['edit_recurring_fee_amount']                = "reduzieren";
$lang['edit_recurring_fee_description']        = "Aus nachfolgenden Gründen:";
$lang['edit_recurring_fee_add']                    = "Wiederkehrende Gebühr hinzufügen";
$lang['edit_recurring_fee_add_another']        = "Zusätzliche, wiederkehrende Gebühr definieren";
$lang['preferences_recurring_fee_none']        = "Keine wiederkehrende Gebühr definiert.";
$lang['recurring_fee_too_small']                    = "Der eingegebene Betrag muss grösser als 0 sein";


// =========================
// ADDITIONAL TRANSLATIONS 21
// =========================
$lang['transactions_not_visible']				= 'Keine sichtbaren Transaktionen.'; // English: 'No visible transactions.'
$lang['section_account_copy']						= 'Einstellungen kopieren?'; // EN: 'Copy Settings?'
$lang['section_account_copy_sub']				= 'Wählen Sie ein anderes Konto, um die Einstellungen zu kopieren. Ist keines vorhanden, lassen Sie die Auswahl leer.'; // EN: 'Select another account to copy the settings from. If none, leave the selection blank.'
$lang['account_to_copy_from_label']				= 'Kopieren Sie Einstellungen:'; // EN: 'Copy settings from:'
$lang['error_copy_from_missing_agency']		= 'Der Agentur Token fehlt'; // EN: The agency token is missing'
$lang['error_copy_from_wrong_account']			= 'Das Konto gehört nicht der Agentur'; // EN: 'The account does not belong to the agency'



?>
