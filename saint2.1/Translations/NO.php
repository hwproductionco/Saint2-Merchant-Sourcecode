<?php
/* =======================
   TRANSLATION NOTES
==========================
This is the Norwegian language file

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
	$lang['currency']								= "krone";
}
if (!isset($lang['currency_plural'])) {
	$lang['currency_plural']					= "kroner";
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
$lang['Activate']						= "Aktiver";  	// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "Aktivering";	// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "Aktivitet";  	// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "Lagt til";  	// Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']				= "+";			// The mathematical symbol for addition
$lang['All']							= "Alle";  		// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "Beløp";  	// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "og";  		// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']					= "Autorisasjon"; // Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "Til rådighet";  // As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "Saldo"; 	// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['Balances']						= "Saldi";	// Plural
$lang['By']								= "Etter"; 		// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "Kampanje";	// As in a marketing campaign, but in this case, really meaning a "program" as in "Loyalty Program",
														// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "Kampanjer";	// Plural
$lang['Country']						= "Land";	// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "Kunder";	// As in people who purchase goods or services from the a business that uses the StickyStreet service.
$lang['Date']							= "Dato";		// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "dager";		// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "Demo";		// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']					= "Beskrivelse"; // Ex: "Provide a description of the transaction in this box:"
$lang['Employee']						= "Ansatt";	// As in a person that works for a business or organization.
$lang['Earned']							= "Opptjent";		// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "Feil";		// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "aktivitet";		// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a reward.
$lang['events']							= "aktiviteter";
$lang['Event']							= "Aktivitet";
$lang['Events']							= "Aktiviteter";
$lang['from']							= "fra";		// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "Gratis";		// As if "no need to pay" or "no charge". Ex: "StickyStreet is free when you have 10 or less customers.
$lang['Hello']							= "Hei";		// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "info";		// Short for "information".
$lang['Level']							= "Nivå";		// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "Ansvar";	// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']			= "x";			// The mathematical symbol for multiplication
$lang['Need']							= "Må ha";		// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "Ingen";			// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "Ingen";		// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "Dette er viktig";		// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "Bemerkninger";		// Plural of "Note", above
$lang['Online']							= "Online";		// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "Funksjon";  // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['or']								= "eller";			// As in "either", between two alternatives. Ex: "this or that".
$lang['point']							= "poeng";		// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['Paid']							= "Betalt";		// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['points']							= "poeng";
$lang['Point']							= "Poeng";
$lang['Points']							= "Poeng";
$lang['per']							= "pr.";		// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Purchased']						= "Kjøpt";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Ratio']							= "Forholdstall";		// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']					= "Lagt inn av"; // As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "Innløste"; 	// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "Ref"; 		// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Report']							= "Rapport"; 	// As in "Relatory", or "Presentation".
$lang['Reward']							= "Belønning"; 	// As in a thing that can be claimed after certain conditions have been met. Ex: "The reward for having 1000 points is a free widget."
$lang['Rewards']						= "Belønninger"; 	// Plural
$lang['Role']							= "Rolle";		// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Thank-you']						= "Takk";	// As in "Thank-you for your business" - said by the Client to a Customer.
$lang['Tip']							= "Tips";		// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "til";			// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "Å få"; 	// As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['To_Get_One_Of']					= "Å få en av"; 	// As in "to receive" or "to be given" a single quantity. Ex: "You need to buy 10 coffees to get one of [the same] free"
$lang['Trans_ID']						= "Trans. ID"; 	// Short for "Transaction ID" - Referring to an internal StickyStreet number to reference a particular transaction.
$lang['Transaction']					= "Transaksjon"; // A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']					= "Transaksjoner"; // Plural
$lang['User']							= "Bruker"; 		// As in an employee of the business or organization that can login to use the StickyStreet service.
$lang['Yes']							= "Ja";

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."-".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "Legg til ny kampanje";
$lang['title_add_product_service']		= "Legg til produkt/service for";
$lang['title_add_promotion']			= "Legg til belønning for";
$lang['title_add_reward']				= "Legg til belønning for";
$lang['title_add_user']					= "Legg til ny bruker";
$lang['title_amnesia'] 					= "Glemt brukernavn eller passord?";
$lang['title_award_reddeem'] 			= "Belønning innløst";
$lang['title_create_new_account']		= "Opprett ny konto";
$lang['title_default']					= "Administrasjon av gave- & lojalitetskampanje";
$lang['title_edit_account']				= "Rediger kontoinformasjon";
$lang['title_edit_account_number']		= "Rediger kontonummer";
$lang['title_edit_campaign']			= "Rediger kampanjeinnstillinger";
$lang['title_edit_product_service']		= "Rediger produkt/service";
$lang['title_edit_promotion']			= "Rediger vervekampanje";
$lang['title_edit_reward']				= "Endre belønning";
$lang['title_edit_user']				= "Rediger bruker";
$lang['title_find_add']					= "Finn eller legg til ny konto";
$lang['title_login'] 					= "Logg inn";
$lang['title_more_r_and_e_banners'] 	= "Flere bannere";
$lang['title_r_and_e_balance']			= "Opptjente poeng og poengsaldo for verving av nye medlemmer";
$lang['title_report_all_trans']			= "Rapport alle transaksjoner";
$lang['title_report_freq_cust']			= "Rapport mest aktive kunder";
$lang['title_report_miss_cust']			= "Rapport over uteblevne kunder";
$lang['title_report_new_cust']			= "Rapport nye kunder";
$lang['title_report_redeem_trans']		= "Oversikt over innløste belønninger";
$lang['title_report_totals']			= "Samlerapport";
$lang['title_search_result']			= "Søkeresultat";
$lang['title_trans_del']				= "Transaksjon slettet";
$lang['title_trans_rec'] 				= "Transaksjon registrert";
$lang['title_view_account']				= "Se konto";



// Side Modules
// Module 1
$lang['side_news_header'] 				= "";
$lang['side_news_text']					= "";
// Support Module
$lang['side_support_links']				= "<span style=\"color:#79B216;\">Support</span> Linker";
$lang['side_support_desk_describe']		= "Se spørsmål og svar i vår kunnskapsdatabase, eller send en forespørsel";
// $lang['side_blog_describe']				= "For beskjeder, tips og meninger se vår"; // ... blogg
// $lang['side_support_email_call']		= "Send en support forespørsel via e-post eller ring:";
// $lang['side_support_phone']				= "<span style=\"font-weight: bold;\">866-780-STICKY</span> <span style=\"color: #888; font-size: 80%;\">(7842)</span>";
// $lang['side_loyalty_link_desc']			= "Før dem tilbage til dit site med online tilmelding og online saldo tjek";
// $lang['side_points_calc_desc']			= "Et verktøy som hjelper deg å regne ut poengnivåer"


// Destinations / Section names
$lang['section_account_control_panel']	= "Kontrollpanel";
$lang['section_account_info_header']	= "Kontoinformasjon";
$lang['section_account_login']			= "Logg inn";
$lang['section_account_new']				= "Opprett en ny konto";
$lang['section_blog']						= "Blogg";
$lang['section_campaign_reports']		= "Kampanjerapporter";
$lang['section_customer_account']		= "Kundekonto";
$lang['section_loyalty_link_inst']		= "LoyaltyLink instruksjoner";
$lang['section_points_calculator']		= "Poengberegning";
$lang['section_points_promotions']		= "Bonuskampanjer";
$lang['section_support_desk']				= "Hjelp";
// Labels
$lang['label_account_id']					= "Kundens ID";				// Usually, a Client's account identification "code" (An alphanumeric string of 5 to 20 characters)
$lang['label_unique_id']					= "Unik ID";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']				= "Navn";			// The person who created a StickyStreet account.
$lang['label_additional_info']			= "Tilleggsinformasjon";			// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info_user']		= "Tilleggsinformasjon";
$lang['label_card']							= "Mobilnummer";					// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']							= "Poststed";
$lang['label_date_range']					= "Datointervall";				// Ex: January 2008 to December 2008
$lang['label_email']							= "E-postadresse";
$lang['label_email_short']					= "E-post";
$lang['label_first_name']					= "Fornavn";				// As in "given name". ie: not the one shared by their family.
$lang['label_last_name']					= "Etternavn";				// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_name']							= "Navn";					// The joining of first and last names.
$lang['label_organization']				= "Firma/Organisasjon";			// As in a business, church, school, club, etc.
$lang['label_owner_id']						= "Brukernavn";				// A unique login name that identifies the user as the account owner.
$lang['label_password']						= "Passord";
$lang['label_password_new']				= "Nytt passord";
$lang['label_password_retype_short']	= "Tast inn passordet en gang til";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "Tast inn nytt passord en gang til";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']							= "Mobiltelefon";
$lang['label_state']							= "Fylke";
$lang['label_user_id']						= "Brukernavn";				// A unique login name that allows an employee of a StickyStreet client to access the program.
$lang['label_zip']							= "Postnummer";

// Navigation
$lang['nav_active']						= "Aktiv";			// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "Legg til";			// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "Slett";			// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']					= "Endre:";		// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']					= "Deaktiver";  	// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "Trekk fra";  		// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "Slett";			// Verb: As in "remove" or "erase". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']				= " Deaktiver alle";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "Ferdig";			// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "Rediger";			// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "Finn";			// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "Slutt";			// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "Gå";				// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "Skjul";			// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']					= "Gå til:"; 		// As in changing screens, pages, or location.
$lang['nav_log_in']						= "Logg inn";			// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "Logg ut";			// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "Søk";			// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "Neste";			// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']					= "Midlertidig stanset";		// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "Skriv ut";			// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']				= "Skriv ut oversikt";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']				= "Reaktiver";	// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "Noter";			// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "Innløs";			// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "Fjern";			// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "Returner";			// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "Vis";			// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']				= "Arkiver endringene";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']					= "Velg alle";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "Sett";			// Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "Trinn 1";			// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "Trinn 2";
$lang['step3']							= "Trinn 3";
$lang['step4']							= "Trinn 4";

// Login Screen
$lang['login_amnesia_prompt']			= "Glemt brukernavn eller passord?";
$lang['login_amnesia_button']			= "Klikk her!";
$lang['login_email_missing']			= "Tast inn e-postadressen din:";
$lang['login_fancy_1']					= "Konto";
$lang['login_fancy_2']					= "Logg inn";
$lang['login_new_account_prompt']		= "Har du ingen konto?";
$lang['login_new_account_button']		= "Registrer deg her!";
$lang['login_password_missing']			= "Tast inn passord";
$lang['login_userid_missing']			= "Tast inn brukernavn";
$lang['login_wrong_password']			= "Feil passord. Prøv igjen!";
$lang['login_wrong_user_id']			= "Ukjent brukernavn.<br>(Brukernavn må tastes riktig med både små og store bokstaver.)";

// Forgot Password / Username section;
$lang['amnesia_header']					= "Husker du ikke brukernavn og passord?";
$lang['amnesia_note_top']				= "Litt om spamfiltre:";
$lang['amnesia_note_text']				= "Hvis du ikke har fått en e-post fra oss i løpet av få minutter, vennligst sjekk spamfilteret ditt.
											E-post kommer fra Media 1 Norge"; /* StickyStreet or the name of the Agency. */
