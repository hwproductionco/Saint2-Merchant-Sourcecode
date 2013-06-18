<?php
/* =======================
   TRANSLATION NOTES
==========================
This is the American English language file

For a best experience translating this file, use a color-coding text editor, like:
     - BBEdit <http://www.barebones.com/> (Mac)con
     - jEdit <http://www.jedit.org/> (Unix, PC)
     - PHP Editor <http://www.dzsoft.com/php-editor.html> (PC)

To edit or modify this file, simply replace the word, phrase,
text, or HTML code in between the doulbe quote (") marks.i

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
	$lang['currency']								= "Türk Liras&#305;";
}
if (!isset($lang['currency_plural'])) {
	$lang['currency_plural']					= "Türk Liras&#305;";
}
if (!isset($lang['currency_symbol'])) {
	$lang['currency_symbol']					= "TL";
}
if (!isset($lang['currency_100th'])) {
	$lang['currency_100th']						= "Kuru&#351;";
}
if (!isset($lang['currency_100th_plural'])) {
	$lang['currency_100th_plural']			= "Kuru&#351;";
}
if (!isset($lang['currency_100th_symbol'])) {
	$lang['currency_100th_symbol']			= "¢";
}



// Single words and labels
// (Pay attention to capitalization)
$lang['col_1']							= "1";  		// Header for column 1 of Berichts and bookmarks sections
$lang['col_2']							= "2";  		// Header for column 2 of Berichts and bookmarks sections
$lang['col_3']							= "3";  		// Header for column 3 of Berichts and bookmarks sections
$lang['Account']						= "Hesap";  	// Noun: As in "a collection of transactions". Ex: "Click here to view this customer's account."
$lang['Activate']						= "Etkinle&#351;tirmek";  	// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "Etkinle&#351;tirme";	// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "&#304;&#351;lem";  	// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "Eklenmi&#351;";  	// Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']					= "+";			// The mathematical symbol for addition
$lang['All']							= "Her";  		// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "Toplam";  	// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "ve";  		// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']						= "Yetki"; // Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "Kullan&#305;labilinir";  // As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "Bakiye"; 	// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['Balances']						= "Bakiyeler";	// Plural
$lang['By']								= "göre"; 		// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "Kampanya";	// As in a marketing campaign, but in this case, really meaning a "program" as in "loyalty program",
														// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "Kampanyalar";	// Plural
$lang['Country']						= "Ülke";	// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "Mü&#351;teriler";	// As in people who purchase goods or services from the a business that uses the StickyStreet service.
$lang['Date']							= "Tarih";		// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "Günler";		// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "Demo";		// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']						= "Tasvir"; // Ex: "Provide a description of the transaction in this box:"
$lang['Employee']						= "Çal&#305;&#351;anlar";	// As in a person that works for a business or organization.
$lang['Earned']							= "Biriktirilmi&#351;";		// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "Hata Bildirisi";		// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "Olay";		// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a .
$lang['events']							= "Olaylar";
$lang['Event']							= "Olay";
$lang['Events']							= "Olaylar";
$lang['from']							= "-den";		// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "Bedelsiz";		// As if "no need to pay" or "no charge". Ex: "StickyStreet is free when you have 10 or less customers.
$lang['Hello']							= "Merhaba";		// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "&#304;nfo";		// Short for "information".
$lang['Level']							= "Kademe";		// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "Talep";	// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']					= "x";			// The mathematical symbol for multiplication
$lang['Need']							= "Gerekmek";		// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "Hiçbir";			// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "Hiçbir";		// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "Not";		// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "Notlar";		// Plural of "Note", above
$lang['Online']							= "Online";		// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "Operasyon";  // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['or']								= "Veya";			// As in "either", between two alternatives. Ex: "this or that".
$lang['point']							= "Puan";		// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['Paid']							= "Ödendi";		// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['points']							= "Puanlar";
$lang['Point']							= "Puan";
$lang['Points']							= "Puanlar";
$lang['per']							= "Her";		// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Purchased']						= "Al&#305;nd&#305;";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Ratio']							= "Oran";		// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']					= "taraf&#305;ndan kaydedildi"; // As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "Bedelini ödedi"; 	// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "Ref"; 		// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Report']							= "Rapor"; 	// As in "Relatory", or "Presentation".
$lang['Reward']							= "Kar&#351;&#305;l&#305;k"; 	// As in a thing that can be claimed after certain conditions have been met. Ex: "The reward for having 1000 points is a free widget."
$lang['Rewards']						= "Kar&#351;&#305;l&#305;klar"; 	// Plural
$lang['Role']							= "Rol";		// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Thank-you']						= "Te&#351;ekkürler";	// As in "Thank-you for your business" - said by the Client to a Customer.
$lang['Tip']							= "&#304;pucu";		// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "Kadar";			// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "Almak için"; 	// As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['To_Get_One_Of']					= "Ondan bir tane almak için"; 	// As in "to receive" or "to be given" a single quantity. Ex: "You need to buy 10 coffees to get one of [the same] free"
$lang['Trans_ID']						= "Trans. ID"; 	// Short for "Transaction ID" - Referring to an internal StickyStreet number to reference a particular transaction.
$lang['Transaction']					= "&#304;&#351;lem"; // A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']					= "&#304;&#351;lemler"; // Plural
$lang['User']							= "Kullan&#305;c&#305;"; 		// As in an employee of the business or organization that can login to use the StickyStreet service.
$lang['Yes']							= "Evet";

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."-".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "Kampanya Eklemek";
$lang['title_add_product_service']		= "&#304;çin Ürün/Servis Eklemek";
$lang['title_add_promotion']			= "&#304;çin Promosyon Eklemek";
$lang['title_add_reward']				= "için kar&#351;&#305;l&#305;k eklemek";
$lang['title_add_user']					= "Kullan&#305;c&#305; Eklemek";
$lang['title_amnesia'] 					= "Logini Veya &#350;ifreyi Unutmak";
$lang['title_award_reddeem'] 			= "Ödül Bedelini Almak";
$lang['title_create_new_account']		= "Yeni Hesap Açmak";
$lang['title_default']					= "Hediye Ve Ba&#287;l&#305;l&#305;k &#304;&#351;letme Yönetimi";
$lang['title_edit_account']				= "Hesap Ve Bilgileri Düzenlemek";
$lang['title_edit_account_number']		= "Hesap Numaras&#305;n&#305; Düzenlemek";
$lang['title_edit_campaign']			= "&#304;çin Ayarlar&#305; Düzenlemek";
$lang['title_edit_product_service']		= "&#304;çin Ürünü/Servisi Düzenlemek";
$lang['title_edit_promotion']			= "&#304;çin Promosyonu Düzenlemek";
$lang['title_edit_reward']				= "&#304;çin Kar&#351;&#305;l&#305;&#287;&#305; Düzenlemek";
$lang['title_edit_user']				= "Kullan&#305;c&#305;y&#305; Düzenlemek";
$lang['title_find_add']					= "-de Hesab&#305; Bulmak Veya Eklemek";
$lang['title_login'] 					= "Hesap Login";
$lang['title_more_r_and_e_banners'] 	= "Daha Çok Tavsiye Ve Earn Rewards Banners";
$lang['title_r_and_e_balance']			= "Your Refer and Earn Rewards Balance";
$lang['title_report_all_trans']			= "Bütün &#304;&#351;lemlerin Raporu";
$lang['title_report_freq_cust']			= "S&#305;k Mü&#351;terilerin Raporu";
$lang['title_report_miss_cust']			= "Bulunmayan Mü&#351;terilerin Raporu";
$lang['title_report_new_cust']			= "Yeni Mü&#351;terilerin Raporu";
$lang['title_report_redeem_trans']		= "Bedeli Ödenmi&#351; &#305;&#351;lemlerin Raporu";
$lang['title_report_totals']			= "Toplam&#305;n Raporu";
$lang['title_search_result']			= "Arama Sonucu";
$lang['title_trans_del']				= "&#305;&#351;leme Silindi";
$lang['title_trans_rec'] 				= "&#305;&#351;leme Kaydedildi";
$lang['title_view_account']				= "Hesab&#305; Göster";

// Side Modules
// Module 1
$lang['side_news_header'] 				= "";
$lang['side_news_text']					= "";
// Support Module
$lang['side_support_links']				= "<span style=\"color:#79B216;\">Support</span> Links";
$lang['side_support_desk_describe']		= "Bilgi data base'imizde sorular&#305;n&#305;za cevap bulabilirsiniz ve sorular&#305;n&#305;z&#305; bize yönlendirebilirsiniz.";
// $lang['side_blog_describe']				= "For announcements, tips, and a point of view, visit our"; // ... blog
// $lang['side_support_email_call']		= "Email a support request directly or call:";
// $lang['side_support_phone']				= "<span style=\"font-weight: bold;\">866-780-STICKY</span> <span style=\"color: #888; font-size: 80%;\">(7842)</span>";
// $lang['side_loyalty_link_desc']			= "Bring them back to your site with Online Enrollment and Balance Lookup";
// $lang['side_points_calc_desc']			= "A tool to help you figure out your reward levels";


// Destinations / Section names
$lang['section_account_control_panel']	= "Hesap Denetimi";
$lang['section_account_info_header']	= "Hesap Bilgileri";
$lang['section_account_login']			= "Hesap Login";
$lang['section_account_new']				= "Hesap Açmak";
$lang['section_blog']						= "Blog";
$lang['section_campaign_reports']		= "Kampanya Raporlar&#305;";
$lang['section_customer_account']		= "Mü&#351;teri Hesab&#305;";
$lang['section_loyalty_link_inst']		= "LoyaltyLink Talimatlar&#305;";
$lang['section_points_calculator']		= "Puan Hesaplay&#305;c&#305;s&#305;";
$lang['section_points_promotions']		= "Promosyonlar";
$lang['section_support_desk']				= "Yard&#305;m";

// Labels
$lang['label_account_id']					= "Hesap ID";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']				= "Hesap Sahibi";			// The person who created a StickyStreet account.
$lang['label_additional_info']			= "Ek Bilgiler";			// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info_user']		= "Ek Bilgiler";
$lang['label_card']							= "Kart #";					// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']							= "Yer";
$lang['label_date_range']					= "Tarih Tercihi";				// Ex: January 2008 to December 2008
$lang['label_email']							= "E-Mail Adresi";
$lang['label_email_short']					= "E-Mail";
$lang['label_first_name']					= "Ad";				// As in "given name". ie: not the one shared by their family.
$lang['label_last_name']					= "Soyad&#305;";				// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_name']							= "&#304;sim";					// The joining of first and last names.
$lang['label_organization']				= "Organizasyon";			// As in a business, church, school, club, etc.
$lang['label_owner_id']						= "Sahip ID";				// A unique login name that identifies the user as the account owner.
$lang['label_password']						= "&#350;ifre";
$lang['label_password_new']				= "Yeni &#350;ifre";
$lang['label_password_retype_short']	= "&#350;ifreyi Tekrarla";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "Yeni &#350;ifreyi Tekrarla";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']							= "Telefon Numaras&#305;";
$lang['label_state']							= "Elayet / Vilayet";
$lang['label_user_id']						= "Kullan&#305;c&#305; ID";				// A unique login name that allows an employee of a StickyStreet client to access the program.
$lang['label_zip']							= "Posta Kodu";

// Navigation
$lang['nav_active']						= "Aktif";			// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "Eklemek";			// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "&#304;ptal Etmek";			// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']					= "De&#287;i&#351;tir";		// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']					= "Kapatmak";  	// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "Ç&#305;karmak";  		// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "Silmek";			// Verb: As in "remove" or "erase". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']				= "Hepsini &#304;&#351;aretlemeyi Sil";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "Tamam";			// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "Düzenlemek";			// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "Aramak";			// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "B&#304;T&#304;RMEK";			// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "T&#305;kla";				// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "Gizlemek";			// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']					= "T&#305;kla:"; 		// As in changing screens, pages, or location.
$lang['nav_log_in']						= "Login";			// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "Logout";			// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "Bulmak";			// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "&#304;leri";			// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']					= "On Hold";		// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "Print Etmek";			// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']				= "Özeti Print Etmek";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']				= "Re-activate";	// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "Kaydetmek";			// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "Bedelini Almak";			// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "Silmek";			// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "Geri";			// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "Göstermek";			// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']				= "De&#287;i&#351;imleri Kaydet";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']					= "Hepsini &#304;&#351;aretle";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "Belirlemek";			// Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "1. Ad&#305;m";			// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "2. Ad&#305;m";
$lang['step3']							= "3. Ad&#305;m";
$lang['step4']							= "4. Ad&#305;m";

// Login Screen
$lang['login_amnesia_prompt']			= "Kullan&#305;c&#305; ID'nizi veya &#351;ifrenizimi unuttunuz?";
$lang['login_amnesia_button']			= "&#350;imdi yeniden bulun!";
$lang['login_email_missing']			= "Lütfen hesab&#305;n&#305;z&#305;n e-mail adresini yaz&#305;n&#305;z:";
$lang['login_fancy_1']					= "Hesap";
$lang['login_fancy_2']					= "Login";
$lang['login_new_account_prompt']		= "Hesab&#305;n&#305;z yok mu?";
$lang['login_new_account_button']		= "&#350;imdi yaz&#305;l&#305;n!";
$lang['login_password_missing']			= "Lütfen &#351;ifrenizi yaz&#305;n&#305;z";
$lang['login_userid_missing']			= "Lütfen hesap IDnizi yaz&#305;n&#305;z";
$lang['login_wrong_password']			= "Yazd&#305;&#287;&#305;n&#305;z &#351;ifre kay&#305;tdakiyle uymuyor.";
$lang['login_wrong_user_id']			= "Yazd&#305;&#287;&#305;n&#305;z kullan&#305;c&#305; ID'si bulunmad&#305;.<br>(Küçük/büyük harf ile yaz&#305;l&#305;&#351;a dikkat.)";

// Forgot Password / Username section;
$lang['amnesia_header']					= "Biraz unutkanl&#305;k durumumu var?";
$lang['amnesia_note_top']				= "Spam filtreleri hakk&#305;nda not:";
$lang['amnesia_note_text']				= "E&#287;er önümüzdeki dakikalarda size bizden e-mail gelmezse, lütfen spam filtrenizi kontrol ediniz.
											E-Maili Gönderen"; /* StickyStreet or the name of the Agency. */
