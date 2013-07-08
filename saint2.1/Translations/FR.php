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

Sometimes, another word or phrase is inserted in the middle of the text to translate, indicated
by the follwing sample pattern, including the two dots in front and in back:
.$lang['currency'].
When translating, place this pattern back in the right place in relation to the new phrase, and
make sure to add the quotes (") at the begining and end of each segment joined by the pattern. Ex:
	"The ".$lang['currency']." amount entered is not valid."
in French would be:
	"Le montant de ".$lang['currency']." entré n'est pas valide."

For more detail or to do it manually, see:
	http://tlt.its.psu.edu/suggestions/international/web/codehtml.html

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
	$lang['currency']						= "Dollar";
}
if (!isset($lang['currency_plural'])) {
	$lang['currency_plural']				= "Dollars";
}
if (!isset($lang['currency_symbol'])) {
	$lang['currency_symbol']				= "$";
}
if (!isset($lang['currency_100th'])) {
	$lang['currency_100th']					= "Centime";
}
if (!isset($lang['currency_100th_plural'])) {
	$lang['currency_100th_plural']			= "Centimes";
}
if (!isset($lang['currency_100th_symbol'])) {
	$lang['currency_100th_symbol']			= "¢";
}








// Single words and labels
// (Pay attention to capitalization)
$lang['col_1']							= "1";  		// Header for column 1 of reports and bookmarks sections
$lang['col_2']							= "2";  		// Header for column 2 of reports and bookmarks sections
$lang['col_3']							= "3";  		// Header for column 3 of reports and bookmarks sections
$lang['Account']						= "Compte";  	// Noun: As in "a collection of transactions". Ex: "Click here to view this customer's account."
$lang['Activate']						= "Activer";  	// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "Activation";	// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "Activité"; 	// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "Ajoutés"; // Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']				= "+";			// The mathematical symbol for addition
$lang['All']							= "Tous";  	// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "Montant";  	// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "et";  		// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']					= "Autorisation"; // Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "à Disposition";  // As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "Solde"; 	// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['Balances']						= "Soldes";	// Plural
$lang['By']								= "Par"; 		// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "Campagne";	// As in a marketing campaign, but in this case, really meaning a "program" as in "Loyalty Program",
														// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "Campagnes";	// Plural
$lang['Country']						= "Pays";		// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "Clients";		// As in people who purchase goods or services from the a business that uses the StickyStreet service.
$lang['Date']							= "Date";		// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "Jours";		// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "Démo";		// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']					= "Description"; // Ex: "Provide a description of the transaction in this box:"
$lang['Employee']						= "Employé(e)";	// As in a person that works for a business or organization.
$lang['Earned']							= "Gagné";		// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "Erreur";		// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "événement";		// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a reward.
$lang['events']							= "événements";
$lang['Event']							= "Evénement";
$lang['Events']							= "Evénements";
$lang['from']							= "de";			// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "Gratuit";	// As if "no need to pay" or "no charge". Ex: "StickyStreet is free when you have 10 or less customers.
$lang['Hello']							= "Salut";		// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "info";		// Short for "information".
$lang['Level']							= "Niveau";		// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "Dettes";		// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']			= "x";			// The mathematical symbol for multiplication
$lang['Need']							= "Nécessaire(s)";		// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "Aucun/e";			// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "Aucun/e";		// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "Remarque";		// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "Remarques";		// Plural of "Note", above
$lang['Online']							= "En Ligne";		// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "Opération";  // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['or']								= "ou";			// As in "either", between two alternatives. Ex: "this or that".
$lang['point']							= "point";		// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['Paid']							= "Payé";		// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['points']							= "points";
$lang['Point']							= "Point";
$lang['Points']							= "Points";
$lang['per']							= "par";		// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Purchased']						= "Acheté";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Ratio']							= "Rapport";		// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']					= "Enregistré Par"; // As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "Echangé Contre"; 	// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "Réf"; 		// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Report']							= "Rapport"; 	// As in "Relatory", or "Presentation".
$lang['Reward']							= "Récompense"; 	// As in a thing that can be claimed after certain conditions have been met. Ex: "The reward for having 1000 points is a free widget."
$lang['Rewards']						= "Récompenses"; 	// Plural
$lang['Role']							= "Rôle";		// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Thank-you']						= "Merci";	// As in "Thank-you for your business" - said by the Client to a Customer.
$lang['Tip']							= "Indice";		// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "à";			// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "Pour Recevoir"; 	// As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['To_Get_One_Of']					= "Pour En Recevoir Un/e"; 	// As in "to receive" or "to be given" a single quantity. Ex: "You need to buy 10 coffees to get one of [the same] free"
$lang['Trans_ID']						= "ID Trans."; 	// Short for "Transaction ID" - Referring to an internal StickyStreet number to reference a particular transaction.
$lang['Transaction']					= "Transaction"; // A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']					= "Transactions"; // Plural
$lang['User']							= "Utilisateur"; 		// As in an employee of the business or organization that can login to use the StickyStreet service.
$lang['Yes']							= "Oui";

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."-".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "Ajouter une Campagne";
$lang['title_add_product_service']		= "Ajouter un Produit/Service pour";
$lang['title_add_promotion']			= "Ajouter une Promotion";
$lang['title_add_reward']				= "Ajouter une Récompense pour";
$lang['title_add_user']					= "Ajouter un Utilisateur";
$lang['title_amnesia'] 					= "Oublié Identifiant ou Mot de Passe";
$lang['title_award_reddeem'] 			= "Récompense Echangée";
$lang['title_create_new_account']		= "Créer Nouveau Compte";
$lang['title_default']					= "Management de Cadeaux & Fidélité";
$lang['title_edit_account']				= "Rédactionner Informations du Compte";
$lang['title_edit_account_number']		= "Rédactionner Numéro du Compte";
$lang['title_edit_campaign']			= "Rédactionner Paramétres pour";
$lang['title_edit_product_service']		= "Rédactionner Produit/Service pour";
$lang['title_edit_promotion']			= "Rédactionner Promotion pour";
$lang['title_edit_reward']				= "Rédactionner Récompense pour";
$lang['title_edit_user']				= "Rédactionner Utilisateur";
$lang['title_find_add']					= "Retrouver ou Ajouter un Compte dans";
$lang['title_login'] 					= "Identifiant de l'Utilisateur";
$lang['title_more_r_and_e_banners'] 	= "Plus de Banniéres de Référence et de Récompense";
$lang['title_r_and_e_balance']			= "Vos Banniéres de Référence et de Récompense";
$lang['title_report_all_trans']			= "Rapport de Toutes Transactions";
$lang['title_report_freq_cust']			= "Rapport des Clients Fréquents";
$lang['title_report_miss_cust']			= "Rapport des Clients Absents";
$lang['title_report_new_cust']			= "Rapport des Nouveaux Clients";
$lang['title_report_redeem_trans']		= "Rapport des Transactions d'Echanges";
$lang['title_report_totals']			= "Rapport du Total";
$lang['title_search_result']			= "Résultat de la Recherche";
$lang['title_trans_del']				= "Transaction Supprimée";
$lang['title_trans_rec'] 				= "Transaction Enregistrée";
$lang['title_view_account']				= "Voir Numéro du Compte";

// Side Modules
// Module 1
$lang['side_news_header'] 				= "";
$lang['side_news_text']					= "";
// Support Module
$lang['side_support_links']				= "Liens de <span style=\"color:#79B216;\">Support</span>";
$lang['side_support_desk_describe']		= "Voyez nos questions et réponses dans notre base de connaissance et faites des demandes de support";
// $lang['side_blog_describe']				= "For announcements, tips, and a point of view, visit our"; // ... blog
// $lang['side_support_email_call']		= "Email a support request directly or call:";
// $lang['side_support_phone']				= "<span style=\"font-weight: bold;\">866-780-STICKY</span> <span style=\"color: #888; font-size: 80%;\">(7842)</span>";
// $lang['side_loyalty_link_desc']			= "Bring them back to your site with Online Enrollment and Balance Lookup";
// $lang['side_points_calc_desc']			= "A tool to help you figure out your reward levels";


// Destinations / Section names
$lang['section_account_control_panel']	= "Panneau de Commande du Compte";
$lang['section_account_info_header']	= "Information du Compte";
$lang['section_account_login']			= "Identifiant du Compte";
$lang['section_account_new']				= "Créer un Compte";
$lang['section_blog']						= "Blog";
$lang['section_campaign_reports']		= "Rapports de Campagnes";
$lang['section_customer_account']		= "Compte du Client";
$lang['section_loyalty_link_inst']		= "Instructions LoyaltyLink";
$lang['section_points_calculator']		= "Calculateur de Points";
$lang['section_points_promotions']		= "Promotions";
$lang['section_support_desk']				= "Support";

// Labels
$lang['label_account_id']					= "ID du Compte";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_unique_id']					= "ID Unique";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']				= "Propriétaire du Compte";			// The person who created a StickyStreet account.
$lang['label_additional_info']			= "Informations Supplémentaires";			// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info_user']		= "Informations Supplémentaires";
$lang['label_card']							= "Numéro de la Carte";					// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']							= "Ville";
$lang['label_date_range']					= "Etendue de Dates";				// Ex: January 2008 to December 2008
$lang['label_email']							= "Adresse Electronique";
$lang['label_email_short']					= "e-mail";
$lang['label_first_name']					= "Prénom";				// As in "given name". ie: not the one shared by their family.
$lang['label_last_name']					= "Nom de Famille";				// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_name']							= "Nom";					// The joining of first and last names.
$lang['label_organization']				= "Organisation";			// As in a business, church, school, club, etc.
$lang['label_owner_id']						= "ID du Propriétaire";				// A unique login name that identifies the user as the account owner.
$lang['label_password']						= "Mot de Passe";
$lang['label_password_new']				= "Nouveau Mot de Passe";
$lang['label_password_retype_short']	= "Répétez Mot de Passe";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "Répétez Nouveau Mot de Passe";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']							= "Numéro de Téléphone";
$lang['label_state']							= "Etat / Province";
$lang['label_user_id']						= "Nom d'Utilisateur";				// A unique login name that allows an employee of a StickyStreet client to access the program.
$lang['label_zip']							= "Code Postal";

// Navigation
$lang['nav_active']						= "Actif";			// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "Ajouter";			// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "Annuler";			// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']					= "Changer à:";		// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']					= "Désactiver";  	// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "Déduire";  		// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "Supprimer";			// Verb: As in "remove" or "erase". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']				= "Tout Désélectionner";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "Exécuté";			// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "Editionner";			// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "Trouver";			// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "TERMINER";			// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "Y Aller";				// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "Dissimuler";			// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']					= "Passer à:"; 		// As in changing screens, pages, or location.
$lang['nav_log_in']						= "Se Connecter";			// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "Se Déconnecter";			// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "Recherche";			// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "Suivant";			// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']					= "En Mode Veille";		// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "Imprimer";			// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']				= "Imprimer Résumé";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']				= "Réactiver";	// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "Enregistrer";			// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "Echanger";			// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "Eliminer";			// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "Retourner";			// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "Faire Apparaître";			// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']				= "Sauvegarder Modifications";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']					= "Tout Sélectionner";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "Etablir";			// Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "1er Pas";			// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "2éme Pas";
$lang['step3']							= "3éme Pas";
$lang['step4']							= "4éme Pas";

// Login Screen
$lang['login_amnesia_prompt']			= "Oublié ID d'Utilisateur ou mot de passe?";
$lang['login_amnesia_button']			= "Récupérer maintenant!";
$lang['login_email_missing']			= "Veuillez introduire l'adresse e-mail de votre compte, svp:";
$lang['login_fancy_1']					= "compte";
$lang['login_fancy_2']					= "identifiant";
$lang['login_new_account_prompt']		= "Vous n'avez pas de compte?";
$lang['login_new_account_button']		= "Régistrez-vous maintenant!";
$lang['login_password_missing']			= "Veuillez introduire le mot de passe";
$lang['login_userid_missing']			= "Veuillez introduire votre ID d'Utilisateur";
$lang['login_wrong_password']			= "Le mot de passe que vous avez introduit ne correspond pas à celui qui est enregistré.";
$lang['login_wrong_user_id']			= "L'ID d'Utilisateur que vous avez introduit n'a pas été trouvé.<br>(L'ID d'Utilisateur est sensible à la casse.)";

// Forgot Password / Username section;
$lang['amnesia_header']					= "Léger Cas d'Amnésie?";
$lang['amnesia_note_top']				= "Une annotation au sujet des filtres spam:";
$lang['amnesia_note_text']				= "Si vous ne recevez pas d' e-mail de notre part dans les minutes a venir, veuillez consulter votre filtre spam.
											L'e-mail proviendra de"; /* StickyStreet or the name of the Agency. */
