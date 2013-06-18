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

What's that "é" in the example above? It's the é (accented letter).
Make sure to replace all accented letters (like é, ñ, ç, etc) with their HTML equivalent.
Use one of these online converters:
    http://konieczny.be/article/utf.php (Choose HTML Entities from pull-down)

or for more detail or to do it manually, see:
	http://tlt.its.psu.edu/suggestions/international/web/codehtml.html

If you need to use a double quote in the text, (usually if you want to incude HTML tags),
escape each double quote by placing a \ (forward slash) in front of it. Ex:
    ... = "<span style=\"color: red;\">Hello World!</span>"

Explanation of Terms:
 - Client				Generally refers to the business using this service
 - Customer				Generally refers to customers of a business using this service.

For any questions, send email to support@stickystreet.com

=========================== */


// Initialize global language variable. (ignore the following line:)
global $lang;

// Default currency values to be replaced with preferences?
if (!isset($lang['currency'])) {
	$lang['currency']						= "Dólar";
}
if (!isset($lang['currency_plural'])) {
	$lang['currency_plural']				= "Dólares";
}
if (!isset($lang['currency_symbol'])) {
	$lang['currency_symbol']				= "$";
}
if (!isset($lang['currency_100th'])) {
	$lang['currency_100th']					= "Centavo";
}
if (!isset($lang['currency_100th_plural'])) {
	$lang['currency_100th_plural']			= "Cêntimos";
}
if (!isset($lang['currency_100th_symbol'])) {
	$lang['currency_100th_symbol']			= "¢";
}



// Single words and labels
// (Pay attention to capitalization)
$lang['col_1']							= "1";  		// Header for column 1 of reports and bookmarks sections
$lang['col_2']							= "2";  		// Header for column 2 of reports and bookmarks sections
$lang['col_3']							= "3";  		// Header for column 3 of reports and bookmarks sections
$lang['Account']						= "Cuenta";  	// Noun: As in "a collection of transactions". Ex: "Click here to view this customer's account."
$lang['Activate']						= "Activar";  	// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "Activación";	// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "Actividad";  	// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "Agregado";  	// Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']				= "+";			// The mathematical symbol for addition
$lang['All']							= "Todo";  		// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "Monto";  	// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "y";  		// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']					= "Autorización"; // Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "Disponible";  // As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "Saldo"; 		// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['Balances'] 						= "Saldos"; 	// Plural
$lang['By']								= "Por"; 		// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "Programa";	// As in a marketing campaign, but in this case, really meaning a "program" as in "Loyalty Program",
														// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "Programas";	// Plural
$lang['Country']						= "País";	// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "Clientes";	// As in people who purchase goods or services from the a business that uses this loyalty service.
$lang['Date']							= "Fecha";		// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "Días";		// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "Demo";		// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']					= "Descripción"; // Ex: "Provide a description of the transaction in this box:"
$lang['Employee']						= "Empleado";	// As in a person that works for a business or organization.
$lang['Earned']							= "Acumulado";		// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "Error";		// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "suceso";		// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a reward.
$lang['events']							= "sucesos";
$lang['Event']							= "Suceso";
$lang['Events']							= "Sucesos";
$lang['from']							= "de";		// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "Gratis";		// As if "no need to pay" or "no charge". Ex: "Our Loylaty Program is free when you have 10 or less customers.
$lang['Hello']							= "Hola";		// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "info";		// Short for "information".
$lang['Level']							= "Nivel";		// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "Deuda";	// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']			= "x";			// The mathematical symbol for multiplication
$lang['Need']							= "Necesita";		// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "No hay";			// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "Ningún";		// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "Nota";		// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "Notas";		// Plural of "Note", above
$lang['Online']							= "En lÌnea";		// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "Operación";  // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['optional']						= "opcional"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";
$lang['or']								= "o";			// As in "either", between two alternatives. Ex: "this or that".
$lang['point']							= "punto";		// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['Paid']							= "Pagó";		// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['points']							= "puntos";
$lang['Point']							= "Punto";
$lang['Points']							= "Puntos";
$lang['per']							= "por";				// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Ratio']							= "Relación";	// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']					= "Registrado por"; 	// As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "Canjeó"; 		// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "Ref"; 				// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Report']							= "Informe"; 			// As in "Relatory", or "Presentation".
$lang['Reward'] 						= "Recompensa"; 		// As in a thing that can be claimed after certain conditions have been met. Ex: "The reward for having 1000 points is a free widget."
$lang['Rewards'] 						= "Recompensas"; 		// Plural
$lang['Role']							= "Rol";				// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Thank-you']						= "Gracias";			// As in "Thank-you for your business" - said by the Client to a Customer.
$lang['Tip']							= "Consejo";			// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "hasta";				// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "Para obtener"; 		// As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['To_Get_One_Of'] 					= "Para obtener uno"; 	// As in "to receive" or "to be given" a single quantity. Ex: "You need to buy 10 coffees to get one of [the same] free"
$lang['Trans_ID']						= "Nº Op."; 			// Short for "Transaction ID" - Referring to an internal loyalty program number to reference a particular transaction.
$lang['Transaction']					= "Operación"; 	// A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']					= "Operaciones"; 		// Plural
$lang['User']							= "Usuario"; 			// As in an employee of the business or organization that can login to use the loylaty service.
$lang['Yes']							= "Sí";

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."-".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "Agregar Programa";
$lang['title_add_product_service']		= "Agregar Producto/Servicio para";
$lang['title_add_promotion']			= "Agregar Promoción para";
$lang['title_add_reward']				= "Agregar Recompensa para";
$lang['title_add_user']					= "Agregar Usuario";
$lang['title_amnesia'] 					= "Olvido de datos de inicio de sesión o contraseña";
$lang['title_award_reddeem'] 			= "Premio Canjeado";
$lang['title_create_new_account']		= "Crear Nueva Cuenta";
$lang['title_default']					= "GestiÛn de Obsequios y Fidelidad";
$lang['title_edit_account']				= "Editar Información de la cuenta";
$lang['title_edit_account_number']		= "Editar Cuenta ";
$lang['title_edit_campaign']			= "Editar Configuración para";
$lang['title_edit_product_service']		= "Editar Producto/Servicio para";
$lang['title_edit_promotion']			= "Editar Promoción para";
$lang['title_edit_reward']				= "Editar Recompensa para";
$lang['title_edit_user']				= "Editar Usuario";
$lang['title_find_add']					= "Encontrar o Agregar Cuenta en";
$lang['title_login'] 					= "Iniciar Sesi&oacute:n de Cuenta";
$lang['title_managing_cards']			= "Gestión de Tarjetas";
$lang['title_more_r_and_e_banners'] 	= "Más Banners de Recomiende y Gane Recompensas";
$lang['title_r_and_e_balance']			= "Su Saldo de Recomienda y Gana Recompensas";
$lang['title_report_all_trans']			= "Informe de Todas las Operaciones";
$lang['title_report_freq_cust']			= "Informe de Clientes Frecuentes";
$lang['title_report_miss_cust']			= "Informe de Clientes Infrecuentes";
$lang['title_report_new_cust']			= "Informe de Nuevos Clientes";
$lang['title_report_redeem_trans']		= "Informe de Operaciones de Canje";
$lang['title_report_totals']			= "Informe de Totales";
$lang['title_search_result']			= "Resultado de la Búsqueda";
$lang['title_trans_del']				= "Operación Borrada";
$lang['title_trans_rec'] 				= "Operación Registrada";
$lang['title_view_account']				= "Ver Cuenta Nº";

// Side Modules
$lang['side_blog_describe']				= "Para ver anuncios, consejos y puntos de vista, visite nuestro"; // ... blog
$lang['side_loyalty_link_desc']			= "Llévelos de vuelta a su sitio con Registro en Línea y Consulta de Saldo";
$lang['side_support_desk_describe']		= "Busque preguntas y respuestas en nuestra Base de Consultas y envíenos su solicitud de asistencia";
$lang['side_support_email_call']		= "Envíe directamente su solicitud de asistencia por correo electrónico o llámenos:";
$lang['side_support_links']				= "Enlaces de <span style=\"color:#79B216;\">Asistencia</span>";
$lang['side_support_phone']				= "<span style=\"font-weight: bold;\">866-780-STICKY</span> <span style=\"color: #888; font-size: 80%;\">(7842)</span>";
$lang['side_points_calc_desc']			= "Una herramienta para ayudarlo a determinar sus niveles de recompensa";

// Destinations / Section names
$lang['section_account_control_panel']	= "Panel de Control de la Cuenta";
$lang['section_account_info_header']	= "Información de la Cuenta";
$lang['section_account_login']			= "Inicio de Sesión de la Cuenta";
$lang['section_account_new']			= "Crear una Cuenta";
$lang['section_blog']					= "Blog";
$lang['section_campaign_reports']		= "Informes del Programa";
$lang['section_customer_account']		= "Cuenta del Cliente";
$lang['section_loyalty_link_inst']		= "Instrucciones del Enlace de Fidelidad";
$lang['section_points_calculator']		= "Calculadora de Puntos";
$lang['section_points_promotions']		= "Promociones";
$lang['section_support_desk']			= "Servicio de Asistencia";

// Labels
$lang['label_account_id']				= "Nombre de identificación";				// Usually, a Client's account identification "code" (An alphanumeric string of 5 to 20 characters)
$lang['label_unique_id']				= "Código único";				// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']			= "Titular de la cuenta";			// The person who created a loyalty program account.
$lang['label_additional_info']			= "Información adicional";			// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info']			= "Información adicional";
$lang['label_card']						= "Nº de tarjeta";					// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']						= "Ciudad";
$lang['label_date_range']				= "Rango de fechas";				// Ex: January 2008 to December 2008
$lang['label_email']					= "Dirección de correo electrónico";
$lang['label_email_short'] 				= "Correo electrónico";
$lang['label_first_name']				= "Nombre";				// As in "given name". ie: not the one shared by their family.
$lang['label_last_name']				= "Apellido";				// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_language_select']			= "Idioma";						// As in a prompt to the user to select a language for the application
$lang['label_name']						= "Nombre completo";					// The joining of first and last names.
$lang['label_organization']				= "Organización";			// As in a business, church, school, club, etc.
$lang['label_owner_id']					= "Nombre de identificación del titular";				// A unique login name that identifies the user as the account owner.
$lang['label_password']					= "Contraseña";
$lang['label_password_new']				= "Nueva contraseña";
$lang['label_password_retype_short']	= "Reingrese su contraseña";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "Reingrese su nueva contraseña";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']					= "Número de teléfono";
$lang['label_state']					= "Estado / Provincia";
$lang['label_user_id']					= "Nombre de identificación";				// A unique login name that allows an employee of a client to access the program.
$lang['label_zip']						= "Código postal";

// Navigation
$lang['nav_active']						= "Activo";			// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "Agregar";			// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "Cancelar";			// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']					= "Cambiar por:";		// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']					= "Desactivar";  	// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "Descontar";  		// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "Borrar";			// Verb: As in "remove" or "rease". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']				= "Cancelar selección de todo";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "Terminado";			// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "Editar";			// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "Buscar";			// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "TERMINAR";			// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "Ir";				// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "Esconder";			// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']					= "Ir a:"; 		// As in changing screens, pages, or location.
$lang['nav_log_in']						= "Iniciar sesión";			// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "Cerrar sesión";			// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "Consulta";			// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "Siguiente";			// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']					= "Suspendido";		// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "Imprimir";			// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']				= "Imprimir resumen";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']				= "Volver a activar";	// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "Registrar";			// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "Canjear";			// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "Eliminar";			// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "Regresar";			// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "Mostrar";			// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']				= "Guardar cambios";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']					= "Seleccionar todo";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "Establecer";			// Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "Paso 1";			// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "Paso 2";
$lang['step3']							= "Paso 3";
$lang['step4']							= "Paso 4";

// Login Screen
$lang['login_amnesia_prompt']			= "¿Olvidó su nombre de identificación de usuario o contraseña?";
$lang['login_amnesia_button']			= "¡Recupérelo ahora!";
$lang['login_email_missing']			= "Por favor, ingrese la dirección de correo electrónico de su cuenta:";
$lang['login_fancy_1']					= "iniciar";
$lang['login_fancy_2']					= "sesión";
$lang['login_new_account_prompt']		= "¿No tiene una cuenta?";
$lang['login_new_account_button']		= "¡Regístrese ahora!";
$lang['login_password_missing']			= "Por favor, ingrese su contraseña";
$lang['login_userid_missing']			= "Por favor, ingrese su nombre de identificación de usuario";
$lang['login_wrong_password']			= "La contraseña ingresada no coincide con la que tenemos registrada.";
$lang['login_wrong_user_id']			= "No se encontró el nombre de identificación de usuario ingresado.";

