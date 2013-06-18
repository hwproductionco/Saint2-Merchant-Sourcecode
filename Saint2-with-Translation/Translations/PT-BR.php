<?php
/* =======================
   TRANSLATION NOTES
==========================
This is the American English language file

To edit or modify this file, simply replace the word, phrase,
text, or HTML code in between the doulbe quote (") marks.

Any text after a double slash "//" at the end of a line is a comment to explain or clarify.

Any text between the two characters "/*" and "* /" resents text of graphics that will help
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

// Default currency values to be replaced with preferences?
if (!isset($lang['currency'])) {
	$lang['currency']						= "Real";
}
if (!isset($lang['currency_plural'])) {
	$lang['currency_plural']				= "Reais";
}
if (!isset($lang['currency_symbol'])) {
	$lang['currency_symbol']				= "R$";
}
if (!isset($lang['currency_100th'])) {
	$lang['currency_100th']					= "Centavo";
}
if (!isset($lang['currency_100th_plural'])) {
	$lang['currency_100th_plural']			= "Centavos";
}
if (!isset($lang['currency_100th_symbol'])) {
	$lang['currency_100th_symbol']			= "¢";
}

// Single words and labels
// (Pay attention to capitalization)
$lang['col_1']							= "1";  				// Header for column 1 of reports and bookmarks sections
$lang['col_2']							= "2";  				// Header for column 2 of reports and bookmarks sections
$lang['col_3']							= "3";  				// Header for column 3 of reports and bookmarks sections
$lang['Account']						= "Conta";  			// Noun: As in "a collection of transactions". Ex: "Click here to view this customer's account."
$lang['Activate']						= "Ativar";  			// As in "to turn on", to "make work". Ex: "Click here to activate this campaign."
$lang['Activation']						= "Ativação";// As in "the act of activating" or "turning on". Ex: "Date: 2009.01.01. Transaction: Activation."
$lang['Activity']						= "Atividade";  		// Noun: A description, list, or summary of transactions. Ex: "Activity for this account: 20 transactions."
$lang['Added']							= "Adicionado";  		// Verb, past tense: As in "joined" or "increased". Ex: "On Transaction #1234, 100 points were added to the account."
$lang['addition_symbol']				= "+";					// The mathematical symbol for addition
$lang['All']							= "Todas";  			// As in "the whole quantity" or "each and every". Ex: Click here to select all options."
$lang['Amount']							= "Montante";  			// Noun: As in "quantity", usually referrency to money. Ex: "The amount of this transaction was $30.00"
$lang['and']							= "e";  				// As in joining two items. Ex: "Show me all customers who had a transaction between this date and that date."
$lang['Authorization']					= "Autorização"; // Noun: As in "certification of validity". Ex: "The credit card authorization for this transaction is 123456."
$lang['Available']						= "Disponível";  	// As in "able to be used". Ex: "You have 100 points available."
$lang['Balance']						= "Saldo"; 				// As in "amount accumulated or remaining." Ex: "After redeeming her points for a massage, her balance is 450 points."
$lang['Balances']						= "Saldos";				// Plural
$lang['By']								= "Por"; 				// As in "based on." Ex: "Sort by name" or "Sort by Account ID"
$lang['Campaign']						= "Campanha";			// As in a marketing campaign, but in this case, really meaning a "program" as in "Loyalty Program",
																// but used to avoid confusion with the idea of a "program" as software.
$lang['Campaigns']						= "Campanhas";			// Plural
$lang['Comma']							= "Vírgula";		// The keyboard character ",". The key next to the "M" in a QWERTY keyboard.
$lang['Country']						= "País";			// As in the nation or territory a person lives in or business operates in.
$lang['Customers']						= "Clientes";			// As in people who purchase goods or services from the a business that uses the StickyStreet service.
$lang['Date']							= "Data";				// As in the year-month-day when a transaction or activity was recorded.
$lang['Days']							= "Dias";				// Plural of the unit representing a full rotation of the planet. Ex: "This customer hasn't been back in over 30 days."
$lang['Demo']							= "Demo";				// Short for "Demonstration", as in recreating or showing a process. Ex: "Click to see the demo."
$lang['Description']					= "Descrição";// Ex: "Provide a description of the transaction in this box:"
$lang['Deducted']						= "Subtraido";			// As in to be removed or subtracted from a sum. Ex: "100 points were deducted from your balance".
$lang['Redeemed_BuyX']				= $lang['Deducted'];
$lang['Employee']						= "Usuário";			// As in a person that works for a business or organization.
$lang['Earned']							= "Obtido";				// Verb, past tense: As in "accumulated" or "gained". Ex: "This is the total amount of points earned by all customers."
$lang['Error']							= "Erro";				// As in "mistake" or an incorrect result. Ex: "An error caused the program to stop."
$lang['event']							= "ocorrência";	// As in an occurance, like a store visit, or a referral, or an accomplishment, several of which merit a reward.
$lang['events']							= "ocorrências";
$lang['Event']							= "Ocorrência";
$lang['Events']							= "Ocorrências";
$lang['from']							= "de";					// As in "indicating a previous state" or "point of origin". Ex: "His name changed from John to Jack."
$lang['Gratis']							= "Gratis";				// As if "no need to pay" or "no charge". Ex: "StickyStreet is free when you have 10 or less customers.
$lang['Hello']							= "Olá";			// As in the greeting to welcome someone. Ex: "Hello Jane Doe"
$lang['info']							= "info";				// Short for "information".
$lang['Item']							= "Item";				// One single type of product or service. Ex: "This item was purchased yesterday."
$lang['Level']							= "Nível";			// Noun: Describing a position in a hierarchy. Ex: "This account is at Level 2"
$lang['Liability']						= "Saldo Devedor";		// Noun: As in "debt or financial obligation". Ex: "Our total liability for Campaign A is 123,567 points"
$lang['multiplication_symbol']			= "x";					// The mathematical symbol for multiplication
$lang['Need']							= "Precisa";			// Verb: As in "requires". Ex: "You need 100 points to get a reward."
$lang['No']								= "Nenhum";				// As in "none found". Ex: "No Events (in this account)."
$lang['None']							= "Nenhuma";			// As in "not any" or "no one". Ex: "I want none of the options presented."
$lang['Note']							= "Nota";				// As in an additional comment, or postscriptum. Ex: "Note: This is important."
$lang['Notes']							= "Notas";				// Plural of "Note", above
$lang['Online']							= "On-line";			// As in being in, or coming from, the internet. Ex: "This transaction was recorded through the online signup form."
$lang['Operation']						= "Operação";  // In a mathematical context: Addition and Multiplication are both _operations_ that can be applied to promotions.
$lang['optional']						= "opcional"; 			// As in "not required" or "not obligatory". Ex: "This task is optional";
$lang['or']								= "ou";					// As in "either", between two alternatives. Ex: "this or that".
$lang['Paid']							= "Pago";				// Verb, past tense. As in "payment given". Ex: "She paid $10 for an item, using the balance on her gift card."
$lang['point']							= "ponto";				// As in a unit of accumulation. Ex: "You have earned 100 points today."
$lang['points']							= "pontos";
$lang['Point']							= "Ponto";
$lang['Points']							= "Pontos";
$lang['per']							= "por";				// As in describing a relation between two units. Ex: "100 points per dollar"
$lang['Pipe']							= "Pipe (|) ";			// The keyboard character "|". The character you get when pressing Shift-"\" in a QWERTY keyboard.
$lang['Purchased']						= "Comprado";	// As in, bought, acquired, sold. Ex: "This item was purchased yesterday."
$lang['Ratio']							= "Proporção";// The relationship between two units. Ex: "The ratio between A and B."
$lang['Recorded_By']					= "Usuário"; 		// As in "the user who recorded this transaction or activity."
$lang['Redeemed']						= "Redimido"; 			// Verb, past tense: As in "presented for exchange". Ex: "She redeemed her 10,000 points for a massage."
$lang['Ref']							= "Ref."; 				// Abbreviation of "Reference". In this case, refering to a credit card or cash register reference number.
$lang['Referrer']						= "Recomendado por"; 		// As in a person or entity that sends business your way.
$lang['Report']							= "Relatório"; 	// As in "Relatory", or "Presentation".
$lang['Required']						= "Necessário";			// As in necessary, compulsory. Ex: "The name field is required."
$lang['Reward']							= "Prêmio"; 		// As in a thing that can be claimed after certain conditions have been met. Ex: "The reward for having 1000 points is a free widget."
$lang['Rewards']						= "Prêmios"; 	// Plural
$lang['Role']							= "Papel";				// Noun: Describes the permission level for a user. Ex: "This user level is 'manager'."
$lang['Tab']							= "Tab";				// The keyboard key that takes the cursor to the next set demarcation. The key next to "Q" in a QWERTY keyboard.
$lang['Thank-you']						= "Obrigado";	// As in "Thank-you for your business" - said by the Client to a Customer.
$lang['Tip']							= "Dica";				// Noun: As in a "hint" or "useful knowledge". Ex: "Here is a tip on how to better use this feature."
$lang['to']								= "a";					// As in joining two points of a range. Ex: "From January to December"
$lang['To_Get']							= "Para Obter";			 // As in "to receive" or "to be given". Ex: "You need 100 points to get a reward."
$lang['To_Get_One_Of']					= "Para obter um"; 		// As in "to receive" or "to be given" a single quantity. Ex: "You need to buy 10 coffees to get one of [the same] free"
$lang['Trans_ID']						= "ID da Trans."; 		// Short for "Transaction ID" - Referring to an internal StickyStreet number to reference a particular transaction.
$lang['Transaction']					= "Transação"; // A unique event like a purchase, redeeming a reward, etc.
$lang['Transactions']					= "Transações"; // Plural
$lang['User']							= "Usuário"; 			// As in an employee of the business or organization that can login to use the StickyStreet service.
$lang['Yes']							= "Sim";

// Ignore this section
$lang['ppd']							= $lang['Points']."-".$lang['per']."- transação ou ".$lang['currency'];

// Page Titles:
$lang['title_add_campaign']				= "Adicionar Campanha";
$lang['title_add_product_service']		= "Adicionar Produto / Serviço para";
$lang['title_add_promotion']			= "Adicionar Promoção para";
$lang['title_add_reward']				= "Adicionar Prêmio para";
$lang['title_add_user']					= "Adicionar usuário de conta";
$lang['title_amnesia'] 					= "Login ou Senha esquecidos";
$lang['title_award_reddeem'] 			= "Prêmio Remitido";
$lang['title_create_new_account']		= "Abrir uma conta nova";
$lang['title_default']					= "Gestão de Fidelização e Cartões-Oferta";
$lang['title_edit_account']				= "Alteração de Dados de Conta";
$lang['title_edit_account_number']		= "Alterar a Conta";
$lang['title_edit_campaign']			= "Alterar Definições de";
$lang['title_edit_product_service']		= "Alterar Produto ou Serviço de";
$lang['title_edit_promotion']			= "Alterar Promoção de";
$lang['title_edit_reward']				= "Alterar Prêmios de";
$lang['title_edit_user']				= "Alterar usuário";
$lang['title_find_add']					= "Pesquisar ou Adicionar Cliente em";
$lang['title_login'] 					= "Log-in";
$lang['title_managing_cards']			= "Gestão de Contas de Clientes";
	$lang['importing_customers']		= "Introdução por Lote de Clientes";
	$lang['customers_imported']			= "Clientes Introduzidas por Lote";
	$lang['importing_transactions']		= "Introdução por Lote de Transações";
	$lang['transactions_imported']		= "Transações Introduzidas por Lote";
$lang['title_more_r_and_e_banners'] 	= "Mais Anúncios Refer-and-Earn";
$lang['title_r_and_e_balance']			= "O Seu Saldo de Refer-and-Earn";
$lang['title_report_all_trans']			= "Relatório de Transações";
$lang['title_report_freq_cust']			= "Relatório de Cliente Freqüente";
$lang['title_report_miss_cust']			= "Relatório de Clientes Desparecidos";
$lang['title_report_new_cust']			= "Relatório de Novos Clientes";
$lang['title_report_redeem_trans']		= "Relatório de Transações com resgate";
$lang['title_report_totals']			= "Relatório de Posição Integrada";
$lang['title_search_result']			= "Resultados de Pesquisa";
$lang['title_trans_del']				= "Transação Apagada";
$lang['title_trans_rec'] 				= "Transação Registada";
$lang['title_view_account']				= "Visualizar Conta";

// Side Modules
$lang['side_blog_describe']				= "Para anúncios, sugestõAtivoes, e opiniões, visite o nosso"; // ... blog
$lang['side_loyalty_link_desc']			= "Fidelize os seus clientes no seu site através de Inscrição e Consulta de Saldos on-line";
$lang['side_support_desk_describe']		= "Consulte a Lista de Perguntas Frequentes no nosso Centro de Apoio ao Cliente, e envie pedidos de apoio";
$lang['side_support_email_call']		= "Contacte-nos diretamente<br>ou ligue para:";
$lang['side_support_links']				= "<span style=\"color:#79B216;\">Apoio</span> ao Cliente";
$lang['side_support_phone']				= "<span style=\"font-weight: bold;\">866-780-STICKY</span> <span style=\"color: #888; font-size: 80%;\">(7842)</span>";
$lang['side_points_calc_desc']			= "Uma ferramenta para ajudar a calcular níveis de prêmios";

// Destinations / Section names
$lang['section_account_control_panel']	= "Painel de Controle da Conta";
$lang['section_account_info_header']	= "Dados de Conta";
$lang['section_account_login']			= "Log-in";
$lang['section_account_new']			= "Criar uma nova Conta";
$lang['section_blog']					= "Blog";
$lang['section_campaign_reports']		= "Relatórios";
$lang['section_customer_account']		= "Conta de Cliente";
$lang['section_loyalty_link_inst']		= "Instruções para LoyaltyLink";
$lang['section_points_calculator']		= "Calculadora de Pontos";
$lang['section_points_promotions']		= "Promoções";
$lang['section_support_desk']			= "Apoio ao Cliente";

// Labels
$lang['label_account_id']				= "Código de Conta";					// Usually, a Client's account identification "code" (An alphanumeric string of 5 to 20 characters)
$lang['label_unique_id']				= "Código único";					// In this case, a customer's account identification code, which be anything but must be unique.
$lang['label_account_owner']			= "Proprietário da Conta";			// The person who created a StickyStreet account.
$lang['label_additional_info']			= "Info Adicional";						// An optional (in most cases) field where additional information can be recorded.
$lang['label_additional_info_user']		= "Info Adicional";
$lang['label_card']						= "Nº de Cartão";				// Refers to a number printed on a paper or plastic card carried by the customer.
$lang['label_city']						= "Cidade";
$lang['label_currency']					= "Moeda";								// The word to describe the monetary exchange medium.
$lang['label_currency_symbol']			= "Símbolo da moeda";				// The phrase to describe the glyph or character that represents the unit of monetary exchange.
$lang['label_date_range']				= "Critério de datas";			// Ex: January 2008 to December 2008
$lang['label_email']					= "Email";
$lang['label_email_short']				= "Email";
$lang['label_first_name']				= "Primeiro nome";					// As in "given name". ie: not the one shared by their family.
$lang['label_language_select']			= "Idioma de exibição";	// As in a prompt to the user to select a language for the application
$lang['label_last_name']				= "Sobrenome";							// As in "surname" or "family name". ie: A name shared by all members of their family.
$lang['label_localization']				= "Localização";						// As in the selection of preference that will localize the application. ei: language, currency, etc.
$lang['label_name']						= "Nome";								// The joining of first and last names.
$lang['label_organization']				= "Organização";							// As in a business, church, school, club, etc.
$lang['label_owner_id']					= "Código de usuário do Proprietário";	// A unique login name that identifies the user as the account owner.
$lang['label_password']					= "Senha";
$lang['label_password_new']				= "Nova Senha";
$lang['label_password_retype_short']	= "Insira novamente a Senha";		// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_password_retype']			= "Insira novamente a Senha Nova";	// A prompt to re-type the password, to ensure that a mistake wasn't made the first time.
$lang['label_phone']					= "Número de Telefone";
$lang['label_state']					= "Estado";
$lang['label_timezone']					= "Fuso horário";
$lang['label_user_id']					= "Usuário"; 				// A unique login name that allows an employee of a StickyStreet client to access the program.
$lang['label_zip']						= "Código Postal";

// Navigation
$lang['nav_active']						= "AtivoDesativar";					// As in "turned on" or "enabled". Ex: "This campaign is currently active."
$lang['nav_add']						= "Adicionar";				// Verb: As in addition or accumulate. Ex: "Click here to add another level."
$lang['nav_cancel']						= "Cancelar";				// Verb: As in "annul" or "revoke". Ex: "Click here to cancel any changes."
$lang['nav_change_to']					= "Mudar para:";			// As in changing a value or parameter, not as in changing a page or location.
$lang['nav_deactivate']					= "Desativar";  			// As in "to turn off", or "stop from working". Ex: "Click here to deactivate this campaign."
$lang['nav_deduct']						= "Subtrair";  				// Verb: As in "subtract" or "take away". Ex: "Click here to deduct 100 points from this customer's balance."
$lang['nav_delete']						= "Eliminar";				// Verb: As in "remove" or "erase". Ex: "Click here to delete this transaction."
$lang['nav_deselect_all']				= "De-selecionar Tudo";	// As in removing any marked option from a list of available ones. Ex: "Click here to deselect all checked campaigns"
$lang['nav_done']						= "Sair";					// As in "finished" or "completed". Ex: "This task is done."
$lang['nav_edit']						= "Alterar";				// Verb: As in planning to make a change . Ex: "Click here to edit this information."
$lang['nav_find']						= "Pesquisar";				// Verb: As in "to locate" or "to search". Ex: "Click here to find customers who match your query."
$lang['nav_finish']						= "TERMINAR";				// Verb: As in "to end a process". Ex: "Click here to finish this tutorial."
$lang['nav_go']							= "Ir";						// Verb: As in travel from one place to another. Ex: "Click here to go to the selected screen."
$lang['nav_hide']						= "Esconder";				// Verb: As in "to conceal" or "remove from view". Ex: "Click here to hide this section."
$lang['nav_jump_to']					= "Saltar para:"; 					// As in changing screens, pages, or location.
$lang['nav_log_in']						= "Log-in";					// As in entering by providing credentials. Ex: "Click here to log in this program."
$lang['nav_logout']						= "Logout";					// Noun: The action of exiting and reseting the program. Ex: "Click here to logout of this program."
$lang['nav_lookup']						= "Procurar";				// Noun: The action of retrieving information. Ex: "Click here to lookup customers"
$lang['nav_next']						= "Continuar";				// As in there's another step following this one. Ex: "Click here to go to the next screen."
$lang['nav_on_hold']					= "Suspendida";				// As in currently not active. Ex: "This campaign has been placed on hold."
$lang['nav_print']						= "Imprimir";				// Verb: As in "to output to paper". Ex: "Click to print this customer's account details."
$lang['nav_print_short']				= "Imprimir Sumário";	// As in "to output a short version to paper". Ex: "Click to print a summary of this customer's account details."
$lang['nav_re-activate']				= "Reativar";				// As in "to turn on again", to "make work once more". Ex: "Click here to re-activate this campaign that was on hold."
$lang['nav_record']						= "Registar";				// Verb: As in to record a transaction. Ex: "Click here to record this transaction."
$lang['nav_redeem']						= "Resgatar";				// Verb: As in "exchange accumulated units of value for a defined reward". Ex: "I want to redeem my 100 points for a free massage."
$lang['nav_remove']						= "Eliminar";				// Verb: As in "get rid of" or "delete". Ex: "Please confirm you want to remove this user."
$lang['nav_return']						= "Voltar";					// Verb: As in "go back". Ex: "Click here to return to the previous screen."
$lang['nav_show']						= "Mostrar";				// Verb: As in "to reveal", or "make visible". Ex: "Click here to show this section."
$lang['nav_save_changes']				= "Preservar Mudanças";	// As in to record information that has been modified. Ex: "Click here to save any changes that were made."
$lang['nav_select_all']					= "Selecionar Tudo";		// As in including all of the available options. Ex: "Click here to select all campaigns."
$lang['nav_set']						= "Gravar";					// ou "fixar"? Verb: As in to record a value. Ex: "to set in stone".
$lang['step1']							= "Parte 1";				// Description of one's position in a one-time process to introduce the program's main features.
$lang['step2']							= "Parte 2";
$lang['step3']							= "Parte 3";
$lang['step4']							= "Parte 4";

// Login Screen
$lang['login_amnesia_prompt']			= "Esqueceu-se da Senha ou<br>do código de usuário?";
$lang['login_amnesia_button']			= "Recupere-os agora";
$lang['login_email_missing']			= "Insira o endereço email da sua conta:";
$lang['login_fancy_1']					= "iniciar";
$lang['login_fancy_2']					= "Sessão";
$lang['login_new_account_prompt']		= "Não tem conta?";
$lang['login_new_account_button']		= "Crie uma conta aqui"; 	// ou: Registe-se aqui
$lang['login_password_missing']			= "Insira a sua Senha";
$lang['login_userid_missing']			= "Insira o seu código de usuário";
$lang['login_wrong_password']			= "A Senha inserida não é válida.";
$lang['login_wrong_user_id']			= "O código de usuário não é válido.";

// Forgot Password / Username section;
$lang['amnesia_header']					= "Ligeiro Caso de Amnésia?";
$lang['amnesia_note_top']				= "Uma nota sobre filtros de Spam:";
$lang['amnesia_note_text']				= "Se não receber um email nosso dentro de poucos minutos, veja se o nosso email não foi apanhado pelo seu filtro de Spam.
											O email será enviado de";
$lang['amnesia_password_button']		= "Envie-me a minha Senha";
$lang['amnesia_password_dir']			= "Introduza o seu código de usuário em baixo, e nós enviaremos a sua Senha para o endereço de email associado com a sua conta.";
$lang['amnesia_password_header']		= "Recuperar Senha";
$lang['amnesia_password_sent']			= "OK!<br><br>A sua Senha foi enviada<br>ao endereço de email<br>associado com a sua conta.";
$lang['amnesia_return_button']			= "Regressar à página log-in";
$lang['amnesia_sub_header']				= "Não se preocupe, podemos ajudar...<br> Pelo menos lembra-se do seu nome, não é verdade?";
$lang['amnesia_user_id_button']			= "Envie-me o meu<br>código de usuário";
$lang['amnesia_user_id_dir']			= "Introduza o seu endereço de email em baixo, e enviaremos todos os códigos de usuários associados com esse endereço de email:";
$lang['amnesia_user_id_header']			= "Recuperar código de usuário";
$lang['amnesia_userid_sent']			= "OK!<br><br>O seu código de usuário foi mandado para o endereço de email que nos deu.";

// New Account Screen
$lang['account_billing_level_1']		= /* the number 10 */ "ou menos contas de clientes"; // ie: "This account currently has 10 or less customer accounts".
$lang['account_biz_missing']			= "Deve inserir o nome da sua empresa."; // Usually a business name, but it could be a school or non-profit organization.
$lang['account_email_needed_1']			= "Deve inserir um endereço de email.";
$lang['account_email_needed_2']			= "É pelo endereço de email que enviaremos alertas de faturamento e comunicados sobre a sua conta.";
$lang['account_enter_first']			= "Insira o seu nome próprio.";
$lang['account_enter_last']				= "Insira o seu sobrenome.";
$lang['account_id_empty']				= "Selecione e insira um código de usuário";
$lang['account_id_exists']				= "Este código de usuário já está em uso.<br>Introduza um nome differente.";
$lang['account_id_not_valid']			= "Um código de usuário só pode ter letras, numeros, e _ (sublinhado)";
$lang['account_language_error']			= "Ouve um erro com o idioma escolhido.";
$lang['account_language_note']			= "Nota: Este é o padrão de idioma geral desta conta.<br>
											Preferência será dada á selecção de idioma do usuário (definida para<br>
											cada usuário desta conta na secção de usuários) ou á selecção de idioma<br>
											na página de login. ";