$lang['amnesia_password_button']		= "Envoyez-moi mon mot de passe.";
$lang['amnesia_password_dir']			= "Introduisez votre ID d'Utilisateur ci-dessous et nous vous enverrons un e-mail avec votre mot de passe à l'adresse de courriel que vous avez régistrée auprés de nous.";
$lang['amnesia_password_header']		= "Oublié Votre Mot de Passe?";
$lang['amnesia_password_sent']			= "Parfait!<br><br>Votre mot de passe a été envoyé à<br>l'adresse de courriel que nous avons en mémoire<br>pour ce compte.";
$lang['amnesia_return_button']			= "Retourner à l'Ecran de Connection";
$lang['amnesia_sub_header']				= "Pas de soucis, nous savons vous aider... vous vous souvenez de votre nom, n'est-ce pas?";
$lang['amnesia_user_id_button']			= "Envoyez-moi mon ID d'Utilisateur";
$lang['amnesia_user_id_dir']			= "Introduisez votre adresse de courriel ci-dessous et nous vous enverrons tous les ID d'Utilisateur qui y sont associés:";
$lang['amnesia_user_id_header']			= "Oublié votre ID d'Utilisateur?";
$lang['amnesia_userid_sent']			= "Excellent!<br><br>Votre ID d'Utilisateur a été envoyé à<br>l'adresse de courriel que vous nous avez fourni.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "ou moins de comptes de clients"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "Vous devez introduire le nom de votre Organisation."; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "Vous devez introduire une adresse de courriel.";
$lang['account_email_needed_2']			= "Ceci est la façon de laquelle nous vous signifions les changements de votre compte et de votre niveau de facturation.";
$lang['account_enter_first']			= "Veuillez introduire votre prénom";
$lang['account_enter_last']				= "Veuillez introduire votre nom de famille.";
$lang['account_id_empty']				= "Vous devez choisir et introduire un ID de Compte.";
$lang['account_id_exists']				= "Cet ID de Compte a déjà été pris.<br>Veuillez en choisir un autre, svp.";
$lang['account_id_not_valid']			= "Un ID de Compte ne peut seulement contenir des lettres, des chiffres ou des tirets bas (_)";
$lang['account_terms_agree']			= "Vous devez accepter les Termes et Conditions en cochant la case ci-dessus.";
$lang['account_new_create_button']		= "Créer Compte";
$lang['account_new_directions']			= "Pour commencer, simplement créez un compte en remplissant le formulaire ci-dessous:";
$lang['account_new_end']				= "C'est tout!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "Racontez-nous un peu plus de vous";
$lang['account_new_owner_id']			= "Choisissez un ID de Propriétaire";
$lang['account_new_owner_restrict']		= "Maximum 20 caractéres, pas d'espaces";
$lang['account_new_owner_user_id']		= "Choisissez un ID d'Utilisateur";
$lang['account_new_password']			= "Choisissez und mot de passe pour votre compte.";
$lang['account_new_password_restrict']	= "5 à 20 charactéres, seulement lettres et chiffres";
$lang['account_new_phone_dir']			= "Commencez avec '+' si vous vous trouvez au dehors des Etats-Unis.";
$lang['account_new_step1_greet']		= "Félicitations, vous avez créé un nouveau compte.";
$lang['account_new_step1_dir']			= "Nous allons vous guider à travers les quatre pas suivants:";
$lang['account_new_step1_1']			= "La création d'une campagne de fidélité ou d'un programme de cartes-cadeau.";
$lang['account_new_step1_2']			= "L'adapter à vos besoins.";
$lang['account_new_step1_3']			= "Introduire une transaction d'un client.";
$lang['account_new_step1_4']			= "Retourner au tableau de contrôle du compte.";
$lang['account_referred']				= "Si c'est le cas, qui est-ce qui vous a recommandé?";
$lang['account_referred_dir']			= "Nom, organisation, ou code de référence.";
$lang['account_referrer_record']		= /* The referred business */ "s'est inscrit pour un compte gratuit.";
$lang['account_terms_conditions_dir']	= "Veuillez lire et cocher la case pour accepter les"; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "Termes et Conditions d'Utilisation";
$lang['account_terms_conditions_agree']	= "J'accepte les Termes et Conditions";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "Informations de l'Entreprise";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= "Adresse:";
$lang['account_label_billing_level']	= "Niveau de Facturation:";
$lang['account_label_biz_name']			= "Nom de l'Entreprise:";
$lang['account_label_biz_address1']		= "Adresse, Ligne 1:";
$lang['account_label_biz_address2']		= "Adresse, Ligne 2:";
$lang['account_label_custom_fee']		= "Taxe Mensuelle Personelle";
$lang['account_label_customers']		= "Clients";
$lang['account_label_customers_manage']	= "Gérer Données des Clients";
$lang['account_label_free']				= "Gratuit"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "Propriétaire du Compte";
$lang['account_label_owner_contact']	= "Coordonnées du Propriétaire:";
$lang['account_label_pay_invoices']		= "Voir / Payer Factures";
$lang['account_label_per_month']		= "/ mois";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "Identifiant du Propriétaire";
$lang['account_password_missing']		= "Erreur de mot de passe: Veuillez introduir le nouveau mot de passe dans les deux cases.";
$lang['account_passwords_mismatch']		= "Le nouveau mot de passe que vous avez introduit n'est pas équivalent.<br>Veuillez le réintroduir dans les deux cases.";
$lang['account_owner_sec_token']		= "Jeton de Sécurite pour l'access API";

// Control Panel
$lang['cp_step_dir_header']				= "Terminé!";
$lang['cp_step_dir']					= "Ceci est l'écran du \"Panneau de Contrôle\", ou vous initiez aprés vous être connecté.<br>D'ici vous pouvez gérer tous les aspects de votre compte";
$lang['cp_campaigns_table_header_1']	= "Nom de la Campagne";
$lang['cp_campaigns_table_header_2a']	= "Clients de";	// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']	= "la Campagne";	// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']	= "Transactions de";		// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']	= "la Campagne";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']	= "Statut de";	// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']	= "la Campagne";		// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']	= "Préférences de";		// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']	= "la Campagne";	// This is the bottom line of the english phrase "Campaign Preferences"

// Create / Edit User
$lang['user_campaigns_header']			= "Veuillez choisir auquelles campagnes cet utilisateur aura accés:";
$lang['user_campaigns_admins']			= "Les administrateurs ont automatiquement accés à toutes les campagnes";
$lang['user_edit_header']					= "Rédactionner Utilisateur:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "Changer le mot de passe";
$lang['user_edit_password2_label']		= "Veuillez réintroduire le mot de passe";
$lang['user_edit_password_note']			= "Afin de garder le même mot de passe, laissez les cases vides.";
$lang['user_edit_record_change_card']	= /* The Card # */ "a été remplacé par:"; /* a new Card # */
$lang['user_edit_record_change_name']	= "Changement du nom";
$lang['user_edit_record_del_card']		= /* The Card # */ "a été supprimé";
$lang['user_edit_record_new_card']		= "Un nouveau # de carte a été attribué:";
$lang['user_edit_record_change_phone']	= "Changer # de téléphone à";
$lang['user_edit_record_replace_phone']= "Changer # de téléphone de";
$lang['user_edit_record_to_none']		= "aucun"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']	= "Changer e-mail à";
$lang['user_edit_record_replace_email']= "Changer e-mail de";
$lang['user_edit_record_change_addtl']	= "Informations Supplémentaires changées à";
$lang['user_edit_record_del_addtl']		= "Informations Supplémentaires effacées. Précédemment";
$lang['user_edit_record_replace_addtl']= "Informations Supplémentaires changées de";
$lang['user_info_sub_header']				= "Informations de l'Utilisateur";
$lang['user_new_header']					= "Nouvel Utilisateur";
$lang['user_new_id_empty']					= "Un ID d'Utilisateur est nécessaire pour créer und nouvel utilisateur.";
$lang['user_new_id_not_valid']			= "Un ID d'Utilisateur ne peut seulement contenir des lettres, des chiffres, ou un tiret bas (_)";
$lang['user_new_id_exists']				= "L'ID d'Utilisateur que vous avez choisi existe déjà.<br>Veuillez en choisir un autre, svp.";
$lang['user_new_no_role']					= "Vous devez choisir un rôle pour cet utilisateur:";
$lang['user_new_password_label']			= "Choisissez un mot de passe pour cet utilisateur";
$lang['user_new_record_button']			= "Enregistrer Nouvel Utilisateur";
$lang['user_new_user_id_label']			= "Choisissez un ID d'Utilisateur à se connecter avec";
$lang['user_restrict_20_char']			= "maximum 20 caractéres";
$lang['user_role_header']					= "Rôle de l'Utilisateur";
$lang['user_role_directions']				= "Veuillez choisir un rôle pour cet utilisateur";

// Users: Common actions:
$lang['user_add_button']				= "Ajouter Nouvel Utilisateur";
$lang['user_delete_popup']				= "<strong>Cet utilisateur sera supprimé de votre liste d'Utilisateurs Autorisés et sera archivé.</strong><br>
											Cet ID d'Utilisateur ne peut pas être réutilisé comme ID d'Utilisateur d'un nouvel utilisateur.<br>
											<br>
											Contactez-nous pour rétablir un utilisateur archivé. Ce service est gratuit.<br>
											<br>
											<strong>Etes-vous sûr de vouloir supprimer cet utilisateur?</strong>";
$lang['user_delete_popup_pc']			= "Cet utilisateur sera supprimé de votre liste d'Utilisateurs Autorisés et sera archivé.\n\n
											Cet ID d'Utilisateur ne peut pas être réutilisé comme ID d'Utilisateur d'un nouvel utilisateur.\n\n
											Contactez-nous pour rétablir un utilisateur archivé. Ce service est gratuit.\n\n
											Etes-vous sûr de vouloir supprimer cet utilisateur?";
$lang['user_header']					= "Rédactionnez les Utilisateurs Autorisés et leurs droits";
$lang['user_list_none']					= "Encore aucun utilisateur supplémentaire ajouté.";
$lang['user_role_A']					= "Administrateur";
$lang['user_role_A_desc']				= "A accés à tout.";
$lang['user_role_C']					= "Comptable";
$lang['user_role_C_desc']				= "Peut créer des rapports, voir l'information de facturation du compte et les paramétres de campagnes, mais ne peut pas voir les informations des utilisateurs et des clients.";
$lang['user_role_K']					= "Employé";
$lang['user_role_K_desc']				= "Peut créer et rédactionner les informations du client (mais ne peut pas changer le # de la carte, si tel a été attribué) dans les campagnes autorisées et seulement enregistrer & échanger des visites de clients (mais pas en effacer.)";
$lang['user_role_M']					= "Manager";
$lang['user_role_M_desc']				= "A accés à tout dans les campagnes autorisées et accés limité aux paramétres du compte entier (Ne peut pas voir les informations de facturation, sait créer des rapports, et peut ajouter et rédactionner, mais pas effacer des utilisateurs du compte.)";
$lang['user_role_N']					= "Manager de Campagne";
$lang['user_role_N_desc']				= "A accés à tout dans les campagnes autorisées et accés limité aux paramétres du compte entier (Peut créer des rapports, ne peut pas voir les informations de facturation, ne peut pas rédactionner les utilisateurs, ne peut pas créer ou effacer des campagnes.)";
$lang['user_role_O']					= "Observateur";
$lang['user_role_O_desc']				= "Peut voir les informations d'utilisateur et de client et certains paramétres de campagnes (prix et promotions.)";
$lang['user_role_P']					= "Temporaire";
$lang['user_role_P_desc']				= "Peut seulement créer des nouveaux clients dans les campagnes autorisées, et seulement régistrer des visites de clients.";
$lang['user_role_S']					= "Manager Associé";
$lang['user_role_S_desc']				= "Peut gérer les prix et promotions dans les campagnes autorisées et gérer tous aspects d'informations de clients et de visites.";

// Create New Campaign
$lang['campaign_new_create_button']		= "Créer Campagne";
$lang['campaign_new_created_header']	= "Nouvelle Campagne Créée";
$lang['campaign_new_created_msg']		= "<b>Félicitations.</b><br>
											<br>
											Vous avez créé une nouvelle campagne.<br>
											<br>
											Ensuite, vous devriez adapter les paramétres pour cette campagne<br>
											selon vos besoins d'affaires:";
$lang['campaign_new_created_prefs']		= "Y Aller";
$lang['campaign_new_created_back_cp']	= "Retourner au Panneau de Contrôle du Compte";
$lang['campaign_new_empty']				= "Il vous faut absolument introduire un Nom de Campagne:";
$lang['campaign_new_exists']			= "L'ID de Campagne que vous avez introduit existe déjà.<br>Veuillez choisir un autre ID de Campagne";
$lang['campaign_new_header']			= "Nouvelle Campagne";
$lang['campaign_new_name']				= "Veuillez choisir un Nom de Campagne maintenant:";
$lang['campaign_new_name_restrict']		= "(maximum 30 caractéres, éspaces inclus)";
$lang['campaign_new_step_dir']			= "Créez votre premiére campagne:";
$lang['campaign_new_sub_header']		= "D'abord, Choisissez un Type de Campagne:";
$lang['campaign_new_type_empty']		= "Il vous faut absolument choisir un Type de Campagne:";
$lang['campaign_new_buyx_desc']			= "Comme la carte perforée en papier qu'elle remplace, seulement plus fléxible, ce style de campagne vous permet de récompenser vos clients à base du nombre de fois qu'ils achétent <b>quelconque nombre de différents</b> porduits, gamme de produit, ou services.<br>
											<br>
											Excellent pour des cafés et tous magasins qui a une gamme de produits limitée. (Comme: achetez 10 cafés ordinaires
											et recevez le suivant gratuitement, achetez 3 tasses et recevez la suivante gratuitement, etc. Definez autant de ces promotions Achetez 'X' et Recevez Un Gratuitement que vous désirez.)
											On retrouve souvent ce type de campagne en forme de cartes en papier avec un certain nombre de cases à être perforées
											avant de recevoir un objet ou un service gratuit. Ce type de campagne vous permet de faire la même chose, mais sans
											la nécessité d'imprimer des cartes (et de s'occuper des cartes perdues, etc.) Un autre avantage immense est que vous
											saurez combien de clients sont dans le programme et vous pouvez faire des rapports de marketing à leur sujet.</br>
											<br>
											<b>Vous pouvez attribuer un numéro spécifique à chaque objet ou catégorie d'objet jusqu'à ce que le client en
											reçoive un gratuit. Par exemple:</b><br>
											<li>10 coupes de cheveux jusqu'à la prochaine gratuite. </li>
											<li>8 kilos de nourriture pour animaux et le suivant est gratuit. </li>
											<li>8 patisseries et la neuviéme vous sera offerte. </li>
											<br>
											Vous pouvez aussi attribuer un nombre standard <i>X jusqu'à ce que le prochain soit gratuit</i> afin de faciliter d'établir un nombre
											d'objets qui sont tous récompensés au même niveau.";