// Forgot Password / Username section;
$lang['amnesia_header']					= "¿Sufre un ligero caso de amnesia?";
$lang['amnesia_note_top']				= "Un comentario sobre los filtros de correo electrónico no deseado:";
$lang['amnesia_note_text']				= "Si no recibe un correo electrónico de parte de nosotros en los próximos minutos, revise su filtro de correo no deseado.
											El correo se le enviará desde";
$lang['amnesia_password_button']		= "Enviarme mi contraseña";
$lang['amnesia_password_dir']			= "Ingrese su nombre de identificación de usuario debajo, y le enviaremos su contraseña a la dirección de correo electrónico que tenemos registrada.";
$lang['amnesia_password_header']		= "¿Olvidó su contraseña?";
$lang['amnesia_password_sent']			= "¡Excelente!<br><br>Su contraseña se envió a<br>la dirección de correo electrónico que tenemos registrada<br>para esta cuenta.";
$lang['amnesia_return_button']			= "Regresar a la pantalla de inicio de sesión";
$lang['amnesia_sub_header']				= "No se preocupe, podemos ayudarlo... Su nombre sí lo recuerda, ¿verdad?";
$lang['amnesia_user_id_button']			= "Enviarme mi nombre de identificación de usuario";
$lang['amnesia_user_id_dir']			= "Ingrese su dirección de correo electrónico debajo, y le enviaremos por ese medio todos los nombres de usuario relacionados con la misma:";
$lang['amnesia_user_id_header']			= "¿Olvidó su nombre de identificación de usuario?";
$lang['amnesia_userid_sent']			= "¡Excelente!<br><br>Su nombre de identificación de usuario se envió a<br>la dirección de correo electrónico que nos dio.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "o menos cuentas de clientes"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "Debe ingresar el nombre de la organización a la que pertenece."; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "Debe darnos una dirección de correo electrónico.";
$lang['account_email_needed_2']			= "Es de esta manera que le informaremos de los cambios en su cuenta y sus niveles de facturación.";
$lang['account_enter_first']			= "Por favor, ingrese su nombre.";
$lang['account_enter_last']				= "Por favor, ingrese su apellido.";
$lang['account_id_empty']				= "Debe elegir e ingresar un nombre de identificación de cuenta.";
$lang['account_id_exists']				= "Este nombre de identificación de cuenta ya está en uso.<br>Por favor, seleccione uno diferente.";
$lang['account_id_not_valid']			= "Los nombres de identificación de cuenta sólo pueden contener letras, números o un guión bajo (_)";
$lang['account_terms_agree']			= "Debe marcar la casilla que se encuentra arriba para aceptar los Términos y Condiciones.";
$lang['account_new_create_button']		= "Crear cuenta";
$lang['account_new_directions']			= "Para comenzar, simplemente cree una cuenta por medio del formulario que se encuentra a continuación:";
$lang['account_new_end']				= "¡Eso es todo!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "Cuéntenos un poquito sobre usted";
$lang['account_new_owner_id']			= "Escoja un nombre de identificación para el titular";
$lang['account_new_owner_restrict']		= "máximo 20 caracteres, sin espacios";
$lang['account_new_owner_user_id']		= "Escoja un nombre de identificación de usuario";
$lang['account_new_password']			= "Elija una contraseña para su cuenta.";
$lang['account_new_password_restrict']	= "Entre 5 y 20 caracteres, sólo letras y números";
$lang['account_new_phone_dir']			= "Comience con '+' si se encuentra fuera de los EE.UU.";
$lang['account_new_step1_greet']		= "Felicitaciones, ha creado una nueva cuenta.";
$lang['account_new_step1_dir']			= "Ahora lo guiaremos a través de los cuatro pasos siguientes:";
$lang['account_new_step1_1']			= "La creación de un programa de fidelidad o un programa de tarjetas de regalo.";
$lang['account_new_step1_2']			= "Personalizarlo de acuerdo con sus necesidades.";
$lang['account_new_step1_3']			= "Ingresar la operación de un cliente.";
$lang['account_new_step1_4']			= "Regresar al panel de control de la cuenta.";
$lang['account_referred']				= "Si llegó por medio de una recomendación, ¿quién lo recomend&oacute?";
$lang['account_referred_dir']			= "Nombre, organización o código de recomendación.";
$lang['account_referrer_record']		= /* The referred business */ "registró una cuenta gratuita.";
$lang['account_terms_conditions_dir']	= "Por favor, lea y marque la casilla para aceptar los"; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "Términos y Condiciones de Uso";
$lang['account_terms_conditions_agree']	= "Acepto los Términos y Condiciones";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "Información de la compañía";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= "Dirección:";
$lang['account_label_billing_level']	= "Nivel de facturación:";
$lang['account_label_biz_name']			= "Nombre de la compañía:";
$lang['account_label_biz_address1']		= "Dirección - línea 1";
$lang['account_label_biz_address2']		= "Dirección - línea 2";
$lang['account_label_custom_fee']		= "Tarifa mensual personalizada";
$lang['account_label_customers']		= "Clientes";
$lang['account_label_customers_manage']	= "Gestión de clientes";
$lang['account_label_free']				= "Gratuito"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "Titular de la cuenta";
$lang['account_label_owner_contact']	= "Forma de contactar al titular:";
$lang['account_label_pay_invoices']		= "Ver / pagar facturas ";
$lang['account_label_per_month']		= "/ por mes";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "Iniciar sesión como titular";
$lang['account_password_missing']		= "La contraseña no coincide: Por favor, ingrese la nueva contraseña en ambas casillas.";
$lang['account_passwords_mismatch']		= "La nueva contraseña que ingresó no coincide.<br>Por favor, ingrésela nuevamente en ambas casillas.";
$lang['account_owner_sec_token']		= "Acceso de seguridad";

// Control Panel
$lang['cp_step_dir_header']				= "¡Terminado!";
$lang['cp_step_dir']					= "Ésta es la pantalla del \"Panel de Control\", donde apareces una vez que iniciaste una sesión.<br>Desde aquí puedes administrar todos los aspectos de tu cuenta";
$lang['cp_campaigns_table_header_1']	= "Nombre del programa";
$lang['cp_campaigns_table_header_2a']	= "Clientes";	// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']	= "del programa";	// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']	= "Operaciones";		// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']	= "del programa";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']	= "Estado";	// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']	= "del programa";		// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']	= "Preferencias";		// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']	= "del programa";	// This is the bottom line of the english phrase "Campaign Preferences"

// Create / Edit User
$lang['user_campaigns_header']			= "Seleccione a qué programas tiene acceso este usuario:";
$lang['user_campaigns_admins']			= "Los administradores tendrán acceso automático a todos los programas";
$lang['user_edit_header']				= "Editar usuario:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "Cambiar la contraseña";
$lang['user_edit_password2_label']		= "Por favor, ingrese la contraseña nuevamente";
$lang['user_edit_password_note']		= "Para mantener la misma contraseña, deje éstas en blanco.";
$lang['user_edit_record_change_card']	= /* The Card # */ "se reemplazó por:"; /* a new Card # */
$lang['user_edit_record_change_name']	= "Cambio de nombre";
$lang['user_edit_record_del_card']		= /* The Card # */ "se ha eliminado";
$lang['user_edit_record_new_card']		= "Se ha asignado un nuevo número de tarjeta:";
$lang['user_edit_record_change_phone']	= "Cambiar número de teléfono por";
$lang['user_edit_record_replace_phone']	= "Cambiar número de teléfono de";
$lang['user_edit_record_to_none']		= "ninguno"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']	= "Cambiar correo electrónico por";
$lang['user_edit_record_replace_email']	= "Cambiar correo electrónico de";
$lang['user_edit_record_change_addtl']	= "Cambiar información adicional por";
$lang['user_edit_record_del_addtl']		= "Información adicional eliminada. Previamente";
$lang['user_edit_record_replace_addtl']	= "Cambiar información adicional de";
$lang['user_info_sub_header']			= "Información del usuario";
$lang['user_new_header']				= "Usuario nuevo";
$lang['user_new_id_empty']				= "Para crear un nuevo usuario es necesario un nombre de identificación de usuario.";
$lang['user_new_id_not_valid']			= "Los nombres de identificación de usuario sólo pueden contener letras, números o un guión bajo (_)";
$lang['user_new_id_exists']				= "El nombre de identificación de usuario elegido ya existe.<br>Por favor, seleccione uno diferente.";
$lang['user_new_no_role']				= "Debe seleccionar un rol para este usuario:";
$lang['user_new_password_label']		= "Elija una contraseña para este usuario";
$lang['user_new_record_button']			= "Registrar usuario nuevo";
$lang['user_new_user_id_label']			= "Elija un nombre de identificación de usuario con el que iniciar sesión";
$lang['user_restrict_20_char']			= "máximo 20 caracteres";
$lang['user_role_header']				= "Rol del usuario";
$lang['user_role_directions']			= "Por favor, seleccione un rol para este usuario";

// Users: Common actions:
$lang['user_add_button']				= "Agregar un usuario nuevo";
$lang['user_delete_popup']				= "<strong>Este usuario se eliminará de su lista de Usuarios Autorizados y se archivará.</strong><br>
											Este nombre de identificación de usuario no podrá utilizarse otra vez como nombre de identificación de un usuario nuevo.<br>
											<br>
											Para recuperar un usuario archivado, póngase en contacto con nosotros. Este servicio tiene un costo.<br>
											<br>
											<strong>¿Está seguro de que quiere eliminar este usuario?</strong>";
$lang['user_delete_popup_pc']			= "Este usuario se eliminará de su lista de Usuarios Autorizados y se archivará.\n\n
											Este nombre de identificación de usuario no podrá utilizarse otra vez como nombre de identificación de un usuario nuevo.\n\n
											Para recuperar un usuario archivado, póngase en contacto con nosotros. Este servicio tiene un costo.\n\n
											¿Está seguro de que quiere eliminar este usuario?";
$lang['user_header']					= "Administrar Usuarios Autorizados y sus permisos";
$lang['user_list_none']					= "No se agregaron aún usuarios adicionales.";
$lang['user_role_A']					= "Administrador";
$lang['user_role_A_desc']				= "Tiene acceso total.";
$lang['user_role_C']					= "Contador";
$lang['user_role_C_desc']				= "Puede generar informes, ver información sobre la facturación de la cuenta y configuración del programa de recompensas, pero no puede ver información de usuarios y clientes.";
$lang['user_role_K']					= "Empleado administrativo";
$lang['user_role_K_desc']				= "Dentro de los programas permitidos, puede crear y editar información de clientes (pero no cambiar su número de tarjeta,
											de haber uno asignado) y puede registrar y aplicar visitas de clientes a canje (pero no borrar ningún dato.)";
$lang['user_role_M']					= "Gerente";
$lang['user_role_M_desc']				= "Tiene acceso total dentro de los programas permitidos y acceso limitado a configuraciones de las cuentas
											(No puede ver información de facturación, puede generar informes y puede agregar y editar, pero no borrar, usuarios de cuentas.)";
$lang['user_role_N']					= "Gerente del programa";
$lang['user_role_N_desc']				= "Tiene acceso total dentro de los programas permitidos y acceso limitado a configuraciones de las cuentas
											(Puede generar informes, no puede ver información de facturación, no puede administrar usuarios, no puede crear o borrar programas de recompensas.)";
$lang['user_role_O']					= "Observador";
$lang['user_role_O_desc']				= "Puede ver información de usuarios y clientes y ciertas características de los programas (recompensas y promociones.)";
$lang['user_role_P']					= "Trabajador temporario";
$lang['user_role_P_desc']				= "Dentro de los programas permitidos, sólo puede crear nuevos clientes y registrar visitas de clientes.";
$lang['user_role_S']					= "Gerente Asociado";
$lang['user_role_S_desc']				= "Puede administrar recompensas y promociones dentro de los programas permitidos y administrar todos los aspectos de la información de los clientes y sus visitas.";

// Create New Campaign
$lang['campaign_new_create_button']		= "Crear programa";
$lang['campaign_new_created_header']	= "Nuevo programa creado";
$lang['campaign_new_created_msg']		= "<b>Felicitaciones.</b><br>
											<br>
											Ha creado con éxito un nuevo programa.<br>
											<br>
											Ahora, debe personalizar las características de este programa<br>
											de acuerdo a las necesidades de su empresa:";
