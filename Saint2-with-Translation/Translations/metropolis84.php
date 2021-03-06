<?php

// CUSTOM LANGUAGE FILE TO REPLACE "PUNTOS" WITH "Metropuntos"

require_once ('ES.php');

$lang['point']							= "metropuntos";
$lang['points']							= "metropuntos";
$lang['Point']							= "Metropunto";
$lang['Points']							= "Metropuntos";

$lang['ppd']							= 'Metropuntos-por-moneda';

$lang['section_points_calculator']		= "Calculadora de Metropuntos";

$lang['campaign_new_points_desc']		= "Sus clientes acumulan Metropuntos en base a sus compras, pagos o la promoci&oacute;n que usted defina.
											Los Metropuntos pueden canjearse luego en base a niveles de recompensa personalizados.<br>
											<br>
											Un programa de Metropuntos, como el programa de millas de una aerol&iacute;nea, le permite:<br>
											<br>
											<b>Asignar una cantidad determinada de Metropuntos cada cierto gasto en ".$lang['currency_plural'].". Por ejemplo:</b><br>
											<li>5 Metropuntos por cada ".$lang['currency']."</li>
											<li>.25 Metropuntos por ".$lang['currency']."</li>
											<br>
											<b>Definir niveles de recompensa. Algunos ejemplos:</b><br>
											<li>1000 Metropuntos: descuento del 50% en una compra</li>
											<li>5000 Metropuntos: art&iacute;culo gratis</li>
											<li>100,000 Metropuntos: Viaje a Disneyland.</li>
											<br>
											<b>Definir promociones. Algunos ejemplos:</b><br>
											<li>Los martes se acumula el doble de Metropuntos</li>
											<li>500 Metropuntos adicionales por reserva anticipada</li>
											<li>25% de Metropuntos de regalo con la compra con Tarjeta de Regalo.</li>
											<br>
											De manera opcional, puede definir una relaci&oacute;n gasto/recompensa que le permita canjear Metropuntos usando un valor monetario como referencia.";

$lang['campaign_type_points']			= "Programa de Metropuntos";

// Edit Campaign: Points
$lang['edit_points_desc_note']			= "Esta proporci&oacute;n puede cambiarse en cualquier momento, pero los Metropuntos acumulados por los clientes a la fecha no cambiar&aacute;n.";
$lang['edit_points_desc']				= "&Eacute;ste es un n&uacute;mero completamente arbitrario y puede ser cualquier valor que tenga sentido para usted. Por ejemplo:";
$lang['edit_points_desc_header']		= "Metropuntos acumulados por cada peso gastado.";
$lang['edit_points_empty']				= "Debe ingresar la cantidad de Metropuntos necesarios para obtener la recompensa.";
$lang['edit_points_examples_header']	= "Algunos ejemplos de recompensas por Metropuntos:";
$lang['edit_points_ex_1_amount']		= "1500";
$lang['edit_points_ex_1_desc']			= "20% de descuento";
$lang['edit_points_ex_2_amount']		= "1500";
$lang['edit_points_ex_2_desc']			= "Manicura b&aacute;sica de regalo";
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
$lang['edit_points_not_valid']			= "La cantidade de  Metropuntos debe ser un n&uacute;mero.";
$lang['edit_points_profit_ratio_error']	= "Debe ingresar un valor positivo mayor a cero. Deje el espacio en blanco para deshabilitar la opci&oacute;n.";
$lang['edit_points_step_dir']			= "Establezca las preferencias de su programa de Metropuntos:";
$lang['edit_points_table_header']		= "Descripci&oacute;n de la recompensa obtenida cuando<br>se alcanza la cantidad de Metropuntos especificada.";
$lang['edit_points_too_small']			= "Debe ingresar un valor m&iacute;nimo de 1 Metropunto.";

$lang['edit_promo_desc']				= "Las promociones modifican la manera en que se acumulan Metropuntos. Mediante una promoci&oacute;n usted puede agregar o descontar una cantidad espec&iacute;fica de Metropuntos o multiplicarlos por un valor determinado al registrarse una operaci&oacute;n. Vea los siguientes ejemplos:";
$lang['edit_promo_edit_header']			= "Editar promoci&oacute;n";
$lang['edit_promo_edit_error_header']	= "Debe ingresar un n&uacute;mero por el que multiplicar las Metropuntos acumulados.<br>Por ejemplo:";
$lang['edit_promo_edit_error_add']		= "Debe ingresar una cantidad de Metropuntos a agregar a los ya acumulados. Por ejemplo, \"500\" agregar&aacute; 500 Metropuntos a la cantidad de Metropuntos acumulados. \"-100\" descontar&aacute; 100 Metropuntos de los acumulados (hasta llegar a 0, como m&aacute;ximo.)";
$lang['edit_promo_edit_error_multi']	= "El valor por el que multiplicar las Metropuntos debe ser un n&uacute;mero.";
$lang['edit_promo_edit_error_not_valid']= "La cantidad de Metropuntos a agregar debe ser un n&uacute;mero.";
$lang['edit_promo_edit_ex_1']			= "2 duplicar&aacute; los Metropuntos acumulados.";
$lang['edit_promo_edit_ex_2']			= ".5 los reducir&aacute; a la mitad.";
$lang['edit_promo_edit_ex_3']			= "1.1 agregar&aacute; un 10% de Metropuntos.";
$lang['edit_promo_ex_1_amount']			= "+500";
$lang['edit_promo_ex_1_desc']			= "Agregar 500 Metropuntos por recomendaci&oacute;n";
$lang['edit_promo_ex_2_amount']			= "+100";
$lang['edit_promo_ex_2_desc']			= "Metropuntos de regalo por convertirse en miembro";
$lang['edit_promo_ex_3_amount']			= "+ -50";
$lang['edit_promo_ex_3_desc']			= "descontar 50 Metropuntos por llegar tarde";
$lang['edit_promo_ex_4_amount']			= "x2";
$lang['edit_promo_ex_4_desc']			= "Nivel VIP: Duplicar las Metropuntos acumulados";
$lang['edit_promo_ex_5_amount']			= "x1.5";
$lang['edit_promo_ex_5_desc']			= "por un 50% adicional de Metropuntos los martes";
$lang['edit_promo_ex_6_amount']			= "x1.25";
$lang['edit_promo_ex_6_desc']			= "Miembro Plateado: 25% adicional de Metropuntos";
$lang['edit_promo_ex_7_amount']			= "x0.75";
$lang['edit_promo_ex_7_desc']			= "por 25% menos Metropuntos";

