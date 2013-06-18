<?php include('include/header.php'); ?>
	<!-- BEGIN HEADER -->
	<?php include('include/menu.php');?>
	<!-- END HEADER -->
	<!-- BEGIN CONTAINER -->
	
		<!-- BEGIN SIDEBAR -->
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
									<h4><i class="icon-user"></i><?php echo $lang['customer_new_header'];?></h4>
															
								</div>
								<div class="widget-body">
                                <div class="row-fluid">
                                <div class="span12">
                                <!-- BEGIN FORM -->
                                
                                 <h5><?php echo  'Customer '.$lang['info'];?></h5>
                                 
                                <form action="add_customer.php" class="form-horizontal" method="post" name="form3" id="form3">
                               <div class="control-group">
                               <label class="control-label" for="input1">Card Number</label>
                                 <div class="controls">
                                    <div class="input-prepend">
                                       <span class="add-on"><i class="icon-credit-card"></i></span><input id="card" name="card" type="text" placeholder="Card Number"/><a href="#" role="button" class="btn btn-mini btn-info" data-toggle="modal" style="margin-left:10px; margin-top:5px;" onclick="generate_card_number()"><?php echo $lang['customer_new_random_id'];?></a>			 
                                    </div>
                                 </div>
                              </div>
                              
                              
                              <div class="control-group">
                                 <label class="control-label" for="f_name"><?php echo $lang['label_first_name'];?></label>
                                 <div class="controls">
                                    <input type="text" id="f_name" name="f_name" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="l_name"><?php echo $lang['label_last_name'];?></label>
                                 <div class="controls">
                                    <input type="text" id="l_name" name="l_name" style="width:235px;" />
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="phno"><?php echo $lang['label_phone'];?></label>
                                 <div class="controls">
                                    <div class="input-prepend">
                                       <span class="add-on"><i class="icon-phone"></i></span><input  id="phno" name="phno" type="text" placeholder="Phone Number" maxlength="20" />			 
                                    </div>
                                 </div>
                              </div>
                              
                              <div class="control-group">
                                 <label class="control-label" for="email"><?php echo $lang['label_email'];?></label>
                                 <div class="controls">
                                    <div class="input-prepend">
                                       <span class="add-on">@</span><input  id="email" name="email" type="text" placeholder="Email Address" />
                                       			 
                                    </div>
                                    <span class="help-inline" id="email_label" style="color:#F00"></span>
                                 </div>
                              </div>
                              
                                <div class="control-group">
                                 <label class="control-label" for="DOB"><?php echo $lang['label_date'];?></label>
                                 <div class="controls">
                                    <div class="input-prepend">
                                       <span class="add-on"><i class="icon-calendar"></i></span><input  id="DOB" name="DOB" type="text" placeholder="Birthday" />			 
                                    </div>
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="street1"><?php echo $lang['account_label_biz_address1'];?></label>
                                 <div class="controls">
                                    <input type="text" id="street1" name="street1" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="street2"><?php echo $lang['account_label_biz_address2'];?></label>
                                 <div class="controls">
                                    <input type="text" id="street2" name="street2" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="city"><?php echo $lang['label_city'];?></label>
                                 <div class="controls">
                                    <input type="text" id="city" name="city" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="state"><?php echo $lang['label_state'];?></label>
                                 <div class="controls">
                                    <input type="text" id="state" name="state" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="ccntry"><?php echo $lang['Country'];?></label>
                                 <div class="controls">
                                    <input type="text" id="cntry" name="cntry" style="width:235px;" />
                                 </div>
                              </div>
                              
                               <div class="control-group">
                                 <label class="control-label" for="zip"><?php echo $lang['label_zip'];?></label>
                                 <div class="controls">
                                    <input type="text" id="zip" name="zip" style="width:235px;" />
                                 </div>
                              </div>
                              <?php 
							  	$data['API'] = 1.5;
								$data['user_api_key'] =  $GLOBALS['api_key'];
								$data['type'] = 'manage_fields';
								$data['action'] = 'list';
								$fields_contents	=	 submit_cURL ($data);
				
								$parse_array_fields = array();
								$parse_array_fields = xml2array($fields_contents, $get_attributes=1, $priority = 'tag');
								//print_r($parse_array_fields);
								$count = 0;
								//$parse_array_fields['response']['account']['fields']['field'][1]['name'];
							    if(!empty($parse_array_fields['response']['account']['fields']))
								{
									 foreach($parse_array_fields['response']['account']['fields']['field'] as $p_array)
									{
										if($p_array['show'] == 'Y' && (substr($p_array['name'], 0, -1) == 'custom_field_' || substr($p_array['name'], 0, -1) == 'custom_field_1' || substr($p_array['name'], 0, -1) == 'custom_field_2' || substr($p_array['name'], 0, -1) == 'custom_field_3' || substr($p_array['name'], 0, -1) == 'custom_field_4' || substr($p_array['name'], 0, -1) == 'custom_field_5' || substr($p_array['name'], 0, -1) == 'custom_field_6' || substr($p_array['name'], 0, -1) == 'custom_field_7' || substr($p_array['name'], 0, -1) == 'custom_field_8' || substr($p_array['name'], 0, -1) == 'custom_field_9')) 
										{
											
							   ?>
                                          <div class="control-group">
                                             <label class="control-label" for="<?php echo $p_array['name'];?>"><?php echo $p_array['label'];?></label>
                                             <div class="controls">
                                             <?php if($p_array['name'] == 'custom_field_1') { ?>
                                             	<input type="text" id="custom_field" name="custom_field" value="" style="width:235px;" />
                                                <?php } ?>
                                             <?php if($p_array['type'] == 'List') { ?>
                                             
                                              <?php if(!empty($p_array['choices']['choice'])){if($p_array['choices']['choice'][0]==''){echo $p_array['choices']['choice'];}else {foreach($p_array['choices']['choice'] as $choices){?>
										<input type="checkbox" id="<?php echo $p_array['name'];?>" name="<?php echo $p_array['name'].'[]';?>" value="<?php echo $choices;?>" /><?php echo $choices;?>
										
									<?	}}}  ?>
                                                
                                                <?php } else if($p_array['type'] == 'Pick'){ ?>
										<select name="<?php echo $p_array['name'];?>" id="<?php echo $p_array['name'];?>"><option value="">Select Option</option><?php if(!empty($p_array['choices']['choice'])){if($p_array['choices']['choice'][0]==''){echo $p_array['choices']['choice'];}else {foreach($p_array['choices']['choice'] as $choices){?>
										
										<option value="<?php echo $choices;?>" ><?php echo $choices;?></option>
									<?	} }} ?></select> 
												<?php }else if($p_array['name'] != 'custom_field_1'){ ?>
                                                <input type="text" id="<?php echo $p_array['name'];?>" name="<?php echo $p_array['name'];?>" value="" style="width:235px;" />
                                                <?php } ?>
                                             </div>
                                          </div>
                                          
                                          
                                          <?php $count++; }}}?>
                                          
                                          
                              <h5><?php echo $lang['customer_new_other_campaigns'];?></h5>
                              
                              <div class="control-group">
                                       <div class="controls">
                                       <?php
									   		
									   		$data['type'] = 'campaigns_list';
											$campaign_list_contents	=	 submit_cURL ($data);
											$parse_array_campaign_list = array();
											$parse_array_campaign_list = xml2array($campaign_list_contents, $get_attributes=1, $priority = 'tag');
											//print_r($parse_array_campaign_list);
											if(count($parse_array_campaign_list['response']['campaign'])!=0)
											{
												
                                            //is_array($parse_array_customer_list['response']['customer']) ? 'Array' : 'not an Array';
											if($parse_array_campaign_list['response']['campaign'][0] == '')
											{
									    ?>
                                              <label class="checkbox line">
                                              <input type="checkbox" name="camp[]" id="check1" value="<?php echo $parse_array_campaign_list['response']['campaign']['id'];?>" /><?php echo $parse_array_campaign_list['response']['campaign']['name'];?>
                                              </label>
                                              <?php }
											  else
											  {
												foreach($parse_array_campaign_list['response']['campaign'] as $campaign)
												{  
												?>
                                                <label class="checkbox line">
                                              <input type="checkbox" name="camp[]" id="check1" value="<?php echo $campaign['id'];?>" /><?php echo $campaign['name'];?>
                                              </label>
											  <?php }}
											  
											  }?>
                                          
                                       </div>
                                    </div>
                             
                              
                              <div class="form-actions">
                                 <button type="button" class="btn btn-success" onclick="submit_form3()"><i class="icon-plus icon-white"></i> <?php echo $lang['nav_add'];?></button>
                                 <button type="button" class="btn" onclick="resetme_customer()"><?php echo $lang['nav_cancel'];?></button>
                              </div>
                              </form>
                              
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