$lang['campaign_new_created_prefs']		= "Vamos allí";
$lang['campaign_new_created_back_cp']	= "Regresar al Panel de Control de la Cuenta";
$lang['campaign_new_empty']				= "Debe ingresar un nombre del programa:";
$lang['campaign_new_exists']			= "El nombre de de identificación de programa que ingresó ya existe.<br>Por favor, seleccione un nombre de identificación de programa diferente";
$lang['campaign_new_header']			= "Nuevo programa";
$lang['campaign_new_name']				= "Ahora, escoja un nombre para el programa:";
$lang['campaign_new_name_restrict']		= "(máximo 30 caracteres, espacios incluidos)";
$lang['campaign_new_step_dir']			= "Crear su primer programa:";
$lang['campaign_new_sub_header']		= "Primero, debe seleccionar un tipo de programa:";
$lang['campaign_new_type_empty']		= "Debe seleccionar un tipo de programa:";
$lang['campaign_new_buyx_desc']			= "Al igual que la tarjeta perforada a la que reemplaza, este estilo de programa le permite recompensar a sus clientes en base a
											la cantidad de veces que compran determinados productos individuales, líneas de productos o servicios.<br>
											<br>
											Ideal para cafés y cualquier tienda que tiene una oferta limitada de artículos o clases de artículos.
											A menudo se implementa en la forma de tarjetas de papel con cierta cantidad de casillas a perforar
											antes de recibir un artículo o servicio de forma gratuita. Este tipo de programa le permite hacer lo mismo, aunque en este caso sin
											la necesidad de imprimir tarjetas (y tener que ocuparse de tarjetas perdidas, etc.). Otra gran ventaja es que usted
											sabe cuántos clientes tiene en el programa y puede generar reportes de marketing en base a ellos.</br>
											<br>
											<b>Puede asignarle a cualquier cantidad de artículos o categorías de artículos una cantidad de consumo específica hasta que el cliente
											pueda recibir uno de forma gratuita. Por ejemplo:</b><br>
											<li>10 cortes de cabello para que el siguiente sea gratis. </li>
											<li>16 libras de alimento para mascotas hasta recibir una sin cargo. </li>
											<li>8 pastelillos para recibir de forma gratuita el próximo. </li>
											<br>
											también puede asignar un <i>número X por defecto hasta que el próximo sea gratis</i> para que sea más sencillo configurar una serie
											de artículos que se canjean al alcanzar el mismo nivel de consumo.";
$lang['campaign_new_earn_event_desc']	= "Un híbrido entre una Tarjeta de Regalo y un programa basado en sucesos: recompense a alguien por medio de crédito monetario
											(o dinero en efectivo) por cada 'suceso' (visita a la tienda, recomendación, etc.), recompensa que podrá canjear luego por productos o
											servicios de su establecimiento.<br>
											<br>
											<b>Este tipo de programas de fidelidad le permite:</b><br>
											<li>Asignar cuántos ".$lang['currency_plural']." se acumulan por visita o acción</li>
											<li>Canjear la cantidad deseada del saldo acumulado, como si fuera una tarjeta de regalo</li>
											<br>
											<b>Algunos ejemplos</b>:
											<li>Programas de recomendación: Recompense a clientes, conserjes de hotel y recepcionistas de grandes empresas por enviar
											clientes a su empresa.</li>
											<li>Páguele a un empleado o contratista por trabajos repetitivos.</li>
											<li>Recompense a sus clientes VIP con billetes de su empresa para gastar en su compañía.</li>
											<li>Dele a los niños incentivos relacionados con ayudar en las tareas del hogar.</li>";
$lang['campaign_new_event-based_desc']	= "Le permite definir recompensas basadas en la cantidad de interacciones que los clientes tienen con
											su empresa, en lugar de con el dinero que gastaron en ella.<br>
											<br>
											A menudo se utiliza en programas de recomendación de clientes: Una compañía entrega algunas tarjetas selladas con
											un mismo número a uno de sus clientes, un conserje de hotel o la recepcionista de una gran empresa.
											Cuando una persona recomendada por ellos va a su empresa y le entrega una de esas tarjetas, a su <i>misionero</i>
											se le agrega una 'visita' a su saldo. Después, por ejemplo, tras 5 'visitas', recibirá un servicio o
											o artilugio gratis. Usted consigue nuevos clientes. Todos ganan.<br>
											<br>
											Ésa es sólo una posibilidad. Hay quienes encontraron formas muy creativas de utilizar este programa.<br>
											<br>
											Un programa basado en sucesos le permite:<br>
											<br>
											<b>Asignar una variedad de niveles de recompensa. Por ejemplo:</b><br>
											<li>acumular 5 sucesos y obtener un descuento del 10%</li>
											<li>acumular 10 visitas y obtener un descuento del 50%</li>
											<li>acumular 20 recomendaciones y ganar un masaje</li>
											<br>
											<b>Algunos ejemplos:</b><br>
											<li>Los programas de recomendación que se describieron más arriba.</li>
											<li>Gimnasios que llevan un registro de las rutinas. </li>
											<li>Reparaciones de un producto hasta que se lo reemplaza por otro. </li>
											<li>Uso en clubes de acceso VIP. </li>
											<li>etc... </li>";
$lang['campaign_new_gift_card_desc']	= "Un programa del tipo Tarjeta de Regalo le permite agregar dinero a la cuenta de un cliente y descontarlo de ella cuando se lo utiliza en parte de pago.<br>
											<br>
											Simple y fácil de usar. Por lo general se implementa con tarjetas plásticas de regalo. La tarjeta se carga con
											un cierto monto de dinero a modo de obsequio o para utilizarse como tarjeta de débito prepaga.<br>
											<br>
											<b>No es necesario utilizar tarjetas plásticas</b>, y este programa puede utilizarse siempre que usted necesite simplemente hacer un seguimiento de diversas
											cuentas de <i>valor acumulado</i>, como la cuenta de un bar, planes de compra en cuotas, mesadas de niños... su imaginación es el límite.";
$lang['campaign_new_points_desc']		= "Sus clientes acumulan puntos en base a sus compras, pagos o la promoción que usted defina.
											Los puntos pueden canjearse luego en base a niveles de recompensa personalizados.<br>
											<br>
											Un programa de puntos, como el programa de millas de una aerolínea, le permite:<br>
											<br>
											<b>Asignar una cantidad determinada de puntos cada cierto gasto en ".$lang['currency_plural'].". Por ejemplo:</b><br>
											<li>5 puntos por cada ".$lang['currency']."</li>
											<li>.25 puntos por ".$lang['currency']."</li>
											<br>
											<b>Definir niveles de recompensa. Algunos ejemplos:</b><br>
											<li>1000 puntos: descuento del 50% en una compra</li>
											<li>5000 puntos: artículo gratis</li>
											<li>100,000 puntos: Viaje a Disneyland.</li>
											<br>
											<b>Definir promociones. Algunos ejemplos:</b><br>
											<li>Los martes se acumula el doble de puntos</li>
											<li>500 puntos adicionales por reserva anticipada</li>
											<li>25% de puntos de regalo con la compra con Tarjeta de Regalo.</li>
											<br>
											De manera opcional, puede definir una relación gasto/recompensa que le permita canjear puntos usando un valor monetario como referencia.";
$lang['campaign_new_name_desc']			= "Si está creando su primer programa, dele un nombre que comience con la palabra 'Prueba' mientras hace algunos intentos--
											Podrá crear tantos programas como desee y tendrá la posibilidad de suspender o borrar los que no desee implementar.<br>
											<br>
											En general, es una buena idea utilizar el nombre de su organización, si es corto, o un juego de palabras basado en él. Algunos ejemplos de nombres:<br>
											<li><b>Recompensas ACME</b></li>
											<li><b>Club Rojo</b> (para un salón de belleza llamado 'Rojo')</li>
											<li><b>Hoja de ruta</b> (Para un café que atiende a motociclistas)</li>
											<li><b>Puntos Fiesta</b> (Para un servicio de comida para fiestas)</li>";

// Campaigns: Common actions:
$lang['campaign_add_new']				= "Agregar un nuevo programa";
$lang['campaign_delete_popup']			= "<strong>Este programa se eliminará de su lista de Programas y se archivará.</strong><br>
											Este nombre de programa no podrá utilizarse otra vez como el nombre de un programa nuevo.<br>
											<br>
											Para recuperar un programa archivado, p&oactue;ngase en contacto con nosotros. Este servicio tiene un costo.<br>
											<br>
											<strong>¿Está seguro de que desea eliminar este programa?</strong>";
$lang['campaign_delete_popup_pc']		= "Este programa se eliminará de su lista de Programas y se archivará.\n\n
											Este nombre de programa no podrá utilizarse otra vez como el nombre de un programa nuevo.\n\n
											Para recuperar un programa archivado, p&oactue;ngase en contacto con nosotros. Este servicio tiene un costo.\n\n
											¿Está seguro de que desea eliminar este programa?";
$lang['campaign_hide_on_hold']			= "Ocultar programas suspendidos";
$lang['campaign_none_yet']				= "Para comenzar, cree un programa (Programa de obsequios o fidelidad)<br>
											con un clic en el botón Agregar un nuevo programa debajo.";

$lang['campaign_type_buyx']				= "Programa Compre X obtenga 1 gratis";
$lang['campaign_type_earn_per_event']	= "Programa Gane dinero por suceso";
$lang['campaign_type_event-based']		= "Programa basado en sucesos";
$lang['campaign_type_gift_cards']		= "Programa Tarjeta de regalo";
$lang['campaign_type_points']			= "Programa de puntos";
$lang['campaign_view_on_hold']			= "Ver programas suspendidos";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']				= "Agregar un nivel de recompensa";
$lang['edit_reward_add_another']		= "Agregar otro nivel de recompensa";
$lang['edit_reward_desc_empty']			= "Debe proporcionar una descripció del nivel de recompensa.";
$lang['edit_reward_level_header']		= "Editar nivel de recompensa";
$lang['edit_reward_header']				= "Niveles de recompensa";
$lang['edit_reward_none']				= "Actualmente no hay recompensas definidas";
$lang['edit_reward_table_header']		= "Descripción de la recompensa";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "Esta proporción puede cambiarse en cualquier momento, pero los ".$lang['points']." acumulados por los clientes a la fecha no cambiarán.";
$lang['edit_points_desc']				= "Éste es un número completamente arbitrario y puede ser cualquier valor que tenga sentido para usted. Por ejemplo:";
$lang['edit_points_desc_header']		= $lang['Points']." acumulados por cada ".$lang['currency']." gastado.";
$lang['edit_points_empty']				= "Debe ingresar la cantidad de ".$lang['points']." necesarios para obtener la recompensa.";
$lang['edit_points_examples_header']	= "Algunos ejemplos de recompensas por puntos:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "20% de descuento";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "Manicura básica de regalo";
$lang['edit_points_ex_3_amount']		= "750";
$lang['edit_points_ex_3_desc']			= "Noche adicional sin costo";
$lang['edit_points_ex_4_amount']		= "1000";
$lang['edit_points_ex_4_desc']			= "Champ&uacute gratis de 500ml";
$lang['edit_points_ex_5_amount']		= "20";
$lang['edit_points_ex_5_desc']			= "Bolsa de 10 kg de alimento para gatos gratis";
$lang['edit_points_ex_6_amount']		= "15,000";
$lang['edit_points_ex_6_desc']			= "Nivel Club VIP";
$lang['edit_points_ex_7_amount']		= "160";
$lang['edit_points_ex_7_desc']			= "Ubicaciones preferenciales";
$lang['edit_points_ex_8_amount']		= "100,000";
$lang['edit_points_ex_8_desc']			= "Viaje a Disneyland de regalo";
$lang['edit_points_not_valid']			= "La cantidade de ".$lang['points']." debe ser un número.";
$lang['edit_points_profit_ratio_error']	= "Debe ingresar un valor positivo mayor a cero. Deje el espacio en blanco para deshabilitar la opción.";
$lang['edit_points_step_dir']			= "Establezca las preferencias de su programa de ".$lang['Points']." :";
$lang['edit_points_table_header']		= "Descripción de la recompensa obtenida cuando<br>se alcanza la cantidad de ".$lang['points']." especificada.";
$lang['edit_points_too_small']			= "Debe ingresar un valor mínimo de 1 ".$lang['point'].".";