$lang['amnesia_password_button']		= "Send meg passordet mitt";
$lang['amnesia_password_dir']			= "Tast inn brukernavnet ditt nedenfor, så sender vi passordet til den e-postadressen vi har registrert i systemet.";
$lang['amnesia_password_header']		= "Har du glemt passordet ditt?";
$lang['amnesia_password_sent']			= "Takk!<br><br>Passordet er sendt til<br>den e-postadressen vi har registrert <br>på denne kontoen.";
$lang['amnesia_return_button']			= "Gå tilbake til logg-inn siden";
$lang['amnesia_sub_header']				= "Ta det rolig, vi skal prøve å hjelpe. Navn?";
$lang['amnesia_user_id_button']			= "Send meg brukernavnet mitt";
$lang['amnesia_user_id_dir']			= "Tast inn e-postadressen din nedenfor, så sender vi alle brukernavn vi har registret på denne adressen:";
$lang['amnesia_user_id_header']			= "Har du glemt brukernavnet ditt?";
$lang['amnesia_userid_sent']			= "Takk!<br><br>Dit Brukernavnet er sendt til<br>den e-postadressen du oppga.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "eller færre kunder"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "Tast inn firma- eller organisasjonsnavnet."; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "Tast inn e-postadresse.";
$lang['account_email_needed_2']			= "Det er slik vi gir beskjed om konto- og kontoendringer.";
$lang['account_enter_first']			= "Fornavn.";
$lang['account_enter_last']				= "Etternavn.";
$lang['account_id_empty']				= "Velg brukernavn.";
$lang['account_id_exists']				= "Dette brukernavnet eksisterer allerede.<br>Vennligst velg et annet.";
$lang['account_id_not_valid']			= "Et brukernavn kan kun bestå av bokstaver, tall, eller underscores (_)";
$lang['account_terms_agree']			= "Du må akseptere Vilkår og Betingelser ved å klikke i boksen over.";
$lang['account_new_create_button']		= "Opprett konto";
$lang['account_new_directions']			= "For å komme i gang må du opprette en konto. Fyll ut nedenstående skjema:";
$lang['account_new_end']				= "Takk for hjelpen!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "Fortell litt om deg selv";
$lang['account_new_owner_id']			= "Velg en eier-ID";
$lang['account_new_owner_restrict']		= "Max 20 tegn, ingen mellomrom";
$lang['account_new_owner_user_id']		= "Velg et brukernavn";
$lang['account_new_password']			= "Velg et passord.";
$lang['account_new_password_restrict']	= "5 til 20 tegn, kun bokstaver og tall";
$lang['account_new_phone_dir']			= "Start med '+47' hvis du er i Norge";
$lang['account_new_step1_greet']		= "Klikk på knappen, så er du ferdig.";
$lang['account_new_step1_dir']			= "Du vil nå bli guidet gjennom følgende fire trinn:";
$lang['account_new_step1_1']			= "Opprettelse av en lojalitetskampanje eller et gavekortprogram.";
$lang['account_new_step1_2']			= "Tilpasning til dine behov.";
$lang['account_new_step1_3']			= "Legg inn en kundetransaksjon.";
$lang['account_new_step1_4']			= "Returner til kontrollpanelet.";
$lang['account_referred']				= "Hvis du er blitt vervet av noen, hvem vervet deg?";
$lang['account_referred_dir']			= "Navn, organisasjon, eller henvisningskode.";
$lang['account_referrer_record']		= /* The referred business */ "opprettet en gratis konto.";
$lang['account_terms_conditions_dir']	= "Vennligst les igjennom og klikk i boksen for å akseptere"; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "Vilkår og betingelser for bruk";
$lang['account_terms_conditions_agree']	= "Jeg aksepterer Vilkår og betingelser for bruk";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "Informasjon om selskapet;";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= "Adresse:";
$lang['account_label_billing_level']	= "Faktureringsnivå";
$lang['account_label_biz_name']			= "Firmanavn:";
$lang['account_label_biz_address1']		= "Adresse linje 1:";
$lang['account_label_biz_address2']		= "Adresse linje 2:";
$lang['account_label_custom_fee']		= "Avtalt månedsgebyr";
$lang['account_label_customers']		= "Kunder";
$lang['account_label_customers_manage']	= "Rediger kundedata";
$lang['account_label_free']				= "Gratis"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "Administrator";
$lang['account_label_owner_contact']	= "E-postadresse:";
$lang['account_label_pay_invoices']		= "Se / Betal faktura";
$lang['account_label_per_month']		= "/ måned";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "Innlogging for bruker";
$lang['account_password_missing']		= "Passordene er ulike: Vennligst tast inn det nye passordet i begge feltene.";
$lang['account_passwords_mismatch']		= "Det nye passordet stemmer ikke overens med det føste.<br>Tast inn på nytt i begge feltene";
$lang['account_owner_sec_token']		= "Sikkerhetskode";

// Control Panel
$lang['cp_step_dir_header']				= "Nå er du ferdig!";
$lang['cp_step_dir']					= "Dette er \"Control Panel\" bildet, hvor du starter når du er innlogget.<br>Her kan du redigere alle deler av kontoen din";
$lang['cp_campaigns_table_header_1']	= "Kampanjenavn";
$lang['cp_campaigns_table_header_2a']	= "Kampanje-";	// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']	= "kunder";	// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']	= "Kampanje-";		// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']	= "transaksjoner";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']	= "Kampanje-";	// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']	= "status";		// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']	= "Kampanje-";		// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']	= "innstillinger";	// This is the bottom line of the english phrase "Campaign Preferences"

// Create / Edit User
$lang['user_campaigns_header']			= "Velg hvilken kampanje denne brukeren skal ha tilgang til:";
$lang['user_campaigns_admins']			= "Administratorer har automatisk tilgang til alle kampanjer";
$lang['user_edit_header']					= "Rediger bruker:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "Bytt passord";
$lang['user_edit_password2_label']		= "Vennligst tast inn passordet på nytt igen";
$lang['user_edit_password_note']			= "For å beholde samme passord, ikke skriv noe i disse feltene.";
$lang['user_edit_record_change_card']	= /* The mobilnummer */ "er blitt erstattet av:"; /* a new mobilnummer */
$lang['user_edit_record_change_name']	= "Bytt navn";
$lang['user_edit_record_del_card']		= /* The mobilnummer */ "er blitt slettet";
$lang['user_edit_record_new_card']		= "Et nytt mobilnummer er blitt tildelt:";
$lang['user_edit_record_change_phone']	= "Endre mobilnummer til";
$lang['user_edit_record_replace_phone']= "Mobilnummer er endret fra";
$lang['user_edit_record_to_none']		= "Ingenting"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']	= "Endre e-postadresse";
$lang['user_edit_record_replace_email']= "E-postadresse er endret fra";
$lang['user_edit_record_change_addtl']	= "Ytterligere info er endret til";
$lang['user_edit_record_del_addtl']		= "Ytterligere info er slettet. Tidligere";
$lang['user_edit_record_replace_addtl']= "Ytterligere info er endret fra";
$lang['user_info_sub_header']				= "Brukerinformasjon";
$lang['user_new_header']					= "Ny bruker";
$lang['user_new_id_empty']					= "En Bruker-ID er obligatorisk for å kunne oprette en ny brukerkonto.";
$lang['user_new_id_not_valid']			= "En Bruker-ID kan kun inneholde bokstaver, tall eller underscore (_)";
$lang['user_new_id_exists']				= "Den Bruker-ID'en du har valgt eksisterer allerede.<br>Vennligst velg en annen.";
$lang['user_new_no_role']					= "Du må velge en rolle for denne brukeren:";
$lang['user_new_password_label']			= "Velg et passord til denne brukeren";
$lang['user_new_record_button']			= "Registrer ny bruker";
$lang['user_new_user_id_label']			= "Velg en Bruker-ID for å logge inn";
$lang['user_restrict_20_char']			= "Max 20 karakterer";
$lang['user_role_header']					= "Brukerrolle";
$lang['user_role_directions']				= "Vennligst gi denne brukeren en av nedenstående brukerroller";

// Users: Common actions:
$lang['user_add_button']				= "Legg til ny bruker";
$lang['user_delete_popup']				= "<strong>Denne brukerkontoen vil bli fjernet fra din autoriserte brukerliste og bli arkivert.</strong><br>
											Denne Bruker-ID'en kan ikke bli benyttet som ny Bruker-ID igjen senere.<br>
											<br>
											Kontakt oss for å reaktivere en arkivert bruker. NB. Der er et gebyr for denne tjenesten.<br>
											<br>
											<strong>Er du sikker på at du vil fjerne denne brukeren?</strong>";
$lang['user_delete_popup_pc']			= "Denne brukerkontoen vil bli fjernet fra din autoriserte brukerliste og bli arkivert.\n\n
											Denne Bruker-ID'en kan ikke bli benyttet som ny Bruker-ID igjen senere.\n\n
											Kontakt oss for å reaktivere en arkivert Bruker. NB. Der er et gebyr for denne tjenesten.\n\n
											Er du sikker på at du vil fjerne denne brukeren?";
$lang['user_header']					= "Administrer autoriserte brukere og deres tilgang til systemet";
$lang['user_list_none']					= "Det er ikke lagt inn noen brukere ennå.";
$lang['user_role_A']					= "Administrator";
$lang['user_role_A_desc']				= "Har tilgang til alt.";
$lang['user_role_C']					= "Salgsmedarbeider";
$lang['user_role_C_desc']				= "Kan lage rapporter, se faktureringsinformasjon og kampanjeinnstillinger. Har ikke tilgang til bruker- og kundeinformasjon.";
$lang['user_role_K']					= "Kampanjemedarbeider";
$lang['user_role_K_desc']				= "Kan redigere kundedata, men ikke skifte kundenumre. Kan registrere kundebesøk.";
$lang['user_role_M']					= "Avdelingssjef";
$lang['user_role_M_desc']				= "Har tilgang til hele menyen, men begrenset adgang til kontooplysningsinnstillinger. Kan se faktureringsinformasjon, lage rapporter, tilføye eller rette, men ikke slette brukere av konti.";
$lang['user_role_N']					= "Kampanjeleder";
$lang['user_role_N_desc']				= "Har tilgang til alt innenfor tillatte kampanjeområder. Kan lage rapporter. Har begrenset tilgang til kontooplysningsinnstillinger og kan ikke se faktureringsinfo, administrere brukere, opprette eller slette kampanjer.";
$lang['user_role_O']					= "Observatør";
$lang['user_role_O_desc']				= "Kan se bruker- og kundeinformasjon og visse kampanjeinnstillinger som belønninger og vervepremier.";
$lang['user_role_P']					= "Medarbeider";
$lang['user_role_P_desc']				= "Kan registrere nye kunder og kundebesøk";
$lang['user_role_S']					= "Kampanjeadministrator";
$lang['user_role_S_desc']				= "Kan administrere belønninger og vervepremier, all kundeinformasjon og -besøk";

// Create New Campaign
$lang['campaign_new_create_button']		= "Opprett en ny kampanje";
$lang['campaign_new_created_header']	= "Ny kampanje er opprettet";
$lang['campaign_new_created_msg']		= "<b>Gratulerer.</b><br>
											<br>
											Du har opprettet en ny kampanje.<br>
											<br>
											Nå må du tilpasse kampanjeinnstillingene<br>
											slik at de passer til forretningsmodellen din:";
$lang['campaign_new_created_prefs']		= "Klikk her";
$lang['campaign_new_created_back_cp']	= "Returner til kontrollpanelet";
$lang['campaign_new_empty']				= "Du må taste inn et kampanjenavn:";
$lang['campaign_new_exists']			= "Kampanje-ID'en du har tastet finnes allerede.<br>Vennligst bruk en annen kampanje-ID";
$lang['campaign_new_header']			= "Ny kampanje";
$lang['campaign_new_name']				= "Tast inn et kampanjenavn:";
$lang['campaign_new_name_restrict']		= "(Max. 30 karakterer inkl. mellomrom)";
$lang['campaign_new_step_dir']			= "Opprett din første kampanje:";
$lang['campaign_new_sub_header']		= "Velg kampanjetype:";
$lang['campaign_new_type_empty']		= "Du må velge en kampanjetype:";
$lang['campaign_new_buyx_desc']			= "Med denne kampanjetypen kan du dele ut poeng eller rabatter til dine kunder basert på antallet kjøp de foretar i forretningen din. Fungerer godt bl.a. i kaffebarer, hos frisører eller hvilken som helst annen butikk med begrenset varesortiment. (Eksempel:  Kjøp 10 og få den neste gratis. Du kan opprette så mange &quot;kjøp X og få den neste gratis&quot; du vil). <br />
Slike kampanjer bruker ofte et pappkort med et antall felter som skal stemples etter hvert som kunden foretar kjøp. Denne kampanjetypen gjør akkurat det samme. Men her trenger du ikke å printe eller erstatte bortkomne kort.
Du kan se hvor mange kunder som er innmeldt i programmet og lese oversikt over kundenes forbruk.
Du kan selv bestemme det antall enheter som skal til for å utløse et &quot;gratis&quot; gratiskjøp.
Et eksempel:
10 hårklipp. Da er 11. gang gratis.
Kjøp fire kakestykker. Det 5. er gratis.
Du kan også opprette et standard tall X som viser hvor mange kjøp som skal til før det neste er gratis.";
$lang['campaign_new_earn_event_desc']	= "Dette er en hybrid mellom et gavekort og en aktivitetsbasert kampanje: Gi en belønning (eller rabatt) for hver aktivitet kunden gjennomfører (butikkbesøk, verving av nytt medlem, etc.) Rabatten kan senere brukes på varer eller tjenester du har valgt som belønning.<br>
											<br>
											<b>Med denne typen lojalitetsprogrammer kan du:</b><br>
											<li>Tildele et antall ".$lang['currency_plural']." som hvert besøk eller aktivitet skal gi</li>
											<li>Innløse et beløp fra kundens akkumulerte saldo, akkurat som på et gavekort</li>
											<br>
											<b>Et par eksempler</b>:
											<li>Vervekampanjer: Gi belønning til eksisterende kunder om de skaffer nye
											kunder til lojalitetsprogrammet ditt.</li>
											<li>Betal en medarbeider eller ansatt for å drive verving av nye kunder til programmet.</li>";