$lang['account_new_create_button']		= "Criar Conta";
$lang['account_new_directions']			= "Para começar, basta preencher este formulário para criar uma conta:";
$lang['account_new_end']				= "É tudo!"; // As in "all done!" or "I'm finished!".
$lang['account_new_header']				= "Diga-nos um pouco sobre si";
$lang['account_new_owner_id']			= "Insira um código de usuário";
$lang['account_new_owner_restrict']		= "Máximo de 20 caracteres, sem espaços";
$lang['account_new_owner_user_id']		= "Insira um código de usuário";
$lang['account_new_password']			= "Insira uma Senha para sua conta.";
$lang['account_new_password_restrict']	= "De 5 a 20 caracteres, somente letras e números";
$lang['account_new_phone_dir']			= "Indique os prefixos todos.";
$lang['account_new_step1_greet']		= "Parabéns por ter criado a sua conta!";
$lang['account_new_step1_dir']			= "Vamos agora percorrer um processo bem simples:";
$lang['account_new_step1_1']			= "Criação de uma campanha de fidelidade ou cartão-oferta.";
$lang['account_new_step1_2']			= "Parâmetros de campanha.";
$lang['account_new_step1_3']			= "Inserir uma transação de um cliente.";
$lang['account_new_step1_4']			= "Voltar para o painel de controle.";
$lang['account_referred']				= "Se alguem recomendou o nosso serviço, quem foi?";
$lang['account_referred_dir']			= "Nome, empresa, ou código de recomendação.";
$lang['account_referrer_record']		= /* The referred business */ "criou uma conta gratuita.";
$lang['account_terms_agree']			= "Para concordar com os Termos  de Serviço e Condições de Uso clique na caixa acima.";
$lang['account_terms_conditions_dir']	= "Leia e clique na caixa para concordar com os"; /* Terms and Conditions */
$lang['account_terms_conditions_use']	= "Termos  de Serviço e Condições de Uso";
$lang['account_terms_conditions_agree']	= "Concordo com os Termos de Serviço e Condições de Uso";
$lang['account_timezone_note']			= "Nota: Este é o padrão de fuso horário para esta conta.<br>
											Preferência será dada á selecção de fuso horário do Usuário (definida para<br>
											cada Usuário desta conta na secção de usuários).";

