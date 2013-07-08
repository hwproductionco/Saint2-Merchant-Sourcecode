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

$lang['loaded_language']					= 'Italiano';

// Default currency values to be replaced with preferences?
if (!isset($lang['currency'])) {
	$lang['currency']						= "Euro";
}
if (!isset($lang['currency_plural'])) {
	$lang['currency_plural']				= "Euro";
}
if (!isset($lang['currency_symbol'])) {
	$lang['currency_symbol']				= "€";
}
if (!isset($lang['currency_100th'])) {
	$lang['currency_100th']					= "Cent";
}
if (!isset($lang['currency_100th_plural'])) {
	$lang['currency_100th_plural']			= "Centesimi";
}
if (!isset($lang['currency_100th_symbol'])) {
	$lang['currency_100th_symbol']			= "¢";
}

// Single words and labels
// (Pay attention to capitalization)
$lang['col_1']							= "1";  		// Header for column 1 of reports and bookmarks sections
$lang['col_2']							= "2";  		// Header for column 2 of reports and bookmarks sections
$lang['col_3']							= "3";  		// Header for column 3 of reports and bookmarks sections
$lang['Account']						= "Account";  		// Noun: As in "a collection of transactions". Ex: "Click here to view this customer's account."
$lang['Activate']						= "Attivo";  		// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "Attivazione";	// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "Attività";  	// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "Aggiunto";  		// Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']				= "+";			// The mathematical symbol for addition
$lang['All']							= "Tutto";  		// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "L'importo";  	// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "e";  		// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']					= "Autorizzazione"; 	// Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "Disponibile";  	// As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "Bilancio"; 		// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['By']								= "Per"; 		// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "Campagna";		// As in a marketing campaign, but in this case, really meaning a "program" as in "Loyalty Program",
														// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "Campagne";		// Plural
$lang['Country']						= "Nazione";		// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "Cliente";		// As in people who purchase goods or services from the a business that uses the StickyStreet service.
$lang['Date']							= "Data";		// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "Giorni";		// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "Demo";		// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']					= "Descrizione"; 	// Ex: "Provide a description of the transaction in this box:"
$lang['Employee']						= "Impiegato";		// As in a person that works for a business or organization.
$lang['Earned']							= "Guadagnato";		// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "Errore";		// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "evento";		// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a reward.
$lang['events']							= "eventi";
$lang['Event']							= "Evento";
$lang['Events']							= "Eventi";
$lang['from']							= "da";			// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "Gratis";		// As if "no need to pay" or "no charge". Ex: "StickyStreet is free when you have 10 or less customers.
$lang['Hello']							= "Ciao";		// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "info";		// Short for "information".
$lang['Level']							= "Livello";		// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "Responsabilità";	// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']			= "x";			// The mathematical symbol for multiplication
$lang['Need']							= "Bisogno";		// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "No";			// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "Nessuno";		// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "Nota";		// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "Note";		// Plural of "Note", above
$lang['Online']							= "Online";		// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "Operazione"; 	 // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['optional']						= "opzionale"; 		// As in "not required" or "not obligatory". Ex: "This task is optional";
$lang['or']								= "o";			// As in "either", between two alternatives. Ex: "this or that".
$lang['point']							= "punto";		// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['Paid']							= "Pagato";		// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['points']							= "punti";
$lang['Point']							= "Punto";
$lang['Points']							= "Punti";
$lang['per']							= "per";		// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Ratio']							= "Rapporto";		// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']						= "Registrato Da";	// As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "Riconosciuto"; 	// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "Rif"; 		// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Report']							= "Report"; 		// As in "Relatory", or "Presentation".
$lang['Role']							= "Ruolo";		// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Thank-you']						= "Grazie";		// As in "Thank-you for your business" - said by the Client to a Customer.
$lang['Tip']							= "Suggerimento";		// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "a";			// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "Per prendere"; 	// As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['Trans_ID']						= "Trans. ID"; 		// Short for "Transaction ID" - Referring to an internal StickyStreet number to reference a particular transaction.
$lang['Transaction']						= "Transazione";	 // A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']						= "Transazioni";	 // Plural
$lang['User']							= "Utente"; 		// As in an employee of the business or organization that can login to use the StickyStreet service.
$lang['Yes']							= "Si";

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."-".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "Aggiungi una Campagna";
$lang['title_add_product_service']			= "Aggiungi un Prodotto/Servizio per";
$lang['title_add_promotion']				= "Aggiungi una promozione per";
$lang['title_add_reward']				= "Aggiungi un premio per";
$lang['title_add_user']					= "Aggiungi un utente";
$lang['title_amnesia'] 					= "Dimenticato il Login o la Password";
$lang['title_award_reddeem'] 				= "Premio Riconosciuto";
$lang['title_create_new_account']			= "Crea un nuovo Account";
$lang['title_default']					= "Gift & Loyalty Management";
$lang['title_edit_account']				= "Modifica le Informazioni dell'Account";
$lang['title_edit_account_number']			= "Modifica Account#";
$lang['title_edit_campaign']				= "Modifica le Impostazioni per";
$lang['title_edit_product_service']			= "Modifica il Prodotto/Servizio per";
$lang['title_edit_promotion']				= "Modifica la Promozione per";
$lang['title_edit_reward']				= "Modifica il premio per";
$lang['title_edit_user']				= "Modifica il cliente";
$lang['title_find_add']					= "Cerca o Aggiungi un Account nel";
$lang['title_login'] 					= "Account Login";
$lang['title_managing_cards']				= "Gestione delle Cards";
$lang['title_more_r_and_e_banners'] 		= "Più Banner di Passa-Parola e Guadagna Regali";
$lang['title_r_and_e_balance']			= "Il Tuo bilancio di Passa-Parola e Guadagna Regali";
$lang['title_report_all_trans']			= "Il Report di Tutte le Transazioni";
$lang['title_report_freq_cust']			= "Report dei Clienti Frequenti";
$lang['title_report_miss_cust']			= "Report dei Clienti Mancanti";
$lang['title_report_new_cust']			= "Report dei Clienti Nuovi";
$lang['title_report_redeem_trans']		= "Report delle Transazioni dei Regali Riconosciuti";
$lang['title_report_totals']			= "Report Totali";
$lang['title_search_result']			= "Risultato della Ricerca";
$lang['title_trans_del']				= "Transazione Cancellata";
$lang['title_trans_rec'] 				= "Transazione Registrata";
$lang['title_view_account']				= "Guarda l'Account#";

// Side Modules
$lang['side_blog_describe']				= "Per annunci, suggerimenti, e punti di vista, visita il nostro"; // ... blog
$lang['side_loyalty_link_desc']			= "Riportali indietro sul tuo sito con l'Auto Iscrizione On line e la Ricerca del Saldo";
$lang['side_support_ideas']				= "Idee per le Campagne";
$lang['side_support_ideas_describe']	= "Idee e tutorial su modi creativi per utilizzare i nostri programmi per esigenze di marketing.";

$lang['side_support_desk_describe']			= "Guarda le domande e le risposte nella sezione Conoscenza di Base, e inserisci le tue richieste di supporto";
$lang['side_support_email_call']			= "Invia una Email di richiesta supporto direttamente.";
$lang['side_support_links']				= "<span style=\"color:#79B216;\">Link di</span> Supporto";
$lang['side_support_phone']				= "";
$lang['side_points_calc_desc']				= "Uno strumento per aiutarti a capire i livelli di premiazione";

// Destinations / Section names
$lang['section_account_control_panel']		= "Pannello di Controllo dell'Account";
$lang['section_account_info_header']		= "Informazioni dell'Account";
$lang['section_account_login']			= "Account Login";
$lang['section_account_new']			= "Crea un Account";
$lang['section_blog']					= "Blog";
$lang['section_campaign_reports']		= "Report delle Campagne";
$lang['section_customer_account']		= "Account Cliente";
$lang['section_loyalty_link_inst']		= "Istruzioni per il Link Fedeltà";
$lang['section_points_calculator']		= "Calcolatore dei Punti";
$lang['section_points_promotions']		= "Promozioni";
$lang['section_support_desk']			= "Punto di Aiuto";

// Labels
$lang['label_account_id']				= "Account ID";				// Usually, a Client's account identification "code" (An alphanumeric string of 5 to 20 characters)
$lang['label_unique_id']				= "Codice Unico";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']			= "Proprietario dell'Account";			// The person who created a StickyStreet account.
$lang['label_additional_info']			= "Informazioni Aggiuntive";			// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info_user']		= "Informazioni Aggiuntive";
$lang['label_card']						= "Card #";					// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']						= "Città";
$lang['label_date_range']				= "Intervallo di Date";				// Ex: January 2008 to December 2008
$lang['label_email']					= "Indirizzo Email";
$lang['label_first_name']				= "Nome";				// As in "given name". ie: not the one shared by their family.
$lang['label_last_name']				= "Cognome";				// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_name']					= "Nominativo";					// The joining of first and last names.
$lang['label_organization']				= "Nome Azienda/Organizzazione";			// As in a business, church, school, club, etc.
$lang['label_owner_id']					= "ID Proprietario";				// A unique login name that identifies the user as the account owner.
$lang['label_password']					= "Password";
$lang['label_password_new']				= "Nuova Password";
$lang['label_password_retype_short']		= "Riscrivi la Password";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "Riscrivi la nuova Password";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']					= "Numero di Telefono";
$lang['label_state']					= "Stato / Provincia";
$lang['label_user_id']					= "ID Utente";				// A unique login name that allows an employee of a StickyStreet client to access the program.
$lang['label_zip']						= "CAP";

// Navigation
$lang['nav_active']						= "Attivo";			// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "Aggiungi";			// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "Cancella";			// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']						= "Cambia in:";		// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']						= "Disattiva";  	// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "Sottrai";  		// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "Elimina";			// Verb: As in "remove" or "rease". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']					= "Deseleziona Tutto";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "Fatto";			// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "Modifica";			// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "Cerca";			// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "FINITO";			// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "Vai";				// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "Nascondi";			// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']						= "Salta a:"; 		// As in changing screens, pages, or location.
$lang['nav_log_in']						= "Entrare";			// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "Uscire";			// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "Guarda";			// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "Prossimo";			// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']						= "In Attesa";		// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "Stampa";			// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']					= "Stampa la Sintesi";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']					= "Ri-Attiva";	// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "Registra";			// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "Riconosci";			// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "Rimuovi";			// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "Ritorna";			// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "Mostra";			// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']					= "Salva i Cambiamenti";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']						= "Seleziona Tutto";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "Imposta";			// Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "Passo 1";			// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "Passo 2";
$lang['step3']							= "Passo 3";
$lang['step4']							= "Passo 4";

// Login Screen
$lang['login_amnesia_prompt']				= "Dimenticato il tuo ID Utente o la Password?";
$lang['login_amnesia_button']				= "Recupera subito!";
$lang['login_email_missing']				= "Prego inserisci l'indirizzo email del tuo Account:";
$lang['login_fancy_1']					= "account";
$lang['login_fancy_2']					= "login";
$lang['login_new_account_prompt']			= "Non hai un Account?";
$lang['login_new_account_button']		= "Iscriviti ora!";
$lang['login_password_missing']			= "Prego inserisci la tua Password";
$lang['login_userid_missing']			= "Prego inserisci il tuo ID Utente";
$lang['login_wrong_password']			= "La password inserita non corrisponde con i dati registrati.";
$lang['login_wrong_user_id']			= "L'ID Utente inserito non è stato trovato.";

// Forgot Password / Username section;
$lang['amnesia_header']					= "Un Leggero Caso di Amnesia?";
$lang['amnesia_note_top']				= "Una nota riguardo i Filtri Spam:";
$lang['amnesia_note_text']				= "Se tu non ricevi una email da noi entro alcuni minuti prego controlla il tuo filtro spam.
											La Mail verrà da";