$lang['amnesia_password_button']		= "&#350;ifremi Gönder";
$lang['amnesia_password_dir']			= "Kullan&#305;c&#305; ID'nizi a&#351;aya yaz&#305;n&#305;z ve biz size &#351;ifrenizi bizde kay&#305;tl&#305; e-mail adresinize yolliyaca&#287;&#305;z.";
$lang['amnesia_password_header']		= "&#350;ifrenizi mi unuttunuz?";
$lang['amnesia_password_sent']			= "Mükemmel!<br><br>&#350;ifreniz bu hesab&#305;n e-mail adresine gönderildi.";
$lang['amnesia_return_button']			= "Login'e geri dön";
$lang['amnesia_sub_header']				= "Endi&#351;elenmeyin, size yard&#305;mc&#305; olabiliriz... &#304;sminizi hat&#305;rliyormusunuz?";
$lang['amnesia_user_id_button']			= "Kullan&#305;c&#305; ID mi gönder";
$lang['amnesia_user_id_dir']			= "E-mail adresinizi a&#351;aya yaz&#305;n&#305;z ve biz size buna dahil olan tüm hesap ID'leri gönderelim:";
$lang['amnesia_user_id_header']			= "Hesap ID'nizi mi unuttunuz?";
$lang['amnesia_userid_sent']			= "Mükemmel!<br><br>Hesap ID'niz bildirdiniz e-mail adresine gönderildi.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "veya daha az mü&#351;teri hesaplar&#305;"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "Organizasyonunuzun ismini yaz&#305;n&#305;z."; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "Geçerli bir e-mail adresi bildirmek zorundas&#305;n&#305;z.";
$lang['account_email_needed_2']			= "Bu &#351;ekilde sizi hesab&#305;n&#305;zdaki ve hesaplama düzeyindeki de&#287;i&#351;iklikler hakk&#305;nda haberdar ederiz.";
$lang['account_enter_first']			= "Lütfen ad&#305;n&#305;z&#305; bildirin.";
$lang['account_enter_last']				= "Lütfen soyad&#305;n&#305;z&#305; bildirin.";
$lang['account_id_empty']				= "Bir hesap ID'si seçmek ve bildirmeniz gerekli.";
$lang['account_id_exists']				= "Bu hesap ID'si ba&#351;kas&#305; taraf&#305;ndan kullan&#305;l&#305;yor bile.<br>Lütfen ba&#351;ka bir tane seçiniz.";
$lang['account_id_not_valid']			= "Bir hesap ID'si sadece harflerden, numaralardan ve altçizgilerden (_) olusturulabilinir.";
$lang['account_terms_agree']			= "Yukar&#305;daki i&#351; ko&#351;ullar&#305;n&#305; kutuyu t&#305;klayarak onaylaman&#305;z gerekli.";
$lang['account_new_create_button']		= "Hesap aç&#305;n";
$lang['account_new_directions']			= "Ba&#351;lay&#305;n sadece a&#351;a&#287;adaki formu doldurarak ve hesap açarak:";
$lang['account_new_end']				= "&#304;&#351;te bukadar!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "Bize kendiniz hakk&#305;nda bir&#351;ey anlatiniz";
$lang['account_new_owner_id']			= "Bir sahip ID'si seçiniz";
$lang['account_new_owner_restrict']		= "En fazla 20 i&#351;aret, bo&#351;luk kullanmadan";
$lang['account_new_owner_user_id']		= "Bir kullan&#305;c&#305; ID'si seçiniz";
$lang['account_new_password']			= "Hesab&#305;n&#305;z için bir &#351;ifre seçiniz.";
$lang['account_new_password_restrict']	= "5den 20 i&#351;arete kadar, sadece harfler ve numaralardan olusan";
$lang['account_new_phone_dir']			= "'+' ile baslayiniz e&#287;er ABD d&#305;&#351;&#305;nda bulunuyorsaniz.";
$lang['account_new_step1_greet']		= "Tebrikler, yeni bir hesap açtiniz.";
$lang['account_new_step1_dir']			= "Biz size &#351;imdi gelecek dört ad&#305;mda eslik edecegiz:";
$lang['account_new_step1_1']			= "Ba&#287;l&#305;l&#305;k kampanyas&#305; ve hediye kart kampanyas&#305; olusturmasi.";
$lang['account_new_step1_2']			= "&#304;htiyaçlar&#305;n&#305;za göre uyarlayin.";
$lang['account_new_step1_3']			= "Bir mü&#351;teri i&#351;lemini ekleyin.";
$lang['account_new_step1_4']			= "Hesap denetimine geri dönünüz.";
$lang['account_referred']				= "E&#287;er size tavsiyede bulunulduysa, kim taraf&#305;ndan?";
$lang['account_referred_dir']			= "&#304;sim, organizasyon veya tavsiye kodu.";
$lang['account_referrer_record']		= /* The referred business */ "bir bedava hesap için kay&#305;tlanm&#305;&#351;t&#305;r";
$lang['account_terms_conditions_dir']	= "Genel i&#351; ko&#351;ullar&#305;n&#305; onaylamak için, onlar&#305; okuyunuz ve t&#305;klayarak kabul ediniz."; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "Kullan&#305;m için genel i&#351; kosullari";
$lang['account_terms_conditions_agree']	= "Ben genel i&#351; ko&#351;ullar&#305;n&#305; kabul ediyorum";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "&#304;&#351; Bilgileri";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= "Adres:";
$lang['account_label_billing_level']	= "Hesap Kademesi:";
$lang['account_label_biz_name']			= "&#304;&#351; &#304;smi:";
$lang['account_label_biz_address1']		= "1. Adres Sat&#305;r&#305;:";
$lang['account_label_biz_address2']		= "2. Adres Sat&#305;r&#305;:";
$lang['account_label_custom_fee']		= "Belirli Aylik Ücreti";
$lang['account_label_customers']		= "Mü&#351;teriler";
$lang['account_label_customers_manage']	= "Mü&#351;teri Bilgilerini Yönetmek";
$lang['account_label_free']				= "Bedava"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "Hesap Sahibi";
$lang['account_label_owner_contact']	= "Sahibin &#304;letisim Bilgileri:";
$lang['account_label_pay_invoices']		= "Hesaplara Bakmak / Ödemek";
$lang['account_label_per_month']		= "/ Ayl&#305;k";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "Sahip Login";
$lang['account_password_missing']		= "&#350;ifreniz bagdasmiyor: Lütfen yeni &#351;ifreyi her iki kutuya yaz&#305;n&#305;z.";
$lang['account_passwords_mismatch']		= "Yazd&#305;&#287;&#305;n&#305;z yeni &#351;ifre bagdasmiyor.<br>Lütfen yeniden her iki kutuya yaz&#305;n&#305;z.";
$lang['account_owner_sec_token']		= "API access Security Token";

// Control Panel
$lang['cp_step_dir_header']				= "Hepsi tamamland&#305;!";
$lang['cp_step_dir']					= "Bu login'den sonra basliyacaginiz \"Control Panel\".<br>Burda hesab&#305;n&#305;z&#305;n tüm ayarlar&#305;n&#305; yönetebilirsiniz.";
$lang['cp_campaigns_table_header_1']	= "Kampanya &#304;smi";
$lang['cp_campaigns_table_header_2a']	= "Kampanya";	// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']	= "Mü&#351;teriler";	// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']	= "Kampanya";		// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']	= "&#304;&#351;lemler";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']	= "Kampanya";	// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']	= "Durumu";		// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']	= "Kampanya";		// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']	= "Tercihleri";	// This is the bottom line of the english phrase "Campaign Preferences"

// Create / Edit User
$lang['user_campaigns_header']			= "Lütfen bu kullan&#305;c&#305;n&#305;n hangi kampanyalara giri&#351; hakk&#305;na sahip oldu&#287;unu seçiniz:";
$lang['user_campaigns_admins']			= "Administratörler otomatikman tüm kampanyalara giri&#351; hakk&#305;na sahip";
$lang['user_edit_header']					= "Kullan&#305;c&#305;y&#305; düzenlemek:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "&#350;ifreyi De&#287;i&#351;tirmek";
$lang['user_edit_password2_label']		= "Lütfen &#351;ifreyi Tekrarlayiniz";
$lang['user_edit_password_note']			= "Ayn&#305; &#351;ifreyi kullanmak için, lütfen buray&#305; bo&#351; b&#305;rak&#305;n&#305;z.";
$lang['user_edit_record_change_card']	= /* The Card # */ "yerine de&#287;i&#351;tirildi:"; /* a new Card # */
$lang['user_edit_record_change_name']	= "&#304;sim De&#287;i&#351;mesi";
$lang['user_edit_record_del_card']		= /* The Card # */ "Silindi";
$lang['user_edit_record_new_card']		= "Yeni bir kart # belirlendi:";
$lang['user_edit_record_change_phone']	= "Telefonu # buna de&#287;i&#351;tir";
$lang['user_edit_record_replace_phone']= "Telefonu # bundan de&#287;i&#351;tir";
$lang['user_edit_record_to_none']		= "Bilinmiyor"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']	= "E-Maili buna de&#287;i&#351;tir";
$lang['user_edit_record_replace_email']= "E-Maili bundan de&#287;i&#351;tir";
$lang['user_edit_record_change_addtl']	= "Ek bilgi buna de&#287;i&#351;tirildi";
$lang['user_edit_record_del_addtl']		= "Ek bilgi ç&#305;kart&#305;ld&#305;. Pesin olarak.";
$lang['user_edit_record_replace_addtl']= "Ek bilgi bundan de&#287;i&#351;tirildi";
$lang['user_info_sub_header']				= "Kullan&#305;c&#305; Bilgileri";
$lang['user_new_header']					= "Yeni Kullan&#305;c&#305;lar";
$lang['user_new_id_empty']					= "Yeni bir kullan&#305;c&#305; kaydetmek için bir kullan&#305;c&#305; ID gerekiyor.";
$lang['user_new_id_not_valid']			= "Bir kullan&#305;c&#305; ID sadece harfler, numaralar veya bir alt çizgi (_) içere bilir";
$lang['user_new_id_exists']				= "Sizin seçti&#287;iniz kullan&#305;c&#305; ID kullan&#305;l&#305;yor bile.<br> Lütfen ba&#351;ka bir tane seçiniz.";
$lang['user_new_no_role']					= "Bu kullan&#305;c&#305; için bir rol seçmeniz gerekiyor:";
$lang['user_new_password_label']			= "Bu kullan&#305;c&#305;ya bir yeni &#351;ifre seçiniz";
$lang['user_new_record_button']			= "Yeni Kullan&#305;c&#305; Bilgileri";
$lang['user_new_user_id_label']			= "Login için bir kullan&#305;c&#305; ID seçiniz";
$lang['user_restrict_20_char']			= "En Fazla 20 &#304;&#351;aret";
$lang['user_role_header']					= "Kullan&#305;c&#305; Rolü";
$lang['user_role_directions']				= "Lütfen bu kullan&#305;c&#305; için bir rol seçiniz";

// Users: Common actions:
$lang['user_add_button']				= "Yeni Kullan&#305;c&#305; Eklemek";
$lang['user_delete_popup']				= "<strong>Bu kullan&#305;c&#305; sizin kullan&#305;c&#305; listenizden silinecek ve ar&#351;ivlenecek.</strong><br>
											Bu kullan&#305;c&#305; ID yeni bir kullan&#305;c&#305;n&#305;n IDsi olarak tekrar kullan&#305;lamaz.<br>
											<br>
											Ar&#351;ivlenmi&#351; bir kullan&#305;c&#305;y&#305; tekrar bulmak için, bizimle temas kurunuz. Bu hizmet ücretlidir.<br>
											<br>
											<strong>Bu kullan&#305;c&#305;y&#305; silmek istedi&#287;inizden emin misiniz?</strong>";
$lang['user_delete_popup_pc']			= "Bu kullan&#305;c&#305; sizin yetkili kullan&#305;c&#305; listenizden silinecek ve ar&#351;ivlenecek.\n\n
											Bu kullan&#305;c&#305; ID yeni bir kullan&#305;c&#305;n&#305;n IDsi olarak tekrar kullan&#305;lamaz.\n\n
											Ar&#351;ivlenmi&#351; bir kullan&#305;c&#305;y&#305; tekrar bulmak için, bizimle temas kurunuz. Bu hizmet ücretlidir.\n\n
											Bu kullan&#305;c&#305;y&#305; silmek istedi&#287;inizden emin misiniz?";
$lang['user_header']					= "Kullan&#305;c&#305;lar&#305; Ve Yetkilerini Yönetmek";
$lang['user_list_none']					= "&#350;imdiye dek yeni mü&#351;teriler eklenmedi.";
$lang['user_role_A']					= "Administratör";
$lang['user_role_A_desc']				= "Her&#351;eye giri&#351; hakk&#305;na sahip.";
$lang['user_role_C']					= "Muhasebeci";
$lang['user_role_C_desc']				= "Raporlar üretebilir, faturalar&#305; ve kampanya ayarlar&#305;n&#305; görebilir, ama kullan&#305;c&#305; ve mü&#351;teri bilgilerini göremez.";
$lang['user_role_K']					= "Çal&#305;&#351;anlar";
$lang['user_role_K_desc']				= "Yetkili oldu&#287;u kampanyalar içinde mü&#351;teri bilgilerini kaydedebilir ve de&#287;i&#351;tirebilir (ama kart # de&#287;i&#351;tiremez,
											e&#287;er belirlenmi&#351;se) ve sadece mü&#351;teri ziyaretlerini kaydedebilir ve denkle&#351;tirebilir (ama silemez.)";