$lang['campaign_new_earn_event_desc']	= "Un mélange entre la carte-cadeau et une campagne à base d'un événement: Récompensez quelqu'un en lui donnant du crédit monétaire
											(ou de l'argent réel) pour chaque 'événement' (visite du magasin, référence, etc.), à être échangé plus tard pour des produits ou des
											services dans votre établissement.<br>
											<br>
											<b>Ce type de programme de fidélité vous permet de:</b><br>
											<li>Evaluer combien de ".$lang['currency_plural']." ont été gagnés par visite ou action.</li>
											<li>Retirer un montant quelconque du solde du compte, comme une carte-cadeau</li>
											<br>
											<b>Quelques examples</b>:
											<li>Campagne de référence: Récompensez des clients, concierges d'hôtel, récéptionnistes das des grandes entreprises pour envoyer des clients chez votre société.</li>
											<li>Payer un employé ou contracteur pour des traveaux répétitifs.</li>
											<li>Récompensez des clients VIP avec de l'argent interne 'monopoly' pour l'investir dans votre société.</li>
											<li>Offrez aux enfants des prix du genre 'pour l'aide dans le ménage'.</li>";
$lang['campaign_new_event-based_desc']	= "Vous permet de définir des récompences à base du nombre d'interactions du client avec
											votre entreprise, plutôt qu'à base de l'argent dépensé.<br>
											<br>
											C'est souvent employé dans des campganes de référence de clients: Une entreprise donnera quelques cartes, toutes marquées avec
											le même numéro à un de ses clients, à un concierge dans un hôtel, ou à un récéptionniste dans une grande entreprise.
											Si une de leurs références vient chez votre entreprise et vous fait passer une de ces cartes, votre <i>évangéliste</i>
											se fera ajouter und 'visite' au solde de leur compte. Aprés, par exemple, 5 'visites' ils reçoivent un
											service gratuit ou un gadget. Vous recevez de nouveaux clients. Tout le monde gagne.<br>
											<br>
											C'est seulement un scénario. Les gens ont trouvé des méthodes bien créatives à faire usage de ce programme.<br>
											<br>
											Un programme à base d'événements vous permet de:<br>
											<b>Attribuer des niveaus de récompense. Par exemple:</b><br>
											<li>accumulez 5 visites et profitez d'un rabais de 10%</li>
											<li>accumulez 10 visites et profitez d'un rabais de 50%</li>
											<li>accumulez 20 références et profitez d'un massage gratuit</li>
											<br>
											<b>Quelques exemples:</b><br>
											<li>Campagnes de référence du mode décrit ci-dessus. </li>
											<li>Un centre de sport qui garde à l'œil la forme du client. </li>
											<li>Nombre de réparation jusqu'à ce qu'un produit doit être remplacé. </li>
											<li>Niveau Club VIP. </li>";
$lang['campaign_new_gift_card_desc']	= "Une campagne de cartes-cadeaux vous permet d'ajouter de l'argent à un compte d'un client, et de le déduir pour faire un paiement.<br>
											<br>
											Simple et direct. C'est normalement utilisé en combination acec des cartes-cadeaux, la carte, étant chargée d'un
											certain montant cash, est distribuée en forme de cadeau, ou utilisée en forme de carte de débit à payement d'avance.<br>
											<br>
											<b>Des cartes en plastic ne sont pas nécessaires</b>, et ça peut être usé à tout temps, il vous faut seulement garder à l'œil
											des comptes à multiples <i>values mémorisées</i>, comme barres d'onglets, plan de paiement par tranches, droits des enfants... les variantes
											sont seulement limitées par votre fantaisie.";
$lang['campaign_new_points_desc']		= "Vos clients accumulent des points à base de leurs achats, paiements, ou promotions que vous définissez.
											Les Point peuvent être échangés à base de niveaux de récompense individuels.<br>
											<br>
											Un programme de points, comme les miles des compagnies aériennes, vous permet de:<br>
											<br>
											<b>Distribuez un certain nombre de points par ".$lang['currency_plural']." dépensé. Par exemple:</b><br>
											<li>5 points par ".$lang['currency']."</li>
											<li>.25 points par ".$lang['currency']."</li>
											<br>
											<b>Définissez des nieveaux de récompense, par exemple:</b><br>
											<li>1000 points: 50% de rabait pour un achat</li>
											<li>5000 points: Gadget gratuit</li>
											<li>100,000 points: Voyage à Disneyland.</li>
											<br>
											<b>Définissez des promotions, par exemple:</b><br>
											<li>Double-points le mardi.</li>
											<li>500 poins supplémentaires pour und réservation d'avance.</li>
											<li>25% de bonus par achat d'und Carte-Cadeau.</li>
											<br>
											Facultativement, vous pouvez définir un Rapport Dépense-Prix qui vous permet d'échanger des points en utilisant une value monétaire.";
$lang['campaign_new_name_desc']			= "Si vous créez votre premiére campagne, donnez lui un nom qui commence par 'Test' tant que vous essayez vos affaires --
											Vous pourrez créer autant de campagnes que vous désirez, et en arrêter out suppimer à l'aise.<br>
											<br>
											Généralement, c'est une bonne idée d'utiliser le nom de votre organisation, celui-là étant assez cour, ou un jeu de mots a base du nom. Quelques exemples de noms:<br>
											<li><b>Prix ACME</b></li>
											<li><b>Club Rouge</b> (Pour un salon appelé 'Rouge')</li>
											<li><b>Torrémotard</b> (Pour un café qui fait la cuisine pour des motards)</li>
											<li><b>Party Points</b> (Pour un traiteur)</li>";
// Campaigns: Common actions:
$lang['campaign_add_new']				= "Ajouter une Campagne";
$lang['campaign_delete_popup']			= "<strong>Cette campagne sera supprimée et archivée.</strong><br>
											Ce nom de campagne ne peut pas être réutilisé pour une nouvelle campagne.<br>
											<br>
											Contactez-nous pour rétablir une campagne archivée. Ce service est gratuit.<br>
											<br>
											<strong>Etes-vous sûr de vouloir supprimer cette campagne?</strong>";
$lang['campaign_delete_popup_pc']		= "Cette campagne sera supprimée et archivée.\n\n
											Ce nom de campagne ne peut pas être réutilisé pour une nouvelle campagne.\n\n
											Contactez-nous pour rétablir une campagne archivée. Ce service est gratuit.\n\n
											Etes-vous sûr de vouloir supprimer cette campagne?";
$lang['campaign_hide_on_hold']			= "Dissimuler Campagnes en Attente.";
$lang['campaign_none_yet']				= "Pour commencer, créez une campagne (Programme de Cadeaux ou de Fidélité)<br>
											en cliquant sur le bouton Ajouter une Nouvelle Campagne ci-dessous.";

$lang['campaign_type_buyx']				= "Programme Achetez X et Recevez-en 1 Gratuit";
$lang['campaign_type_earn_per_event']	= "Programme Gagnez de l'Argent par Evénement";
$lang['campaign_type_event-based']		= "Programme à Base d'Evénements";
$lang['campaign_type_gift_cards']		= "Programme Cartes-Cadeaux";
$lang['campaign_type_points']			= "Programme de Points";
$lang['campaign_view_on_hold']			= "Voir Programmes en Attente";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']				= "Ajouter Niveau de Récompense";
$lang['edit_reward_add_another']		= "Ajouter un autre Niveau de Récompense";
$lang['edit_reward_desc_empty']			= "Vous devez décrire le niveau de récompense.";
$lang['edit_reward_level_header']		= "Rédactionner Niveau de Récompense";
$lang['edit_reward_header']				= "Niveaux de Récompense";
$lang['edit_reward_none']				= "Aucune Récompense Définie pour le Moment";
$lang['edit_reward_table_header']		= "Déscription de la Récompense";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "Ce rapport peut être changé à tout moment, les ".$lang['points']." des clients éxistents déjà accumulés ne changeront pas.";
$lang['edit_points_desc']				= "Ceci est un simple numéro arbitraire et peut être choisi à votre aise. Par exemple:";
$lang['edit_points_desc_header']		= $lang['Points']." gagné par ".$lang['currency']." dépensé.";
$lang['edit_points_empty']				= "Vous devez introduire un nombre de ".$lang['points']." exigés pour la récompense.";
$lang['edit_points_examples_header']	= "Quelques exemples de récompenses à base de prix:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "20% de Rabais";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "Simple Manicure Complementaire";
$lang['edit_points_ex_3_amount']		= "750";
$lang['edit_points_ex_3_desc']			= "Nuit supplémentaire gratuite";
$lang['edit_points_ex_4_amount']		= "1000";
$lang['edit_points_ex_4_desc']			= "Un Shampooing Gratuit";
$lang['edit_points_ex_5_amount']		= "20";
$lang['edit_points_ex_5_desc']			= "Paquet de 10 kilos de nourriture à chat gratuit";
$lang['edit_points_ex_6_amount']		= "15,000";
$lang['edit_points_ex_6_desc']			= "Niveau Club VIP";
$lang['edit_points_ex_7_amount']		= "160";
$lang['edit_points_ex_7_desc']			= "Place Assise Prioritaire";
$lang['edit_points_ex_8_amount']		= "100,000";
$lang['edit_points_ex_8_desc']			= "Voyage supplémentaire à Disneyland";
$lang['edit_points_not_valid']			= "Le nombre de ".$lang['points']." doit être un numéro.";
$lang['edit_points_profit_ratio_error']	= "Vous devez introduire une valeur positive supérieure à zéro. Laissez vide pour desactiver.";
$lang['edit_points_step_dir']			= "Mettez les préférences pour votre campagne de ".$lang['Points'].".";
$lang['edit_points_table_header']		= "Description de la récompense gagnée quand<br>le montant de ".$lang['points']." spécifié est atteint.";
$lang['edit_points_too_small']			= "Vous devez introduire une valeur égale ou supérieure à 1 ".$lang['point'].".";

$lang['edit_promo_table_header']		= "Description de la Promotion";
$lang['edit_promo_none']				= "Aucune Promotion Définie en cet Instant";
$lang['edit_promo_add']					= "Ajouter une Promotion";
$lang['edit_promo_add_another']			= "Ajouter une autre Promotion";
$lang['edit_promo_desc']				= "Les promotions influencent la façon de laquelle on peut gagner des ".$lang['points'].". Vos promotions peuvent ajouter ou substraire un certain nombre de ".$lang['points'].", ou multiplier par un certain nombre, si une transaction est enregistrée. Voir exemples ci-dessous:";
$lang['edit_promo_edit_header']			= "Rédactionner la Promotion";
$lang['edit_promo_edit_error_header']	= "Vous devez introduire un nombre par lequel il les ".$lang['points']." gagnés seront multipliés.<br>Par exemple:";
$lang['edit_promo_edit_error_add']		= "Vous devez introduire un nombre de ".$lang['points']." à ajouter à ceux qui ont été gagnés. Par exemple, \"500\" ajoutera 500 points au montant de ".$lang['points']." gagnés. \"-100\" déduira 100 ".$lang['points']." de ceux qui ont été gagnés (jusqu'à 0, mais pas plus.)";
$lang['edit_promo_edit_error_multi']	= "Le nombre par lequel les ".$lang['points']." sont multipliés doit être un numéro.";
$lang['edit_promo_edit_error_not_valid']= "Le nombre de points à ajouter doit être un numéro.";
$lang['edit_promo_edit_ex_1']			= "2 multipliera les points gagnés par 2.";
$lang['edit_promo_edit_ex_2']			= ".5 les réduira de moitié.";
$lang['edit_promo_edit_ex_3']			= "1.1 ajoutera 10% de points supplémentaires.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "Ajoutez 500 ".$lang['points']." pour une référence";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']." bonus pour devenir un membre";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "déduisez 50 ".$lang['points']." pour être en retard";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "Niveau VIP: Doublez les ".$lang['points']." gagnés";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "pour 50% de ".$lang['points']." supplémentaires le mardi";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "Membre argenté: 25% de ".$lang['points']." supplémentaires";
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "pour 25% de ".$lang['points']." en moins";
$lang['edit_promo_name_empty']			= "Vous devez introduire un nom pour cette promotion";
$lang['edit_promo_note_1']				= /*(Addtion Operation)*/ "Les promotions pourront s'enregistrer elles-mêmes: choisissez simplement la promotion et cliquez sur "; /* ("record button") */
$lang['edit_promo_note_2']				= /*(Multiplication Operation)*/ "Les promotions ne pourront pas s'enregistrer elles-mêmes: Un montant d'achat sera nécessaire.";
$lang['edit_promo_table_header_1']		= "Multiplier<br>ou Ajouter";
$lang['edit_promo_table_header_2']		= "Par Combien";
$lang['edit_promo_table_header_3']		= "ID de la Promotion";

$lang['edit_str_header']				= "Optionnel: Possibilité d'Introduire des Montants de ".$lang['currency']." en Echange pour des Points";
$lang['edit_str_desc']					= "Le Rapport Dépenses-Récompenses est un de deux rapports desquels vous devez tenir compte pour définir la valeur en ".$lang['points']." de vos récompenses. Si vous l'introduisez ici, vous permetterez d'échanger des ".$lang['points']." en introduisant une valeur en ".$lang['currency']." à leur place:";
$lang['edit_str_ratio_header']			= "Possibilité d'introduirer un montant en ".$lang['currency']." <br>en echange de points:";
$lang['edit_str_ratio_on']				= "Activé";	// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']				= "Desactivé";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_ratio_sub_header']		= "Votre Rapport Dépenses-Récompenses:";
$lang['edit_str_ratio_not_set']			= "Pas Défini";
$lang['edit_str_example_header']		= "Par exemple:";
$lang['edit_str_example_1']				= "Votre client veut acheter quelque chose qui coute 100".$lang['currency_symbol']." et a accumulé 1000 ".$lang['points'].". Il demande si c'est possible de payer pour une partie de l'objet avec des ".$lang['points'];
$lang['edit_str_example_1_desc']		= "Donc en introduisant ce Rapport Dépenses-Récompenses ci-dessus, <b>le programme saura automatiquement calculer la valeur de ces ".$lang['points']."</b>. Vos caissiers n'auront pas besoin de mémoriser des tables de récompense compliquées, ou d'utiliser une calculatrice.";
$lang['edit_str_example_math_show']		= "Cliquez ici pour voir les formules mathématiques.";
$lang['edit_str_example_math_hide']		= "AÔe! Cacher ces mathématiques!";
$lang['edit_str_example_math']			= "Disons, que vous avez défini un Rapport ".$lang['ppd']."
											de 5 et un Rapport Dépense-Récompense de 20. Alors:<br>
											1000 ".$lang['points']." / 5 ".$lang['ppd']." / Rapport Dépense-Récompense de 20 = 10".$lang['currency_symbol']."<br>
											<br>
											Ou alors d'un autre point de vue: $10 x 5 ".$lang['ppd']." = 50 ".$lang['points'].", et avec
											un Rapport Dépense-Récompense de 20, vous aurez besoin de 20 x 50 ".$lang['points']." (1000 ".$lang['points'].") pour échanger 10".$lang['currency_symbol'].".";
$lang['edit_str_example_math_height']	= "90";	// This is the height, in pixels, of the section that the "math" is in.
												// If the translation of the section above requires more room, increase that number accordingly.
$lang['edit_str_note_1']				= "Pour desactiver la possibilité d'introduire des montants en ".$lang['currency']." en echange de ".$lang['points'].", effacez le Rapport Dépense-Récompense (laissez vide) et pressez sur"; /*(Set button)*/
$lang['edit_str_note_2']				= "Vous pouvez changer le Rapport Dépense-Récompense à tout instant, mais les niveaux de récompenses ne changeront pas automatiquement.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "Vous devez introduire un nombre d'événements nécessaires afin de recevoir la récompense.";
$lang['edit_visits_not_valid']			= "Le nombre d'événements doit être un numéro.";
$lang['edit_visits_step_dir']			= "Définissez quelques niveaux de récompenses pour votre campagne à Base d'Evénements:";
$lang['edit_visits_table_header']		= "Nombre<br>d'Evénements";
$lang['edit_visits_table_header_2']		= "Description de la récompense obtenue quand <br>le nombre d'événements est atteint.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "Vous devez introduire une valeur égale ou supérieure à 1".$lang['currency_100th_symbol']." (0.01)";
$lang['edit_dpv_heading']				= "Paramétres de la Récompense";
$lang['edit_dpv_label']					= $lang['currency_plural']." gagnés par événement:";
$lang['edit_dpv_label_ending']			= "par événement.";
$lang['edit_dpv_note_1']				= "Vous pouvez changer ce numéro à tout instant, mais les ".$lang['currency']." accumulés par les clients ne changeront pas.";
$lang['edit_dpv_step_dir']				= "Définissez le niveau de gain de votre campagne:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "Le nombre de services ou de produits doit être 1 au minimum<br>nous vous recommandons de choisir 10.";
$lang['edit_buyx_header']				= "Promotions Achetez X et Recevez Un Gratuitement";
$lang['edit_buyx_item_empty']			= "Vous devez introduire un nom ou une description du produit ou du service.";
$lang['edit_buyx_item_header']			= /* Add or Edit */ "un Produit ou un Service";
$lang['edit_buyx_item_table_header_1']	= "Service, Produit, ou Catégorie";
$lang['edit_buyx_item_table_header_2']	= "Combien Jusqu'au<br>Prochain Gratuit";
$lang['edit_buyx_none']					= "Aucun Service ou Produit Défini.";
$lang['edit_buyx_step_dir']				= "Définissez les niveaux de récompense de votre campagne:";
$lang['edit_buyx_table_header_1']		= "Produit, Service, ou Catégorie";
$lang['edit_buyx_table_header_2']		= "# Jusqu'à ce que le<br>Prochain soit Gratuit";
$lang['edit_buyx_add_another']			= "Ajouter un Autre Service ou Produit";
$lang['edit_buyx_add']					= "Ajouter un Service ou Produit";
$lang['edit_buyx_default_header']		= "Numéro de services ou produits par défaut jusqu'à ce que le prochain soit gratuit";
$lang['edit_buyx_default_label']		= "Par défaut pour nouveaux services / produits:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "Définissez les préférences de votre campagne et des niveaux de récompensation:";
$lang['edit_giftcard_no_settings']		= "Des campagnes de Cartes-Cadeaux n'ont pas de préférences ou niveaux de récompensation à rédactionner.<br>(Enfin, ça c'est facile!)";

// Common Customer Content
$lang['customer_account_activated']		= "Compte Activé";
$lang['customer_add_tab']				= "Ajouter un Client";
$lang['customer_lookup_tab']			= "Rechercher un Client";
$lang['customer_id_not_exist']			= "L'ID du Compte de Client n'existe pas.";
$lang['customer_id_missing']			= "Aucun ID de Compte de Client a été introduit.";
$lang['customer_tip_1']					= "Vous saviez que vous pouvez utiliser un lecteur de code-barres ou un lecteur de bande magnétique pour introduire le # de Carte d'un client?";
$lang['customer_tip_2']					= "Marquez cette page en utilisant le Générateur de Marque-Pages en bas de l'"; /* Account Control Panel screen */
$lang['customer_last_activity']			= "Derniére Activité";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "Erreur: Impossible de supprimer la carte.";
$lang['manage_cards_find_by_date']		= "Date de la Derniére Activité";
$lang['manage_cards_find_by_header']	= "ou visualiser une liste de TOUS les clients:";
$lang['manage_cards_find_directions']	= "Veuillez remplir une des cases ci-dessous:";
$lang['manage_cards_find_header']		= "Retrouver un client:";
$lang['manage_cards_find_none']			= "Aucun enregistrement ne correspond à votre recherche.";
$lang['manage_cards_find_note']			= "Ceci pourrait durer quelques minutes si vous avez plusieurs milliers de clients ou une connexion internet lente.";
$lang['manage_cards_header']			= "Gérer les Registres des Clients";
$lang['manage_cards_list_header']		= "Liste des Comptes des Clients";
$lang['manage_cards_not_exist']			= "Ce client n'existe pas.";
$lang['manage_cards_cust_deleted']		= "Ce client a été supprimé.";
$lang['manage_cards_popup_warning']		= "Ceci effacera les informations du client et TOUTE ACTIVITE DE TRANSACTION<br>
											dans toutes les campagnes associés à ce client.<br><br>
											Ainsi, <strong>toute activité passée de ce compte ne sera plus non plus reflétée dans les rapports</strong>.<br><br>
											Cette action EST IRREVERSIBLE!<br><br>
											Etes-vous sûr de vouloir supprimer ce client?";
$lang['manage_cards_popup_warning_pc']	= "Ceci effacera le les informations du client et TOUTE ACTIVITE DE TRANSACTION\n
											dans toutes les campagnes associés à ce client.\n\n
											Ainsi, toute activité passée de ce compte ne sera plus non plus reflétée dans les rapports\n\n
											Cette action EST IRREVERSIBLE!\n\n
											Etes-vous sûr de vouloir supprimer ce client?";

// Create New Customer Account
$lang['customer_new_card_desc']			= "Un # de Carte unique ou <i>un ID de Compte du Client</i> est nécessaire afin qu'ils puissent vérifier <br>leurs soldes sur votre site Web.";
$lang['customer_new_create_button']		= "Créer un Compte de Client";
$lang['customer_new_demo_phone']		= "(555)555-5555";
$lang['customer_new_demo_email']		= "demo@email.com";
$lang['customer_new_demo_addtl_info']	= "Quelconque information supplémentaire peut être introduite ici.";
$lang['customer_new_id_exists']			= "L'ID du Compte du client que vous avez introduit existe déjà.";
$lang['customer_new_id_match']			= "Le compte suivant correspond au"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "Ceci n'est pas un ID de Compte de Client valide.";
$lang['customer_new_exists']			= "L'information introduite correspond à un client existant.";
$lang['customer_new_header']			= "Créer un Nouveau Compte de Client";
$lang['customer_new_multiple_matches']	= "Ces comptes correspondent à certaines des informations que vous avez procurées:";
$lang['customer_new_other_campaigns']	= "Autres campagnes auquelles<br>le client doit être joint:";
$lang['customer_new_random_id']			= "Générer un Numéro Aléatoire";
$lang['customer_new_steps_header']		= "Créer un échantillon d'un compte de client:";
$lang['customer_new_steps_dir']			= "Un compte de client peut être défini par un identifiant unique, soit un numéro de téléphone, une adresse courriel,
											un code barre, ou un autre aspect du client étant unique. N'hésitez pas d'employer un compte de test
											comme '11111' pour l'instant; Vous pourrez le supprimer plus tard.";
$lang['customer_new_not_allowed']		= "Vous n'avez pas le droit de créer de nouveaux régistres de clients.";

// Lookup Customer Account
$lang['customer_activity_header']		= "Activité du Compte";
$lang['customer_activity_none']			= "Ce compte n'a aucune activité.";
$lang['customer_activity_print_short']	= "Derniére Transaction"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "Solde Actuel:";
$lang['customer_lookup_balances_none']	= "Pas de Solde";
$lang['customer_lookup_button']			= "Retrouver un Client";
$lang['customer_lookup_header']			= "Retrouver un Compte d'un Client";
$lang['customer_lookup_instructions']	= "Introduisez quelconque information d'un client:";
$lang['customer_lookup_multiple_match']	= "Les registres suivants correspondent à votre recherche";
$lang['customer_lookup_multiple_view']	= "Voir les Détails du Compte";
$lang['customer_lookup_no_match_add']	= "Aucun registre correspondant trouvé. Vous pouvez créer un nouveau compte ci-dessous";
$lang['customer_lookup_no_match']		= "Aucun client dans cette campagne ne correspond a votre recherche.";
$lang['customer_lookup_not_allowed']	= "Vous n'avez pas le droit de voir de registres de clients individuels.";
$lang['customer_lookup_steps_header']	= "Ajouter et échanger certaines transactions.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "Ajouter le Client à une autre Campagne:";
$lang['customer_edit_campaigns_note']	= "D'ajouter un client à d'autres campagnes vous permet de les rechercher dans le cadre de recherches partielles a base
											de quelconque information de leur compte. Autrement, vous pouvez seulement les rechercher par leur # de Carte ou leur ID de Compte, ou en utilisant
											le menu déroulant en haut à droite pour naviguer d'une campagne à l'autre dans le régistre du client.";
$lang['customer_edit_header']			= "Rédactionner les Informations du Compte";
$lang['customer_edit_random_number']	= "Générer un Numéro Alléatoire";
$lang['customer_edit_sub_header']		= "Toutes les cases sont facultatives.";
$lang['customer_edit_activity_header']	= "Activité d'Informations du Compte du Client";

// Record Customer Transactions
$lang['transaction_add_button']			= "Ajouter un Compte";
$lang['transaction_amount_not_valid']	= "ERREUR DE TRANSACTION:<br>Le montant en ".$lang['currency']." introduit n'est pas valide";
$lang['transaction_amount_too_samll']	= "ERREUR DE TRANSACTION:<br>Le montant en ".$lang['currency']." doit être 0.01 au minimum";
$lang['transaction_new_gc_header']		= "Ajouter au Compte";
$lang['transaction_new_header']			= "Nouvelle Activité";
$lang['transaction_no_amount']			= "ERREUR DE TRANSACTION:<br>Vous devez soit introduire un montant en ".$lang['currency']."<br>ou choisir une promotion.";
$lang['transaction_promo_not_valid']	= "ERREUR DE TRANSACTION:<br>Vous devez introduire un montant d'achat<br>pour faire usage de cette promotion.";
$lang['transaction_promos_label']		= "Choisir une Promotion:";
$lang['transaction_purchase_label']		= "Introduire un Total d'Achats:";
$lang['send_email']						= "Envoyer Email?";
$lang['transactions_buyx_none']			= "Aucun Service ou Produit n'est Défini.";
$lang['transactions_buyx_none_dir']		= "Retourner au panneau de contrôle et ajuster les paramétres.";
$lang['transactions_visit_credited']	= "1 Evénement Crédité";
$lang['transactions_visit_redeemed']	= "Evénements Echangés";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "Erreur en supprimant la transaction. Veuillez réessayer.";
$lang['transaction_delete_popup']		= "<strong>Ceci supprimera la transaction pour toujours.</strong><br><br>
											Cette action NE PEUT PAS ETRE RECULEE!<br><br>
											Etes-vous sûr de vouloir supprimer cette transaction?";
$lang['transaction_delete_popup_pc']	= "Ceci supprimera la transaction pour toujours.\n\n
											Cette action NE PEUT PAS ETRE RECULEE!\n\n
											Etes-vous sûr de vouloir supprimer cette transaction?";

// Redeem Rewards
$lang['redeem_buyx_header']				= "Tableau des Récompense";
$lang['redeem_buyx_sub_header']			= "Le client a accumulé assez d'activités pour:";
$lang['redeem_header']					= "Récompensations Disponibles";
$lang['redeem_header_alt']				= "Déduire du Compte";
$lang['redeem_points_partial_header']	= "Vous pouvez individuellement déduire des"; /* points or dollars */
$lang['redeem_points_partial_none']		= "Dés que ce compte a un solde."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "Ou choisir une récompense à échanger";
$lang['redeem_reward_description']		= "Description de la Récompense";
$lang['redeem_reward_balance_none']		= "Le solde actuel sur ce compte n'est pas <br>suffisant pour revendiquer une récompense prédéfinie.";
$lang['redeem_reward_balance_zero']		= "Le solde actuel sur ce compte n'est pas <br>suffisant pour en déduire quelconque somme.";
$lang['redeem_reward_balances_none']	= "Les soldes actuels sur ce compte ne sont pas <br>suffisants pour revendiquer une récompense.";

// Reports
$lang['report_audit_title']				= "Rapport de l'Audit de Transaction";
$lang['report_audits_all_trans']		= "Toutes les Transactions";
$lang['report_audits_header']			= "Audit";
$lang['report_audits_redeemed_only']	= "Echangés Seulement";
$lang['report_audits_totals']			= "Totaux";
$lang['report_campaigns_included']		= "Campagnes Incluses:";
$lang['report_col_1_header']			= "Choisissez un Rapport";
$lang['report_col_2_header']			= "Choisissez un Intervalle de Dates";
$lang['report_col_3_header']			= "Choisir Campagne(s)";
$lang['report_date_not_valid']			= "Date non valide<br>(Ça pourrait être une année bissextile)";
$lang['report_date_mismatch']			= "Erreur: La date de départ doit être<br>avant la date finale.";
$lang['report_frequent_header']			= "Rapport de Clients Réguliers";
$lang['report_frequent_min_trans']		= "Nombre Minimal de Transactions";
$lang['report_none']					= "Aucun Client ne Correspond aux Critéres";
$lang['report_marketing_header']		= "Marketing";
$lang['report_marketing_new_cust']		= "Nouveaux Clients";
$lang['report_marketing_freq_cust']		= "Clients Réguliers";
$lang['report_marketing_freq_or_more']	= /* A given number of */ "transactions ou plus.";
$lang['report_marketing_include']		= "Inclure Transactions d'Echange.";
$lang['report_marketing_miss_dir_1']	= "Les clients qui ont eu une transaction dans l'intervalle de dates ci-dessus,";
$lang['report_marketing_miss_dir_2']	= "et ne sont pas revenus dans le nombre de jours suivant:";
$lang['report_missing_header']			= "Clients Qui ne Sont pas Revenus pour"; /* a number of days.*/
$lang['report_new_customers_header']	= "Rapport des Nouveaux Clients";
$lang['report_new_customers_none']		= "Aucun Nouveau Client ne Correspond aux Critéres";
$lang['report_new_customers_range']		= "Nouveaux Clients Entre"; /* one date and another date */
$lang['report_no_transactions']			= "Aucune Transaction Trouvée";
$lang['report_redeem_one_letter_code']	= "E";
$lang['report_run_report_button']		= "Créer Rapport";
$lang['report_totals_header']			= "Rapport Audit Total";

// Report Months
$lang['Jan']							= "Jan";
$lang['Feb']							= "Fév";
$lang['Mar']							= "Mar";
$lang['Apr']							= "Avr";
$lang['May']							= "Mai";
$lang['Jun']							= "Jun";
$lang['Jul']							= "Jul";
$lang['Aug']							= "Aoû";
$lang['Sep']							= "Sep";
$lang['Oct']							= "Oct";
$lang['Nov']							= "Nov";
$lang['Dec']							= "Déc";

// Auto-Generated Emails
$lang['email_account_activity']			= "Mise à Jour de l'Activité du Compte";
$lang['email_activated_header']			= "Campagne Activée";
$lang['email_activated_sub_header']		= "La campagne suivante a été activée:";
$lang['email_billing_header']			= "Changement de Niveau de Facturation";
$lang['email_billing_from_level']		= "Le niveau de facturation de votre compte a été change de";
$lang['email_deactivated_header']		= "Campagne Désactivée";
$lang['email_deactivated_sub_header']	= "La campagne suivante a été désactivée:";
$lang['email_greeting']					= "Salut"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "Gardez cette information dans un lieu sur";
$lang['email_html_callout_url']			= "Adresse URL d'Ouverture de Session"; // As in "the internet address where a client can log into the acount management application of StickyStreet."
$lang['email_keep_email_footer_1']		= "Veuillez garder ce message dans vos registres, svp.";
$lang['email_keep_email_footer_2']		= "Il contient des informations importantes du compte.";
$lang['email_new_account_header']		= "Nouveau Compte";
$lang['email_new_account_sub_header']	= "Un nouveau compte a été crée.";
$lang['email_html_password_nochange']	= "Pas Changé"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "Régistration du Client en Ligne";
$lang['email_online_register']			= "Le client suivant s'est enregistré en ligne pour un compte:";
$lang['email_password_header']			= "Demande de Récupération du Mot De Passe";
$lang['email_password_dir1']			= "Vous avez demandé le mot de passe pour l'utilisateur"; /* shows the User ID */
$lang['email_password_dir2']			= "Voici:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "Changements A Votre Compte";
$lang['email_update_sub_header']		= "Les informations de votre compte ont été actualisées.";
$lang['email_user_id_header']			= "Demande de Récupération de l'ID d'Utilisateur";
$lang['email_user_id_sub_header_1']		= "Vous avez demandé l'ID d'Utilisateur associé à votre adresse courriel:";
$lang['email_user_id_sub_header_2']		= "Vous avez demandé les ID d'Utilisateurs associés à votre adresse courriel:"; // Plural


// Bookmarks
$lang['bookmarks_header']				= "Créer des Signets d'Ouverture de Session Automatique";
$lang['bookmarks_table_header_1']		= "Choisir Site à Marquer";
$lang['bookmarks_table_header_2']		= "Choisir Utilisateur à se Connecter Automatiquement";
$lang['bookmarks_table_header_3']		= "Lien du Signet";
$lang['bookmarks_link_1']				= "Faites un clique-droit<br>sur ce lien afin de<br>placer le signet.";
$lang['bookmarks_link_2']				= "Cliquez pour aller sur<br>le site<br>et le marquer<br>de là.";
$lang['bookmarks_note']					= "Traitez ces liens reçus comme les mots de passe pour votre compte.
											Nous vous recommendons de les envoyer ni par courriel, ni par messagerie instantanée, mais de vous connecter vous-même de l'ordinateur où
											We recommend you do not send any by email or instant messenger, instead log-in in yourself from the computer where
											vous voulez avoir le signet de l'ajouter à la liste de signets de votre navigateur.";

// Common Error Messages:
$lang['error_email_space']				= "Les espaces ne sont pas permis dans des adresses de courriel.";
$lang['error_email_not_found']			= "Cette adresse de courriel n'a pas été trouvée.";
$lang['error_email_not_valid']			= "Cette adresse de courriel n'est pas valable.";
$lang['error_customer_id_empty']		= "Vous devez introduire un ID de Compte d'un Client.";
$lang['error_next_page']				= "Il y a des problémes en allant au site suivant. Veuillez réessayer, svp.";
$lang['error_password_empty']			= "Vous devez choisir et introduire un mot de passe.";
$lang['error_password_length']			= "Votre mot de passe doit contenir entre 5 et 20 charactéres.";
$lang['error_password_not_valid']		= "Un mot de passe ne peut contenir seulement des lettres, des chiffres, ou un tiret bas (_)";
$lang['error_password2_empty']			= "Vous devez introduire le mot de passe deux fois, afin d'éviter<br>des fautes de frappe.";
$lang['error_passwords_no_match']		= "Les mots de passe que vous avez introduits ne correspondent pas l'un à l'autre.<br>Veuillez les réintroduire, svp.";
$lang['error_phone_area_code']			= "Veuillez introduire un code postal valide, svp.";
$lang['error_phone_not_valid']			= "Ce numéro de téléphone n'est pas valable.";
$lang['error_service_down']				= "Mise à niveau du serveur.<br>Veuillez patienter, svp.<br><br>Nous vous prions de nous excuse pour tout inconvénient.";
$lang['error_updating']						= "Erreur de mise à jour de l'information. Réessayez, svp.";
$lang['error_userid_error']				= "Erreur: L'ID d'Utilisateur que vous avez introduit n'a pas été trouvé.";
$lang['error_balance_lookup_activity']	= /* The account id entered */ "n'a aucune activité enregistrée.";
$lang['error_balance_lookup_no_cust']	= "Pas de Compte de Client.";
$lang['error_balance_lookup_no_acct']	= "Pas d'ID de Compte.";

// Alt Tags
$lang['alt_add_customer_button']		= "Cliquez pour AJOUTER des comptes de clients à cette campagne";
$lang['alt_account_edit_save']			= "Cliquez pour sauvegarder les changemants faits dans ce formulaire";
$lang['alt_campaign_delete']			= "Cliquez pour supprimer cette campagne";
$lang['alt_campaign_edit']				= "Cliquez pour rédactionner les paramétres de cette campagne";
$lang['alt_campaign_name']				= "Cliquez sur le nom de la campagne pour rechercher des clients existents, ou en ajouter des nouveaux";
$lang['alt_campaign_new_create']		= "Cliquez pour créer cette campagne";
$lang['alt_campaign_place_on_hold']		= "Cette Campagne est active. Cliquez pour mettre en attente.";
$lang['alt_campaign_re-activate']		= "Cliquez pour réactiver cette campagne";
$lang['alt_cancel_changes']				= "Cliquez pour annuler tout changement et retouner à l'écran précédent.";
$lang['alt_goto_ss']					= "Cliquez pour ouvrir une fenêtre et aller à cette destination.";
$lang['alt_lookup_customer_button']		= "Cliquez pour CONSULTER les comptes de clients dans cette campagne";
$lang['alt_user_add']					= "Cliquez pour ajouter un nouvel utilisateur avec un nom d'utilisateur et un niveau de droits individuel";
$lang['alt_user_delete']				= "Cliquez pour supprimer cet utilisateur afin qu'il ne puisse plus se connecter ou acceder ce compte";
$lang['alt_user_edit']					= "Cliquez pour rédactionner les paramétres de cet utilisateur";

// Outside / Optional Links
// ------------------------
// Translate this section ONLY if the embeded links have been replicated in the new language:

// Legal Documents
$lang['terms_conditions_location']		= 'terms-conditions.html';

// Edit Preferences: Points Campaign
$lang['edit_points_note_1_graphic']		= '<a href="http://www.stickystreet.com/calculator.php" target="_blank"><img align="right" src="graphics/calculator.gif" width="72" height="80" border="0" vspace="5" hspace="3"></a><span style="color: #666;">';
$lang['calculator_link'] 				= '<a href="http://www.stickystreet.com/calculator.php" target="_blank">';
$lang['edit_points_note_1'] 			= "Notre calculateur de points ".$lang['calculator_link']." vous soutient à calculer les points nécessaires pour une récompense</a>:";

$lang['blog_link_accounting'] 			= '<a href="http://support.stickystreet.com/forums/16257/entries/12598" target="_blank">';
$lang['edit_points_note_2'] 			= "Pour voir la discussion au sujet de niveaux de récompenses et la logique à leur base, voyez cet article ".$lang['blog_link_accounting']."</a> dans le forum de support.";

$lang['edit_str_desc_with_link']		= "Le Rapport Dépense-Récompense est un des deux rapports qui vous sert à calculer la valeur des ".$lang['points']." valeur de vos récompenses (indépendant du fait si vous avez utilisé le calculateur ".$lang['calculator_link'].$lang['Points']." </a> ou non.) En l'introduisant ici vous pouvez activer la fonction de remboursement de ".$lang['points']." en mettant une valeur en ".$lang['currency']." ici:";


// =========================
// ADDITIONAL TRANSLATIONS 1
// =========================

// Single words and labels
$lang['Referrer']						= "Référent"; 	// As in a person or entity that sends business your way.
$lang['Comma']							= "Virgule";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Deducted']						= "Déduits";	// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Item']							= "Article";		// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Pipe']							= "Barre Verticale";		// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "Acheté";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Tab']							= "Touche Tab";		// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Required']						= "Nécessaire";	// As in necessary, compulsory. Ex: "The name field is required."
$lang['optional']						= "optionnel"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";