// Edit Account Info Screen
$lang['account_biz_info_header']		= "Informação sobre a sua empresa";  // Header of section where name, address, and other such info is displayed.
$lang['account_label_address']			= "Endereço:";
$lang['account_label_billing_level']	= "Nível de faturação:";
$lang['account_label_biz_name']			= "Empresa (R. Social):";
$lang['account_label_biz_address1']		= "Endereço";
$lang['account_label_biz_address2']		= "Complemento de endereço";
$lang['account_label_custom_fee']		= "Mensalidade personalizada";
$lang['account_label_customers']		= "Clientes";
$lang['account_label_customers_manage']	= "Gestão de clientes";
$lang['account_label_free']				= "Gratuito"; // As in "gratis" or "no payment required".
$lang['account_label_owner']			= "Proprietário da conta";
$lang['account_label_owner_contact']	= "Modos de contato:";
$lang['account_label_pay_invoices']		= "Ver / Pagar faturas";
$lang['account_label_per_month']		= "/ mês";  // As in "per month" or "monthly".
$lang['account_owner_login_header']		= "Login do proprietário da conta";
$lang['account_password_missing']		= "As palavras-passe não correspondem.";
$lang['account_passwords_mismatch']		= "As duas palavras-passe não correspondem.";
$lang['account_owner_sec_token']		= "Ficha de Segurança";

// Control Panel
$lang['cp_step_dir_header']				= "Fim da visita-guiada.";
$lang['cp_step_dir']					= "Aqui está no Painel de Controle, onde inicia a sessão após o login.
											Daqui poderá gerir todos os aspectos da sua conta";
$lang['cp_campaigns_table_header_1']	= "Campanha";
$lang['cp_campaigns_table_header_2a']	= "Nº de";					// This is the top line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_2b']	= "Clientes";					// This is the bottom line of the english phrase "Campaign Customers"
$lang['cp_campaigns_table_header_3a']	= "Nº de";					// This is the top line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_3b']	= "Transações";	// This is the bottom line of the english phrase "Campaign Transactions"
$lang['cp_campaigns_table_header_5a']	= "";							// This is the top line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_5b']	= "Estatuto";					// This is the bottom line of the english phrase "Campaign Status"
$lang['cp_campaigns_table_header_6a']	= "Parâmetros";			// This is the top line of the english phrase "Campaign Preferences"
$lang['cp_campaigns_table_header_6b']	= "da Campanha";				// This is the bottom line of the english phrase "Campaign Preferences"

// Create / Edit User
$lang['user_campaigns_header']			= "Selecione quais campanhas este Usuário é permitido o acesso:";
$lang['user_campaigns_admins']			= "Administradores tem  acesso automático a todas campanhas";
$lang['user_edit_header']				= "Usuário:";  // The Name of the user follows.
$lang['user_edit_password_label']		= "Mude a Senha";
$lang['user_edit_password2_label']		= "Re-introduza a Senha";
$lang['user_edit_password_note']		= "Para não mudar a Senha atual, deixe estes campos vazios.";
$lang['user_edit_record_change_card']	= /* The Card # */ "foi substituído por:"; /* a new Card # */
$lang['user_edit_record_change_name']	= "Alteração do nome";
$lang['user_edit_record_del_card']		= /* The Card # */ "foi removido";
$lang['user_edit_record_new_card']		= "Um novo cartão foi atribuído:";
$lang['user_edit_record_change_phone']	= "O Nº de telefone foi alterado para";
$lang['user_edit_record_replace_phone']	= "O Nº de telefone foi alterado de";
$lang['user_edit_record_to_none']		= "nenhum"; // As is "now it's nothing. Ex: "His phone number changed from 555-5555 to none."
$lang['user_edit_record_change_email']	= "O endereço de email foi alterado para";
$lang['user_edit_record_replace_email']	= "O endereço de email foi alterado de";
$lang['user_edit_record_change_addtl']	= "A info. adicional foi alterado para";
$lang['user_edit_record_del_addtl']		= "A info. adicional foi removida. Antes era";
$lang['user_edit_record_replace_addtl']	= "A info. adicional foi alterada de";
$lang['user_info_sub_header']			= "Informação do Usuário";
$lang['user_new_header']				= "Usuário novo";
$lang['user_new_id_empty']				= "Um código de usuário é necessário para criar um novo Usuário.";
$lang['user_new_id_not_valid']			= "Um código de usuário só pode ter letras, numeros, e _ (sublinhado)";
$lang['user_new_id_exists']				= "Este código de usuário já está em uso.<br>Introduza um nome diferente.";
$lang['user_new_no_role']				= "Tem que selecionar um papel para este Usuário:";
$lang['user_new_password_label']		= "Insira uma Senha para este usuário";
$lang['user_new_record_button']			= "Criar usuário";
$lang['user_new_user_id_label']			= "Insira um código de usuário";
$lang['user_restrict_20_char']			= "Não mais de que 20 caracteres";
$lang['user_role_header']				= "Papel do Usuário";
$lang['user_role_directions']			= "Selecione um papel para este usuário";

// Users: Common actions:
$lang['user_add_button']				= "Adicionar um usuário novo";
$lang['user_delete_popup']				= "<strong>Este usuário vai ser removido da lista de usuários autorizados, e arquivado.</strong><br>
											Este código de usuário não poderá ser dado novamente para um novo Usuário.<br>
											<br>
											Para recuperar um usuário arquivado, contacte-nos. Há uma taxa para este serviço.<br>
											<br>
											<strong>Tem certeza que quer eliminar este usuário?</strong>";
$lang['user_delete_popup_pc']			= "Este usuário vai ser removido da lista de usuários autorizados, e arquivado.\n\n
											Este código de usuário não poderá ser dado novamente para um novo usuário.\n\n
											Para recuperar um usuário arquivado, contacte-nos. Há uma taxa para este serviço.\n\n
											Tem certeza que quer eliminar este usuário?";
$lang['user_header']					= "Gestão dos usuários desta conta e suas permissões";
$lang['user_list_none']					= "Nenhum usuário adicional definido.";
$lang['user_role_A']					= "Administrador";
$lang['user_role_A_desc']				= "Tem acesso a tudo.";
$lang['user_role_C']					= "Contabilista";
$lang['user_role_C_desc']				= "Pode gerar relatórios, ver informação sobre faturamento e campanhas,
											mas não pode ver informação sobre usuários ou clientes.";
$lang['user_role_F']					= "Empreiteiro de Fulfilment";
$lang['user_role_F_desc']				= "Dentro de campanhas autorizadas, pode só resgatar Prêmios para clientes.";
$lang['user_role_K']					= "Caixeiro";
$lang['user_role_K_desc']				= "Dentro de campanhas autorizadas, pode criar clientes e alterar informação deles (mas não pode mudar
											o Nº de Cartão, se já atribuído), e só pode registar ou resgatar visitas de clientes (mas não removê-las).";
$lang['user_role_M']					= "Gerente";
$lang['user_role_M_desc']				= "Tem acesso a tudo dentro de campanhas autorizadas, acesso a relatórios mas não a faturamento,
											e pode adicionar mas não eliminar usuários da conta.";
$lang['user_role_N']					= "Gerente de Campanha";
$lang['user_role_N_desc']				= "Tem acesso a tudo dentro de campanhas autorizadas, acesso a relatórios mas não a faturamento,
											não pode gerir usuários da conta ou adicionar or eliminar outras campanhas.";
$lang['user_role_O']					= "Observador";
$lang['user_role_O_desc']				= "Poder só ver informação sobre usuários e clientes e certas definições de campanhas (Prêmios e promoções).";
$lang['user_role_P']					= "Empregado Temporário";
$lang['user_role_P_desc']				= "Dentro de campanhas autorizadas, pode só adicionar clientes novos e registar visitas de clientes.";
$lang['user_role_S']					= "Gerente Adjunto";
$lang['user_role_S_desc']				= "Pode gerir Prêmios e promoções dentro de campanhas autorizadas, e tambem gerir todos os aspectos dos clientes.";

// Create New Campaign
$lang['campaign_new_create_button']		= "Criar Campanha";
$lang['campaign_new_created_header']	= "Campanha nova";
$lang['campaign_new_created_msg']		= "<b>Parabéns.</b><br>
											<br>
											Criou uma campanha nova.<br>
											<br>
											Agora, personalize a configuração desta campanha
											baseado nos seus objetivos e metas de performance:";
$lang['campaign_new_created_prefs']		= "Leve-me lá";
$lang['campaign_new_created_back_cp']	= "Voltar ao painel de controle da conta";
$lang['campaign_new_empty']				= "Introduza um nome para a campanha nova:";
$lang['campaign_new_exists']			= "O nome da campanha que introduziu já existe.<br>Insira um nome diferente.";
$lang['campaign_new_header']			= "Criar uma campanha nova";
$lang['campaign_new_name']				= "Agora, escolha um nome para a campanha:";
$lang['campaign_new_name_restrict']		= "(Máximo de 30 caracteres, incluindo espaços)";
$lang['campaign_new_step_dir']			= "Crie a sua primeira campanha:";
$lang['campaign_new_sub_header']		= "Primeiro, selecione um tipo de campanha:";
$lang['campaign_new_type_empty']		= "Tem que escolher um tipo de campanha:";
$lang['campaign_new_buyx_desc']			= "Tal como os cartões perfurados ou carimbados. Este tipo de campanha permite recompensar
											os seus clientes baseando-se no número de vezes que eles compram produtos individuais, linhas de produtos
											ou serviços.<br>
											<br>
											Apropriado para empresas que oferecem um número limitado de produtos
											ou tipos de produtos. Encontra-se frequentemente sob a forma de cartões de papel com um certo número de
											quadrados que são perfurados ou preenchidos por carimbos cada vez que o cliente faz uma compra, antes
											que o cliente receba um produto ou serviço gratuito. <br> <br> Este tipo de campanha permite fazer o mesmo, mas
											com a vantagem de não ter que imprimir cartões e resolver questões relacionadas com cartões perdidos ou
											outras. Outra grande vantagem é que com o volume de clientes participantes no programa pode-se usar a informação para
											avaliações de marketing e relatórios publicitários.</br>
											<br>
											<b>Também pode-se decidir quais os serviços, produtos, ou categorias de produtos e o volume de cada, necessário
											até que o cliente possa receber o mesmo gratuito.</b> Por exemplo:<br>
											<li>10 cortes de cabelo até que o próximo seja gratuito.</li>
											<li>Recompensar uma compra de 15 kgs de farinha com um 1 kg gratuito. </li>
											<li>12 pastéis de queijo até que o próximo seja gratuito.</li>";

$lang['campaign_new_earn_event_desc']	= "Um hibrido entre um Cartão-Oferta (ou Cheque-Oferta) e uma campanha baseada no número de
											interações que os clientes têm com o seu negócio. Pode recompensar
											alguém aumentando o saldo da sua conta por cada &#8220;ocorrência&#8221; (visita a uma loja,
											recomendação a outras
											pessoas, etc.) Mais tarde podera resgatar o seu saldo por serviços ou produtos no seu estabelecimento.<br>
											<br>
											<b>Este tipo de programa de fidelidade permite:</b><br>
											<li>Atribuir quanto, em Reais, são ganhos por cada visita ou ação</li>
											<li>Resgatar qualquer quantidade do saldo total acumulado, tal como um cheque-oferta.</li>
											<br>
											<b>Alguns exemplos:</b>
											<li>Campanhas de recomendações: Recompensar clientes, porteiros de hotéis, recepcionistas
											de grandes companhias, por enviarem clientes para o seu estabelecimento.</li>
											<li>Pagar um colaborador ou empreiteiro por trabalhos repetitivos</li>
											<li>Recompensar clientes VIP com &#8220;dinheiro próprio&#8221;. Somente válido em compras
											dentro do estabelecimento.
											<li>Dar incentivos às crianças por ajudarem nos trabalhos domésticos.</li>";

$lang['campaign_new_event-based_desc']	= "Permite determinar recompensas baseadas no número de interações que os clientes
											têm com o seu negócio, em vez da quantidade de dinheiro gasto.<br>
											<br>
											Este tipo é frequentemente utilizado para campanhas de recomendações: um negócio
											distribui um certo número de cartões marcados com o mesmo número ou código a um dos
											seus clientes, um porteiro de hotel, ou um recepcionista de uma grande companhia. Quando alguém
											chega ao seu estabelecimento e entrega um desses cartões, o seu propagandista recebe uma 'ocorrência'
											adicionada ao seu saldo. Após, por exemplo, 5 recomendações, o seu propagandista recebe
											um serviço gratuito ou um presente, o seu negócio recebe mais clientes, e todos ganham.<br>
											<br>
											Este é apenas um cenário. Várias pessoas têm encontrado formas muito criativas
											de usar este programa.<br>
											<br>
											Um campanha baseada em ocorrências permite:<br>
											<br>
											<b>Atribuir vários níveis de recompensas. Por exemplo:</b><br>
											<li>acumule 5 ocorrências e receba 10% de desconto.</li>
											<li>acumule 10 ocorrências e receba 50% de desconto.</li>
											<li>acumule 20 ocorrências e receba uma massagem gratuita.</li>
											<br>
											<b>Alguns exemplos:</b><br>
											<li>Campanha de recomendações como exemplificada acima.</li>
											<li>Ginásios acompanharem o progresso dos seus clientes.</li>
											<li>Quantos arranjos até um produto ser substituído.</li>
											<li>Utilização do Clube VIP.</li>
											<li>etc... </li>
											";