$lang['edit_promo_table_header']		= "Descripción de la promoción";
$lang['edit_promo_none']				= "Actualmente no hay promociones definidas";
$lang['edit_promo_add']					= "Agregar una promoción";
$lang['edit_promo_add_another']			= "Agregar otra promoción";
$lang['edit_promo_desc']				= "Las promociones modifican la manera en que se acumulan ".$lang['points']." . Mediante una promoción usted puede agregar o descontar una cantidad específica de ".$lang['points']." o multiplicarlos por un valor determinado al registrarse una operación. Vea los siguientes ejemplos:";
$lang['edit_promo_edit_header']			= "Editar promoción";
$lang['edit_promo_edit_error_header']	= "Debe ingresar un número por el que multiplicar los ".$lang['points']." acumulados.<br>Por ejemplo:";
$lang['edit_promo_edit_error_add']		= "Debe ingresar una cantidad de ".$lang['points']." a agregar a los ya acumulados. Por ejemplo, \"500\" agregará 500 puntos a la cantidad de ".$lang['points']." acumulados. \"-100\" descontará 100 ".$lang['points']." de los acumulados (hasta llegar a 0, como máximo.)";
$lang['edit_promo_edit_error_multi']	= "El valor por el que multiplicar los ".$lang['points']." debe ser un número.";
$lang['edit_promo_edit_error_not_valid']= "La cantidad de puntos a agregar debe ser un número.";
$lang['edit_promo_edit_ex_1']			= "2 duplicará los puntos acumulados.";
$lang['edit_promo_edit_ex_2']			= ".5 los reducirá a la mitad.";
$lang['edit_promo_edit_ex_3']			= "1.1 agregará un 10% de puntos.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "Agregar 500 ".$lang['points']." por recomendación";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']." de regalo por convertirse en miembro";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "descontar 50 ".$lang['points']." por llegar tarde";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "Nivel VIP: Duplicar los ".$lang['points']." acumulados";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "por un 50% adicional de ".$lang['points']." los martes";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "Miembro Plateado: 25% adicional de ".$lang['points'];
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "por 25% menos ".$lang['points'];
$lang['edit_promo_name_empty']			= "Debe darle un nombre a la promoción";
$lang['edit_promo_note_1']				= /*(Addtion Operation)*/ "Las promociones podrán registrarse por sí mismas: simplemente seleccione la promoción y haga clic en "; /* ("record button") */
$lang['edit_promo_note_2']				= /*(Multiplication Operation)*/ "Las promociones no podrán registrarse por sí mismas: es necesario un monto de compra.";
$lang['edit_promo_table_header_1']		= "Multiplicar<br>o agregar";
$lang['edit_promo_table_header_2']		= "Por cuanto";
$lang['edit_promo_table_header_3']		= "ID de la promoción";

$lang['edit_str_header']				= "Opcional: Capacidad de ingresar montos en ".$lang['currency_plural']." para canjear puntos";
$lang['edit_str_desc']					= "La relación gasto/recompensa es una de las dos proporciones que tuvo que utilizar para determinar el valor en ".$lang['points']." de sus recompensas. Si la ingresa aquí, activar&aacute la posibilidad de canjear ".$lang['points']." al ingresar un valor en ".$lang['currency']." :";
$lang['edit_str_ratio_header']			= "Posibilidad de ingresar montos en ".$lang['currency_plural']."<br>para canjear puntos:";
$lang['edit_str_ratio_on']				= "Activada";	// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']				= "Desactivada";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_ratio_sub_header']		= "Su relación gasto/recompensa:";
$lang['edit_str_ratio_not_set']			= "No establecida";
$lang['edit_str_example_header']		= "Por ejemplo:";
$lang['edit_str_example_1']				= "Su clienta quiere comprar algo que cuesta ".$lang['currency_symbol']." 100 y tiene 1000 ".$lang['points']." acumulados. Ella pregunta entonces si puede pagar parte del artículo con sus ".$lang['points'];
$lang['edit_str_example_1_desc']		= "Cuando usted ingresa esta proporción entre gasto y recompensa arriba, <b>el programa puede determinar de manera automática cuánto valen esos ".$lang['points']." </b>. No es necesario que usted o su cajero recuerden complicadas tablas de recompensa o tengan que usar la calculadora.";
$lang['edit_str_example_math_show']		= "Haga clic aquí para ver el cálculo.";
$lang['edit_str_example_math_hide']		= "¡Uf! ¡Esconder el cálculo!";
$lang['edit_str_example_math']			= "Digamos que usted especificó una proporción ".$lang['ppd']."
											de 5 y una relación gasto/recompensa de 20. Entonces:<br>
											1000 ".$lang['points']." / 5 ".$lang['ppd']." / relación gasto/recompensa de 20 = ".$lang['currency_symbol']."10<br>
											<br>
											Otra manera de ver esto es que $10 x 5 ".$lang['ppd']." = 50 ".$lang['points'].", y con una
											relación gasto/recompensa de 20, usted necesita 20 x 50 ".$lang['points']." (1000 ".$lang['points'].") para poder canjear ".$lang['currency_symbol']."10.";
$lang['edit_str_example_math_height']	= "110";	// This is the height, in pixels, of the section that the "math" is in.
												// If the translation of the section above requires more room, increase that number accordingly.
$lang['edit_str_note_1']				= "Para desactivar la posibilidad de ingresar valores en ".$lang['currency']." para canjear ".$lang['points'].", elimine la relación gasto/recompensa (déjela en blanco) y presione"; /*(Set button)*/
$lang['edit_str_note_2']				= "Puede cambiar la relación gasto/recompensa en cualquier momento, pero los niveles de recompensa no cambiarán de manera automática.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "Debe ingresar la cantidad de sucesos necesaria para obtener la recompensa.";
$lang['edit_visits_not_valid']			= "La cantidad de sucesos debe ser un número.";
$lang['edit_visits_step_dir']			= "Establezca algunos niveles de recompensa para su programa basado en sucesos:";
$lang['edit_visits_table_header']		= "Cantidad<br>de sucesos";
$lang['edit_visits_table_header_2']		= "Descripción de las recompensas obtenidas cuando<br>se alcanza la cantidad de sucesos especificada.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "Debe ingresar un valor de al menos ".$lang['currency_100th_symbol']." 1 (0.01)";
$lang['edit_dpv_heading']				= "Configuración de recompensas";
$lang['edit_dpv_label']					= $lang['currency_plural']." ganados por suceso:";
$lang['edit_dpv_label_ending']			= "por suceso.";
$lang['edit_dpv_note_1']				= "Este número puede cambiarse en cualquier momento, pero los ".$lang['currency']." acumulados a la fecha por los clientes no se modificarán.";
$lang['edit_dpv_step_dir']				= "Establezca el nivel de acumulación de su programa:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "La cantidad de productos o servicios debe ser de al menos 1<br>10 es una opción recomendada.";
$lang['edit_buyx_header']				= "Cantidad de productos o servicios hasta recibir uno gratis";
$lang['edit_buyx_item_empty']			= "Debe ingresar el nombre o descripción de un producto o servicio.";
$lang['edit_buyx_item_header']			= /* Add or Edit */ "un Producto o Servicio";
$lang['edit_buyx_item_table_header_1']	= "Servicio, Producto o Categoría";
$lang['edit_buyx_item_table_header_2']	= "Cantidad para que el<br>próximo sea gratis";
$lang['edit_buyx_none']					= "No se ha definido un Producto o Servicio.";
$lang['edit_buyx_step_dir']				= "Establezca los niveles de recompensa de su programa:";
$lang['edit_buyx_table_header_1']		= "Producto, Servicio o Categoría";
$lang['edit_buyx_table_header_2']		= "Cantidad para que el<br>próximo sea gratis";
$lang['edit_buyx_add_another']			= "Agregar otro Servicio o Producto";
$lang['edit_buyx_add']					= "Agregar un Servicio o Producto";
$lang['edit_buyx_default_header']		= "Cantidad de productos o servicios necesarios por defecto para que el siguiente sea gratis";
$lang['edit_buyx_default_label']		= "Cantidad por defecto para nuevos servicios o productos:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "Establezca las preferencias y los niveles de recompensa de su programa:";
$lang['edit_giftcard_no_settings']		= "En los programas con Tarjetas de Regalo no hay que establecer preferencias ni recompensas.<br>(Bien, ¡Eso fue fácil!)";

// Common Customer Content
$lang['customer_account_activated']		= "Cuenta activada";
$lang['customer_add_tab']				= "Agregar un cliente";
$lang['customer_lookup_tab']			= "Buscar un cliente";
$lang['customer_id_not_exist']			= "El nombre de identificación de cuenta del cliente no existe.";
$lang['customer_id_missing']			= "No se ingresó ningún nombre de identificación de cuenta de cliente.";
$lang['customer_tip_1']					= "¿Sabía que puede utilizar una lectora de códigos de barra o de bandas magnéticas para ingresar el número de tarjeta del cliente?";
$lang['customer_tip_2']					= "Añada esta página a Favoritos mediante el generador de accesos directos al pie de la "; /* Account Control Panel screen */
$lang['customer_last_activity']			= "Última actividad";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "Error: No se pudo borrar la tarjeta.";
$lang['manage_cards_find_by_date']		= "Fecha de última actividad";
$lang['manage_cards_find_by_header']	= "o mostrar una lista de TODOS los clientes:";
$lang['manage_cards_find_directions']	= "Llene alguno de los campos que se encuentran a continuación:";
$lang['manage_cards_find_header']		= "Buscar un cliente:";
$lang['manage_cards_find_none']			= "No se encontró ningún registro que coincida con sus criterios de búsqueda.";
$lang['manage_cards_find_note']			= "Esto podría tomar algunos minutos si tiene algunos miles de clientes o una conexión de internet lenta.";
$lang['manage_cards_header']			= "Gestión de clientes";
$lang['manage_cards_list_header']		= "Lista de cuentas de clientes";
$lang['manage_cards_not_exist']			= "Este cliente no existe.";
$lang['manage_cards_cust_deleted']		= "Este cliente fue borrado.";
$lang['manage_cards_popup_warning']		= "Esto borrará la información del cliente y TODAS SUS OPERACIONES<br>
											en todos los programas relacionados con este cliente.<br><br>
											Además, <strong>los informes ya no reflejarán ninguna actividad pasada para esta cuenta</strong>.<br><br>
											¡Esta acción NO PUEDE DESHACERSE!<br><br>
											¿Está seguro de que desea eliminar la cuenta de este cliente?";
$lang['manage_cards_popup_warning_pc']	= "Esto borrará la información del cliente y TODAS SUS OPERACIONES\n
											en todos los programas relacionados con este cliente.\n\n
											Además, los informes ya no reflejarán ninguna actividad pasada para esta cuenta.\n\n
											¡Esta acción NO PUEDE DESHACERSE!\n\n
											¿Está seguro de que desea eliminar la cuenta de este cliente?";

// Create New Customer Account
$lang['customer_new_card_desc']			= "Para que sus clientes puedan consultar su saldo en su sitio, es necesario un número<br>de tarjeta o <i>nombre de identificación de cuenta de cliente</i> único.";
$lang['customer_new_create_button']		= "Crear cuenta de cliente";
$lang['customer_new_demo_phone']		= "(555)555-5555";
$lang['customer_new_demo_email']		= "demo@email.com";
$lang['customer_new_demo_addtl_info']	= "Cualquier dato adicional debe ingresarse aquí.";
$lang['customer_new_id_exists']			= "El nombre de identificación de cuenta de cliente ingresado ya existe.";
$lang['customer_new_id_match']			= "La siguiente cuenta coincide con el"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "Éste no es un nombre de identificación de cuenta de cliente válido.";
$lang['customer_new_exists']			= "La información ingresada coincide con un cliente existente.";
$lang['customer_new_header']			= "Crear una nueva cuenta de cliente";
$lang['customer_new_multiple_matches']	= "Estas cuentas coinciden con parte de la información ingresada:";
$lang['customer_new_other_campaigns']	= "Otros programas a los que<br>agregar al cliente:";
$lang['customer_new_random_id']			= "Generar un número al azar";
$lang['customer_new_steps_header']		= "Crear una cuenta de cliente de muestra:";
$lang['customer_new_steps_dir']			= "La cuenta de un cliente debe definirse mediante un identificador único, como un número de teléfono, dirección de correo electrónico,
											código de barras o cualquier otro dato que sea exclusivo de ese cliente. No dude en utilizar una cuenta de prueba
											como '11111' por el momento; luego podrá borrar esta cuenta.";