// Page Titles
$lang['title_managing_cards']			= "Gérance des Registres de Clients";
	$lang['importing_customers']		= "Import de Clients";
	$lang['customers_imported']			= "Clients Importés";
	$lang['importing_transactions']		= "Import de Transactions";
	$lang['transactions_imported']		= "Transactions Importées";

// Labels
$lang['label_currency']					= "Devise";				// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']			= "Symbole Monétaire";		// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_language_select']			= "Afficher la Langue";		// As in a prompt to the user to select a language for the application
$lang['label_localization']				= "Emplacement";			// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_timezone']					= "Fuseau Horaire";

// New Account Screen
$lang['account_language_error']			= "Erreur dans le choix de la langue.";
$lang['account_language_note']			= "Notez: Ceci est la préférence linguistique générale de ce compte.<br>
											Un arrangement dans les paramétres de l'Utilisateur du Compte (dans la séction de l'Utilisateur), ou le choix<br>
											d'une différente langue sur l'écran de connection changera cette préférence.";
$lang['account_timezone_note']			= "Notez: Ceci est la préférence générale du fuseau horaire du compte.<br>
											Un Utilisateur du Compte peut être associé à un autre fuseau horaire (dans la séction de l'Utilisateur),<br>
											cela changera cette préférence.";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']			= "Importer Clients et Transactions";
$lang['manage_import_customers']		= "Importer Clients";
$lang['manage_import_transactions']		= "Importer Transactions de Clients";
$lang['manage_import_no_none']			= "Tous les domaines ne peuvent pas être mis sur 'aucun'. Veuillez choisir au moins un domaine à importer.";
$lang['manage_import_duplicate_card']	= "DUPLIQUER CARTE:";
$lang['manage_import_duplicate_found']	= "Dupliquer";
$lang['manage_import_duplicates_found']	= "Duplicata";
$lang['manage_import_successful']		= "Import Réussi";
$lang['manage_import_new_customer']		= "nouveau client importé";
$lang['manage_import_new_customers']	= "nouveaux clients importés";
$lang['manage_import_updated_customer']	= "client actualisé";
$lang['manage_import_updated_customers']= "clients actualisés";
$lang['manage_import_no_cust_data']		= "Manque de données de client à importer. Veuillez copier et coller les données de votre client dans la boîte ci-dessous, svp.:";
$lang['manage_import_campgn_not_valid']	= "Une des campagnes sélectionnées n'est pas valide.";
$lang['manage_import_select_1_campaign']= "Vous devez choisir au moins une campagne auquelle vous voulez joindre vos clients:";
$lang['manage_import_select_delimiter']	= "Veuillez sélectionner un des délimiteurs ci-dessus.";
$lang['manage_import_new_trasns']		= /* a number */ "nouvelles transactions enregistrées";
$lang['manage_import_new_account']		= "nouveau compte de client crée";
$lang['manage_import_new_accounts']		= "nouveaux comptes de clients crées";
$lang['manage_import_no_cust']			= "Aucun client importé ou mis à jour";
$lang['manage_import_no_trans']			= "Aucune transaction a été enregistrée";
$lang['manage_import_no_trans_data']	= "Aucune donnée de transaction était disponible pour l'importer. Veuillez copier et coller vos données de transactions dans la boîte ci-dessous svp.:";
$lang['manage_import_fields_missing']	= "Certaines cases obligatoires manquent.";
$lang['manage_import_cust_instr_head']	= "<b>L'import d'une liste de clients est assez simple:</b>";
$lang['manage_import_cust_instr_1']		= "Choisissez la / les campagne(s) auquelles vous voulez joindre ces clients.";
$lang['manage_import_cust_instr_2']		= "Spécifiez de quelle façon et dans quel ordre les colonnes sont séparées.";
$lang['manage_import_cust_instr_3']		= "Copiez et collez votre liste dans la boîte large et vérifiez-la si vous voulez que des enregistrements<br>
													(avec le même ID / # de carte) soient remplacés ou ignorés.";
$lang['manage_import_cust_instr_4']		= "Les dates peuvent apparaître dans un des formats suivants <i>(Les années doivent constituer de 4 chiffres)</i>:<br>
																<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre>";
$lang['manage_import_campaigns_list']	= "Liste de Campagnes";
$lang['manage_import_add_campaigns']	= "Ajouter à une Campagne";
$lang['manage_import_field_order']		= "Ordres des Cases";
$lang['manage_import_field_delimiter']	= "Délimiteur des Cases";
$lang['manage_import_excel_default']	= "(par défaut en copiant et collant de MS Excel)";
$lang['manage_import_customer_list']	= "Liste des Clients";
$lang['manage_import_duplicates']		= "Doubles?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "Remplacer"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "Collez la liste des clients dans la boîte ci-dessous";
$lang['manage_import_campaign_name']	= "ID de la Campagne";
$lang['manage_import_trans_date']		= "Date de Transaction";
$lang['manage_import_trans_amount']		= "Montant de Transaction";
$lang['manage_import_redeem_event']		= "Evénement Echangé (Y/N)";
$lang['manage_import_req_for_buyx']		= "Nécessaire (SEULEMENT pour des campagnes 'Achetez X, Recevez Un Gratuit')";
$lang['manage_import_item_purchased']	= "Objet Acheté";
$lang['manage_import_description_auth']	= "Description / Auth.";
$lang['manage_import_trans_list']		= "Liste des Transactions";
$lang['manage_import_paste_trans']		= "Collez les transactions du client da la boîte ci-dessous";

// Reports
$lang['report_all_customers']			= "Tous les Clients";
$lang['report_all_customers_header']	= "Rapports de Tous les Clients";
$lang['report_all_customers_range']		= "Tous les Clients Entre"; /* one date and another date */
$lang['report_balances_header']			= "Rapport des Soldes des Clients";
$lang['report_balances']				= "Soldes des Clients pour";
$lang['report_date_range']				= "Le client a eu une transaction entre:"; /* a range of dates.*/
$lang['report_search_header']			= "Rapport de Recherche de Client";
$lang['report_search']					= "Rechercher Clients Pour:";
$lang['report_search_range']			= "Entre"; /* one date and another date */
$lang['report_search_not_valid']		= "Introduisez quelque chose à rechercher.";

// Report Exporting
$lang['export_xls']						= "Export vers Excel";
$lang['export_apex']						= "Export vers SimSol SMS";

// Users: Common actions:
$lang['user_role_F']					= "Contractant du Service";
$lang['user_role_F_desc']				= "Peut seulement echanger des récompenses pour clients, dans les campagnes autorisées.";

// Common Error Messages:
$lang['error_language_selector']		= "Erreur dans le choix de la langue.";

$lang['side_support_ideas']				= "Idées de Campagnes";
$lang['side_support_ideas_describe']	= "Idées et modes d'emplois pour l'usage créatif de nos programmes pour vos besoins de marketing, d'organisation et de changement du comportement";

// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================

$lang['error_account_suspended']		= "Ce compte a été supprimé";

// Calculator
$lang['calculator_title']				= "Le Programme de Calculation de Points";
$lang['str_ratio']						= "Rapport Dépenses-Récompensation";  // (same as "edit_str_ratio_sub_header", but without "your")
$lang['check_section_desc']				= "Assurons-nous que vous ne distribuez pas<br>que ce que vous gagnez:";
$lang['Print']							= "Imprimer";
$lang['column_product_or_pervice']		= "Produit ou Service";
$lang['column_retail_price'] 			= "Prix de vente au détail du produit / service";
$lang['column_points_earned'] 			= "Points gagnés avec l'achat par le client";
$lang['column_points_needed'] 			= "Points customer needs to redeem it as a reward";
$lang['column_cost_to_provide'] 		= "Vos frais pour fournir le produit / service";
$lang['column_profit_made'] 			= "Profit avec la vente de";
$lang['column_profit_made_part2']		= "produits<br>ou services";
$lang['column_cost_reward_perc']		= "Coût de la récompense<br>en % du profit.";
$lang['column_cost_reward_smaller']		= "(Plus c'est bas, mieux c'est)";
$lang['instructions']					= "Instructions";
$lang['calculator_instructions_1']		= "<strong>1) Vos clients doivent gagner des POINTS pour chaque dollar qu'ils dépensent.
											Combien de points? Ceci est un nombre arbitraire:</strong><br>
											<br>
											Naturellement, 1 point par dollar c'est facile, mais ça facilite à vos clients de savoir
											combien d'argent ils ont dépensé dans votre entreprise quand ils voient le nombre de points qu'ils ont accumulés.
											Il n'y a donc aucune raison de les faire comprendre, qu'ils vous aiment bien et qu'ils dépensent des masses dans votre magasin,
											alors mieux vaut peut-être utiliser un numéro rendant le calcul, les faisant réaliser qu'ils sont accros du shopping, un peu plus difficile!
											Nous vous recommandons d'utiliser 100 au minimum, si vous voulez vous mettre à compter les centimes, mais encore, cela peut simplement être 3, 5, ou 20, si
											ça ne vous fait rien que quelques centimes seront arrondis afin d'atteindre des points entiers.<br>
											<br>
											<strong>Si vous vous êtes décidés, introduisez ce numéro dans la boîte <span class=\"orangeH\">Points par Dollar</span> ci-dessus.</strong><br>";
$lang['calculator_instructions_2']		= "<strong>2) Ensuite, <i>le Rapport Dépense-Récompense</i>
											peut être considéré comme mesure \"de combien de fois un client devrait acheter un produit ou un service chez vous avant qu'une récompense de valeur équivalente est atteinte?\"</strong><br />
											<br>
											Typiquement c'est un nombre entre 8 et 25 ou plus, mais encore, ça dépend fort de votre entreprise.
											Par exemple, des cafés offrent souvent une tasse de café gratuite apre chaque 10éme. Plus ce nombre est haut, plus vous serez conservatif
											concernant l'argent, et d'autant plus difficile il sera pour vos clients de toucher à leur récompense.<br>
											<br>
											<strong>Introduisez un numéro dans la boîte <span class=\"orangeH\">Rapport Dépense-Récompense</span>,
											puis jouez un peu avec quelques chiffres.
											Essayez quelques nombres jusqu'à ce que vous soyez à l'aise avec les résultats.</strong>";
$lang['calculator_disclaimer']			= "<strong>Décharge</strong>: Ce
											calculateur sert seulement comme outil de référence, nous encourageons
											nos clients propriétaires d'entreprises de réviser la chose avec leur conseiller financier avant de lancer
											quelconque de nos programmes du genre c'est amusant, faisons de l'argent, c'est si facile!";

// =========================
// ADDITIONAL TRANSLATIONS 3
// =========================

// Transaction Email Content Preferences:
$lang['transaction_email_content']		= "E-Mail de Transaction: Contenu";
$lang['transaction_email_desc']			= "Si un client a registré une adresse courriel chez vous quand vous régistrez une transaction, vous pouvez décider de lui envoyer un e-mail.";
$lang['transaction_email_instr']			= "Pour spécifier le contenu de l'e-mail qu'ils reçoivent de vous pour cette campagne, veuillez rédactionner le formulair exemplaire ci-dessous:";
$lang['transaction_email_default']		= "Nous vous remercions de votre fidélité et confience en nous!";
$lang['transaction_email_incl_balance']	= "Inclure solde";
$lang['transaction_email_incl_rewards']	= "Inclure récompenses disponibles";
$lang['transaction_email_incl_coupon']	= "Inclure bon ou promotion";
$lang['error_general_permission']		= "Contenu indisponible";

// =========================
// ADDITIONAL TRANSLATIONS 4
// =========================
$lang['customer_edit_address_change']	= "Adresse changée à";
$lang['customer_edit_address_delete']	= "Adresse supprimée. Avant";
$lang['customer_edit_address_replace']	= "Adresse changée de";

// =========================
// ADDITIONAL TRANSLATIONS 5
// =========================
// Email Updates:
$lang['email_agency_update_header']			= "Changements au Compte:";
$lang['email_agency_update_sub_header']	= "Les informations du compte suivantes ont été mises à jour:";
// Import Updates:
$lang['Options']									= "Options";  // Plural. The ability to choose from different alternatives or non-required additional specifications.
$lang['manage_import_duplicates_update']	= "Mettre à Jour";
$lang['manage_import_duplicates_ignore']	= "Ignorer";
$lang['manage_import_convert_currency']	= "Convertir le montant de transaction en monnaie de campagne?";
$lang['manage_import_trans_instrctns_2'] 	= 'Si vous importez des <b>transactions en espéces</b> dans une campagne à base de points,
																ou si vous importez une liste de visites dans une campagne Gain-par-Evénement, assurez-vous de vérifier la case à cocher
																"'.$lang['manage_import_convert_currency'].'". Si vous importez des montants de points individuels ou
																des montants gagnés individuels, assirez-vous que la case ne soit pas cochée.';
// Import Undo
$lang['import_previous_title']				= 'Imports Précédents';
$lang['Undo']										= 'En Arriére';
// BuyX Membership Functionality
$lang['Quantity']								= "Quantité à ajouter";
// Mailchimp Integration:
$lang['select_a_list_to_export_to']		= "Choisissez une Liste à Exporter";
$lang['success']								= "Succés";
$lang['export_complete']					= "Export Complét";
$lang['loading']								= "Chargement...";
$lang['oops']									= "Oups!";
$lang['addresses_successfully_added']	= "Adresses courriel ajoutées à cette liste avec succés";
$lang['all_addresses_exist']				= "Toutes les adresses existent déjà dans cette liste!";
$lang['addresses_exist']					= "Adresses courriel qui apparaissent déjà dans cette liste";
$lang['we_found']								= "Nous avons trouvé";
$lang['errors']								= "erreurs";
$lang['addresses_with_errors']			= "Adresses courriel avec erreurs";
$lang['Back']									= "En Arriére";
$lang['CLOSE']									= "FERMER";
$lang['Visit_MailChimp']					= "Visiter MailChimp";
$lang['mailchimp_integration']			= "Intégration MailChimp";
$lang['mailchimp_login_error'] 			= "MailChimp n'a pas reconnu votre identifiant / mot de passe.  Attention - pour raisons de sécurité vous devriez attendre 5 minutes aprés 10 tentatives de connections, avand de pouvoir réessayer. ";
$lang['mailchimp_no_account_info']		= "Nous n'avons pas trouvé vos informations du compte MailChimp. Introduisez-les maintenant pour reprendre l'export!";
$lang['mailchimp_bad_account_info']		= "Votre identifiant ou mot de passe MailChimp n'a pas été reconnu par MailChimp. Introduisez-le maintenant pour reprendre l'export!";
$lang['bananas']								= "Bananes!";
$lang['no_username']							= "Vous n'avez pas introdiut l'identifiant et / ou le mot de passe!";
$lang['Username']								= "Identifiant";
$lang['Password']								= "Mote de Passe";

// =========================
// ADDITIONAL TRANSLATIONS 6
// =========================
$lang['account_new_header_agency']				= "Racontez-nous de votre client:";
// Custom Date functionality
$lang['label_date']									= 'Date de Naissance';
$lang['label_Year']									= 'Année';
$lang['label_Month']									= 'Mois';
$lang['label_Day']									= 'Jour';
$lang['customer_new_demo_date']					= '01/01/2010';
$lang['user_edit_record_change_custom_date']	= "Changement de date de naissance de";
$lang['user_edit_record_replace_custom_date']= "Changement de date de naissance à";
$lang['report_customer_birthday']						= "Clients avec une Date de Naissance dans l'étendue ci-dessus";
$lang['report_customer_birthday_header']				= "Rapport de Dates de Naissance des Clients";
// API functionality
$lang['api_redeem_reward_exeeds']				= "Le niveau de récompensation dépasse le solde disponible";
$lang['api_redeem_amount_exeeds']				= "Le montant introduit dépasse le solde disponible";
$lang['api_redeem_amount_not_valid']			= "Le montant introduit n'est pas valable";
$lang['api_redeem_amount_not_enough']			= "Le montant introduit doit être 1 au minimum";
$lang['api_redeem_currency_not_enough']		= "Le montant introduit doit être 0.01 au minimum";
$lang['api_redeem_nothing']						= "Aucun échange à été demandé";
// Campaign Name Change functionality
$lang['Campaign_Name'] 								= $lang['cp_campaigns_table_header_1'];
$lang['Campaign_ID']									= $lang['manage_import_campaign_name'];

// =========================
// ADDITIONAL TRANSLATIONS 7
// =========================
$lang['user_role_R']									= "Gérant + Exports";
$lang['user_role_R_desc']							= "Gérant avec le droit d'exporter des données dans des rapports.";
$lang['user_role_G']									= "Cartes-Cadeaux";
$lang['user_role_G_desc']							= "Gérant ayant accés seul à des campagnes de cartes-cadeaux.";
$lang['user_role_H']									= "Cartes-Cadeaux + Exports";
$lang['user_role_H_desc']							= "Gérant ayant accés seul à des campagnes de cartes-cadeaux et le droit d'exporter des données dans des rapports.";
$lang['user_role_L']									= "Fidélité";
$lang['user_role_L_desc']							= "Gérant ayant accés seul à des campagnes de fidélité.";
$lang['user_role_Y']									= "Fidélité + Exports";
$lang['user_role_Y_desc']							= "Gérant ayant accés seul à des campagnes de fidélité et le droit d'exporter des données dans des rapports.";


// =========================
// ADDITIONAL TRANSLATIONS 8
// =========================
// Custom Modifications for PaP Solutions
$lang['user_edit_record_change_password']		= "Mot de passe changé";
$lang['label_customer_password']					= "Mot de passe";							// PT: "Senha"
$lang['label_cutoff_day']							= "Jour du Cycle de Facturation";				// PT: "Dia de corte"
$lang['label_nonpayment']							= "Statut de la Carte";						// PT: "Status de cliente"  // (C = cancelado, S = suspenso, A = ativo)
$lang['label_nonpayment_short']					= "Statut";
$lang['manage_import_bonus_adj']					= "Bonus/Adaptation? (Y/N) "; 	// PT: "Bonus/Ajuste? (Y/N)" // (Y = sim, N = não)
$lang['Bonus_Adjustment']							= "Bonus/Adaptation?";				// PT: "Bonus/Ajuste?"
$lang['Bonus_Adjustment_abbreviated']			= "Adp";									// PT: "Aj."
$lang['cp_campaigns_table_head_depreciation']	= "Echéance des Points"; 			// PT: "Duração da vida de pontos"
$lang['cp_campaigns_table_depreciation']		= "Longévité des Points"; 				// PT: "Longevidade dos pontos"
$lang['days']											= "jours";
$lang['months']										= "mois";
$lang['years']											= "ans";
$lang['depreciation_interval_too_small']		= "Le montant introduit doit être 1 au minimum";
$lang['customer_password_missing']				= "Il n'y a aucun enregistrement de ce client";
$lang['report_papsolutions_monthly_summary']	= "Résumé Mensuel d'Aujourd'hui";
$lang['report_campaign_select_error']			= "Séléction de la campagne échoué";
$lang['report_daily_monthly_summary']			= "Résumé Mensuel pour";
$lang['label_previous_balance']					= "Solde Précédent";
$lang['report_interval_new_activity']			= "Nouvelle Activité";
$lang['report_interval_adjustments']			= "Adaptations";
$lang['report_interval_redemptions']			= "Remboursements";


// =========================
// ADDITIONAL TRANSLATIONS 9
// =========================
// Custom Modifications for Apex Integration
$lang['apex_integration']						= "Integration SMS";
$lang['apex_account_key']						= "Code du Compte SMS";
$lang['apex_dynamic_sender']					= "Expéditeur Dynamique de SMS";
$lang['Low']										= "Bas";
$lang['High']										= "Haut";
$lang['Quality']									= "Qualité";
$lang['credits_available']						= "Crédits Disponibles";
$lang['credits_for_msg']						= "Crédits pour Messages";
$lang['country_code']							= "Code Pays (Obligatoire)";
$lang['message']									= "Message";
$lang['remaining']								= "restant";
$lang['send_sms']									= "Envoyer SMS";
$lang['apex_success']							= "Lot de SMS exporté avec succés!";
$lang['apex_transfer_error']					= "Export de l'SMS échoué. Si le probléme persiste, contactez-nous";
$lang['apex_login_error']						= "Connexion au FTP échouée. Veuillez nous contacter afin de vérifier votre identité FTP";
$lang['apex_account_key_invalid']			= "Votre code du compte n'est pas valable.<br/> Veuillez contacter";
$lang['apex_not_subscribed']					= "Vous n'êtes pas souscrits à l'intégration SMS.<br/> Veuillez contacter";
$lang['apex_country_code_required']			= "Le code pays est obligatoire.";
$lang['apex_empty_message']					= "Le message ne peut pas être vide.";
$lang['apex_credentails_invalid']			= $lang['apex_account_key_invalid'];

// =========================
// ADDITIONAL TRANSLATIONS 10
// =========================
// New Field: Reward ID
$lang['edit_reward_id']							= "Optionnel: ID de la Récompensation";
// Previous integration:
$lang['user_edit_record_change_password']		= "Mot de passe changé";
$lang['label_customer_password']					= "Mot de passe";
// Trial Limit feature:
$lang['error_trial_overage']						= 'Ne peut pas ajouter plus de clients: Compte en mode d\'éssai.';
$lang['error_trial_overage_some']				= 'Compte en mode d\'éssai: Maximum 10 clients. Transactions pour clients supplémentaires ne seront pas enregistrées.';
$lang['error_activate_missing']					= 'Paramétre d\'activation manquant ou pas valable.';

// =========================
// ADDITIONAL TRANSLATIONS 11
// =========================
// API - Users List
$lang['api_error_users_list_not_owner']		= "Seul les propriétaires du compte ont accés à ces informations";
$lang['api_error_no_users']						= "Aucun utilisateur n'a été retrouvé.";
$lang['Campaign_Error']								= "Campagne pas valable ou désactivée.";

// =========================
// ADDITIONAL TRANSLATIONS 12
// =========================
$lang['api_error_no_customer_match']			= "Aucun client ne correspond aux données fournies.";
$lang['api_error_multiple_customer_match']	= "Plus d'un client correspond aux données fournies.";
$lang['api_error_PIN_empty']						= "Aucun NIP n'existe dans les enregistrements";
$lang['api_error_PIN_no_match']					= "Les NIP ne correspondent pas";
$lang['api_error_password_missing']				= "Aucun mot de passe fourni";
$lang['api_error_PIN_missing']					= "Aucun NIP fourni";
$lang['api_error_username_exists']				= "Le nom d'utilisateur est déjà employé.";
$lang['api_error_invalid_delimiter']			= "Délimiteur invalide";
$lang['api_error_no_data']							= "Aucune donnée fournie";
$lang['manage_import_field_note']		= "<i>Chaque case est optionnelle.</i><br>
												<br>
												Attention: Si vous avez l'intention d'importer<br>
												<b>des transactions</b> de clients plus tard, un <i>ID de Compte</i><br>
												unique est NECESSAIRE pour chaque client, afin de<br>
												pouvoir attribuer les transactions aux clients<br>
												indépendamment de <i># de Cartes</i> changeables.<br>
												Si vous ne possedez pas d'identifiants individuels uniques<br>
												pour chaque client, introduisez le <i># de Carte</i> dans<br>
												les deux cases 'ID du Compte' et '# de Carte'.";

$lang['label_PIN']					= "NIP"; // (PIN is a 4 or 5 digit "personal identification number")
$lang['label_PIN_new']				= "Nouveau NIP";
$lang['user_new_PIN_label']		= "Séléctionnez un NIP pour cet utilisateur";
$lang['user_new_PIN_note']			= "Optionnel: Pour des terminaux, seulement.";
$lang['user_edit_PIN_label']		= "Changer le NIP";
$lang['user_edit_PIN_note']		= "Pour garder le même NIP, laissez la cas vide.";
$lang['user_PIN_not_numeric']		= "Un NIP peut se composer de 4 à 5 chiffres, seulement";




// =========================
// ADDITIONAL TRANSLATIONS 13
// =========================
$lang['edit_record_change_PIN']			= "NIP changé";
$lang['edit_record_change_username']	= "Identifiant changé";
$lang['manage_undo_warning']				= "Etes-vous sûr de vouloir annuler cet import?<br><br>Cette action NE PEUT PAS ETRE RESTITUEE!";
$lang['manage_undo_warning_pc']			= "Etes-vous sûr de vouloir annuler cet import?\n\nCette action NE PEUT PAS ETRE RESTITUEE!";


// =========================
// ADDITIONAL TRANSLATIONS 14
// =========================
$lang['user_my_info_header']                        = "Mes Informations d'Utilisateur";
$lang['user_role_I']                                    = "Agence Client + Imports";
$lang['user_role_I_desc']                            = "Manager, qui a le droit de rÈdactionner les prÈfÈrences de campagnes, d'utilisateurs, crÈer des rapports, et
                                                                de gÈrer des clients (supprimer, importer), mais n'a pas le droit d'ajouter des campagnes ou des utilisateurs du compte.";
$lang['user_role_G']                                    = "Agence Client";
$lang['user_role_G_desc']                            = "Manager, qui a le droit de rÈdactionner les prÈfÈrences de campagnes, d'utilisateurs, de crÈer des rapports,
														mais n'a pas le droit d'ajouter des campagnes, des utilisateurs du compte, ni de supprimer ou d'importer des clients.";


// =========================
// ADDITIONAL TRANSLATIONS 15
// =========================

$lang['coalition_balance_label']                    = "Solde Actuel de<br>la Coalition:";
$lang['coalition_redeem_header']                 = "RÈcompenses Disponibles au Magasin";
$lang['customer_activity_coalition_header']     = "Historique du Client (Ce Magasin Seulement)";
$lang['report_coalition_header']                    = "Rapports de la Coalition";
$lang['report_audits_totals_points']            = "Soldes du Magasin - Points";
$lang['report_audits_totals_giftcard']            = "Soldes du Magasin - Cartes-Cadeaux";
$lang['section_account_options_header']        = "Options Compte d'ExpÈrimentÈs";
$lang['section_account_options_sub']            = "Si vous souhaitez de crÈer un Compte d'ExpÈrimentÈs (programmes pas clos), veuillez svp. introduire
                                                                le Code d'Activation que vous avez demandÈ dans une des cases ci-dessous. Contactez-nous svp, si vous avez des questions
                                                                ou si vous n'avez pas reçu votre Code d'Activation du Compte d'ExpÈrimentÈs.";
$lang['section_coalition_token']                    = "Code d'Activation de la Coalition";
$lang['section_mall_token']                        = "A Deux Niveaux / Code d'Actication du Centre Commercial";
$lang['section_coalition_note']                    = "Fourni ‡ frais supplÈmentaires.";
$lang['section_mall_note']                            = "Fourni ‡ frais supplÈmentaires.";
$lang['section_mall_campaign_id']                = "ID de la Campagne SupÈrieure";
$lang['section_mall_percentage']                    = "Contribution de la Campagne (%) ";
$lang['section_token_invalid']                    = "Le Code d'Activation n'est pas valable";
$lang['section_mall_options_header']            = "Options du Compte de DeuxiËme Niveau";
$lang['percentage_not_valid']                        = "Le pourcentage n'est pas valable.";


// =========================
// ADDITIONAL TRANSLATIONS 16
// =========================
$lang['api_error_permission_denied']            = "L'utilisateur n'a pas de droit d'accés"; // An error message that shows up when a user makes an API call their permission level does not allow access to.
$lang['api_error_wrong_account']                    = "L'utilisateur n'a pas de droit d'accés au compte concerné"; // An error message that shows up when a user makes an API call that affects the wrong account.
$lang['api_error_missing_username']                = "Nom d'utilisateur manquant"; // An error message that shows up when a username (Account User, not Customer) is required but is missing.
$lang['api_error_PIN_too_many_matches']        = "Trop d'utilisateurs se servent de ce NIP";  // Shows when an account user is trying to be validated in a terminal-like setting bY entering only their PIN which ought to be unique, but there is more than one matching PIN.
$lang['api_error_PIN_duplicate']                    = "Ce NIP est déjà employé"; // Shows when an user is created or updated and the PIN assigned to them is already in use bu another user in the account.
$lang['api_error_campaign_id']                    = "Erreur d'ID de campagne";
$lang['api_error_campaign_name']                    = "Erreur de nom de campagne";
$lang['api_error_campaign_type']                    = "Erreur de type de campagne";
$lang['api_error_campaign_points_ratio']        = 'Erreur de rapport points-'.$lang['currency'].' de la campagne';
$lang['api_error_campaign_rewards_ratio']        = "Erreur de rapport dépense-récompense de la campagne";
$lang['api_error_campaign_depreciation']        = "Erreur dans paramétres de dévalorisation de la campagne";
$lang['api_error_campaign_dpv']                    = "Erreur de montant dans campagne récompense-par-événement";
$lang['api_error_campaign_promo']                = "Erreur de paramétres de promotions de la campagne";
$lang['api_error_campaign_reward']                = "Erreur de paramétres de récompenses de la campagne";
$lang['api_error_campaign_item']                    = "Erreur de paramétres dans campagne AchetezX";
$lang['report_custom_date2']                        = "Clients qui ont une date personelle dans l'étendue ci-dessus";
$lang['report_custom_date2_header']                = "Rapport de dates personelles de clients";


// =========================
// ADDITIONAL TRANSLATIONS 17
// =========================
// Mainly small changes regarding coalition and two-tier programs.
$lang['coalition_points_program']				= "Programme coalition a points";  // A label in reports that aggregate an account's points-based coalition campaigns into a single line.
$lang['coalition_giftcards_program']			= "Programme coalition de carte-cadeau";  // A label in reports that aggregate an account's stored-value (giftcard) based coalition campaigns into a single line.
$lang['coalition_program']							= "Programme coalition";
$lang['twotier_program']							= "Programme a deux niveaux";
$lang['opt_out']										= "Ne pas participer";


// =========================
// ADDITIONAL TRANSLATIONS 18
// =========================
$lang['account_label_fields_manage']			= "Gérer les champs personnalisés";  // A button text that lets the user add/manage the fields of data collected for the account's customers.
$lang['error_action_undefined']					= "Action non définie"; // Shows mainly as an API error message when the "action" parameter is not given or does not match one of the expected action words.
$lang['error_entry_not_in_list']					= "Option non-autorisée soumise."; // Shows mainly as an API error message when a value is input that does not match one of the options in the list of options for that field.
$lang['error_entries_not_in_list']				= "Options non-autorisées soumise."; // Shows mainly as an API error message when a series of values is input that do not exist in the list of options for that field.
$lang['error_not_numeric']							= "Un nombre n'est pas valide."; //
$lang['error_not_monetary']						= "Une somme monétaire n'est pas valide."; //
$lang['error_not_date']								= "Une date n'est pas valide."; //
$lang['error_not_unique']							= "Pas unique"; //
$lang['manage_fields_top_header']				= "Sélectionnez le tipe de champs de données pour gérer";  // The page header where data fields are managed (customers, transations, etc.)
$lang['manage_fields_customers_top_header']	= "Gérer les champs de données de clients";  // The page header where customers' data fields are managed (to add, show/hide, etc.)
$lang['manage_fields_transactions_top_header']	= "Gérer les champs de données de transactions";  // The page header where customers' transaction data fields are managed
$lang['manage_fields_predefined_header']		= "Champs prédéfinis de clients";  // The section where the original set of customer fields are show, and where the user can choose to show or hide them.
$lang['manage_fields_custom_header']			= "Champs personnalisés";  // The section where new custom customer data fields are shown.
$lang['label_customer_fields']					= 'Champs de clients'; // A button for the user to select to manage the fields related to customer data.
$lang['label_transaction_fields']				= 'Champs de transactions'; // A button for the user to select to manage the fields related to a customer's transaction data.
$lang['label_Label']									= "Étiquette";  // As in "the word that describes a category" -- ex: The label of this field is the word that describes what the field is for.
$lang['label_Type']									= "Genre";  // As in "the kind of thing it is" -- ex: This field is of a text type. The type of this other field is a date.
$lang['label_Text']									= "Texte";  		// One of the types of field mentioned above. In this case a field that includes any kind of character.
$lang['label_Date']									= "Date";  		// One of the types of field mentioned above. In this case a field that represents a calendar date and time, to the second.
$lang['label_List']									= "Liste";  		// One of the types of field mentioned above. In this case a field that allows the user to choose elements in a list.
$lang['label_Picklist']								= "Liste Déroulante";  // One of the types of field mentioned above. In this case a field that allows the user to pick ONE elements from a list.
$lang['label_Number']								= "Nombre";  	// One of the types of field mentioned above. In this case a field that is numerical in value only.
$lang['label_Money']									= "Argent";  	// One of the types of field mentioned above. In this case a field that is numerical, with exactly two decimals.
$lang['label_Choices']								= "Liste des options";  // A description of a field type that allows the user to store alternatives to be chosen in a list.
$lang['label_Choices_sub']							= "Séparez chaque option avec une virgule"; // Instructions to the user to separate each option for the list with a comma (,) character.
$lang['label_Unique']								= "Unique";  // Description of a field choice that asks the user if the values recorded in the field in question must be unique.
$lang['label_Select']								= "Sélectionnez:";  // The word that appears as the initial selection (and thereby, as the instruction) in a pull-down menu.
$lang['custom_field_delete_popup']				= "Ce champ personnalisé sera supprimé, AINSI QUE TOUTES SES DONNÉES POUR TOUS LES CLIENTS.<br><br>
																Cette action NE PEUT PAS ÊTRE ANNULÉE!<br><br>
																Êtes-vous sûr de vouloir supprimer ce champ personnalisé?";
$lang['custom_field_delete_popup_pc']			= "Ce champ personnalisé sera supprimé, AINSI QUE TOUTES SES DONNÉES POUR TOUS LES CLIENTS.\n\n
																Cette action NE PEUT PAS ÊTRE ANNULÉE!\n\n
																Êtes-vous sûr de vouloir supprimer ce champ personnalisé?";
$lang['success_customer_fields']					= "Les modifications aux champs des clients ont été enregistrées avec succès.";
$lang['success_transaction_fields']				= "Les modifications aux champs de transactions ont été enregistrées avec succès.";
$lang['button_add_field']							= "Ajouter un nouveau champ personnalisé";

$lang['ID']												= "ID"; // Generic SHORT identifier for "Identification" (whether numeric or alpha-numeric)
$lang['generate_id_error']							= "Erreur lors de la génération d'un ID. Essayez de nouveau s'il vous plaît.";


// =========================
// ADDITIONAL TRANSLATIONS 19
// =========================
// Custom Modifications for BlackHawk
$lang['customer_not_registered'] 				= "Ce client n'est pas encore inscrit";


// =========================
// ADDITIONAL TRANSLATIONS 20
// =========================
$lang['label_Searchable']							= "&nbsp;Est&nbsp;ID&nbsp;";  // Description of a field choice that asks the user if the values stored in this field can be used to pull up customers in campaigns where a customer is not registered.
$lang['orig_amount']									= "Montant Init.";
$lang['DB_Timestamp']								= "Horodatage DB";

$lang['depreciation_expired']						= "Expiré";
$lang['depreciation_short']						= "Expiré";  // The header of a NARROW column that shows the percentage of the points that has expired or depreciated.
$lang['preferences_depreciation_header']		= "Dépréciation";
$lang['preferences_depreciation_none']			= "Aucune dépréciation déterminées.";
$lang['edit_depreciation_add']					= "Ajouter une dépréciation";
$lang['edit_depreciation_add_another']			= "Ajouter une autre dépréciation";
$lang['edit_depreciation_type_prompt']			= "Genre de dépréciation:";
// Original: $lang['edit_depreciation_type_T']				= "Per transaction, based on the date of each transaction";
$lang['edit_depreciation_type_T']				= "Pour chaque montant obtenu, la dépréciation est appliqué quel que soit les activités ultérieures";
// Original: $lang['edit_depreciation_type_L']				= "On the balance, based on the date of the last transaction";
$lang['edit_depreciation_type_L']				= "Quelque activité réinitialisera le <<temporisateur>> de la dépréciation du solde courant";
$lang['edit_depreciation_longevity']			= "Les montants se déprécirons après:";
$lang['edit_depreciation_percentage']			= "par:";
$lang['depreciation_interval_too_small']		= "Le montant inscrit doit être au moins 1";
$lang['depreciation_percentage_too_small']	= "Le montant inscrit doit être supérieur à 0";
$lang['api_error_depreciation_exists']			= "Une dépréciation pour le même intervalle de temps existe déjà.";
$lang['report_expiration']							= "Date d'expiration";
$lang['report_depreciation']						= "Dépréciation";
$lang['preferences_recurring_fee_header']		= "Taxes récurrentes";
$lang['edit_recurring_fee_interval']			= "Tous les";
$lang['edit_recurring_fee_amount']				= "déduir";
$lang['edit_recurring_fee_description']		= "pour la raison suivante:";
$lang['edit_recurring_fee_add']					= "Ajouter une taxe récurrente";
$lang['edit_recurring_fee_add_another']		= "Ajouter une autre taxe récurrente";
$lang['preferences_recurring_fee_none']		= "Auncune taxe récurrente définie";
$lang['recurring_fee_too_small']					= "Le montant inscrit doit être supérieur à 0";


// =========================
// ADDITIONAL TRANSLATIONS 21
// =========================
$lang['transactions_not_visible']				= "Aucune transactions visibles";
$lang['section_account_copy']						= "Copier les paramètres?";
$lang['section_account_copy_sub']				= "Sélectionnez un autre compte pour copier ses paramètres. Sinon, laissez la liste déroulante en blanc.";
$lang['account_to_copy_from_label']				= "Copier les paramètres de:";
$lang['error_copy_from_missing_agency']		= "Il manque le jeton d'agence";
$lang['error_copy_from_wrong_account']			= "Le compte n'appartient pas à l'agence";





















// ==========================
// The following translations are here because they require other trnaslations,
// and thus need to be declared only AFTER all their components have been previously declared.
// ==========================
$lang['manage_import_trans_instrctns']	= "<b>Afin d'importer une liste de transactions (préconverties):</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">Spécifiez de quelle façon et dans quel ordre chacune des colonnes est séparée en utilisant le menu déroulant ci-dessous.</li>
												<li style=\"padding-bottom: 5px;\">Assurez-vous que les transactions 'Echange' aient un '<b>Y</b>' dans la colonne 'Redeem Event' et qu'elles soient introduites en forme de <b><i>valeures POSITIVES</i></b>.</li>
												<li style=\"padding-bottom: 5px;\">Assurez-vous de sélectionner une colonne '<b>Objet Acheté</b>' si vous importez des transactions pour une campagne '<b>Achetez X, Recevez-en Un Gratuit</b>'.</li>
												<li style=\"padding-bottom: 5px;\">Si aucune date n'est inclue, la transaction sera enregistrée avec la date d'aujourd'hui.<br>
													Les dates peuvent apparaître dans un des formats suivants <i>(Les années doivent constituer de 4 chiffres)</i>:<br>
													<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre></li>
												<li style=\"padding-bottom: 5px;\">".$lang['manage_import_trans_instrctns_2']."</li>
												<li style=\"padding-bottom: 0px;\">Copiez et collez votre liste dans la grande case ci-dessous.</li>
											</ol>";




// ----------------------------------
// END OF FILE
?>