$lang['amnesia_password_button']		= "Inviami la mia Password";
$lang['amnesia_password_dir']			= "Inserisci il tuo ID Utente di seguito, e noi ti spediremo la tua password all'indirizzo che abbiamo registrato.";
$lang['amnesia_password_header']		= "Hai dimenticato la tua Password?";
$lang['amnesia_password_sent']			= "Eccellente!<br><br>La Tua Password è stata inviata a <br>l'indirizzo email che tu ci hai fornito<br>per questo account.";
$lang['amnesia_return_button']			= "Torna alla videata di Login";
$lang['amnesia_sub_header']				= "Non Preoccuparti, noi possiamo aiutarti... ti ricordi il tuo nome, giusto?";
$lang['amnesia_user_id_button']			= "Inviami la mia ID Utente";
$lang['amnesia_user_id_dir']			= "Inserisci il tuo Indirizzo EMAIL di seguito, e noi ti invieremo tutti gli ID Utente associati con questo:";
$lang['amnesia_user_id_header']			= "Hai dimenticato il tuo ID Utente?";
$lang['amnesia_userid_sent']			= "Eccellente!<br><br>il tuo ID Utente è stato inviato a<br>l'indirizzo email che tu ci hai fornito.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "o meno account clienti"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "Inserisci il nome della tua Azienda/Organizzazione"; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "Indica un indirizzo e-mail";
$lang['account_email_needed_2']			= "In questo modo ti comunichiamo le modifiche sul tuo Utente e sul livello di fatturazione";
$lang['account_enter_first']			= "Inserici il tuo nome.";
$lang['account_enter_last']				= "Inserisci il tuo cognome.";
$lang['account_id_empty']				= "Scegli un ID Utente ed inserici l'ID scelto.";
$lang['account_id_exists']				= "Questo ID Utente è già stato inserito.<br> Per favore scegli un altro Utente ID.";
$lang['account_id_not_valid']			= "Un Utente ID può essere formato solamente da lettere, numeri e underscore (_)";
$lang['account_terms_agree']			= "Devi accettare i Termini e le Condizioni d'uso verificando il testo in alto.";
$lang['account_new_create_button']		= "Crea l'Account";
$lang['account_new_directions']			= "Per iniziare, semplicemente crea un account riempiendo il form sottostante:";
$lang['account_new_end']				= "Ci siamo!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "Parlaci un pò di te";
$lang['account_new_owner_id']			= "Scegli un ID per il proprietario";
$lang['account_new_owner_restrict']		= "massimo 20 caratteri, senza spazi";
$lang['account_new_owner_user_id']		= "Scegli un ID Utente";
$lang['account_new_password']			= "Scegli una password per il tuo account.";
$lang['account_new_password_restrict']		= "Da 5 a 20 caratteri formati da sole lettere e numeri";
$lang['account_new_phone_dir']			= "Inizia con '+39' se sei in Italia";
$lang['account_new_step1_greet']		= "Congratulazioni, hai appena creato un nuovo account.";
$lang['account_new_step1_dir']			= "Adesso ti guideremo attraverso le seguenti quattro fasi:";
$lang['account_new_step1_1']			= "Creazione di una campagna di fidelizzazione o programma di gestione Gift Card.";
$lang['account_new_step1_2']			= "Personalizzazione della tua campagna di fidelizzazione in base alle tue esigenze.";
$lang['account_new_step1_3']			= "Inserimento di una transazione del tuo cliente.";
$lang['account_new_step1_4']			= "Ritorna al pannello di controllo dell'account.";
$lang['account_referred']			= "Chi ti ha suggerito di Iscriverti?";
$lang['account_referred_dir']			= "Nome, azienda/organizzazione, oppure il codice di riferimento.";
$lang['account_referrer_record']		= /* The referred business */ "ti fa iscrivere completamente gratis.";
$lang['account_terms_conditions_dir']		= "Per favore leggi e controlla l'accettazione o meno delle Condizioni e dei Termini d'Uso."; /* Terms and Conditions */
$lang['account_terms_conditions_use']		= "Condizioni e Termini d'Uso";
$lang['account_terms_conditions_agree']		= "Accetto i Termini &amp;  Condizioni";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "Informazioni dell'Azienda";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= "Indirizzo:";
$lang['account_label_billing_level']		= "Livello di Fatturazione:";
$lang['account_label_biz_name']			= "Nome dell'Azienda:";
$lang['account_label_biz_address1']		= "Indirizzo Sede riga 1";
$lang['account_label_biz_address2']		= "Indirizzo Sede riga 2";
$lang['account_label_custom_fee']		= "Rata Mensile per numero Clienti";
$lang['account_label_customers']		= "Clienti";
$lang['account_label_customers_manage']		= "Gestione dei clienti";
$lang['account_label_free']			= "Gratis"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "Account del Proprietario";
$lang['account_label_owner_contact']	        = "Contatto del Proprietario:";
$lang['account_label_pay_invoices']		= "Vedi / Paga Fatture";
$lang['account_label_per_month']		= "/ mensili";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "Login del Proprietario";
$lang['account_password_missing']		= "Password errata: Per favore inserisci la nuova password in entrambi gli spazi.";
$lang['account_passwords_mismatch']		= "La nuova password inserita non è valida.<br>Per favore inserisci la nuova password in entrambi gli spazi.";
$lang['account_owner_sec_token']		= "Codice di Sicurezza";

// Control Panel
$lang['cp_step_dir_header']				= "Fatto!";
$lang['cp_step_dir']					= "Questa è la videata del \"Control Panel\" , è l'inizio del tuo percorso dopo aver effettuato l'iscrizione.<br> Da adesso in poi potrai gestire e controllare in piena autonomia il tuo sistema di fidelizzazione";
$lang['cp_campaigns_table_header_1']		= "Nome della Campagna";
$lang['cp_campaigns_table_header_2a']		= "Campagna di Fidelizzazione";	// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']		= "Clienti";	// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']		= "Campagna";		// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']		= "Transazioni";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']		= "Campagna";	// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']		= "Stato attuale della Campagna";		// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']		= "Campagna";		// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']		= "Preferenze";	// This is the bottom line of the english phrase "Campaign Preferences"

// Create / Edit User
$lang['user_campaigns_header']			= "Scegli il tipo di campagna a cui avrà accesso questo utente:";
$lang['user_campaigns_admins']			= "Gli Amministratori hanno accesso automaticamente a tutte le campagne attivate";
$lang['user_edit_header']			= "Compila il nome dell'Utente:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "Cambia la password";
$lang['user_edit_password2_label']		= "Per favore ridigita la password";
$lang['user_edit_password_note']		= "Per mantenere la stessa password, lascia lo spazio vuoto.";
$lang['user_edit_record_change_card']	        = /* The Card # */ "è stata sostituita da:"; /* a new Card # */
$lang['user_edit_record_change_name']	        = "Modifica Nome";
$lang['user_edit_record_del_card']		= /* The Card # */ "è stata eliminata";
$lang['user_edit_record_new_card']		= "Una nuova Card # è stata assegnata:";
$lang['user_edit_record_change_phone']		= "Il Telefono # cambia in";
$lang['user_edit_record_replace_phone']		= "Il Telefono # cambia da";
$lang['user_edit_record_to_none']		= "niente"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']		= "L'Email cambia in";
$lang['user_edit_record_replace_email']		= "L'Email cambia da";
$lang['user_edit_record_change_addtl']		= "Le Informazioni\ aggiuntive cambiano in";
$lang['user_edit_record_del_addtl']		= "Le Informazioni\ aggiuntive sono state eliminate.";
$lang['user_edit_record_replace_addtl']		= "Le Informazioni\ aggiuntive sono modificate da";
$lang['user_info_sub_header']			= "Informazioni Utente";
$lang['user_new_header']				= "Nuovo Utente";
$lang['user_new_id_empty']				= "Per creare un nuovo utente è necessario un ID Utente .";
$lang['user_new_id_not_valid']			= "Un utente ID può essere formato da sole lettere, numeri o underscore (_)";
$lang['user_new_id_exists']				= "L'Utente ID scelto già esiste.<br>Per favore scegli un altro Utente ID.";
$lang['user_new_no_role']				= "Seleziona un ruolo per questo utente:";
$lang['user_new_password_label']		= "Scegli una password per questo utente";
$lang['user_new_record_button']			= "Registra un Nuovo Utente";
$lang['user_new_user_id_label']			= "Scegli un Utente ID per il tuo log-in";
$lang['user_restrict_20_char']			= "massimo 20 caratteri";
$lang['user_role_header']				= "Ruolo Utente";
$lang['user_role_directions']			= "Per favore seleziona un ruolo per questo utente";

// Users: Common actions:
$lang['user_add_button']				= "Aggiungi un Nuovo Utente";
$lang['user_delete_popup']				= "<strong>Questo utente verrà eliminato dalla tua lista di utenti Autorizzati ed archiviato per il futuro.</strong><br>
								Questo Utente ID non può essere usato ancora come Utente ID di un nuovo cliente.<br>
											<br>
								Per recuperare un utente archiviato, contattaci. Il servizio è a pagamento.<br>
											<br>
											<strong>Sei sicuro di voler eliminare questo utente?</strong>";
$lang['user_delete_popup_pc']				= "Questo utente verrà eliminato dalla tua lista di Utenti Autorizzati ed archiviato.\n\n
											Questo Utente ID non può essere usato anche come Utente ID di un nuovo utente.\n\n
											Per recuperare un utente archiviato, contattaci. Il servizio è a pagamento.\n\n
											Sei sicuro di voler eliminare questo utente?";
$lang['user_header']					= "Gestisci gli Utenti Autorizzati ed i loro accessi";
$lang['user_list_none']					= "Non sono stati ancora aggiunti nuovi utenti.";
$lang['user_role_A']					= "Amministratore";
$lang['user_role_A_desc']				= "Ha accesso a tutto.";
$lang['user_role_C']					= "Contabile";
$lang['user_role_C_desc']				= "Può generare statistiche e reports, vedere informazioni sul fatturato dell'account e le impostazioni delle campagne, ma non ha l'accesso alle informazioni dell'utente e del cliente.";
$lang['user_role_K']					= "Commesso";
$lang['user_role_K_desc']				= "All'interno delle campagne di cui ha avuto l'autorizzazione, può creare e gestire le informazioni dei clienti (senza modificarne le card #,
											assegnate) può registrare e premiare le visite dei clienti (ma non può eliminarli)";
$lang['user_role_M']					= "Direttore";
$lang['user_role_M_desc']				= "Ha accesso a tutto all'interno delle campagne autorizzate e un accesso limitato al livello delle impostazioni
											(Non ha accesso alle informazioni sul fatturato, può generare reports, ed èin grado di aggiungere o modificare ma non eliminare gli account degli utenti.)";
$lang['user_role_N']					= "Responsabile della Campagna";
$lang['user_role_N_desc']				= "Ha accesso a tutto all'interno delle campagne autorizzate ed un accesso limitato al livello delle impostazioni
											(Può generare reports, ma non ha accesso alle informazioni sul fatturato, nè può gestire gli utenti, o creare e eliminare campagne.)";
$lang['user_role_O']					= "Osservatore";
$lang['user_role_O_desc']				= "Può visualizzare informazioni e impostazioni dei clienti e visualizza il settaggio delle campagne (premi e promozioni).";
$lang['user_role_P']					= "Temporaneo";
$lang['user_role_P_desc']				= "All'interno delle campagne autorizzate, può solo creare nuove schede clienti, e registrarne il numero di visite effettuate.";
$lang['user_role_S']					= "Direttore Associato";
$lang['user_role_S_desc']				= "Può gestire premi e promozioni all'interno delle campagne autorizzate, oltre a gestire tutti gli aspetti e le informazioni sulle visite dei clienti.";

// Create New Campaign
$lang['campaign_new_create_button']			= "Crea una Campagna";
$lang['campaign_new_created_header']			= "Hai Creato una Nuova Campagna";
$lang['campaign_new_created_msg']			= "<b>Congratulazioni.</b><br>
											<br>
											La nuova campagna è stata creata con successo.<br>
											<br>
											Adesso, puoi personalizzare le impostazioni per questa campagna<br>
											in base alle esigenze della tua attività:";
$lang['campaign_new_created_prefs']		= "Portami lì";
$lang['campaign_new_created_back_cp']		= "Ritorna al Pannello di Controllo dell'Account";
$lang['campaign_new_empty']				= "Devi inserire un nome della campagna:";
$lang['campaign_new_exists']			= "L'ID Campagna  inserito già esiste.<br>Per favore seleziona un ID Campagna diverso";
$lang['campaign_new_header']			= "Nuova Campagna";
$lang['campaign_new_name']				= "Adesso Scegli il Nome della nuova Campagna:";
$lang['campaign_new_name_restrict']		= "(massimo 30 caratteri, senza spazi)";
$lang['campaign_new_step_dir']			= "Crea la tua prima campagna:";
$lang['campaign_new_sub_header']		= "Prima, Seleziona il tipo di Campagna:";
$lang['campaign_new_type_empty']		= "Seleziona il tipo di Campagna:";
$lang['campaign_new_buyx_desc']			= "Alla stregua di una card regalo, questa campagna ti consente di premiare i tuoi clienti in base al numero di acquisti effettuati per prodotti specifici, per linee di prodotti o servizi erogati.<br>
											<br>
											Ideale per bar, ristoranti e qualsiasi attività che offre un listino di articoli o linee di articoli.
                                                                                        Questa campagna spesso viene rappresentata da una card di cartoncino con dei quadrati al suo interno che vengono perforati ad ogni acquisto effettuato, prima di ricevere un prodotto o un servizio in regalo.
                                                                                        Questo tipo di campagna ti consente di fare la stessa cosa, ma senza la necessità di avere carte prestampate (con il rischio di poterle smarrire).
                                                                                        Un altro enorme vantaggio è la possibilità di conoscere quanti clienti hai attivato nel programma nonché di creare statistiche e report con i tuoi clienti.</br>
											<br>
											<b>Hai inoltre la possibilità di assegnare un certo numero di articoli o di categorie ad un numero preciso di clienti fino al momento della premiazione. Ad esempio:</b><br>
											<li>Con 10 tagli di capelli l'undicesimo è omaggio. </li>
											<li>Con 5 lampade trifacciali hai diritto ad una in omaggio . </li>
											<li>Un Cornetto in omaggio ogni 8. </li>
											<br>
											Con la campagna comprane X, ne prendi 1 omaggio puoi impostare un numero qualsiasi di prodotti o servizi<i>X per consentire il raggiungimento del prodotto o del servizio in omaggio</i> premiando i clienti che consumano spesso lo stesso tipo di prodotto o servizio.";