$lang['customer_new_not_allowed']		= "No tiene permiso para crear registros de nuevos clientes.";

// Lookup Customer Account
$lang['customer_activity_header']		= "Actividad de la cuenta";
$lang['customer_activity_none']			= "Esta cuenta no registra actividad.";
$lang['customer_activity_print_short']	= "Última operación"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "Saldo actual:";
$lang['customer_lookup_balances_none']	= "Sin saldos";
$lang['customer_lookup_button']			= "Buscar cliente";
$lang['customer_lookup_header']			= "Buscar una cuenta de cliente";
$lang['customer_lookup_instructions']	= "Ingrese algún dato de la información del cliente:";
$lang['customer_lookup_multiple_match']	= "Los siguientes registros coinciden con su búsqueda";
$lang['customer_lookup_multiple_view']	= "Ver detalles de la cuenta";
$lang['customer_lookup_no_match_add']	= "No se encontraron registros que coincidan con su búsqueda. Puede crear una nueva cuenta debajo";
$lang['customer_lookup_no_match']		= "Ningún cliente en este programa coincide con su búsqueda.";
$lang['customer_lookup_not_allowed']	= "No tiene permiso para ver los registros de los clientes individuales.";
$lang['customer_lookup_steps_header']	= "Agregar y canjear algunas operaciones.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "Agregar cliente a otros programas:";
$lang['customer_edit_campaigns_note']	= "Agregar un cliente a otros programas le permitirá encontrarlos al hacer búsquedas parciales con cualquier
											dato de la información de su cuenta. De otro modo, sólo podrá buscarlos por número de tarjeta o nombre de identificación de la cuenta, o utilizar
											el menú desplegable en la esquina superior derecha para avanzar por las diferentes campañas dentro de los registros de un cliente.";
$lang['customer_edit_header']			= "Editar información de la cuenta";
$lang['customer_edit_random_number']	= "Generar número al azar";
$lang['customer_edit_sub_header']		= "Todos los campos son opcionales.";
$lang['customer_edit_activity_header']	= "Información sobre la actividad de la cuenta del cliente";

// Record Customer Transactions
$lang['transaction_add_button']			= "Agregar a cuenta";
$lang['transaction_amount_not_valid']	= "ERROR EN LA OPERACIÓN:<br>El monto en ".$lang['currency']." ingresado no es válido";
$lang['transaction_amount_too_samll']	= "ERROR EN LA OPERACIÓN:<br>El monto en ".$lang['currency']." ingresado debe ser de al menos 0.01";
$lang['transaction_new_gc_header']		= "Agregar a cuenta";
$lang['transaction_new_header']			= "Nueva actividad";
$lang['transaction_no_amount']			= "ERROR EN LA OPERACIÓN:<br>Debe ingresar un monto en ".$lang['currency']." <br>o seleccionar una promoción.";
$lang['transaction_promo_not_valid']	= "ERROR EN LA OPERACIÓN:<br>Debe ingresar un monto de compra<br>para utilizar esta promoción.";
$lang['transaction_promos_label']		= "Seleccionar una promoción:";
$lang['transaction_purchase_label']		= "Ingresar total de compras:";
$lang['send_email']						= "Enviar E-mail?";
$lang['transactions_buyx_none']			= "No hay productos o servicios definidos.";
$lang['transactions_buyx_none_dir']		= "Regresar al panel de control para editar la configuración.";
$lang['transactions_visit_credited']	= "1 suceso acreditado";
$lang['transactions_visit_redeemed']	= "Sucesos canjeados";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "Error al eliminar la operación. Por favor, inténtelo nuevamente.";
$lang['transaction_delete_popup']		= "<strong>Esto eliminará la operación de modo permanente.</strong><br><br>
											¡Esta acción NO PUEDE DESHACERSE!<br><br>
											¿Está seguro de que desea eliminar la operación?";
$lang['transaction_delete_popup_pc']	= "Esto eliminará la operación de modo permanente.\n\n
											¡Esta acción NO PUEDE DESHACERSE!\n\n
											¿Está seguro de que desea eliminar la operación?";

// Redeem Rewards
$lang['redeem_buyx_header']				= "Tabla de recompensas";
$lang['redeem_buyx_sub_header']			= "El cliente ha acumulado suficiente actividad para:";
$lang['redeem_header']					= "Recompensas disponibles";
$lang['redeem_header_alt']				= "Deducir de cuenta";
$lang['redeem_points_partial_header']	= "Puede deducir cantidades personalizadas de"; /* points or dollars */
$lang['redeem_points_partial_none']		= "Una vez que esta cuenta llegue a un saldo de."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "O seleccionar una recompensa para canjear";
$lang['redeem_reward_description']		= "Descripción de la recompensa";
$lang['redeem_reward_balance_none']		= "El saldo actual de esta cuenta no es<br>suficiente para solicitar una recompensa predefinida.";
$lang['redeem_reward_balance_zero']		= "El saldo actual de esta cuenta no es<br>suficiente deducir nada de ella.";
$lang['redeem_reward_balances_none']	= "Los saldos actuales de esta cuenta no son<br>suficientes para solicitar una recompensa.";

// Reports
$lang['report_audit_title']				= "Informe de auditoría de operaciones";
$lang['report_audits_all_trans']		= "Todas las operaciones";
$lang['report_audits_header']			= "Auditorías";
$lang['report_audits_redeemed_only']	= "Solamente operaciones de canje";
$lang['report_audits_totals']			= "Totales";
$lang['report_balances_header']			= "Informe de los saldos del cliente";
$lang['report_campaigns_included']		= "Programas incluidos:";
$lang['report_col_1_header']			= "Seleccione un informe";
$lang['report_col_2_header']			= "Seleccione un rango de fechas";
$lang['report_col_3_header']			= "Seleccione programa(s)";
$lang['report_date_not_valid']			= "Fecha inválida<br>(Puede tratarse de un aÒo bisiesto)";
$lang['report_date_mismatch']			= "Error: La fecha de inicio no puede<br>ser posterior a la fecha de finalización.";
$lang['report_frequent_header']			= "Informe de clientes frecuentes";
$lang['report_frequent_min_trans']		= "Cantidad mínima de operaciones";
$lang['report_none']					= "Ningún cliente coincide con el criterio ingresado";
$lang['report_marketing_header']		= "Marketing";
$lang['report_marketing_new_cust']		= "Nuevos clientes";
$lang['report_marketing_freq_cust']		= "Clientes frecuentes";
$lang['report_marketing_freq_or_more']	= /* A given number of */ "operaciones, o más.";
$lang['report_marketing_include']		= "Incluir operaciones de canje.";
$lang['report_marketing_miss_dir_1']	= "Clientes que realizaron una visita en el rango de fechas ingresado arriba,";
$lang['report_marketing_miss_dir_2']	= "y no regresaron en todos estos días:";
$lang['report_missing_header']			= "Clientes que no regresaron en "; /* a number of days.*/
$lang['report_new_customers_header']	= "Informe sobre nuevos clientes";
$lang['report_new_customers_none']		= "Ningún cliente nuevo coincide con el criterio ingresado";
$lang['report_new_customers_range']		= "Nuevos clientes entre"; /* one date and another date */
$lang['report_redeem_one_letter_code']	= "R";
$lang['report_run_report_button']		= "Ejecutar informe";
$lang['report_no_transactions']			= "No se encontraron operaciones";
$lang['report_totals_header']			= "Totales del informe de auditoría";

// Report Months
$lang['Jan']							= "Ene";
$lang['Feb']							= "Feb";
$lang['Mar']							= "Mar";
$lang['Apr']							= "Abr";
$lang['May']							= "May";
$lang['Jun']							= "Jun";
$lang['Jul']							= "Jul";
$lang['Aug']							= "Ago";
$lang['Sep']							= "Sep";
$lang['Oct']							= "Oct";
$lang['Nov']							= "Nov";
$lang['Dec']							= "Dic";

// Auto-Generated Emails
$lang['email_account_activity']			= "Actualizacion de su cuenta";
$lang['email_activated_header']			= "Programa activado";
$lang['email_activated_sub_header']		= "Se ha activado el siguiente programa:";
$lang['email_billing_header']			= "Cambio en el nivel de facturación";
$lang['email_billing_from_level']		= "El nivel de facturación de su cuenta cambió de";
$lang['email_deactivated_header']		= "Programa desactivado";
$lang['email_deactivated_sub_header']	= "Se ha desactivado el siguiente programa:";
$lang['email_greeting']					= "Hola"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "Guarde esta información en un lugar seguro";
$lang['email_html_callout_url']			= "URL para inicio de sesión"; // As in "the internet address where a client can log into the acount management application this loyalty program."
$lang['email_keep_email_footer_1']		= "Por favor, conserve este mensaje para futura referencia.";
$lang['email_keep_email_footer_2']		= "Contiene información importante sobre la cuenta.";
$lang['email_new_account_header']		= "Nueva cuenta";
$lang['email_new_account_sub_header']	= "Se ha creado una nueva cuenta.";
$lang['email_html_password_nochange']	= "Sin cambios"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "Registro en línea del cliente";
$lang['email_online_register']			= "El siguiente cliente registró una cuenta en línea:";
$lang['email_password_header']			= "Recuperación de contraseña solicitada";
$lang['email_password_dir1']			= "Nos ha solicitado que le enviemos la contraseña para el usuario"; /* shows the User ID */
$lang['email_password_dir2']			= "Es:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "Cambios a su cuenta";
$lang['email_update_sub_header']		= "Se ha actualizado la información de su cuenta.";
$lang['email_user_id_header']			= "Solicitar recuperación de nombre de identificación de usuario";
$lang['email_user_id_sub_header_1']		= "Usted ha solicitado el nombre de identificación de usuario asociado a su dirección de correo electrónico:";
$lang['email_user_id_sub_header_2']		= "Usted ha solicitado los nombres de identificación de usuario asociados a su dirección de correo electrónico:"; // Plural


// Bookmarks
$lang['bookmarks_header']				= "Generar accesos directos de inicio automático de sesión";
$lang['bookmarks_table_header_1']		= "Elegir página para<br>agregar a Favoritos";
$lang['bookmarks_table_header_2']		= "Elegir usuario para inicio<br>automático de sesión";
$lang['bookmarks_table_header_3']		= "Enlace de acceso directo";
$lang['bookmarks_link_1']				= "Haga clic con el botón<br>derecho sobre este<br>enlace para establecer<br>acceso directo.";
$lang['bookmarks_link_2']				= "Haga clic para ir a<br>la página y agregarla a<br>Favoritos desde allí.";
$lang['bookmarks_note']					= "Estos enlaces son contraseñas de acceso a su cuenta. Trátelos de esa manera.
											Le recomendamos que no los envíe por correo electrónico o programas de mensajería instantánea. En cambio, inicie sesión usted mismo desde la computadora donde
											quiere que se registe el acceso directo y agréguelo allí a la lista de Favoritos de su navegador.";

// Refer-and-Earn
$lang['refer_balance_header']			= "Monto acumulado hasta el momento<br>por recomendaciones";
$lang['refer_balance_link']				= "Ver su historial de Recomiende y Gane";
$lang['refer_banner_header']			= "Ponga un banner en su página web:";
$lang['refer_banner_desc']				= "Puede situar estos banners en cualquier parte de su página web. Aqu&iacute hay algunos tamaños y colores distintos para que escoja:";
$lang['refer_banner_more_link']			= "Más banners..."; // As in "Click here to see more banners."
$lang['refer_banner_more_header']		= "Otros banners"; // As in "Below you will find more banners."
$lang['refer_banner_more_sub_title']	= "Puede situar estos banners en cualquier parte de su página web. Aqu&iacute hay algunos tamaños más entre los que puede elegir:";
$lang['refer_banner_more_instruct']		= "Simplemente arrástrelos y suéltelos en su escritorio, o haga clic con el botón derecho para guardarlos donde desee.";
$lang['refer_banner_more_title']		= "Ponga un banner en su página web";
$lang['refer_header']					= "Recomiende y Gane";
$lang['refer_link_header']				= "Su enlace de recomendación:";
$lang['refer_link_desc']				= "Use este enlace para enviar usuarios a la página web de StickyStreet. Este enlace exclusivo llevará un registro de la cantidad de usuarios que usted recomiende a StickyStreet y que creen una cuenta:";
$lang['refer_sub_header']				= "Recomiende StickyStreet y gane $10 <span style=\"font-size: 80%;\">(U.S.)</span>";


