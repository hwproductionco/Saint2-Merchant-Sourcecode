<?php include('include/header.php');

 ?>
	<!-- BEGIN HEADER -->
	<?php include('include/menu.php');?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	
		<!-- BEGIN SIDEBAR -->
		
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div id="body">
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="widget-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button">×</button>
					<h3>Widget Settings</h3>
				</div>
				<div class="modal-body">
					<p>Here will be a configuration form</p>
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<!-- BEGIN PAGE CONTAINER-->			
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<?php include('include/small_header.php');
				

				?>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">  
               
                </div> 
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-wrench"></i> My User Info</h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                
                                
                                       <h5>Account Owner</h5>
                              <form action="update_user_info.php" name="form2" id="form2" method="post">
                              <div class="control-group">
                                 <label class="control-label" for="f_name">First Name</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="user_first_name" name="user_first_name" value="<?php echo $parse_array['response']['account']['contact_first_name'];?>" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="l_name">Last Name</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="user_last_name" name="user_last_name" value="<?php echo $parse_array['response']['account']['contact_last_name'];?>"/>
                                    <div style="display:none"><select class="span6" data-placeholder="Choose Your Currency" tabindex="1" name="c_symbol" id="c_symbol"></select></div>
                                 </div>
                              </div>
                              
                              
                                                           
                                                         
                              <div class="control-group">
                                 <label class="control-label" for="password">New Password</label>
                                 <div class="controls">
                                    <input type="password" class="span6" id="password" name="password" />
                                    <span class="help-inline">Optional</span>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="c_password">Re-type New Password</label>
                                 <div class="controls">
                                    <input type="password" class="span6" id="c_password" name="c_password" />
                                    <span class="help-inline" id="c_pwd_label" style="color:#F00"></span>
                                 </div>
                              </div>
                              
                              <h5>Localization</h5>
                              
                              <div class="control-group">
                              	<label class="control-label" for="lang">Display Language</label>
                                <div class="controls">
                                <select class="span6" data-placeholder="Display Language" name="lang" id="lang">
													<option value="DK">Dansk</option>
				<option value="DE">Deutsch</option>
				<option value="EN" selected>English</option>
				<option value="ES">Espa&ntilde;ol</option>
				<option value="FR">Fran&ccedil;ais</option>
				<option value="GE">ქართული ენა</option>
				<option value="IT">Italiano</option>
				<option value="PT-BR">Portugu&ecirc;s (BR)</option>
				<option value="PT">Portugu&ecirc;s (EU)</option>
				<option value="NO">Norsk</option>
				<option value="TR">T&uuml;rk&ccedil;e</option>
				<option value="">----</option>
				<option value="">اللغة العربية</option>
				<option value="">עִברִית</option>
				<option value="">---</option>
				<option value="">Need More? Contact Us.</option>
                                 
                                    </select>
                                </div>
                              </div>
                              
								 <div class="control-group">
                              	<label class="control-label" for="user_timezone">Timezone Selector</label>
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
												<option value='14' selected>(GMT-05:00) Eastern Time (US & Canada)</option>
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
                              
                             
                              
                                      
                               
                               
									
                                </div>
                                
                               
                              
                                    
                                </div>
                                    
                               
                                   
                                    
								</div>
                                
                                
                                <!--div class"row-fluid">
                                	<div class="span12">
                                    	<div style="margin-top:15px; margin-left:15px;">
                                    	                                 <button type="submit" class="btn btn-inverse" onclick="window.location.href='custom_fields.html'"><i class="icon-plus icon-white"></i> Custom Fields</button>
                                                                         </div>

                                    
                                    </div>
                                </div-->
                                
                                
                                <div class="row-fluid">
                                	
                                    <div class="span12">
                                      <div class="form-actions" >
                                 <button type="button" class="btn btn-info" onclick="submit_form1()">Save Changes</button>
                                 <button type="button" class="btn" onClick="resetme1()">Cancel</button>
                                 </form>
                              </div>

                                    
                                    </div>
                                
                                </div>
                                
                                
                                
							</div>
							<!-- END EXAMPLE TABLE PORTLET-->
                            
                            
                                   
                                    
                            
                            
						</div>
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
	<?php include('include/footer.php');