$lang['campaign_new_gift_card_desc']	= "Uma campanha de Cartão-Oferta ou Cheques-Oferta permite adicionar dinheiro à conta de
											um cliente, e deduzi-lo quando é usado como pagamento.<br>
											<br>
											Simples e fácil. É geralmente utilizado em conjunto com Cartões-Oferta,
											onde um cartão é carregado com um certo valor em dinheiro para ser oferecido como presente.<br>
											<br>
											Pode ser usado para controlar diversas cotas, tais como contas de bar,
											compras a prestações, mesadas das crianças, etc. O único limite é a
											sua imaginação.";

$lang['campaign_new_points_desc']		= "Os seus clientes acumulam pontos com base nas suas compras, pagamentos ou promoções que forem
											definidos. Os pontos podem ser resgatados com base em níveis pré-determinados.<br>
											<br>
											Um programa de pontos, tal como os programas de milhas das c<sup>ias</sup> aéreas, permite:<br>
											<br>
											<b>Definir a quantidade de pontos ganhos por cada transação ou Real gasto. Por exemplo:</b><br>
											<li>5 pontos por transação ou Real</li>
											<li>0,25 pontos por transação ou Real</li>
											<li>100 pontos por transação ou Real</li>
											<br>
											<b>Definir vários níveis de recompensas. Por exemplo:</b><br>
											<li>1000 pontos: 50% de desconto.</li>
											<li>5000 pontos: Produto gratuito.</li>
											<li>100000 pontos: Viagem ao exterior.</li>
											<br>
											<b>Atribuir promoções. Alguns exemplos:</b><br>
											<li>Pontos ao dobro nas terças.</li>
											<li>500 pontos extras por ter feito uma reserva antecipada.</li>
											<li>Bônus de 25% pontos com compra de Cartão-Oferta.</li>
											<br>
											Opcionalmente, pode-se definir a relação Pagamento/Recompensa que permite
											resgatar pontos utilizando o valor em Reais.";

$lang['campaign_new_name_desc']			= "Ao criar a sua primeira campanha, dê um nome que comece com a palavra &#8220;Teste&#8221;,
											enquanto experimenta as diferentes alternativas. Poderá criar tantas campanhas quantas quiser e parar
											ou apagar as que não quiser manter.<br>
											<br>
											Em geral, é útil usar o nome da sua empresa ou departamento, se for curto, no nome da campanha.";

// Campaigns: Common actions:
$lang['campaign_add_new']				= "Adicionar uma campanha nova";
$lang['campaign_delete_popup']			= "<strong>Esta campanha vai ser removida da lista de campanhas e arquivada.</strong><br>
											O nome desta campanha não poderá ser utilizado novamente para uma campanha nova.<br>
											<br>
											Para recuperar uma campanha arquivada, contate-nos. Há uma taxa para este serviço.<br>
											<br>
											<strong>Tem certeza que quer eliminar esta campanha?</strong>";
$lang['campaign_delete_popup_pc']		= "Esta campanha vai ser removida da lista de campanhas e arquivada.\n\n
											O nome desta campanha não poderá ser utilizado novamente para uma campanha nova.\n\n
											Para recuperar uma campanha arquivada, contate-nos. Há uma taxa para este serviço.\n\n
											Tem certeza que quer eliminar esta campanha?";
$lang['campaign_hide_on_hold']			= "Esconder campanhas suspensas";
$lang['campaign_none_yet']				= "Clique no botão 'Adicionar uma campanha nova' em baixo<br>
											para criar uma campanha (de fidelidade ou cartão-oferta).";
$lang['campaign_type_buyx']				= "Programa Compre 'X' e Ganhe Um Gratuito";
$lang['campaign_type_earn_per_event']	= "Programa Ganhe Dinheiro por Ocorrência";
$lang['campaign_type_event-based']		= "Programa baseado em Ocorrências";
$lang['campaign_type_gift_cards']		= "Programa Cartão-Oferta";
$lang['campaign_type_points']			= "Programa de Pontos";
$lang['campaign_view_on_hold']			= "Ver campanhas suspensas";

// Edit Campaign: Common Phrases:
$lang['edit_reward_add']				= "Adicionar um nível de Prêmio";
$lang['edit_reward_add_another']		= "Adicionar um outro<br>nível de Prêmio";
$lang['edit_reward_desc_empty']			= "Tem que fornecer uma descrição do nível de Prêmio.";
$lang['edit_reward_level_header']		= "Alterar nível de prêmio";
$lang['edit_reward_header']				= "Níveis de prêmios";
$lang['edit_reward_none']				= "Nenhum prêmio definido ainda.";
$lang['edit_reward_table_header']		= "Descrição do prêmio";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "Esta proporção pode ser mudada quando quiser, mas os pontos já acumulados pelos clientes não mudarão.";
$lang['edit_points_desc']				= "Este é um número arbitrário e pode ser qualquer coisa que faça sentido para a campanha. Por exemplo:";
$lang['edit_points_desc_header']		= $lang['Points']." ganhos por cada transação ou ".$lang['currency'];
$lang['edit_points_empty']				= "Tem que inserir o número de ".$lang['points']." necessários para receber este prêmio.";
$lang['edit_points_examples_header']	= "Alguns exemplos de Prêmios baseados em pontos:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "20% de desconto";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "Corte de cabelo gratuito";
$lang['edit_points_ex_3_amount']		= "750";
$lang['edit_points_ex_3_desc']			= "Oferta de uma estadia extra";
$lang['edit_points_ex_4_amount']		= "1000";
$lang['edit_points_ex_4_desc']			= "500 ml de chopp";
$lang['edit_points_ex_5_amount']		= "20";
$lang['edit_points_ex_5_desc']			= "1 L de sorvete";
$lang['edit_points_ex_6_amount']		= "15000";
$lang['edit_points_ex_6_desc']			= "Nível VIP do clube";
$lang['edit_points_ex_7_amount']		= "160";
$lang['edit_points_ex_7_desc']			= "Assento preferencial";
$lang['edit_points_ex_8_amount']		= "100000";
$lang['edit_points_ex_8_desc']			= "Viagem ao exterior";
$lang['edit_points_not_valid']			= "O número de ".$lang['points']."tem que ser uma quantidade numerica.";
$lang['edit_points_profit_ratio_error']	= "Tem que inserir um valor superior a zero<br>para ativar. Deixe vazio para desativar.";
$lang['edit_points_step_dir']			= "Define os parâmetros do seu programa de ".$lang['Points'].".";
$lang['edit_points_table_header']		= "Descrição do prêmio ganho quando<br>o nvel de ".$lang['points']." introduzido é atigindo.";
$lang['edit_points_too_small']			= "Insira um valor igual ou superior a 1 ".$lang['point'].".";

$lang['edit_promo_table_header']		= "Descrição da promoção";
$lang['edit_promo_none']				= "Nenhuma promoção definida ainda.";
$lang['edit_promo_add']					= "Adicionar uma promoção";
$lang['edit_promo_add_another']			= "Adicionar uma outra promoção";
$lang['edit_promo_desc']				= "Promoções alteram a maneira como ".$lang['points']." são ganhos.
											Pode haver promoções que adicionam ou subtraem uma quantidade específica de ".$lang['points'].",
											ou multiplicam o valor inserido por uma determinada quantia, quando uma
											transação é registrada. Por exemplo:";
$lang['edit_promo_edit_header']			= "Alteraçã de promoção";
$lang['edit_promo_edit_error_header']	= "Precisa inserir um número com qual multiplicar os ".$lang['points']." ganhos.<br>
											Por exemplo:";
$lang['edit_promo_edit_error_add']		= "Precisa inserir um número de ".$lang['points']." para adicionar ou deduzir.<br>
											Por exemplo:<br>
											<b>500</b> irá adicionar 500 ".$lang['points']." à quantidade de pontos ganhos.<br>
											<b>-100</b> irá deduzir 100 ".$lang['points']."  (até 0, mas não abaixo.)";
$lang['edit_promo_edit_error_multi']	= "O montante por qual multiplicar os ".$lang['points']." tem que ser um número.";
$lang['edit_promo_edit_error_not_valid']= "O montante de ".$lang['points']." a adicionar ou deduzir deve ser um número.";
$lang['edit_promo_edit_ex_1']			= "<b>2</b> irá multiplicar os pontos por 2.";
$lang['edit_promo_edit_ex_2']			= "<b>.5</b> irá reduzi-los a metade.";
$lang['edit_promo_edit_ex_3']			= "<b>1.1</b> irá acrescentar 10% de pontos à quantia inicial.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "500 ".$lang['points']." por ter feito uma recomendação";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= $lang['points']." de bonus por tornar-se membro";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "deduzir 50 ".$lang['points']." por estar atrasado";
$lang['edit_promo_ex_4_amount']			= "x 2";
$lang['edit_promo_ex_4_desc']			= "Nível VIP: Ganha ".$lang['points']." duplos";
$lang['edit_promo_ex_5_amount']			= "x 1,5";
$lang['edit_promo_ex_5_desc']			= "para 50% ".$lang['points']." extras nas terças";
$lang['edit_promo_ex_6_amount']			= "x 1,25";
$lang['edit_promo_ex_6_desc']			= "Membro Prata: 25% ".$lang['points']." extras";
$lang['edit_promo_ex_7_amount']			= "x 0,75";
$lang['edit_promo_ex_7_desc']			= "para 25% ".$lang['points']." a menos";
$lang['edit_promo_name_empty']			= "Tem que fornecer um nome ou descrição da promoção";
$lang['edit_promo_note_1']				= /*(Addtion Operation)*/ "promoções podem ser utilizadas por si próprias:<br>É só selecionar a promoção e clique no botão"; /* ("record button") */
$lang['edit_promo_note_2']				= /*(Multiplication Operation)*/ "promoções não podem ser utilizadas por si próprias: Uma compra é necessária.";
$lang['edit_promo_table_header_1']		= "Multiplicar<br>ou adicionar";
$lang['edit_promo_table_header_2']		= "Por quanto";
$lang['edit_promo_table_header_3']		= "ID da promoção";

$lang['edit_str_header']				= "Opcional: Utilizar quantias em ".$lang['currency_plural']." para resgatar ".$lang['points'];
$lang['edit_str_desc']					= "A proporção Gasto-Para-Ter-Ganho é uma das duas proporções que
											deve ser usada para calcular o valor em ".$lang['points']." dos seus Prêmios. Se a inserir aqui,
											ativará a capacidade de resgatar ".$lang['points']." utilizando um valor em ".$lang['currency_plural'].":";
$lang['edit_str_ratio_header']			= "Possibilidade de inserir<br>montantes em ".$lang['currency_plural']."<br>para resgatar ".$lang['points'].":";
$lang['edit_str_ratio_on']				= "Ativada";	// As in "activated", or "enabled". Ex: "The light is turned on";
$lang['edit_str_ratio_off']				= "Desligada";	// As in "de-activated", or "disabled". Ex: "The light is turned off";
$lang['edit_str_ratio_sub_header']		= "A sua proporção Gasto-Para-Ter-Ganho:";
$lang['edit_str_ratio_not_set']			= "Não definida";
$lang['edit_str_example_header']		= "Por exemplo:";
$lang['edit_str_example_1']				= "Uma cliente quer comprar algo que custa R$ 100,00 e tem 1000 ".$lang['points']." acumulados.
											Ela pergunta se pode pagar parte da compra com os seus ".$lang['points'].".";
$lang['edit_str_example_1_desc']		= "Quando é inserida a proporção Gasto-Para-Ter-Ganho acima, o programa <b>calcula automaticamente
													quanto os ".$lang['points']." valem em Reais.</b> Não há necessidade
													de se lembrar de tabelas complicadas, ou andar sempre à procura de uma calculadora.";
$lang['edit_str_example_math_show']		= "Clique aqui para ver os cálculos.";
$lang['edit_str_example_math_hide']		= "Que horror! Esconda esses cálculos!";
$lang['edit_str_example_math']			= "Imagine que tenha escolhido uma proporção ".$lang['ppd']." de 5 e
											uma proporção Gasto-Para-Ter-Ganho de 20. Então:
											1000 ".$lang['points']." <span style=\"font-size: 125%\">&#247;</span> 5 ".$lang['ppd']." <span style=\"font-size: 125%\">&#247;</span>
											proporção Gasto-Para-Ter-Ganho de 20 = ".$lang['currency_symbol']."10<br>
											<br>
											Posto de outra maneira, ".$lang['currency_symbol']."10 x 5 ".$lang['ppd']." = 50 ".$lang['points'].", e com
											uma proporção Gasto-Para-Ter-Ganho de 20, precisa de 20 x 50 ".$lang['points']." (1000 ".$lang['points'].")
											para poder resgatar ".$lang['currency_symbol']."10.";
$lang['edit_str_example_math_height']	= "90";	// This is the height, in pixels, of the section that the "math" is in.
												// If the translation of the section above requires more room, increase that number accordingly.