// Common Error Messages:
$lang['error_balance_lookup_activity'] 	= /* The account id entered */ "no ha registrado actividad.";
$lang['error_balance_lookup_no_cust'] 	= "No existe la cuenta del cliente.";
$lang['error_balance_lookup_no_acct'] 	= "No existe el nombre de identificación de la cuenta.";
$lang['error_email_space']				= "No se permiten espacios en blanco en las direcciones de correo electrónico.";
$lang['error_email_not_found']			= "No se encontró la dirección de correo electrónico.";
$lang['error_email_not_valid']			= "Esta dirección de correo electrónico no es válida.";
$lang['error_customer_id_empty']		= "Debe ingresar un nombre de identificación de cuenta de cliente.";
$lang['error_language_selector']		= "Hay un error con el idioma elegido.";
$lang['error_next_page']				= "Hubo un problema al intentar abrir la página siguiente. Por favor, inténtelo de nuevo.";
$lang['error_password_empty']			= "Debe elegir e ingresar una contraseña.";
$lang['error_password_length']			= "Su contraseña debe tener entre 5 y 20 caracteres de extensión.";
$lang['error_password_not_valid']		= "Las contraseñas sólo pueden contener letras, números o un guión bajo (_)";
$lang['error_password2_empty']			= "Debe ingresar nuevamente su contraseña para asegurarse de que<br>la ingresó de la manera correcta.";
$lang['error_passwords_no_match']		= "Las contraseñas que ingresó no coinciden.<br>Por favor, ingréselas nuevamente.";
$lang['error_phone_area_code']			= "Por favor, ingrese un código de área válido.";
$lang['error_phone_not_valid']			= "Éeste no es un número de teléfono válido.";
$lang['error_service_down']				= "Este servicio no está disponible en este momento.<br><br>Le pedimos disculpas por el inconveniente.";
$lang['error_updating']					= "Hubo un error al actualizar la información. Por favor, inténtelo nuevamente.";
$lang['error_userid_error']				= "Error: el nombre de identificación de usuario que ingresó no se encontró.";

// Alt Tags
$lang['alt_add_customer_button']		= "Haga clic aquí para AGREGAR cuentas de clientes a este programa";
$lang['alt_account_edit_save']			= "Haga clic aquí para guardar los cambios que hizo en este formulario";
$lang['alt_campaign_delete']			= "Haga clic aquí para borrar este programa";
$lang['alt_campaign_edit']				= "Haga clic aquí para editar la configuració de este programa";
$lang['alt_campaign_name']				= "Haga clic en el nombre del programa para consultar clientes existentes o agregar nuevos clientes";
$lang['alt_campaign_new_create']		= "Haga clic aquí para crear este programa";
$lang['alt_campaign_place_on_hold']		= "Este programa está activo. Haga clic aquí para suspenderlo";
$lang['alt_campaign_re-activate']		= "Haga clic aquí para volver a activar este programa";
$lang['alt_cancel_changes']				= "Haga clic aquí para cancelar los cambios y regresar a la pantalla anterior";
$lang['alt_goto_ss']					= "Haga clic aquí para abrir StickyStreet.com en una nueva ventana";
$lang['alt_lookup_customer_button']		= "Haga clic aquí para CONSULTAR cuentas de clientes en este programa";
$lang['alt_user_add']					= "Haga clic aquí para agregar un usuario nuevo con un nombre de inicio de sesión y nivel de permiso personalizados";
$lang['alt_user_delete']				= "Haga clic aquí para borrar este usuario de manera que no pueda iniciar sesión y acceder a esta cuenta";
$lang['alt_user_edit']					= "Haga clic aquí para editar las propiedades de este usuario";


// Outside / Optional Links
// ------------------------
// Translate this section ONLY if the embeded links have been replicated in the new language:

// Legal Documents
$lang['terms_conditions_location']		= 'terms-conditions.html';

// Edit Preferences: Points Campaign
$lang['edit_points_note_1_graphic']		= '<a href="http://www.stickystreet.com/calculator.php" target="_blank"><img align="right" src="graphics/calculator.gif" width="72" height="80" border="0" vspace="5" hspace="3"></a><span style="color: #666;">';
$lang['calculator_link'] 				= '<a href="http://www.stickystreet.com/calculator.php" target="_blank">';
$lang['edit_points_note_1'] 			= "Para recibir un poco de ayuda para determinar cuántos puntos se necesitan para canjear un premio, use nuestra utilísima ".$lang['calculator_link']." calculadora de puntos</a>:";

$lang['blog_link_accounting'] 			= '<a href="http://support.stickystreet.com/forums/16257/entries/12598" target="_blank">';
$lang['edit_points_note_2'] 			= "Para un análisis de los Niveles de Recompensa y los números y cuentas detrás de ellos, visita ".$lang['blog_link_accounting']."este mensaje</a> en el foro de asistencia.";

$lang['edit_str_desc_with_link']		= "La Relación gasto/recompensa es una de las dos proporciones que tuvo que utilizar para determinar el valor en ".$lang['points']." de sus recompensas (ya sea que haya utilizado la ".$lang['calculator_link'].$lang['Points']." calculadora</a> o no.) Si la ingresa aquí, activar&aacute la posibilidad de canjear ".$lang['points']." al ingresar un valor en ".$lang['currency'].":";



// =========================
// ADDITIONAL TRANSLATIONS 1
// =========================

// Single words and labels
$lang['Referrer']						= "Recomendado por"; 	// As in a person or entity that sends business your way.
$lang['Comma']							= "Coma";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Deducted']						= "Descontado";	// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Item']							= "Artículo";		// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Pipe']							= "Barra vertical";		// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "Comprado";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Tab']							= "Tabulador";		// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Required']						= "Obligatorio";	// As in necessary, compulsory. Ex: "The name field is required."
$lang['optional']						= "opcional"; 	// As in "not required" or "not obligatory". Ex: "This task is optional";

// Page Titles
$lang['title_managing_cards']			= "Administración de los registros de los clientes";
	$lang['importing_customers']		= "Importación de clientes";
	$lang['customers_imported']			= "Clientes importados";
	$lang['importing_transactions']		= "Importación de operaciones";
	$lang['transactions_imported']		= "Operaciones importadas";



// Labels
$lang['label_currency']					= "Moneda";				// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']			= "Símbolo monetario";		// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_language_select']			= "Mostrar idioma";		// As in a prompt to the user to select a language for the application
$lang['label_localization']				= "Localización";			// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_timezone']					= "Zona horaria";

// New Account Screen
$lang['account_language_error']			= "Hay un error en el idioma elegido.";
$lang['account_language_note']			= "Nota: Ésta es la preferencia general de idioma para la cuenta.<br>
											Un ajuste por parte del Usuario de una cuenta (en la sección Usuarios), o la selección de<br>
											un idioma diferente en la pantalla de inicio de sesión invalidará esta preferencia.";
$lang['account_timezone_note']			= "Nota: Ésta es la preferencia general de zona horaria para la cuenta.<br>
											Puede configurarse una zona horaria diferente para un Usuario de cuenta (en la sección Usuario),<br>
											lo que invalidará esta preferencia.";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']			= "Importar clientes y operaciones";
$lang['manage_import_customers']		= "Importar clientes";
$lang['manage_import_transactions']		= "Importar operaciones de los clientes";
$lang['manage_import_no_none']			= "No puede definirse a todos los campos como 'ninguno'. Por favor, seleccione al menos un campo a importar.";
$lang['manage_import_duplicate_card']	= "TARJETA DUPLICADA:";
$lang['manage_import_duplicate_found']	= "tarjeta duplicada";
$lang['manage_import_duplicates_found']	= "tarjetas duplicadas";
$lang['manage_import_successful']		= "La importación fue exitosa";
$lang['manage_import_new_customer']		= "nuevo cliente importado";
$lang['manage_import_new_customers']	= "nuevos clientes importados";
$lang['manage_import_updated_customer']	= "cliente actualizado";
$lang['manage_import_updated_customers']= "clientes actualizados";
$lang['manage_import_no_cust_data']		= "No se proporcionaron datos de cliente para importar. Por favor, copie y pegue los datos de sus clientes en el recuadro que se encuentra a continuación:";
$lang['manage_import_campgn_not_valid']	= "Uno de los programas seleccionados no es válido.";
$lang['manage_import_select_1_campaign']= "Debe seleccionar al menos un programa al que agregar a sus clientes.";
$lang['manage_import_select_delimiter']	= "Por favor, seleccione uno de los separadores mencionados arriba.";
$lang['manage_import_new_trasns']		= /* a number */ "operaciones nuevas registradas";
$lang['manage_import_new_account']		= "nueva cuenta de cliente creada";
$lang['manage_import_new_accounts']		= "nuevas cuentas de clientes creadas";
$lang['manage_import_no_cust']			= "No clientes importados o actualizados";
$lang['manage_import_no_trans']			= "No se registraron operaciones";
$lang['manage_import_no_trans_data']	= "No se proporcionaron datos de operaciones para importar. Por favor, copie y pegue los datos de sus transacciones en el recuadro que se encuentra a continuación:";
$lang['manage_import_fields_missing']	= "Faltan algunos campos obligatorios.";
$lang['manage_import_cust_instr_head']	= "<b>Importar una lista de clientes es bastante sencillo:</b>";
$lang['manage_import_cust_instr_1']		= "Seleccione lo(s) programa(s) a lo(s) que desea agregar a esos clientes.";
$lang['manage_import_cust_instr_2']		= "Especifique cómo separar las columnas y en qué orden desea verlas.";
$lang['manage_import_cust_instr_3']		= "Copie y pegue su lista en el recuadro grande y marque la casilla si desea que los registros coincidentes<br>
													(con igual nombre de identificación de cuenta / Nº de tarjeta) se sobrescriban o ignoren.";
$lang['manage_import_cust_instr_4']		= "Las fechas pueden estar en cualquiera de los siguientes formatos <i>(Los años deben estar en formato de 4 dígitos)</i>:<br>
														<pre style=\"margin: 0px; padding: 0px;\">AAAA/MM/DD, AAAA-MM-DD, AAAA.MM.DD, MM/DD/AAAA, MM-DD-AAAA, MM.DD.AAAA</pre></pre>";
$lang['manage_import_campaigns_list']	= "Lista de programas";
$lang['manage_import_add_campaigns']	= "Agregar a programas";
$lang['manage_import_field_order']		= "Orden de los campos";
$lang['manage_import_field_delimiter']	= "Separador de campos";
$lang['manage_import_excel_default']	= "(separador por defecto al copiar y pegar desde MS Excel)";
$lang['manage_import_field_note']		= "<i>Todos los campos son opcionales.</i><br>
												<br>
												Nota: Si planea importar las transacciones de un
												cliente más adelante, será necesario
												utilizar un <i>nombre de identificación de
												cuenta o número de tarjeta de Cliente </i>
												único para cada cliente (para poder vincular
												las operaciones con los clientes).";
$lang['manage_import_customer_list']	= "Lista de clientes";
$lang['manage_import_duplicates']		= "¿Datos duplicados?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "Sobrescribir"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "Pegue la lista de clientes en el recuadro que se encuentra debajo";
$lang['manage_import_trans_instrctns']	= "<b>Para importar una lista de las operaciones:</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\"> Especifique cómo separar las columnas y en qué orden desea verlas.</li>
												<li style=\"padding-bottom: 5px;\">Asegúrese de que las operaciones 'Canjeadas' tengan una '<b>S</b>' en la columna de 'Canjear Suceso' y que los valores ingresados sean <b><i>POSITIVOS</i></b>.</li>
												<li style=\"padding-bottom: 5px;\">Si está importando operaciones de un programa '<b>Compre X, obtenga uno gratis</b>', asegúrese de seleccionar una columna de '<b>Artículo comprado</b>'.</li>
												<li style=\"padding-bottom: 5px;\">Si no se incluye una fecha, la operación se registrará con la fecha de hoy.<br>
													Las fechas pueden estar en cualquiera de los siguientes formatos <i>(Los años deben estar en formato de 4 dígitos)</i>:<br>
													<pre style=\"margin: 0px; padding: 0px;\">AAAA/MM/DD, AAAA-MM-DD, AAAA.MM.DD, MM/DD/AAAA, MM-DD-AAAA, MM.DD.AAAA</pre></li>
												<li style=\"padding-bottom: 0px;\">Copie y pegue su lista en el recuadro grande que se encuentra a continuación.</li>
											</ol>";