$lang['campaign_new_earn_event_desc']	= "Euro guadagnati in base al numero di visiste accumulate: il Premio puòessere dato sotto forma di credito monetario (o in contanti) per ogni 'visita' (visita al negozio, passaparola, ecc.).<br>
											<br>
											<b>Questo tipo di programma di fidelizzazione ti permette di:</b><br>
											<li>Impostare il tuo rapporto di ".$lang['currency_plural']." guadagnati per visita </li>
											<li>Premiare il totale speso come una gift card</li>
											<br>
											<b>Alcuni esempi</b>:
											<li>Campagne basate sul Passa-Parola: Premia quei clienti, portieri di alberghi o receptionists al servizio di grandi aziende, per averti presentato nuovi clienti.</li>
											<li>Paga un impiegato per il suo lavoro quando questo è ripetitivo e non commisurato al tempo, ma solo alla presenza.</li>
											<li>Premia i clienti VIP dando loro incentivi in euro spendibili solo all'interno del tuo negozio.</li>
											<li>Ottimo strumento per diventare il punto di riferimento per i vostri servizi, esmpio bar o tavole calde o ristoranti.</li>";
$lang['campaign_new_event-based_desc']	= "Consente di definire i premi in base al numero di visite effettuate da diversi clienti nel tuo negozio, piuttosto che in base agli euro spesi.<br>
											<br>
											Viene spesso usata per campagne basate sul passaparola: Un negozio daràdelle card stampate con lo stesso codice
											ad un unico cliente, un portiere di un albergo, o una receptionist al servizio di una grande azienda.
											Quando arriva uno dei clienti tramite il passaparola e ti consegna quella card, il tuo <i>angelo custode</i>
											guadagna una 'visita' in più sulla sua scheda. Dopo 5 'visite', per esempio, il nuovo cliente riceve un
											servizio omaggio o un gadget. Tu hai un nuovo cliente. E tutti sono felici.<br>
											<br>
											Questo è solo un canovaccio. Diverse persone hanno sperimentato metodi creativi e funzionali per usare questo programma.<br>
											<br>
											Un programmma basato sul numero di visite ti permette di:<br>
											<br>
											<b>Definire diversi livelli di ricompensa. Per esempio:</b><br>
											<li>7 visite = sconto del 10%</li>
											<li>10 visite = sconto del 50% </li>
											<li>20 clienti tramite il passaparola e ricevi un massaggio in omaggio</li>
											<br>
											<b>Alcuni esempi:</b><br>
											<li>Campagne basate sul Passa-Parola come sopraccitato.</li>
											<li>Palestre che tengono traccia dei ritmi di visita. </li>
											<li>Quante riparazioni di oggetti sono necessarie prima della sostituzione. </li>
											<li>Associazioni a Club VIP. </li>
											<li>etc... </li>";
$lang['campaign_new_gift_card_desc']	= "La campagna Gift Card ti consente di caricare e scaricare denaro sull'account dei tuoi clienti, come dei pagamenti effettuati nel tuo negozio.<br>
											<br>
											Semplice e diretto. Viene solitamente utilizzata insieme alle gift card in plastica, laddove è possibile caricare una certa somma di denaro per essere donata come regalo a qualcun altro, oppure viene usata come carta prepagata.<br>
											<br>
											<b>Le card sono un ottimo strumento di fidelizzazione</b>, e possono essere usate quando necessiti di avere traccia di tutti gli account attivati in
										        <i>più negozi aderenti</i>, come catene di bar, oppure per programmare acquisti a rate, sconti ragazzi ... l'unico limite è la tua immaginazione.";
$lang['campaign_new_points_desc']		= "I tuoi clienti accumulano punti in base agli acquisti effettuati, in base a quanto spendono, o alla promozione che crei.
											I Punti possono definire i livelli di ricompensa o premiazione come tu desideri.<br>
											<br>
											Un programma a punti ti permette di:<br>
											<br>
											<b>Impostare il proprio valore per caricare i punti. Ad esempio:</b><br>
											<li>5 punti ogni 5 ".$lang['currency']." spesi</li>
											<li>.25 punti ogni 20 ".$lang['currency']."</li>
											<br>
											<b>Definire i Livelli di Premiazione. Alcuni esempi:</b><br>
											<li>1000 punti: sconto del 50% sul prossimo acquisto</li>
											<li>5000 punti: Gadget in Omaggio</li>
											<li>100,000 punti: Viaggio a EuroDisney.</li>
											<br>
											<b>Creare promozioni. Alcuni esempi:</b><br>
											<li>il Martedì vale doppio</li>
											<li>Prenotando in anticipo 500 punti in più</li>
											<li>25% di bonus con acquisti con Gift Card.</li>
											<br>
											A scelta, puoi creare un Rapporto di Spendi-e-Guadagni che ti consente di premiare con i punti i soldi spesi.";