$lang['edit_str_note_1']				= "Para desligar a possibilidade de inserir valores em ".$lang['currency_plural']." para resgatar ".$lang['points'].",
											deixe a proporção Gasto-Para-Ter-Ganho vazia e clique o botão"; /*(Set button)*/
$lang['edit_str_note_2']				= "Pode alterar a proporção Gasto-Para-Ter-Ganho como e quando quiser,
											mas os níveis dos Prêmios não serão mudados automaticamente.";

// Edit Campaign: Event-Based
$lang['edit_visits_empty']				= "É necessário inserir o número de ocorrências necessárias para receber o prêmio.";
$lang['edit_visits_not_valid']			= "O número de ocorrências tem que ser um número.";
$lang['edit_visits_step_dir']			= "Defina alguns níveis de Prêmios para a sua campanha baseada em ocorrências:";
$lang['edit_visits_table_header']		= "Número de<br>ocorrências";
$lang['edit_visits_table_header_2']		= "&nbsp;Descrição do prêmio ganho quando<br>&nbsp;o número de ocorrências é atingido.";

// Edit Campaign: Dollar per Visit
$lang['edit_dpv_amount_too_small']		= "Precisa inserir um valor de pelo menos 1".$lang['currency_100th_symbol']." (0.01)";
$lang['edit_dpv_heading']				= "Definição de montante ganho";
$lang['edit_dpv_label']					= $lang['currency_plural']." ganhos por ocorrência:";
$lang['edit_dpv_label_ending']			= "por ocorrência.";
$lang['edit_dpv_note_1']				= "Este valor pode ser alterado quando quiser, mas os ".$lang['currency_plural']." acumulados pelos seus clientes anteriormente não vão mudar.";
$lang['edit_dpv_step_dir']				= "Define o montante ganho pelos seus clientes nesta campanha:";

// Edit Campaign: Buy X Get One Free
$lang['edit_buyx_amount_too_small']		= "O número de serviços ou produtos tem que ser pelos menos 1<br>Sugerimos um valor de 10 ou mais.";
$lang['edit_buyx_header']				= "Número de serviços ou produtos até que o próximo seja gratuito";
$lang['edit_buyx_item_empty']			= "Tem que inserir um nome ou descrição deste produto ou serviço.";
$lang['edit_buyx_item_header']			= /* Add or Edit */ "um produto ou serviço";
$lang['edit_buyx_item_table_header_1']	= "Serviço, produto, ou categoria";
$lang['edit_buyx_item_table_header_2']	= "Quantos até que o<br>próximo seja gratuito";
$lang['edit_buyx_none']					= "Nenhum serviço ou produto definido.";
$lang['edit_buyx_step_dir']				= "Define níveis de Prêmios para esta campanha:";
$lang['edit_buyx_table_header_1']		= "Serviço, produto, ou categoria";
$lang['edit_buyx_table_header_2']		= "Quantos até<br>que o próximo<br>seja gratuito";
$lang['edit_buyx_add_another']			= "Adicionar outro serviço ou produto";
$lang['edit_buyx_add']					= "Adicionar o primeiro serviço ou produto";
$lang['edit_buyx_default_header']		= "Número predefinido de serviços ou produtos até que o próximo seja gratuito";
$lang['edit_buyx_default_label']		= "Número predefinido para novos serviços ou produtos:";

// Edit Campaign: Gift Card
$lang['edit_giftcard_step_dir']			= "Define os parâmetros desta campanha:";
$lang['edit_giftcard_no_settings']		= "Programas de cartões-oferta não têm parâmetros ou níveis de Prêmios para definir.<br>(Bem, isto foi simples!)";

// Common Customer Content
if (!empty($_REQUEST['account_id']) && $_REQUEST['account_id'] == 'cooperforte') {
	$lang['customer_account_activated']		= "Extrato Ativado";
} else {
	$lang['customer_account_activated']		= "Conta ativada";
}
$lang['customer_add_tab']				= "Adicionar cliente";
$lang['customer_lookup_tab']			= "Pesquisar cliente";
$lang['customer_id_not_exist']			= "Essa conta de cliente não existe.";
$lang['customer_id_missing']			= "Nenhuma conta de cliente foi inserida.";
$lang['customer_tip_1']					= "Sabe que pode usar um leitor de código de barras ou banda magnética
											para facilitar a introdução do número de conta de clientes?";
$lang['customer_tip_2']					= "Crie um marcardor para esta página usando o gerador de marcadores na parte inferior do"; /* Account Control Panel screen */
$lang['customer_last_activity']			= "Última Atividade";  // ie: the most recent transaction for that customer.

// Manage Customer Accounts
$lang['manage_cards_delete_error']		= "Erro: Não é possível eliminar esta conta.";
$lang['manage_cards_find_by_date']		= "Data da última Atividade";
$lang['manage_cards_find_by_header']	= "ou mostrar a lista de TODOS os clientes:";
$lang['manage_cards_find_directions']	= "Preencha quaisquer destes campos de formulário:";
$lang['manage_cards_find_header']		= "Pesquisa de cliente:";
$lang['manage_cards_find_none']			= "Nenhum cliente corresponde à sua pesquisa.";
$lang['manage_cards_find_note']			= "Isto pode demorar alguns minutos se tiver mais do que alguns milhares de clientes ou uma ligação à Internet lenta.";
$lang['manage_cards_header']			= "Gestão de clientes";
$lang['manage_cards_list_header']		= "Lista das contas de clientes";
$lang['manage_cards_not_exist']			= "Este cliente não existe.";
$lang['manage_cards_cust_deleted']		= "Este cliente foi removido.";
$lang['manage_cards_popup_warning']		= "A conta deste cliente vai ser removida incluindo toda a informação e<br>
											toda a atividade em todas as campanhas associadas com este cliente.<br><br>
											Note que <strong>relatórios deixarão de refletir qualquer atividade deste cliente</strong>.<br><br>
											Esta ação NÃO TEM VOLTA!<br><br>
											Tem certeza que quer eliminar a conta deste cliente?";
$lang['manage_cards_popup_warning_pc']	= "
											A conta deste cliente vai ser removida incluindo toda a informação e\n
											toda a atividade em todas as campanhas associadas com este cliente.\n\n
											Note que relatórios deixarão de refletir qualquer atividade deste cliente.\n\n
											Esta ação NÃO TEM VOLTA!\n\n
											Tem certeza que quer eliminar a conta deste cliente?";
$lang['manage_import_campaign_name']	= "ID da campanha";
$lang['manage_import_trans_date']		= "Data da transação";

// Manage Customer Accounts - Import Customers and Transactions
$lang['manage_import_header']			= "Importação por lote de clientes e transações";
$lang['manage_import_customers']		= "Importar clientes por lote";
$lang['manage_import_transactions']		= "Importar transações de clientes por lote";
$lang['manage_import_no_none']			= "Todos as colunas não podem ser 'nenhuma'. Tem que selecçionar pelos menos uma coluna de dados para importar.";
$lang['manage_import_duplicate_card']	= "CONTA DUPLICADA:";
$lang['manage_import_duplicate_found']	= "Conta dupla";
$lang['manage_import_duplicates_found']	= "Contas duplas";
$lang['manage_import_successful']		= "Importação de dados concluída com sucesso";
$lang['manage_import_new_customer']		= "novo cliente acrescentado";
$lang['manage_import_new_customers']	= "novos clientes acrescentados";
$lang['manage_import_updated_customer']	= "cliente atualizado";
$lang['manage_import_updated_customers']= "clientes atualizados";
$lang['manage_import_no_cust_data']		= "Nenhum cliente foi dado para a importação de dados.
											Copie e cole os dados de clientes no retângulo do formulário abaixo:";
$lang['manage_import_campgn_not_valid']	= "Uma das campanhas selecionadas não é valida.";
$lang['manage_import_select_1_campaign']= "Tem que selecionar pelo menos uma campanha para a qual acrescentar clientes.";
$lang['manage_import_select_delimiter']	= "Selecione um dos separadores de colunas acima.";
$lang['manage_import_new_trasns']		= /* a number */ "novas transações acrescentadas";
$lang['manage_import_new_account']		= "conta de cliente nova";
$lang['manage_import_new_accounts']		= "contas de clientes novas";
$lang['manage_import_no_cust']			= "Nenhum cliente acrescentado ou atualizado";
$lang['manage_import_no_trans']			= "Nenhuma transação acrescentada";
$lang['manage_import_no_trans_data']	= "Nenhuma transação foi dada para a importação de dados.
											Copie e cole os dados de transações no retângulo do formulário abaixo:";
$lang['manage_import_fields_missing']	= "Faltam alguns dos campos necessários do formulário.";
$lang['manage_import_cust_instr_head']	= "<b>Importar uma lista de clientes é bastante simples:</b>";
$lang['manage_import_cust_instr_1']		= "Selecione a(s) campanha(s) as quais quer acrescentar os clientes.";
$lang['manage_import_cust_instr_2']		= "Selecione a ordem das colunas de dados, e como cada é separada.";
$lang['manage_import_cust_instr_3']		= "Copie e cole a sua lista de dados no retângulo grande do formulário,
																					e indique se quer que contas de clientes que parecem ser duplicadas
																					(com o mesmo código de conta ou Nº de cartão) sejam atualizadas ou ignoradas.";
$lang['manage_import_cust_instr_4']		= "Datas têm que estar em qualquer um destes formatos <i>(Anos têm que ter 4 dígitos)</i>:<br>
																	<pre style=\"margin: 0px; padding: 0px;\">AAAA/MM/DD, AAAA-MM-DD, AAAA.MM.DD, MM/DD/AAAA, MM-DD-AAAA, MM.DD.AAAA</pre>";
$lang['manage_import_campaigns_list']	= "Lista de campanhas";
$lang['manage_import_add_campaigns']	= "Acrescentar<br>clientes as<br>seguintes<br>campanhas";
$lang['manage_import_field_order']		= "Ordem das colunas";
$lang['manage_import_field_delimiter']	= "Separador de colunas";
$lang['manage_import_excel_default']	= "(o padrão quando se copie-cole a partir do MS Excel)";
$lang['manage_import_field_note']		= "<i>Cada coluna é opcional.</i><br>
												<br>
												Nota: Se planeja importar transações<br>
												para estes clientes,  é necessário que<br>
												cada cliente tenha um código ou Nº de<br>
												cartão único (para poder establecer a<br>
												correspondência entre cliente e transação).";
$lang['manage_import_customer_list']	= "Lista de clientes";
$lang['manage_import_duplicates']		= "Contas Duplicadas?";  // A question asking what to do with duplicate records: Overwrite, or ignore.
$lang['manage_import_overwrite']		= "Substituir"; // To write over, or replace. In this case, an answer to what to do with duplicate records.
$lang['manage_import_paste_list']		= "Copie e cole a lista de clientes no retângulo do formulário abaixo";
$lang['manage_import_trans_instrctns']	= "
											<b>Para importar uma lista de transações:</b><br>
											<ol>
												<li style=\"padding-bottom: 5px;\">Selecione a ordem das colunas de dados, e como cada é separada.</li>
												<li style=\"padding-bottom: 5px;\">Certifique-se de que transações 'resgatadas' têm um \"Y\"
																					na coluna \"Resgatar?\" e têm <b><i>um valor POSITIVO</i></b>.</li>
												<li style=\"padding-bottom: 5px;\">Se está a importar transações para uma campanha <b>Compre X e Ganhe Um Gratuito</b>,
																					certifique-se de que a coluna \"Item Comprado\" está selecionada e é parte dos
																					dados a serem importados.</li>
												<li style=\"padding-bottom: 5px;\">Se uma data não é incluída nos dados, a transação
																					será marcada com a data de hoje. Datas têm que estar em qualquer um
																					destes formatos <i>(Anos têm que ter 4 dígitos)</i>:<br>
																					<pre style=\"margin: 0px; padding: 0px;\">AAAA/MM/DD, AAAA-MM-DD, AAAA.MM.DD, MM/DD/AAAA, MM-DD-AAAA, MM.DD.AAAA</pre></li>
												<li style=\"padding-bottom: 0px;\">Copie e cole a sua lista de dados no retângulo grande do formulário.</li>
											</ol>";
$lang['manage_import_campaign_name']	= "ID da Campanha";
$lang['manage_import_trans_date']		= "Data da transação";
$lang['manage_import_trans_amount']		= "Quantia da transação";
$lang['manage_import_redeem_event']		= "Resgatar? (Y/N)";
$lang['manage_import_req_for_buyx']		= "Obrigatório SÓ para campanhas 'Compre X...'";
$lang['manage_import_item_purchased']	= "Item Comprado";
$lang['manage_import_description_auth']	= "Descrição";
$lang['manage_import_trans_list']		= "Lista de transações";
$lang['manage_import_paste_trans']		= "Copie e cole a lista de transações no retângulo abaixo";