$lang['campaign_new_event-based_desc']	=   "Her kan du definere en belønning basert på antallet interaksjoner (kjøp, besøk) kundene har med
											forretningen din istedenfor det totale pengebeløpet de har brukt.<br>
											<br>
											Det blir ofte brukt som vervekampanje: En butikk gir et par kort som alle er stemplet med det samme nummeret til en av sine kunder.
											Når en ny kunde kommer og gir deg et av disse kortenr blir din <i>ambassadør</i>
											belønnet med et 'besøk' på sin konto. Etter f.eks. 5 'besøk' kan de motta en gratis
											vare eller tjeneste som belønning. 'Ambassadøren får en vare eller tjeneste som gave. Du får nye kunder. Alle blir vinnere!<br>
											<br>
											Dette var bare et eksempel. Det finnes veldig mange kreative måter du kan bruke programmet på.<br>
											<br>
											Med et aktivitetsbasert program kan du:<br>
											<br>
											<b>Tildele et antall ulike belønningsnivåer. For eksempel:</b><br>
											<li>Deltatt på 5 aktiviteter - får 10% rabatt</li>
											<li>Gjennomført 10 besøk - får 50% rabatt</li>
											<li>Vervet 20 nye medlemmer - mottar en gratis tjeneste</li>
											<br>
											<b>Noen eksempler:</b><br>
											<li>Vervekampanjer som beskrevet ovenfor.</li>
											<li>Treningssentre som registrerer antallet 'gjengangere.' </li>
											<li>Produktreparasjoner inntil produktet skal erstattes av et nytt. </li>
											<li>VIP-klubb. </li>
											<li>etc... </li>";
$lang['campaign_new_gift_card_desc']	= "En gavekortkampanje hvor giveren kan sette inn penger på en gavemottakers gavekonto. Mottakeren handler i din butikk og saldoen reduseres etter hvert som kortet blir brukt som betalingsmiddel.<br>
											<br>
											Tradisjonelt benytter disse kampanjene ofte et plastkort hvor kortet blir 'tanket opp' med et angitt kronebeløp. Kortet blir deretter brukt som gavekort eller som et forskuddsbetalt debetkort.<br>
											<br>
											<b>I dette programmen er plastkort helt unødvendig</b>! Programmet kan holde orden på flere konti med <i>opparbeidet saldo</i>, som f.eks. barregninginger, avbetalingsplaner, ungenes lommepenger osv. Din egen fantasi er den eneste begrensningen.";
$lang['campaign_new_points_desc']		= "Dine kunder samler poeng basert på kjøp, betalinger eller aktiviteter du definerer.
											Opparbeidet poengsaldo kan innløses i en belønning basert på belønningsnivåer du fastsetter.<br>
											<br>
											Med et poengprogram slik som flyselskapenes 'fly point/miles' programmer, kan du:<br>
											<br>
											<b>Tildele et bestemt antall poeng pr. ".$lang['currency']." For eksempel:</b><br>
											<li>5 poeng for hver ".$lang['currency']."</li>
											<li>.25 poeng pr. ".$lang['currency']."</li>
											<br>
											<b>Definere belønningsnivåer. Her er et par eksempler:</b><br>
											<li>1.000 poeng: 50% rabatt på neste kjøp</li>
											<li>5.000 poeng: Gratis app til mobilen</li>
											<li>100.000 poeng: Gratistur til Tusenfryd.</li>
											<br>
											<b>Definere ekstrapoeng ut fra spesielle kriterier. Noen eksempler:</b><br>
											<li>Doble poeng på tirsdag</li>
											<li>500 ekstrapoeng hvis du bestiller nå</li>
											<li>25% bonuspoeng ved bruk av gavekort.</li>
											<br>
											I tillegg kan du definere en belønningsskala som gjør at du kan bytte poeng mot en forhåndsdefinert ".$lang['currency']."verdi.";

$lang['campaign_new_name_desc']			= "Når du oppretter den første kampanjen anbefaler vi at du gir den en et navn som starter med 'Test' slik at du kan få testet systemet og bli vant til hvordan det oppfører seg.--
											Du kan opprette så mange kampanjer du ønsker. Du kan selvfølgelig også sette kampanjer på vent eller slette uønskede kampanjer.<br>
											<br>
											Generelt er det en god ide å bruke ditt firmanavn, hvis det er kort, eller en 'ordlek' basert på navnet. Et par navneeksempler:<br>
											<li><b>AJAX Rewards</b></li>
											<li><b>Club Red</b> (Til en kafe og nattklub med navnet 'Red')</li>
											<li><b>Roasters</b> (Til en kaffebar som henvender seg til motorsyklister)</li>
											<li><b>Party Points</b> (Til en selskapsmatleverandør)</li>";

// Campaigns: Common actions:
$lang['campaign_add_new']				= "Opprett en ny kampanje";
$lang['campaign_delete_popup']			= "<strong>Denne kampanjen vil bli slettet fra kampanjelisten din og bli arkivert.</strong><br>
											Dette kampanjenavnet kan ikke brukes til en ny kampanje igjen senere.<br>
											<br>
											Hvis du skal ha adgang til en arkivert kampanje må du kontakte oss. Det er et gebyr for denne tjenesten.<br>
											<br>
											<strong>Er du sikker på at du vil slette denne kampanjen?</strong>";
$lang['campaign_delete_popup_pc']		= "Denne kampanjen vil bli slettet fra kampanjelisten din og bli arkivert.\n\n
											Dette kampanjenavnet kan ikke brukes som til en ny kampanje igjen senere.\n\n
											For å hente en arkivert kampanje må du kontakte oss. Det er et gebyr for denne tjenesten.\n\n
											Er du sikker på at du vil slette denne kampanjen?";
$lang['campaign_hide_on_hold']			= "Skjul kampanjer som er midlertidig stanset.";
$lang['campaign_none_yet']				= "For å komme i gang, opprett en ny kampanje (et gavekort- eller lojalitetsprogram)<br>
											ved å klikke på en av kampanjeknappene nedenfor.";

$lang['campaign_type_buyx']				= "Kjøp X få 1 gratis program";
$lang['campaign_type_earn_per_event']	= "Tjen penger pr. aktivitet-program";
$lang['campaign_type_event-based']		= "Aktivitetsbasert program";
$lang['campaign_type_gift_cards']		= "Gavekortprogram";
$lang['campaign_type_points']			= "Poengprogram";
$lang['campaign_view_on_hold']			= "Se kampanjer som er midlertidig stanset ";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']				= "Legg til et belønningsnivå";
$lang['edit_reward_add_another']		= "Legg til et nytt belønningsnivå";
$lang['edit_reward_desc_empty']			= "Gi en beskrivelse av belønningsnivået.";
$lang['edit_reward_level_header']		= "Rediger belønningsnivå";
$lang['edit_reward_header']				= "Belønningsnivåer";
$lang['edit_reward_none']				= "Ingen belønningsnivåer er definert";
$lang['edit_reward_table_header']		= "Beskrivelse av belønningsnivåene";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "Dette forholdstallet kan endres når som helst, men kundenes opptjente ".$lang['points']." vil ikke endre seg.";
$lang['edit_points_desc']				= "Dette er et vilkårlig tall og kan være et eller annet som gir mening bare for deg. For eksempel:";
$lang['edit_points_desc_header']		= $lang['Points']." opptjent for hver brukte ".$lang['currency']." ";
$lang['edit_points_empty']				= "Du må taste inn det antallet ".$lang['points']." som er nødvendig for å utløse belønningsnivået.";
$lang['edit_points_examples_header']	= "Noen eksempler på poengbaserte belønninger:";
$lang['edit_points_ex_1_amount']		= "1.000";
$lang['edit_points_ex_1_desc']			= "20% rabatt";
$lang['edit_points_ex_2_amount']		= "1.500";
$lang['edit_points_ex_2_desc']			= "Gratis hårvask";
$lang['edit_points_ex_3_amount']		= "1.750";
$lang['edit_points_ex_3_desc']			= "Ekstra overnatting uten tilleggsbetaling";
$lang['edit_points_ex_4_amount']		= "3.000";
$lang['edit_points_ex_4_desc']			= "Gratis 300 ml. shampoo";
$lang['edit_points_ex_5_amount']		= "7.500";
$lang['edit_points_ex_5_desc']			= "10 kg gratis kattemat";
$lang['edit_points_ex_6_amount']		= "15.000";
$lang['edit_points_ex_6_desc']			= "VIP-Club-nivå";
$lang['edit_points_ex_7_amount']		= "25.0000";
$lang['edit_points_ex_7_desc']			= "Velg dine egne plasser i konsertsalen";
$lang['edit_points_ex_8_amount']		= "100.000";
$lang['edit_points_ex_8_desc']			= "Gratistur til Tusenfryd for 2 personer";
$lang['edit_points_not_valid']			= "Antallet ".$lang['points']." må være et tall.";
$lang['edit_points_profit_ratio_error']	= "Du må taste en positiv værdi større enn 0. Hopp over for å slå av denne funksjonen.";
$lang['edit_points_step_dir']			= "Definer innstillinger for ".$lang['Points']." kampanjen:";
$lang['edit_points_table_header']		= "Beskrivelse av belønning når<br> det angitte  ".$lang['points']." er oppnådd.";
$lang['edit_points_too_small']			= "Tast inn en verdi på minst ".$lang['point'].".";

$lang['edit_promo_table_header']		= "Bonuskampanje";
$lang['edit_promo_none']				= "Ingen bonuskampanje er definert";
$lang['edit_promo_add']					= "Legg til en bonuskampanje";
$lang['edit_promo_add_another']			= "Legg til enda en bonuskampanje";
$lang['edit_promo_desc']				= "Bonuskampanjer endrer måten ".$lang['points']." blir tildelt. Du kan lage kampanjer som legger til eller trekker fra et spesifikt antall ".$lang['points'].",  eller blir multiplisert med et angitt tall når en spesifikk transaksjon blir registrert. Se eksempler nedenfor:";
$lang['edit_promo_edit_header']			= "Rediger bonuskampanje";
$lang['edit_promo_edit_error_header']	= "Tast inn et tall som multipliseres med antallet opptjente ".$lang['points']." <br>For eksempel:";
$lang['edit_promo_edit_error_add']		= "Tast inn antall".$lang['points']." som legges til de allerede eksisterende. For eksempel, \"500\" vil lagt til 500 poeng til det antallet poeng ".$lang['points']." som er opptjent. \"-100\" vil trekke fra 100 ".$lang['points']." fra de allerede opptjente (ned til 0, kan ikke bli negativ.)";
$lang['edit_promo_edit_error_multi']	= "For å multiplisere poengene ".$lang['points']." må du taste inn et tall.";
$lang['edit_promo_edit_error_not_valid']= "Antallet poeng som skal legges til må være et helt tall.";
$lang['edit_promo_edit_ex_1']			= "2 vil multiplisere antallet opptjente poeng med 2.";
$lang['edit_promo_edit_ex_2']			= ".5 vil halvere dem.";
$lang['edit_promo_edit_ex_3']			= "1.1 vil legge til 10% flere poeng.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "Legg til 500 ".$lang['points']." for å ha vervet et nytt medlem";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']."bonus for å bli nytt medlem";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "Trekk fra 50 ".$lang['points']." for å komme for sent";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "VIP-nivå: Multipliser antallet opptjente ".$lang['points']." med 2";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "få 50% ekstra ".$lang['points']." for Â handle på tirsdager";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "Gullmedlemmer: 25% ekstra".$lang['points'];
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "for 25% færre ".$lang['points'];
$lang['edit_promo_name_empty']			= "Du må gi denne bonuskampanjen et navn";
$lang['edit_promo_note_1']				= /*(Addtion Operation)*/ "Bonuspoeng kan registreres automatisk framover: velg vervekampanje og klikk på "; /* ("record button") */
$lang['edit_promo_note_2']				= /*(Multiplication Operation)*/ "Bonuspoeng vil ikke kunne registreres automatisk: En  kjøpepris er påkrevd.";
$lang['edit_promo_table_header_1']		= "Multipliser<br>eller legg til";
$lang['edit_promo_table_header_2']		= "<br>hvor mye";
$lang['edit_promo_table_header_3']		= "Bonuskampanje-ID";