$lang['campaign_new_name_desc']			= "Se stai creando la tua prima campagna, dalle un nome che inizia con 'Test' --
											Riuscirai a creare quante campagne desideri, e a bloccarne o cancellarne quelle indesiderate.<br>
											<br>
											In genere, utilizzare il nome della tua azienda/organizzazione, se breve, è una buona idea, oppure crei un gioco di parole che ne fa riferimento. Alcuni esempi di nomi:<br>
											<li><b>ACME Premi</b></li>
											<li><b>Club Rosso</b> (Per un salone chiamato Rosso)</li>
											<li><b>Incatenati</b> (Per un bar, ristorante frequentato da motociclisti)</li>
											<li><b>Evento a Punti</b> (Per un'agenzia che crea eventi)</li>";

// Campaigns: Common actions:
$lang['campaign_add_new']			= "Aggiungi una Nuova Campagna";
$lang['campaign_delete_popup']			= "<strong>Questa campagna sarà eliminata dalla lista delle tue Campagne e archiviata per il futuro.</strong><br>
											Questo nome non può essere di nuovo usato per nominare una nuova campagna.<br>
											<br>
											Per recuperare una campagna archiviata, contattaci. Il servizio è a pagamento.<br>
											<br>
											<strong>Sei sicuro di voler eliminare questa campagna?</strong>";
$lang['campaign_delete_popup_pc']		= "Questa campagna sarà eliminata dalla lista delle tue Campagne e archiviata per il futuro.\n\n
											Questo nome non può essere di nuovo usato per nominare una nuova campagna.\n\n
											Per recuperare una campagna archiviata, contattaci. Il servizio è a pagamento.\n\n
											Sei sicuro di voler eliminare questa campagna?";
$lang['campaign_hide_on_hold']			= "Nascondi le Campagne in stand-by";
$lang['campaign_none_yet']			= "Per iniziare, crea una campagna (Programma di fidelizzazione oppure Gift Card)<br>
											cliccando sotto la voce Aggiungi una Nuova Campagna.";

$lang['campaign_type_buyx']			= "La Campanga Comprane X ne prendi 1 Omaggio";
$lang['campaign_type_earn_per_event']		= "Programma Guadagna Denaro ad ogni Visita";
$lang['campaign_type_event-based']		= "Programma basato sulle Visite accumulate";
$lang['campaign_type_gift_cards']		= "Programma Gift Card";
$lang['campaign_type_points']			= "Programma Raccolta Punti";
$lang['campaign_view_on_hold']			= "Scopri le Campagne in stand-by";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']			= "Aggiungi un Livello di Premiazione";
$lang['edit_reward_add_another']		= "Aggiungi un altro Livello di Premiazione";
$lang['edit_reward_desc_empty']			= "Descrivi il livello di Premiazione.";
$lang['edit_reward_level_header']		= "Pubblica il Livello di Premiazione";
$lang['edit_reward_header']			= "Livelli di Premiazione";
$lang['edit_reward_none']			= "Attualmente nessuna Premiazione è stata Impostata";
$lang['edit_reward_table_header']		= "Descrizione Premiazione";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "Il tipo di premiazione può essere modificato tutte le volte che si desidera. Per i clienti già attivati".$lang['points']." la premiazione non potrà cambiare.";
$lang['edit_points_desc']				= "Il seguente numero è arbitrario e assume solo il valore che tu vuoi dargli. Ad esempio:";
$lang['edit_points_desc_header']		= $lang['Points']." guadagnati per ogni ".$lang['currency']." speso.";
$lang['edit_points_empty']				= "Inserisci un valore numerico ".$lang['points']." necessario per ottenere il premio.";
$lang['edit_points_examples_header']	= "Alcuni esempi di premi basati sulla raccolta punti:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "Sconto del 20%";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "Manicure in Omaggio";
$lang['edit_points_ex_3_amount']		= "750";
$lang['edit_points_ex_3_desc']			= "Una notte in più completamente gratis per il tuo soggiorno a Barcellona";
$lang['edit_points_ex_4_amount']		= "1000";
$lang['edit_points_ex_4_desc']			= "Shampoo e Piega in Omaggio";
$lang['edit_points_ex_5_amount']		= "20";
$lang['edit_points_ex_5_desc']			= "Gratis 10kg di cibo per gatti";
$lang['edit_points_ex_6_amount']		= "15,000";
$lang['edit_points_ex_6_desc']			= "Livello VIP Club";
$lang['edit_points_ex_7_amount']		= "160";
$lang['edit_points_ex_7_desc']			= "Poltronissima a Teatro";
$lang['edit_points_ex_8_amount']		= "100,000";
$lang['edit_points_ex_8_desc']			= "Viaggio a EuroDisney";
$lang['edit_points_not_valid']			= "Il totale dei ".$lang['points']." deve essere un numero.";
$lang['edit_points_profit_ratio_error']		= "Inserisci un valore positivo maggiore di zero. Lascia lo spazio vuoto per non attivare il servizio.";
$lang['edit_points_step_dir']			= "Imposta le preferenze per la tua ".$lang['Points']." campagna:";
$lang['edit_points_table_header']		= "Descrizione del premio ottenuto quando <br>il totale di ".$lang['points']." è stato raggiunto.";
$lang['edit_points_too_small']			= "Inserisci un valore numerico a partire da 1 ".$lang['point'].".";

$lang['edit_promo_table_header']		= "Descrizione della Promozione";
$lang['edit_promo_none']			= "Attualmente nessuna Premiazione è stata Impostata";
$lang['edit_promo_add']				= "Aggiungi una Promozione";
$lang['edit_promo_add_another']			= "Aggiungi un'altra Promozione";
$lang['edit_promo_desc']			= "Le Promozioni possono essere impostate e modificate sulla base dei ".$lang['points']." accumulati. Per le tue promozioni hai la possibilità di aggiungere o sottrarre uno specifico numero di ".$lang['points'].", o moltiplicarne una certa quantità, dopo aver registrato la transazione. Riportiamo alcuni esempi:";
$lang['edit_promo_edit_header']			= "Pubblica una Promozione";
$lang['edit_promo_edit_error_header']		= "Inserisci un numero per moltiplicare i ".$lang['points']." accumulati.<br>Ad esempio:";
$lang['edit_promo_edit_error_add']		= "Inserisci un numero di ".$lang['points']." da aggiungere a quelli accumulati. Per esempio, \"500\" verranno aggiunti 500 punti al raggiungimento di ".$lang['points']." accumulati. \"-100\" verranno decurtati 100 ".$lang['points']." da quelli accumulati (fino a 0, i numeri negativi non sono possibili.)";
$lang['edit_promo_edit_error_multi']		= "Il totale di ".$lang['points']." moltiplicati deve essere rappresentata da un valore numerico.";
$lang['edit_promo_edit_error_not_valid']	= "Il totale di punti da aggiungere deve essere rappresentata da un valore numerico.";
$lang['edit_promo_edit_ex_1']			= "Moltiplica per 2 ogni 2 punti accumulati.";
$lang['edit_promo_edit_ex_2']			= ".5 dimezza.";
$lang['edit_promo_edit_ex_3']			= "1.1 aggiungi 10% di punti in più.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "Aggiungi 500 ".$lang['points']." per un nuovo cliente con il passaparola";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']." di bonus se diventi membro";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "riduci 50 ".$lang['points']." per ritardo";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "livello VIP: Raddoppia i ".$lang['points']." accumulati";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "accumuli il 50% in più ".$lang['points']." il Martedì";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "membro Silver: 25% in più ".$lang['points'];
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "25% in meno ".$lang['points'];
$lang['edit_promo_name_empty']			= "Dai un nome alla promozione";
$lang['edit_promo_note_1']			= /*(Addtion Operation)*/ "Le Promozioni verranno registrate automaticamente: seleziona il tipo di promozione e clicca su "; /* ("record button") */
$lang['edit_promo_note_2']			= /*(Multiplication Operation)*/ "Le Promozioni non verranno registrate automaticamente: è necessario inserire l'acquisto effettuato.";
$lang['edit_promo_table_header_1']		= "Moltiplica<br>o Aggiungi";
$lang['edit_promo_table_header_2']		= "Per Quanto";
$lang['edit_promo_table_header_3']		= "ID della Promozione";

$lang['edit_str_header']			= "A richiesta è possibile inserire il totale di ".$lang['currency']." speso per guadagnare Punti";
$lang['edit_str_desc']				= "Il Rapporto Spendi-e-Guadagni è uno dei due precedentemente selezionati per calcolare il valore dei ".$lang['points']." da accumulare per ottenere i tuoi premi. Se lo inserisci qui, accederai alla possibilità di guadagnare ".$lang['points']." inserendo al suo posto ".$lang['currency']." il valore monetario :";
$lang['edit_str_ratio_header']			= "Possibilità di inserire la quantità<br> di ".$lang['currency']." per accumulare punti:";
$lang['edit_str_ratio_on']			= "Attivato";		// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']			= "Disattivato";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_ratio_sub_header']		= "Il tuo Rapporto Spendi-e-Guadagni:";
$lang['edit_str_ratio_not_set']			= "Non Impostato";
$lang['edit_str_example_header']		= "Per Esempio:";
$lang['edit_str_example_1']			= "La tua Cliente vuole acquistare qualcosa che costa ".$lang['currency_symbol']."100 e lei ha 1000 ".$lang['points']." accumulati. Lei chiede se può pagare parte del prodotto/servizio con i suoi".$lang['points'];
$lang['edit_str_example_1_desc']		= "Così quando tu inserisci il Rapporto Spendi-e-Guadagni sopra riportato, <b>il programma calcola automaticamente quanti sono i ".$lang['points']." validi</b>. Non c'è bisogno per te o il cassiere di memorizzare complicate tabelle di premiazione o di usare ogni volta una calcolatrice.";
$lang['edit_str_example_math_show']		= "Clicca qui per vedere il calcolo.";
$lang['edit_str_example_math_hide']		= "Caspita! Nascondi il calcolo!";
$lang['edit_str_example_math']			= "Mettiamo il caso che imposti un ".$lang['ppd']." Rapporto
											di 5 e un Rapporto Spendi-e-Guadagni di 20. Allora:<br>
											1000 ".$lang['points']." / 5 ".$lang['ppd']." / Spend-to-Reward Ratio of 20 = ".$lang['currency_symbol']."10<br>
											<br>
											Un altro utilizzo può essere 10 euro x 5 ".$lang['ppd']." = 50 ".$lang['points'].", e con
											un Rapporto di Spendi-e-Guadagni di 20, hai bisogno di 20 x 50 ".$lang['points']." (1000 ".$lang['points'].") per poter guadagnare ".$lang['currency_symbol']."10.";
$lang['edit_str_example_math_height']	= "90";	// This is the height, in pixels, of the section that the "math" is in.
												// If the translation of the section above requires more room, increase that number accordingly.
$lang['edit_str_note_1']				= "Per disattivare la possibilità di inserire ".$lang['currency']." i valori per guadagnare ".$lang['points'].", elimina il Rapporto Spendi-e-Guadagni (lascia lo spazio vuoto) e clicca "; /*(Set button)*/
$lang['edit_str_note_2']				= "Puoi cambiare il tuo Rapporto Spendi-e-Guadagna ogni qualvolta lo desideri, mentre i livelli di premiazione da te impostati non cambieranno automaticamente.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "Inserisci il numero di visite richieste per ricevere il premio.";
$lang['edit_visits_not_valid']			= "Il numero di visite deve essere rappresentato da un valore numerico.";
$lang['edit_visits_step_dir']			= "Imposta alcuni livelli di premiazione per la tua campagna basata sulle Visite accumulate:";
$lang['edit_visits_table_header']		= "Numero<br>di Visite";
$lang['edit_visits_table_header_2']		= "Descrizione della premiazione ottenuta al raggiungimento del<br> numero di visite accumulate.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "Inserisci un valore non inferiore a 1".$lang['currency_100th_symbol']." (0.01)";
$lang['edit_dpv_heading']				= "Impostazione Premi";
$lang['edit_dpv_label']					= $lang['currency_plural']." ottenuti ad ogni visita:";
$lang['edit_dpv_label_ending']			= "per visita.";
$lang['edit_dpv_note_1']				= "Tale numero può essere modificato ogni qualvolta lo desideri, tranne per le visite già accumulate dai clienti attivati ".$lang['currency']." non cambierà.";
$lang['edit_dpv_step_dir']				= "Imposta il livello di guadagno per la tua campagna:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "Il numero di servizi o prodotti non deve essere inferiore a 1<br> te ne suggeriamo almeno 10.";
$lang['edit_buyx_header']				= "Fino a un certo numero di servizi o prodotti, il servizio/prodotto successivo è gratuito";
$lang['edit_buyx_item_empty']			= "Inserisci il nome del servizio o del prodotto o una descrizione.";
$lang['edit_buyx_item_header']			= /* Add or Edit */ "un Prodotto o Servizio";
$lang['edit_buyx_item_table_header_1']		= "Servizio, Prodotto, o Categoria";
$lang['edit_buyx_item_table_header_2']		= "Dopo quanti<br>quello successivo è Omaggio";
$lang['edit_buyx_none']					= "Non è stato impostato nessun Servizio o Prodotto.";
$lang['edit_buyx_step_dir']				= "Imposta i livelli di premiazione della tua campagna:";
$lang['edit_buyx_table_header_1']		= "Prodotto, Servizio, o Categoria";
$lang['edit_buyx_table_header_2']		= "# Fino a<br>il Prossimo è Omaggio";
$lang['edit_buyx_add_another']			= "Aggiungi un Altro Servizio o Prodotto";
$lang['edit_buyx_add']					= "Aggiungi un Servizio o Prodotto";
$lang['edit_buyx_default_header']		= "Predefinisci il numero di servizi o prodotti fino al prossimo in omaggio";
$lang['edit_buyx_default_label']		= "Imposta nuovi servizi / prodotti:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "Imposta i livelli di premiazione e le preferenze per la tua campagna:";
$lang['edit_giftcard_no_settings']		= "Le campagne Gift Card non hanno preferenze o livelli di premiazione da impostare.";

// Common Customer Content
$lang['customer_account_activated']		= "Account Attivati";
$lang['customer_add_tab']			= "Aggiungi un Cliente";
$lang['customer_lookup_tab']			= "Cerca un Cliente";
$lang['customer_id_not_exist']			= "L'Account ID del Cliente non esiste.";
$lang['customer_id_missing']			= "Non è stato inserito nessun Account ID.";
$lang['customer_tip_1']				= "Sapevi che puoi usare uno scanner bar code o un lettore di card con banda magnetica per inserire la Card di un cliente #?";
$lang['customer_tip_2']				= "Aggiungi tra i preferiti questa pagina usando il Generatore di link tra i Preferiti alla fine del"; /* Account Control Panel screen */
$lang['customer_last_activity']			= "Ultima Attività";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "Errore: Impossibile cancellare la card.";
$lang['manage_cards_find_by_date']		= "Data dell'ultima Attività";
$lang['manage_cards_find_by_header']		= "oppure mostra una lista di TUTTI i clienti:";
$lang['manage_cards_find_directions']		= "Riempi ogni campo sottostante:";
$lang['manage_cards_find_header']		= "Trova un cliente:";
$lang['manage_cards_find_none']			= "Nessun dato corrisponde alla ricerca.";
$lang['manage_cards_find_note']			= "Questo potrebbe richiedere qualche minuto se tu hai qualche migliaio di clienti o una connessione internet lenta.";
$lang['manage_cards_header']			= "Gestione dei clienti";
$lang['manage_cards_list_header']		= "Lista degli Account Clienti";
$lang['manage_cards_not_exist']			= "Questo cliente non esiste.";
$lang['manage_cards_cust_deleted']		= "Questo cliente è stato cancellato.";
$lang['manage_cards_popup_warning']		= "Questo cancellerà le informazioni del cliente e tutte le sue ATTIVITÀ e TRANSAZIONI<br>
											in tutte le campagne associate a questo cliente.<br><br>
											Inoltre, <strong>i report non daranno informazioni passate per questo account</strong>.<br><br>
											Questa azione NON PUÒ ESSERE ANNULLATA!<br><br>
											Sei sicuro di voler cancellare l'account di questo cliente?";
$lang['manage_cards_popup_warning_pc']	= "Questo cancellerà le informazioni del cliente e TUTTE LE ATTIVITÀ e TRANSAZIONI\n
											in tutte le campagne associate a questo cliente.\n\n
											Inoltre, i report non daranno informazini passate per questo account.\n\n
											Questa azione NON PUÒ ESSERE ANNULLATA!\n\n
											Sei sicuro di voler cancellare l'account di questo cliente?";

// Create New Customer Account
$lang['customer_new_card_desc']			= "La Card # o <i>Customer Account ID</i> è necessaria per renderli in grado di controllare<br>il loro bilancio sul tuo sito.";
$lang['customer_new_create_button']		= "Crea un Account Cliente";
$lang['customer_new_demo_phone']		= "(555)555-5555";
$lang['customer_new_demo_email']		= "demo@email.com";
$lang['customer_new_demo_addtl_info']	= "Ogni informazione extra può essere inserita qui.";
$lang['customer_new_id_exists']			= "L'Account Id che hai inserito già esiste.";
$lang['customer_new_id_match']			= "Il seguente account corrisponde con il"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "Questo Account ID del Cliente non è valido.";
$lang['customer_new_exists']			= "L'informazione inserita coincide con un cliente già esistente.";
$lang['customer_new_header']			= "Crea un Nuovo Account Cliente";
$lang['customer_new_multiple_matches']	= "Questi account coincidono ad alcune informazioni da te fornite:";
$lang['customer_new_other_campaigns']	= "Altre Campagne da <br>aggiungi il cliente a:";
$lang['customer_new_random_id']			= "Genera un Numero Casuale";
$lang['customer_new_steps_header']		= "Crea un account di un cliente tipo:";
$lang['customer_new_steps_dir']			= "Un account cliente deve essere definito da un unico identificatore, quale un numero di telefono, un indirizzo email,
											il barcode, o qualsiasi altro dato unico per quel cliente. Sentiti libero di usare un account di prova
											come '11111' per adesso; Potrai cancellarlo in un second momento.";
$lang['customer_new_not_allowed']		= "Non ti è permesso creare nuovi account clienti.";

// Lookup Customer Account
$lang['customer_activity_header']		= "Attività dell'Account";
$lang['customer_activity_none']			= "Questo account non ha attività.";
$lang['customer_activity_print_short']	= "Ultima Transazione"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "Bilancio Attuale:";
$lang['customer_lookup_balances_none']	= "Nessun Bilancio";
$lang['customer_lookup_button']			= "Trova il Cliente";
$lang['customer_lookup_header']			= "Trova l'Account di un Cliente";
$lang['customer_lookup_instructions']	= "Inserisci alcune informazioni del cliente:";
$lang['customer_lookup_multiple_match']	= "I seguenti record corrispondono alla tua ricerca";
$lang['customer_lookup_multiple_view']	= "Vedi Dettagli Account";
$lang['customer_lookup_no_match_add']	= "Nessun record trovato corrisponde. Puoi creare un nuovo account in basso";
$lang['customer_lookup_no_match']		= "Non ci sono clienti corrispondenti ai tuoi criteri di ricerca in questa campagna.";
$lang['customer_lookup_not_allowed']	= "Non ti è permesso accedere ai dati personali del cliente.";
$lang['customer_lookup_steps_header']	= "Aggiungi e premia le transazioni.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "Aggiungi il Cliente ad altre Campagne:";
$lang['customer_edit_campaigns_note']	= "Aggiungere un cliente ad altre campagne ti permette di cercare il cliente usando ricerche parziali oppure informazioni sul suo account.
											Altrimenti, puoi cercarlo usando il numero di barcode della sua Card # / Account ID only, o usando
											il menu in alto a destra per spostarti da una campagna all'altra all'interno dei dati del cliente.";
$lang['customer_edit_header']			= "Pubblica Informazioni dell'Account";
$lang['customer_edit_random_number']	= "Genera un Numero Casuale";
$lang['customer_edit_sub_header']		= "Tutti i campi sono opzionali.";
$lang['customer_edit_activity_header']	= "Informazioni sulle Attività dell'Account del Cliente";

// Record Customer Transactions
$lang['transaction_add_button']			= "Aggiungi un Account";
$lang['transaction_amount_not_valid']	= "ERRORE DI TRANSAZIONE:<br>L'Importo di ".$lang['currency']." inserito non è valido";
$lang['transaction_amount_too_samll']	= "ERRORE DI TRANSAZIONE:<br>L'Importo di ".$lang['currency']." inserito DEVE essere almeno pari a 0.01";
$lang['transaction_new_gc_header']		= "Aggiungi un nuovo Account";
$lang['transaction_new_header']			= "Nuova Attività";
$lang['transaction_no_amount']			= "ERRORE DI TRANSAZIONE:<br>Tu devi inserire un importo di".$lang['currency']." <br>oppure selezionare una promozione.";
$lang['transaction_promo_not_valid']	= "ERRORE DI TRANSAZIONE:<br>Tu devi inserire l'importo speso<br>per usare questa promozione.";
$lang['transaction_promos_label']		= "Seleziona una Promozione:";
$lang['transaction_purchase_label']		= "Inserisci il Totale Speso:";
$lang['send_email']							= "Invia e-mail?";
$lang['transactions_buyx_none']			= "Nessun Servizio o Prodotto Impostato.";
$lang['transactions_buyx_none_dir']		= "Ritorna al Pannello di Controllo e modifica le impostazioni.";
$lang['transactions_visit_credited']	= "1 Evento Accreditato";
$lang['transactions_visit_redeemed']	= "Eventi Riconosciuti";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "Errore in fase di cancellazione transazione. Prego prova ancora.";
$lang['transaction_delete_popup']		= "<strong>Questo eliminerà la transazione in modo permanente.</strong><br><br>
											Questa azione NON POTRÀ ESSERE ANNULLATA!<br><br>
											Sei sicuro di voler eliminare la transazione?";
$lang['transaction_delete_popup_pc']	= "Questo eliminerà la transazione in modo definitivo.\n\n
											Questa azione NON PUÒ ESSERE ANNULLATA!\n\n
											Sei sicuro di voler eliminare la transazione?";

// Redeem Rewards
$lang['redeem_buyx_header']				= "Tabella Premi";
$lang['redeem_buyx_sub_header']			= "Il Cliente ha accumulato sufficenti attività per:";
$lang['redeem_header']					= "Premio Disponibile";
$lang['redeem_header_alt']				= "Sottrai dall'Account";
$lang['redeem_points_partial_header']		= "Puoi sottrarre quanti"; /* points or dollars */" vuoi";
$lang['redeem_points_partial_none']		= "Quando questo Account ha un bilancio."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "Oppure selezione una ricompensa da riconoscere";
$lang['redeem_reward_description']		= "Descrizione del Premio";
$lang['redeem_reward_balance_none']		= "Il bilancio corrente di questo account non è<br>sufficente per ottenere un Riconoscimento pre-definito.";
$lang['redeem_reward_balance_zero']		= "Il bilancio di questo account<br>non è sufficente per sottrarre nulla.";
$lang['redeem_reward_balances_none']		= "Il bilancio attuale di questo account<br>non è sufficente a richiedere nessuna ricompensa.";

// Reports
$lang['report_audit_title']				= "Report di Verifica delle Transazioni";
$lang['report_audits_all_trans']		= "Tutte le Transazioni";
$lang['report_audits_header']			= "Verifiche";
$lang['report_audits_redeemed_only']		= "Solo Riconosciuti";
$lang['report_audits_totals']			= "Totali";
$lang['report_balances_header']			= "Report di Bilancio dei Clienti";
$lang['report_campaigns_included']		= "Campaigne Incluse:";
$lang['report_col_1_header']			= "Seleziona un Report";
$lang['report_col_2_header']			= "Seleziona un Intervallo di Tempo";
$lang['report_col_3_header']			= "Seleziona una Campagna/e";
$lang['report_date_not_valid']			= "Data non valida<br>(Potrebbe essere un anno Bisestile)";
$lang['report_date_mismatch']			= "Errore: La data di Inizio non può<br>essere dopo la data di Fine.";
$lang['report_frequent_header']			= "Report dei Clienti Frequenti";
$lang['report_frequent_min_trans']		= "Numero Minimo di Transazioni";
$lang['report_none']					= "Nessun Cliente Corrisponde alla ricerca";
$lang['report_marketing_header']		= "Marketing";
$lang['report_marketing_new_cust']		= "Nuovi Clienti";
$lang['report_marketing_freq_cust']		= "Clienti Frequenti";
$lang['report_marketing_freq_or_more']		= /* A given number of */ "Transazioni o più.";
$lang['report_marketing_include']		= "Includi le Transazioni per Riconoscimento Premi.";
$lang['report_marketing_miss_dir_1']		= "Clienti che hanno effettuato una visita nel periodo di tempo definito,";
$lang['report_marketing_miss_dir_2']		= "e non sono tornati in tutti questi giorni:";
$lang['report_missing_header']			= "Clienti Che NON Sono Tornati in"; /* a number of days.*/
$lang['report_new_customers_header']	= "Report dei Nuovi Clienti";
$lang['report_new_customers_none']		= "Nessun Nuovo Cliente Corrisponde al Criterio ricercato";
$lang['report_new_customers_range']		= "Nuovi Clienti tra"; /* one date and another date */
$lang['report_redeem_one_letter_code']	= "R";
$lang['report_run_report_button']		= "Carica il Report";
$lang['report_no_transactions']			= "Nessuna Transazione Trovata";
$lang['report_totals_header']			= "Report delle Verifiche Totali";

// Report Months
$lang['Jan']							= "Gen";
$lang['Feb']							= "Feb";
$lang['Mar']							= "Mar";
$lang['Apr']							= "Apr";
$lang['May']							= "Mag";
$lang['Jun']							= "Giu";
$lang['Jul']							= "Lug";
$lang['Aug']							= "Ago";
$lang['Sep']							= "Set";
$lang['Oct']							= "Ott";
$lang['Nov']							= "Nov";
$lang['Dec']							= "Dic";

// Auto-Generated Emails
$lang['email_account_activity']			= "Aggiornamento al tuo account";
$lang['email_activated_header']			= "Campagna Attivata";
$lang['email_activated_sub_header']		= "La Campagna seguente è stata attivata:";
$lang['email_billing_header']			= "Cambiamento nel Livello di Fatturazione";
$lang['email_billing_from_level']		= "Il tuo livello di fatturazione dell'account è cambiato da";
$lang['email_deactivated_header']		= "Campagna Disattivata";
$lang['email_deactivated_sub_header']		= "La Campagna seguente è stata disattivata:";
$lang['email_greeting']					= "Ciao"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "Conserva queste informazioni in un luogo sicuro";
$lang['email_html_callout_url']			= "Indirizzo di Login"; // As in "the internet address where a client can log into the acount management application of StickyStreet."
$lang['email_keep_email_footer_1']		= "Conserva questo messaggio tra i tuoi documenti.";
$lang['email_keep_email_footer_2']		= "Contiente informazioni importanti sul tuo account.";
$lang['email_new_account_header']		= "Nuovo Account";
$lang['email_new_account_sub_header']	= "Un nuovo account è stato creato.";
$lang['email_html_password_nochange']	= "Nessun Cambiamento"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "Registrazione Clienti Online";
$lang['email_online_register']			= "Il cliente seguente si è registrato online per il suo account:";
$lang['email_password_header']			= "Richiesta di Recupero Password";
$lang['email_password_dir1']			= "Ci hai chiesto di inviarti la password di accesso per l'utente"; /* shows the User ID */
$lang['email_password_dir2']			= "Questa è:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "Cambiamenti al tuo Account";
$lang['email_update_sub_header']		= "Le tue informazioni per l'account sono state aggiornate.";
$lang['email_user_id_header']			= "Richiesta di Recupero ID Utente";
$lang['email_user_id_sub_header_1']		= "Hai richiesto l'ID Utente associata con il tuo indirizzo email:";
$lang['email_user_id_sub_header_2']		= "Hai richiesto gli ID Utenti associati con il tuo indirizzo email:"; // Plural


// Bookmarks
$lang['bookmarks_header']			= "Crea i Segnalibri per l'Auto-Login";
$lang['bookmarks_table_header_1']		= "Scegli una Pagina da registrare come Segnalibro";
$lang['bookmarks_table_header_2']		= "Scegli un Utente a cui creare un Auto-Login";
$lang['bookmarks_table_header_3']		= "Collegamento al Segnalibro";
$lang['bookmarks_link_1']				= "Clicca il Tasto Destro<br>su questo collegamento<br>per impostare il segnalibro.";
$lang['bookmarks_link_2']				= "Clicca per andare<br>alla pagina e registra<br>il segnalibro da li.";
$lang['bookmarks_note']					= "Tratta i collegamenti forniti come le password dentro il tuo account.
											Ti raccomandiamo di non inviarli a nessuno via email o tramite istant messenger, piuttosto accedi tu stesso dal computer dove
											vuoi che il segnalibro dovrà essere aggiunto all'intenro della lista dei segnalibri del tuo browser.";

// Common Error Messages:
$lang['error_email_space']			= "Gli spazi vuoti non sono permessi negli indirizzi email.";
$lang['error_email_not_found']			= "Questo indirizzo email non è stato trovato.";
$lang['error_email_not_valid']			= "Questo indirizzo email non è valido.";
$lang['error_customer_id_empty']		= "Devi inserire un account ID Cliente.";
$lang['error_next_page']			= "C'è stato un problema mentre passavamo alla pagina successiva. Prova ancora.";
$lang['error_password_empty']			= "Devi scegliere ed inserire una password.";
$lang['error_password_length']			= "La tua password deve essere lunga tra i 5 and 20 caratteri.";
$lang['error_password_not_valid']		= "Una password può essere formata solo da lettere, numeri o da un underscore (_)";
$lang['error_password2_empty']			= "Inserisci di nuovo la password per essere certi<br>che sia stata digitata correttamente la prima volta.";
$lang['error_passwords_no_match']		= "La password che hai inserito non corrisponde.<br>Prego scrivila di nuovo.";
$lang['error_phone_area_code']			= "Per fare insirisci un prefisso internazionale valido.";
$lang['error_phone_not_valid']			= "Questo non è un numero di telefono valido.";
$lang['error_service_down']				= "Il servizio è temporaneamente indisponibile.<br><br>Ci scusiamo per l'inconveniente.";
$lang['error_updating']					= "C'è stato un errore nell'aggiornamento delle informazioni. Prego prova ancora.";
$lang['error_userid_error']				= "Errore: L'ID Cliente inserito non è stato trovato.";

// Alt Tags
$lang['alt_add_customer_button']		= "Clicca su AGGIUNGI l'account del cliente su questa campagna";
$lang['alt_account_edit_save']			= "Clicca su salva i cambiamenti fatti su questo form";
$lang['alt_campaign_delete']			= "Clicca su Cancella questa campagna";
$lang['alt_campaign_edit']				= "Clicca su modifica le impostazione della campagna";
$lang['alt_campaign_name']				= "Clicca sul nome della campagna per verificare l'esistenza di clienti o aggiungine di nuovi";
$lang['alt_campaign_new_create']		= "Clicca per creare questa campagna";
$lang['alt_campaign_place_on_hold']		= "Questa campagna è attiva. Clicca per metterla in attesa";
$lang['alt_campaign_re-activate']		= "Clicca ri-attiva questa campagna";
$lang['alt_cancel_changes']				= "Clicca per cancellare ogni cambiamento e per ritornare alla schermata precedente";
$lang['alt_goto_ss']					= "Clicca per aprira una fienstra e andare a questa destinazione";
$lang['alt_lookup_customer_button']		= "Clicca per CERCARE gli account clienti in questa campagna";
$lang['alt_user_add']					= "Clicca per inserire un nuovo utente con una login e password personale e un suo livello di permesso";
$lang['alt_user_delete']				= "Clicca per cancellare questo utente così non potrà entrare e avere accesso al suo account";
$lang['alt_user_edit']					= "Clicca per modificare le proprietà di questo utente";

// ADDITIONAL / NEW DEFINITONS:

// Single words and labels
$lang['Balances'] = "Bilanci"; // Plural
$lang['Reward'] = "Premio"; // As in a thing that can be claimed after certain conditions have been met. Ex: "The reward for having 1000 points is a free widget."
$lang['Rewards'] = "Premi"; // Plural
$lang['To_Get_One_Of'] = "Per averne uno di"; // As in "to receive" or "to be given" a single quantity. Ex: "You need to buy 10 coffees to get one of [the same] free"

// Labels
$lang['label_email_short'] = "Email";

// Common Error Messages:
$lang['error_balance_lookup_activity'] = /* The account id entered */ "non ha attività registrate.";
$lang['error_balance_lookup_no_cust'] = "Nessun Account Cliente.";
$lang['error_balance_lookup_no_acct'] = "Nessun ID Account.";

// Outside / Optional Links
// ------------------------
// Translate this section ONLY if the embeded links have been replicated in the new language:

// Legal Documents
$lang['terms_conditions_location']		= 'simsol-terms-conditions.html';

// Edit Preferences: Points Campaign
$lang['edit_points_note_1_graphic']		= '';
$lang['calculator_link'] 				= '';
$lang['edit_points_note_1'] 			= "";

$lang['blog_link_accounting'] 			= '';
$lang['edit_points_note_2'] 			= "";

$lang['edit_str_desc_with_link']		= "Il rapporto Spesa-Premio è uno dei due rapporto che devi usare per scoprire il ".$lang['points']." valore del tuo premio. Inserendolo qui avrai la capacità di riconoscere".$lang['points']." inserendo un ".$lang['currency']." valore:";


// =========================
// ADDITIONAL TRANSLATIONS 1
// =========================

// Single words and labels
$lang['Referrer']						= "Referente"; 	// As in a person or entity that sends business your way.
$lang['Comma']							= "Virgola";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Deducted']						= "Scaricati";	// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Item']							= "Articolo";		// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Pipe']							= "Tasto Pipe";		// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "Acquistato";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Tab']							= "Tasto Tab";		// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Required']						= "Obbligatorio";	// As in necessary, compulsory. Ex: "The name field is required."
$lang['optional']						= "facoltativo"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";