// Create New Customer Account
$lang['customer_new_card_desc']			= "Um Nº de cartão ou código de conta único é necessário para clientes poderem ver os seus saldos no seu Website.";
$lang['customer_new_create_button']		= "Criar uma conta nova";
$lang['customer_new_demo_phone']		= "XX 5555-5555";
$lang['customer_new_demo_email']		= "ninguem@email.com.br";
$lang['customer_new_demo_addtl_info']	= "Qualquer informação extra pode ser inserida aqui.";
$lang['customer_new_id_exists']			= "O código de conta que inseriu já existe.";
$lang['customer_new_id_match']			= "A seguinte conta corresponde ao"; /* Card # or Account ID */
$lang['customer_new_id_not_valid']		= "Este não é um código de conta válido.";
$lang['customer_new_exists']			= "Os dados fornecidos correspondem a uma conta que já existe.";
$lang['customer_new_header']			= "Criar uma conta de cliente";
$lang['customer_new_multiple_matches']	= "Estas contas correspondem a dados fornecidos:";
$lang['customer_new_other_campaigns']	= "Outras campanhas<br>as quais acrescentar<br>este cliente:";
$lang['customer_new_random_id']			= "Gerar número ao acaso";
$lang['customer_new_steps_header']		= "Criar uma conta de cliente de demonstração:";
$lang['customer_new_steps_dir']			= "Uma conta de cliente pode ser identificada pelo um código único, como um número de telefone,
											um endereço de email, um código de barra num cartão, or qualquer outro identificador que define um
											cliente como sendo único. Sugerimos um código de demonstração, como por exemplo '11111'. Mais tarde
											há-de ter a possibilidade de eliminar esta conta.";

// Lookup Customer Account
$lang['customer_activity_header']		= "Atividade histórica da conta";
$lang['customer_activity_none']			= "Esta conta não tem atividade.";
$lang['customer_activity_print_short']	= "Última transação"; // As in "showing only the last recorded transaction."
$lang['customer_lookup_balance_label']	= "Saldo atual:";
$lang['customer_lookup_balances_none']	= "Nenhum Saldo";
$lang['customer_lookup_button']			= "Pesquisar Cliente";
$lang['customer_lookup_header']			= "Pesquisa de conta de cliente";
$lang['customer_lookup_instructions']	= "Inserir qualquer parte de informação sobre um cliente:";
$lang['customer_lookup_multiple_match']	= "As contas seguintes resultaram da sua pesquisa";
$lang['customer_lookup_multiple_view']	= "Visualizar a conta";
$lang['customer_lookup_no_match_add']	= "Nenhuma conta resultou da sua pesquisa. Pode criar uma conta nova abaixo";
$lang['customer_lookup_no_match']		= "Nenhum cliente nesta campanha corresponde a sua pesquisa.";
$lang['customer_lookup_not_allowed']	= "Não tem direito a visualizar contas individuais.";
$lang['customer_lookup_steps_header']	= "Adicione e redime algumas transações.";

// Edit Customer Account / Information
$lang['customer_edit_add_campaigns']	= "Adicionar este cliente a estas campanhas:";
$lang['customer_edit_campaigns_note']	= "Adicionar um cliente a outras campanhas permite que possam ser pesquisados por qualquer parte
											da informação da conta deles dentro dessas campanhas. Sem ser adicionado, só poderá ser
											pesquisado pelo código de conta ou Nº de cartão. Alternativamente, pode movimentar-se de campanha
											a campanha com o mesmo cliente utilizando o menu-suspenso acima a direita.";
$lang['customer_edit_header']			= "Alterar dados de conta";
$lang['customer_edit_random_number']	= "Gerar número ao acaso";
$lang['customer_edit_sub_header']		= "Toda informação neste formulário é opcional.";
$lang['customer_edit_activity_header']	= "Atividade histórica de dados da conta";

// Record Customer Transactions
$lang['transaction_add_button']			= "Acrescentar à conta";
$lang['transaction_amount_not_valid']	= "ERRO:<br>O montante de transação ou ".$lang['currency_plural']." não é valido";
$lang['transaction_amount_too_samll']	= "ERRO:<br>O montante de transação ou ".$lang['currency_plural']." introduzido tem que ser pelo menos 0.01";
$lang['transaction_new_gc_header']		= "Adicionar ao saldo";
$lang['transaction_new_header']			= "Atividade nova";
$lang['transaction_no_amount']			= "ERRO:<br>Introduza um valor em ".$lang['currency_plural']."<br>ou seleccione uma promoção.";
$lang['transaction_promo_not_valid']	= "ERRO:<br>Introduza um montante em ".$lang['currency_plural']."<br>para utilizar essa promoção";
$lang['transaction_promos_label']		= "Promoção:";
$lang['transaction_purchase_label']		= "Transação:";
$lang['send_email']						= "Enviar e-mail?";
$lang['transactions_buyx_none']			= "Nenhum serviço ou produtos definidos.";
$lang['transactions_buyx_none_dir']		= "Volte ao painel de control e alter os parametros da campanha.";
$lang['transactions_visit_credited']	= "1 adicionada";
$lang['transactions_visit_redeemed']	= "deduzidas";

// Delete Customer Transaction
$lang['transaction_delete_error']		= "Erro ao eliminar esta transação. Tente outra vez.";
$lang['transaction_delete_popup']		= "<strong>Esta transação vai ser removida permanentemente.</strong><br><br>
											Esta ação NÃO TEM VOLTA!<br><br>
											Tem certeza que quer eliminar esta transação?";
$lang['transaction_delete_popup_pc']	= "Esta transação vai ser removida permanentemente..\n\n
											Esta ação NÃO TEM VOLTA!\n\n
											Tem certeza que quer eliminar esta transação?";

// Redeem Rewards
$lang['redeem_buyx_header']				= "Tabela de Prêmios";
$lang['redeem_buyx_sub_header']			= "Cliente tem atividade suficiente para:";
$lang['redeem_header']					= "Prêmios disponíveis";
$lang['redeem_header_alt']				= "Deduzir do saldo";
$lang['redeem_points_partial_header']	= "Pode deduzir"; /* points or dollars */
$lang['redeem_points_partial_none']		= "Logo que esta conta tiver um saldo."; // Follows the phrase: "You can deduct a custom amount:"
$lang['redeem_points_sub_header']		= "Ou selecione um prêmio para resgatar";
$lang['redeem_reward_description']		= "Descrição do prêmio";
$lang['redeem_reward_balance_none']		= "Não há saldo suficiente nesta conta<br>para resgatar um prêmio.";
$lang['redeem_reward_balance_zero']		= "Não há saldo suficiente nesta conta<br>para deduzir qualquer valor.";
$lang['redeem_reward_balances_none']	= "Não há saldos suficientes nesta conta<br>para resgatar Prêmios";

// Reports
$lang['report_all_customers']			= "Todos clientes";
$lang['report_all_customers_header']	= "Relatório - Todos clientes";
$lang['report_all_customers_range']		= "Todos clientes entre"; /* one date and another date */
$lang['report_audit_title']				= "Relatório de fiscalização de transações";
$lang['report_audits_all_trans']		= "Todas transações";
$lang['report_audits_header']			= "Fiscalizações";
$lang['report_audits_redeemed_only']	= "Só resgatadas";
$lang['report_audits_totals']			= "Totais";
$lang['report_balances_header']			= "Relatórios de saldos de clientes";
$lang['report_balances']				= "Saldos de clientes para";
$lang['report_campaigns_included']		= "Campanhas incluídas:";
$lang['report_col_1_header']			= "Selecione um Relatório";
$lang['report_col_2_header']			= "Selecione um intervalo de datas";
$lang['report_col_3_header']			= "Selecione campanha(s)";
$lang['report_date_not_valid']			= "Data inválida";
$lang['report_date_mismatch']			= "Erro: A data inicial não pode ser<br>mais tarde do que a data final.";
$lang['report_date_range']				= "Clientes que têm uma transação entre:"; /* a range of dates.*/
$lang['report_frequent_header']			= "Relatório de clientes frequentes";
$lang['report_frequent_min_trans']		= "Número mínimo de transações";
$lang['report_none']					= "Nenhum cliente corresponde aos criterios do relatório.";
$lang['report_marketing_header']		= "Marketing";
$lang['report_marketing_new_cust']		= "Novos clientes";
$lang['report_marketing_freq_cust']		= "Clientes frequentes";
$lang['report_marketing_freq_or_more']	= /* A given number of */ "ou mais transações.";
$lang['report_marketing_include']		= "Incluir transações com resgate.";
$lang['report_marketing_miss_dir_1']	= "Clientes que tiveram uma transação entre as datas selecionadas,";
$lang['report_marketing_miss_dir_2']	= "e não tiveram outra desde há tantos dias:";
$lang['report_missing_header']			= "Clientes sem transações desde há"; /* a number of days.*/
$lang['report_new_customers_header']	= "Relatório de clientes novos";
$lang['report_new_customers_none']		= "Nenhum cliente corresponde aos criterios do relatório.";
$lang['report_new_customers_range']		= "Clientes novos entre"; /* one date and another date */
$lang['report_no_transactions']			= "Nenhuma transação corresponde aos criterios do relatório.";
$lang['report_redeem_one_letter_code']	= "R";
$lang['report_run_report_button']		= "Executar relatório";
$lang['report_search_header']			= "Relatório de pesquisa de clientes";
$lang['report_search']					= "Pesquisar clientes que incluem";
$lang['report_search_range']			= "Entre as datas"; /* one date and another date */
$lang['report_search_not_valid']		= "Tem que inserir qualquer coisa para pesquisar.";
$lang['report_totals_header']			= "Relatório de fiscalização de totais";

// Report Months
$lang['Jan']							= "Jan";
$lang['Feb']							= "Fev";
$lang['Mar']							= "Mar";
$lang['Apr']							= "Abr";
$lang['May']							= "Mai";
$lang['Jun']							= "Jun";
$lang['Jul']							= "Jul";
$lang['Aug']							= "Ago";
$lang['Sep']							= "Set";
$lang['Oct']							= "Out";
$lang['Nov']							= "Nov";
$lang['Dec']							= "Dez";

// Auto-Generated Emails
$lang['email_account_activity']			= "Programa de Fidelidade";
$lang['email_activated_header']			= "Campanha ativada";
$lang['email_activated_sub_header']		= "A campanha seguinte foi ativada:";
$lang['email_billing_header']			= "Mudança de nível de facturação";
$lang['email_billing_from_level']		= "O nível de faturação da sua conta mudou de";
$lang['email_deactivated_header']		= "Campanha suspensa";
$lang['email_deactivated_sub_header']	= "A campanha seguinte foi suspensa:";
$lang['email_greeting']					= "Olá"; // The greeting that prefaces the receiver's first name or User ID. Ex: "Hi Jane, ..."
$lang['email_html_callout']				= "Guarde estes dados num lugar seguro";
$lang['email_html_callout_url']			= "Endereço do login"; // As in "the internet address where a client can log into the acount management application of StickyStreet."
$lang['email_keep_email_footer_1']		= "Guarde esta mensagem para os seus registos.";
$lang['email_keep_email_footer_2']		= "Contém dados importantes sobre a sua conta.";
$lang['email_new_account_header']		= "Conta Nova";
$lang['email_new_account_sub_header']	= "Uma conta nova foi criada.";
$lang['email_html_password_nochange']	= "Nenhuma alteração"; // Short phrase indicating that the password has not changed, that it remains the same as before.
$lang['email_online_header']			= "Registo de cliente por Internet";
$lang['email_online_register']			= "O cliente seguinte registou-se pelo internet para uma conta nova:";
$lang['email_password_header']			= "Pedido de recuperação de Senha";
$lang['email_password_dir1']			= "Pediu que nós mandemos a sua Senha para o usuário"; /* shows the User ID */
$lang['email_password_dir2']			= "É:"; // As in "Here is the thing you requested".
$lang['email_update_header']			= "Nota de atividade na sua conta e extrato atualizado.";
$lang['email_update_sub_header']		= "Os dados da sua conta foram alterados.";
$lang['email_user_id_header']			= "Pedido de recuperação de Usuário";
$lang['email_user_id_sub_header_1']		= "Pediu que nós mandemos o usuário associado com o seu endereço de email:";
$lang['email_user_id_sub_header_2']		= "Pediu que nós mandemos todos os usuários associados com o seu endereço de email:"; // Plural


// Bookmarks
$lang['bookmarks_header']				= "Marcadores auto-login";
$lang['bookmarks_table_header_1']		= "Selecione uma página";
$lang['bookmarks_table_header_2']		= "Selecione um usuário";
$lang['bookmarks_table_header_3']		= "Guarde o Marcador";
$lang['bookmarks_link_1']				= "Clique com o<br>botão direito<br>do mouse sobre<br>este link para<br>guardar o<br>marcador.";
$lang['bookmarks_link_2']				= "Clique para<br>ir à página<br>e guardar<br>o marcador<br>de lá.";
$lang['bookmarks_note']					= "Trate os links fornecidos como Senhas para a sua conta, que o são.
											Recomendamos que não os envie por e-mail; em vez disso,
											entre com seu log-in no computador onde pretende que o marcador seja utilizado e
											adicione-o no browser à lista dos marcodores favoritos.";