$lang['edit_str_header']				= "Valgfritt: Mulighet til å taste inn antall ".$lang['currency']." som må til for å innløse poeng";
$lang['edit_str_desc']					= "Forholdet mellom forbruk og belønning er ett av to forholdstall du kan bruke til å regne ut verdien av dine ".$lang['points'].". Hvis du taster det inn her, vil du aktivere muligheten til å innløse ".$lang['points']." ved å taste et ".$lang['currency']."beløp isteden:";
$lang['edit_str_ratio_header']			= "Mulighet til å taste inn ".$lang['currency']."beløp<br>for å innløse poeng:";
$lang['edit_str_ratio_on']				= "Aktiv";	// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']				= "Deaktivert";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_header']				= "Forholdet mellom forbruk og belønning.";
$lang['edit_str_ratio_not_set']			= "Ikke innstilt";
$lang['edit_str_example_header']		= "For eksempel:";
$lang['edit_str_example_1']				= "En kunde vil kjøpe en vare som koster 100 ".$lang['currency_symbol']." og hun har opptjent 1.000 ".$lang['points'].". Hun spør om hun kan betale for varen delvis med sine ".$lang['points'];
$lang['edit_str_example_1_desc']		= "Når du taster inn dette forholdstallet som nevnt ovenfor, <b>kan programmet automatisk regne ut hvor mange kroner disse ".$lang['points']." er verd</b>. Vanskelige omregningsskjemaer og kalkulatorer er helt unødvendige.";
$lang['edit_str_example_math_show']		= "Klikk her for å se kalkulasjonen.";
$lang['edit_str_example_math_hide']		= "Ta vare på denne kalkylen!";
$lang['edit_str_example_math']			= "La oss anta at du har angitt et ".$lang['ppd']." forbruk
											på 5 og et forholdstall på 20. Så blir:<br>
											1000 ".$lang['points']." / 5 ".$lang['ppd']." / Forholdstallet på 20 =  ".$lang['currency_symbol']."10<br>
											<br>
											En annen måte å se det på er at $10 x 5 ".$lang['ppd']." = 50  ".$lang['points'].", og med
											et forholdstall på 20, har du bruk for 20 x 50 ".$lang['points']." (1000 ".$lang['points'].") for å kunne løse inn ".$lang['currency_symbol']."10.";
$lang['edit_str_example_math_height']	= "90";	// Dette er høyden i pixels på den seksjonen utregningen vises i.
												// If the translation of the section above requires more room, increase that number accordingly.
$lang['edit_str_note_1']				= "For å slå av muligheten til å taste inn ".$lang['currency']." verdier til  inløsning ".$lang['points'].", fjern forholdstallet (la det være blankt) og trykk"; /*(Set button)*/
$lang['edit_str_note_2']				= "Du kan alltid endre forholdstallet, men dine belønningsnivåer vil ikke endre seg automatisk.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "Tast inn det antallet aktiviteter som er nødvendig for å motta en belønning.";
$lang['edit_visits_not_valid']			= "Antallet aktiviteter må være et tall.";
$lang['edit_visits_step_dir']			= "Legg inn noen belønningsnivåer i den akivitetsbaserte kampanjen:";
$lang['edit_visits_table_header']		= "Antall<br>aktiviteter";
$lang['edit_visits_table_header_2']		= "Beskrivelse av oppnådd belønning når<br>det angitte antall aktiviteter er nådd.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "Du må taste inn en verdi på minimum 1".$lang['currency_100th_symbol']." (0.01)";
$lang['edit_dpv_heading']				= "Belønningsinnstilling";
$lang['edit_dpv_label']					= "Antall ".$lang['currency_plural']." opptjent pr. aktivitet:";
$lang['edit_dpv_label_ending']			= "pr. aktivitet.";
$lang['edit_dpv_note_1']				= "Dette antallet kan endres når som helst, men kundenes eksisterende opptjente ".$lang['currency']." vil ikke endre seg.";
$lang['edit_dpv_step_dir']				= "Legg inn inntjeningsnivå for kampanjen:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "Antallet tjenester eller produkter må være minimum 1<br>10 er det anbefalte valget.";
$lang['edit_buyx_header']				= "Kjøp X og få den neste gratis";
$lang['edit_buyx_item_empty']			= "Du må taste inn et produkt- eller servicenavn eller beskrivelse.";
$lang['edit_buyx_item_header']			= /* Add or Edit */ "et produkt eller tjeneste";
$lang['edit_buyx_item_table_header_1']	= "Service, Produkt, eller Kategori";
$lang['edit_buyx_item_table_header_2']	= "Hvor mange må kjøpes før<br>den neste er gratis?";
$lang['edit_buyx_none']					= "Ingen produkt eller tjenester er definert.";
$lang['edit_buyx_step_dir']				= "Legg inn kampanjens belønningsnivåer:";
$lang['edit_buyx_table_header_1']		= "Produkt, tjeneste, eller kategori";
$lang['edit_buyx_table_header_2']		= "Hvor mange flere må du kjøpe<br> før den neste er gratis?";
$lang['edit_buyx_add_another']			= "Legg til enda et produkt eller tjeneste";
$lang['edit_buyx_add']					= "Legg til et produkt eller tjeneste";
$lang['edit_buyx_default_header']		= "Standard antall kjøp av produkter eller tjenester før den neste er gratis";
$lang['edit_buyx_default_label']		= "Standard for nye produkter / tjenester:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "Legg inn belønningsnivåer for kampanjen:";
$lang['edit_giftcard_no_settings']		= "Gavekortskampanjer har ingen belønningsnivåer.<br>";

// Common Customer Content
$lang['customer_account_activated']		= "Kontoen er aktivert";
$lang['customer_add_tab']				= "Legg inn en kunde";
$lang['customer_lookup_tab']			= "Slå opp kundedata";
$lang['customer_id_not_exist']			= "Mobilnummeret eller Kundekonto-ID eksisterer ikke i systemet.";
$lang['customer_id_missing']			= "Det ble ikke tastet inn noen kundekonto-ID.";
$lang['customer_tip_1']					= "Vistte du st du kan bruke en strekkodescanner eller en kortleser for å lese kundens mobilnummer?";
$lang['customer_tip_2']					= "Legg til bokmerke med bokmerkegeneratoren nederst på"; /* Account Control Panel screen */
$lang['customer_last_activity']			= "Siste aktivitet";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "Feil: Kan ikke slette kortet.";
$lang['manage_cards_find_by_date']		= "Dato for siste aktivitet";
$lang['manage_cards_find_by_header']	= "eller vis en liste med ALLE kunder:";
$lang['manage_cards_find_directions']	= "Fyll ut hvilket som helst felt nedenfor:";
$lang['manage_cards_find_header']		= "Finn en kunde:";
$lang['manage_cards_find_none']			= "Ingen treff på forespørselen din.";
$lang['manage_cards_find_note']			= "Dette kan ta et par minutter hvis du har mere enn 1.000 kunder eller om du har en treg internettforbindelse.";
$lang['manage_cards_header']			= "Rediger kundedata";
$lang['manage_cards_list_header']		= "Liste over kundekonti";
$lang['manage_cards_not_exist']			= "Denne kunden eksisterer ikke.";
$lang['manage_cards_cust_deleted']		= "Denne kunden er slettet.";
$lang['manage_cards_popup_warning']		= "Dette vil slette all kundeinformasjon og ALLE TRANSAKSJONER<br>
											i alle kampanjer kunden har benyttet seg av.<br><br>
											I tillegg, <strong>vil ikke rapportene ha registerert noen tidligere aktivitet for denne kontoen</strong>.<br><br>
											Denne handlingen kan IKKE ANGRES!<br><br>
											Er du helt sikker på at du vil slette denne kunden?";
$lang['manage_cards_popup_warning_pc']	= "Dette vil slette kundens informasjoner samt ALLE KUNDENS TRANSAKSJONER\n
											i alle kampanjer kunden har benyttet seg av.\n\n
											I tillegg vil ikke rapportene ha registrert noen tidligere aktivitet for denne kontoen.\n\n
											Denne handlingen kan IKKE ANGRES!\n\n
											Er du helt sikker på at du vil slette denne kunden?";

// Create New Customer Account
$lang['customer_new_card_desc']			= "Mobilnummeret ditt er din <i>Kundekonto-ID</i>. Det må du oppgi hver gang du handler hos oss eller når du vil logge deg inn for å sjekke saldo på kontoen din.";
$lang['customer_new_create_button']		= "Opprett kundekonto";
$lang['customer_new_demo_phone']		= "4799999999";
$lang['customer_new_demo_email']		= "demo@epost.no";
$lang['customer_new_demo_addtl_info']	= "Ytterligere informasjoner kan legges inn her.";
$lang['customer_new_id_exists']			= "Mobilnummeret du har tastet finnes allerede i systemet.";
$lang['customer_new_id_match']			= "Følgende konto passer"; /* mobilnummer or Account ID */
$lang['customer_new_id_not_valid']		= "Dette er ikke en gyldig kundekonto-ID.";
$lang['customer_new_exists']			= "Den angitte informasjonen passer på en eksisterende kunde.";
$lang['customer_new_header']			= "Opprett ny kundekonto";
$lang['customer_new_multiple_matches']	= "Disse konti passer sammen med informasjonene du har angitt:";
$lang['customer_new_other_campaigns']	= "Andre kampanjer du kan <br>legge til kunder på:";
$lang['customer_new_random_id']			= "Tast kundens mobilnummer";
$lang['customer_new_steps_header']		= "Opprett en prøve på en kundekonto:";
$lang['customer_new_steps_dir']			= "En kundekonto kan identifiseres ved hjelp av  noen av kundens data, som f.eks. et mobilnummer, e-postadresse,
											strekkode, eller alt annet som er spesielt for denne kunden. Du må gjerne bruke en testkonto
											som f.eks. '11111' inntil videre; Du kan jo bare slette kontoen senere.";
$lang['customer_new_not_allowed']		= "Du har ikke tilgangsnivå for å opprettet nye kundedata.";

// Lookup Customer Account
$lang['customer_activity_header']		= "Kontoaktivitet";
$lang['customer_activity_none']			= "Denne kontoen har ingen aktivitet.";
$lang['customer_activity_print_short']	= "Siste transaksjon"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "Saldo pr. dags dato:";
$lang['customer_lookup_balances_none']	= "Ingen saldi";
$lang['customer_lookup_button']			= "Finn kunde";
$lang['customer_lookup_header']			= "Finn en kundekonto";
$lang['customer_lookup_instructions']	= "Tast inn noen av kundens data:";
$lang['customer_lookup_multiple_match']	= "Følgende data passer med hva du søkte etter";
$lang['customer_lookup_multiple_view']	= "Se kontodetaljer";
$lang['customer_lookup_no_match_add']	= "Finner ingen data som passer søket. Du kan opprette en ny konto nedenfor";
$lang['customer_lookup_no_match']		= "Ingen kunder i denne kampanjen passer til forespørselen din.";
$lang['customer_lookup_not_allowed']	= "Du har ikke tilgangsnivå for å kunne se individuelle kundedata.";
$lang['customer_lookup_steps_header']	= "Legg til eller løs inn transaksjoner.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "Legg til kunder i andre kampanjer:";
$lang['customer_edit_campaigns_note']	= "Ved å legge til en kunde i andre kampanjer får du mulighet til å søke etter dem ved hjelp av delvise søk på hvilken
							som helst del av deres kontoinformasjon. Du kan søke på mobilnummer, Konto-ID, eller bruke
							nedtrekksmenyen i øverste høyre hjørne for å bytte fra kampanje til kampanje innenfor en kundes data.";