$lang['manage_import_campaign_name']	= "Nombre de identificación de programa";
$lang['manage_import_trans_date']		= "Fecha de la operación";
$lang['manage_import_trans_amount']		= "Monto de la operación";
$lang['manage_import_redeem_event']		= "Canjear suceso (S/N)";
$lang['manage_import_req_for_buyx']		= "Obligatorio (UNICAMENTE para programas \"Compre X...\")";
$lang['manage_import_item_purchased']	= "Artículo comprado ";
$lang['manage_import_description_auth']	= "Descripción / Aut.";
$lang['manage_import_trans_list']		= "Lista de operaciones";
$lang['manage_import_paste_trans']		= "Pegue las operaciones de los clientes en el recuadro que se encuentra a continuación";

// Reports
$lang['report_all_customers']			= "Todos los clientes";
$lang['report_all_customers_header']	= "Informe de todos los clientes ";
$lang['report_all_customers_range']		= "Todos los clientes entre"; /* one date and another date */
$lang['report_balances_header']			= "Informe de saldos de clientes";
$lang['report_balances']				= "Saldos de clientes para";
$lang['report_date_range']				= "Los clientes registraron operaciones entre:"; /* a range of dates.*/
$lang['report_search_header']			= "Informe de búsqueda de clientes";
$lang['report_search']					= "Buscar clientes para:";
$lang['report_search_range']			= "Entre"; /* one date and another date */
$lang['report_search_not_valid']		= "Debe ingresar algún criterio de búsqueda.";

// Report Exporting
$lang['export_xls']						= "Exportar a Excel";

// Users: Common actions:
$lang['user_role_F']					= "Supervisor de cumplimiento";
$lang['user_role_F_desc']				= "Dentro de los programas permitidos, sólo puede canjear recompensas de clientes.";

// Common Error Messages:
$lang['error_language_selector']		= "Hay un error en el idioma elegido.";


$lang['side_support_ideas']				= "Ideas para programas ";
$lang['side_support_ideas_describe']	= "Ideas y consejos sobre maneras creativas de poner sus programas al servicio de sus necesidades organizacionales, de marketing y aquellas relacionadas con la modificación del comportamiento de sus clientes ";


// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================
$lang['error_account_suspended']		= "Su cuenta ha sido suspendida";

// =========================
// Calculator
// =========================

$lang['calculator_title']				= "La calculadora del programa de puntos";
$lang['str_ratio']						= "Relación Gasto/Recompensa";
$lang['check_section_desc']				= "Asegúrese de no estar regalando<br>más de lo que gana:";
$lang['Print']							= "Imprimir";
$lang['column_product_or_pervice']		= "Producto o Servicio";
$lang['column_retail_price'] 			= "Precio de venta al público del producto o servicio";
$lang['column_points_earned'] 			= "Puntos ganados por el cliente por la compra de ese producto";
$lang['column_points_needed'] 			= "Puntos que necesita el cliente para canjearlo como recompensa";
$lang['column_cost_to_provide'] 		= "Su costo para la provisión de ese producto o servicio";
$lang['column_profit_made'] 			= "Ganancia obtenida con la venta de";
$lang['column_profit_made_part2']		= "productos<br>o servicios";
$lang['column_cost_reward_perc']		= "Costo de la recompensa<br>expresado como % de la ganancia";
$lang['column_cost_reward_smaller']		= "(Cuanto más pequeño, mejor)";
$lang['instructions']					= "Instrucciones";
$lang['calculator_instructions_1']		= "<strong>1) Sus clientes tienen que ganar PUNTOS por cada ".$lang['currency']." que gastan.
											¿Cuántos puntos? Éste es un número arbitrario:</strong><br>
											<br>
											Por supuesto que una relación de 1 punto por 1 ".$lang['currency']." es sencilla, pero también hace
											que sea más fácil para sus clientes determinar cuánto dinero llevan gastado en su compañía
											al mirar la cantidad de puntos que han acumulado.
											Honestamente, no hay necesidad de que sus clientes se alarmen por todo lo que lo adoran
											y porque gastan montones de dinero en su tienda, por lo que quizás sería conveniente que
											se tratara de un número equis ¡que les hiciera más difícil darse cuenta de que son adictos
											a las compras!
											Recomendamos un mínimo de 100 si va a estar contando los centavos, pero también puede ser
											sencillamente 3 ó 5 ó 20 si no le molesta redondear los centavos al valor en puntos más cercano.<br>
											<br>
											<strong>Una vez que elija el número, ingréselo en la casilla de <span class=\"orangeH\">Puntos por ".$lang['currency']."</span> arriba.</strong><br>";
$lang['calculator_instructions_2']		= "<strong>2) Por su parte, <i>la Relación Gasto/Recompensa</i>
											puede pensarse como \"¿cuántas veces tiene que comprar un producto o servicio el cliente
											para obtener una recompensa de igual valor?\"</strong><br />
											<br>
											En general, éste es un número entre 8 y 25 o más, pero, nuevamente, es algo específico de cada negocio.
											Por ejemplo, a menudo se ven cafés que ofrecen una taza de café gratis después de la décima que uno compra.
											Cuanto mayor el número, más conservador se es en cuestiones de dinero y más difícil es para sus
											clientes obtener su recompensa.<br>
											<br>
											<strong>Ingrese un número en la casilla <span class=\"orangeH\">Relación Gasto/Recompensa</span> ,
											y luego juegue un poco con los números.
											Pruebe algunos valores hasta que se sienta cómodo con los resultados.</strong>";
$lang['calculator_disclaimer']			= "<strong>Descargo de responsabilidad</strong>: Esta calculadora se ofrece únicamente como una herramienta de
											referencia, y recomendamos a los titulares de las compañías que consulten a sus asesores financieros
											antes de lanzar alguno de nuestros programas para ganar dinero fácilmente y sintiéndose bien";

// =========================
// Transaction Email
// =========================
$lang['transaction_email_content']		= "Correo electrónico sobre la operación: Contenido";
$lang['transaction_email_desc']			= "Si al momento de registrar una operación usted tiene en sus archivos la dirección de correo electrónico del client,
											usted puede optar por enviarle al mismo un correo electrónic.";
$lang['transaction_email_instr']		= "Para personalizar el correo electrónico que sus clientes reciban de su parte por este programa en particular,
											complete o edite las casillas en la plantilla de correo electrónico que se encuentra a continuación:";
$lang['transaction_email_default']		= "¡Gracias por su respaldo y por elegirnos!";
$lang['transaction_email_incl_balance']	= "Incluir saldo ";
$lang['transaction_email_incl_rewards']	= "Incluir recompensas disponibles";
$lang['transaction_email_incl_coupon']	= "Incluir cupón o promoción";
$lang['error_general_permission']		= "Contenido no disponible.";


// =========================
// ADDITIONAL TRANSLATIONS 4
// =========================
$lang['customer_edit_address_change'] = "Dirección cambiada a";
$lang['customer_edit_address_delete'] = "Dirección removida previamente";
$lang['customer_edit_address_replace'] = "Ha cambiado de dirección";


// =========================
// ADDITIONAL TRANSLATIONS 5
// =========================
// Email Updates:
$lang['email_agency_update_header']                = "Cambios a la Cuenta:";
$lang['email_agency_update_sub_header'] 				= "La siguiente información de la cuenta ha sido actualizada:";

// Import Updates:
$lang['Options']                                  	= "Opciones";
$lang['manage_import_duplicates_update']        	= "Actualizar";
$lang['manage_import_duplicates_ignore']        	= "Saltar";
$lang['manage_import_convert_currency'] 				= "Convertir monto de la transacción a lo que la campaña haga seguimiento?";
$lang['manage_import_trans_instrctns_2']        	= 'Si usted esta importando <b>transacciones de dinero</b> a una campaña basada
																		en puntos,o importando una lista de visitas en una campaña gane por evento,
																		asegúrese de comprobar la"'.$lang['manage_import_convert_currency'].'" casilla
																		de verificación. Si usted esta importando cantidades de puntos personalizadas o
																		cantidades de dinero personalizadas, asegurese de dejar la casilla vacía.';

// Import Undo
$lang['import_previous_title']                     = 'Importación previa';
$lang['Undo']                                      = 'Deshacer';
// BuyX Membership Functionality
$lang['Quantity']                                  = "Cantidad a añadir";
// Mailchimp Integration:
$lang['select_a_list_to_export_to']             	= "Seleccione una lista para exportar";
$lang['success']                                  	= "Éxito";
$lang['export_complete']                           = "Exportación completa";
$lang['loading']                                   = "Cargando...";
$lang['oops']                                      = "Oops!";
$lang['addresses_successfully_added']   				= "La dirección de e-mail ha sido añadida exitósamente a esta lista";
$lang['all_addresses_exist']                       = "Todas estas direcciones ya existentes en la lista";
$lang['addresses_exist']                           = "Direcciones de e-mail que ya existen en esta lista";
$lang['we_found']                                  = "Hemos encontrado";
$lang['errors']                                    = "errores";
$lang['addresses_with_errors']                  	= "direcciones de e-mail con errores";
$lang['Back']                                      = "Regresar";
$lang['CLOSE']                                     = "Cerrar";
$lang['Visit_MailChimp']                           = "Visita Mailchimp";
$lang['mailchimp_integration']                  	= "Integración con Mailchimp";
$lang['mailchimp_login_error']                  	= "MailChimp no reconoce su nombre de usuario / contraseña. Heads up - por razones
																		de seguridad, después de 10 intentos de conexión consecutivos, tendrá que esperar
																		5 minutos antes de intentarlo de nuevo.";
$lang['mailchimp_no_account_info']              	= "No encontramos la información de tu cuenta Mailchimp. Ingrésala ahora y continúa
																		con la exportación!";
$lang['mailchimp_bad_account_info']             	= "El login ó contraseña de tu cuenta Mailchimp no es reconocida por Mailchimp.
																		Ingrésala ahora y continúa con la exportación";
$lang['bananas']                                   = "Bananas!";
$lang['no_username']                               = "No ingresaste un nombre de usuario y/o una contraseña válida";
$lang['Username']                                  = "Nombre de Usuario";
$lang['Password']                                  = "Contraseña";


// =========================
// ADDITIONAL TRANSLATIONS 6
// =========================
$lang['account_new_header_agency']           	= "Cuéntanos un poco acerca de tu cliente:";
// Custom Date functionality
$lang['label_date']                          	= "Cumpleaños";
$lang['label_Year']                          	= "Año";
$lang['label_Month']                        		= "Mes";
$lang['label_Day']                           	= "Día";
$lang['customer_new_demo_date']                 = "01/01/2010";
$lang['user_edit_record_change_custom_date']    = "Cumpleaños cambia a";
$lang['user_edit_record_replace_custom_date']	= "Cumpleaños cambia a";
$lang['report_customer_birthday']                     = "Clientes con el cumpleaños por encima entre";
$lang['report_customer_birthday_header']              = "Reporte de cumpleaños de clientes";
// API functionality
$lang['api_redeem_reward_exeeds']              	= "El nivel de recompensa seleccionado excede el balance disponible";
$lang['api_redeem_amount_exeeds']               = "El valor ingresado excede el balance disponible";
$lang['api_redeem_amount_not_valid']            = "El valor ingresado no es válido";
$lang['api_redeem_amount_not_enough']           = "El valor ingresado debe ser al menos 1";
$lang['api_redeem_currency_not_enough']         = "El valor ingresado debe ser al menos 0.01";
$lang['api_redeem_nothing']                     = "Nada ha sido seleccionado para ser redimido";
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

//=========================
// ADDITIONAL TRANSLATIONS 10
// =========================
// New Field: Reward ID
$lang['edit_reward_id'] = "Opcional: ID de recompensa";
// Previous integration:
$lang['user_edit_record_change_password'] = "Contraseña cambiada";
$lang['label_customer_password'] = "Contraseña";
// Trial Limit feature:
$lang['error_trial_overage'] = 'No puede agregar más consumidores: Cuenta en modo de demostración.';
$lang['error_trial_overage_some'] = 'Cuenta en modo de demostración: Máximo 10 consumidores. Transacciones para los consumidores extra no registrados.';
$lang['error_activate_missing'] = 'Activar el parámetro que falta ó incorrecto';

// =========================
// ADDITIONAL TRANSLATIONS 11
// =========================
// API - Users List
$lang['api_error_users_list_not_owner'] = "Solo los dueños de la cuenta pueden accede a esta información.";
$lang['api_error_no_users'] = "No se encuentran otros usuarios";
$lang['Campaign_Error'] = "Campaña no válida ó desactivada.";