// Common Error Messages:
$lang['error_balance_lookup_activity']	= /* The account id entered */ "não tem atividade.";
$lang['error_balance_lookup_no_cust']	= "Falta o código de conta de cliente.";
$lang['error_balance_lookup_no_acct']	= "Falta o código de usuário da conta.";
$lang['error_email_space']				= "Espaços não são permitidos em endereços de email.";
$lang['error_email_not_found']			= "Este endereço de email não foi encontrado.";
$lang['error_email_not_valid']			= "Este endereço de email não é valido.";
$lang['error_customer_id_empty']		= "Tem que inserir um código de usuário.";
$lang['error_language_selector']		= "Há um erro com o idioma selecionado.";
$lang['error_next_page']				= "Houve um erro ao seguir à próxima página. Tente outra vez.";
$lang['error_password_empty']			= "Tem que inserir uma Senha.";
$lang['error_password_length']			= "A sua Senha tem que ter entre 5 a 20 letras ou números.";
$lang['error_password_not_valid']		= "A sua Senha só pode ser composto de letras, números, e o símbolo de sublinhado (_)";
$lang['error_password2_empty']			= "Tem que re-inserir a Senha para termos<br>
											a certeza que foi inserida corretamente a primeira vez.";
$lang['error_passwords_no_match']		= "As palavras-chaves que inseriu não correspondem. Insira-as outra vez.";
$lang['error_phone_area_code']			= "Insira um código telefónico válido.";
$lang['error_phone_not_valid']			= "Este não é um código telefónico válido.";
$lang['error_service_down']				= "Este serviço está temporariamente indisponível.<br><br>Pedimos desculpas pelo inconveniente.";
$lang['error_updating']					= "Houve um erro ao alterar os dados. Tente de novo.";
$lang['error_userid_error']				= "Erro: O usuário que inseriu não existe.";
$lang['error_account_suspended']		= "Esta conta foi suspensa";

// Alt Tags
$lang['alt_add_customer_button']		= "Clique para adicionar clientes a esta campanha.";
$lang['alt_account_edit_save']			= "Clique para guardar as alterações feitas a este formulário";
$lang['alt_campaign_delete']			= "Clique para eliminar esta campanha";
$lang['alt_campaign_edit']				= "Clique para alterar os parâmetros desta campanha.";
$lang['alt_campaign_name']				= "Clique no nome da campanha para pesquisar clientes ou adicionar novos.";
$lang['alt_campaign_new_create']		= "Clique para criar esta campanha";
$lang['alt_campaign_place_on_hold']		= "Esta campanha está ativa. Clique para suspendê-la";
$lang['alt_campaign_re-activate']		= "Clique para reativar esta campanha";
$lang['alt_cancel_changes']				= "Clique cancelar as alterações e retornar à página anterior";
$lang['alt_goto_ss']					= "Clique para abrir uma janela nova e ir a esse site.";
$lang['alt_lookup_customer_button']		= "Clique para pesquisar contas de clientes nesta campanha";
$lang['alt_user_add']					= "Clique para adicionar um usuário novo";
$lang['alt_user_delete']				= "Clique para eliminar este usuário de maneira a não poder login ou ter acesso a esta conta";
$lang['alt_user_edit']					= "Clique para alterar os parâmetros deste usuário";


// Report Exporting
// ---------------
$lang['export_xls']						= "Exportar para Excel";

// =========================
// ADDITIONAL TRANSLATIONS 2
// =========================
// Calculator
$lang['calculator_title']				= "Planilha para o Programa de Pontos";
$lang['str_ratio']						= "Razão Gaste/Ganhe";  // (same as "edit_str_ratio_sub_header", but without "your")
$lang['check_section_desc']				= "Vamos nos assegurar que você não está dando mais do que recebendo:";
$lang['Print']							= "Imprimir";
$lang['column_product_or_pervice']		= "Produto ou Serviço";
$lang['column_retail_price'] 			= "Preço final do produto/serviço";
$lang['column_points_earned'] 			= "Pontos ganhos na aquisição pelo cliente";
$lang['column_points_needed'] 			= "Pontos necessários para resgatar prêmios";
$lang['column_cost_to_provide'] 		= "Seu custo para prover o produto/serviço";
$lang['column_profit_made'] 			= "Lucro realizado na venda";
$lang['column_profit_made_part2']		= "produtos<br>or serviços";
$lang['column_cost_reward_perc']		= "Custo do prêmio<br>como % do lucro";
$lang['column_cost_reward_smaller']		= "(Quantos menor, melhor)";
$lang['instructions']					= "Instruções";
$lang['calculator_instructions_1']		= "<strong>1) Seus clientes receberão PONTOS para cada transação ou Real gasto.
											Quantos pontos? É uma decisão arbitrária:</strong><br>
											<br>
											1 ponto para cada transação ou Real é o mais óbvio, mas não o mais indicado. Explicamos: os clientes saberão o quanto gastaram
                                 no seu negócio, bastando olhar seu saldo em pontos.
											Na verdade, não há razão para alarmar os clientes sobre o bom vício de comprar seus produtos e serviços. Por isso
                                 recomendamos usar um número aleatório que dificultará um pouco essa percepção!
											Pelo menos 100 se você tratar com valores baixos, mas novamente, pode ser 3, 5 ou 20, se você não se importar com
                                  alguns arredondamentos para cima ou para baixo até o próximo ponto cheio.<br>
											<br>
											<strong>Assim que definir o número, insira-o no campo <span class=\"orangeH\">Pontos por transação ou Real</span> acima.</strong><br>";
$lang['calculator_instructions_2']		= "<strong>2) Em seguida, <i> a Razão gaste/ganhe</i>
											pode ser considerada como \"quantas vezes um cliente deve comprar um produto ou serviço até que um prêmio de igual
                                 valor seja alcançado?\"</strong><br />
											<br>
											Geralmente esse número varia entre 8 e 25 ou mais, mas novamente, tratamos aqui de uma especificidade de negócio.
											Por exemplo, você seguramente conhece alguma cafeteria que dá uma cafezinho grátis depois de 10 pagos. Quanto maior
                                 o número, mais conservador o plano, mas fica mais difícil para os clientes resgatarem seus prêmios.<br>
											<br>
											<strong>Insira o número no campo<span class=\"orangeH\">Razão Gaste/Ganhe</span>,
											e faça algumas simulações.
											Experimente com alguns valores até que se sinta confortável com os resultados.</strong>";
 $lang['calculator_disclaimer']			= "<strong>Obs.:</strong>: Essa planilha deve ser usada como uma ferramenta de referência apenas. Recomendamos aos nossos
											clientes que busquem aconselhamento financeiro antes de lançar qualquer um dos nossos programas de fidelidade!";


// =========================
// ADDITIONAL TRANSLATIONS 3
// =========================

// Transaction Email Content Preferences:
$lang['transaction_email_content']		= "Email de transação Email: Conteúdo";
$lang['transaction_email_desc']			= "Quando irá gravar uma transação, se esse cliente tem um endereço de e-mail arquivado,  será apresentado com a opção de enviar um email.";
$lang['transaction_email_instr']		= "Para personalizar os e-mails que são mandados desta campanha, preencha ou altere as caixas no email-modelo, abaixo:";
$lang['transaction_email_default']		= "Obrigado por ter nos escolhido.!";
$lang['transaction_email_incl_balance']	= "Incluir saldo";
$lang['transaction_email_incl_rewards']	= "Incluir Prêmios disponíveis";
$lang['transaction_email_incl_coupon']	= "Incluir desconto ou promoção";
$lang['error_general_permission']		= "Conteúdo não disponível.";


// =========================
// ADDITIONAL TRANSLATIONS 4
// =========================
$lang['customer_edit_address_change']	= "O endereço foi alterado para";
$lang['customer_edit_address_delete']	= "O endereço foi removido. Antes era";
$lang['customer_edit_address_replace']	= "O endereço foi alterado de";

// =========================
// ADDITIONAL TRANSLATIONS 5
// =========================
// Email Updates:
$lang['email_agency_update_header']             = "Mudanças na Conta:";
$lang['email_agency_update_sub_header'] 			= "Atualizadas informações da seguinte conta:";
// Import Updates:
$lang['Options']                                = "Opções";  // Plural. The ability to choose from different alternatives or non-required additional specifications.
$lang['manage_import_duplicates_update']        = "Atualizar";
$lang['manage_import_duplicates_ignore']        = "Pular";
$lang['manage_import_convert_currency'] 			= "Converter os montantes transacionados para a regra da campanha?";
$lang['manage_import_trans_instrctns_2']        = 'Se você está importando <b>transações em DINHEIRO</b> para um programa baseado em pontos,
                                                  ou importando uma lista de visitas para um programa baseado em eventos, assegure-se de selecionar o quadrinho
                                                  "'.$lang['manage_import_convert_currency'].'" Se você está importando pontos customizados ou pontos conquistados, assegure-se de não selecionar esse quadrinho.';
// Import Undo
$lang['import_previous_title']                  = 'Importação prévia';
$lang['Undo']                                   = 'Desfazer';
// BuyX Membership Functionality
$lang['Quantity']                               = "Quantidade a adicionar";
// Mailchimp Integration:
$lang['select_a_list_to_export_to']             = "Seleciona uma Lista para Exportar";
$lang['success']                                = "Sucesso";
$lang['export_complete']                        = "Exportação completa";
$lang['loading']                                = "Carregando...";
$lang['oops']                                   = "Oops!";
$lang['addresses_successfully_added']   			= "Endereços de email adicionados à esta lista com sucesso";
$lang['all_addresses_exist']                   = "Todos estes endereços de email já existem na lista!";
$lang['addresses_exist']                       = "Endereços de email que já existem na lista";
$lang['we_found']                               = "Encontramos";
$lang['errors']                                 = "erros";
$lang['addresses_with_errors']                  = "Endereços de email com erro";
$lang['Back']                                   = "Voltar";
$lang['CLOSE']                                  = "FECHAR";
$lang['Visit_MailChimp']                        = "Visite MailChimp";
$lang['mailchimp_integration']                  = "Integração com MailChimp";
$lang['mailchimp_login_error']                  = "MailChimp não reconhece seu usuário/senha. Atenção - por segurança, após
																	10 tentativas consecutivas, espere 5 minutos antes de tentar novamente. ";
$lang['mailchimp_no_account_info']              = "Não encontramos suas informações de conta no MailChimp.
																	Entre com elas para continuar com a exportação!";
$lang['mailchimp_bad_account_info']             = "Não conferem suas informações de conta no MailChimp.
																	Entre com elas para continuar com a exportação!";
$lang['bananas']                                = "Bananas!";
$lang['no_username']                            = "Você não entrou com seu usuário e/ou senha!";
$lang['Username']                               = "Usuário";
$lang['Password']                               = "Senha";


// =========================
// ADDITIONAL TRANSLATIONS 6
// =========================
$lang['account_new_header_agency']         	 	= "Diga-nos sobre o seu cliente:";
// Custom Date functionality
$lang['label_date']                    			= 'Aniversário';
$lang['label_Year']                        	 	= 'Ano';
$lang['label_Month']										= 'Mês';
$lang['label_Day']                       			= 'Dia';
$lang['customer_new_demo_date']              	= '01/01/2010';
$lang['user_edit_record_change_custom_date']		= "Mudar aniversário para";
$lang['user_edit_record_replace_custom_date']	= "Aniversário mudou de";
$lang['report_customer_birthday']							= "Clientes com data de aniversário dentro da faixa acima";
$lang['report_customer_birthday_header']					= "Relatório de Aniversários de Clientes";
// API functionality
$lang['api_redeem_reward_exeeds']					= "o prêmio selecionado excede o saldo disponvel";
$lang['api_redeem_amount_exeeds']					= "O valor excede o saldo disponvel";
$lang['api_redeem_amount_not_valid']				= "O valor não é válido";
$lang['api_redeem_amount_not_enough']				= "O valor precisa ser pelo menos 1";
$lang['api_redeem_currency_not_enough']         = "O valor deve ser superior a 0.01";
$lang['api_redeem_nothing']							= "Nada foi requerido para que possa haver resgate";
// Campaign Name Change functionality
$lang['Campaign_Name'] 									= $lang['cp_campaigns_table_header_1'];
$lang['Campaign_ID']										= $lang['manage_import_campaign_name'];

// =========================
// ADDITIONAL TRANSLATIONS 7
// =========================
// Never implemented


// =========================
// ADDITIONAL TRANSLATIONS 8
// =========================
// Custom Modifications for PaP Solutions
$lang['user_edit_record_change_password']		= "Senha alterada";
$lang['label_customer_password']					= "Senha";
$lang['label_cutoff_day']							= "Dia de corte";
$lang['label_nonpayment']							= "Status de cliente";				// (C = cancelado, S = suspenso, A = ativo)
$lang['label_nonpayment_short']					= "Status";
$lang['manage_import_bonus_adj']					= "Bonus/Ajuste? (Y/N)"; 			// (Y = sim, N = não)
$lang['Bonus_Adjustment']							= "Bonus/Ajuste?";
$lang['Bonus_Adjustment_abbreviated']			= "Aj.";
$lang['cp_campaigns_table_head_depreciation']	= "Duração da vida de pontos";
$lang['cp_campaigns_table_depreciation']		= "Longevidade dos pontos";
$lang['cp_campaigns_export_depreciation']		= "Data de expiração";
$lang['days']											= "dias";
$lang['months'] 										= "meses";
$lang['years']											= "anos";
$lang['depreciation_interval_too_small']		= "O valor precisa ser pelo menos 1";
$lang['api_customer_password_missing']			= "Este cliente não tem senha gravada.";
$lang['report_papsolutions_monthly_summary']	= "Saldos mensais de hoje";
$lang['report_campaign_select_error']			= "Campanha selecionada invalida";
$lang['report_daily_monthly_summary']			= "Relatório para";
$lang['label_previous_balance']					= "Saldo Anterior";
$lang['report_interval_new_activity']				= "Atividade";
$lang['report_interval_adjustments']			= "Ajustes";
$lang['report_interval_redemptions']			= "Resgatado";


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