$lang['customer_edit_header']			= "Rediger kontoinformasjon";
$lang['customer_edit_random_number']	= "Tast inn et tilfeldig tall";
$lang['customer_edit_sub_header']		= "Alle felter er valgfrie.";
$lang['customer_edit_activity_header']	= "Informasjon om aktivitet på kundekonti";

// Record Customer Transactions
$lang['transaction_add_button']			= "Legg til på konto";
$lang['transaction_amount_not_valid']	= "TRANSAKSJONSFEIL:<br>Enhet ".$lang['currency']." Beløet du tastet er ugyldig";
$lang['transaction_amount_too_samll']	= "TRANSAKSJONSFEIL:<br>Enhet ".$lang['currency']." Beløpet må: være minimum 0.01";
$lang['transaction_new_gc_header']		= "Legg til på konto";
$lang['transaction_new_header']			= "Ny aktivitet";
$lang['transaction_no_amount']			= "TRANSAKSJONSFEIL:<br>Du må taste inn enten et ".$lang['currency']."beløp<br>eller en belønning.";
$lang['transaction_promo_not_valid']	= "TRANSAKSJONSFEIL:<br>Du må taste inn en kjøpspris<br>for å kunne bruke denne belønningen.";
$lang['transaction_promos_label']		= "Velg en belønning:";
$lang['transaction_purchase_label']		= "Tast inn total kjøpspris:";
$lang['send_email']						= "Send E-post?";
$lang['transactions_buyx_none']			= "Ingen produkter eller tjenester er definert.";
$lang['transactions_buyx_none_dir']		= "Returner til kontrollpanelet for å redigere innstillingene.";
$lang['transactions_visit_credited']	= "1 aktivitet opprettet";
$lang['transactions_visit_redeemed']	= "Aktivitet innløst";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "Feil. Fikk ikke slettet transaksjonen. Vennligst prøv igjen.";
$lang['transaction_delete_popup']		= "<strong>Dette vil slette transaksjonen permanent.</strong><br><br>
											Denne handlingen kan ikke angres!<br><br>
											Er du helt sikker på at du vil slette transaksjonen?";
$lang['transaction_delete_popup_pc']	= "Dette vil slette transaksjonen permanent.\n\n
											Denne handlingen kan ikke angres!\n\n
											Er du helt sikker på at du vil slette transaksjonen?";

// Redeem Rewards
$lang['redeem_buyx_header']				= "Belønningstabelll";
$lang['redeem_buyx_sub_header']			= "Kunden har samlet sammen nok aktiviteter til:";
$lang['redeem_header']					= "Tilgjengelige belønninger";
$lang['redeem_header_alt']				= "Trekk fra konto";
$lang['redeem_points_partial_header']	= "Her kan du trekke fra"; /* points or dollars */
$lang['redeem_points_partial_none']		= "Når denne kontoen har en saldo."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "eller gi kunden en belønning";
$lang['redeem_reward_description']		= "Beskrivelse av belønningen";
$lang['redeem_reward_balance_none']		= "Akkumulert saldo på denne kontoen er ikke <br>høy nok til å motta noen belønning ennnå.";
$lang['redeem_reward_balance_zero']		= "Akkumulert saldo på denne kontoen <br>er ikke høy nok til å motta belønning ennå.";
$lang['redeem_reward_balances_none']	= "Akkumulert saldo på denne kontoen<br>er ikke høy nok til å kunne innløses i en belønning ennå.";

// Reports
$lang['report_audit_title']				= "Transaksjonsoversikt";
$lang['report_audits_all_trans']		= "Alle transaksjoner";
$lang['report_audits_header']			= "Revisjoner";
$lang['report_audits_redeemed_only']	= "Bare innløste belønninger";
$lang['report_audits_totals']			= "Totaler";
$lang['report_campaigns_included']		= "Inkluderte kampanjer:";
$lang['report_col_1_header']			= "Velg en rapport";
$lang['report_col_2_header']			= "Velg et datointervall";
$lang['report_col_3_header']			= "Velg kampanje(r)";
$lang['report_date_not_valid']			= "Ugyldig dato<br>(Kan være skuddår)";
$lang['report_date_mismatch']			= "Feil: Startdato kan ikke være<br>senere enn sluttdato.";
$lang['report_frequent_header']			= "Oversikt over kunder med hyppig aktivitet";
$lang['report_frequent_min_trans']		= "Minimum antall transaksjoner";
$lang['report_none']					= "Ingen kunder passer til noe søk";
$lang['report_marketing_header']		= "Markedsføring";
$lang['report_marketing_new_cust']		= "Nye kunder";
$lang['report_marketing_freq_cust']		= "Kunder med hyppig aktivitet";
$lang['report_marketing_freq_or_more']	= /* A given number of */ "transaksjoner eller mere.";
$lang['report_marketing_include']		= "Inkluder innløste transaksjoner.";
$lang['report_marketing_miss_dir_1']	= "Kunder som hadde en transaksjon  registert i ovenstående datointervall,";
$lang['report_marketing_miss_dir_2']	= "og som ikke har handlet på mange dager:";
$lang['report_missing_header']			= "Kunder som ikke er sett på"; /* a number of days.*/
$lang['report_new_customers_header']	= "Rapport over nye kunder";
$lang['report_new_customers_none']		= "Ingen nye kunder passer til søkekriteriene";
$lang['report_new_customers_range']		= "Nye kunder mellom"; /* one date and another date */
$lang['report_no_transactions']			= "Ingen transaksjoner funnet";
$lang['report_redeem_one_letter_code']	= "R";
$lang['report_run_report_button']		= "Kjør rapport";
$lang['report_totals_header']			= "Full rapport";

// Report Months
$lang['Jan']							= "Jan";
$lang['Feb']							= "Feb";
$lang['Mar']							= "Mar";
$lang['Apr']							= "Apr";
$lang['May']							= "Mai";
$lang['Jun']							= "Jun";
$lang['Jul']							= "Jul";
$lang['Aug']							= "Aug";
$lang['Sep']							= "Sep";
$lang['Oct']							= "Okt";
$lang['Nov']							= "Nov";
$lang['Dec']							= "Des";

// Auto-Generated Emails
$lang['email_account_activity']			= "Oppdatering vedrørende kontoaktiviteter";
$lang['email_activated_header']			= "Kampanjen er aktivert";
$lang['email_activated_sub_header']		= "Følgende kampanje er aktivert:";
$lang['email_billing_header']			= "Endring faktureringsnivå";
$lang['email_billing_from_level']		= "Din kontos faktureringsnivå er endret fra";
$lang['email_deactivated_header']		= "Kampanjen er deaktivert";
$lang['email_deactivated_sub_header']		= "Følgende kampanje er deaktivert:";
$lang['email_greeting']					= "Hei"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "Oppbevar disse informasjonene pÂ et strygt sted";
$lang['email_html_callout_url']			= "Login URL"; // As in "the internet address where a client can log into the acount management application of StickyStreet."
$lang['email_keep_email_footer_1']		= "Vennligst oppbevar denne meldingen pÂ et trygt sted.";
$lang['email_keep_email_footer_2']		= "Den inneholder viktige kontoopplysninger.";
$lang['email_new_account_header']		= "Ny konto";
$lang['email_new_account_sub_header']	= "Ny konto er opprettet.";
$lang['email_html_password_nochange']	= "Ingenting er endret"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "Kunderegistrering på internett";
$lang['email_online_register']			= "Følgende kunder har opprettet en konto via internett:";
$lang['email_password_header']			= "Anmodning om passord er mottatt";
$lang['email_password_dir1']			= "Du har bedt om passord for bruker"; /* shows the User ID */
$lang['email_password_dir2']			= "Det er:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "Endringer på din konto";
$lang['email_update_sub_header']		= "Din kontoinformasjon er oppdatert.";
$lang['email_user_id_header']			= "Anmoding om bruker-ID";
$lang['email_user_id_sub_header_1']		= "Du har bedt om den bruker-ID'en som er tilknyttet din e-postadresse:";
$lang['email_user_id_sub_header_2']		= "Du har bedt om de bruker ID'ene som er tilknyttet din e-postadresse:"; // Plural


// Bookmarks
$lang['bookmarks_header']				= "Opprett et Auto-login bokmerke";
$lang['bookmarks_table_header_1']		= "Velg en side som skal opprettes som bokmerke";
$lang['bookmarks_table_header_2']		= "Velg bruker som skal logges inn automatisk";
$lang['bookmarks_table_header_3']		= "Bokmerke-link";
$lang['bookmarks_link_1']				= "Høyreklikk<br>på denne linken for å<br>legge til bokmerke.";
$lang['bookmarks_link_2']				= "Klikk for å gå til<br>siden og<br>legg til<br>bokmerke derfra.";
$lang['bookmarks_note']					= "Oppbevar de tilsendte linkene på samme måte som du oppbevarer passordet til kontoen din.
											Vi anbefaler at du ikke sender dem med e-post eller via messenger. Logg heller inn fra den pc'en du
											ønsker at bokmerket skal ligge på, og legg det til i browserens bokmerkeliste (Favoritter).";

// Refer-and-Earn
$lang['refer_balance_header']			= "Vinn premier<br>ved å verve andre";
$lang['refer_balance_link']				= "Se hvem du har vervet og hvilke premier du har vunnet.";
$lang['refer_banner_header']			= "Sett inn et banner på hjemmesiden din:";
$lang['refer_banner_desc']				= "Disse bannerne er gratis til bruk på hjemmesiden din. Her er noen flere størrelser og farver å velge mellom:";
$lang['refer_banner_more_link']			= "Flere bannere..."; // As in "Click here to see more banners."
$lang['refer_banner_more_header']		= "Flere bannere"; // As in "Below you will find more banners."
$lang['refer_banner_more_sub_title']	= "Disse bannerne er gratis til bruk på hjememsiden din. Her er nen flere størrelser å velge mellom:";
$lang['refer_banner_more_instruct']		= "Klikk og dra dem ned på skrivebordet eller høyreklikk for å arkivere dem der du ønsker.";
$lang['refer_banner_more_title']		= "Smett inn et banner på hjememsiden din:";
$lang['refer_header']					= "Verv og vinn vervepremier";
$lang['refer_link_header']				= "Link til vervesiden din:";
$lang['refer_link_desc']				= "Bruk denne linken for å sende nye brukere til programmets hjemmeside. Dette er en unik link bare for deg som vil spore det antallet nye brukere du verver til programmet og som oppretter en konto:";
$lang['refer_sub_header']				= "Verv nye medlemmer til Back2U og tjen 100 kr.";


// Common Error Messages:
$lang['error_email_space']				= "Det er ikke tillatt med mellomrom i e-postadresser.";
$lang['error_email_not_found']			= "Denne e-postadressen ble ikke funnet.";
$lang['error_email_not_valid']			= "Denne e-postadressen er ugyldig.";
$lang['error_customer_id_empty']		= "Du må taste inn en kundekonto-ID.";
$lang['error_next_page']				= "Det oppsto et problem med å gå til neste side. Vennligst prøv igjen.";
$lang['error_password_empty']			= "Du må velge og taste inn et passord.";
$lang['error_password_length']			= "Ditt passord skal være mellom 5 og 20 karakterer langt.";
$lang['error_password_not_valid']		= "Et passord kan kun inneholde bokstaver, tall og underscore (_)";
$lang['error_password2_empty']			= "Du m- taste inn passordet en gang til for å sikre<br>at det ble tastet korrekt første gangen.";
$lang['error_passwords_no_match']		= "Passordene er ikke like.<br>Vennligst tast dem inn en gang til.";
$lang['error_phone_area_code']			= "";
$lang['error_phone_not_valid']			= "Dette mobilnummeret er ugyldig.";
$lang['error_service_down']				= "Denne tjenesten er midlertidig utilgjengelig.<br><br>Vi beklager.";
$lang['error_updating']					= "Det skjedde en uventet feil da informasjonen skulle oppdateres. Vennligst prøv igjen.";
$lang['error_userid_error']				= "Feil: Den bruker-ID'en du tastet ble ikke funnet.";
$lang['error_balance_lookup_activity']	= /* The account id entered */ "har ingen registrert aktivitet.";
$lang['error_balance_lookup_no_cust']	= "Ingen kundekonto.";
$lang['error_balance_lookup_no_acct']	= "Ingen konto-ID.";

