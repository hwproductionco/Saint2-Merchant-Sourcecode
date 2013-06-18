<?php
/* =======================
   TRANSLATION NOTES
==========================
This is (part of) the American English language file

To edit or modify this file, simply replace the word, phrase,
text, or HTML code in between the doulbe quote (") marks.

Any text after a double slash "//" at the end of a line is a comment to explain or clarify.

Any text between the two characters "/*" and "* /" represents text or graphics and will help
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

What's that "&egrave;" in the example above? It's the Ž (accented letter). Make sure
to replace all accented letters (like Ž, –, , etc) with their HTML equivalent.
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


// Login Screen
$lang['login_amnesia_prompt']			= "نسيت إسم المستخدم أو كلمة السر?";
$lang['login_amnesia_button']			= "! استرجاع الآن";
$lang['login_fancy_1']					= "حساب";
$lang['login_fancy_2']					= "تسجيل الدخول";
$lang['login_new_account_prompt']		= "لا تملك حسابا؟";
$lang['login_new_account_button']		= "!الاشتراك الآن";

// New Account Screen
$lang['account_enter_first']			= ".الرجاء كتابة الاسم الأول";
$lang['account_enter_last']				= ".الرجاء كتابة الاسم الأخير";
$lang['account_language_note']			= ".ملاحظة : هذا هو الحساب تفضيل لغة العامة <br>سرد لوضع المستخدم (في قسم المستخدمين) ، أو اختيار لغة مختلفة <br>على شاشة تسجيل الدخول وسوف يعلو هذا التفضيل.";
$lang['account_terms_agree']			= ".يجب أن توافق على الشروط بوضع علامة في المربع الموجود أعلاه";
$lang['account_new_create_button']		= "إنشاء حساب";
$lang['account_new_directions']			= " :لتبدأ ، ببساطة إنشاء حساب بملء النموذج التالي";
$lang['account_new_end']				= "!هذا كل شيء"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "أخبرنا قليلا عن نفسك";
$lang['account_new_owner_id']			= "اختيار هوية المالك";
$lang['account_new_owner_restrict']		= "20حرفا كحد أقصى ، وبدون مسافات";
$lang['account_new_owner_user_id']		= "اختيار هوية المستخدم";
$lang['account_new_password']			= ".اختيار كلمة مرور لحسابك";
$lang['account_new_password_restrict']	= "5إلى 20 حرفا ، والأحرف والأرقام فقط";
$lang['account_new_phone_dir']			= ".يبدأ '+' اذا كان من خارج الولايات المتحدة";
$lang['account_referred']				= "إذا كنت أشير ، على يد من؟";
$lang['account_referred_dir']			= ".اسم ، والتنظيم ، أو الإحالة مدونة";
$lang['account_terms_conditions_dir']	="يرجى قراءة وعلامة في المربع للموافقة على"; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "بنود وشروط الاستخدام";
$lang['account_terms_conditions_agree']	= "وأنا أتفق مع الشروط والمواصفات";
$lang['account_timezone_note']			= ".ملاحظة : هذا هو الحساب العامة تفضيل الزمن. <br>
حساب المستخدم يمكن وضع إلى آخر الزمن (في قسم المستخدم) ، <br>
التي تعلو هذه الأفضلية";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "المعلومات التجارية";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= ":عنوان";
$lang['account_label_billing_level']	= ":المستوى الفواتير";
$lang['account_label_biz_name']			= ":الاسم التجاري";
$lang['account_label_biz_address1']		= ":1 سطر العنوان";
$lang['account_label_biz_address2']		= ":2 سطر العنوان";
$lang['account_label_custom_fee']		= "عرف الرسم الشهري ";
$lang['account_label_customers']		= "حسابات العملاء";
$lang['account_label_customers_manage']	= "العملاء وإدارة السجلات";
$lang['account_label_free']				= "مجان"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "حساب المالك";
$lang['account_label_owner_contact']	= ":صاحب الاتصال";
$lang['account_label_pay_invoices']		= "ونظرا ل/ دفع الفواتير";
$lang['account_label_per_month']		= "شهر/";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "صاحب الدخول";
$lang['account_password_missing']		= ".عدم التوافق كلمة السر : الرجاء كتابة كلمة المرور الجديدة في كل من صناديق";
$lang['account_passwords_mismatch']		= ".كلمة السر الجديدة التي أدخلتها لا يتطابق. <br>   يرجى من نوع جديد في كل من صناديق";
$lang['account_owner_sec_token']		= "رمز الأمن";

// Control Panel
$lang['cp_step_dir_header']				= "!يتم كل شيء";
$lang['cp_step_dir']					= "هذا هو \"لوحة التحكم\" شاشة ، حيث تبدأ بعد تسجيل الدخول.<br>.من هنا يمكنك إدارة جميع جوانب حسابك";
$lang['cp_campaigns_table_header_1']	= "اسم الحملة";
$lang['cp_campaigns_table_header_2a']	= "حملة ";	// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']	= "العملاء";	// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']	= "حملة ";		// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']	= "المعاملات";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']	= "حملة";	// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']	= "وضع";		// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']	= "حملة";		// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']	= "التفضيلات";	// This is the bottom line of the english phrase "Campaign Preferences"


?>