$lang['edit_str_header']				= "Opcional: Capacidad de ingresar montos en pesos para canjear Metropuntos";
$lang['edit_str_desc']					= "La relaci&oacute;n gasto/recompensa es una de las dos proporciones que tuvo que utilizar para determinar el valor en Metropuntos de sus recompensas. Si la ingresa aqu&iacute;, activar&aacute la posibilidad de canjear Metropuntos al ingresar un valor en pesos:";
$lang['edit_str_ratio_header']			= "Posibilidad de ingresar montos en pesos<br>para canjear Metropuntos:";

$lang['edit_str_example_math']			= "Digamos que usted especific&oacute; una proporci&oacute;n Metropuntos-por-peso
											de 5 y una relaci&oacute;n gasto/recompensa de 20. Entonces:<br>
											1000 Metropuntos / 5 Metropuntos-por-peso / relaci&oacute;n gasto/recompensa de 20 = $10<br>
											<br>
											Otra manera de ver esto es que $10 x 5 Metropuntos-por-peso = 50 Metropuntos, y con una
											relaci&oacute;n gasto/recompensa de 20, usted necesita 20 x 50 Metropuntos (1000 Metropuntos) para poder canjear $10.";
$lang['edit_str_note_1']				= "Para desactivar la posibilidad de ingresar valores en pesos para canjear Metropuntos, elimine la relaci&oacute;n gasto/recompensa (d&eacute;jela en blanco) y presione"; /*(Set button)*/

$lang['column_points_earned'] 			= "Metropuntos ganados por el cliente por la compra de ese producto";
$lang['column_points_needed'] 			= "Metropuntos que necesita el cliente para canjearlo como recompensa";

$lang['calculator_instructions_1']		= "<strong>1) Sus clientes tienen que ganar Metropuntos por cada peso que gastan.
											&#191;Cu&#225;ntas Metropuntos? &#201;ste es un n&#250;mero arbitrario:</strong><br>
											<br>
											Por supuesto que una relaci&#243;n de 1 Metropunto por 1 peso es sencilla, pero tambi&#233;n hace
											que sea m&#225;s f&#225;cil para sus clientes determinar cu&#225;nto dinero llevan gastado en su compa&#241;&#237;a
											al mirar la cantidad de Metropuntos que han acumulado.
											Honestamente, no hay necesidad de que sus clientes se alarmen por todo lo que lo adoran
											y porque gastan montones de dinero en su tienda, por lo que quiz&#225;s ser&#237;a conveniente que
											se tratara de un n&#250;mero equis &#161;que les hiciera m&#225;s dif&#237;cil darse cuenta de que son adictos
											a las compras!
											Recomendamos un m&#237;nimo de 100 si va a estar contando los centavos, pero tambi&#233;n puede ser
											sencillamente 3 &#243; 5 &#243; 20 si no le molesta redondear los centavos al valor en Metropuntos m&#225;s cercano.<br>
											<br>
											<strong>Una vez que elija el n&#250;mero, ingr&#233;selo en la casilla de <span class=\"orangeH\">Metropuntos por peso</span> arriba.</strong><br>";

$lang['manage_import_trans_instrctns_2']        	= 'Si usted esta importando <b>transacciones de dinero</b> a una campa&#241;a basada
																		en Metropuntos, o importando una lista de visitas en una campa&#241;a gane por evento,
																		aseg&#250;rese de comprobar la "Convertir monto de la transacci&#243;n a lo que la campa&#241;a haga seguimiento?" casilla
																		de verificaci&#243;n. Si usted esta importando cantidades de Metropuntos personalizadas o
																		cantidades de dinero personalizadas, asegurese de dejar la casilla vac&#237;a.';

$lang['report_audits_totals_points']            = "Totales de Localidad - Metropuntos";

$lang['api_error_campaign_points_ratio']        = 'Error na relaci&oacute;n Metropuntos-por-pseo del programa';

$lang['coalition_points_program']                = "Coalici&oacute;n Programa de Metropuntos";

?>