// Alt Tags
$lang['alt_add_customer_button']		= "Klikk og legg til kundekonti til denne kampanjen";
$lang['alt_account_edit_save']			= "Klikk og arkiver endringene i dette formularet";
$lang['alt_campaign_delete']			= "Klikk og slett denne kampanjen";
$lang['alt_campaign_edit']				= "Klikk og rediger kampanjeinnstillingene";
$lang['alt_campaign_name']				= "Klikk på kampanjenavnet for å slå opp eksisterende kunder eller legge til nye";
$lang['alt_campaign_new_create']		= "Klikk for å opprette kampanjen";
$lang['alt_campaign_place_on_hold']		= "Kampanjen er aktiv. Klikk for å stanse den midlertidig";
$lang['alt_campaign_re-activate']		= "Klikk for å reaktivere denne kampanjen";
$lang['alt_cancel_changes']				= "Klikk for å annullere endringene og gå tilbake til forrige side";
$lang['alt_goto_ss']					= "Klikk for å åpne en ny fane og gå til StickyStreet.com";
$lang['alt_lookup_customer_button']		= "Klikk for å se kundekonti i denne kampanjen";
$lang['alt_user_add']					= "Klikk for å legge til en ny bruker med valgfritt login navn og tillatelsesnivå";
$lang['alt_user_delete']				= "Klikk for å slette denne brukeren, så brukeren ikke kan logge inn og se denne kontoen lenger.";
$lang['alt_user_edit']					= "Klikk for å redigere egenskapene til denne brukeren";

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

$lang['edit_str_desc_with_link']		= "Forholdet mellom hva en kunde bruker i kroner og verdien av hva han oppnår i belønning er et forholdstall du trenger for Â kunne beregne ".$lang['points']."-verdien av belønningene dine (dersom du benyttet ".$lang['calculator_link'].$lang['Points']." kalkulatoren</a> eller ikke.) Om du taster den inn her vil du aktivere funksjonen som innløser ".$lang['points']." ved å legge inn en ".$lang['currency']."-verdi isteden:";


// =========================
// ADDITIONAL TRANSLATIONS 1
// =========================

// Single words and labels
$lang['Referrer']						= "Verver"; 	// As in a person or entity that sends business your way.
$lang['Comma']							= "Komma";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Deducted']						= "Fratrukket";	// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Item']							= "Enhet";		// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Pipe']							= "Pipe";		// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "Kjøpt";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Tab']							= "Tab";		// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Required']						= "Obligatorisk";	// As in necessary, compulsory. Ex: "The name field is required."
$lang['optional']						= "Valgfritt"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";

// Page Titles
$lang['title_managing_cards']			= "Rediger kundedata";
	$lang['importing_customers']		= "Importer kunder";
	$lang['customers_imported']			= "Kunder importert";
	$lang['importing_transactions']		= "Importer transaksjoner";
	$lang['transactions_imported']		= "Transaksjoner importert";

// Labels
$lang['label_currency']					= "Valuta";				// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']			= "Valutasymbol";		// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_language_select']			= "Velg språk";		// As in a prompt to the user to select a language for the application
$lang['label_localization']				= "Lokalisering";			// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_timezone']					= "Tidssone";

// New Account Screen
$lang['account_language_error']			= "Det oppsto en feil med sprøket du valgte.";
$lang['account_language_note']			= "NB: Dette er kontoens foretrukne språkvalg.<br>
											En kontohavers innstillinger (i brukerseksjonen), eller ved å velge<br>
											et annet språk når du logger inn vil tilsidesette dette valget.";
$lang['account_timezone_note']			= "NB: Dette er kontoens foretrukne tidssone.<br>
											En kontohaver kan velge en annen tidssone (i brukerseksjonen),<br>
											noe som vil overstyre denne innstillingen.";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']			= "Importer kunder og transaksjoner";
$lang['manage_import_customers']		= "Importer kunder";
$lang['manage_import_transactions']		= "Importer kundetransaksjoner";
$lang['manage_import_no_none']			= "Alle felter kan ikke være blanke'. Vennligst velg et felt som skal importeres.";
$lang['manage_import_duplicate_card']	= "DUPLIKATKORT:";
$lang['manage_import_duplicate_found']	= "Duplikat";
$lang['manage_import_duplicates_found']	= "Duplikater";
$lang['manage_import_successful']		= "Import vellykket";
$lang['manage_import_new_customer']		= "ny kunde importert";
$lang['manage_import_new_customers']	= "nye kunder importert";
$lang['manage_import_updated_customer']	= "Kunde oppdatert";
$lang['manage_import_updated_customers']= "Kunder oppdatert";
$lang['manage_import_no_cust_data']		= "Ingen kundedata ble valgt for import. Kopier og lim inn (copy-paste) dine kundedata i nedenstående boks:";
$lang['manage_import_campgn_not_valid']	= "En av de valgte kampanjene er ikke gyldig.";
$lang['manage_import_select_1_campaign']= "Du må velge minst en kampanje å legge inn kunder i:";
$lang['manage_import_select_delimiter']	= "Venligst velg en av begrensningene ovenfor.";
$lang['manage_import_new_trasns']		= /* a number */ "nye transaksjoner er registrert";
$lang['manage_import_new_account']		= "Ny kundekonto er opprettet";
$lang['manage_import_new_accounts']		= "Nye kundekonti er opprettet";
$lang['manage_import_no_cust']			= "Ingen kunder er importert eller oppdatert";
$lang['manage_import_no_trans']			= "Ingen transaksjoner er registrert";
$lang['manage_import_no_trans_data']	= "Ingen transaksjonsdata ble merket for import. Kopier og lim inn (copy-paste) dine transaksjonsdata i nedenstående boks:";
$lang['manage_import_fields_missing']	= "Noen obligatoriske felter mangler.";
$lang['manage_import_cust_instr_head']	= "<b>Importer en kundeliste. Det er veldig enkelt.</b>";
$lang['manage_import_cust_instr_1']		= "Velg kampanjen(e) kundene skal registreres i.";
$lang['manage_import_cust_instr_2']		= "Spesifiser hvordan hver kolonne er separert og i hvilken rekkefølge.";
$lang['manage_import_cust_instr_3']		= "Kopier og lim inn (copy-paste) listen din i den store boksen, og velg den boksen hvor du vil ha tilhørende data<br>
													(med den samme konto-ID / mobilnummer) vil bli overskrevet eller ignorert.";
$lang['manage_import_cust_instr_4']		= 'Datoer kan ha følgende format <i>(årstall skal være i firesifret format)</i>:<br>
														<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre>';
$lang['manage_import_campaigns_list']	= "Kampanjeliste";
$lang['manage_import_add_campaigns']	= "Legg til på kampanjer";
$lang['manage_import_field_order']		= "Feltrekkefølge";
$lang['manage_import_field_delimiter']	= "Feltavgrenser";
$lang['manage_import_excel_default']	= "(Standard når det kopieres og limes inn (copy-pastes) fra MS Excel)";
$lang['manage_import_field_note']		= "<i>Hvert felt er valgfritt.</i><br>
												<br>
												NB: Om du har planer om å importere<br>
												kundetransaksjoner senere, er det nødvendig med en unik <i>Kunde<br>
												Konto-ID / Mobilnummer</i> for hver kunde<br>
												(for å kunne koble<br>
												transaksjonene til kundene).";
$lang['manage_import_customer_list']	= "Kundeliste";
$lang['manage_import_duplicates']		= "Duplikater?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "Overskriv"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "Lim inn(paste) kundelisten i nedenstående boks";
$lang['manage_import_trans_instrctns']	= "<b>Importer en liste med (pre-konverterte) transaksjoner:</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">Hvis du importerer til en poengbasert kampanje fra  <b>KONTANT transaksjoner</b>,  må du sørge for å
													<b><i>først konvertere kontantbeløpet til poeng</i></b>. (I Excel, opprett en ny kolonne, og multipliser kontant transaksjonsbeløpet med det ".$lang['ppd']." forholdtstallet som er lagt inn i kampanjeinnstillingene. Dermed sikres det at de opptjente poengene konverteres.)
												<li style=\"padding-bottom: 5px;\">Spesifiser hvordan hver kolonne er separert og i hvilken rekkefølge i nedtrekksmenyen nedenfor.</li>
												<li style=\"padding-bottom: 5px;\">Du må sjekke at 'Innløste' transaksjoner har en '<b>J</b>' i 'Innløste premier'-kolonnen og er tastet inn som en <b><i>POSITIV verdi</i></b>.</li>
												<li style=\"padding-bottom: 5px;\">Hvis du importerer transaksjoner for en '<b>Kjøp X få en gratis</b>'-kampanje, må du sjekke at du har valgt en '<b>Enheter kjøpt</b>'-kolonne.</li>
												<li style=\"padding-bottom: 5px;\">Hvis en dato ikke er inkludert vil transaksjonen bli registrert med dagens dato.<br>
													Datoer kan ha følgende formater <i>(årstall skal være i firesifret format)</i>:<br>
													<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre></li>
												<li style=\"padding-bottom: 0px;\">Kopier og lim inn (Copy-paste) listen din i den store boksen nedenfor.</li>
											</ol>";
$lang['manage_import_campaign_name']	= "Kampanje ID";
$lang['manage_import_trans_date']		= "Transaksjonsdato";
$lang['manage_import_trans_amount']		= "Transaksjonsbeløp";
$lang['manage_import_redeem_event']		= "Innløse aktivitet (J/N)";
$lang['manage_import_req_for_buyx']		= "Kun påkrevd for 'kjøp x og få 1 gratis' kampanjer";
$lang['manage_import_item_purchased']	= "Enheter kjøpt";
$lang['manage_import_description_auth']	= "Beskrivelse / Autorisasjon.";
$lang['manage_import_trans_list']		= "Transaksjonsliste";
$lang['manage_import_paste_trans']		= "Lim inn kundenes transaksjoner i boksen nedenfor";

// Reports
$lang['report_all_customers']			= "Alle kunder";
$lang['report_all_customers_header']	= "Rapport alle kunder";
$lang['report_all_customers_range']		= "Alle kunder mellom"; /* one date and another date */
$lang['report_balances_header']			= "Kundesaldorapport";
$lang['report_balances']				= "Kundesaldo for";
$lang['report_date_range']				= "Kunder som har gjennomført en transaksjon i perioden:"; /* a range of dates.*/
$lang['report_search_header']			= "Finn kunder rapport";
$lang['report_search']					= "Finn kunder for:";
$lang['report_search_range']			= "Mellom"; /* one date and another date */
$lang['report_search_not_valid']		= "Du må taste inn noe vi kan søke etter.";

// Report Exporting
$lang['export_xls']						= "Eksporter til Excel";

// Users: Common actions:
$lang['user_role_F']					= "Belønningsmedarbeider";
$lang['user_role_F_desc']				= "Kan innløse belønninger i kampanjer det er gitt tillatelse til.";

// Common Error Messages:
$lang['error_language_selector']		= "Det er oppstått en feil med språket du valgte.";

$lang['side_support_ideas']				= "Kampanjeideer";
$lang['side_support_ideas_describe']	= "Ideer til hvordan du kan bruke disse programmene i dine markedsførings- og kundeaktiviteter";

// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================

$lang['error_account_suspended']		= "Denne kontoen er suspendert";