// Page Titles
$lang['title_managing_cards']			= "Gestione Archivio Clienti";
	$lang['importing_customers']		= "Importazione Clienti";
	$lang['customers_imported']			= "Clienti Importati";
	$lang['importing_transactions']		= "Importazione Transazioni";
	$lang['transactions_imported']		= "Transazioni Importate";

// Labels
$lang['label_currency']					= "Valuta";				// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']			= "Simbolo Valuta";		// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_language_select']			= "Seleziona Lingua";		// As in a prompt to the user to select a language for the application
$lang['label_localization']				= "Localizzazione";			// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_timezone']					= "Ora locale";

// New Account Screen
$lang['account_language_error']			= "C'è un errore nella lingua selezionata.";
$lang['account_language_note']			= "Nota: Questa è la lingua utilizzata dall'account.<br>
											Impostare o selezionare<br> una lingua diversa per Un Account Utente (nella sezione Utenti), nella fase login annulla la lingua preimpostata.";
$lang['account_timezone_note']			= "Nota: Questa è l'ora locale prescelta dell'account.<br>
											Può essere impostata un'altra ora per l'Account Utente (nella sezione Utente),<br>
											che annulla quella precedente.";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']			= "Importa Cliente e Transazioni";
$lang['manage_import_customers']		= "Importa Clienti";
$lang['manage_import_transactions']		= "Importa Transazioni Clienti";
$lang['manage_import_no_none']			= "Tutti i campi devono essere impostati. Prego seleziona almeno un campo da importare.";
$lang['manage_import_duplicate_card']	= "DUPLICA LA CARD:";
$lang['manage_import_duplicate_found']	= "Cliente duplicati";
$lang['manage_import_duplicates_found']	= "Clienti duplicati";
$lang['manage_import_successful']		= "Importazione avvennuta con Successo";
$lang['manage_import_new_customer']		= "nuovo cliente importato";
$lang['manage_import_new_customers']	= "nuovi clienti importati";
$lang['manage_import_updated_customer']	= "cliente aggiornato";
$lang['manage_import_updated_customers']= "clienti aggiornati";
$lang['manage_import_no_cust_data']		= "Non c'è nessun dato del cliente da importare. Prego copia e incolla i dati del tuo cliente nel riquadro sotto:";
$lang['manage_import_campgn_not_valid']	= "Una delle campagne selezionate non è valida.";
$lang['manage_import_select_1_campaign']= "Devi selezionare almeno una campagna da aggiungere ai tuoi clienti.";
$lang['manage_import_select_delimiter']	= "Prego seleziona uno dei delimitatori sopra.";
$lang['manage_import_new_trasns']		= /* a number */ "nuove transazioni registrate";
$lang['manage_import_new_account']		= "creato nuovo account cliente";
$lang['manage_import_new_accounts']		= "creati nuovi account clienti";
$lang['manage_import_no_cust']			= "Nessuno cliente importato o aggiornato";
$lang['manage_import_no_trans']			= "Nessuna transazione è stata registrata";
$lang['manage_import_no_trans_data']	= "Non ci sono dati del cliente da importare. Prego copia e incolla i dati delle tue transazioni  nel riquadro sotto:";
$lang['manage_import_fields_missing']	= "Mancano alcuni dei campi obbligatori.";
$lang['manage_import_cust_instr_head']	= "<b>Importare un elenco clienti è molto semplice:</b>";
$lang['manage_import_cust_instr_1']		= "Seleziona la campagna / le campagne alle quali parteciperanno questi clienti.";
$lang['manage_import_cust_instr_2']		= "Specifica come separare ogni colonna e in quale ordine.";
$lang['manage_import_cust_instr_3']		= "Copia-incolla la tua lista nel riquadro grande, e controlla il riquadro se vuoi che i dati coincidano<br>
													(con lo stesso account id / card #)  in modo che vengano sovrascritti o ignorati.";
$lang['manage_import_cust_instr_4']		= "Le date possono essere in uno dei seguenti formati <i>(Gli anni devono avere un formato di 4 cifre)</i>:<br>
														<pre style=\"margin: 0px; padding: 0px;\">AAAA/MM/DD, AAAA-MM-DD, AAAA.MM.DD, MM/DD/AAAA, MM-DD-AAAA, MM.DD.AAAA</pre>";
$lang['manage_import_campaigns_list']	= "Lista Campagne";
$lang['manage_import_add_campaigns']	= "Aggiungi alle Campagne";
$lang['manage_import_field_order']		= "Ordine Campo";
$lang['manage_import_field_delimiter']	= "Campo Delimitatore";
$lang['manage_import_excel_default']	= "(il modello predefinito nel copia-incolla da MS Excel)";
$lang['manage_import_field_note']		= "<i>Tutti i campi sono facoltativi.</i><br>
												<br>
												Nota: Se intendi importare le transazioni del cliente<br> in un secondo momento è <br> necessario un unico<i> Account ID/ Card #</i>  Cliente <br> per ogni cliente (in modo che poi coincidono le transazioni con i clienti).";
$lang['manage_import_customer_list']	= "Lista Clienti";
$lang['manage_import_duplicates']		= "Duplica?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "Sovrascrivi"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "Incolla la lista clienti nel riquadro sotto";
$lang['manage_import_trans_instrctns']	= "<b>Per importare un elenco di transazioni:</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">Specifica come separare ogni colonna e in quale ordine.</li>
												<li style=\"padding-bottom: 5px;\">Assicurati che le transazioni 'Premiazioni' hanno un'<b>Y</b>' nella colonna 'Premiazioni in base al numero di visite accumultate' e che risultano quali <b><i> valori </i></b> POSITIVI.</li>
												<li style=\"padding-bottom: 5px;\">Se stai importando transazioni per una campagna '<b>Comprane X Ne Prendi Uno Omaggio</b>', assicurati di avere una colonna selezionata '<b>Articoli Acquistati</b>'.</li>
												<li style=\"padding-bottom: 5px;\">Se non viene inserita alcuna data, la transazione sarà registrata con la data odierna.<br>
													Le date possono essere in uno dei seguenti formati <i>(Gli anni devono avere un formato di 4 cifre)</i>:<br>
													<pre style=\"margin: 0px; padding: 0px;\">AAAA/MM/DD, AAAA-MM-DD, AAAA.MM.DD, MM/DD/AAAA, MM-DD-AAAA, MM.DD.AAAA</pre></li>
												<li style=\"padding-bottom: 0px;\">Copia-incolla la tua lista nel grande riquadro sotto.</li>
											</ol>";
$lang['manage_import_campaign_name']	= "ID Campagna";
$lang['manage_import_trans_date']		= "Data Transazione";
$lang['manage_import_trans_amount']		= "Importo Transazione";
$lang['manage_import_redeem_event']		= "Premiazione in base al numero di visite accumulate (Y/N)";
$lang['manage_import_req_for_buyx']		= "Obbligatorio (SOLO per le campagne \"Comprane X...\")";
$lang['manage_import_item_purchased']	= "Articoli Acquistati";
$lang['manage_import_description_auth']	= "Descrizione / Autenticazione.";
$lang['manage_import_trans_list']		= "Lista Transazioni";
$lang['manage_import_paste_trans']		= "Incolla le transazioni dei clienti nel riquadro sottostante";

// Reports
$lang['report_all_customers']			= "Tutti i Clienti";
$lang['report_all_customers_header']	= "Report di tutti i Clienti";
$lang['report_all_customers_range']		= "Tutti i Clienti Tra"; /* one date and another date */
$lang['report_balances_header']			= "Report Saldo clienti";
$lang['report_balances']				= "Saldi Clienti per";
$lang['report_date_range']				= "I Clienti che hanno fatto una transazione tra:"; /* a range of dates.*/
$lang['report_search_header']			= "Customer Search Report";
$lang['report_search']					= "Ricerca Clienti Per:";
$lang['report_search_range']			= "Tra"; /* one date and another date */
$lang['report_search_not_valid']		= "Inserisci una parola per effettuare la ricerca.";

// Report Exporting
$lang['export_xls']						= "Esporta su Excel";
$lang['export_mailchimp']				= "Esporta su Mailchimp";
$lang['export_apex']						= "Invia un SMS";

// Users: Common actions:
$lang['user_role_F']					= "Inserisci Contraente";
$lang['user_role_F_desc']				= "All'interno delle campagne consentite, puoi solamente premiare i clienti.";

// Common Error Messages:
$lang['error_language_selector']		= "Questo errore è dovuto alla lingua selezionata.";

// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================
$lang['error_account_suspended']		= "Questo account è stato sospeso";

// =========================
// Calculator
// =========================
$lang['calculator_title']				= "Programma Calcola Punti";
$lang['str_ratio']						= "Rapporto Spendi-Guadagna";
$lang['check_section_desc']				= "Assicurati di non offrire più di quanto guadagni:";
$lang['Print']							= "Stampa";
$lang['column_product_or_pervice']		= "Prodotto o Servizio";
$lang['column_retail_price'] 			= "Prezzo di vendita del prodotto / servizio";
$lang['column_points_earned'] 			= "Punti guadagnati dal cliente con questo acquisto";
$lang['column_points_needed'] 			= "Punti che il cliente deve accumulare per avere questo in regalo";
$lang['column_cost_to_provide'] 		= "Quanto ti costa il prodotto / servizio";
$lang['column_profit_made'] 			= "Il Profitto che ne ricavi dalle vendite di ";
$lang['column_profit_made_part2']		= "di questi prodotti<br>o servizi";
$lang['column_cost_reward_perc']		= "Costo del regalo<br>inteso come % di profitto.";
$lang['column_cost_reward_smaller']		= "(minore è il costo, maggiore è il guadagno)";
$lang['instructions']				= "Istruzioni";
$lang['calculator_instructions_1']		= "<strong>1) I tuoi clienti guadagneranno punti per ogni ".$lang['currency']." speso.
											Quanti saranno i punti gaudagnati? La risposta dipende solo da te.</strong><br>
											<br>
											Naturalmente se decidi di abbinare 1 punto ad ogni ".$lang['currency']." speso, sarà 		                                            facile per il tuo cliente contare quanto ha già speso all'interno della tua                                            attività.
											In effetti, non hai motivo di preoccuparlo rendendogli amaro il conto, quando invece
											i suoi acquisti vengono fatti con gioia nel tuo negozio. Inserendo un numero meno semplice
											da calcolare, l'acquisto diventa più intrigante ed anche la conseguente scoperta dei                                            punti guadagnati!
											Ti suggeriamo di inserire almeno 100 punti per ".$lang['currency']." speso se sei hai bisogno                                            di far caricare punti anche per la spesa di pochi centesimi, ma può essere più                                            semplice inserire 3, 5 oppure 20, per semplificarti la vita.<br>
											<br>
											<strong>Una volta che hai deciso il numero da inserire, indicalo nella casella
											<span class=\"orangeH\">Punti per ".$lang['currency']."</span> soprastante.</strong><br>";
$lang['calculator_instructions_2']			= "<strong>2) Di seguito, <i>il Rapporto Spendi-Guadagna</i>
											può essere anche interpretato in questo modo  \"Quante volte un cliente deve
											comprare un prodotto o servizio per raggiungere un regalo dello stesso valore?\"</strong><br />
											<br>
											Solitamente si tratta di un numero compreso tra 8 e 25 o un numero superiore, ma è
											a discrezione del tipo di attività e dell'utilizzo che si desidera fare.
											Ad esempio, all'interno di un bar potrebbe essere regalata una tazza di caffè dopo
											la decima ordinata. Maggiore è il numero di acquisti da effettuare per il cliente,
											prima di fargli ottenere un riconoscimento più parsimonioso sarai nel gestire i tuoi
											affari, ma anche è più difficile per il tuo cliente raggiungere il riconoscimento desiderato.<br>
											<br>
											<strong>Inserisci un numero nel riquadro <span class=\"orangeH\">Rapporto Spendi-Guadagna</span>,
											e poi prova ad usarlo inserendo numeri diversi. La calcolatrice ti avverte se vai in perdita.
											Prova ad inserire vari importi per capire il risultato e il margine di guadagno finquando
											non sarai padrone del calcolo.</strong>";
$lang['calculator_disclaimer']			= "<strong>Nota Bene</strong>: Questa calcolatrice
											è solo uno strumento di riferimento, consigliamo ai nostri clienti imprenditori di
											verificare i propri dati con la propria amministrazine prima di avviare qualsiasi programma
											a punti. Noi vi suggeriamo come far crescere il vostro business, è così Semplice!";

// =========================
// Transaction Email
// =========================
$lang['transaction_email_content'] 		= "Email della Transazione: Contenuto";
$lang['transaction_email_desc'] 		= "Se un cliente ha un indirizzo email quando registri una transazione puoi decidere di inviargli un'email direttamente.";
$lang['transaction_email_instr'] 		= "Per personalizzare l'email che loro ricevono da te per questa campagna, riscrivi o modifica la mail di esempio sottostante:";
$lang['transaction_email_default'] 		= "Grazie per averci visitato e scelto.";
$lang['transaction_email_incl_balance'] = "Inserisci il saldo";
$lang['transaction_email_incl_rewards'] = "Inserisci i regali disponibili";
$lang['transaction_email_incl_coupon'] 	= "Inserisci una promozione o un coupon offerta";
$lang['error_general_permission'] 		= "Contenuto non disponibile.";




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
$lang['email_agency_update_header']             = "Cambiamenti all'Account:";
$lang['email_agency_update_sub_header'] 			= "Le seguenti informazioni dell'account sono state aggiornate:";
// Import Updates:
$lang['Options']                               	= "Opzioni";  // Plural. La capacità di scegliere tra differenti alternative o non richieste specifiche addizionali.
$lang['manage_import_duplicates_update']        = "Aggiorna";
$lang['manage_import_duplicates_ignore']        = "Salta";
$lang['manage_import_convert_currency'] = "Convertire l'importo della transazione nella moneta tracciata nella campagna?";
$lang['manage_import_trans_instrctns_2']        = 'Se stai importando <b>CASH transactions</b> in una Campagna Raccolta punti,
                                                   o importando una lista di Visite in una Campagna Guadagna Denaro ad ogni Visita, assicurati di controllare la
                                                   "'.$lang['manage_import_convert_currency'].'" casella di controllo. Se stai importando i punti del cliente o
                                                   il valore guadagnato dal cliente, assicurati di lasciare la casella di controllo non spuntata.';
// Import Undo
$lang['import_previous_title']                  = 'Importazioni Precedentei';
$lang['Undo']                                   = 'Annulla';
// BuyX Membership Functionality
$lang['Quantity']                               = "Quantità da aggiungere";
// Mailchimp Integration
$lang['select_a_list_to_export_to']             = "Seleziona una lista da Esportare";
$lang['success']                                = "Successo";
$lang['export_complete']								= "Esportazione Completa";
$lang['loading']                                = "In Caricamento...";
$lang['oops']                                   = "Oops!";
$lang['all_addresses_exist']                    = "Tutti questi indirizzi già esistono nella Lista";
$lang['we_found']                               = "Abbiamo trovato";
$lang['errors']                                 = "errori";
$lang['addresses_successfully_added']   			= "indirizzi aggiunti con successo";
$lang['mailchimp_integration']                  = "Integrazione di MailChimp";
$lang['mailchimp_login_error'] = "MailChimp non riconosce il tuo username/password.  Attenzione - per motivi di sicurezza, dopo 10 tentativi di accedere consecutivamente, dovrai attendere 5 minuti prima di tentare di nuovo. ";
$lang['export_complete'] = "Esportazione Completa";
$lang['addresses_exist'] = "Indirizzi E-Mail già esistenti in questa lista";
$lang['addresses_with_errors'] = "Indirizzi E-Mail con errori";
$lang['Back'] = "Indietro";
$lang['CLOSE'] = "CHIUDI";
$lang['Visit_MailChimp'] = "Visita MailChimp";
$lang['mailchimp_no_account_info'] = "Non riusciamo a trovare il tuo account Mailchimp.  Scrivilo ora per continuare l'esportazione!";
$lang['mailchimp_bad_account_info'] = "La tua Login o la tua password di Mailchimp non sono state riconosciute da Mailchimp. Inseriscile Ore per continuare con l'esportazione!";
$lang['bananas'] = "Banane!";
$lang['no_username'] = "Non hai inserito il tuo Username e/o la password!";
$lang['Username'] = "Username";
$lang['Password'] = "Password";


// =========================
// ADDITIONAL TRANSLATIONS 6
// =========================
// Custom Date functionality
$lang['label_date']										= 'Data di nascita';
$lang['label_Year']										= 'Anno';
$lang['label_Month']										= 'Mese';
$lang['label_Day']										= 'Giorno';
$lang['customer_new_demo_date'] 						= '01/01/2010';
$lang['user_edit_record_change_custom_date']		= "Modifica la data di nascita al";
$lang['user_edit_record_replace_custom_date']	= "Modifica la data di nascita dal";
$lang['report_customer_birthday']							= "Utenti con la data di nascita nel seguente intervallo";
$lang['report_customer_birthday_header']					= "Report clienti per data di nascita";
// API functionality
$lang['api_redeem_reward_exeeds']					= "Il livello di premiazione selezionato supera il saldo disponibile";
$lang['api_redeem_amount_exeeds']					= "L'importo inserito supera il saldo disponibile";
$lang['api_redeem_amount_not_valid'] 				= "L'importo inserito non è valido";
$lang['api_redeem_amount_not_enough']				= "L'importo inserito deve essere almeno 1";
$lang['api_redeem_currency_not_enough']         = "L'importo inserito deve essere almeno 0,01";
$lang['api_redeem_nothing'] 							= "Non è stato richiesto nessun premio o ricomempensa";
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
$lang['apex_integration'] = "Invio Sms";
$lang['apex_account_key'] = "Chiave della Linea Sms";
$lang['apex_dynamic_sender'] = "Mittente Sms";
$lang['Low'] = "Bassa";
$lang['High'] = "Alta";
$lang['Quality'] = "Qualità";
$lang['credits_available'] = "Crediti Disponibili";
$lang['credits_for_msg'] = "Ora te ne Servono";
$lang['country_code'] = "Prefisso Internazionale (obbligatorio)";
$lang['message'] = "Messaggio";
$lang['remaining'] = "rimanenti";
$lang['send_sms'] = "Invia SMS";
$lang['apex_success'] = "L'Invio è avvenuto con successo!";
$lang['apex_transfer_error'] = "L'invio del messaggio è fallito. Se il problema persiste, contattaci.";
$lang['apex_login_error'] = "Il collegamento al server è fallito. Contattaci per verificare le tue credenziali";
$lang['apex_account_key_invalid'] = "La chiave della tua Linea Sms non è valida.<br/> Prego contattaci";
$lang['apex_not_subscribed'] = "Non hai sottoscritto ancora l'integrazione degli SMS.<br/> Prego contattaci";

$lang['apex_country_code_required'] = "Un prefisso internazionale è richiesto.";
$lang['apex_empty_message'] = "Il messaggio non può essere vuoto.";
$lang['apex_credentails_invalid'] = $lang['apex_account_key_invalid'];

// =========================
// ADDITIONAL TRANSLATIONS 10
// =========================
// New Field: Reward ID
$lang['edit_reward_id']							= "Opzionale: Reward ID";
// Previous integration:
$lang['user_edit_record_change_password']		= "Password modificata";
$lang['label_customer_password']					= "Password";
// Trial Limit feature:
$lang['error_trial_overage']						= 'Non è possibile aggiungere altri clienti: Sei in una account prova.';
$lang['error_trial_overage_some']				= 'Account prova: Massimo 10 clienti. Le transazioni per i clienti extra non sono state registrate.';
$lang['error_activate_missing']					= 'Parametro di attivazione mancante o non corretto.';

// =========================
// ADDITIONAL TRANSLATIONS 11
// =========================
// API - Users List
$lang['api_error_users_list_not_owner']		= "Solo il proprietario dell'account può accedere a questa informazione";
$lang['api_error_no_users']						= "Nessun utente è stato trovato.";
$lang['Campaign_Error']								= "Campagna non valida o disattivata.";

// =========================
// ADDITIONAL TRANSLATIONS 12
// =========================
$lang['api_error_no_customer_match']			= "Nessun cliente corrisponde ai dati forniti.";
$lang['api_error_multiple_customer_match']	= "Più di un cliente corrisponde ai dati forniti.";
$lang['api_error_PIN_empty']						= "Non esiste nessun PIN registrato";
$lang['api_error_PIN_no_match']					= "Il PIN non corrisponde";
$lang['api_error_password_missing']				= "Nessuna password fornita";
$lang['api_error_PIN_missing']					= "Nessun PIN fornito";
$lang['api_error_username_exists']				= "Questo Utente è già in uso.";
$lang['api_error_invalid_delimiter']			= "Delimitatore non valido";
$lang['api_error_no_data']							= "Nessun dato inserito ";
$lang['manage_import_field_note']		= "<i>Ogni campo è opzionale.</i><br>
												<br>
												Nota: Se hai intenzione di importare i clienti<br>
												<b>le transazioni</b> in seguito, un unico <i>Account ID</i><br>
												per ciascun cliente è RICHIESTO per far coincidere le transazioni<br>
												con il cliente indipendentemente dalla <br>
												<i>Card #</i> che può cambiare.<br>
												Se non hai un unico e separato ID<br>
												per ciascun cliente, inserisci la <i>Card #</i> per<br>
												entrambi i dati 'Account ID' e 'Card #'.";

$lang['label_PIN_new']				= "Nuovo PIN"; // (PIN is a 4 or 5 digit "personal identification number")
$lang['user_new_PIN_label']		= "Scegli un PIN per questo utente";
$lang['user_new_PIN_note']			= "Opzionale: Principalmente per i Terminali.";
$lang['user_edit_PIN_label']		= "Cambia il PIN";
$lang['user_edit_PIN_note']		= "Per mantenere lo stesso PIN, lascialo vuoto.";
$lang['user_PIN_not_numeric']		= "Un PIN deve essere di 4 o 5 numeri solo";


// =========================
// ADDITIONAL TRANSLATIONS 13
// =========================
$lang['edit_record_change_PIN']			= "PIN modificata";
$lang['edit_record_change_username']	= "Username modificata";
$lang['manage_undo_warning']				= "Sei sicuro di voler annullare questa importazione?.<br><br>Questa azione NON PUÒ ESSERE ANNULLATA!";
$lang['manage_undo_warning_pc']			= "Sei sicuro di voler annullare questa importazione?\n\nQuesta azione NON PUÒ ESSERE ANNULLATA!";


// =========================
// ADDITIONAL TRANSLATIONS 14
// =========================

$lang['user_my_info_header']			= "Le Mie Informazioni";
$lang['user_role_I']						= "Cliente di Agenzia con importazione";
$lang['user_role_I_desc']				= "Manager, con la capacità di modificare le impostazioni della campagna, gli utenti, eseguire report delle campagne e gestire i clienti (cancellazione, importazione), ma non ha la possibilità di aggiungere le campagne o ruoli autorizzati.";
$lang['user_role_G']						= "Cliente di Agenzia";
$lang['user_role_G_desc']				= "Manager, con la capacità di modificare le impostazioni della campagna, gli utenti, e eseguire report delle campagne, senza la capacità di aggiungere le campagne, ruoli autorizzati, o di cancellare o importare clienti.";


// =========================
// ADDITIONAL TRANSLATIONS 15
// =========================

$lang['coalition_balance_label']                = "Bilancio di Coalizione<br>Attuale:";
$lang['coalition_redeem_header']                = "Premi Disponibili in Negozio";
$lang['customer_activity_coalition_header']     = "Storia del Cliente (Solo per Questo Negozio)";
$lang['report_coalition_header']                = "Report della Coalizione";
$lang['report_audits_totals_points']            = "Totali di Negozio - Punti";
$lang['report_audits_totals_giftcard']          = "Totali di Negozio - Giftcard";
$lang['section_account_options_header']         = "Opzioni Avanzate di Account";
$lang['section_account_options_sub']            = "Se vuoi creare un Account Avanzato (valido per una Coalizione), prego inserisci
                                                   il Codice di Attivazione in uno dei campi di seguito. Se hai domande o non hai ricevuto il tuo Codice di Attivazione per l'Account Avanzato, ti preghiamo di contattarci. ";
$lang['section_coalition_token']                = "Codice Attivazione Coalizione";
$lang['section_mall_token']                     = "Due-Livelli / Codice Attivazione Centro Commerciale";
$lang['section_coalition_note']                 = "Disponibile con un Costo Aggiuntivo.";
$lang['section_mall_note']                      = "Disponibile con un Costo Aggiuntivo.";
$lang['section_mall_campaign_id']               = "ID della Campagna del Centro Commerciale";
$lang['section_mall_percentage']                = "Contributo al Centro Commerciale (%)";
$lang['section_token_invalid']                  = "Il Codice di Attivazione non è valido";
$lang['section_mall_options_header']            = "Opzioni dell'Account del Centro Commerciale";
$lang['percentage_not_valid']                   = "La Percentuale non è valida.";


// =========================
// ADDITIONAL TRANSLATIONS 16
// =========================
$lang['api_error_permission_denied']            = "L'utente non ha il permesso"; // An error message that shows up when a user makes an API call their permission level does not allow access to.
$lang['api_error_wrong_account']                    = "L'utente non ha il permesso di accedere all'account interessato"; // An error message that shows up when a user makes an API call that affects the wrong account.
$lang['api_error_missing_username']                = "Username mancante"; // An error message that shows up when a username (Account User, not Customer) is required but is missing.
$lang['api_error_PIN_too_many_matches']        = "Troppi utenti usano questo PIN";  // Shows when an account user is trying to be validated in a terminal-like setting bY entering only their PIN which ought to be unique, but there is more than one matching PIN.
$lang['api_error_PIN_duplicate']                    = "Questo pin é già in uso"; // Shows when an user is created or updated and the PIN assigned to them is already in use bu another user in the account.
$lang['api_error_campaign_id']                    = "Errore nell'ID campagna";
$lang['api_error_campaign_name']                    = 'Errore con il nome campagna';
$lang['api_error_campaign_type']                    = 'Error con  Type campagna';
$lang['api_error_campaign_points_ratio']        = 'Error con rapporto campagna punti-per-'.$lang['currency'];
$lang['api_error_campaign_rewards_ratio']        = 'Error con il rapporto campagna spendi e guadagna';
$lang['api_error_campaign_depreciation']        = 'Error with campaign depreciation settings';
$lang['api_error_campaign_dpv']                    = 'Error with campaign earn-per-event amount';
$lang['api_error_campaign_promo']                = 'Error with campaign promotion parameters';
$lang['api_error_campaign_reward']                = 'Errore con i parametri dei premi nella campagna';
$lang['api_error_campaign_item']                    = 'Errore con i parametri campagna BuyX';
$lang['report_custom_date']                        = "Clienti la cui Data selezionata é nell'intervallo seguente";
$lang['report_custom_date_header']                = "Report Data Personalizzata Clienti";


// =========================
// ADDITIONAL TRANSLATIONS 17
// =========================
// Mainly small changes regarding coalition and two-tier programs.

$lang['coalition_points_program']               = "Programma a Punti di Coalizione"; // A label in reports that aggregate an account's points-based coalition campaigns into a single line.
$lang['coalition_giftcards_program']            = "Programma Prepagato di Coalizione"; // A label in reports that aggregate an account's stored-value (giftcard) based coalition campaigns into a single line.
$lang['coalition_program']								= "Programma di Coalizione";
$lang['twotier_program']								= "Programma di Due-Livelli";
$lang['opt_out']												= "Non partecipa";

$lang['user_role_L']                                    = "Store Manager della Coalizione";
$lang['user_role_L_desc']                            = "Lo stesso accesso del Manager, ma senza la capacita' di modificare le informazioni degli utenti una volta inserite.";

$lang['user_role_D']                                   = "Designer delle campagne";
$lang['user_role_D_desc']                            = "Ruolo unico che ha l'abilita di aggiungere, modificare, sospendere e ri-attivare le campagne e creare report, e niente di piu'.";

// =========================
// ADDITIONAL TRANSLATIONS 18
// =========================
$lang['account_label_fields_manage']            = "Gestisci i Campi Personalizzati"; // A button text that lets the user add/manage the fields of data collected for the account's customers.
$lang['error_action_undefined']                    = "Azione Indefinita"; // Shows mainly as an API error message when the "action" parameter is not given or does not match one of the expected action words.
$lang['error_entry_not_in_list']                    = "L'Opzione inserita non é permessa."; // Shows mainly as an API error message when a value is input that does not match one of the options in the list of options for that field.
$lang['error_entries_not_in_list']                = "Le Opzioni inserite non sono permesse."; // Shows mainly as an API error message when a series of values is input that do not exist in the list of options for that field.
$lang['error_not_numeric']                            = "Numero non valido.";
$lang['error_not_monetary']                        = "Importo non valido.";
$lang['error_not_date']                                = "Data non valida.";
$lang['manage_fields_top_header']                = "Seleziona un Campo dati da gestire"; // The page header where data fields are managed (customers, transations, etc.)
$lang['manage_fields_customers_top_header']    = "Gestisci i Campi Cliente"; // The page header where customers' data fields are managed (to add, show/hide, etc.)
$lang['manage_fields_transactions_top_header']    = "Gestisci i Campi delle Transazioni"; // The page header where customers' transaction data fields are managed
$lang['manage_fields_predefined_header']        = "Campi Clienti Predefiniti"; // The section where the original set of customer fields are show, and where the user can choose to show or hide them.
$lang['manage_fields_custom_header']            = "Campi Cliente"; // The section where new custom customer data fields are shown.
$lang['label_customer_fields']                    = 'Campi Cliente'; // A button for the user to select to manage the fields related to customer data.
$lang['label_transaction_fields']                = 'Campi Transazione'; // A button for the user to select to manage the fields related to a customer's transaction data.
$lang['label_Label']                                    = "Etichetta";  // As in "the word that describes a category" -- ex: The label of this field is the word that describes what the field is for.
$lang['label_Type']                                    = "Tipo"; // As in "the kind of thing it is" -- ex: This field is of a text type. The type of this other field is a date.
$lang['label_Text']                                    = "Testo"; // One of the types of field mentioned above. In this case a field that includes any kind of character.
$lang['label_Date']                                    = "Dati"; // One of the types of field mentioned above. In this case a field that represents a calendar date and time, to the second.
$lang['label_List']                                    = "Lista"; // One of the types of field mentioned above. In this case a field that allows the user to choose elements in a list.
$lang['label_Picklist']                                = "Lista Preferiti"; // One of the types of field mentioned above. In this case a field that allows the user to pick ONE elements from a list.
$lang['label_Number']                                = "Numero"; // One of the types of field mentioned above. In this case a field that is numerical in value only.
$lang['label_Money']                                    = "Denaro"; // One of the types of field mentioned above. In this case a field that is numerical, with exactly two decimals.
$lang['label_Choices']                                = "Opzioni Lista"; // A description of a field type that allows the user to store alternatives to be chosen in a list.
$lang['label_Choices_sub']                            = "Separa ogni opzione con una virgola"; // Instructions to the user to separate each option for the list with a comma (,) character.
$lang['label_Unique']                                = "Unico?";// Description of a field choice that asks the user if the values recorded in the field in question must be unique.
$lang['label_Select']                                = "Seleziona:"; // The word that appears as the initial selection (and thereby, as the instruction) in a pull-down menu.
$lang['custom_field_delete_popup']                = "Questo campo personalizzato sarà cancellato, insieme a TUTTI I DATI CLIENTE.<br><br>
                                                                Questa azione NON PUO' ESSERE ANNULLATA!<br><br>
                                                                Sei sicuro di voler cancellare  questo campo cliente?";

$lang['custom_field_delete_popup_pc']            = "Questo campo personalizzato sarà cancellato, insieme a TUTTE LE INFORMAZIONI DEL CLIENTE.\n\n
                                                                Questa azione NON PUO'ESSERE ANNULLATA!\n\n
                                                                Sei sicuro di voler cancellare questo campo personalizzato?";

$lang['success_customer_fields']                    = "I Cambiamenti ai campi cliente sono stati registrati con successo.";
$lang['success_transaction_fields']                = "I Cambiamenti ai campi delle transazioni sono stati registrati con successo.";
$lang['button_add_field']                            = "Aggiungi un nuovo campo personalizzato";
$lang['ID']                                                = "ID"; // Generic SHORT identifier for "Identification" (whether numeric or alpha-numeric)
$lang['generate_id_error']                            = "Errore nella generazione di ID. prego prova ancora.";

// =========================
// ADDITIONAL TRANSLATIONS 19
// =========================
// Custom Modifications for BlackHawk

// =========================
// ADDITIONAL TRANSLATIONS 20
// =========================
$lang['label_Searchable']							= "&nbsp;È&nbsp;un&nbsp;ID&nbsp;";  // Description of a field choice that asks the user if the values stored in this field can be used to pull up customers in campaigns where a customer is not registered.
$lang['orig_amount']									= "Orig. Valore";
$lang['DB_Timestamp']								= "DB Timestamp";

$lang['depreciation_expired']						= "Scaduto";
$lang['depreciation_short']						= "Exp'd";
// The header of a NARROW column that shows the percentage of the points that has expired or depreciated.
$lang['preferences_depreciation_header']		= "Deprezzamento";
$lang['preferences_depreciation_none']			= "Nessun Deprezzamento Definito.";
$lang['edit_depreciation_add']					= "Aggiungi un Deprezzamento";
$lang['edit_depreciation_add_another']			= "Aggiungi un altro Deprezzamento";
$lang['edit_depreciation_type_prompt']			= "Tipo di Deprezzamento:";
$lang['edit_depreciation_type_T']				= "Per transazione, basato sulla data di ogni transazione";
$lang['edit_depreciation_type_L']				= "Del Bilancio, basato sulla data dell'ultima transazione";
$lang['edit_depreciation_longevity']			= "Gli Importi saranno deprezzati dopo: ";
$lang['edit_depreciation_percentage']			= "del:";
$lang['depreciation_interval_too_small']		= "Il valore inserito deve essere almeno 1";
$lang['depreciation_percentage_too_small']	= "Il valor inserito deve essere maggiore di 0";
$lang['api_error_depreciation_exists']			= "Un Deprezzamento per l'intervallo di tempo considerate gia' esiste.";
$lang['report_expiration']							= "Data Scadenza";
$lang['report_depreciation']						= "Deprezzamento";
$lang['preferences_recurring_fee_header']		= "Pagamento Ricorrente";
$lang['edit_recurring_fee_interval']			= "Ogni";
$lang['edit_recurring_fee_amount']				= "sottrai";
$lang['edit_recurring_fee_description']		= "per il motivo seguente:";
$lang['edit_recurring_fee_add']					= "Aggiungi un Pagamento Ricorrente";
$lang['edit_recurring_fee_add_another']		= "Aggiungi un altro pagamento ricorrente";
$lang['preferences_recurring_fee_none']		= "Nessun Pagamento Ricorrente Definito.";
$lang['recurring_fee_too_small']					= "Il valor insert dave essere maggiore di 0";


// =========================
// ADDITIONAL TRANSLATIONS 21
// =========================
$lang['transactions_not_visible']            = "Nessuna transazione visibile."; // No visible transactions.
$lang['section_account_copy']                = 'Impostazioni della copia?'; // Copy Settings?
$lang['section_account_copy_sub']            = 'Selezionare un altro account per copiarne le impostazioni. Se non richiesto, lasciare vuota la selezione.'; // Select another account to copy the settings from. If none, leave the selection blank.
$lang['account_to_copy_from_label']          = 'Copiare le impostazioni da:'; // Copy settings from:
$lang['error_copy_from_missing_agency']      = "Manca il token dell'agenzia"; // The agency token is missing
$lang['error_copy_from_wrong_account']       = "L'account non appartiene all'agenzia"; // The account does not belong to the agency



// END OF FILE
?>