// =========================
// ADDITIONAL TRANSLATIONS 12
// =========================
$lang['api_error_no_customer_match'] = "Ningún cliente coincide con los datos proporcionados.";
$lang['api_error_multiple_customer_match'] = " Más de un cliente coincide con los datos proporcionados ";
$lang['api_error_PIN_empty'] = "No existe el PIN en el registro";
$lang['api_error_PIN_no_match'] = "PIN no coincide";
$lang['api_error_password_missing'] = "No hay ninguna contraseña proporcionada.";
$lang['api_error_PIN_missing'] = " No hay ningún PIN proporcionado.";
$lang['api_error_username_exists'] = "El nombre de usuario ya está en uso.";
$lang['api_error_invalid_delimiter'] = "Delimitador no válido";
$lang['api_error_no_data'] = "No se le dieron datos";
$lang['manage_import_field_note'] = "<i>Cada campo es opcional.</i><br>
<br>
Nota: Si usted planea en la importación de las<br>
<b>transacciones de consumidores</b>más tarde, un único <i> ID de cuenta</i><br>
para cada consumidor es REQUERIDO, así como para<br>
poder igualar transacciones de consumidores<br>
independientemente del variable <i>número de tarjeta</i>.<br>
Si usted no tiene un único ID separado<br>
para cada consumidor, entre el <i>número de la tarjeta</i> para<br>
el 'ID de la cuenta' y el 'número de la tarjeta'.";
$lang['label_PIN_new'] = "Nuevo PIN"; // (El PIN es un"número de identificación personal de 4 ó 5 dígitos")
$lang['user_new_PIN_label'] = "Escoja un PIN para este usuario";
$lang['user_new_PIN_note'] = "Opcional: para terminales, principalmente.";
$lang['user_edit_PIN_label'] = "Cambie el PIN";
$lang['user_edit_PIN_note'] = "Para conservar el mismo PIN, déjelo en blanco.";
$lang['user_PIN_not_numeric'] = "El PIN debe ser de 4 ó 5 dígitos solamente";

// =========================
// ADDITIONAL TRANSLATIONS 13
// =========================
$lang['edit_record_change_PIN'] = "PIN cambiado";
$lang['edit_record_change_username'] = "Nombre de usuario cambiado";
$lang['manage_undo_warning'] = " Seguro que desea deshacer esta importación?.<br><br> Esta acción NO SE PUEDE DESHACER!";
$lang['manage_undo_warning_pc'] = " Seguro que desea deshacer esta importación?\n\n Esta acción NO SE PUEDE DESHACER!";


// =========================
// ADDITIONAL TRANSLATIONS 14
// =========================
$lang['user_my_info_header']                        = "Información de mi Usuario";
$lang['user_role_I']                                    = "Gerente de Agencia  + Importaciones";
$lang['user_role_I_desc']                            = "Gerente, con habilidad  de editar configuración de programas, usuarios, generar reportes y administrar clientes (eliminar, importar), pero no puede crear programas ni usuarios.";
$lang['user_role_G']                                    = "Gerente de Agencia";
$lang['user_role_G_desc']                            = "Gerente, con la habilidad de editar configuración de programas, usuarios y generar reportes, pero no puede agregar programas, usuarios, ni eliminar o importar clientes.";


// =========================
// ADDITIONAL TRANSLATIONS 15
// =========================

$lang['coalition_balance_label']                    = "Actual<br>Balance de Coalición:";
$lang['coalition_redeem_header']                 = "Recompensas Disponibles en Localidad";
$lang['customer_activity_coalition_header']     = "Historial del Cliente (Solo esta localidad)";
$lang['report_coalition_header']                    = "Reportes de Coalición";
$lang['report_audits_totals_points']            = "Totales de Localidad - Puntos";
$lang['report_audits_totals_giftcard']            = "Totales de Localidad - Tarjetas de Regalo";
$lang['section_account_options_header']        = "Opciones Avanzadas de la Cuenta";
$lang['section_account_options_sub']            = "Si desea crear una Cuenta Avanzada (programa no-cerrado) por favor ingrese el Código de Activación que solicitó en uno de los campos debajo. Si tiene preguntas o no ha recibido su Código de Activación de Cuenta Avanzada, por favor contáctenos.";
$lang['section_coalition_token']                    = "Código de Activación de Coalición";
$lang['section_mall_token']                        = "Dos-Niveles / Código de Activación tipo Centro Comercial";
$lang['section_coalition_note']                    = "Disponible por un costo adicional.";
$lang['section_mall_note']                            = "Disponible por un costo adicional.";
$lang['section_mall_campaign_id']                = "ID del Program Maestro";
$lang['section_mall_percentage']                    = "Contribución al Program de Maestro(%) ";
$lang['section_token_invalid']                    = "El Código de Activación no es válido";
$lang['section_mall_options_header']            = "Opciones de Cuenta de Dos-Niveles";
$lang['percentage_not_valid']                        = "El porcentaje no es válido.";


// =========================
// ADDITIONAL TRANSLATIONS 16
// =========================
$lang['api_error_permission_denied']            = "Usuario no tiene autorización"; // An error message that shows up when a user makes an API call their permission level does not allow access to.
$lang['api_error_wrong_account']                    = "Usuario no tiene autorización para accesar la cuenta afectada"; // An error message that shows up when a user makes an API call that affects the wrong account.
$lang['api_error_missing_username']                = "Falta el nombre del usuario"; // An error message that shows up when a username (Account User, not Customer) is required but is missing.
$lang['api_error_PIN_too_many_matches']        = "Demasiados usuarios coinciden con éste PIN";  // Shows when an account user is trying to be validated in a terminal-like setting bY entering only their PIN which ought to be unique, but there is more than one matching PIN.
$lang['api_error_PIN_duplicate']                    = "Este PIN ya se encuentra en uso"; // Shows when an user is created or updated and the PIN assigned to them is already in use bu another user in the account.
$lang['api_error_campaign_id']                    = 'Error en ID del programa';
$lang['api_error_campaign_name']                    = 'Error en nombre del programa';
$lang['api_error_campaign_type']                    = 'Error en tipo del programa';
$lang['api_error_campaign_points_ratio']        = 'Error en puntos del programa'.$lang['currency'].' relación';
$lang['api_error_campaign_rewards_ratio']        = 'Error en programa en relación gasto--recompensa';
$lang['api_error_campaign_depreciation']        = 'Error en programa en configuración de depreciación';
$lang['api_error_campaign_dpv']                    = 'Error en programa gane cantidad-por evento';
$lang['api_error_campaign_promo']                = 'Error en programa parámetros de promoción';
$lang['api_error_campaign_reward']                = 'Error en programa parámetros de recompensas';
$lang['api_error_campaign_item']                    = 'Error en progarma Compre X parámetros de artículos';
$lang['report_custom_date']                        = "Clientes con fecha dentro del rango especificado";
$lang['report_custom_date_header']                = "Reporte de clientes fecha especificada";


// =========================
// ADDITIONAL TRANSLATIONS 17
// =========================
// Mainly small changes regarding coalition and two-tier programs.

$lang['coalition_points_program']                = "Coalición Programa de Puntos"; // A label in reports that aggregate an account's points-based coalition campaigns into a single line.
$lang['coalition_giftcards_program']            = "Coalición Programa de Valor Acumulado"; // A label in reports that aggregate an account's stored-value (giftcard) based coalition campaigns into a single line.
$lang['coalition_program']							= "Coalición Programa";
$lang['twotier_program']							= "Dos-Niveles Programa";
$lang['opt_out']												= "No participar";

$lang['user_role_L']                                    = "Coalición Gerente de Localidad";
$lang['user_role_L_desc']                            = "Same access as a Manager, but without the ability to edit customers' info once entered.";

$lang['user_role_D']                                    = "Diseñador de Programa";
$lang['user_role_D_desc']                            = "Unique role that allows only the ability to add, edit, suspend, and re-activate campaigns,
                                                               and run reports, but nothing else.";

// =========================
// ADDITIONAL TRANSLATIONS 18
// =========================
$lang['account_label_fields_manage']            = "Administrar Campos"; // A button text that lets the user add/manage the fields of data collected for the account's customers.
$lang['error_action_undefined']                    = "Acción Indefinida"; // Shows mainly as an API error message when the "action" parameter is not given or does not match one of the expected action words.
$lang['error_entry_not_in_list']                    = "Opción enviada no permitida."; // Shows mainly as an API error message when a value is input that does not match one of the options in the list of options for that field.
$lang['error_entries_not_in_list']                = "Opciones enviadas no permitidas."; // Shows mainly as an API error message when a series of values is input that do not exist in the list of options for that field.
$lang['error_not_numeric']                            = "Número inválido.";
$lang['error_not_monetary']                        = "Valor monetario no válido.";
$lang['error_not_date']                                = "Fecha inválida.";
$lang['manage_fields_top_header']                = "Seleccionar Campos de Información a administrar"; // The page header where data fields are managed (customers, transations, etc.)
$lang['manage_fields_customers_top_header']    = "Adminstrar Campos de Información del Cliente"; // The page header where customers' data fields are managed (to add, show/hide, etc.)
$lang['manage_fields_transactions_top_header']    = "Administrar Campos de Información de Transacciones"; // The page header where customers' transaction data fields are managed
$lang['manage_fields_predefined_header']        = "Predefinir Campos de Clientes"; // The section where the original set of customer fields are show, and where the user can choose to show or hide them.
$lang['manage_fields_custom_header']            = "Campos Personalizados"; // The section where new custom customer data fields are shown.
$lang['label_customer_fields']                    = 'Campos del Cliente'; // A button for the user to select to manage the fields related to customer data.
$lang['label_transaction_fields']                = 'Campos de Transacciones'; // A button for the user to select to manage the fields related to a customer's transaction data.
$lang['label_Label']                                    = "Nombre del campo"; // As in "the word that describes a category" -- ex: The label of this field is the word that describes what the field is for.
$lang['label_Type']                                    = "Escribir"; // As in "the kind of thing it is" -- ex: This field is of a text type. The type of this other field is a date.
$lang['label_Text']                                    = "Texto"; // One of the types of field mentioned above. In this case a field that includes any kind of character.
$lang['label_Date']                                    = "Fecha"; // One of the types of field mentioned above. In this case a field that represents a calendar date and time, to the second.
$lang['label_List']                                    = "Lista"; // One of the types of field mentioned above. In this case a field that allows the user to choose elements in a list.
$lang['label_Picklist']                                = "Elija lista"; // One of the types of field mentioned above. In this case a field that allows the user to pick ONE elements from a list.
$lang['label_Number']                                = "Número"; // One of the types of field mentioned above. In this case a field that is numerical in value only.
$lang['label_Money']                                    = "Moneda"; // One of the types of field mentioned above. In this case a field that is numerical, with exactly two decimals.
$lang['label_Choices']                                = "Lista de Opciones"; // A description of a field type that allows the user to store alternatives to be chosen in a list.
$lang['label_Choices_sub']                            = "Separar cada opción con una coma"; // Instructions to the user to separate each option for the list with a comma (,) character.
$lang['label_Unique']                                = "Unico?"; // Description of a field choice that asks the user if the values recorded in the field in question must be unique.
$lang['label_Select']                                = "Seleccionar:"; // The word that appears as the initial selection (and thereby, as the instruction) in a pull-down menu.

$lang['custom_field_delete_popup']                = "Este campo personalizado será eliminado junto con TODA LA INFORMACION DEL CLIENTE.<br><br>
                                                               This action CANNOT BE UNDONE!<br><br>
                                                               ¿Está seguro que desea eliminar este campo personalizado?";
$lang['custom_field_delete_popup_pc']            = "Este campo personalizado será eliminado junto con TODA LA INFORMACION DEL CLIENTE..\n\n
                                                               This action CANNOT BE UNDONE!\n\n
                                                               ¿Está seguro que desea eliminar este campo personalizado?";

$lang['success_customer_fields']                    = "Cambios a los campos de clientes fueron grabados exitosamente.";
$lang['success_transaction_fields']                = "Cambios a los campos de transacciones fueron grabados exitosamente.";
$lang['button_add_field']                            = "Agregar un nuevo campo personalizado";
$lang['ID']                                                = "ID"; // Generic SHORT identifier for "Identification" (whether numeric or alpha-numeric)
$lang['generate_id_error']                            = "Error al generar el ID. Por favor intente de nuevo.";



// END OF FILE
?>