$lang['user_role_M']					= "Menecer";
$lang['user_role_M_desc']				= "Yetkili oldu&#287;u kampanyalar içinde her&#351;eye giri&#351; hakk&#305;na sahip ve hesap ile ilgili ayarlara s&#305;n&#305;rl&#305; giri&#351; hakk&#305;na sahip
											(Fatura bilgilerini görebilemez, raporlar üretebilir ve mü&#351;teri ekleyebilir veya de&#287;i&#351;tirebilir ama mü&#351;teri hesaplar&#305;n&#305; silemez.)";
$lang['user_role_N']					= "Kampanya Meneceri";
$lang['user_role_N_desc']				= "Yetkili oldu&#287;u kampanyalar içinde her&#351;eye giri&#351; hakk&#305;na sahip ve hesap ile ilgili ayarlara s&#305;n&#305;rl&#305; giri&#351; hakk&#305;na sahip
											(Raporlar üretebilir, fatura bilgilerini görebilemez, kullan&#305;c&#305;lar&#305; yönetebilemez, kampanya üretebilemez veya silebilemez.)";
$lang['user_role_O']					= "Gözlemci";
$lang['user_role_O_desc']				= "Kullan&#305;c&#305;, mü&#351;teri bilgilerini ve belirli kampanya ayarlar&#305;n&#305; görebilir (kar&#351;&#305;l&#305;klar ve promosyonlar.)";
$lang['user_role_P']					= "Muvakkati Çal&#305;&#351;an";
$lang['user_role_P_desc']				= "Yetkili oldu&#287;u kampanyalar içinde sadece yeni mü&#351;teriler ve mü&#351;teri ziyaretlerini kaydedebilir.";
$lang['user_role_S']					= "Yard&#305;mc&#305; Menecer";
$lang['user_role_S_desc']				= "Yetkili oldu&#287;u kampanyalar içinde kar&#351;&#305;l&#305;klar ve promosyonlar yönetebilir, ve tüm mü&#351;teri bilgileri ve mü&#351;teri ziyaretleri görü&#351;lerini yönetebilir.";

// Create New Campaign
$lang['campaign_new_create_button']		= "Kampanya Kaydetmek";
$lang['campaign_new_created_header']	= "Yeni Kampanya Kaydedildi";
$lang['campaign_new_created_msg']		= "<b>Tebrikler.</b><br>
											<br>
											Ba&#351;ar&#305;yla yeni bir kampanya kaydettiniz.<br>
											<br>
											Devam olarak bu kampanya için ayarlar&#305;<br>
											i&#351; ko&#351;ullar&#305;n&#305;za göre uyarlamal&#305;s&#305;n&#305;z:";
$lang['campaign_new_created_prefs']		= "Burdan Devam";
$lang['campaign_new_created_back_cp']	= "Control Panel hesab&#305;na geri dön";
$lang['campaign_new_empty']				= "Bir kampanya ismi kaydetmeniz gerekiyor:";
$lang['campaign_new_exists']			= "Kaydettiniz kampanya IDsi var bile.<br>Lütfen ba&#351;ka bir kampanya IDsi kaydediniz";
$lang['campaign_new_header']			= "Yeni Kampanya";
$lang['campaign_new_name']				= "&#350;imdi bir kampanya ismi kaydediniz:";
$lang['campaign_new_name_restrict']		= "(en fazla 30 i&#351;aret, bo&#351;luk kullanarak)";
$lang['campaign_new_step_dir']			= "&#304;lk kampanyan&#305;z&#305; kaydediniz:";
$lang['campaign_new_sub_header']		= "&#304;lk olarak kampanya tipini seçiniz:";
$lang['campaign_new_type_empty']		= "Bir kampanya tipi seçmeniz gerekiyor:";
$lang['campaign_new_buyx_desc']			= "Bu kampanya tipi ka&#287;&#305;tdan damga kartlar&#305;n&#305;n yerine geçiyor ve bu yüzden çok daha uyum sa&#287;l&#305;yabiliyor. Bu kampanya tipi size mü&#351;terilerinizi her hangi belirli bir say&#305; farkl&#305; ürünler, ürün kategorileri veya hizmetleri nedeniyle, ödüllendirmenizi sa&#287;l&#305;yor.<br>
											<br>
											Kahvehaneler ve belirli miktar ürün veya ürün tipleri sunan her &#351;ekilde ma&#287;azalar için çok uygun. (Örne&#287;in: 10 tane kahve alana sonraki bir tanesi bedava, 3 tane tas alana 4üncü tas hediye, vs. &#304;stedi&#287;iniz kadar 'X' tane al ve bir tane bedava promosyonlar&#305; belirleyin.)
											Bu tip kampanyalar, üstünde belirli say&#305;da dörtgenler bulunan ve bir hizmeti veya ürünü bedava almadan önce, tüm dörtgenleri mühürletmek gerektiren, ka&#287;&#305;tdan kartlar &#351;eklinde kullan&#305;l&#305;yor.
											Bu kampanya tipi size ayn&#305;s&#305;n&#305; kart bast&#305;rtmak (ve kaybolmu&#351; kartlar ile ilgilenmek) gereklili&#287;ini sa&#287;lamadan mümkün ediyor. Di&#287;er büyük avantaj, program&#305;n ne kadar mü&#351;teri kapsad&#305;&#287;&#305;n&#305; bilmeniz ve her zaman mü&#351;teri raporlar&#305; ç&#305;kartabilmenizdir.
											</br>
											<br>
											<b>Herhangi bir miktar ürüne veya ürün kategorisine belirli bir say&#305; verebilirsiniz, mü&#351;terinin o ürünü
											bedavaya alabilene kadar. Örne&#287;in:</b><br>
											<li>10 defa saç kestirin, 11inci defa bedava olsun. </li>
											<li>8 kilogram hayvan yemeyi, 9uncusu bizden. </li>
											<li>8 dilim pasta, ondan sonraki dilim hediye. </li>
											<br>
											Standart bir say&#305; belirlemek de mümkün:<i>X ondan sonra gelen say&#305;lar bedava olmas&#305; için.</i> Böyle bir standart say&#305; ürünleri paket halinde sunmas&#305;n&#305;
											kolayla&#351;t&#305;r&#305;r,  her ürünün ayn&#305; say&#305;dan sonra bir tanesi bedavaysa.";
$lang['campaign_new_earn_event_desc']	= "Bir hediye kart&#305;n&#305;n ve etkinlik yaratan kampanyan&#305;n kar&#305;&#351;&#305;m&#305;: Bir kimseyi alacak hanesine kay&#305;t ile veya nakit para ile ödüllendirin,
											bu miktar&#305; her olayda (ma&#287;aza ziyareti, tavsiye, vs.) hesab&#305;na geçirerek ve gelecekte sizin ürün veya hizmetleriniz için sizin ma&#287;azan&#305;zda kullanabilmesi için.
											<br>
											<br>
											<b>Bu kampanya tipi ile &#351;öyle kampanya tipleri mümkündür:</b><br>
											<li>Ne kadar ".$lang['currency_plural']." bir olay veya ziyaret için hesaba geçti&#287;ini belirleyin</li>
											<li>&#304;stedi&#287;iniz herhangi bir miktar mü&#351;teri sadakat puanlar&#305;n&#305; kullan&#305;n, ayn&#305; bir hediye kart&#305;ndaki gibi</li>
											<br>
											<b>Bir kaç örnek</b>:
											<li>Tavsiye kampanyas&#305;: büyük &#351;irketlerin mü&#351;terilerine, hotel conciergelerine, resepsiyon çal&#305;&#351;anlar&#305;na, sizi tavsiye ettikleri mü&#351;teriler için ödüllendirin.
											</li>
											<li>Çal&#305;&#351;anlara veya sipari&#351; alanlara tekrarlanan i&#351; birlikleri için bir miktar ödeyin.</li>
											<li>VIP mü&#351;terilerinizi sizin ma&#287;azan&#305;zda harc&#305;yabilinen oyun para ile ödüllendirin.</li>
											<li>Çocuklar&#305;n&#305;za evde yard&#305;m ödülleri veriniz.</li>";
$lang['campaign_new_event-based_desc']	= "Bu kampanya tipi size ödüllendirmenizi ne kadar mü&#351;teri ziyaretiniz varsa ona göre yapman&#305;z&#305; sa&#287;l&#305;yor ve mü&#351;terilerinizin harcad&#305;klar&#305; miktara göre de&#287;il.
											<br>
											<br>
											Bu kampanya tipi genelde tavsiyelerde kullan&#305;l&#305;yor: Ma&#287;azan&#305;z bir kaç ayn&#305; numaral&#305; kartlar&#305; büyük bir &#351;irketten bir mü&#351;terinize, hotel concierge'ine veya resepsiyon çal&#305;&#351;an&#305;na veriyor.
											Yeni bir mü&#351;teri tavsiye nedeniyle sizin &#351;irketinize geldi&#287;inde ve size o kartlardan birini verdi&#287;inde, sizi tavsiye eden o ki&#351;iye sizden ayr&#305;ca bir mü&#351;teri ziyareti al&#305;yor.
											Örne&#287;in 5 tane ziyaretten sonra sizi tavsiye eden ki&#351;i ödüllendiriliyor. Sizin yeni mü&#351;terileriniz art&#305;yor. Herkes kazan&#305;yor. <br>
											<br>
											Bu sadece bir senaryo. &#304;nsanlar bir çok yarat&#305;c&#305; yol buldular, bu program&#305; kullanmak için. <br>
											<br>
											Bir etkinlik yaratan olay program&#305; size bu imkanlar&#305; sa&#287;lar:<br>
											<br>
											<b>÷düllendirme seviyeleri yaratmas&#305;n&#305;. Örne&#287;in:</b><br>
											<li>5 tane olay toplay&#305;n ve 10% indirim elde edinin</li>
											<li>10 tane ziyaret toplay&#305;n ve 50% indirim elde edinin</li>
											<li>20 tane tavsiye toplay&#305;n ve bir tane masaj elde edinin</li>
											<br>
											<b>Bir kaç örnek:</b><br>
											<li>Yukar&#305;da anlat&#305;lan gibi tavsiye kampanyalar&#305;.</li>
											<li> Çal&#305;&#351;ma Özellikleri Hakk&#305;nda Kitap Tutan Cimnastik Salonlar&#305;. </li>
											<li>Ürün Tamirlerinin Miktar&#305; Ürünü De&#287;i&#351;terene Kadar. </li>
											<li>VIP Club olarak kullan&#305;m&#305;.</li>
											<li>vs.... </li>";
$lang['campaign_new_gift_card_desc']	= "Bir hediye kampanyas&#305; size bir para miktar&#305;n&#305; verebilmeyi ve kullan&#305;mdan sonra yine küçültmeyi imkan ediyor.<br>
											<br>
											Basit ve kolay. Genelde plastikden ve belirli bir miktar para ile doldurulmu&#351; olan hediye kart&#305; ile beraber kullan&#305;l&#305;yor. Bu kart hediye veya pre-paid kart&#305; olarak kullan&#305;labiliniyor.
											<br>
											<br>
											<b>Plastikden kartlar laz&#305;m olmuyor.</b> Bu ba&#287;l&#305;l&#305;k program&#305; her önceden para b&#305;rakmak gereken yerde kullan&#305;labilinir.
											Abone, toplu ödeme, taksitle ödeme plan&#305;, çocuk indirimi... Fantezileriniz s&#305;n&#305;rs&#305;z olabilir.";
$lang['campaign_new_points_desc']		= "Mü&#351;terileriniz al&#305;&#351;veri&#351;lerine, ödemelerine veya bizim belirledimiz promosyonlara dayanarak puan topluyorlar.
											Puanlar mü&#351;terinin puan seviyesine göre ödenenebilir.<br>
											<br>
											Bir hava&#351;irketleri mil program&#305; gibi bir puan program&#305; size bunlari mümkün ediyor:<br>
											<br>
											<b>Belirli bir puan miktar&#305;n&#305; her harcad&#305;n&#305;z ".$lang['currency_plural']." ay&#305;r&#305;n. Örne&#287;in:</b><br>
											<li>5 puan her ".$lang['currency']." için</li>
											<li>.25 puan her ".$lang['currency']." için</li>
											<br>
											<b>Bonus seviyeleri belirleyin. Bir kaç örnek:</b><br>
											<li>1000 puan: Bir al&#305;&#351;veri&#351;e 50% indirim</li>
											<li>5000 puan: Bedava hediye</li>
											<li>100,000 puan: Disneyland'e bir seyahat.</li>
											<br>
											<b>Promosyonlar belirleyin. Bir kaç örnek:</b><br>
											<li>Sal&#305; günleri iki kat puan</li>
											<li>Erken reservasyon yapt&#305;ranlara 500 puan extra</li>
											<li>Hediye kart&#305; ile al&#305;&#351;veri&#351; yapanlara 25% bonus puan.</li>
											<br>
											E&#287;er isterseniz bir al&#305;&#351;veri&#351; miktar&#305; ödüllendirme ili&#351;kisi belirliyebilirsiniz, böylece puanlar&#305; ".$lang['currency']." miktar&#305;nda alabilmek için.";
$lang['campaign_new_name_desc']			= "E&#287;er ilk kampanyan&#305;z&#305; yaratiyorsan&#305;z, isminizi 'Test' ile ba&#351;liyarak yaz&#305;n&#305;z. Böylece her zaman deneyimlerinizi tan&#305;yabilirsiniz--
											&#304;stedi&#287;iniz miktarda ve &#351;ekilde kampanya yaratablir, ara verebilir veya yine silebilirsiniz.<br>
											<br>
											Genellikle &#351;irket ismini veya onu içeren k&#305;sa bir kelime oyununu, kampanya ismi olarak seçmek avantajl&#305; oluyor. Bir kaç örnek isim:<br>
											<li><b>ABC bonus program&#305;</b></li>
											<li><b>Gold Club</b> ('Red' isimli bir salon için)</li>
											<li><b>Super Card</b> (bikerlere servis yapan bir coffee shop için)</li>
											<li><b>Party puanlar&#305;</b> (Bir catering servisi için)</li>";

// Campaigns: Common actions:
$lang['campaign_add_new']				= "Yeni Kampanya Ekle";
$lang['campaign_delete_popup']			= "<strong>Bu kampanya kampanya listenizden silinecek ve ar&#351;ivlenecek.</strong><br>
											Bu kampanya ismi bir yeni kampanyan&#305;n ismi olarak tekrardan kullan&#305;labilinemez.<br>
											<br>
											Ar&#351;ivlenmi&#351; bir kampanyay&#305; tekrardan etkinle&#351;tirmek için, lütfen bizimle temas kurun. Bu hizmet ücretlidir.<br>
											<br>
											<strong>Bu kampanyay&#305; silmek istedi&#287;inizden emin misiniz?</strong>";
$lang['campaign_delete_popup_pc']		= "Bu kampanya kapanya listenizden silinecek ve ar&#351;ivlenecek.\n\n
											Bu kampanya ismi bir yeni kampanyan&#305;n ismi olarak tekrardan kullan&#305;labilinemez.\n\n
											Ar&#351;ivlenmi&#351; bir kampanyay&#305; tekrardan etkinle&#351;tirmek için, lütfen bizimle temas kurun. Bu hizmet ücretlidir.\n\n
											Bu kampanyay&#305; listenizden silmek istedi&#287;inizden emin misiniz?";
$lang['campaign_hide_on_hold']			= "Etkinli&#287;i kald&#305;r&#305;lm&#305;&#351; kampanyalar&#305; gösterme";
$lang['campaign_none_yet']				= "Yeni bir kampanya yaratmak için, (hediye veya ba&#287;l&#305;l&#305;k program&#305;)<br>
											a&#351;a&#287;&#305;daki yeni kampanya ekleme dü&#287;mesine t&#305;klay&#305;n&#305;z";

$lang['campaign_type_buyx']				= "X al ve 1 tane bedava program al";
$lang['campaign_type_earn_per_event']	= "Para kazan her event programa";
$lang['campaign_type_event-based']		= "Etkinlik Yaratan Olay Program&#305;";
$lang['campaign_type_gift_cards']		= "Hediye Kart&#305;";
$lang['campaign_type_points']			= "Puan Program&#305;";
$lang['campaign_view_on_hold']			= "Etkinli&#287;i kald&#305;r&#305;lm&#305;&#351; kampanyalara bak";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']				= "Bir ödül seviyesi ekleyin";
$lang['edit_reward_add_another']		= "Bir ek ödül seviyesi ekleyin";
$lang['edit_reward_desc_empty']			= "÷dül seviyelerini tasvir etmeniz gerekiyor.";
$lang['edit_reward_level_header']		= "Ödül Seviyelerini Düzenlemek";
$lang['edit_reward_header']				= "Kar&#351;&#305;l&#305;k Seviyeleri";
$lang['edit_reward_none']				= "&#350;imdilik belirlenmi&#351; ödüller yok";
$lang['edit_reward_table_header']		= "Kar&#351;&#305;l&#305;k Tasviri";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "Bu ili&#351;ki her zaman de&#287;i&#351;tirebilinir. Mü&#351;terilerin biriktirilmi&#351; puanlar&#305; ".$lang['points']." de&#287;i&#351;mez.";
$lang['edit_points_desc']				= "Bu her hangi bir say&#305; olabilir. Size ne anlaml&#305; geliyorsa. Örne&#287;in:";
$lang['edit_points_desc_header']		=  "Her harcanm&#305;&#351; ".$lang['currency']." ".$lang['Points']." verilir.";
$lang['edit_points_empty']				= "Kar&#351;&#305;l&#305;&#287;&#305; alabilmek için, ".$lang['points']." den bir say&#305; yazman&#305;z gerekiyor.";
$lang['edit_points_examples_header']	= "Puanlara dayanarak yap&#305;lan kar&#351;&#305;l&#305;klar için bir kaç örnek:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "20% indirim";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "Ücretsiz Ek Manikür";
$lang['edit_points_ex_3_amount']		= "750";
$lang['edit_points_ex_3_desc']			= "Bir Ek Geceleme Hediye";
$lang['edit_points_ex_4_amount']		= "1000";
$lang['edit_points_ex_4_desc']			= "Bir Bedava &#350;ampuan";
$lang['edit_points_ex_5_amount']		= "20";
$lang['edit_points_ex_5_desc']			= "Bir 10 Kiloluk Torba Kedi Yemi Bedava";
$lang['edit_points_ex_6_amount']		= "15,000";
$lang['edit_points_ex_6_desc']			= "VIP Club Seviyesi";
$lang['edit_points_ex_7_amount']		= "160";
$lang['edit_points_ex_7_desc']			= "Öncelikli Oturma";
$lang['edit_points_ex_8_amount']		= "100,000";
$lang['edit_points_ex_8_desc']			= "Bir ek ki&#351;iye daha bedava seyahat Disneyland'e";
$lang['edit_points_not_valid']			= "".$lang['points']." Toplam&#305; bir numara olmak mecburetinde.";
$lang['edit_points_profit_ratio_error']	= "Pozitif bir tutar yazman&#305;z gerekiyor. E&#287;er kullanmak istemiyorsaniz, bo&#351; b&#305;rak&#305;n&#305;z.";
$lang['edit_points_step_dir']			= "".$lang['Points']." Kampanyalar&#305;n&#305;z&#305;n ayarlar&#305;n&#305; sununuz:";
$lang['edit_points_table_header']		= "Kar&#351;&#305;l&#305;&#287;&#305;n&#305;z&#305;n tasviri, e&#287;er tutar&#305;n&#305;z ".$lang['points']." ula&#351;&#305;rsa.";
$lang['edit_points_too_small']			= "En az&#305; 1 büyüklü&#287;ünde bir tutar yazman&#305;z gerekiyor ".$lang['point'].".";

$lang['edit_promo_table_header']		= "Promosyon Tasviri";
$lang['edit_promo_none']				= "&#350;imdilik belirlenmi&#351; promosyon yok";
$lang['edit_promo_add']					= "Bir promosyon ekleyin";
$lang['edit_promo_add_another']			= "Bir ek promosyon ekleyin";
$lang['edit_promo_desc']				= "Promosyonlar ".$lang['points']." toplama yolunu de&#287;i&#351;tiriyorlar. Bir i&#351;lem kaydedilir edilmez belirli miktar ".$lang['points']." ekleyen veya azaltan veya belirli bir faktör ile çarpan promosyonlar yaratabilirsiniz. A&#351;a&#287;&#305;daki örnekleri okuyunuz:";
$lang['edit_promo_edit_header']			= "Promosyonu Düzenlemek";
$lang['edit_promo_edit_error_header']	= "Bir say&#305; yazman&#305;z gerekiyor, kazand&#305;&#287;&#305;n&#305;z ".$lang['points']." onunla çarpmak için.<br>Örne&#287;in:";
$lang['edit_promo_edit_error_add']		= "Bir say&#305; yazman&#305;z gerekiyor ".$lang['points']." olan, kazand&#305;&#287;&#305;n&#305;z puanlar&#305; eklemek için. Örne&#287;in, \"500\" kazand&#305;&#287;&#305;n&#305;z ".$lang['points']." 500 artt&#305;r&#305;r. \"-100\" kazand&#305;&#287;&#305;n&#305;z miktar ".$lang['points']." 100 azaltt&#305;r&#305;r (0 puana kadar, ama ondan fazlasi de&#287;il.)";
$lang['edit_promo_edit_error_multi']	= "".$lang['points']." ile çarp&#305;lacak olan faktör bir say&#305; olmas&#305; gerekiyor.";
$lang['edit_promo_edit_error_not_valid']= "Eklenilecek olan puanlar bir say&#305; olmak mecburetinde.";
$lang['edit_promo_edit_ex_1']			= "2 kazan&#305;lm&#305;&#351; olan puanlar&#305; iki kat&#305;na ç&#305;kar&#305;r.";
$lang['edit_promo_edit_ex_2']			= ".5 puanlar&#305; yar&#305;ya böler.";
$lang['edit_promo_edit_ex_3']			= "1.1 10% daha fazla puan ekler.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "500 ".$lang['points']." ekle bir tavsiye için";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']." yeni üye bonusu";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "50 ".$lang['points']." kesinti geç kalmak için";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "VIP üye: kazan&#305;lm&#305;&#351; ".$lang['points']." iki kat&#305;na ç&#305;kar&#305;r";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "Sal&#305; günler 50% extra ".$lang['points']."";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "Gümü&#351; üye: 25% extra ".$lang['points'];
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "25% için daha az ".$lang['points'];
$lang['edit_promo_name_empty']			= "Promosyonlardan faydalanmak için, bir isim yazman&#305;z gerekiyor";
$lang['edit_promo_note_1']				= /*(Addtion Operation)*/ "Promosyonlar otomatik olarak kaydediliyor: Sadece promosyonu seçiniz ve t&#305;klay&#305;n&#305;z"; /* ("record button") */
$lang['edit_promo_note_2']				= /*(Multiplication Operation)*/ "Promosyonlar otomatik olarak kaydedilmiyor: Bir al&#305;&#351;veri&#351; tutar&#305; gerekli.";
$lang['edit_promo_table_header_1']		= "Çarpmak<br>Veya Toplamak";
$lang['edit_promo_table_header_2']		= "Birlikte Ne Kadar";
$lang['edit_promo_table_header_3']		= "Promosyon IDsi";

$lang['edit_str_header']				= "E&#287;er isterseniz: ".$lang['currency']." tutarlar&#305; kaydetme imkan&#305;, e&#287;er puanlar&#305;n ödenmesi isteniyorsa";
$lang['edit_str_desc']					= "Gider ödüllendirme oran&#305; kulland&#305;&#287;&#305;n&#305;z iki taneden bir oran, mü&#351;terilerinizi ödüllendirdi&#287;iniz ".$lang['points']." do&#287;ru miktar&#305;n&#305; ö&#287;renmek için. E&#287;er o oran&#305; buraya yazarsan&#305;z, mü&#351;terilerinize ".$lang['points']." ".$lang['currency']." olarak kullanma imkan&#305; sa&#287;lam&#305;&#351; olursunuz:";
$lang['edit_str_ratio_header']			= "".$lang['currency']." miktar&#305;n&#305; yazma imkan&#305;,<br>puanlar&#305; alabilmek için:";
$lang['edit_str_ratio_on']				= "Aç&#305;k";	// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']				= "Kapal&#305;";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_ratio_sub_header']		= "Gider ödüllendirme oran&#305;n&#305;z:";
$lang['edit_str_ratio_not_set']			= "Belirlenmemi&#351;";
$lang['edit_str_example_header']		= "Örne&#287;in:";
$lang['edit_str_example_1']				= "Mü&#351;teriniz ".$lang['currency_symbol']."100 puan gerektiren bir&#351;ey almak istiyor ve toplam 1000 ".$lang['points']." var. Size almak istedi&#287;ini ".$lang['points']." ile ödiyebilir mi diye soruyor.";
$lang['edit_str_example_1_desc']		= "E&#287;er yukar&#305;daki gider ödüllendirme oran&#305;n&#305; kaydettiyseniz, <b>program otomatik olarak bulabilir ne kadar ".$lang['points']." de&#287;er oldu&#287;unu</b>. Böylece sizin veya kasiyerlerinizin komplike ödüllendirme listelerini kafan&#305;zda tutmaya veya yard&#305;m olarak hesap makinesi kullanmaya gerek yok.";
$lang['edit_str_example_math_show']		= "Hesaplamay&#305; görmek için buray&#305; t&#305;klay&#305;n.";
$lang['edit_str_example_math_hide']		= "Dikkat! Matematik formüllerini gizle!";
$lang['edit_str_example_math']			= "Diyelimki siz ".$lang['ppd']." oran&#305;n&#305;n 5 ve gider ödüllendirme oran&#305;n&#305;n 20 oldu&#287;unu belirtiyorsunuz. Ozaman say&#305;l&#305;r:<br>
											1000 ".$lang['points']." / 5 ".$lang['ppd']." / gider ödüllendirme oran&#305; 20 = ".$lang['currency_symbol']."10<br>
											<br>
											Bu fomüle ba&#351;ka türlü bak&#305;l&#305;rsa, ozaman CHF10 x 5 ".$lang['ppd']." = 50 ".$lang['points'].", ve gider ödüllendirme oran&#305; 20 olursa, 20 x 50 ".$lang['points']." gerekli oluyor (1000 ".$lang['points'].") damit Sie ".$lang['currency_symbol']."10 einlösen können.";
$lang['edit_str_example_math_height']	= "90";	// Dies ist die Höhe, in Pixeln, des Abschnitts in dem die Mathe-Formeln eingeblendet sind.
												// Falls die Übersetzung des obigen Abschnitts mehr Platz bedarf, erhöhe diese Zahl entsprechend.
$lang['edit_str_note_1']				= "".$lang['currency']." tutarlar&#305;n&#305;n ".$lang['points']." ödenmesinin imkan&#305;n&#305; kald&#305;rmak isteniyorsa, gider ödüllendirme oran&#305;n&#305; siliniz (bo&#351; b&#305;rak) ve buraya t&#305;klay&#305;n&#305;z"; /*(Set button)*/
$lang['edit_str_note_2']				= "Her ne zaman isterseniz gider ödüllendirme oran&#305;n&#305; de&#287;i&#351;tirebilirsiniz, ama ödül seviyeleriniz otomatik olarak uyum sa&#287;lamaz.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "÷dülü almak için gereken olaylar&#305;n miktar&#305;n&#305; yazman&#305;z gerekiyor.";
$lang['edit_visits_not_valid']			= "Olaylar&#305;n miktar&#305; bir say&#305; olmas&#305; mecburetinde.";
$lang['edit_visits_step_dir']			= "Olay kampanyalar&#305; için ödül seviyeleri belirleyin:";
$lang['edit_visits_table_header']		= "Olaylar&#305;n Miktar&#305;<br>";
$lang['edit_visits_table_header_2']		= "Al&#305;nabilinecek kar&#351;&#305;l&#305;klar&#305;n tasviri<br>belirli miktar olaylara ula&#351;t&#305;ktan sonra.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "En az&#305; 1 de&#287;erinde bir tutar yazman&#305;z gerekiyor ".$lang['currency_100th_symbol']." (0.01)";
$lang['edit_dpv_heading']				= "Ödül Ayarlar&#305;";
$lang['edit_dpv_label']					= "Her Olayda ".$lang['currency_plural']." Kazanç:";
$lang['edit_dpv_label_ending']			= "Her Olayda.";
$lang['edit_dpv_note_1']				= "Bu say&#305; her zaman de&#287;i&#351;tirilebilinir, ama mevcut ve mü&#351;terilerden biriktirilmi&#351; olan ".$lang['currency']." de&#287;i&#351;mez.";
$lang['edit_dpv_step_dir']				= "Kampanya için nakit para ödül seviyesini belirleyin:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "Hizmet veya ürün miktar&#305; en az&#305; 1 olmas&#305; gerekiyor<br>10 önerilen miktard&#305;r.";
$lang['edit_buyx_header']				= "X al&#305;n ve bir tane bedava promosyon al&#305;n";
$lang['edit_buyx_item_empty']			= "Bir ürün veya hizmet ismi veya tasvir yazman&#305;z gerekiyor.";
$lang['edit_buyx_item_header']			= /* Hinzufügen oder Bearbeiten */ "bir ürün veya bir hizmet";
$lang['edit_buyx_item_table_header_1']	= "Hizmet, Ürün Veya Kategori";
$lang['edit_buyx_item_table_header_2']	= "Kaç tane<br>gelecek sefer bedava olana kadar";
$lang['edit_buyx_none']					= "Hizmet veya ürün belirlenmemi&#351;.";
$lang['edit_buyx_step_dir']				= "Kampanya için ödül seviyelerini belirleyin:";
$lang['edit_buyx_table_header_1']		= "Ürün, Hizmet Veya Kategori";
$lang['edit_buyx_table_header_2']		= "# tane<br>gelecek bedava olana kadar";
$lang['edit_buyx_add_another']			= "Bir ba&#351;ka hizmet veya ürün eklemek";
$lang['edit_buyx_add']					= "Bir hizmet veya ürün eklemek";
$lang['edit_buyx_default_header']		= "Standart bir miktar hizmet veya ürün, gelecek bedava olana kadar";
$lang['edit_buyx_default_label']		= "Yeni hizmetler / ürünler için standart:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "Kampanyan&#305;z için ayarlar&#305; ve ödül seviyelerini belirleyin:";
$lang['edit_giftcard_no_settings']		= "Hediye kart&#305; kampanyalar&#305; için ayarlar veya ödül seviyeleri belirlenmesi gerekmiyor.<br>(Iyi, bu kolaydi!)";

// Common Customer Content
$lang['customer_account_activated']		= "Hesap Aktif";
$lang['customer_add_tab']				= "Mü&#351;teri Eklemek";
$lang['customer_lookup_tab']			= "Mü&#351;teri Aramak";
$lang['customer_id_not_exist']			= "Mü&#351;teri hesab&#305; IDsi yok.";
$lang['customer_id_missing']			= "Mü&#351;teri hesab&#305; IDsi yaz&#305;lmad&#305;.";
$lang['customer_tip_1']					= "Biliyormuydunuz, mü&#351;teri numaras&#305;n&#305; görmek için bir barkod taray&#305;c&#305;s&#305; veya bir manyetik bant kart okuyucusu kullanabildinizi?";
$lang['customer_tip_2']					= "Bu sayfaya bookmark koyun, /* Account Control Panel screen */ sonundaki bookmark üreticisini kullanarak"; /* Account Control Panel screen */
$lang['customer_last_activity']			= "Son Etkinlik";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "Yanl&#305;&#351;l&#305;k bildirisi: kart&#305; silmek mümkün de&#287;il.";
$lang['manage_cards_find_by_date']		= "Son Etkinli&#287;in Tarihi";
$lang['manage_cards_find_by_header']	= "Veya bütün mü&#351;terilerin listesini göster:";
$lang['manage_cards_find_directions']	= "A&#351;a&#287;&#305;daki alan&#305; doldurun:";
$lang['manage_cards_find_header']		= "Bir mü&#351;teriyi aray&#305;n:";
$lang['manage_cards_find_none']			= "Soru&#351;turman&#305;z hiç bir mü&#351;teri bilgisiyle uyu&#351;muyor.";
$lang['manage_cards_find_note']			= "Bu bir kaç dakika sürebilir, e&#287;er bir kaç bin mü&#351;teriniz veya yava&#351; internet ba&#287;lant&#305;n&#305;z varsa.";
$lang['manage_cards_header']			= "Mü&#351;teri Bilgilerini Yönetmek";
$lang['manage_cards_list_header']		= "Mü&#351;teri Hesaplar&#305; Listesi";
$lang['manage_cards_not_exist']			= "Bu mü&#351;teri yok.";
$lang['manage_cards_cust_deleted']		= "Bu mü&#351;teri silinmi&#351;.";
$lang['manage_cards_popup_warning']		= "Tüm mü&#351;teri bilgileri ve tüm i&#351;lem etkinlikleri böylece<br>
											tüm bu mü&#351;terinin içinde bulundu&#287;u kampanyalardan silinir.<br><br>
											Hatta<strong>raporlar bu hesab&#305;n geçmi&#351; etkinliklerini göstermez art&#305;k</strong>.<br><br>
											Bu etkinlik tekrardan geriye ÇEVR&#304;LEB&#304;L&#304;NEMEZ!<br><br>
											Bu mü&#351;teriyi silmek istedi&#287;inizden emin misiniz?";
$lang['manage_cards_popup_warning_pc']	= "Tüm mü&#351;teri bilgileri ve tüm i&#351;lem etkinlikleri böylece\n
											tüm bu mü&#351;terinin içinde bulundu&#287;u kampanyalaradan silinir.\n\n
											Hatta raporlar bu hesab&#305;n geçmi&#351; etkinliklerini  göstermez art&#305;k\n\n
											Bu etkinlik tekrardan geriye ÇEVR&#304;LEB&#304;L&#304;NEMEZ!\n\n
											Bu mü&#351;teriyi silmek istedi&#287;inizden emin misiniz?";

// Create New Customer Account
$lang['customer_new_card_desc']			= "Kesin anla&#351;&#305;l&#305;r bir kart # veya<i>mü&#351;teri hesab&#305; IDsi</i> gerekli, mü&#351;terilerinizin hesap durumlar&#305;n&#305;<br> sizin web sitenizde görebilmeleri için.";
$lang['customer_new_create_button']		= "Mü&#351;teri Hesab&#305; Yaratmak";
$lang['customer_new_demo_phone']		= "(555)555-5555";
$lang['customer_new_demo_email']		= "demo@email.com";
$lang['customer_new_demo_addtl_info']	= "Ek bilgiler buraya durumlar&#305;n&#305;.";
$lang['customer_new_id_exists']			= "Yaz&#305;lan hesap IDsi var bile.";
$lang['customer_new_id_match']			= "Bir sonraki hesap"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "Bu bir geçersiz mü&#351;teri hesap IDsi.";
$lang['customer_new_exists']			= "Yaz&#305;lan bilgiler olan bir mü&#351;teriye uyuyor.";
$lang['customer_new_header']			= "Yeni bir mü&#351;teri hesab&#305; aç&#305;n";
$lang['customer_new_multiple_matches']	= "Bu hesaplar sizin verdi&#287;iniz bilgilere uyuyor:";
$lang['customer_new_other_campaigns']	= "Mü&#351;teri eklenecek di&#287;er kampanyalar<br>nlard&#305;r:";
$lang['customer_new_random_id']			= "Tesadüf Numaralar Yaratmak";
$lang['customer_new_steps_header']		= "Bir mü&#351;teri hesab&#305; aç&#305;n&#305;z. Örne&#287;in:";
$lang['customer_new_steps_dir']			= "Bir mü&#351;teri hesab&#305; kesin anla&#351;&#305;l&#305;r bir özde&#351;le&#351;tirme numaras&#305;, örne&#287;in telefon numaras&#305;, e-mail adresi, barkod veya mü&#351;teriyi kesin özde&#351;le&#351;tiren ba&#351;ka bir&#351;ey gibi, ç&#305;labilinir. E&#287;er arzu ederseniz, kendinize bir
											'11111' açmaktan kaç&#305;nmay&#305;n; mü&#351;teri hesab&#305; sonra yine silinebilinir.";
$lang['customer_new_not_allowed']		= "Sizin mü&#351;teri bilgileri yaratmaya izniniz yoktur.";

// Lookup Customer Account
$lang['customer_activity_header']		= "Hesab etkinli&#287;i";
$lang['customer_activity_none']			= "Bu hesap etkin de&#287;ildir.";
$lang['customer_activity_print_short']	= "Son &#304;&#351;lem"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "Aktüel Hesap Durumu:";
$lang['customer_lookup_balances_none']	= "Hesap Durumlar&#305; Yok";
$lang['customer_lookup_button']			= "Mü&#351;teriyi Aramak";
$lang['customer_lookup_header']			= "Mü&#351;teri Hesab&#305;n&#305; Aramak";
$lang['customer_lookup_instructions']	= "Mü&#351;teri bilgilerinin her hangi bir k&#305;sm&#305;n&#305; yaz&#305;n&#305;z:";
$lang['customer_lookup_multiple_match']	= "Sonraki gelen bilgiler arama sorular&#305;n&#305;z ile uyu&#351;uyor";
$lang['customer_lookup_multiple_view']	= "Hesap Ayr&#305;nt&#305;lar&#305;na Bakmak";
$lang['customer_lookup_no_match_add']	= "Benzer bilgi kay&#305;tlar&#305; bulunamad&#305;. A&#351;a&#287;&#305;da yeni bir hesap açabilirsiniz";
$lang['customer_lookup_no_match']		= "Bu kampanyada hiç bir mü&#351;teri verdi&#287;iniz arama sorular&#305;n&#305;z ile uyu&#351;muyor.";
$lang['customer_lookup_not_allowed']	= "÷zel mü&#351;teri bilgilerine bakma izniniz yoktur.";
$lang['customer_lookup_steps_header']	= "&#304;&#351;lem eklemek ve bedelini ödemek.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "Bu mü&#351;teriyi ba&#351;ka kampanyalara eklemek:";
$lang['customer_edit_campaigns_note']	= "Bir mü&#351;teriyi ba&#351;ka bir kampanyaya eklemek size mü&#351;teriyi hesap hakk&#305;nda k&#305;sm&#305; bilgiler ile arama imkan&#305;n&#305; sa&#287;l&#305;yor.
											 Bunun d&#305;&#351;&#305;nda # / nur mit der Konto ID, oder verwenden Sie
											 ile arayabilirsiniz
											veya yukar&#305;da sa&#287; ö&#351;ede bulunan pull-down menüsünü kullanabilirsiniz, mü&#351;teri bilgilerinin içinde bir kampanyadan di&#287;er kampanyaya geçmek için.";
$lang['customer_edit_header']			= "Hesap Bilgilerini Düzenlemek";
$lang['customer_edit_random_number']	= "Tesadüf Numara Yaratmak";
$lang['customer_edit_sub_header']		= "Tüm bo&#351; alanlar zorunlu de&#287;il.";
$lang['customer_edit_activity_header']	= "Mü&#351;teri Hesab&#305; Bilgi Etkinli&#287;i";

// Record Customer Transactions
$lang['transaction_add_button']			= "Hesaba Eklemek";
$lang['transaction_amount_not_valid']	= "&#304;&#350;LEM HATASI:<br>".$lang['currency']." olarak yaz&#305;lan miktar geçerli de&#287;il";
$lang['transaction_amount_too_samll']	= "&#304;&#350;LEM HATASI:<br>".$lang['currency']." olarak yaz&#305;lan miktar en az 0.01 olmas&#305; gerekiyor";
$lang['transaction_new_gc_header']		= "Hesaba Eklemek";
$lang['transaction_new_header']			= "Yeni Etkinlikler";
$lang['transaction_no_amount']			= "&#304;&#350;LEM HATASI:<br>Bir miktar&#305; ".$lang['currency']." olarak yazman&#305;z<br>veya bir promosyon seçmeniz gerekiyor.";
$lang['transaction_promo_not_valid']	= "&#304;&#350;LEM HATASI:<br>Bu promosyonu kullanabilmeniz için, bir al&#305;&#351;veri&#351; miktar&#305; yazman&#305;z gerekiyor.";
$lang['transaction_promos_label']		= "Bir promosyon seçmek:";
$lang['transaction_purchase_label']		= "Tüm al&#305;&#351;veri&#351; miktar&#305;n&#305; yazmak:";
$lang['send_email']						= "E-Mail yolla?";
$lang['transactions_buyx_none']			= "Hiçbir hizmet veya ürün belirlenmemi&#351;.";
$lang['transactions_buyx_none_dir']		= "Kontrol panel'ine geri dönünüz ve ayarlar&#305; düzenleyiniz.";
$lang['transactions_visit_credited']	= "1 olay&#305;n alaca&#287;&#305; kaydedilmi&#351;";
$lang['transactions_visit_redeemed']	= "Olaylar&#305;n Bedeli Ödenmi&#351;";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "&#304;&#351;lemi silerken hata. Lütfen tekrar deneyiniz.";
$lang['transaction_delete_popup']		= "<strong>Bu i&#351;lemi temelli olarak silecektir.</strong><br><br>
											Bu etkinlik geri ÇEVR&#304;LEB&#304;L&#304;NEMEZ!<br><br>
											Bu i&#351;lemi silmek istedi&#287;inizden emin misiniz?";
$lang['transaction_delete_popup_pc']	= "Bu i&#351;lemi temelli olarak silecektir.\n\n
											Bu etkinlik geri çevrilebilinemez!\n\n
											Bu i&#351;lemi silmek istedi&#287;inizden emin misiniz?";

// Redeem Rewards
$lang['redeem_buyx_header']			= "Ödüller Listesi";
$lang['redeem_buyx_sub_header']			= "Mü&#351;teri yeterince etkinlik toplam&#305;&#351; bunlar için:";
$lang['redeem_header']				= "Al&#305;nabilinen Ödüller";
$lang['redeem_header_alt']			= "Hesaptan Ç&#305;karmak";
$lang['redeem_points_partial_header']		= "Ki&#351;isel &#304;ndirimler Mümkün"; /* points or dollars */
$lang['redeem_points_partial_none']		= "Bu hesab&#305;n hesap durumu pozitif oldu&#287;u an."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "Veya bedelini almak için bir ödül seçiniz";
$lang['redeem_reward_description']		= "Ödül Tasviri";
$lang['redeem_reward_balance_none']		= "&#350;u andaki hesap durumu,<br>önceden belirtelen ödülün bedelini almak için yetersiz.";
$lang['redeem_reward_balance_zero']		= "&#350;u andaki hesap durumu,<br>bir&#351;ey alabilmek için yetersiz.";
$lang['redeem_reward_balances_none']		= "&#350;u andaki hesap durumu,<br>bir ödülün bedelini almak için yetersiz.";

// Reports
$lang['report_audit_title']			= "&#304;&#351;lemler denetim raporu";
$lang['report_audits_all_trans']		= "Tüm i&#351;lemler";
$lang['report_audits_header']			= "Denetimler";
$lang['report_audits_redeemed_only']		= "Sadece Al&#305;nanlar";
$lang['report_audits_totals']			= "Toplam";
$lang['report_campaigns_included']		= "Kampanyalar Dahil:";
$lang['report_col_1_header']			= "Raporlar&#305; Seçmek";
$lang['report_col_2_header']			= "Zaman Çerçevelerini Seçmek";
$lang['report_col_3_header']			= "Kampanyay&#305;/-lar&#305; Seçmek";
$lang['report_date_not_valid']			= "Geçersiz Tarih<br>(belki bir art&#305;ky&#305;ld&#305;r)";
$lang['report_date_mismatch']			= "Hata bildirisi: Ba&#351;lang&#305;ç tarihi bitim tarihinden sonra olamaz.";
$lang['report_frequent_header']			= "Devaml&#305; Mü&#351;terilerin Raporu";
$lang['report_frequent_min_trans']		= "En Küçük &#304;&#351;lem Say&#305;s&#305;";
$lang['report_none']					= "Mü&#351;teriler uyum sa&#287;lama kriterleri yok";
$lang['report_marketing_header']		= "Marketing";
$lang['report_marketing_new_cust']		= "Yeni Mü&#351;teriler";
$lang['report_marketing_freq_cust']		= "Devaml&#305; Mü&#351;teriler";
$lang['report_marketing_freq_or_more']		= /* A given number of */ "&#304;&#351;lemler veya ba&#351;ka &#351;eyler.";
$lang['report_marketing_include']		= "Bedelini ödeme &#351;lemlerini dahil etmek.";
$lang['report_marketing_miss_dir_1']		= "&#304;&#351;lemleri yukar&#305;da yazd&#305;&#287;&#305; zaman çerçevelerinin içinde bulunan mü&#351;teriler,";
$lang['report_marketing_miss_dir_2']		= "Ve o günlerin içinde geri dönmeyenler:";
$lang['report_missing_header']			= "X gündür gelmeyen mü&#351;teriler"; /* a number of days.*/
$lang['report_new_customers_header']		= "Yeni Mü&#351;teriler Raporu";
$lang['report_new_customers_none']		= "Yeni mü&#351;teriler uyum sa&#287;lama kriterleri yok";
$lang['report_new_customers_range']		= "/* one date and another date */ Aras&#305; Yeni Mü&#351;teriler";
$lang['report_no_transactions']			= "&#304;&#351;lemler Bulunamad&#305;";
$lang['report_redeem_one_letter_code']		= "R";
$lang['report_run_report_button']		= "Raporu Gerçekle&#351;tir";
$lang['report_totals_header']			= "Denetim Raporlar&#305;n&#305;n Toplam&#305;";

// Report Months
$lang['Jan']							= "Ocak";
$lang['Feb']							= "&#350;ubat";
$lang['Mar']							= "Mart";
$lang['Apr']							= "Nisan";
$lang['May']							= "May&#305;s";
$lang['Jun']							= "Haziran";
$lang['Jul']							= "Temmuz";
$lang['Aug']							= "A&#287;ustos";
$lang['Sep']							= "Eylül";
$lang['Oct']							= "Ekim";
$lang['Nov']							= "Kas&#305;m";
$lang['Dec']							= "Aral&#305;k";

// Auto-Generated Emails
$lang['email_account_activity']			= "Hesap Etkinli&#287;i Güncelle&#351;tirmesi";
$lang['email_activated_header']			= "Kampanya Aktif";
$lang['email_activated_sub_header']		= "Bir sonraki kampanya etkinle&#351;tirilmi&#351;:";
$lang['email_billing_header']			= "Hesaplama Düzeyinde De&#287;i&#351;iklik";
$lang['email_billing_from_level']		= "Hesab&#305;n&#305;z&#305;n hesaplama düzeyi bundan de&#287;i&#351;tirildi";
$lang['email_deactivated_header']		= "Kampanya Etkinli&#287;i Kald&#305;r&#305;lm&#305;&#351;";
$lang['email_deactivated_sub_header']	= "Bir sonraki kampanyan&#305;n etkinli&#287;i kald&#305;r&#305;lm&#305;&#351;:";
$lang['email_greeting']					= "Merhaba"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "Bu bilgiyi güvenilir bir yerde saklay&#305;n";
$lang['email_html_callout_url']			= "Login URL"; // As in "the internet address where a client can log into the acount management application of StickyStreet."
$lang['email_keep_email_footer_1']		= "Lütfen bu bildiriyi saklay&#305;n.";
$lang['email_keep_email_footer_2']		= "Mühim hesap bilgileri içeriyor.";
$lang['email_new_account_header']		= "Yeni Hesap";
$lang['email_new_account_sub_header']	= "Yeni bir hesap aç&#305;ld&#305;.";
$lang['email_html_password_nochange']	= "De&#287;i&#351;iklik Yok"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "Online mü&#351;teri kay&#305;d&#305;";
$lang['email_online_register']			= "Bir sonraki mü&#351;teri kendisine bir hesap açm&#305;&#351:";
$lang['email_password_header']			= "&#350;ifre Gere&#287;i &#304;steniyor";
$lang['email_password_dir1']			= "&#350;ifre Gere&#287;i Kullan&#305;c&#305; &#304;çin"; /* shows the User ID */
$lang['email_password_dir2']			= "Bunu ifade ediyor:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "Hesap De&#287;i&#351;iklikleri";
$lang['email_update_sub_header']		= "Hesap Bilgileriniz Güncellendi.";
$lang['email_user_id_header']			= "Kullan&#305;c&#305; ID Bulma Gere&#287;i";
$lang['email_user_id_sub_header_1']		= "E-Mail adresiniz ile e&#351;le&#351;tirilmi&#351; olan kullan&#305;c&#305; IDsini istedi&#287;iniz:";
$lang['email_user_id_sub_header_2']		= "E-Mail adresiniz ile e&#351;le&#351;tirilmi&#351; olan kullan&#305;c&#305; IDleri istedi&#287;iniz:"; // Plural


// Bookmarks
$lang['bookmarks_header']				= "Auto-Login bookmark'lar&#305; yarat&#305;n";
$lang['bookmarks_table_header_1']		= "Bookmark koymak istedi&#287;iniz sayfay&#305; seçiniz";
$lang['bookmarks_table_header_2']		= "Otomatik login için kullan&#305;c&#305;y&#305; seçiniz";
$lang['bookmarks_table_header_3']		= "Link'e bookmark koyunuz";
$lang['bookmarks_link_1']				= "Sa&#287; tu&#351; ile<br>Link'e t&#305;klay&#305;n,<br>bookmark koymak için.";
$lang['bookmarks_link_2']				= "Buray&#305; t&#305;klay&#305;n,<br>sayfay&#305; açmak<br> ve orda auto-login'e bookmark koymak için.";
$lang['bookmarks_note']					= "Bu linklere hesab&#305;n&#305;zdaki &#351;ifrelerinizlere davrand&#305;&#287;&#305;n&#305; ayn&#305; &#351;ekilde davran&#305;n.
											Size tavsiye ediyoruz, bu linklerin hiç birini e-mail veya chat ile göndermemenizi, onun yerine istedi&#287;iniz bir bilgisayardan login ile giri&#351; yapin
											ve orda bookmark&#305; browserinizdeki bookmark listesine ekleyiniz.";


// Common Error Messages:
$lang['error_email_space']				= "Bu e-mailde bo&#351;luk kullanmak yasakt&#305;r.";
$lang['error_email_not_found']			= "Bu e-mail adresi bulunamad&#305;.";
$lang['error_email_not_valid']			= "Bu e-mail adresi geçersiz.";
$lang['error_customer_id_empty']		= "Bir mü&#351;teri hesab&#305; IDsi yazman&#305;z gerekiyor.";
$lang['error_next_page']				= "Bir sonraki sayfay&#305; açmakta bir sorun ç&#305;kt&#305;. Lütfen tekrar deneyin.";
$lang['error_password_empty']			= "Seçilmi&#351; bir &#351;ifre yazman&#305;z gerekiyor.";
$lang['error_password_length']			= "&#350;ifreniz en az 5 ve en fazla 20 i&#351;aret uzunlu&#287;unda olmas&#305; gerekiyor.";
$lang['error_password_not_valid']		= "Bir &#351;ifre sadece harfler, say&#305;lar ve alt çizgiler (_) içerebilir";
$lang['error_password2_empty']			= "&#350;ifreyi tekrardan yazman&#305;z gerekiyor,<br>birincisinde do&#287;ru yaz&#305;ld&#305;&#287;&#305;ndan emin olmak için.";
$lang['error_passwords_no_match']		= "Yazd&#305;&#287;&#305;n&#305;z &#351;ifreler birbirleri ile uyu&#351;muyor.<br>Lütfen onlar&#305; yeniden yaz&#305;n&#305;z.";
$lang['error_phone_area_code']			= "Lütfen geçerli bir posta kodu yaz&#305;n&#305;z.";
$lang['error_phone_not_valid']			= "Bu geçersiz bir telefon numaras&#305;.";
$lang['error_service_down']				= "Bu hizmet geçici olarak yok.<br><br>Bu sorun için sizden özür diliyoruz.";
$lang['error_updating']					= "Bilgiyi güncellemede bir sorun ç&#305;kt&#305;. Lütfen tekrar deneyin.";
$lang['error_userid_error']				= "Hata bildirisi: Yazd&#305;&#287;&#305;n&#305;z kullan&#305;c&#305; IDsi bulunamad&#305;.";
$lang['error_balance_lookup_activity']	= /* The account id entered */ "bir etkinli&#287;i yok.";
$lang['error_balance_lookup_no_cust']	= "Mü&#351;teri hesab&#305; yok.";
$lang['error_balance_lookup_no_acct']	= "Hesab IDsi yok.";

// Alt Tags
$lang['alt_add_customer_button']		= "Bu kampanyaya mü&#351;teri hesaplar&#305; eklemek için t&#305;klay&#305;n";
$lang['alt_account_edit_save']			= "Bu formdaki de&#287;i&#351;iklileri kaydetmek için t&#305;klay&#305;n";
$lang['alt_campaign_delete']			= "Bu kampanyay&#305; silmek için t&#305;klay&#305;n";
$lang['alt_campaign_edit']				= "Bu kampanyan&#305;n ayarlar&#305;n&#305; düzenlemek için t&#305;klay&#305;n";
$lang['alt_campaign_name']				= "Mevcut mü&#351;terileri aramak veya yeni mü&#351;teriler eklemek için kampanya ismini t&#305;klay&#305;n";
$lang['alt_campaign_new_create']		= "Bu kampanyay&#305; yaratmak için t&#305;klay&#305;n";
$lang['alt_campaign_place_on_hold']		= "Bu kampanya aktif. Durdurmak için buray&#305; t&#305;klay&#305;n";
$lang['alt_campaign_re-activate']		= "Bu kampanyay&#305; yeniden aktif hale getirmek için t&#305;klay&#305;n";
$lang['alt_cancel_changes']				= "Bütün de&#287;i&#351;iklikleri silmek ve önceki screen'e geri dönmek için t&#305;klay&#305;n&#305;z.";
$lang['alt_goto_ss']					= "Bu link'i yeni bir sayfada açmak için t&#305;klay&#305;n&#305;z";
$lang['alt_lookup_customer_button']		= "Bu kampanyada mü&#351;teri hesaplar&#305; aramak için t&#305;klay&#305;n&#305;z";
$lang['alt_user_add']					= "Yeni bir kendi login ad&#305; ve yetki seviyesi olan kullan&#305;c&#305; eklemek için t&#305;klay&#305;&#305;n&#305;z";
$lang['alt_user_delete']				= "Bu kullan&#305;c&#305;y&#305; silmek ve böylece login yapamamas&#305; ve hesab&#305;na giri&#351; hakk&#305;na sahip olamamas&#305; için t&#305;klay&#305;n&#305;z.";
$lang['alt_user_edit']					= "Bu kullan&#305;c&#305;n&#305;n özelliklerini düzenlemek için t&#305;klay&#305;n&#305;z";

// Outside / Optional Links
// ------------------------
// Translate this section ONLY if the embeded links have been replicated in the new language:

// Legal Documents
$lang['terms_conditions_location']		= 'terms-conditions.html';

// Edit Preferences: Points Campaign
$lang['edit_points_note_1_graphic']		= '<a href="http://www.stickystreet.com/calculator.php" target="_blank"><img align="right" src="graphics/calculator.gif" width="72" height="80" border="0" vspace="5" hspace="3"></a><span style="color: #666;">';
$lang['calculator_link'] 				= '<a href="http://www.stickystreet.com/calculator.php" target="_blank">';
$lang['edit_points_note_1'] 			= "Bizim puan hesaplama makinemiz ".$lang['calculator_link']." size daha ihtiyac&#305;n&#305;z olan ödül puanlar&#305;n&#305; hesaplamakta yard&#305;mc&#305; oluyor</a>:";

$lang['blog_link_accounting'] 			= '<a href="http://support.stickystreet.com/forums/16257/entries/12598" target="_blank">';
$lang['edit_points_note_2'] 			= "Ödül seviyeleri ve onun arkas&#305;nda bulunan mant&#305;k hakk&#305;nda görü&#351;me için, ".$lang['blog_link_accounting']." destek forumundaki post'a</a>bak&#305;n&#305;z.";

$lang['edit_str_desc_with_link']		= "Gider ödüllendirme oran&#305; ödülleriniz için ".$lang['points']." miktarlar&#305;n&#305; hesaplarken ihtiyac&#305;n&#305;z olan iki taneden bir orand&#305;r (".$lang['calculator_link'].$lang['Points']." hesaplama makinesi kullanm&#305;&#351; </a> veya kullanmam&#305;&#351; olman&#305;zla ba&#287;lant&#305;s&#305;z olarak.) E&#287;er buraya yazarsan&#305;z, ".$lang['points']." geri ödeme fonksiyonunu bir ".$lang['currency']." miktar&#305; yazarak etkinle&#351;tirebilirsiniz:";


// =========================
// ADDITIONAL TRANSLATIONS 1
// =========================

// Single words and labels
$lang['Referrer']						= "Tavsiye Eden"; 	// As in a person or entity that sends business your way.
$lang['Comma']							= "Virgül";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Deducted']						= "Ç&#305;karmak";	// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Item']							= "Nesne";		// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Pipe']							= "Pipe";		// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "Al&#305;nm&#305;&#351;";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Tab']							= "Tabulatör";		// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Required']						= "Mecburi";	// As in necessary, compulsory. Ex: "The name field is required."
$lang['optional']						= "&#304;htiyari"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";

// Page Titles
$lang['title_managing_cards']			= "Mü&#351;teri Bilgileri Düzenlemek";
	$lang['importing_customers']		= "Mü&#351;teri &#304;thal Etmek";
	$lang['customers_imported']			= "&#304;çeri Aktar&#305;lm&#305;&#351; Mü&#351;teriler";
	$lang['importing_transactions']		= "&#304;&#351;lemler &#304;thal Etmek";
	$lang['transactions_imported']		= "&#304;thal Edilmi&#351; &#304;&#351;lemler";

// Labels
$lang['label_currency']					= "Para Birimi";				// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']			= "Para Birimi Sembolü";		// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_language_select']			= "Görüntü Lisan&#305;";		// As in a prompt to the user to select a language for the application
$lang['label_localization']				= "Yer Belirlemek";			// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_timezone']					= "Saat Dilimi";

// New Account Screen
$lang['account_language_error']			= "Seçilen dil ile bir hata olu&#351;uyor.";
$lang['account_language_note']			= "Not: Bu hesap için standart lisan ayar&#305;d&#305;r.<br>
											Bu kullan&#305;c&#305; yönetiminde veya loginde<br>
											ba&#351;ka bir lisan seçerek de&#287;i&#351;tirilebilinir.";
$lang['account_timezone_note']			= "Not: Bu bu hesap için standart saat dilimi ayar&#305;d&#305;r.<br>
											Bir hesap kullan&#305;c&#305;s&#305; (kullan&#305;c&#305; yönetiminde) ba&#351;ka bir saat dilimine göre ayarlanabilinir,<br>
											bu &#351;u andaki ayarlar&#305; de&#287;i&#351;tirir.";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']			= "Mü&#351;teri Ve &#304;&#351;lem &#304;thalat&#305;";
$lang['manage_import_customers']		= "Mü&#351;teri &#304;thal Etmek";
$lang['manage_import_transactions']		= "Mü&#351;teri &#304;&#351;lemleri &#304;thal Etmek";
$lang['manage_import_no_none']			= "Tüm bo&#351; alanlar 'none' olarak ayarlanamaz. Lütfen ithal için en az&#305; bir tane bo&#351; alan seçiniz.";
$lang['manage_import_duplicate_card']	= "Kart&#305; Ço&#287;altmak:";
$lang['manage_import_duplicate_found']	= "Ço&#287;altmak";
$lang['manage_import_duplicates_found']	= "Kopya";
$lang['manage_import_successful']		= "Ba&#351;ar&#305;l&#305; &#304;thalat";
$lang['manage_import_new_customer']		= "Yeni mü&#351;teri içeri aktar&#305;ld&#305;";
$lang['manage_import_new_customers']	= "Yeni mü&#351;teriler içeri aktar&#305;ld&#305;";
$lang['manage_import_updated_customer']	= "Mü&#351;teri güncellendi";
$lang['manage_import_updated_customers']= "Mü&#351;teriler güncellendi";
$lang['manage_import_no_cust_data']		= "&#304;thalat için mü&#351;teri bilgileri verilmedi. Lütfen mü&#351;teri bilgilerinizi a&#351;a&#287;&#305;daki kutuya kopyalay&#305;n&#305;z:";
$lang['manage_import_campgn_not_valid']	= "Seçilen kampanyalardan biri geçersiz.";
$lang['manage_import_select_1_campaign']= "Mü&#351;teri eklemek istedi&#287;iniz en az&#305; bir tane kampanya seçmeniz gerekiyor:";
$lang['manage_import_select_delimiter']	= "Lütfen yukar&#305;daki bölme i&#351;aretlerinden bir tanesini seçiniz.";
$lang['manage_import_new_trasns']		= /* a number */ "Yeni i&#351;lemler kaydedildi";
$lang['manage_import_new_account']		= "Yeni mü&#351;teri hesab&#305; aç&#305;ld&#305;";
$lang['manage_import_new_accounts']		= "Yeni mü&#351;teri hesaplar&#305; aç&#305;ld&#305;";
$lang['manage_import_no_cust']			= "Mü&#351;teri ithal edilmedi veya güncellendirilmedi";
$lang['manage_import_no_trans']			= "Kaydedilmi&#351; i&#351;lemler yok";
$lang['manage_import_no_trans_data']	= "&#304;thalat için i&#351;lem bilgileri verilmemi&#351;. Lütfen i&#351;lem bilgilerini a&#351;a&#287;&#305;daki kutuya kopyalay&#305;n&#305;z:";
$lang['manage_import_fields_missing']	= "Bir kaç mecburi doldurulmas&#305; gereken alanlar bo&#351;.";
$lang['manage_import_cust_instr_head']	= "<b>Bir mü&#351;teri listesini ithal etmek oldukca kolay:</b>";
$lang['manage_import_cust_instr_1']		= "Mü&#351;terileri eklenecek olan kampanyay&#305;/-lar&#305; seçiniz.";
$lang['manage_import_cust_instr_2']		= "Kolon s&#305;ralamas&#305;n&#305; ve kolon bölme i&#351;aretini belirleyiniz.";
$lang['manage_import_cust_instr_3']		= "Listenizi büyük kutuya kopyalay&#305;n&#305;z ve kontrol ediniz, uyusan bilgileri <br> ayn&#305; hesap IDsi / kart # de&#287;i&#351;tirmek mi yoksa bilmemezlikten mi gelmek istedi&#287;inizi.";
$lang['manage_import_cust_instr_4']		= "Bilgileri her hangi bir sonraki formatlarda olabilir<i>(senelerin 4 i&#351;aretten olu&#351;mas&#305; gerekiyor)</i>:<br>
														<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre>";
$lang['manage_import_campaigns_list']	= "Kampanya Listesi";
$lang['manage_import_add_campaigns']	= "Kampanyalara Eklemek";
$lang['manage_import_field_order']		= "Alan S&#305;ralamas&#305;";
$lang['manage_import_field_delimiter']	= "Alan Bölme &#304;&#351;areti";
$lang['manage_import_excel_default']	= "(MS Excelden kopyalay&#305;nca standart)";
$lang['manage_import_field_note']		= "<i>Her alan ihtiyari.</i><br>
												<br>
												Uyar&#305;: E&#287;er ilerde mü&#351;teri i&#351;lemleri eklemek isterseniz<br>
												her mü&#351;teri için belli bir <i>mü&#351;teri<br>
												hesap IDsi / kart #</i> gerekiyor<br>
												 (bundan sonra belirli mü&#351;terilerin i&#351;lemlerini<br>
												s&#305;n&#305;fland&#305;rabilmek için).";
$lang['manage_import_customer_list']	= "Mü&#351;teri Listesi";
$lang['manage_import_duplicates']		= "Kopyalar?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "De&#287;i&#351;tirmek"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "Mü&#351;teri listesini a&#351;a&#287;&#305;daki kutuya kopyala";
$lang['manage_import_trans_instrctns']	= "<b>(÷nceden format&#305; de&#287;i&#351;tirilmi&#351;) bir i&#351;lem listesini ithal etmek için:</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">E&#287;er<b>nakit para i&#351;lemlerini</b>bir puanlara dayanan kampanyan&#305;n ithal etmek isterseniz, emin olun
													<b><i>önce nakit para miktarlar&#305;n&#305; puanlara de&#287;i&#351;tirdi&#287;inizden</i></b>. (Excelde bir yeni kolon yarat&#305;n&#305;z ve orda
													parasal sat&#305;n alma miktar&#305;, kampanya ayarlar&#305;nda para miktar&#305;n&#305; kazan&#305;lan puanlara hesaplamak için yaz&#305;l&#305; olan".$lang['ppd']." oran&#305; ile çarp&#305;n&#305;z.)
												<li style=\"padding-bottom: 5px;\">A&#351;a&#287;&#305;daki pull-down menüde ihracat dosyas&#305;ndaki kolonlar&#305;n bölünme ve s&#305;ralanma &#351;eklini belirleyiniz.</li>
												<li style=\"padding-bottom: 5px;\">Bedelini ödeme i&#351;lemlerinde 'Redeem Event' kolonunda bir '<b>Y</b>' bulundu&#287;undan ve ordaki miktarlar <b><i>POZ&#304;T&#304;F olarak</i></b> kaydedilmi&#351; oldu&#287;undan emin olunuz.</li>
												<li style=\"padding-bottom: 5px;\">E&#287;er bir '<b>X al ve bir tane bedava al<b>' kampanyas&#305; için i&#351;lemler içeri aktar&#305;yorsan&#305;z, '<b>Item Purchased</b>' kolonunu seçti&#287;inizden emin olun.</li>
												<li style=\"padding-bottom: 5px;\">E&#287;er i&#351;lem ile beraber bir tarih gelmezse, i&#351;lem bugünki tarih ile kaydedilir.<br>
													Bilgiler sonraki her hangi bir formatda olabilirler<i>(senelerin 4 tane i&#351;areti olmas&#305; gerekiyor)</i>:<br>
													<pre style=\"margin: 0px; padding: 0px;\">YYYY/MM/DD, YYYY-MM-DD, YYYY.MM.DD, MM/DD/YYYY, MM-DD-YYYY, MM.DD.YYYY</pre></li>
												<li style=\"padding-bottom: 0px;\">Listenizi sonraki büyük kutuya kopyalay&#305;n&#305;z.</li>
											</ol>";
$lang['manage_import_campaign_name']	= "Kampanya IDsi";
$lang['manage_import_trans_date']		= "&#304;&#351;lem Tarihi";
$lang['manage_import_trans_amount']		= "&#304;&#351;lem Miktar&#305;";
$lang['manage_import_redeem_event']		= "Bedeli Ödenmi&#351; Olay (Y/N)";
$lang['manage_import_req_for_buyx']		= "Sadece ('X al ve bir tane bedava al' kampanyalar&#305;) için kullan&#305;l&#305;yor";
$lang['manage_import_item_purchased']	= "Sat&#305;n Al&#305;nm&#305;&#351; Nesne";
$lang['manage_import_description_auth']	= "Tasvir.";
$lang['manage_import_trans_list']		= "&#304;&#351;lem Listesi";
$lang['manage_import_paste_trans']		= "Mü&#351;teri i&#351;lemlerini a&#351;a&#287;&#305;daki kutuya kopyalay&#305;n&#305;z";

// Reports
$lang['report_all_customers']			= "Bütün Mü&#351;teriler";
$lang['report_all_customers_header']	= "Bütün Mü&#351;teriler Hakk&#305;nda Rapor";
$lang['report_all_customers_range']		= /* one date and another date */ "Aras&#305;nda Bütün Mü&#351;teriler";
$lang['report_balances_header']			= "Mü&#351;teri Bakiyesi Raporu";
$lang['report_balances']				= "Bunun &#304;çin Mü&#351;teri Bakiyeleri";
$lang['report_date_range']				= /* a range of dates.*/ "Aras&#305;nda i&#351;lemleri olan mü&#351;teriler:";
$lang['report_search_header']			= "Mü&#351;teri Arama Raporu";
$lang['report_search']					= "Mü&#351;terileri bunun ile ara:";
$lang['report_search_range']			= /* one date and another date */ "Aras&#305;nda";
$lang['report_search_not_valid']		= "Aramak için bir&#351;ey yazman&#305;z gerekiyor.";

// Report Exporting
$lang['export_xls']						= "Excel'e ihraç etmek";

// Users: Common actions:
$lang['user_role_F']					= "Ba&#351;ar&#305; Gösteren Sözle&#351;me Orta&#287;&#305;";
$lang['user_role_F_desc']				= "Yetkili kampanyan&#305;n içinde o sadece mü&#351;teri ödülleri alabilir.";

// Common Error Messages:
$lang['error_language_selector']		= "Seçilen lisan ile bir hata olu&#351;uyor.";
$lang['side_support_ideas']				= "Kampanya Fikirleri";
$lang['side_support_ideas_describe']	= "Yarat&#305;c&#305; yollar ile ilgili fikirler ve yol göstermeler, programlar&#305;m&#305;z&#305; sizin marketing, sizin organizasyonunuz veya genel anlamda davran&#305;&#351; de&#287;i&#351;im ihtiyaçlar&#305;n&#305;zi kullanmak için.";

// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================

$lang['error_account_suspended']		= "Bu hesap kapat&#305;ld&#305;";

// Calculator
$lang['calculator_title']				= "Puan Program&#305; Hesap Makinesi";
$lang['str_ratio']						= "Gider Ödüllendirme Oran&#305;";  // (same as "edit_str_ratio_sub_header", but without "your")
$lang['check_section_desc']				= "Kazand&#305;&#287;&#305;n&#305;zdan daha fazla hediye etmedi&#287;inizden<br>emin olunuz:";
$lang['Print']							= "Basmak";
$lang['column_product_or_pervice']		= "Ürün Veya Hizmet";
$lang['column_retail_price'] 			= "Ürünün / Hizmetin Perakende Fiyat&#305;";
$lang['column_points_earned'] 			= "Toplanan puanlar&#305; mü&#351;teri ba&#351;&#305;na bölmek";
$lang['column_points_needed'] 			= "Ödül olarak alabilmek için gereken puanlar";
$lang['column_cost_to_provide'] 		= "Ürünü / Hizmeti sunmak için masraflar&#305;n&#305;z";
$lang['column_profit_made'] 			= "Elde edilen kazanç&#305; sat&#305;&#351;&#305;ndan bölmek";
$lang['column_profit_made_part2']		= "Ürünler<br>Veya Hizmetler";
$lang['column_cost_reward_perc']		= "Ödüllendirme masraflar&#305;<br>kazanç&#305; % den.";
$lang['column_cost_reward_smaller']		= "(ne kadar küçükse, okadar daha iyi)";
$lang['instructions']					= "Yol Göstermeler";
$lang['calculator_instructions_1']		= "<strong>1) Mü&#351;terileriniz her harcad&#305;klar&#305; para birimi için puan al&#305;yor
lar.
											Ne kadar puan? Bu her hangi bir say&#305;d&#305;r:</strong><br>
											<br>
											Tabiki bir para birimi için 1 puan kolay, ama mü&#351;terilerinizede ma&#287;zalar&#305;nda
											ne kadar harcad&#305;klar&#305;n&#305; ö&#287;renme&#287;i kolayla&#351;t&#305;r&#305;yor, puan toplamlar&#305;na bakt&#305;klar&#305; zaman.
											Gerçekten hiç bir sebep yok, mü&#351;terilerinizin dikkatini ma&#287;azan&#305;z&#305; ne kadar sevdi&#287;inize ve bir servet harcamalar&#305;na çekmenize gerek yok.
											Bu yüzden toplam harcanan miktar&#305;n hesaplanmas&#305;n&#305; biraz zorla&#351;t&#305;ran bir say&#305; seçmek daha mant&#305;kl&#305;!
											E&#287;er cents veya kuru&#351; say&#305;yorsan&#305;z, en az 100 öneriyoruz. Ama kolayca 3, 5 veya 20 de olabilir, e&#287;er
											sizin için bir kaç kuru&#351;un bir küçük puan miktar&#305;na tamamlanmas&#305;na bir sak&#305;ncas&#305; yoksa.<br>
											<br>
											<strong>E&#287;er bir say&#305; seçtiyseniz, onu bu <span class=\"orangeH\">her para miktar&#305;na puan</span> kutusuna kaydedin.</strong><br>";
$lang['calculator_instructions_2']		= "<strong>2) Bir sonraki olarak <i>gider ödüllendirme oran&#305;</i> belirlenmesi gerekiyor.
											Burda &#351;u soru cevaplanmas&#305; gerekiyor: \"Kaç kere bir mü&#351;teri bir ürünü veya hizmeti almas&#305; gerekiyor, ödülün de&#287;eri ayn&#305; olana kadar?\"</strong><br />
											<br>
											Normal olarak 8 ve 25 veya daha fazla aras&#305; bir say&#305; oluyor. Ama genelde bu firmadan firmaya de&#287;i&#351;iyor.
											Mesele s&#305;k s&#305;k kahvehanelerde görünen, 10 tane ödenen kahveden sonra bir tane bedavaya sunan. Say&#305; ne kadar yüksek olursa, programda para miktar&#305;nda
											okadar daha tutucu oluyor, ama mü&#351;teriler içinde ödüllerini almalar&#305; böylece daha zor oluyor.<br>
											<br>
											<strong><span class=\"orangeH\">gider ödüllendirme oran&#305;</span> kutusuna bir say&#305; yaz&#305;n&#305;z
											ve çe&#351;itli miktarlar ile oynay&#305;n&#305;z.
											Memnun kalana kadar bir kaç miktar deneyiniz.</strong>";
$lang['calculator_disclaimer']			= "<strong>sorumluluk disi</strong>: Bu hesap makinesi sadece referans aleti olarak kullan&#305;ma sunuluyor ve biz &#351;irket sahiplerini bir kampanyadan önce olabilir sonuçlar&#305; bir deneyimli dan&#305;&#351;man ile konu&#351;malar&#305;n&#305; tesvik ediyoruz!";

// =========================
// ADDITIONAL TRANSLATIONS 3
// =========================

// Transaction Email Content Preferences:
$lang['transaction_email_content']		= "&#304;&#351;lem e-maili: içindekiler";
$lang['transaction_email_desc']			= "Bir i&#351;lem kaydederken ve mü&#351;teri bir e-mail adresi b&#305;rakm&#305;&#351;sa, ona bir e-mail yollamayi seçebilirsiniz.";
$lang['transaction_email_instr']			= "Mü&#351;terilerinizin sizden bu kampanya için alaca&#287;&#305; e-maili uygun hale getirmek için, bir sonraki e-mail örne&#287;indeki metin kutular&#305;n&#305; doldurun veya de&#287;i&#351;tirin:";
$lang['transaction_email_default']		= "Sadakat&#305;n&#305;z ve bize olan güveniniz için çok te&#351;ekkürler!";
$lang['transaction_email_incl_balance']	= "Hesap Durumunu Eklemek";
$lang['transaction_email_incl_rewards']	= "Ödüllendirme Bilgisini Eklemek";
$lang['transaction_email_incl_coupon']	= "Kupon Veya Promosyon Eklemek";
$lang['error_general_permission']		= "&#304;çerindekiler Yok";

// =========================
// ADDITIONAL TRANSLATIONS 4
// =========================
$lang['customer_edit_address_change']	= "De&#287;i&#351;en adres böyledir";
$lang['customer_edit_address_delete']	= "Adres silinmi&#351;. ÷nceden";
$lang['customer_edit_address_replace']	= "Adres bundan de&#287;i&#351;ti";

// =========================
// ADDITIONAL TRANSLATIONS 5
// =========================
// Email Updates:
$lang['email_agency_update_header']				= "Hesap de&#287;i&#351;imleri:";
$lang['email_agency_update_sub_header'] 		= "S&#305;radaki hesap bilgileri güncellendirilmi&#351;:";
// Import Updates:
$lang['Options']                             = "Seçenekler";  // Plural. The ability to choose from different alternatives or non-required additional specifications.
$lang['manage_import_duplicates_update']     = "Güncellemek";
$lang['manage_import_duplicates_ignore']     = "Atlamak";
$lang['manage_import_convert_currency'] 		= "&#304;&#351;lem miktar&#305; ölçülmü&#351; kampanya birimlerine dönü&#351;türülsünmü?";
$lang['manage_import_trans_instrctns_2']    	= 'E&#287;er<b>BAR i&#351;lemleri</b> bir puanlara dayanan kampanyaya,
                                             veya bir ziyaretçi listesini bir her olayda kazanma kampanyas&#305;na ithal ederseniz,
                                             "'.$lang['manage_import_convert_currency'].'" kutusunu seçti&#287;inizden emin olunuz. E&#287;er ki&#351;isel puan miktarlar&#305; veya ki&#351;isel hesab&#305;n&#305;za geçirilmi&#351; puan miktarlar&#305; ithal ediyorsan&#305;z,
															kutuyu seçmedi&#287;inizden emin olunuz.';
// Import Undo
$lang['import_previous_title']              = 'Önceki &#304;thalatlar';
$lang['Undo']                               = '&#304;ptal Etmek';
// BuyX Membership Functionality
$lang['Quantity']                          = "Eklenen Miktar";
// Mailchimp Integration:
$lang['select_a_list_to_export_to']       = "&#304;hracat için bir liste seçiniz";
$lang['success']                          = "Ba&#351;ar&#305;";
$lang['export_complete']                  = "&#304;hracat tamamland&#305;";
$lang['loading']                          = "Yükleme süreçi i&#351;liyor...";
$lang['oops']                             = "Dikkat!";
$lang['addresses_successfully_added']   	= "Bu listeye ba&#351;ar&#305; ile eklenmi&#351; e-mail adresleri";
$lang['all_addresses_exist']              = "Bu adreslerin her biri listede var bile!";
$lang['addresses_exist']                  = "Bu Listede &#351;imdiden olan e-mail adresleri";
$lang['we_found']                         = "Bulunan";
$lang['errors']                           = "Hata Haberi";
$lang['addresses_with_errors']            = "Hata Haberleri Olan E-Mail Adresleri";
$lang['Back']                             = "Geri";
$lang['CLOSE']                            = "KAPATMAK";
$lang['Visit_MailChimp']                  = "MailChimp'i Ziyaret Etmek";
$lang['mailchimp_integration']                  = "MailChimp Entegrasyon";
$lang['mailchimp_login_error']                  = "MailChimp kullan&#305;c&#305; isminizi/&#351;ifrenizi eklenmi&#351;. Güvenlik ayarlar&#305;n&#305;n sayesinde 10 tane arka arkaya login deneyiminden sonra 5 dakika beklemek mecburetindesiniz, tekrardan denemek için. ";
$lang['mailchimp_no_account_info']              = "MailChimp hesap bilgilerinizi bulamad&#305;k. &#304;hracat ile devam etmek için, onlar&#305; &#351;imdi yaz&#305;n&#305;z!";
$lang['mailchimp_bad_account_info']             = "MailChimp login isminiz veya &#351;ifreniz MailChimp taraf&#305;ndan tan&#305;namam&#305;&#351;d&#305;r. &#304;hracat ile devam etmek için, onu &#351;imdi yaz&#305;n&#305;z!";
$lang['bananas']                          = "Muzlar!";
$lang['no_username']                      = "Kullan&#305;c&#305; ismi ve/veya &#351;ifre yazmad&#305;n&#305;z!";
$lang['Username']                         = "Kullan&#305;c&#305; &#304;smi";
$lang['Password']                         = "&#350;ifre";

// =========================
// ADDITIONAL TRANSLATIONS 6
// =========================
$lang['account_new_header_agency']           = "Mü&#351;teriniz hakk&#305;nda bize bilgi veriniz:";
// Custom Date functionality
$lang['label_date']									= 'Tarih';
$lang['label_Year']									= 'Y&#305;l';
$lang['label_Month']									= 'Ay';
$lang['label_Day']									= 'Gün';
$lang['customer_new_demo_date']                 = '01/01/2010';
$lang['user_edit_record_change_custom_date']    = "Do&#287;um günü buna de&#287;i&#351;tirildi";
$lang['user_edit_record_replace_custom_date']	= "Do&#287;um günü buna de&#287;i&#351;tirildi";
$lang['report_customer_birthday']                     = "Yukar&#305;daki dönem içinde do&#287;um günü olan mü&#351;teriler";
$lang['report_customer_birthday_header']              = "Mü&#351;teri do&#287;um günlerinin raporu";
// API functionality
$lang['api_redeem_reward_exeeds']               = "Seçilen ödüllendirme seviyesi olan puan miktar&#305;n&#305; geçiyor";
$lang['api_redeem_amount_exeeds']               = "Yaz&#305;lan miktar olan puan miktar&#305;n&#305; geçiyor";
$lang['api_redeem_amount_not_valid']            = "Yaz&#305;lan miktar geçersiz";
$lang['api_redeem_amount_not_enough']           = "Yaz&#305;lan miktar en az&#305; 1 olmak mecburetinde";
$lang['api_redeem_currency_not_enough']         = "Yaz&#305;lan miktar en az&#305; 0.01 olmak mecburetinde";
$lang['api_redeem_nothing']                     = "÷deme için hiç bir&#351;ey istenmedi";
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
$lang['edit_reward_id']								= "Zorunlu de&#287;il: ÷düller IDsi";
// Previous integration:
$lang['user_edit_record_change_password']		= "&#350;ifre de&#287;i&#351;tirildi";
$lang['label_customer_password']					= "&#350;ifre";
// Trial Limit feature:
$lang['error_trial_overage']						= 'Ek mü&#351;teriler kaydedilebilinemiyor: Giri&#351; deneme modunda.';
$lang['error_trial_overage_some']				= 'Deneme giri&#351;: En fazla 10 tane mü&#351;teri. Di&#287;er mü&#351;terilerin i&#351;lemleri kaydedilmez.';
$lang['error_activate_missing']					= 'Etkin parametre eksik veya yanl&#305;&#351;.';

// =========================
// ADDITIONAL TRANSLATIONS 11
// =========================
// API - Users List
$lang['api_error_users_list_not_owner']		= "Sadece hesap sahiplerinin bu bilgilere giri&#351; hakk&#305; var";
$lang['api_error_no_users']						= "Ba&#351;ka kullan&#305;c&#305; bulunmad&#305;.";
$lang['Campaign_Error']								= "Geçersiz veya etkinli&#287;i kald&#305;r&#305;lm&#305;&#351; kampanya.";

// =========================
// ADDITIONAL TRANSLATIONS 12
// =========================
$lang['api_error_no_customer_match']			= "Hiç bir mü&#351;teri verilen bilgilere uymuyor.";
$lang['api_error_multiple_customer_match']	= "Bir çok mü&#351;teri verilen bilgilere uyuyor.";
$lang['api_error_PIN_empty']						= "Bu kay&#305;tda PIN kodu yok";
$lang['api_error_PIN_no_match']					= "PIN kodlar&#305; uymuyor";
$lang['api_error_password_missing']				= "&#350;ifre verilmemi&#351;";
$lang['api_error_PIN_missing']					= "PIN kodu verilmemi&#351;";
$lang['api_error_username_exists']				= "Bu kullan&#305;c&#305; ismi kullan&#305;l&#305;yor bile.";
$lang['api_error_invalid_delimiter']			= "Geçersiz Bölme i&#351;areti";
$lang['api_error_no_data']							= "Bilgi verilmemi&#351;";
$lang['manage_import_field_note']		= "<i>Her bo&#351; alan zorunlu de&#287;il.</i><br>
												<br>
												Dikkat: E&#287;er bir mü&#351;teriyi ithal etmek istiyorsan&#305;z ve<br>
												<b>i&#351;lemleri</b> sonra, ozaman her mü&#351;teri için bir belirlenmi&#351; <i>hesap IDsi</i><br>
												gerekiyor, i&#351;lemleri mü&#351;teriler ile<br>
												birle&#351;tirmek için.
												de&#287;i&#351;en<i>kart #</i>özgür olarak.<br>
												E&#287;er her mü&#351;teri için ayr&#305; belirli ID yoksa<br>,
												her ikisi 'hesap IDsi' ve 'kart #'' için<br>
												<i>kartlar #</i> yaz&#305;n&#305;z.";

$lang['label_PIN_new']				= "Yeni PIN kodu"; // (PIN is a 4 or 5 digit "personal identification number")
$lang['user_new_PIN_label']		= "Bu kullan&#305;c&#305; için PIN kodu seçmek";
$lang['user_new_PIN_note']			= "Zorunlu de&#287;il: Sadece terminaller için.";
$lang['user_edit_PIN_label']		= "PIN kodunu de&#287;i&#351;tirmek";
$lang['user_edit_PIN_note']		= "Ayn&#305; PIN kodu saklamak için bo&#351; b&#305;rak&#305;n.";
$lang['user_PIN_not_numeric']		= "Bir PIN kodu 4 veya 5 say&#305; içermesi gerekiyor";


// =========================
// ADDITIONAL TRANSLATIONS 13
// =========================
$lang['edit_record_change_PIN']			= "PIN kodu de&#287;i&#351;tirildi";
$lang['edit_record_change_username']	= "Kullan&#305;c&#305; isim de&#287;i&#351;tirildi";
$lang['manage_undo_warning']		= "Bu ithalat&#305; iptal etmek istedi&#287;inizden emin misiniz?<br><br>Bu ad&#305;m geriye çevrilebilinemez!";
$lang['manage_undo_warning_pc']	= "Bu ithalat&#305; iptal etmek istedi&#287;inizden emin misiniz?\n\Bu ad&#305;m geriye çevrilebilinemez!";


// =========================
// ADDITIONAL TRANSLATIONS 14
// =========================
$lang['user_my_info_header']						= "Benim Kullan&#305;c&#305; Bilgilerim";
$lang['user_role_I']									= "Acenta &#304;&#351;vereni + &#304;thalatlar";
$lang['user_role_I_desc']							= "Kampanya ayarlar&#305; ve kullan&#305;c&#305;lari düzenleme, raporlar ç&#305;karma ve
																mü&#351;teriler yönetme (silmek, ithal etmek) hakk&#305;na sahip olan ama kampanya veya hesap kullan&#305;c&#305;lar&#305; ekleme hakk&#305;na sahip olmayan menecer.";
$lang['user_role_G']									= "Acenta &#304;&#351;vereni";
$lang['user_role_G_desc']							= "Kampanya ayarlar&#305; ve kullan&#305;c&#305;lar&#305; düzenleme ve rapolar ç&#305;karma hakk&#305;na sahip olan
																ama kampanya veya hesap kullan&#305;c&#305;lar&#305; ekleme veya mü&#351;teri silme ve ithal etme hakk&#305;na sahip olmayan menecer.";


// =========================
// ADDITIONAL TRANSLATIONS 15
// =========================

$lang['coalition_balance_label']                                = "Aktüel <br>birle&#351;ik hesap durumu:";
$lang['coalition_redeem_header']                                = "&#350;u andaki bulunan ma&#287;aza ödülleri";
$lang['customer_activity_coalition_header']             = "Mü&#351;teri Tarihi (sadece bu ma&#287;aza)";
$lang['report_coalition_header']                                = "Birle&#351;ik Raporlar";
$lang['report_audits_totals_points']                            = "Ma&#287;aza Bakiyeler Puanlar&#305;";
$lang['report_audits_totals_giftcard']                  = "Ma&#287;aza Bakiyeler Hediye Kartlar&#305;";
$lang['section_account_options_header']         = "&#304;lerlemi&#351; Hesap Terçihleri";
$lang['section_account_options_sub']                    = "E&#287;er ilerlemi&#351;ler için bir hesap (kapal&#305; olmayan programlar) açmak istiyorsan&#305;z, ald&#305;&#287;&#305;n&#305;z etkinle&#351;tirme kodu a&#351;a&#287;adaki bir alana yaz&#305;n&#305;z. E&#287;er sorular&#305;n&#305;z varsa veya etkinle&#351;tirme kodunu almad&#305;ysan&#305;z, bizimle lütfen temas kurunuz.";
$lang['section_coalition_token']                                = "Birle&#351;ik Etkinle&#351;tirme Kodu";
$lang['section_mall_token']                                     = "&#304;ki Düzey / Al&#305;&#351;veri&#351; Merkezi Etkinle&#351;tirme Kodu";
$lang['section_coalition_note']                                 = "Fiyat art&#305;&#351;&#305; ile al&#305;nabilir.";
$lang['section_mall_note']                                              = "Fiyat art&#305;&#351;&#305; ile al&#305;nabilir.";
$lang['section_mall_campaign_id']                               = "Al&#305;&#351;veri&#351; Merkezi Kampanya IDsi";
$lang['section_mall_percentage']                                = "Al&#305;&#351;veri&#351; Merkezi Katk&#305;s&#305; (%)";
$lang['section_token_invalid']                                  = "Etkinle&#351;tirme kodu geçersiz";
$lang['section_mall_options_header']                    = "Al&#305;&#351;veri&#351; merkezi seçenekleri";
$lang['percentage_not_valid']                                   = "Yüzde oran&#305; geçersiz.";


// =========================
// ADDITIONAL TRANSLATIONS 16
// =========================
$lang['api_error_permission_denied']            = "Kullan&#305;c&#305; giri&#351; hakk&#305;na sahip de&#287;il"; // An error message that shows up when a user makes an API call their permission level does not allow access to.
$lang['api_error_wrong_account']                    = "Kullan&#305;c&#305; bu hesaba dair giri&#351; hakk&#305;na sahip de&#287;il"; // An error message that shows up when a user makes an API call that affects the wrong account.
$lang['api_error_missing_username']                = "Kullan&#305;c&#305; ismi eksik"; // An error message that shows up when a username (Account User, not Customer) is required but is missing.
$lang['api_error_PIN_too_many_matches']        = "Bu PIN bir çok kullan&#305;c&#305; taraf&#305;ndan kullan&#305;l&#305;yor";  // Shows when an account user is trying to be validated in a terminal-like setting bY entering only their PIN which ought to be unique, but there is more than one matching PIN.
$lang['api_error_PIN_duplicate']                    = "Bu PIN kullan&#305;l&#305;yor bile"; // Shows when an user is created or updated and the PIN assigned to them is already in use bu another user in the account.
$lang['api_error_campaign_id']                    = 'Kampanya IDsi ile ilgili bir hata';
$lang['api_error_campaign_name']                    = 'Kampanya ismi ile ilgili bir hata';
$lang['api_error_campaign_type']                    = 'Kampanya türü ile ilgili bir hata';
$lang['api_error_campaign_points_ratio']        = 'Kampanya puanlar&#305;ndan'.$lang['currency'].' oran&#305; ile ilgili bir hata';
$lang['api_error_campaign_rewards_ratio']        = 'Kampanya giderlerinden ödüllendirme oran&#305; ile ilgili bir hata';
$lang['api_error_campaign_depreciation']        = 'Kampanya amortisman ayarlar&#305; ile ilgili bir hata';
$lang['api_error_campaign_dpv']                    = 'Kampanya her etkinlikten kazan tutar&#305; ile ilgili bir hata';
$lang['api_error_campaign_promo']                = 'Kampanya promosyon parametresi ile ilgili bir hata';
$lang['api_error_campaign_reward']                = 'Kampanya ödüllendirme parametresi ile ilgili bir hata';
$lang['api_error_campaign_item']                    = 'BuyX kampanya parametresi ile ilgili bir hata';
$lang['report_custom_date2']                        = "Özel tarihlerinin yukar&#305;da yazan bölümde olan mü&#351;teriler";
$lang['report_custom_date2_header']                = "Mü&#351;terilerin özel tarih raporu";




// END OF FILE
?>
