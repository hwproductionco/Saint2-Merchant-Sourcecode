<?php include('include/header.php'); ?>
	<!-- BEGIN HEADER -->
	<?php include('include/menu.php');?>
    <!-- END HEADER -->
	
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
				<?php include('include/small_header.php'); ?>
                <!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div id="page" class="dashboard">  
               
                </div> 
<div class="row-fluid">
						<div class="span12">
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
							<div class="widget">
								<div class="widget-title">
									<h4><i class="icon-user"></i>Add New User</h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                <!-- BEGIN FORM -->
                                
                                <h5>User Information</h5>
                                <form action="add_user.php" id="add_user_form" class="form-horizontal" method="post">
                              <div class="control-group">
                                 <label class="control-label" for="input1">Username</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="username" name="username" maxlength="20" />
                                    <span class="help-inline">20 Characters Max</span>
                                    <span class="help-inline" id="u_name" style="color:#F00"></span>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1">Password</label>
                                 <div class="controls">
                                    <input type="password" class="span6" id="password" name="password" maxlength="20" />
                                    <span class="help-inline">20 Characters Max</span>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1">Confirm Password</label>
                                 <div class="controls">
                                    <input type="password" class="span6" id="c_password" name="c_password" maxlength="20" />
                                    <span class="help-inline" id="c_pwd_label" style="color:#F00"></span>
                                    
                                 </div>
                              </div>
                              
                             
                              <div class="control-group">
                                 <label class="control-label" for="input1">First Name</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="f_name" name="f_name" />
                                    <span class="help-inline">Optional</span>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1">Last Name</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="l_name" name="l_name" />
                                    <span class="help-inline">Optional</span>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="input1">Additional Info</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="info" name="info" />
                                    <span class="help-inline">Optional</span>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="input1">Choose a PIN</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="pin" name="pin" />
                                    <span class="help-inline">Optional: For terminals, mainly</span>
                                 </div>
                              </div>
                              
                              
                              
                              <!--div class="control-group">
                                 <label class="control-label" for="input1">User Pin</label>
                                 <div class="controls">
                                    <input type="text" class="span6" id="input1" />
                                 </div>
                              </div-->
                              
                              <h5>Localization</h5>
                              
                              <div class="control-group">
                              	<label class="control-label" for="input1">Language Selector</label>
                                <div class="controls">
                                <select class="span6" data-placeholder="Choose a Language" tabindex="1" name="lang" id="lang">
                                      <option value="DK">Dansk</option>
				<option value="DE">Deutsch</option>
				<option value="EN">English</option>
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
                              	<label class="control-label" for="input1">Timezone Selector</label>
                                <div class="controls">
                                <select class="span6" data-placeholder="Choose a Language" tabindex="1" name="i_time" id="i_time">
                                       <option value="">Choose a Timezone</option>
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
                              
                              <h5>User Role</h5>
                              
                              <p>Please select a role for this use<br />
                               <a href="#myModal1" role="button" data-toggle="modal">More Info About Roles</a></p>
                              
                              <div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
											<h3 id="myModalLabel1">User Roles</h3>
										</div>
										<div class="modal-body">
											<p><strong>Administrator</strong>: Has access to everything. </p>
                                            
                                            <p><strong>Manager</strong>: Has access to everything within allowed campaigns and limited access to account-wide settings (Can't view billing info, can generate reports, and can add or edit but not delete account users.)</p>
                                            
                                            <p><strong>Agency Client</strong>: Manager, with ability to edit campaign settings, users, and run reports, but not the ability to add campaigns, account users, nor delete or import customers.</p>
                                            
                                            <p><strong>Agency Client + Imports</strong>: Manager, with ability to edit campaign settings, users, run reports, and manage customers (delete, import), but not the ability to add campaigns or account users.</p>
                                            
                                            <p><strong>Campaign Manager</strong>: Has access to everything within allowed campaigns and limited access to account-wide settings (Can generate reports, can't view billing info, can't manage users, can't create or delete campaigns.)</p>
                                            
                                            <p><strong>Associate Manager</strong>: Can manage rewards and promotions within allowed campaigns, and manage all aspects of customer information and visits.</p>
                                            
                                            <p><strong>Clerk</strong>: Within allowed campaigns, can create & edit customers's info (but not change their card #, if assigned) and only record & redeem customer visits (but not delete any.)</p>
                                            
                                            <p><strong>Temp</strong>: Within allowed campaigns, can only create new customers, and only record customer visits.</p>
                                            
                                            <p><strong>Fullfillment Contractor</strong>: Within allowed campaigns, can only redeem customer rewards.</p>
                                            
                                            <p><strong>Accountant</strong>: Can generate reports, view account billing info and campaign settings, but cannot view user and customer info.</p>
                                            
                                            <p><strong>Observer</strong>: Can view user & customer info and certain campaign settings (rewards and promotions.)</p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Close</button>
										</div>
									</div>
                              
                              <div class="control-group">
								<div class="controls">
                                <select class="span6" data-placeholder="Choose a Role" name="role" id="role" tabindex="1">
                                       <option value="">Choose a Role</option>
                                       <option value="A">Administrator</option>
                                       <option value="M">Manager</option>
                                       <option value="S">Associate Manager</option>
                                       <option value="C">Custom Manager</option>
                                       <option value="G">Agency Client</option>
                                       <option value="I">Agency Client + Imports</option>
                                       <option value="K">Clerk</option>
                                       <option value="P">Temp</option>
                                       <option value="F">Fullfillment Contractor</option>
                                       <option value="C">Accountant</option>
                                       <option value="O">Observer</option>
                                      
                                    </select>
                                </div>
                              </div>        
                              
                                <h5>Select Which Campaign This User Is Allowed Access To</h5>
                                
                                <p>(Administrators automatically have access to all campaigns)</p>
                              
                              <div class="control-group">
                                       <div class="controls">
                                       <?php
									   		
									   		$data['type'] = 'campaigns_list';
											$campaign_list_contents	=	 submit_cURL ($data);
											$parse_array_campaign_list = array();
											$parse_array_campaign_list = xml2array($campaign_list_contents, $get_attributes=1, $priority = 'tag');
											//print_r($parse_array_campaign_list);
											if(!empty($parse_array_campaign_list['response']['campaigns']))
											{
												
                                            //is_array($parse_array_customer_list['response']['customer']) ? 'Array' : 'not an Array';
											if(empty($parse_array_campaign_list['response']['campaigns']['campaign'][0]))
											{
									    ?>
                                              <label class="checkbox line">
                                              <input type="checkbox" name="camp[]" id="check1" value="<?php echo $parse_array_campaign_list['response']['campaigns']['id'];?>" /><?php echo $parse_array_campaign_list['response']['campaigns']['name'];?>
                                              </label>
                                              <?php }
											  else
											  {
												foreach($parse_array_campaign_list['response']['campaigns']['campaign'] as $campaign)
												{  
												?>
                                                <label class="checkbox line">
                                              <input type="checkbox" name="camp[]" id="check1" value="<?php echo $campaign['id'];?>" /><?php echo $campaign['name'];?>
                                              </label>
											  <?php }}
											  
											  }?>
                                          
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
                                 <button type="button" class="btn btn-success" onClick="submit_add_user(1)"><i class="icon-plus icon-white"></i> Add User</button>
                                 <button type="button" class="btn" onclick="reset_values()">Cancel</button>
                              </div>
                              
                              <!-- END FORM -->
									
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
	<?php include('include/footer.php') ;?>