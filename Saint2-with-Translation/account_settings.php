

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if IE 10]> <html lang="en" class="ie10"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<?php include('include/header.php');
/*$select_user_info = "Select * from tbl_marchent where username='".$data['user_name']."'";
$result = mysql_query($select_user_info);
$row = mysql_fetch_array($result);*/ ?>
	<!-- BEGIN HEADER -->
	<?php include('include/menu.php');?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="body">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<?php include('include/small_header.php');?>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">  
               
                </div> 
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-user"></i><?php echo $lang['Account'].' '.$lang['info'];?></h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                <!-- BEGIN FORM -->
                                <form action="update_user.php" id="form1" name="form1" class="form-horizontal" method="post">
                                
                                <h5><?php echo $lang['account_biz_info_header'];?></h5>
                              <div class="control-group">
                                 <label class="control-label" for="b_name"><?php echo $lang['account_label_biz_name'];?></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="b_name" name="b_name" value="<?php echo $parse_array['response']['account']['biz_name'];?>"/>
                                 </div>
                              </div>
                              
                             
                              <div class="control-group">
                                 <label class="control-label" for="adr1"><?php echo $lang['account_label_biz_address1'];?></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="adr1" name="adr1" value="<?php if(!empty($parse_array['response']['account']['biz_address1'])){ echo $parse_array['response']['account']['biz_address1'];}else {echo '';}?>"/>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="adr2"><?php echo $lang['account_label_biz_address2'];?></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="adr2" name="adr2" value="<?php if(!empty($parse_array['response']['account']['biz_address2'])){ echo $parse_array['response']['account']['biz_address2'];}else {echo '';}?>"/>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="city"><?php echo $lang['label_city'];?></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="city" name="city" value="<?php if(!empty($parse_array['response']['account']['biz_city'])){ echo $parse_array['response']['account']['biz_city'];}else {echo '';}?>"/>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="state"><?php echo $lang['label_state'];?></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="state" name="state" value="<?php if(!empty($parse_array['response']['account']['biz_state'])){ echo $parse_array['response']['account']['biz_state'];}else {echo '';}?>"/>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="cntry"><?php echo $lang['Country'];?></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="cntry" name="cntry" value="<?php if(!empty($parse_array['response']['account']['biz_country'])){ echo $parse_array['response']['account']['biz_country'];}else {echo '';}?>"/>
                                 </div>
                              </div>
                              
                              <h5>Contact Information</h5>
                              
                              <div class="control-group">
                                 <label class="control-label" for="user_first_name"><?php echo $lang['label_first_name'];?></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="user_first_name" name="user_first_name" value="<?php echo $parse_array['response']['account']['contact_first_name'];?>"/>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="user_last_name"><?php echo $lang['label_last_name'];?></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="user_last_name" name="user_last_name" value="<?php echo $parse_array['response']['account']['contact_last_name'];?>"/>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="email"><?php echo $lang['label_email'];?></label>
                                 <div class="controls">
                                 	
                                    <input type="text" class="span6" id="email" name="email" value="<?php echo $parse_array['response']['account']['contact_email'];?>"/>
                                    <span class="help-inline" id="email_label" style="color:#F00"></span>
                                 </div>
                              </div>
                              
                              
                              <div class="control-group">
                                 <label class="control-label" for="phno"><?php echo $lang['label_phone'];?></label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="phno" name="phno" value="<?php if(!empty($parse_array['response']['account']['contact_phone'])){ echo $parse_array['response']['account']['contact_phone'];}else {echo '';}?>" maxlength="20"/>
                                    <span class="help-inline"><?php echo $lang['user_restrict_20_char'];?></span>
                                 </div>
                              </div>
                              <!--div class="control-group">
                                 <label class="control-label" for="input1">User Pin</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="input1" />
                                 </div>
                              </div-->
                              
                              <h5><?php echo $lang['account_owner_login_header'];?></h5>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1"><?php echo $lang['label_owner_id'];?></label>
                                 <div class="controls" style="margin-top:3px;">
                                    <?php echo $parse_array['response']['account']['account_id'];?>
                                    <input type="hidden" name="owner_id" value="<?php echo $parse_array['response']['account']['account_id'];?>" />
                                    
                                 </div>
                              </div>
                              
                                                         
                              <div class="control-group">
                                 <label class="control-label" for="password"><?php echo $lang['label_password_new'];?></label>
                                 <div class="controls">
                                    <input type="password" class="span6" id="password" name="password" value=""/>
                                    <span class="help-inline"><?php echo $lang['optional'];?></span>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="c_password"><?php echo $lang['label_password_retype'];?></label>
                                 <div class="controls">
                                 
                                    <input type="password" class="span6" id="c_password" name="c_password" value=""/>
									<span class="help-inline" id="c_pwd_label" style="color:#F00"></span>
	                                 </div>
                                     <div style="display:none"><select class="span6" data-placeholder="Display Language" name="lang" id="lang"></select></div>
                              </div>
                              
                              <h5><?php echo $lang['label_localization'];?></h5>
                              
                              <div class="control-group">
                              	<label class="control-label" for="c_symbol"><?php echo $lang['label_currency_symbol'];?></label>
                                <div class="controls">
                                <select class="span6" data-placeholder="Choose Your Currency" tabindex="1" name="c_symbol" id="c_symbol">
													<option value ="AFN">Afghani - &#x60B;</option>
													<option value ="DZD">Algerian dinar - &#x62F;.&#x62C;</option>
													<option value ="ARS">Argentine peso - $</option>
													<option value ="AMD">Armenian dram - &#x564;&#x580;.</option>
													<option value ="AWG">Aruban guilder - &fnof;</option>
													<option value ="AUD">Australian dollar - $</option>
													<option value ="AZN">Azerbaijanian manat - m</option>
													<option value ="BSD">Bahamian dollar - $</option>
													<option value ="BHD">Bahraini dinar - &#x628;.&#x62F;</option>
													<option value ="THB">Baht - &#xE3F;</option>
													<option value ="PAB">Balboa - B/.</option>
													<option value ="BDT">Bangladeshi taka - &#x9F3;</option>
													<option value ="BBD">Barbados dollar - $</option>
													<option value ="BYR">Belarussian ruble - Br</option>
													<option value ="BZD">Belize dollar - $</option>
													<option value ="BMD">Bermudian dollar - $</option>
													<option value ="BOB">Boliviano - Bs.</option>
													<option value ="BND">Brunei dollar - $</option>
													<option value ="BGN">Bulgarian lev - &#x43B;&#x432;</option>
													<option value ="BIF">Burundian franc - Fr</option>
													<option value ="XOF">CFA Franc BCEAO - Fr</option>
													<option value ="XAF">CFA franc BEAC - Fr</option>
													<option value ="XPF">CFP franc - Fr</option>
													<option value ="CAD">Canadian dollar - $</option>
													<option value ="CVE">Cape Verde escudo - Esc</option>
													<option value ="KYD">Cayman Islands dollar - $</option>
													<option value ="GHS">Cedi - &#x20B5;</option>
													<option value ="CLP">Chilean peso - $</option>
													<option value ="COP">Colombian peso - $</option>
													<option value ="KMF">Comoro franc - Fr</option>
													<option value ="BAM">Convertible marks - &#x41A;&#x41C;</option>
													<option value ="NIO">Cordoba oro - C$</option>
													<option value ="CRC">Costa Rican colon - &#x20A1;</option>
													<option value ="HRK">Croatian kuna - kn</option>
													<option value ="CUP">Cuban peso - $</option>
													<option value ="CZK">Czech koruna - K&#x10D;</option>
													<option value ="GMD">Dalasi - D</option>
													<option value ="DKK">Danish krone - kr</option>
													<option value ="MKD">Denar - &#x434;&#x435;&#x43D;</option>
													<option value ="DJF">Djibouti franc - Fr</option>
													<option value ="STD">Dobra - Db</option>
													<option value ="DOP">Dominican peso - $</option>
													<option value ="XCD">East Caribbean dollar - $</option>
													<option value ="EGP">Egyptian pound - &#x62C;.&#x645;</option>
													<option value ="EUR">Euro - &euro;</option>
													<option value ="FKP">Falkland Islands pound - &pound;</option>
													<option value ="FJD">Fiji dollar - $</option>
													<option value ="HUF">Forint - Ft</option>
													<option value ="CDF">Franc Congolais - Fr</option>
													<option value ="GIP">Gibraltar pound - &pound;</option>
													<option value ="PYG">Guarani - &#x20B2;</option>
													<option value ="GNF">Guinea franc - Fr</option>
													<option value ="GYD">Guyana dollar - $</option>
													<option value ="HTG">Haiti gourde - G</option>
													<option value ="HKD">Hong Kong dollar - $</option>
													<option value ="UAH">Hryvnia - &#x20B4;</option>
													<option value ="ISK">Iceland krona - kr</option>
													<option value ="INR">Indian rupee - &#x20A8;</option>
													<option value ="IDR">Indonesian Rupiah - Rp</option>
													<option value ="IRR">Iranian rial - &#xFDFC;</option>
													<option value ="IQD">Iraqi dinar - &#x639;.&#x62F;</option>
													<option value ="JMD">Jamaican dollar - $</option>
													<option value ="JPY">Japanese yen - &yen;</option>
													<option value ="JOD">Jordanian dinar - J.D.</option>
													<option value ="KES">Kenyan shilling - Sh</option>
													<option value ="PGK">Kina - K</option>
													<option value ="LAK">Kip - &#x20AD;</option>
													<option value ="KWD">Kuwaiti dinar - &#x62F;.&#x643</option>
													<option value ="MWK">Kwacha - MK</option>
													<option value ="ZMK">Kwacha - ZK</option>
													<option value ="AOA">Kwanza - Kz</option>
													<option value ="MMK">Kyat - K</option>
													<option value ="GEL">Lari - &#x10DA;</option>
													<option value ="LVL">Latvian lats - Ls</option>
													<option value ="LBP">Lebanese pound - LBP</option>
													<option value ="ALL">Lek - L</option>
													<option value ="HNL">Lempira - L</option>
													<option value ="SLL">Leone - Le</option>
													<option value ="LRD">Liberian dollar - $</option>
													<option value ="LYD">Libyan dinar - &#x644;.&#x62F;</option>
													<option value ="SZL">Lilangeni - L</option>
													<option value ="LTL">Lithuanian litas - Lt</option>
													<option value ="LSL">Loti - L</option>
													<option value ="MGA">Malagasy ariary - $</option>
													<option value ="MYR">Malaysian ringgit - RM</option>
													<option value ="TMM">Manat - m</option>
													<option value ="MUR">Mauritius rupee - &#x20A8;</option>
													<option value ="MZN">Metical - MTn</option>
													<option value ="MXN">Mexican peso - $</option>
													<option value ="MDL">Moldovan leu - L</option>
													<option value ="MAD">Moroccan dirham - &#x62F;.&#x625;</option>
													<option value ="NGN">Naira - &#x20A6;</option>
													<option value ="ERN">Nakfa - Nfk</option>
													<option value ="NAD">Namibian dollar - $</option>
													<option value ="NPR">Nepalese rupee - &#x20A8;</option>
													<option value ="ANG">Netherlands Antillian guilder - &fnof;</option>
													<option value ="ILS">New Israeli shekel - &#x20AA;</option>
													<option value ="TWD">New Taiwan dollar - $</option>
													<option value ="TRY">New Turkish lira - &#x20A4;</option>
													<option value ="NZD">New Zealand dollar - $</option>
													<option value ="BTN">Ngultrum - &#x20AB;</option>
													<option value ="KPW">North Korean won - &#x20A9;</option>
													<option value ="NOK">Norwegian krone - kr</option>
													<option value ="PEN">Nuevo sol - S/.</option>
													<option value ="MRO">Ouguiya - UM</option>
													<option value ="TOP">Pa&#x27;anga - T$</option>
													<option value ="PKR">Pakistan rupee - Rs.</option>
													<option value ="MOP">Pataca - P</option>
													<option value ="UYU">Peso Uruguayo - $</option>
													<option value ="PHP">Philippine peso - &#x20B1;</option>
													<option value ="GBP">Pound sterling - &pound;</option>
													<option value ="BWP">Pula - P</option>
													<option value ="QAR">Qatari rial - &#x631;.&#x642;</option>
													<option value ="GTQ">Quetzal - Q</option>
													<option value ="BRL">Real - R$</option>
													<option value ="CNY">Renminbi - &yen;</option>
													<option value ="OMR">Rial Omani - &#x631;.&#x639;.</option>
													<option value ="KHR">Riel - &#x17DB;</option>
													<option value ="RON">Romanian new leu - L</option>
													<option value ="MVR">Rufiyaa - &#x783;.</option>
													<option value ="RUB">Russian ruble - &#x440;.</option>
													<option value ="RWF">Rwanda franc - Fr</option>
													<option value ="SHP">Saint Helena pound - &pound;</option>
													<option value ="WST">Samoan tala - T</option>
													<option value ="SAR">Saudi riyal - &#x631;.&#x633;</option>
													<option value ="RSD">Serbian dinar - &#x434;&#x438;&#x43D;.</option>
													<option value ="SCR">Seychelles rupee - &#x20A8;</option>

													<option value ="SGD">Singapore dollar - $</option>
													<option value ="SKK">Slovak koruna - Sk</option>
													<option value ="SBD">Solomon Islands dollar - $</option>
													<option value ="SOS">Somali shilling - Sh</option>
													<option value ="TJS">Somoni - &#x405;&#x41C;</option>
													<option value ="ZAR">South African rand - R</option>
													<option value ="KRW">South Korean won - &#x20A9;</option>
													<option value ="LKR">Sri Lanka rupee - &#xBB0;&#xBC2;</option>
													<option value ="SDG">Sudanese pound - &pound;</option>
													<option value ="SRD">Surinam dollar - $</option>
													<option value ="SEK">Swedish krona - kr</option>
													<option value ="CHF">Swiss franc - CHF</option>
													<option value ="SYP">Syrian pound - &#x644;.&#x633;</option>
													<option value ="TZS">Tanzanian shilling - Sh</option>
													<option value ="KZT">Tenge - &#x3012;</option>
													<option value ="TTD">Trinidad and Tobago dollar - $</option>
													<option value ="MNT">Tugrik - &#x20AE;</option>
													<option value ="TND">Tunisian dinar - &#x62F;.&#x62A;</option>
													<option value ="USD" selected="selected">US dollar - $</option>
													<option value ="UGX">Uganda shilling - Sh</option>
													<option value ="AED">United Arab Emirates dirham - AED</option>
													<option value ="VUV">Vatu - Vt</option>
													<option value ="VEF">Venezuelan bolivar - Bs</option>
													<option value ="YER">Yemeni rial - &#xFDFC;</option>
													<option value ="ZWD">Zimbabwe dollar - $</option>
													<option value ="PLN">Zloty - z&#x142;</option>
                                 
                                    </select>
                                </div>
                              </div>
                              
								 <div class="control-group">
                              	<label class="control-label" for="time_zone"><?php echo $lang['label_timezone'];?></label>
                                <div class="controls">
                                <select class="span6" data-placeholder="Choose a Timezone" name="user_timezone" id="user_timezone">
                                      <option value='1'>(GMT-12:00) International Date Line West</option>
												<option value='2'>(GMT-11:00) Midway Island Samoa</option>
												<option value='3'>(GMT-10:00) Hawaii</option>
												<option value='4'>(GMT-09:00) Alaska</option>
												<option value='5'>(GMT-08:00) Pacific Time (US & Canada); Tijuana</option>
												<option value='6'>(GMT-07:00) Arizona</option>
												<option value='7'>(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
												<option value='8'>(GMT-07:00) Mountain Time (US & Canada)</option>
												<option value='9'>(GMT-06:00) Central America</option>
												<option value='10'>(GMT-06:00) Central Time (US & Canada)</option>
												<option value='11'>(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
												<option value='12'>(GMT-06:00) Saskatchewan</option>
												<option value='13'>(GMT-05:00) Bogota, Lime, Quito</option>
												<option value='14'>(GMT-05:00) Eastern Time (US & Canada)</option>
												<option value='15'>(GMT-05:00) Indiana (East)</option>
												<option value='16'>(GMT-04:00) Atlantic Time (Canada)</option>
												<option value='17'>(GMT-04:00) Caracas, La Paz</option>
												<option value='18'>(GMT-04:00) Santiago</option>
												<option value='19'>(GMT-03:30) Newfoundland</option>
												<option value='20'>(GMT-03:00) Brasilia</option>
												<option value='21'>(GMT-03:00) Buenos Aires, Georgetown</option>
												<option value='22'>(GMT-03:00) Greenland</option>
												<option value='23'>(GMT-02:00) Mid-Atlantic</option>
												<option value='24'>(GMT-01:00) Azores</option>
												<option value='25'>(GMT-01:00) Cape Verde Is.</option>
												<option value='26'>(GMT) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
												<option value='27'>(GMT) Casablanca, Monrovia</option>
												<option value='28'>(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
												<option value='29'>(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
												<option value='30'>(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
												<option value='31'>(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
												<option value='32'>(GMT+01:00) West Central Africa</option>
												<option value='33'>(GMT+02:00) Athens, Istanbul, Minsk</option>
												<option value='34'>(GMT+02:00) Bucharest</option>
												<option value='35'>(GMT+02:00) Cairo</option>
												<option value='36'>(GMT+02:00) Harare, Pretoria</option>
												<option value='37'>(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
												<option value='38'>(GMT+02:00) Jerusalem</option>
												<option value='39'>(GMT+03:00) Baghdad</option>
												<option value='40'>(GMT+03:00) Kuwait, Riyadh</option>
												<option value='41'>(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>

												<option value='42'>(GMT+03:00) Nairobi</option>
												<option value='43'>(GMT+03:30) Tehran</option>
												<option value='44'>(GMT+04:00) Abu Dhabi, Muscat</option>
												<option value='45'>(GMT+04:00) Baku, Tbilisi, Yerevan</option>
												<option value='46'>(GMT+04:30) Kabul</option>
												<option value='47'>(GMT+05:00) Ekaterinburg</option>
												<option value='48'>(GMT+05:00) Islamabad, Karachi, Tashkent</option>
												<option value='49'>(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
												<option value='50'>(GMT+05:45) Kathmandu</option>
												<option value='51'>(GMT+06:00) Almaty, Novosibirsk</option>
												<option value='52'>(GMT+06:00) Astana, Dhaka</option>
												<option value='53'>(GMT+06:00) Sri Jayawardenepura</option>
												<option value='54'>(GMT+06:30) Rangoon</option>
												<option value='55'>(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
												<option value='56'>(GMT+07:00) Krasnoyarsk</option>
												<option value='57'>(GMT+08:00) Beijing, Chongging, Hong Kong, Urumgi</option>
												<option value='58'>(GMT+08:00) Irkutsk, Ulaan Bataar</option>
												<option value='59'>(GMT+08:00) Kuala Lumpur, Singapore</option>
												<option value='60'>(GMT+08:00) Perth</option>
												<option value='61'>(GMT+08:00) Taipei</option>
												<option value='62'>(GMT+09:00) Osaka, Sapporo, Tokyo</option>
												<option value='63'>(GMT+09:00) Seoul</option>
												<option value='64'>(GMT+09:00) Yakutsk</option>
												<option value='65'>(GMT+09:30) Adelaide</option>
												<option value='66'>(GMT+09:30) Darwin</option>
												<option value='67'>(GMT+10:00) Brisbane</option>
												<option value='68'>(GMT+10:00) Canberra, Melbourne, Sydney</option>
												<option value='69'>(GMT+10:00) Guam, Port Moresby</option>
												<option value='70'>(GMT+10:00) Hobart</option>
												<option value='71'>(GMT+10:00) Vladivostok</option>
												<option value='72'>(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
												<option value='73'>(GMT+12:00) Auckland, Wellington</option>
												<option value='74'>(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
												<option value='75'>(GMT+13:00) Nuku'alofa</option>
											
                                       
                                 
                                    </select>
                                </div>
                              </div>     
                              
                                           
                              
                              <!--div class="control-group">
                                 <label class="control-label" >File Upload</label>
                                 <div class="controls">
                                    <input type="file"/><br />
                                    Upload only - .jpg, .png, .gif Max size - 500 x 500 pxl
                                 </div>
                              </div-->
                              
                             
                              
                              <div class="form-actions">
                                 <button type="button" class="btn btn-success" onclick="submit_form()"><?php echo $lang['nav_save_changes'];?></button>
                                   <button type="button" class="btn" onClick="resetme()"><?php echo $lang['nav_cancel']	;?></button>
                              </div>
                              
                              <!-- END FORM -->
									
                                            </div>
                                    
                                    </div>
                                    
                                    
                                    
								</div>
                                
                                
                                
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
                            
                            
                                   
                                    
                            
                            
						</div>
					</div>
					
				
				<!-- END PAGE CONTENT-->
			</div>
			<!-- END PAGE CONTAINER-->
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<?php include('include/footer.php') ;?>