// Calculator
$lang['calculator_title']				= "Beregning av poeng i poengkampanjer";
$lang['str_ratio']						= "Antall kjøp før belønning";  // (same as "edit_str_ratio_sub_header", but without "your")
$lang['check_section_desc']				= "La oss forsikre oss om du ikke gir bort mer enn du tjener:";
$lang['Print']							= "Skriv ut";
$lang['column_product_or_pervice']		= "Produkt eller tjeneste";
$lang['column_retail_price'] 			= "Forhandlerpris for produktet / tjenesten";
$lang['column_points_earned'] 			= "Opptjente poeng pr kjøp";
$lang['column_points_needed'] 			= "Antall poeng kundene må ha for å oppnå belønning";
$lang['column_cost_to_provide'] 		= "Dine kostnader til dette produktet / tjenesten";
$lang['column_profit_made'] 			= "Fortjeneste på salg av";
$lang['column_profit_made_part2']		= "produkter<br>eller tjenester";
$lang['column_cost_reward_perc']		= "Utgifter til premie<br>i % av fortjenesten.";
$lang['column_cost_reward_smaller']		= "(Jo mindre jo bedre)";
$lang['instructions']					= "Instruksjoner";
$lang['calculator_instructions_1']		= "<strong>1) Kundene dine skal samle poeng for hver krone de handler for.
											Hvor mange poeng? Bruk et vilkårlig tall og eksperimenter:</strong><br>
											<br>
											Selvfølgelig er ett poeng for hver krone kjempeenkelt, men det gjør det også utrolig lett for kundene dine å regne ut
											hvor mye de har handlet for i butikken din hver gang de sjekker hvor mange poeng de har opparbeidet.
											Det er jo ingen grunn til å gjøre dem oppmerksomme på at de bruker for mye penger i butikken din heller!
											Kanskje du bør bruke et 'vanskeligere' tall som gjør det bare litt verre å regne ut at han eller hun er blitt en 'avhengige'?
											Vi anbefaler minst 100 hvis du regner med ørebeløp, men det kan også bare være 3 eller 5 eller 20, hvis
											du ikke har noe imot at noen få  øre blir avrundet til nærmeste hele poeng.<br>
											<br>
											<strong>Når du har valgt et kronebeløp, tast beløpet inn i  <span class=\"orangeH\"> poeng pr. krone</span> -boksen øverst til venstre.</strong><br>";
$lang['calculator_instructions_2']		= "<strong>2) Deretter, <i>taster du inn antall kjøp kunden må gjøre for å oppnå en belønning</i>
											i boksen ved siden av.\"</strong><br />
											<br>
											Vanligvis er dette antallet mellom 8 og 25 ganger større, men det er selvfølgelig forretningsspesifikt.
											For eksempel kan man ofte se kafeer tilby en gratis kopp kaffe etter den tiende koppen. Jo høyere antall jo gjerrigere
											er du, rent pengemessig. Dermed blir det også vanskeligere for kundene dine å oppnå belønning.<br>
											<br>
											<strong>Tast inn et tall i <span class=\"orangeH\">Antall kjøp før belønning </span>-boksen, og eksperimenter deretter med ulike tall.
											Fortsett helt til du er blitt fortrolig med funksjonene og tilfreds med resultatet.</strong>";
$lang['calculator_disclaimer']			= "<strong>Ansvarsfraskrivelse</strong>: Denne kalkulatoren er kun beregnet som referanseverktøy, og vi oppfordrer så sterkt vi kan alle virksomhetseiere til å konferere med sin finansielle rådgiver i god tid før de igangsetter noen av programmene!";
// =========================
// ADDITIONAL TRANSLATIONS 3
// =========================

// Transaction Email Content Preferences:
$lang['transaction_email_content']		= "Transaksjons e-post: Innhold";
$lang['transaction_email_desc']			= "Om en kunde har registrert en e-postadressse i systemet når en transaksjon registreres, kan du velge om du vil at systemet sender en e-post til kunden.";
$lang['transaction_email_instr']			= "Skriv inn din egen tekst eller gjør rettelser i boksene nedenfor for å tilpasse e-posten kundene mottar vedr. denne kampanjen:";
$lang['transaction_email_default']		= "Mange takk for at du benytter oss!";
$lang['transaction_email_incl_balance']	= "Inkluder saldo";
$lang['transaction_email_incl_rewards']	= "Inkluder tilgjengelige belønninger";
$lang['transaction_email_incl_coupon']	= "Inkluder kupong eller annen belønning";
$lang['error_general_permission']		= "Innholdet er ikke tilgjengelig.";

// =========================
// ADDITIONAL TRANSLATIONS 4
// =========================
$lang['customer_edit_address_change']	= "Adresse endret til";
$lang['customer_edit_address_delete']	= "Adresse fjernet tidligere";
$lang['customer_edit_address_replace']	= "Adresse endret fra";


// =========================
// ADDITIONAL TRANSLATIONS 5
// =========================
// Email Updates:
$lang['email_agency_update_header']             = "Kontoendringer:";
$lang['email_agency_update_sub_header'] 			= "F¯lgende kontoinformasjon er oppdatert:";
// Import Updates:
$lang['Options']                                = "Muligheter";  // Plural. The ability to choose from different alternatives or non-required additional specifications.
$lang['manage_import_duplicates_update']        = "Oppdater";
$lang['manage_import_duplicates_ignore']        = "Hopp over";
$lang['manage_import_convert_currency'] 			= "Konverter transaksjonsbeløp tilpasset til poeng?";
$lang['manage_import_trans_instrctns_2']        = 'Hvis du importerer <b>kontanttransaksjoner</b> til en poengbasert kampanje, eller importerer en liste over besøk til en Tjen-pr-Aktivitet-kampanje, må du krysse av i"'.$lang['manage_import_convert_currency'].'" ruten. Hvis du importerer tilpassede poengbeløp eller tilpassede opptjente beløp, skal du ikke krysse av i ruten.';
// Import Undo
$lang['import_previous_title']                  = 'Tidligere importert';
$lang['Undo']                                   = 'Angre';
// BuyX Membership Functionality
$lang['Quantity']                               = "Antall som skal legges til";
// Biz Wizard Integration:
$lang['select_a_list_to_export_to']             = "Velg en liste å eksportere til";
$lang['success']                                = "OK";
$lang['export_complete']                        = "Eksport OK";
$lang['loading']                                = "Laster...";
$lang['oops']                                   = "Ups!";
$lang['addresses_successfully_added']   			= "E-postadresser er lagt til denne listen";
$lang['all_addresses_exist']                    = "Alle disse adressene finnes allerede i denne listen!";
$lang['addresses_exist']                        = "E-postadresser som allerede eksisterer i denne listen";
$lang['we_found']                               = "Vi fant";
$lang['errors']                                 = "feil";
$lang['addresses_with_errors']                  = "E-postadresser med feil";
$lang['Back']                                   = "Tilbake";
$lang['CLOSE']                                  = "STENG";
$lang['Visit_Biz Wizard']                        = "Besøk Biz Wizard";

$lang['mailchimp_integration']                  = "Integrasjon mot e-postprogrammet Biz Wizard";
$lang['mailchimp_login_error']                  = "E-postprogrammet kjenner ikke brukernavnet og/eller passordet.  Til info: Om du har logget inn feil 10 ganger må du vente fem minutter før du kan prøve igjen. ";
$lang['mailchimp_no_account_info']              = "Vi fant ikke kontoinformasjonen din. Tast det inn nå for å fortsette med å eksportere!";
$lang['mailchimp_bad_account_info']             = "Brukernavnet eller passordet ditt ble ikke gjenkjent av Biz Wizard. Tast det inn nå for å fortsette med å eksportere!";
$lang['bananas']                                = "Bananas!";
$lang['no_username']                            = "Det du tastet var verken et brukernavn eller et passord!";
$lang['Username']                               = "Brukernavn";
$lang['Password']                               = "Passord";


// =========================
// ADDITIONAL TRANSLATIONS 6
// =========================
$lang['account_new_header_agency']				= "Data om kunden:";
// Custom Date functionality
$lang['label_date']									= 'Dato';
$lang['label_Year']									= 'År';
$lang['label_Month']									= 'Måned';
$lang['label_Day']									= 'Dag';
$lang['customer_new_demo_date']					= '01/01/2012';
$lang['user_edit_record_change_custom_date']	= "Fødselsdato endret til";
$lang['user_edit_record_replace_custom_date']= "Fødselsdato endret fra";
$lang['report_customer_birthday']				= "Kunder som har fødselsdag mellom datoene ovenfor";
$lang['report_customer_birthday_header']		= "Oversikt over kundenes fødselsdager";
$lang['report_custom_date']						= "Oversikt over kunder som har fødselsdag mellom datoene ovenfor";
$lang['report_custom_date_header']				= "Oversikt over kundenes fødselsdager";

// API functionality
$lang['api_redeem_reward_exeeds']				= "Du tastet en verdi som ligger utenfor området du har valgt for belønning";
$lang['api_redeem_amount_exeeds']				= "Beløpet du tastet er høyere enn gjeldende saldo.";
$lang['api_redeem_amount_not_valid']			= "Beløpet du tastet er ugyldig";
$lang['api_redeem_amount_not_enough']			= "Beløpet du tastet m- være minimum 1";
$lang['api_redeem_currency_not_enough']		= "Beløpet du tastet m- være minimum 0.01";
$lang['api_redeem_nothing']						= "Vi har ikke registrert at du ønsker å innløse noe";
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
$lang['edit_reward_id']								= "Valgfritt: Belønnings-ID";
// Previous integration:
$lang['user_edit_record_change_password']		= "Passord endret";
$lang['label_customer_password']					= "Passord";
// Trial Limit feature:
$lang['error_trial_overage']						= 'Kan ikke legge til flere kunder. Kontoen du bruker er en prøvekonto.';
$lang['error_trial_overage_some']				= 'Prøvekonto: Max. 10 kunder.Om du har lagt inn data for flere enn 10 kunder er ikke disse dataene blitt registrert.';
$lang['error_activate_missing']					= 'Aktiv parameter mangler eller er feil.';

// =========================
// ADDITIONAL TRANSLATIONS 11
// =========================
// API - Users List
$lang['api_error_users_list_not_owner']		= "Bare eieren av kontoen har tilgang til denne informasjonen.";
$lang['api_error_no_users']						= "Ingen andre brukere ble funnet.";
$lang['Campaign_Error']								= "Kampanjen er enten ikke gyldig eller deaktivert.";

// =========================
// ADDITIONAL TRANSLATIONS 12
// =========================
$lang['api_error_no_customer_match']			= "Vi finner ingen kunder som passer de dataene du har oppgitt.";
$lang['api_error_multiple_customer_match']	= "Det er flere enn 1 kunde som passer med dataene du har oppgitt.";
$lang['api_error_PIN_empty']						= "Det finnes ingen PIN-kode under denne oppføringen";
$lang['api_error_PIN_no_match']					= "PIN-kodene er feil";
$lang['api_error_password_missing']				= "Ingen passord er oppgitt";
$lang['api_error_PIN_missing']					= "Ingen PIN-kode er oppgitt";
$lang['api_error_username_exists']				= "Brukernavnet er allerede i bruk.";
$lang['api_error_invalid_delimiter']			= "Ugyldig separator";
$lang['api_error_no_data']							= "Ingen data registrert";
$lang['manage_import_field_note']		= "<i>Hvert felt er valgfritt.</i><br>
												<br>
												OBS: Om du ønsker å importere kundedata<br>
												senere, må hver kunde ha sin egen <i>Account ID</i><br>
												Det er påkrevd for hver enkelt kunde slik at vi<br>
												kan legge til transaksjoner på riktig kunde<br>
												uavhengig av om de endrer <i>mobilnummer</i>senere.<br>
												Om du ikke har et mobilnummer for hver kunde<br>
												legg inn <i>mobilnummer</i> i begge feltene, <br>
												både i 'Unik ID' og 'mobilnummer'.";