// =========================
// ADDITIONAL TRANSLATIONS 14
// =========================
$lang['user_my_info_header']						= "Gestão da minha conta de usuário";
$lang['user_role_I']									= "Gerenciador de Sistema com Importação";
$lang['user_role_I_desc']							= "Gerenciador com poderes para editar campanhas, usuários, emitir relatórios e gerenciar clientes, mas sem poderes para adicionar campanhas e contas de usuário.";
$lang['user_role_G']									= "Gerenciador de Sistema";
$lang['user_role_G_desc']							= "Gerenciador com poderes para editar campanhas, usuários e emitir relatórios, mas sem poderes para adicionar campanhas, nem contas de usuário e nem importar ou excluir clientes.";


// =========================
// ADDITIONAL TRANSLATIONS 15
// =========================
$lang['coalition_balance_label']                                = "Corrente<br>Saldo da coalisão:";
$lang['coalition_redeem_header']                                = "Prêmios disponíveis";
$lang['customer_activity_coalition_header']             = "Extrato de Cliente (Para esta Loja)";
$lang['report_coalition_header']                                = "Relatórios da Coalisão";
$lang['report_audits_totals_points']                            = "Totais - Pontos (Loja)";
$lang['report_audits_totals_giftcard']                  = "Totais Loja - Cartões Pré-Pagos";
$lang['section_account_options_header']         = "Opções avançadas de conta";
$lang['section_account_options_sub']                    = "Caso querira criar uma Conta Avançada (programa aberto), por favor entre com o código de ativação solicitado num dos campos abaixo. Se tiver
                                                                                    dúvidas ou caso não tenha recebido seu código de ativação , entre em contato conosco. ";
$lang['section_coalition_token']                                = "Código de Ativasão de Coalisão";
$lang['section_mall_token']                                     = "Dois níveis / Código de Ativação do Shopping";
$lang['section_coalition_note']                                 = "Provido para custos adicionais.";
$lang['section_mall_note']                                              = "Provido para custos adicionais.";
$lang['section_mall_campaign_id']                               = "ID da campanha do Shopping";
$lang['section_mall_percentage']                                = "Contribuição do Shopping (%)";
$lang['section_token_invalid']                                  = "O código de ativação não é válido";
$lang['section_mall_options_header']                    = "Opções de Conta do Shopping";
$lang['percentage_not_valid']                           = "O percentual não é válido.";


// =========================
// ADDITIONAL TRANSLATIONS 16
// =========================
$lang['report_custom_date']						= "Clientes que têm a data de aniversário dentra das datas selecionadas acima";
$lang['report_custom_date_header']				= "Relatório de aniversários de clientes";


// =========================
// ADDITIONAL TRANSLATIONS 17
// =========================
// Mainly small changes regarding coalition and two-tier programs.

$lang['coalition_points_program']                = "Programa de pontos de coalizão"; // A label in reports that aggregate an account's points-based coalition campaigns into a single line.
$lang['coalition_giftcards_program']             = "Programa de Coalizão de Valor Depositado"; // A label in reports that aggregate an account's stored-value (giftcard) based coalition campaigns into a single line.
$lang['coalition_program']									= "Programa de coalizão";
$lang['twotier_program']									= "Programa de dois níveis";
$lang['opt_out']												= "Não participar";

$lang['user_role_L']                                 = "Gerência de Coalizão";
$lang['user_role_L_desc']                            = "Mesmo acesso do que um gerente, mas sem a habilidade de editar a informação de clientes quando já existe.";

$lang['user_role_D']                                 = "Designer de Campanha";
$lang['user_role_D_desc']                            = "Papel único que deixa só adicionar, editar, suspender, e re-activar campanhas, e pedir relatórios, mas mais nada.";

// =========================
// ADDITIONAL TRANSLATIONS 18
// =========================
$lang['account_label_fields_manage']            = "Gerenciar Campos Customizados"; // A button text that lets the user add/manage the fields of data collected for the account's customers.
$lang['error_action_undefined']                    = "Ação indefinida"; // Shows mainly as an API error message when the "action" parameter is not given or does not match one of the expected action words.
$lang['error_entry_not_in_list']                    = "Opção não permitida."; // Shows mainly as an API error message when a value is input that does not match one of the options in the list of options for that field.
$lang['error_entries_not_in_list']                = "Opções não permitida"; // Shows mainly as an API error message when a series of values is input that do not exist in the list of options for that field.

$lang['error_not_numeric']                            = "Número não válido.";
$lang['error_not_monetary']                        = "Valor financeiro não válido.";
$lang['error_not_date']                                = "Data não válida.";
$lang['error_not_unique']							= "Valor já existe. Tem que ser único."; //
$lang['manage_fields_top_header']                = "Selecione Campos para Gerenciar"; // The page header where data fields are managed (customers, transations, etc.)
$lang['manage_fields_customers_top_header']    = "Gerenciar Campos"; // The page header where customers' data fields are managed (to add, show/hide, etc.)
$lang['manage_fields_transactions_top_header']    = "Gerenciar Campos de Transações"; // The page header where customers' transaction data fields are managed
$lang['manage_fields_predefined_header']        = "Campos Pré-Definidos"; // The section where the original set of customer fields are show, and where the user can choose to show or hide them.
$lang['manage_fields_custom_header']            = "Campos Customizados"; // The section where new custom customer data fields are shown.
$lang['label_customer_fields']                    = 'Campos de Cliente'; // A button for the user to select to manage the fields related to customer data.
$lang['label_transaction_fields']                = 'Campos de Transações'; // A button for the user to select to manage the fields related to a customer's transaction data.
$lang['label_Label']                                    = "Rótulo"; // As in "the word that describes a category" -- ex: The label of this field is the word that describes what the field is for.
$lang['label_Type']                                    = "Tipo"; // As in "the kind of thing it is" -- ex: This field is of a text type. The type of this other field is a date.
$lang['label_Text']                                    = "Texto"; // One of the types of field mentioned above. In this case a field that includes any kind of character.
$lang['label_Date']                                    = "Data"; // One of the types of field mentioned above. In this case a field that represents a calendar date and time, to the second.
$lang['label_List']                                    = "Opções"; // One of the types of field mentioned above. In this case a field that allows the user to choose elements in a list.
$lang['label_Picklist']                                = "Selecção"; // One of the types of field mentioned above. In this case a field that allows the user to pick ONE elements from a list.
$lang['label_Number']                                = "Número"; // One of the types of field mentioned above. In this case a field that is numerical in value only.
$lang['label_Money']                                    = "Dinheiro"; // One of the types of field mentioned above. In this case a field that is numerical, with exactly two decimals.
$lang['label_Choices']                                = "Lista de Opções"; // A description of a field type that allows the user to store alternatives to be chosen in a list.
$lang['label_Choices_sub']                            = "Separar cada opção com vírgula"; // Instructions to the user to separate each option for the list with a comma (,) character.
$lang['label_Unique']                                = "Único?"; // Description of a field choice that asks the user if the values recorded in the field in question must be unique.
$lang['label_Select']                                = "Selecionar:"; // The word that appears as the initial selection (and thereby, as the instruction) in a pull-down menu.

$lang['custom_field_delete_popup']                = "Este Campo Customizado será apagado, assim como TODOS OS DADOS NELE CONTIDOS.<br><br>
                                                               Esta ação NÃO PODERÁ SER DESFEITA!<br><br>
                                                               Tem certeza que quera apagar este Campo Customizado?";

$lang['custom_field_delete_popup_pc']            = "Este Campo Customizado será apagado, assim como TODOS OS DADOS NELE CONTIDOS.\n\n
                                                              Esta ação NÃO PODERÁ SER DESFEITA!\n\n
                                                              Tem certeza que quera apagar este Campo Customizado?";

$lang['success_customer_fields']                    = "As mudanças nos campos customizados foram realizadas com sucesso.";
$lang['success_transaction_fields']                = "As mudanças nos campos de transações foram realizadas com sucesso.";
$lang['button_add_field']                            = "Adicione um novo campo customizado";
$lang['ID']                                                = "ID"; // Generic SHORT identifier for "Identification" (whether numeric or alpha-numeric)
$lang['generate_id_error']                            = "Erro ao gerar ID. Por favor, tente novamente.";


// =========================
// ADDITIONAL TRANSLATIONS 19
// =========================
// Custom Modifications for BlackHawk


// =========================
// ADDITIONAL TRANSLATIONS 20
// =========================
$lang['label_Searchable']                            = "&nbsp;É&nbsp;ID&nbsp;";  // Description of a field choice that asks the user if the values stored in this field can be used to pull up customers in campaigns where a customer is not registered.
$lang['orig_amount']                                    = "Valor Original";
$lang['DB_Timestamp']                                = "DB Timestamp";

$lang['depreciation_expired']                        = "Expirados";
$lang['depreciation_short']                        = "Exp'd";  // The header of a NARROW column that shows the percentage of the points that has expired or depreciated.
$lang['preferences_depreciation_header']        = "Depreciação";
$lang['preferences_depreciation_none']            = "Não há Depreciação Definida.";
$lang['edit_depreciation_add']                    = "Adicone uma Depreciação";
$lang['edit_depreciation_add_another']            = "Adicione outra Depreciação";
$lang['edit_depreciation_type_prompt']            = "Tipo de depreciação:";
$lang['edit_depreciation_type_T']                = "Por transação, baseado na data de cada transação";
$lang['edit_depreciation_type_L']                = "No saldo, baseado na data da última transação";
$lang['edit_depreciation_longevity']            = "Valor serão depreciado após:";
$lang['edit_depreciation_percentage']            = "por:";
$lang['depreciation_interval_too_small']        = "O valor inserido precisa ser no mínimo 1";
$lang['depreciation_percentage_too_small']    = "O valor inserido deve ser superior a zero";
$lang['api_error_depreciation_exists']            = 'A depreciation for the time interval given already exists.';
$lang['report_expiration']                            = "Data de Expiração";
$lang['report_depreciation']                        = "Depreciação";
$lang['preferences_recurring_fee_header']        = "Fee Recorrente";
$lang['edit_recurring_fee_interval']            = "Para cada";
$lang['edit_recurring_fee_amount']                = "deduzir";
$lang['edit_recurring_fee_description']        = "pela seguinte razão:";
$lang['edit_recurring_fee_add']                    = "Adicione Fee Recorrente";
$lang['edit_recurring_fee_add_another']        = "Adicione outro Fee Recorrente";
$lang['preferences_recurring_fee_none']        = "Não há Fee recorrente definido.";
$lang['recurring_fee_too_small']                    = "O valor inserido deve ser superior a zero";

// =========================
// ADDITIONAL TRANSLATIONS 21
// =========================
$lang['transactions_not_visible']                = "Nenhuma transação visível."; // No visible transactions.
$lang['section_account_copy']                    = "Copiar configurações?"; // 'Copy Settings?';
$lang['section_account_copy_sub']                = "Selecione uma conta da qual copiar as configurações. Se nenhuma, deixar a seleção em branco."; // Select another account to copy the settings from. If none, leave the selection blank.
$lang['account_to_copy_from_label']              = "Copiar configurações de:"; // Copy settings from:
$lang['error_copy_from_missing_agency']          = "Falta o token da agência"; // The agency token is missing
$lang['error_copy_from_wrong_account']           = "A conta não pertence à agência"; //The account does not belong to the agency





// ==========================
// Outside / Optional Links
// ==========================
// Translate this section ONLY if the embeded links have been replicated in the new language:

// Legal Documents
$lang['terms_conditions_location']		= 'languages/PT-terms-conditions.html';

// Edit Preferences: Points Campaign
$lang['edit_points_note_1_graphic']		= '<a href="http://www.clienttoolbox.com/calculator.php" target="_blank"><img align="right" src="graphics/calculator.gif" width="72"
											height="80" border="0" vspace="5" hspace="3"></a><span style="color: #666;">';
$lang['calculator_link'] 				= '<a href="http://www.clienttoolbox.com/calculator.php" target="_blank">';
$lang['edit_points_note_1'] 			= "Para um pouco de ajuda para calcular o valor dos ".$lang['points']." necessários para resgatar um prêmio, use a nossa
											".$lang['calculator_link']."calculadora de pontos</a> (em inglês):";
$lang['blog_link_accounting'] 			= '<a href="http://support.stickystreet.com/forums/16257/entries/12598" target="_blank">';
$lang['edit_points_note_2'] 			= "Para uma exposição sobre os cálculos necessários para chegar a níveis de Prêmios corretos, leia (em inglês)
											".$lang['blog_link_accounting']."este artigo</a> no nosso centro de apoio ao cliente.";
$lang['edit_str_desc_with_link']		= $lang['edit_str_desc'];


// END OF FILE

?>