$lang['label_PIN_new']				= "Ny PIN-kode"; // (PIN is a 4 or 5 digit "personal identification number")
$lang['user_new_PIN_label']		= "Velg en PIN-kode for denne brukeren";
$lang['user_new_PIN_note']			= "Valgfritt: Brukes hovedsakelig på butikkterminaler.";
$lang['user_edit_PIN_label']		= "Endre PIN-kode";
$lang['user_edit_PIN_note']		= "For å beholde samme PIN-kode, la den stå uendret.";
$lang['user_PIN_not_numeric']		= "En PIN-kode må inneholde kun 4 eller 5 tall";


// =========================
// ADDITIONAL TRANSLATIONS 13
// =========================
$lang['edit_record_change_PIN']			= "PIN-kode endret";
$lang['edit_record_change_username']	= "Brukernavn endret";
$lang['manage_undo_warning']		= "Er du sikker på at du vil stanse opplastingen? Du kan IKKE ANGRE etterpå!";
$lang['manage_undo_warning_pc']	= "Er du sikker på at du vil stanse opplastingen?\n\n Du kan IKKE ANGRE etterpå!";


// =========================
// ADDITIONAL TRANSLATIONS 14
// =========================
$lang['user_my_info_header']          = "Min brukerinformasjon";
$lang['user_role_I']                  = "Kundeansvarlig";
$lang['user_role_I_desc']             = "Kan redigere kampanjeinnstillinger og brukere, kjøre kampanjerapporter,redigere kundedata og slette eller importere kunder. Kan ikke legge til nye kampanjer eller opprette nye brukertillatelser.";
$lang['user_role_G']                  = "Butikkleder";
$lang['user_role_G_desc']             = "Kan redigere kampanjeinnstillinger og brukere og kjøre kampanjerapporter. Kan ikke legge inn nye kampanjer eller opprette nye kampanjekonti. Kan ikke slette kundedata eller opprette nye brukertillatelser.";

// =========================
// ADDITIONAL TRANSLATIONS 15
// =========================

$lang['coalition_balance_label']                 = "Saldo i<br>fellesprogrammet:";
$lang['coalition_redeem_header']                 = "Tilgjengelige belønninger i forretningen";
$lang['customer_activity_coalition_header']     = "Kundehistorikk (Kun i denne forretningen)";
$lang['report_coalition_header']                 = "Rapporter fra fellesprogrammet";
$lang['report_audits_totals_points']             = "Forretningstotal - Poeng";
$lang['report_audits_totals_giftcard']          = "Forretningstotal - Gavekort";
$lang['section_account_options_header']         = "Valgmuligheter for fellesprogram";
$lang['section_account_options_sub']            = "Om du ønsker å opprette en konto for et fellesprogram, vennligst tast inn aktiveringskoden du har mottatt i ett av feltene under. Om du ikke har mottatt noen aktiveringskode, eller om du har spørmål, vennligst kontakt oss. ";
$lang['section_coalition_token']                = "Aktiveringskode for fellesprogram";
$lang['section_mall_token']                     = "Fellesprogram / Kjøpesenterets aktiveringskode";
$lang['section_coalition_note']                 = "Tilgjengelig mot ekstra gebyr";
$lang['section_mall_note']                      = "Tilgjengelig mot ekstra gebyr.";
$lang['section_mall_campaign_id']               = "Kjøpesenterets kampanje-ID";
$lang['section_mall_percentage']                = "Kjøpesenterets bidrag (%)";
$lang['section_token_invalid']                  = "Aktiveringskoden er ugyldig";
$lang['section_mall_options_header']            = "Velg kontotype for kjøpesenteret";
$lang['percentage_not_valid']                   = "Prosentsatsen er ugyldig.";



// =========================
// ADDITIONAL TRANSLATIONS 17
// =========================
// Mainly small changes regarding coalition and two-tier programs.

$lang['coalition_points_program']                	= "Koalisjonsprogram Poeng"; // A label in reports that aggregate an account's points-based coalition campaigns into a single line.
$lang['coalition_giftcards_program']            	= "Koalisjonsprogram Gavekort"; // A label in reports that aggregate an account's stored-value (giftcard) based coalition campaigns into a single line.
$lang['coalition_program']									= "Koalisjonsprogram";
$lang['twotier_program']									= "Fellesprogram";
$lang['opt_out']												= "Ikke delta";

$lang['user_role_L'] 								= "Leder for koalisjonen";
$lang['user_role_L_desc']							= "Samme tilgang som administrator, men uten mulighet til å redigere kundeinformasjon.";
$lang['user_role_D']								= "Kampanjedesigner";
$lang['user_role_D_desc']							= "Unik rolle som kun gir tilgang til å legge til, redigere, slette og reaktivere kampanjer, og kjøre rapporter.";

// =========================
// ADDITIONAL TRANSLATIONS 18
// =========================
$lang['account_label_fields_manage']				= "Ordne egendefinerte felter";
// A button text that lets the user add/manage the fields of data collected for the account's customers.

$lang['error_action_undefined']						= "Udefinert handling";
// Shows mainly as an API error message when the "action" parameter is not given or does not match one of the expected action words.

$lang['error_entry_not_in_list']					= "Ulovlig valgmulighet.";
// Shows mainly as an API error message when a value is input that does not match one of the options in the list of options for that field.

$lang['error_entries_not_in_list']					= "Ulovlig valgmulighet.";
// Shows mainly as an API error message when a series of values is input that do not exist in the list of options for that field.

$lang['error_not_numeric']							= "Ugyldig nummer.";
$lang['error_not_monetary']							= "Ugyldig beløp.";
$lang['error_not_date']								= "Ugylding dato.";

$lang['manage_fields_top_header']					= "Velg felter å redigere";
// The page header where data fields are managed (customers, transations, etc.)

$lang['manage_fields_customers_top_header']    		= "Rediger kundedata";
// The page header where customers' data fields are managed (to add, show/hide, etc.)

$lang['manage_fields_transactions_top_header']    	= "Rediger transaksjoner";
// The page header where customers' transaction data fields are managed

$lang['manage_fields_predefined_header']        	= "Forhåndsdefinerte kundedata";
// The section where the original set of customer fields are show, and where the user can choose to show or hide them.

$lang['manage_fields_custom_header']            	= "Egendefinerte felter";
// The section where new custom customer data fields are shown.

$lang['label_customer_fields']                    	= 'Kundedata';
// A button for the user to select to manage the fields related to customer data.

$lang['label_transaction_fields']                	= 'Transaksjoner';
// A button for the user to select to manage the fields related to a customer's transaction data.

$lang['label_Label']                              	= "Kategori";
  // As in "the word that describes a category" -- ex: The label of this field is the word that describes what the field is for.

$lang['label_Type']									= "Type";
// As in "the kind of thing it is" -- ex: This field is of a text type. The type of this other field is a date.

$lang['label_Text']									= "Tekst";
// One of the types of field mentioned above. In this case a field that includes any kind of character.

$lang['label_Date']									= "Dato";
// One of the types of field mentioned above. In this case a field that represents a calendar date and time, to the second.

$lang['label_List']									= "Liste";
// One of the types of field mentioned above. In this case a field that allows the user to choose elements in a list.

$lang['label_Picklist'] 							= "Plukkliste";
// One of the types of field mentioned above. In this case a field that allows the user to pick ONE elements from a list.

$lang['label_Number']                                = "Nummer";
// One of the types of field mentioned above. In this case a field that is numerical in value only.

$lang['label_Money']								= "Kronebeløp";
// One of the types of field mentioned above. In this case a field that is numerical, with exactly two decimals.

$lang['label_Choices']								= "Lagre valgene her";
  // A description of a field type that allows the user to store alternatives to be chosen in a list.

$lang['label_Choices_sub']							= "Sett inn komma mellom hvert valg";
// Instructions to the user to separate each option for the list with a comma (,) character.

$lang['label_Unique']                               = "Unik?";
// Description of a field choice that asks the user if the values recorded in the field in question must be unique.

$lang['label_Select']                               = "Velg:";
// The word that appears as the initial selection (and thereby, as the instruction) in a pull-down menu.

$lang['custom_field_delete_popup']                	= "Dette egendefinerte feltet vil bli slettet sammen med ALLE KUNDEDATA.<br><br> Dette KAN IKKE ANGRES!<br><br> Er du sikker på at du vil slette disse dataene?";

$lang['custom_field_delete_popup_pc']            	= "Dette egendefinerte feltet vil bli slettet sammen med ALLE KUNDEDATA.\n\n
                                                       Dette KAN IKKE ANGRES!\n\n Er du sikker på at du vil slette disse dataene?";

$lang['success_customer_fields']                   	= "Kundedataene ble endret.";
$lang['success_transaction_fields']                	= "Transaksjonsdataene ble endret.";

$lang['button_add_field']                           = "Legg til et nytt egendefinert felt";

$lang['ID']                                                = "ID";
// Generic SHORT identifier for "Identification" (whether numeric or alpha-numeric)

$lang['generate_id_error']                            = "Feil ved opprettelse av ID. Vennligst prøv igjen.";

// =========================
// ADDITIONAL TRANSLATIONS 20
// =========================
$lang['label_Searchable']                            = "&nbsp;Er&nbsp;ID&nbsp;";  // Description of a field choice that asks the user if the values stored in this field can be used to pull up customers in campaigns where a customer is not registered.
$lang['orig_amount']                                 = "Opprinnelig saldo";
$lang['DB_Timestamp']                                = "DB Tidspunkt";

$lang['depreciation_expired']                        = "Utgått på dato";
$lang['depreciation_short']                          = "Utgått";  // The header of a NARROW column that shows the percentage of the points that has expired or depreciated.
$lang['preferences_depreciation_header']             = "Saldoreduksjon";
$lang['preferences_depreciation_none']               = "Det er ikke definert noen saldoreduksjon.";
$lang['edit_depreciation_add']                       = "Definer en saldoreduksjon";
$lang['edit_depreciation_add_another']               = "Definer enda en saldoreduksjon";
$lang['edit_depreciation_type_prompt']               = "Type saldoreduksjon:";
$lang['edit_depreciation_type_T']                    = "Per transaksjon, basert på datoen for hver transaksjon";
$lang['edit_depreciation_type_L']                    = "På saldoen, basert på datoen for den siste transaksjonen";
$lang['edit_depreciation_longevity']                 = "Saldoen vil bli nedskrevet etter:";
$lang['edit_depreciation_percentage']                = "med:";
$lang['depreciation_interval_too_small']             = "Tallet du tastet må vÊre minimum 1";
$lang['depreciation_percentage_too_small']           = "Tallet du tastet må være større enn 0";
$lang['api_error_depreciation_exists']               = 'Det er allerede lagt inn en saldoreduksjon for den angitte tidsperioden.';
$lang['report_expiration']                           = "Utløpsdato";
$lang['report_depreciation']                         = "Saldoreduksjon";
$lang['preferences_recurring_fee_header']            = "Terminbeløp";
$lang['edit_recurring_fee_interval']                 = "Hver";
$lang['edit_recurring_fee_amount']                   = "trekk fra";
$lang['edit_recurring_fee_description']              = "Årsaken er:";
$lang['edit_recurring_fee_add']                      = "Legg til terminbeløp";
$lang['edit_recurring_fee_add_another']              = "Legg til enda et terminmeløp";
$lang['preferences_recurring_fee_none']              = "Det er ikke definert noe terminbeløp.";
$lang['recurring_fee_too_small']                     = "Tallet du tastet må være større enn 0";


// =========================

// ADDITIONAL TRANSLATIONS 21

// =========================

$lang['transactions_not_visible']         = "Ingen transaksjoner tilgjengelig."; // No visible transactions.
$lang['section_account_copy']             = "Kopiinnstillinger"; // 'Copy Settings?';
$lang['section_account_copy_sub']         = "Velg en annen konto du kan kopiere innstillingene fra. Om du ikke finner noen, la den stå tom."; // Select another account to copy the settings from. If none, leave the selection blank.
$lang['account_to_copy_from_label']       = "Kopier innstillinger fra:"; // Copy settings from:
$lang['error_copy_from_missing_agency']   = "Sikkerhetskoden mangler"; // The agency token is missing
$lang['error_copy_from_wrong_account']    = "Denne kontoen tilhører ikke vår agent"; //The account does not belong to the agency


// END OF FILE
?>
